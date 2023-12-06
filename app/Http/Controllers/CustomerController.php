<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Customer;
use App\Models\CustomerEmailVerify;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Shipping;
use App\Notifications\EmailVerifyNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
// use PDF;
use Illuminate\Support\Facades\Notification;
use Barryvdh\DomPDF\Facade\Pdf;


class CustomerController extends Controller

{

    public function __construct()
    {
        $this->middleware('customerverified'); // use middlware
    }

    function customer_profile(){
        return view('front.customer.profile');
    }

    function customer_logout(){
        Auth::guard('customer')->logout();
        return redirect()->route('home');
    }
    function customer_list(){
        $customers = Customer::all();
        return view('admin.customer.list',compact('customers'));
    }


    function customer_update(Request $request){


    //    if($request->password == ' '){

    //     if($request->photo == ' '){
    //         Customer::find(Auth::guard('customer')->id())->update([
    //             'fname'=>$request->fname,
    //             'lname'=>$request->lname,
    //             'phone'=>$request->phone,
    //             'zip'=>$request->zip,
    //             'address'=>$request->address,
    //             'updated_at'=>Carbon::now(),
    //         ]);
    //         return back();
    //     }

    //     else{
    //         if(Auth::guard('customer')->user()->photo != null){
    //             $crnt_img = public_path('uploads/customer/'.Auth::guard('customer')->user()->photo);
    //             unlink($crnt_img);
    //         }

    //         $photo = $request->photo;
    //         $ext = $photo->extension();
    //         $file_name = Auth::guard('customer')->id().'.'.$ext;
    //         Image::make($photo)->save(public_path('uploads/customer/'.$file_name));

    //         Customer::find(Auth::guard('customer')->id())->update([
    //             'fname'=>$request->fname,
    //             'lname'=>$request->lname,
    //             'phone'=>$request->phone,
    //             'zip'=>$request->zip,
    //             'address'=>$request->address,
    //             'photo'=>$file_name,
    //             'updated_at'=>Carbon::now(),
    //         ]);
    //         return back();
    //     }




    //    }



    //    else{



    //     if($request->photo == ' '){
    //         Customer::find(Auth::guard('customer')->id())->update([
    //             'fname'=>$request->fname,
    //             'lname'=>$request->lname,
    //             'phone'=>$request->phone,
    //             'zip'=>$request->zip,
    //             'address'=>$request->address,
    //             'password'=>bcrypt($request->password),
    //             'updated_at'=>Carbon::now(),
    //         ]);
    //         return back();



    //     }


    //     else{
    //         if(Auth::guard('customer')->user()->photo != null){
    //             $crnt_img = public_path('uploads/customer/'.Auth::guard('customer')->user()->photo);
    //             unlink($crnt_img);
    //         }

    //         $photo = $request->photo;
    //         $ext = $photo->extension();
    //         $file_name = Auth::guard('customer')->id().'.'.$ext;
    //         Image::make($photo)->save(public_path('uploads/customer/'.$file_name));

    //         Customer::find(Auth::guard('customer')->id())->update([
    //             'fname'=>$request->fname,
    //             'lname'=>$request->lname,
    //             'phone'=>$request->phone,
    //             'password'=>bcrypt($request->password),
    //             'zip'=>$request->zip,
    //             'address'=>$request->address,
    //             'photo'=>$file_name,
    //             'updated_at'=>Carbon::now(),
    //         ]);
    //         return back();
    //     }




    //    }


        if($request->password == '' && $request->photo == ''){
            Customer::find(Auth::guard('customer')->id())->update([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'phone_code'=>$request->phone_code,
                'phone'=>$request->phone,
                'zip'=>$request->zip,
                'address'=>$request->address,
                'updated_at'=>Carbon::now(),
            ]);
            return back()->with('update','Profile Updated !');
        }
        elseif($request->password == ''){
            if(Auth::guard('customer')->user()->photo != null){
                $crnt_img = public_path('uploads/customer/'.Auth::guard('customer')->user()->photo);
                unlink($crnt_img);
            }

            $photo = $request->photo;
            $ext = $photo->extension();
            $file_name = Auth::guard('customer')->id().'.'.$ext;
            Image::make($photo)->save(public_path('uploads/customer/'.$file_name));

            Customer::find(Auth::guard('customer')->id())->update([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'phone_code'=>$request->phone_code,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'zip'=>$request->zip,
                'address'=>$request->address,
                'photo'=>$file_name,
                'updated_at'=>Carbon::now(),
            ]);
            return back()->with('update','Profile Updated !');
        }
        elseif($request->photo == ''){


            Customer::find(Auth::guard('customer')->id())->update([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'phone_code'=>$request->phone_code,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'zip'=>$request->zip,
                'address'=>$request->address,
                'password'=>bcrypt($request->password),
                'updated_at'=>Carbon::now(),
            ]);
            return back()->with('update','Profile Updated !');
        }
        else{
            if(Auth::guard('customer')->user()->photo != null){
                    $crnt_img = public_path('uploads/customer/'.Auth::guard('customer')->user()->photo);
                    unlink($crnt_img);
                }

                $photo = $request->photo;
                $ext = $photo->extension();
                $file_name = Auth::guard('customer')->id().'.'.$ext;
                Image::make($photo)->save(public_path('uploads/customer/'.$file_name));

                Customer::find(Auth::guard('customer')->id())->update([
                    'fname'=>$request->fname,
                    'lname'=>$request->lname,
                    'phone_code'=>$request->phone_code,
                    'phone'=>$request->phone,
                    'password'=>bcrypt($request->password),
                    'zip'=>$request->zip,
                    'address'=>$request->address,
                    'photo'=>$file_name,
                    'updated_at'=>Carbon::now(),
                ]);
                return back()->with('update','Profile Updated !');
        }

    }

    function my_orders(){
        $orders = Order::where('customer_id', Auth::guard('customer')->id())->latest()->get();

        return view('front.customer.myorder',[
            'orders'=>$orders,
        ]);

    }

    function download_invoice($id){
        $order_invoice =  Order::find($id);

        $pdf = PDF::loadView('front.customer.invoicedownload', [
            'order_id'=>$order_invoice->order_id,
        ]);

        return $pdf->stream('myorder.pdf');
    }

    function customer_email_verify($token){
        $verify_info = CustomerEmailVerify::where('token' , $token)->first();

        Customer::find($verify_info->customer_id)->update([
            'email_verified_at'=>Carbon::now(),
        ]);

        CustomerEmailVerify::where('token' , $token)->delete();
        return redirect()->route('customer.login');
    }


    function resend_verify_email(){
        return view('front.email_verify.resend_email');
    }

    function resend_email(Request $request){
        $customer = Customer::where('email' , $request->email)->first();
       if( Customer::where('email' , $request->email)->exists()){
        CustomerEmailVerify::where('customer_id' , $customer->id)->delete();

        $info = CustomerEmailVerify::create([
            'customer_id'=>$customer->id,
            'token'=>uniqid(),
            'created_at'=>Carbon::now(),
        ]);


        Notification::send($customer, new EmailVerifyNotification($info));

        return back()->with('success', "Email Sent Success, We will send you a verification enail on $customer->email");

       }else{
        return back();
       }
     }


}
