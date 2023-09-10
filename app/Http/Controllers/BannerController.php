<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function banner(){
        $banners = Banner::all();
        return view('admin.banner.index',[
            'banners'=>$banners,
        ]);
    }

    function banner_store(Request $request){
        $request->validate([
            'title'=>'required',
            'photo'=>'required|image',
        ]);

        if($request->link == null){
            $photo = $request->photo;
            $ext =$photo->extension();
            $file_name ='banner'.'-'.random_int(100,1000).'.'.$ext;
            Image::make($photo)->save(public_path('uploads/banner/'.$file_name));

            Banner::insert([
                'title'=>$request->title,
                'photo'=>$file_name,
            ]);
            return back();
        }

        else{
            $photo = $request->photo;
            $ext =$photo->extension();
            $file_name ='banner'.'-'.random_int(100,1000).'.'.$ext;
            Image::make($photo)->save(public_path('uploads/banner/'.$file_name));

            Banner::insert([
                'title'=>$request->title,
                'link'=>$request->link,
                'photo'=>$file_name,
            ]);
            return back();
        }
    }

    function banner_delete($id){
        $banner_img = Banner::find($id);
        $banner_img_del = public_path('uploads/banner/'.$banner_img->photo);
        unlink($banner_img_del);

        Banner::find($id)->delete();
        return back();
    }
}
