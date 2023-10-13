<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishController extends Controller
{
    function wish(){
        $wishs = Wish::where('customer_id' , Auth::guard('customer')->id())->get();
        // $inv = Inventory::table('inventories')->pluck('quantity');
        return view('front.customer.wishlist', [
            'wishs'=>$wishs,
            // 'inv'=>$inv,
        ]);
    }

    function wish_remove($id){
        Wish::find($id)->delete();
        return back();
    }
}
