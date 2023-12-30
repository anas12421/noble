<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Subscriber;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class HomeController extends Controller
{
    function dashboard(){

        // Orders
        $orders = Order::where('created_at', '>',  Carbon::today()->subDays(15))->groupBy('order_date')
        ->selectRaw('count(*) as total, order_date')
        ->get();


        $total_order = '' ;
        $order_date = '' ;

        foreach($orders as $order){
            $total_order .= $order->total.',';
            $order_date .= Carbon::parse($order->order_date)->format('M-d').',';
        }


        $total_order_info = explode(',' , $total_order);
        $order_date_info = explode(',' , $order_date);

        array_pop($total_order_info); // last faka array remove
        array_pop($order_date_info); // last faka array remove



        // Sales

        $sales = Order::where('created_at', '>',  Carbon::today()->subDays(15))->groupBy('order_date')
        ->selectRaw('sum(total) as sum, order_date')
        ->get();


        $total_sales = '' ;
        $sales_date = '' ;
        $target = 100000; // for percentage

        foreach($sales as $sale){
            $total_sales .= $sale->sum.','; // for taka
            // $total_sales .= ($sale->sum/$target*100).','; // for percentage
            $sales_date .= Carbon::parse($sale->order_date)->format('M-d').',';
        }



        $total_sales_info = explode(',' , $total_sales);
        $sales_date_info = explode(',' , $sales_date);

        array_pop($total_sales_info); // last faka array remove
        array_pop($sales_date_info); // last faka array remove




        return view('dashboard', compact('total_order_info' , 'order_date_info','total_sales_info' , 'sales_date_info'));
    }












    function user_list(){
        $user_info = User::where('id', '!=', Auth::id())->get();
        return view('admin.user.user_list' , compact('user_info'));
    }

    function user_delete($user_id){
        User::find($user_id)->delete();
        return back()->with('user_delete', 'User Deleted !');
    }

    function user_add(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password'=>Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols(),
            'confirm_password'=>'required',
        ]);
        if($request->password != $request->confirm_password){
            return back()->with('match','Password & confirm password dose not match !');
        }

        // User::insert([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=>bcrypt($request->password),
        //     'role'=>$request->role,
        //     'created_at'=>Carbon::now(),
        //     'email_verified_at'=>Carbon::now(),
        // ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
            'created_at'=>Carbon::now(),
            'email_verified_at'=>Carbon::now(),
        ]);

        event(new Registered($user));
        return back()->with('success', 'User add success');
    }


    function subscriber_store(Request $request){
        Subscriber::insert([
            'customer_id'=>1,
            'email'=>$request->email,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }


}
