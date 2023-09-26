<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Wish;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function cart(Request $request){
        if($request->btn == 1){
            $request->validate([
                'color_id'=>'required',
                'size_id'=>'required',
            ]);

            Cart::insert([
                'customer_id'=>Auth::guard('customer')->id(),
                'product_id'=>$request->product_id,
                'color_id'=>$request->color_id,
                'size_id'=>$request->size_id,
                'quantity'=>$request->quantity,
                'created_at'=>Carbon::now(),
            ]);
            return back();
        }
        else{

            $request->validate([
                'color_id'=>'required',
                'size_id'=>'required',
            ]);

            Wish::insert([
                'customer_id'=>Auth::guard('customer')->id(),
                'product_id'=>$request->product_id,
                'color_id'=>$request->color_id,
                'size_id'=>$request->size_id,
                'quantity'=>$request->quantity,
                'created_at'=>Carbon::now(),
            ]);
            return back();


        }
    }

    function cart_remove($id){
        Cart::find($id)->delete();
        return back();
    }

    function view_cart(){
        $carts = Cart::where('customer_id' , Auth::guard('customer')->id())->get();
        return view('front.customer.cart' , compact('carts'));
    }

    function view_cart_update(Request $request){
       foreach($request->quantity as $cart_id=>$quantity){
        Cart::find($cart_id)->update([
            'quantity'=>$quantity,
            'updated_at'=>Carbon::now(),
        ]);
       }
       return back();
    }




}
