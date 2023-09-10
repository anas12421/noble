<?php

namespace App\Http\Controllers;

use App\Models\Offer1;
use App\Models\Offer2;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    function offer(){
        $offer1 = Offer1::first();
        $offer2 = Offer2::first();
        return view('admin.offer.index',[
            'offer1'=> $offer1,
            'offer2'=> $offer2,
        ]);
    }

    function offer_1(Request $request ,$id){


        if($request->photo == null){
            Offer1::find($id)->update([
                'title'=>$request->title,
                'dis'=>$request->dis,
                'price'=>$request->price,
                'date'=>$request->date,
            ]);
            return back();
        }
        else{

            $photo_sel = Offer1::find($id);
            $photo_del = public_path('uploads/offer/'.$photo_sel->photo);
            unlink($photo_del);

            $photo = $request->photo;
            $ext = $photo->extension();
            $file_name = 'offer1'.'.'.$ext;
            Image::make($photo)->save(public_path('uploads/offer/'.$file_name));

            Offer1::find($id)->update([
                'title'=>$request->title,
                'dis'=>$request->dis,
                'price'=>$request->price,
                'date'=>$request->date,
                'photo'=>$file_name,
            ]);
            return back();
        }
    }


    function offer_2(Request $request ,$id){


        if($request->photo == null){
            Offer2::find($id)->update([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,

            ]);
            return back();
        }
        else{

            $photo_sel = Offer2::find($id);
            $photo_del = public_path('uploads/offer/'.$photo_sel->photo);
            unlink($photo_del);

            $photo = $request->photo;
            $ext = $photo->extension();
            $file_name = 'offer2'.'.'.$ext;
            Image::make($photo)->save(public_path('uploads/offer/'.$file_name));

            Offer2::find($id)->update([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'photo'=>$file_name,
            ]);
            return back();
        }
    }
}
