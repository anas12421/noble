<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Passreset;
use App\Notifications\PassResetNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PassresetController extends Controller
{
   function forget(){
    return view('front.pass_reset.forget');
   }
   function pass_reset_request(Request $request){
    $request->validate([
        'email'=>'required',
    ]);

    if(Customer::where('email', $request->email)->exists()){

        $customer = Customer::where('email', $request->email)->first();

        Passreset::where('customer_id', $customer->id)->delete();

       $info = Passreset::create([
        'customer_id' => $customer->id,
        'token' => uniqid(),
        'created_at' => Carbon::now(),
        ]);

        Notification::send($customer, new PassResetNotification($info));

        return back()->with('sent', "We Have Sent You a Password Reset Link , on $customer->email");
    }





    else{
        return back()->with('err', 'Email Does Not Exists');
    }
   }

   function pass_reset_form($token){

    if(Passreset::where('token' , $token)->exists()){

        return view('front.pass_reset.reset_form',[
            'token'=>$token,
        ]);
    }else{
        abort('404');
    }
   }

   function pass_reset_confirm(Request $request, $token){
    $passreset = Passreset::where('token' , $token)->first();

    if(Passreset::where('token' , $token)->exists()){
        Customer::find($passreset->customer_id)->update([
            'password'=>bcrypt($request->password),
        ]);

        Passreset::where('token' , $token)->delete();

        return redirect()->route('customer.login')->with('pass', 'Password Reset Success');

    }
    else{
        abort('404');
    }

   }
}
