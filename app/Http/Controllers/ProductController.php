<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function index()
    {
        // return "welcome to Product page";
        $data= Product::all();
        return view("products/Product",['products' => $data]);
    }
    function detail($id){
        // return Product::find($id);
        $data=Product::find($id);
        return view("products/detail",['products' => $data]);
    }
}
