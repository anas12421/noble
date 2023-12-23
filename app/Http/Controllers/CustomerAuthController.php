<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerEmailVerify;
use App\Notifications\EmailVerifyNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\RedirectResponse;
use App\Rules\ReCaptcha;
use Illuminate\View\View;
// use Tests\Feature\Auth\EmailVerificationTest;

class CustomerAuthController extends Controller

{
    function customer_login(){
        return view('front.customer.clogin');
    }
    function customer_register(){
        return view('front.customer.register');
    }


    function customer_store(Request $request){
        $request->validate([
            'fname'=>'required',
            'email'=>'required|unique:customers',
            'password'=>[
                'required',
                // 'confirmed',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
            // 'password'=>'required|confirmed',
            'password_confrimation'=>'required',
            'captcha' => 'required|captcha',

        ]);



        $customer_info = Customer::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),
        ]);

        CustomerEmailVerify::where('customer_id' , $customer_info->id)->delete();

        $info = CustomerEmailVerify::create([
            'customer_id'=>$customer_info->id,
            'token'=>uniqid(),
            'created_at'=>Carbon::now(),
        ]);


        Notification::send($customer_info, new EmailVerifyNotification($info));

        return back()->with('register', "Registration Successful ! , Please Verify Your email, We will send you a verification enail on $customer_info->email");
        // return redirect()->route()->with()

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }



    function customer_list(){
        $customers = Customer::all();
        return view('admin.customer.list',compact('customers'));
    }


    function customer_logged(Request $request){

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        //     'g-recaptcha-response' => ['required', new ReCaptcha],
        // ]);


            if(Customer::where('email', $request->email)->exists()){
               if(Customer::where('email' ,$request->email)->where('email_verified_at' , '!=' , null)->exists()){
                if(Auth::guard('customer')->attempt(['email'=>$request->email , 'password'=>$request->password])){
                    return redirect()->route('home');
                 }
                 else{
                     return back()->with('wrongp','Wrong Password');
                    }
                }else{
                   return back()->with('verify_email',"Please Verify Your Email from here $request->email");
               }
            }
            else{
                return back()->with('wrong','Invalid Email !');
            }




    }


    function githubredirect_login(){
        return Socialite::driver('github')->redirect();
    }
    function githubcallback_login(){
        $githubUser = Socialite::driver('github')->user();

         Customer::updateOrCreate(
            [
                'email'=>$githubUser->email,
            ],
            [
            'fname'=>$githubUser->name,
            // 'lname'=>$githubUser->name,
            'email_verified_at'=>Carbon::now(),
            'email'=>$githubUser->email,
            'photo'=>$githubUser->avatar,
            'password'=>bcrypt(123456789),
            'created_at'=>Carbon::now(),

        ]);

        Auth::guard('customer')->attempt(['email'=>$githubUser->email , 'password'=>123456789]);
        return redirect()->route('home');
    }



    function googleredirect_login(){
        return Socialite::driver('google')->redirect();
    }
    function googlecallback_login(){
        $googleUser = Socialite::driver('google')->user();
        // return dd($googleUser);

         Customer::updateOrCreate(
            [
                'email'=>$googleUser->email,
            ],
            [
            'fname'=>$googleUser->name,
            // 'lname'=>$githubUser->name,
            'email'=>$googleUser->email,
            'email_verified_at'=>Carbon::now(),
            'photo'=>$googleUser->avatar,
            'password'=>bcrypt(123456789),
            'created_at'=>Carbon::now(),

        ]);

        Auth::guard('customer')->attempt(['email'=>$googleUser->email , 'password'=>123456789]);
        return redirect()->route('home');
    }




}
