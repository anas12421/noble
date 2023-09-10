<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VariationController extends Controller
{
    function variation(){
        $colors = Color::all();
        $sizes = Size::all();
        $categories = Category::all();
        return view('admin.variation.index', compact('colors','sizes' , 'categories'));
    }

    function color_store(Request $request){
        // $request->validate([
        //     'color_name'=>'required',
        //     'color_code'=>'required',
        // ]);

        Color::insert([
            'color_name'=>$request->color_name,
            'color_code'=>$request->color_code,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function size_store(Request $request){
        Size::insert([
            'category_id'=>$request->category_id,
            'size_name'=>$request->size_name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function color_delete($id){
        Color::find($id)->delete();
        return back();
    }

    function size_delete($id){
        Size::find($id)->delete();
        return back();
    }
}
