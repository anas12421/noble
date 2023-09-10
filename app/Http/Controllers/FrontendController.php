<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\footer1;
use App\Models\Inventory;
use App\Models\Offer1;
use App\Models\Offer2;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $categories = Category::all();
        $products = Product::all();
        // $products = Product::latest()->take(8)->get();
        $offer1 = Offer1::first();
        $offer2 = Offer2::first();
        // $products = Product::where('status',1)->get();
        $banners = Banner::all();

        return view('front.index' , [
            'categories'=>$categories,
            'products'=>$products,
            'banners'=>$banners,
            'offer1'=>$offer1,
            'offer2'=>$offer2,

        ]);
    }


    function check($slug){
        $product_id = Product::where('slug',$slug)->first()->id;
        $product_info = Product::find($product_id);
        $gal_img = ProductGallery::where('product_id',$product_id)->get();
        $available_colors = Inventory::where('product_id',$product_id)
        ->groupBy('color_id')
        ->selectRaw('sum(color_id) as sum , color_id')
        ->get();

        $available_sizes =Inventory::where('product_id',$product_id)->groupBy('size_id')->selectRaw('sum(size_id) as sum, size_id')->get();

        // return $available_colors;
        return view('front.check',[
            'product_info'=>$product_info,
            'gal_img'=>$gal_img,
            'available_colors'=>$available_colors,
            'available_sizes'=>$available_sizes,
        ]);
    }

    function getsize(Request $request){
        $str = '';
       $sizes =  Inventory::where('product_id' , $request->product_id)
        ->where('color_id',$request->color_id)
        ->get();

        foreach ($sizes as $size){
            if($size->rel_to_size->size_name == 'NA'){
                $str = '<li title="{{$size->rel_to_size->size_name}}" style="overflow: hidden" class="color" ><input class="size_id" id="size'.$size->size_id.'" type="radio" name="size" value="'.$size->size_id.'">
                                <label for="size'.$size->size_id.'">'.$size->rel_to_size->size_name.'</label>
                          </li>';
            }
            else{
               $str .= '<li title="{{$size->rel_to_size->size_name}}" style="overflow: hidden" class="color" ><input class="size_id" id="size'.$size->size_id.'" type="radio" name="size" value="'.$size->size_id.'">
               <label for="size'.$size->size_id.'">'.$size->rel_to_size->size_name.'</label>
         </li>';
            }
        }

        echo $str;
    }

    function getquantity(Request $request){
        $str = '';
        $quantity = Inventory::where('product_id' , $request->product_id)
        ->where('color_id' , $request->color_id)
        ->where('size_id',$request->size_id)
        ->first()->quantity;

        if($quantity == 0){
            $str = ' <strong class="btn btn-danger disabled" id="quan">Out of Stock </strong>';
        }

        else{
           $str = '<strong class="btn btn-success disabled">'.$quantity.' In Stock </strong>';
            // $str =. ' In Stock';
        }

        echo $str;
    }
}
