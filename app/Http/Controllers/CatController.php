<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CatController extends Controller
{
    function category(){
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
    }

    function category_add(Request $request){
        $request->validate([
            'category_name'=>'required|unique:categories',
            'icon'=>'required',
            'icon'=>'image',
        ]);
        $icon = $request->icon;
        $extension =$icon->extension();
        $file_name = Str::lower(str_replace(' ', '-',$request->cat_name)).'-'.random_int(100, 300).'.'.$extension;
        Image::make($icon)->save(public_path('uploads/category/'.$file_name));

        Category::insert([
            'category_name'=>$request->category_name,
            'icon'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }
    function category_soft_delete($category_id){
        Category::find($category_id)->delete();
        return back()->with('cat_soft','Category Move to Trash');
    }
    function category_trash(){
        $categories = Category::onlyTrashed()->get();
        return view('admin.category.trash',[
            'categories' => $categories,
        ]);
    }
    function category_restore($id){
        Category::onlyTrashed()->find($id)->restore();
        return back()->with('restore','Category Restored');
    }
    function category_delete($id){
        $cat = Category::onlyTrashed()->find($id);
        $cat_img =public_path('uploads/category/'.$cat->icon);
        unlink($cat_img);
        Category::onlyTrashed()->find($id)->forceDelete();
        Subcategory::where('category_id' ,$id)->update([
            'category_id'=>1,
        ]);
        return back()->with('delete','Category Deleted Permanently');
    }
    function category_edit($id){
        $categories =Category::find($id);
        return view('admin.category.edit' ,[
            'category'=>$categories,
        ]);
    }
    function category_update(Request $request , $id){
        $request->validate([
            'cat_name'=>'required',
        ]);

        if($request->icon == ''){
            Category::find($id)->update([
                'category_name'=>$request->cat_name,
            ]);
            return back();
        }
        else{
            $cat = Category::find($id);
            $cat_img = public_path('uploads/category/'.$cat->icon);
            unlink($cat_img);

            $icon = $request->icon;
            $extension =$icon->extension();
            $file_name = Str::lower(str_replace(' ', '-',$request->cat_name)).'-'.random_int(100, 300).'.'.$extension;
            Image::make($icon)->save(public_path('uploads/category/'.$file_name));

            Category::find($id)->update([
                'category_name'=>$request->cat_name,
                'icon'=>$file_name,
            ]);
            return back();

        }

    }
    function checked_delete(Request $request){
        foreach($request->category_id as $category){
            Category::find($category)->delete();
        }
        return back()->with('cat_soft','Category Move to Trash');
    }

    function checked_restore(Request $request){
        if($request->btn == 1){

            foreach($request->category_id as $category){
                Category::onlyTrashed()->find($category)->restore();
            }
            return back()->with('restore','Category Restored');
        }
        elseif($request->btn == 2){{
            foreach($request->category_id as $category){
                $cat = Category::onlyTrashed()->find($category);
                $cat_img =public_path('uploads/category/'.$cat->icon);
                unlink($cat_img);
                Category::onlyTrashed()->find($category)->forceDelete();
            }
            return back()->with('delete','Category Deleted Permanently');
        }

        }
    }
}
