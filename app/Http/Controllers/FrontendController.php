<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Color;
use App\Models\footer1;
use App\Models\Inventory;
use App\Models\Offer1;
use App\Models\Offer2;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Size;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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
        $reviews = OrderProduct::where('product_id' , $product_id)->whereNotNull('review')->get();
        $total_star = OrderProduct::where('product_id' , $product_id)->whereNotNull('review')->sum('star');
        $available_colors = Inventory::where('product_id',$product_id)
        ->groupBy('color_id')
        ->selectRaw('sum(color_id) as sum , color_id')
        ->get();

        $available_sizes =Inventory::where('product_id',$product_id)->groupBy('size_id')->selectRaw('sum(size_id) as sum, size_id')->get();

        // Recent View

        $all = Cookie::get('recent-view');


        // echo gettype($all);  // for check type
        if (!$all) {
            $all = "[]";
        }
        $all_info = json_decode($all, true); // string to array
        $all_info = Arr::prepend($all_info, $product_id);
        $recent_product_id = json_encode($all_info);
        Cookie::queue('recent-view' , $recent_product_id , 1000);
        // Cookie::queue('recent_view', $recent_product_id, 1000);


        // return $available_colors;
        return view('front.check',[
            'product_info'=>$product_info,
            'gal_img'=>$gal_img,
            'available_colors'=>$available_colors,
            'available_sizes'=>$available_sizes,
            'reviews'=>$reviews,
            'total_star'=>$total_star,
        ]);
    }






    function getsize(Request $request){
        $str = '';
       $sizes =  Inventory::where('product_id' , $request->product_id)
        ->where('color_id',$request->color_id)
        ->get();

        foreach ($sizes as $size){
            if($size->rel_to_size->size_name == 'NA'){
                $str = '<li title="{{$size->rel_to_size->size_name}}" style="overflow: hidden" class="color" ><input  checked class="size_id" id="size'.$size->size_id.'" type="radio" name="size_id"  value="'.$size->size_id.'">
                                <label for="size'.$size->size_id.'">'.$size->rel_to_size->size_name.'</label>
                          </li>';
            }
            else{
               $str .= '<li title="{{$size->rel_to_size->size_name}}" style="overflow: hidden" class="color" ><input class="size_id" id="size'.$size->size_id.'" type="radio" name="size_id" value="'.$size->size_id.'">
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

    function review_store(Request $request){
        $request->validate([
            'stars'=>'required',
            'review'=>'required',
        ]);

        OrderProduct::where('customer_id' , Auth::guard('customer')->id())->where('product_id' , $request->product_id)->first()->update([
            'star'=>$request->stars,
            'review'=>$request->review,
            'updated_at'=>Carbon::now(),
        ]);
        return back();
    }

    function shop(Request $request){

        // product search
        $data = $request->all();

        $sorting = 'created_at';
        $type = 'DESC';

        if (!empty($data['sort']) && $data['sort'] != '' && $data['sort'] != 'undefined') {
            if ($data['sort'] == 1) {
                $sorting = 'after_discount';
                $type = 'ASC';
            } else if ($data['sort'] == 2) {
                $sorting = 'after_discount';
                $type = 'DESC';
            } else if ($data['sort'] == 3) {
                $sorting = 'product_name';
                $type = 'ASC';
            } else if ($data['sort'] == 4) {
                $sorting = 'product_name';
                $type = 'DESC';
            }
        }

        $product = Product::where(function($q) use ($data){

            if(!empty($data['search_input']) && $data['search_input'] != '' && $data['search_input'] != 'unbdefined'){
                $q->where(function ($q) use ($data){
                    $q->where('product_name', 'like', '%'.$data['search_input'].'%');
                    $q->orwhere('long_desp', 'like', '%'.$data['search_input'].'%');
                    $q->orwhere('addi_desp', 'like', '%'.$data['search_input'].'%');
                    $q->orwhere('short_desp', 'like', '%'.$data['search_input'].'%');
                });
            }


            if(!empty($data['category_id']) && $data['category_id'] != '' && $data['category_id'] != 'unbdefined'){
                $q->where(function ($q) use ($data){
                    $q->where('category_id', $data['category_id']);

                });
            }

            if(!empty($data['tag']) && $data['tag'] != '' && $data['tag'] != 'unbdefined'){
                $q->where(function ($q) use ($data){
                    $all = '';
                    foreach(Product::all() as $product){
                        $explode = explode(',' , $product->tags) ;

                        if(in_array($data['tag'] , $explode)){
                            $all .= $product->id.',';
                        }
                    }
                    $explode2 = explode(',' , $all);
                    $q->find($explode2);
                });
            }




            $min = 0;
            $max = 0;
            if (!empty($data['min']) && $data['min'] != '' && $data['min'] != 'undefined') {
                $min = $data['min'];
            } else {
                $min = 1;
            }

            if(!empty($data['max']) && $data['max'] != '' && $data['max'] != 'unbdefined'){
                $max = $data['max'];
            }else{
                $max = Product::max('price');

            }

            if (!empty($data['min']) && $data['min'] != '' && $data['min'] != 'undefined' || !empty($data['max']) && $data['max'] != '' && $data['max'] != 'undefined') {
                $q->whereBetween('after_discount', [$min, $max]);
            }

            if (!empty($data['color_id']) && $data['color_id'] != '' && $data['color_id'] != 'undefined' || !empty($data['size_id']) && $data['size_id'] != '' && $data['size_id'] != 'undefined') {
                $q->whereHas('rel_to_inventory', function ($q) use ($data) {
                    if (!empty($data['color_id']) && $data['color_id'] != '' && $data['color_id'] != 'undefined') {
                        $q->whereHas('rel_to_color', function ($q) use ($data) {
                            $q->where('colors.id', $data['color_id']);
                        });
                    }
                    if (!empty($data['size_id']) && $data['size_id'] != '' && $data['size_id'] != 'undefined') {
                        $q->whereHas('rel_to_size', function ($q) use ($data) {
                            $q->where('sizes.id', $data['size_id']);
                        });
                    }
                });
            }



        })->orderBy($sorting, $type)->get();



        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $tags = Tag::all();
        return view('front.shop.shop' , [
            'product'=>$product,
            'sizes'=>$sizes,
            'colors'=>$colors,
            'categories'=>$categories,
            'tags'=>$tags,
        ]);
    }


    function recent_view(){
        // $product_ids =  Cookie::get('recent-view');


        $recent_info = json_decode(Cookie::get('recent-view'), true);

        if ($recent_info == NULL) {
            $recent_info = [];
            $after_unique = array_unique($recent_info); // exists check
        } else {
            $after_unique = array_reverse(array_unique($recent_info));
        }
        $recents = Product::find($after_unique);
        // $recents = Product::find($product_ids);
        return view('front.recent_view.recent_view', compact('recents'));
    }
}
