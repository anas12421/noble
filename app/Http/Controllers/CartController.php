<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Product;
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


            if(Cart::where('customer_id' , Auth::guard('customer')->id())->where('product_id' , $request->product_id)->where('color_id' , $request->color_id)->where('size_id' , $request->size_id)->exists()){

                Cart::where('customer_id' , Auth::guard('customer')->id())->where('product_id' , $request->product_id)->where('color_id' , $request->color_id)->where('size_id' , $request->size_id)->increment('quantity' , $request->quantity);
                return back();
            }


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

            if(Wish::where('customer_id' , Auth::guard('customer')->id())->where('product_id' , $request->product_id)->where('color_id' , $request->color_id)->where('size_id' , $request->size_id)->exists()){

                Wish::where('customer_id' , Auth::guard('customer')->id())->where('product_id' , $request->product_id)->where('color_id' , $request->color_id)->where('size_id' , $request->size_id)->increment('quantity' , $request->quantity);
                return back();
            }

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

    function view_cart(Request $request){



        $coupon =$request->coupon;

        $msg ='';
        $type ='';
        $amount ='';

        if($coupon){
            if(Coupon::where('coupon',$coupon)->where('status' , 1)->exists()){
                if(Coupon::where('coupon',$coupon)->where('limit','!=',0)->exists()){
                    if(Carbon::now()->format('Y-m-d') >= Coupon::where('coupon',$coupon)->first()->validity){

                       $type= Coupon::where('coupon',$coupon)->first()->type;
                       $amount= Coupon::where('coupon',$coupon)->first()->amount;

                    }else{
                        $msg ='Coupon Expired';
                        $amount = 0;
                    }
                }else{
                    $msg ='Coupon Limit Exceed';
                    $amount = 0;
                }
            }
            else{
                $msg ='Invalid Coupon';
                $amount = 0;
            }

        }








        $product = Product::latest()->take(4)->get();
        $carts = Cart::where('customer_id' , Auth::guard('customer')->id())->get();
        return view('front.customer.cart' , compact('carts','msg','type','amount' , 'product' , 'coupon'));
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
