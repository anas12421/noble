<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Cart;
use App\Models\City;
use App\Models\Country;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;


class CheckoutController extends Controller
{
    function checkout(){
        $countries = Country::all();
        $carts = Cart::where('customer_id' , Auth::guard('customer')->id())->get();
        return view('front.checkout',[
            'countries'=>$countries,
            'carts'=>$carts,
        ]);
    }

    function getcity(Request $request){
        $str = '';
        $cities =City::where('country_id' , $request->country_id)->get();
        foreach($cities as $city){

            $str .= ' <option value="'.$city->id.'" >'.$city->name.'</option>';

        }

        echo $str;
    }

   function order_store(Request $request){
    $request->validate([
        'fname'=>'required',
        'country_id'=>'required',
        'city_id'=>'required',
        'zip'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'payment_method'=>'required',
        'color'=>'required',
    ]);

    if($request->payment_method == 1){

        // $order_id ='#'.uniqid().random_int(10000,99999)."/".Carbon::now()->format('d-m-Y') ;
        $order_id ='#'.uniqid();

        Order::insert([
            'order_id'=>$order_id,
            'customer_id'=>Auth::guard('customer')->id(),
            'total'=>$request->total+$request->charge,
            'sub_total'=>$request->total-$request->discount,
            'discount'=>$request->discount,
            'charge'=>$request->color,
            'payment_method'=>$request->payment_method,
            'created_at'=>Carbon::now(),
        ]);

        Billing::insert([
            'order_id'=>$order_id,
            'customer_id'=>Auth::guard('customer')->id(),
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'country_id'=>$request->country_id,
            'city_id'=>$request->city_id,
            'zip'=>$request->zip,
            'company'=>$request->company,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'note'=>$request->note,
            'created_at'=>Carbon::now(),
        ]);

        if($request->ship_check == 1){

            $request->validate([
                'ship_fname'=>'required',
                'ship_country_id'=>'required',
                'ship_city_id'=>'required',
                'ship_zip'=>'required',
                'ship_email'=>'required',
                'ship_phone'=>'required',
                'ship_address'=>'required',
            ]);

            Shipping::insert([
                'order_id'=>$order_id,
                'ship_fname'=>$request->ship_fname,
                'ship_lname'=>$request->ship_lname,
                'ship_country_id'=>$request->ship_country_id,
                'ship_city_id'=>$request->ship_city_id,
                'ship_zip'=>$request->ship_zip,
                'ship_company'=>$request->ship_company,
                'ship_email'=>$request->ship_email,
                'ship_phone'=>$request->ship_phone,
                'ship_address'=>$request->ship_address,
                'created_at'=>Carbon::now(),
            ]);
        }
        else{
            Shipping::insert([
                'order_id'=>$order_id,
                'ship_fname'=>$request->fname,
                'ship_lname'=>$request->lname,
                'ship_country_id'=>$request->country_id,
                'ship_city_id'=>$request->city_id,
                'ship_zip'=>$request->zip,
                'ship_company'=>$request->company,
                'ship_email'=>$request->email,
                'ship_phone'=>$request->phone,
                'ship_address'=>$request->address,
                'created_at'=>Carbon::now(),
            ]);
        }

        $carts = Cart::where('customer_id' , Auth::guard('customer')->id())->get();
        foreach($carts as $cart){

            OrderProduct::insert([
                'order_id'=>$order_id,
                'customer_id'=>Auth::guard('customer')->id(),
                'product_id'=>$cart->product_id,
                'price'=>$cart->rel_to_product->after_discount,
                'color_id'=>$cart->color_id,
                'size_id'=>$cart->size_id,
                'quantity'=>$cart->quantity,
                'created_at'=>Carbon::now(),
            ]);

            // Cart::find($cart->id)->delete();
            Inventory::where('product_id' , $cart->product_id)
            ->where('color_id' , $cart->color_id)
            ->where('size_id',$cart->size_id)
            ->decrement('quantity',$cart->quantity);
        }

        Mail::to($request->email)->send(new InvoiceMail($order_id));
        return redirect()->route('order.success')->with('success',$order_id);

    }




    elseif($request->payment_method == 2){
        echo 'ssl';
    }
    elseif($request->payment_method == 3){
        echo 'stripe';
    }
   }


   function order_success(){
    if(session('success')){
        return view('front.order_success');
    }else{
        abort('404');
    }
   }
 }
