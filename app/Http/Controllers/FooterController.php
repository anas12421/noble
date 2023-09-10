<?php

namespace App\Http\Controllers;

use App\Models\copyright;
use App\Models\footer1;
use App\Models\footer2;
use App\Models\footer3;
use App\Models\footer4;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FooterController extends Controller
{
    function footer(){
        $footer1s = footer1::first();
        $footer2s = footer2::first();
        $footer3s = footer3::all();
        $footer4s = footer4::all();
        $copyright = copyright::all();
        return view('admin.footer.index',[
            'footer1s'=>$footer1s,
            'footer2s'=>$footer2s,
            'footer3s'=>$footer3s,
            'footer4s'=>$footer4s,
            'copyright'=>$copyright,
        ]);
    }

    function footer1(Request $request, $id){

        if($request->image == null){
            footer1::find($id)->update([
                'desp'=>$request->desp,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'linkedin'=>$request->linkedin,
                'instagram'=>$request->instagram,
            ]);
            return back();
        }
        else{

            $flogo = footer1::find($id);
            $flogo_del = public_path('uploads/footer/logo/'.$flogo->image);
            unlink($flogo_del);

            $logo = $request->image;
            $ext = $logo->extension();
            $file_name= 'logo'.'.'.$ext;
            Image::make($logo)->save(public_path('uploads/footer/logo/'.$file_name));

            footer1::find($id)->update([
                'image'=>$file_name,
                'desp'=>$request->desp,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'linkedin'=>$request->linkedin,
                'instagram'=>$request->instagram,
            ]);
            return back();
        }


    }

    function footer2(Request $request,$id){
       footer2::find($id)->update([
        'email'=>$request->email,
        'number1'=>$request->number1,
        'number2'=>$request->number2,
        'address'=>$request->address,
       ]);
       return back();
    }

    function footer3(Request $request){
        footer3::insert([
            'tags'=>$request->tags,
            'link'=>$request->link,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function footer3_delete($id){
        footer3::find($id)->delete();
        return back();
    }

    function footer4(Request $request){
        $image = $request->insta_image;
        $ext = $image->extension();
        $file_name= 'insta_image'.random_int(100,500).'.'.$ext;
        Image::make($image)->save(public_path('uploads/footer/instagram/'.$file_name));

        footer4::insert([
            'photo'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function footer4_delete($id){
        $image = footer4::find($id);
        $image_del = public_path('uploads/footer/instagram/'.$image->photo);
        unlink($image_del);

        footer4::find($id)->delete();
        return back();


    }

    function copyright(Request $request ,$id){
        copyright::find($id)->update([
            'copyright'=>$request->copy,
        ]);
        return back();
    }
}
