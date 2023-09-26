<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    function coupon(){
        $coupons = Coupon::all();
        return view('admin.coupon.index',[
            'coupons'=>$coupons,
        ]);
    }
    function coupon_store(Request $request){
        Coupon::insert([
            'coupon'=>$request->coupon,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'limit'=>$request->limit,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }


    function getcouponstatus(Request $request){
        Coupon::find($request->coupon_id)->update([

            'status'=> $request->status,
        ]);
    }
}
