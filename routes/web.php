<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Route::get('/ ', function () { return view('welcome'); });


	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        
// route for admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','auth:sanctum', 'verified','Admin']], function(){

    Route::get('/dashboard' , [AdminController::class ,'index'])->name('admin.dashboard');

}); 

// route for vendor
Route::group(['prefix' => 'vendor', 'middleware' => ['auth','auth:sanctum', 'verified','Vendor']], function(){
    // 
            // start categories routs //
    Route::get('/dashboard' , [VendorController::class ,'index'])->name('vendor.dashboard');
    Route::get('/categories' , [CategoryController::class ,'index'])->name('vendor.categories');
    Route::get('/category/create' , [CategoryController::class ,'create'])->name('vendor.create.category');
    Route::post('/category/store' , [CategoryController::class ,'store'])->name('vendor.store.category');
    Route::get('/category/{category}/edit' , [CategoryController::class ,'edit'])->name('vendor.edit.category');
    Route::put('/category/{category}/update' , [CategoryController::class ,'update'])->name('vendor.update.category');
    Route::delete('/category/{category}/destroy' , [CategoryController::class ,'destroy'])->name('vendor.destroy.category');
    // 
            // end categories routs //
    // 
            // start products routs //
    Route::get('/products' , [ProductController::class ,'index'])->name('vendor.products');
    Route::get('/product/create' , [ProductController::class ,'create'])->name('vendor.create.product');
    Route::post('/product/store' , [ProductController::class ,'store'])->name('vendor.store.product');
    Route::get('/product/{product}/edit' , [ProductController::class ,'edit'])->name('vendor.edit.product');
    Route::put('/product/{product}/update' , [ProductController::class ,'update'])->name('vendor.update.product');
    Route::delete('/product/{product}/destroy' , [ProductController::class ,'destroy'])->name('vendor.destroy.product');
    // 
            // end products routs //
    //
    
}); 
        
// route for Customer
Route::group(['middleware' => ['Customer']], function(){

    Route::get('/home' , [CustomerController::class ,'index'])->name('customer.home'); 

});


});	/** End ALL LOCALIZED ROUTES  **/
 