<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Color;
use App\Models\Images;
use App\Models\Product;
use App\Models\Size;
use Exception;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $products = Product::with('images')->with('color')->with('size')->orderBy('name','DESC')->paginate(8);

        return view('home', compact('categories','products'));
    }
    public function destroy($id)
    {
        $product = Product::where('id',$id)->delete();
        return Response()->json($product);
    }


}
