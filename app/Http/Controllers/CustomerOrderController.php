<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerOrderController extends Controller
{
    function orders(){
        $orders = Order::latest()->get();
        return view('admin.order.index',[
            'orders'=>$orders,
        ]);
    }

    function order_status(Request $request ,$id){

        if($request->status == 5){


            Order::find($id)->update([
                'status'=>$request->status,
            ]);

            $or =Order::find($id);

            $orps = OrderProduct::where('customer_id', $or->customer_id)->get();

            foreach($orps  as $orp){

            Inventory::where('product_id' , $orp->product_id)
            ->where('color_id' , $orp->color_id)
            ->where('size_id',$orp->size_id)
            ->increment('quantity',$orp->quantity);
            }
            return back();
        }
        else{
            Order::find($id)->update([
                'status'=>$request->status,
            ]);
            return back();
        }




    }
}
