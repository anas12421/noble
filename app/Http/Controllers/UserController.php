<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    function user_update(){

        return view('admin.user.profile');
    }

    function user_info_update(Request $request){
     User::find(Auth::id())->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>$request->role,
       ]);

       return back()->with('info_update', 'Profile Updated !');
    // print_r($request->all());
    }

    function password_update(UserRequest $request){
        // print_r($request->all());
        $user = User::find(Auth::id());
        if(Hash::check($request->current_password, $user->password)){
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->password),

               ]);
               return back()->with('pass_update','Password Updated');
        }
        else{
            return back()->with('wrong','Current Password Wrong');
        }


    }

    function photo_update(Request $request){

        $request->validate([
            'profile_photo'=>'required|image|mimes:jpg,png|file|max:1024',

        ]);

        if(Auth::user()->photo == null){

            $photo = $request->profile_photo;
            $extension = $photo->extension();
            $file_name = Auth::id().'.'.$extension;

            Image::make($photo)->resize(400, 400)->save(public_path('uploads/user/'.$file_name));
            User::find(Auth::id())->update([
                'photo'=>$file_name,
            ]);

            return back()->with('photo_updated' , 'Photo Updated !');
        }
        else{
            $current_img = public_path('uploads/user/'.Auth::user()->photo);
            unlink($current_img);

            $photo = $request->photo;
            $extension = $photo->extension();
            $file_name = Auth::id().'.'.$extension;

            Image::make($photo)->resize(400, 400)->save(public_path('uploads/user/'.$file_name));
            User::find(Auth::id())->update([
                'photo'=>$file_name,
            ]);

            return back()->with('photo_updated' , 'Photo Updated !');
        }

    }
}
