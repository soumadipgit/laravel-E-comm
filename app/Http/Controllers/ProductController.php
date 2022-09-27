<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
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
    function addToCart(Request $req)
    {
        if($req->session()->has('username'))
        {
            // return "hello";
            $cart=new Cart;
            $cart->user_id=$req->session()->get('username')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
  static function cartItem()
    {
        $userId=Session::get('username')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        echo "Listing products";
    }
}
