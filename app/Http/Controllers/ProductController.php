<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index() {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['products'=>$data]);
    }
    function addToCart(Request $reg) {
        if($reg->session()->has('user')){
           $cart = new Cart();
           $cart->user_id=$reg->session()->get('user')['id'];
           $cart->product_id=$reg->product_id;
           $cart->save();
           return redirect('/');
        }else{
            return redirect('/login');
        }
        
    }
    static function cartItem() {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
