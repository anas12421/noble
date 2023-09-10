<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\BackendController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategorytController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\VariationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class, 'index'])->name('home');
Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dash');
// Route::get('/product/details',[FrontendController::class, 'product_details'])->name('product.details');
Route::get('/check/{slug}',[FrontendController::class, 'check'])->name('check');
Route::post('/getsize',[FrontendController::class, 'getsize']);
Route::post('/getquantity',[FrontendController::class, 'getquantity']);



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// user

Route::get('/user/update', [UserController::class, 'user_update'])->name('user.update');
Route::post('/user/info/update', [UserController::class, 'user_info_update'])->name('user.info.update');
Route::post('/password/update', [UserController::class, 'password_update'])->name('password.update');
Route::post('/photo/update', [UserController::class, 'photo_update'])->name('photo.update');


// User Lisr
Route::get('/user/list', [HomeController::class, 'user_list'])->name('user.list');
Route::get('/user/delete/{user_id}', [HomeController::class, 'user_delete'])->name('user.delete');
Route::post('/user/add', [HomeController::class, 'user_add'])->name('user.add');


// Category

Route::get('/category', [CatController::class ,'category'])->name('category');
Route::post('/category/add', [CatController::class ,'category_add'])->name('category.add');
Route::get('/category/soft/delete/{category_id}', [CatController::class ,'category_soft_delete'])->name('category.soft.delete');
Route::get('/category/trash/', [CatController::class ,'category_trash'])->name('category.trash');
Route::get('/category/restore/{id}', [CatController::class ,'category_restore'])->name('category.restore');
Route::get('/category/delete/{id}', [CatController::class ,'category_delete'])->name('category.delete');
Route::get('/category/edit/{id}', [CatController::class ,'category_edit'])->name('category.edit');
Route::post('/category/update/{id}', [CatController::class ,'category_update'])->name('category.update');
Route::post('/checked/delete', [CatController::class ,'checked_delete'])->name('checked.delete');
Route::post('/checked/restore', [CatController::class ,'checked_restore'])->name('checked.restore');

// Sub Category
Route::get('/subcategory', [SubcategorytController::class, 'sub_category'])->name('subcategory');
Route::post('/subcategory/store', [SubcategorytController::class, 'sub_category_store'])->name('subcategory.store');
Route::get('/subcategory/edit/{id}', [SubcategorytController::class, 'subcategory_edit'])->name('subcategory.edit');
Route::post('/subcategory/update/{id}', [SubcategorytController::class, 'subcategory_update'])->name('subcategory.update');
Route::get('/subcategory/delete/{id}', [SubcategorytController::class, 'subcategory_delete'])->name('subcategory.delete');


// Brand
Route::get('/brand', [BrandController::class , 'brand'])->name('brand');
Route::post('/brand/store', [BrandController::class , 'brand_store'])->name('brand.store');
Route::get('/brand/delete/{id}', [BrandController::class , 'brand_delete'])->name('brand.delete');
Route::get('/brand/update/{id}', [BrandController::class , 'brand_update'])->name('brand.update');
Route::post('/brand/final/update/{id}', [BrandController::class , 'brand_final_update'])->name('brand.final.update');


// Product

Route::get('/product',[ProductController::class, 'product'])->name('product');
Route::post('/product/store',[ProductController::class, 'product_store'])->name('product.store');
Route::post('/getsubcategory',[ProductController::class, 'getsubcategory']);
Route::post('/getstatus',[ProductController::class, 'getstatus']);
Route::get('/product/list',[ProductController::class, 'product_list'])->name('product.list');
Route::get('/product/delete/{id}',[ProductController::class, 'product_delete'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class, 'product_edit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class, 'product_update'])->name('product.update');
Route::get('/product/single',[FrontendController::class, 'product_single'])->name('product.single');



// Variatio
Route::get('/variation', [VariationController::class , 'variation'])->name('variation');
Route::post('/variation/store', [VariationController::class , 'color_store'])->name('color.store');
Route::post('/variation/size', [VariationController::class , 'size_store'])->name('size.store');
Route::get('/variation/color/delete/{id}', [VariationController::class , 'color_delete'])->name('color.delete');
Route::get('/variation/size/delete/{id}', [VariationController::class , 'size_delete'])->name('size.delete');

// Inventory
Route::get('/inventory/{id}',[InventoryController::class, 'inventory'])->name('inventory');
Route::post('/inventory/store/{id}',[InventoryController::class, 'inventory_store'])->name('inventory.store');
Route::get('/inventory/delete/{id}',[InventoryController::class, 'inventory_delete'])->name('inventory.delete');


// Frontend

// Menu
Route::get('/menu' , [MenuController::class , 'menu'])->name('menu');
Route::post('/menu/store' , [MenuController::class , 'menu_store'])->name('menu.store');
Route::get('/menu/delete/{id}' , [MenuController::class , 'menu_delete'])->name('menu.delete');

// Banner
Route::get('/banner' , [BannerController::class , 'banner'])->name('banner');
Route::post('/banner/store' , [BannerController::class , 'banner_store'])->name('banner.store');
Route::get('/banner/delete/{id}' , [BannerController::class , 'banner_delete'])->name('banner.delete');

// offer
Route::get('/offer' , [OfferController::class , 'offer'])->name('offer');
Route::post('/offer/1/{id}' , [OfferController::class , 'offer_1'])->name('offer.1');
Route::post('/offer/2/{id}' , [OfferController::class , 'offer_2'])->name('offer.2');



// Subscriber
Route::get('/subscriber',[SubscriberController::class,'subscriber'])->name('subscriber');
Route::post('/subscriber/store',[HomeController::class,'subscriber_store'])->name('subscriber.store');
Route::get('/subscriber/delete/{id}',[SubscriberController::class,'subscriber_delete'])->name('subscriber.delete');

// Footer
Route::get('/footer',[FooterController::class ,'footer'])->name('footer');
Route::post('/footer/1/{id}',[FooterController::class ,'footer1'])->name('footer1');
Route::post('/footer/2/{id}',[FooterController::class ,'footer2'])->name('footer2');
Route::post('/footer/3',[FooterController::class ,'footer3'])->name('footer3');
Route::get('/footer/3/delete/{id}',[FooterController::class ,'footer3_delete'])->name('footer3.delete');
Route::post('/footer/4',[FooterController::class ,'footer4'])->name('footer4');
Route::get('/footer/4/{id}',[FooterController::class ,'footer4_delete'])->name('footer4.delete');
Route::post('/footer/copyright/{id}',[FooterController::class ,'copyright'])->name('copyright');