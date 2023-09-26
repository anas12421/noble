<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
