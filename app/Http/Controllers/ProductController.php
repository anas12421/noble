<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function product(){
    $categories = Category::all();
    $brands = Brand::all();
    return view ('admin.product.index',[
        'categories' => $categories,
        'brands' => $brands,
    ]);
   }

   function product_store(Request $request){
    $request->validate([
       'category_id'=>'required',
       'subcategory_id'=>'required',
    //    'brand_id'=>'required',
       'product'=>'required',
       'price'=>'required',
       'preview'=>'required',
    ]);


    $remove = array("@", "#" , "(", ")", '"' ,":","*", "'", "/" , " ") ;
    $slug =Str::lower(str_replace($remove, '-',$request->product)).'-'.random_int(100, 30000) ;

    $preview = $request->preview;
    $extension = $preview->extension();
    $file_name = Str::lower(str_replace($remove, '-',$request->product)).'-'.random_int(100, 300).'.'.$extension;
    Image::make($preview)->save(public_path('uploads/product/preview/'.$file_name));

    $product_id =Product::insertGetId([
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'brand_id' => $request->brand_id,
        'product_name' => $request->product,
        'price' => $request->price,
        'discount' => $request->discount,
        'after_discount' => $request->price - $request->price * $request->discount / 100,
        'tags' => implode(',' ,$request->tags),
        'short_desp' => $request->short_desp,
        'long_desp' => $request->long_desp,
        'addi_desp' => $request->addi_desp,
        'preview' => $file_name,
        'slug' => $slug,
        'created_at' =>Carbon::now(),
    ]);

    $galleris = $request->gallery;

    foreach ($galleris as $gallery){
        $extension = $gallery->extension();
        $file_name = Str::lower(str_replace($remove, '-',$request->product)).'-'.random_int(100, 300).'.'.$extension;
        Image::make($gallery)->save(public_path('uploads/product/gallery/'.$file_name));

        ProductGallery::insert([
            'product_id' => $product_id,
            'gallery' => $file_name,
            'created_at' => Carbon::now(),
        ]);

    }

    return back()->with('success' , 'Product Add Success');

   }




   function getsubcategory(Request $request){
    $str = '<option value="">Select Sub Category</option>';
    $subcategories = Subcategory::where('category_id', $request->category_id)->get();
   foreach($subcategories as $subcategory){
    $str .= '<option value="'.$subcategory->id.'">'.$subcategory->sub_category.'</option>';
   }
   echo $str;
   }

   function product_list(){
    // $products = Product::simplePaginate(5); //paginate with  arrow
    $products = Product::paginate(5);  //paginate with number and arrow
    // $products = Product::all();
    $categories = Category::all();
    $subcategories = Subcategory::all();
    $brands = Brand::all();
    return view('admin.product.list',[
        'products'=>$products,
        'categories'=>$categories,
        'subcategories'=>$subcategories,
        'brands'=>$brands,
    ]);
   }

   function product_delete($id){
    Product::find($id)->delete();
    return back();
   }

   function getstatus(Request $request){
    Product::find($request->product_id)->update([
        'status'=> $request->status,
    ]);
   }

   function product_edit($id){
    $products = Product::find($id);
    $categories = Category::all();
    $subcategories = Subcategory::all();
    $brands = Brand::all();
    $gallery = ProductGallery::all();
    return view('admin.product.edit' ,[
        'products'=>$products,
        'categories'=>$categories,
        'subcategories'=>$subcategories,
        'brands'=>$brands,
        'gallery'=>$gallery,
    ]);
   }

   function product_update (Request $request, $id){
    if($request->preview ==  null){

        Product::find($id)->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product,
            'price' => $request->price,
            'discount' => $request->discount,
            'after_discount' => $request->price - $request->price * $request->discount / 100,
            'tags' => implode(',' ,$request->tags),
            'short_desp' => $request->short_desp,
            'long_desp' => $request->long_desp,
            'addi_desp' => $request->addi_desp,

        ]);

        return back()->with('updated', 'Product Details Updated') ;

    }

    else{
        $preview_select = Product::find($id);
    $preview_img =public_path('uploads/product/preview/'.$preview_select->preview);
    unlink($preview_img);


    $remove = array("@", "#" , "(", ")", '"' ,":","*", "'", "/" , " ") ;
    $preview = $request->preview;
    $extension = $preview->extension();
    $file_name = Str::lower(str_replace($remove, '-',$request->product)).'-'.random_int(100, 300).'.'.$extension;
    Image::make($preview)->save(public_path('uploads/product/preview/'.$file_name));

        Product::find($id)->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product,
            'price' => $request->price,
            'discount' => $request->discount,
            'after_discount' => $request->price - $request->price * $request->discount / 100,
            'tags' => implode(',' ,$request->tags),
            'short_desp' => $request->short_desp,
            'long_desp' => $request->long_desp,
            'addi_desp' => $request->addi_desp,
            'preview' => $file_name,
        ]);

        return back()->with('updated', 'Product Details Updated');
    }

   }


}
