<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function tag(){
        $tags = Tag::all();
        return view('admin.tag.tag' , compact('tags'));
    }

    function tag_store(Request $request){
        Tag::create([
            'tag'=>$request->tag,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }

    function tag_del($id){
        Tag::find($id)->delete();
        return back();
    }
}
