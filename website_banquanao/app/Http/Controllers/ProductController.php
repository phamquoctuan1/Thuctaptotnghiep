<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Color;
use App\Models\Images;
use App\Models\Product;
use App\Models\Size;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct()
    {
        //$categories = Category::with('children')->with('children','children.children')->OrderBy('parent_id', 'ASC')->get();
        $data = [
            'categories' => Category::has('children')
                ->orWhere('parent_id', 0)    //Get only the parents
                ->with(['children' => function ($query) {
                    $query->doesntHave('children');
                }])
                ->select('name', 'id')->orderBy('parent_id', 'asc')
                ->get(),
        ];
        return view('admin.addproduct', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            $newProduct = new Product();
            $newProduct->name = $request->name;
            $newProduct->description = $request->description;
            $newProduct->description = $request->shortdescription;
            $newProduct->price = $request->price;
            $newProduct->discount = $request->discount;
            $newProduct->status = $request->status;

            $category = Category::find($request->categoryid);
            if (!$category) {
                return response()->json(['message' => "Không tìm thấy danh mục"], 404);
            }

            $category->product()->save($newProduct);
            $newColor = new Color();
            $newColor->name = $request->color;
            $newColor->code = $request->code;
            $newProduct->color()->save($newColor);
            $newSize = new Size();
            $newSize->name = $request->size;
            $newSize->amount = $request->amount;
            $newProduct->size()->save($newSize);
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $img) {
                    $imageName = uniqid() . '.' . $img->extension();
                    $img->move(('storage'), $imageName);
                    $imageData[] = $imageName;
                }
                $newImage = new Images();
                $newImage->url = 'http://' . request()->getHost() . '8000/images/product/' . $imageName;
                $newImage->name = $imageData;
                $newProduct->images()->save($newImage);
            }

            DB::commit();
            Session::put('message', 'Thêm sản phẩm thành công');
            return redirect('/admin/product');
        } catch (Exception $e) {
            return $e;
            DB::rollback();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $products = Product::with('images')->with('color')->with('size')->where('url', '=', $url)->first();

        return view('dg', compact('categories', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product = Product::with('category')->find($id);

        $data = [
            'categories' => Category::has('children')
                ->orWhere('parent_id', 0)    //Get only the parents
                ->with(['children' => function ($query) {
                    $query->doesntHave('children');
                }])
                ->select('name', 'id')->orderBy('parent_id', 'asc')
                ->get(),
        ];
        return view('admin.editproduct', compact('data', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $newProduct = Product::find($request->id);
        $newProduct->name = $request->name;
        $newProduct->shortdecription = $request->shortdecription;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->discount = $request->discount;
        $newProduct->status = $request->status;
        $category = Category::find($request->categoryid);
        if (!$category) {
            return response()->json(['message' => "Không tìm thấy danh mục"], 404);
        }

        $category->product()->save($newProduct);
        $newColor = Color::where('productid', $request->id)->first();
        $newColor->name = $request->color;
        $newColor->code = $request->code;
        $newSize = Size::where('productid', $request->id)->first();
        $newSize->name = $request->size;
        $newSize->amount = $request->amount;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imageName = uniqid() . '.' . $img->extension();
                $img->move(('storage'), $imageName);
                $imageData[] = $imageName;
            }
            $newImage = Images::where('imageable_id', $request->id);
            $newImage->url = 'http://' . request()->getHost() . '8000/images/product/' . $imageName;
            $newImage->name = $imageData;
            $newImage->save();
        }
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->delete();
        return Response()->json($product);
    }
}
