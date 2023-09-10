<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function dashboard(){
        return view('dashboard');
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

        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
        ]);
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
