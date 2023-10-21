<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderCancel;
use App\Models\OrderProduct;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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

    function cancel_order($id){
        $order_info = Order::find($id);
        return view('front.customer.cancel_order',[
            'order_info'=>$order_info,
        ]);
    }

    function cancel_reason(Request $request , $id){
        $request->validate([
            'reason'=>'required',
        ]);
        if($request->image == ''){
            OrderCancel::insert([
                'order_id'=>$id,
                'reason'=>$request->reason,
                'created_at'=>Carbon::now(),
            ]);

            return back()->with('req','Order Cancel Request Sent');
        }else{
            $image = $request->image;
            $ext = $image->extension();
            $file_name =random_int(100,80000).'.'.$ext ;
            Image::make($image)->save(public_path('uploads/cancelorder/'.$file_name));

            OrderCancel::insert([
                'order_id'=>$id,
                'reason'=>$request->reason,
                'image'=>$file_name,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('req','Order Cancel Request Sent');
        }
    }


    function cancel_order_request(){
       $reason =  OrderCancel::all();
        return view('admin.order.order_cancel_list',[
            'reason'=>$reason,
        ]);
    }

    function cancel_details($id){
        OrderCancel::find($id)->update([
            'status'=>1,
        ]);
        $cancel_details = OrderCancel::find($id);

        return view('admin.order.cancel_details',[
            'cancel_details'=>$cancel_details,
        ]);
    }


    function cancel_accept($id){
        $cancel_details = OrderCancel::find($id);

        Order::find($cancel_details->order_id)->update([
            'status'=>5,
        ]);

        OrderCancel::find($id)->delete();;

        $order_id = Order::find($cancel_details->order_id)->order_id;

        $orps = OrderProduct::where('order_id', $order_id)->get();

            foreach($orps as $orp){

            Inventory::where('product_id' , $orp->product_id)
            ->where('color_id' , $orp->color_id)
            ->where('size_id',$orp->size_id)
            ->increment('quantity',$orp->quantity);
            }

        return back();







    }

    function delete_order($id){
        $order = Order::find($id);
        Order::find($id)->delete();
        Shipping::where('order_id', $order->order_id)->delete();
        Billing::where('order_id', $order->order_id)->delete();
        OrderProduct::where('order_id', $order->order_id)->delete();
        return back();
    }
}
