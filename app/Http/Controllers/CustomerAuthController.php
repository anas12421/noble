<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


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
        ]);

        Customer::insert([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('register', 'Registration Successful !');
        // return redirect()->route()->with()

    }
    function customer_list(){
        $customers = Customer::all();
        return view('admin.customer.list',compact('customers'));
    }
    function customer_logged(Request $request){
        if(Customer::where('email', $request->email)->exists()){
            if(Auth::guard('customer')->attempt(['email'=>$request->email , 'password'=>$request->password])){
               return redirect()->route('home');
            }
            else{
                return back()->with('wrongp','Wrong Password');
            }
        }else{
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
            'photo'=>$googleUser->avatar,
            'password'=>bcrypt(123456789),
            'created_at'=>Carbon::now(),

        ]);

        Auth::guard('customer')->attempt(['email'=>$googleUser->email , 'password'=>123456789]);
        return redirect()->route('home');
    }
}
