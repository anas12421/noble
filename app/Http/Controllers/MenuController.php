<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function menu(){
        $menus = Menu::all();
        return view('admin.menu.index',[
            'menus'=>$menus,
        ]);
    }

    function menu_store(Request $request){
        Menu::insert([
            'menu_name'=>$request->menu_name,
            'menu_link'=>$request->menu_link,
            'created_at'=>Carbon::now()
        ]);

        return back();
    }

    function menu_delete($id){
        Menu::find($id)->delete();
        return back();
    }
}
