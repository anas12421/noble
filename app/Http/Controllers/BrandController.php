<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
   function brand(){
    $brands = Brand::all();
    return view('admin.brand.index', compact('brands'));
   }

   function brand_store(Request $request){
    $request->validate([
        'brand_name'=>'required',
        'brand_logo'=>'required',
    ]);

    $logo = $request->brand_logo;
    $extension = $logo->extension();
    $file_name = Str::lower(str_replace(' ', '-',$request->brand_name)).'-'.'.'.$extension;
    Image::make($logo)->save(public_path('uploads/brand/'.$file_name));

    Brand::insert([
        'brand_name'=>$request->brand_name,
        'brand_logo'=>$file_name,
        'created_at'=>Carbon::now(),
    ]);
    return back();
   }

   function brand_delete($id){
    Brand::find($id)->delete();
    return back();
   }

   function brand_update($id){
    $brands = Brand::find($id);
    return view('admin.brand.edit' , compact('brands'));
   }

   function brand_final_update(Request $request, $id){
    Brand::find($id)->update([
        'brand_name'=>$request->brand_name_update,
    ]);
    return back()->with('success_update', 'Brand Update Success');
   }
}
