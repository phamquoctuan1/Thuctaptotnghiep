<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    // <!-- Category -->
    public function getCategory()
    {
        return view('admin.categorymanagement');
    }
    public function anyData()
    {
        $categories = Category::all();
        return DataTables::of($categories)
        ->addColumn('action', function ($category) {
            return '<button  type="button" data-id ="'.$category->url.'" class="btn btn-primary btn-detail">Chi tiết</button>
            <button  type="button"  data-id ="'.$category->url.'" class="btn btn-warning btn-edit">Xóa</button>
            <button  type="button"  data-id ="'.$category->url.'" class="btn btn-success btn-delete">Sửa</button>';
        })
        ->make(true);
    }

    // <!-- Product -->

    public function getProduct()
    {
        return view('admin.productmanagement');
    }
    public function anyDataProduct()
    {
        $products = Product::with('color')->with('size')->get();
        return DataTables::of($products)
        ->addColumn('action', function($product){
            $button = '<button type="button" name="edit" id="'.$product->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
            $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$product->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
            return $button;
        })
        ->rawColumns(['action'])->
            addColumn('color', function ($product) {
            foreach($product->color as $color) {
               return $color->name;
            }
        })->addColumn('size', function ($product) {
            foreach($product->size as $size) {
               return $size->name;
            }
        })
        ->make(true);
    }



}
