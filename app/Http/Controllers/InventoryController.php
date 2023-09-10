<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function inventory($id){
        $products = Product::find($id);
        $colors = Color::all();
        $sizes = Size::all();
        $inventories = Inventory::where('product_id' , $id)->get();
        return view('admin.product.inventory',[
            'products'=>$products,
            'colors'=>$colors,
            'sizes'=>$sizes,
            'inventories'=>$inventories,
        ]);
    }

    function inventory_store(Request $request, $id){
        if(Inventory::where('product_id' , $id)->where('color_id' , $request->color_id)->where('size_id' , $request->size_id)->exists()){
            Inventory::where('product_id' , $id)->where('color_id' , $request->color_id)->where('size_id' , $request->size_id)->increment('quantity' , $request->quantity);

            return back();
        }



        Inventory::insert([
            'product_id'=>$id,
            'color_id'=>$request->color_id,
            'size_id'=>$request->size_id,
            'quantity'=>$request->quantity,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function inventory_delete($id){
        Inventory::find($id)->delete();
        return back();
    }
}
