<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    function cartList() {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id) {
        Cart::destroy($id);
        return redirect('cartlist');
        
    }
    function orderNow() {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('orderNow',['total'=>$total]);
    }
    function orderPlace(Request $reg) {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "Dang cho xu ly";
            $order->payment_method = $reg->payment;
            $order->payment_status = "Chua thanh toan";
            $order->address = $reg->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $reg->input();
        return redirect('/');
    }
    function myOrder() {
        
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myOrder',['orders'=>$orders]);
    }
}
