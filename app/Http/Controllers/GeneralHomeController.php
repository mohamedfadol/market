<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GeneralHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $now = now();
        $toDay = Carbon::parse($now)->format('l');
        $categories = Category::orderBy('id','desc')->limit(6)->get();
        $products = Product::orderBy('id','desc')->limit(10)->get();
        $latestProducts = Product::orderBy('id','asc')->limit(10)->get();
        return view('web.home.index')
                    ->with(['toDay'=> $toDay,
                            'categories' => $categories,
                            'products' => $products,
                            'latestProducts' => $latestProducts
                    ]);
    }

 
    public function productShowDetails(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $Relatedproducts = Product::orderBy('id','desc')->get();
        $Popularproducts = Product::orderBy('id','desc')->limit(4)->get();
        return view('web.home.productDetails',
                    ['product' => $product,
                    'Relatedproducts' => $Relatedproducts,
                    'Popularproducts' => $Popularproducts
                    ]);
    }

 
    public function productAboutUs()
    {
        return view('web.home.aboutus');
    }

 
    public function productShoping()
    {
        $products = Product::orderBy('id','desc')->paginate(9);
        $Popularproducts = Product::orderBy('id','desc')->limit(4)->get();
        return view('web.home.shoping',['products' => $products,'Popularproducts' => $Popularproducts]);
    }

 
    public function productContactUs()
    {
        return view('web.home.contact-us');
    }

 
    public function productCart()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('web.home.cart',['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
