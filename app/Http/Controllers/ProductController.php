<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( session('success')){
            toast(session('success'),'success');
        }
        $products = Product::orderBy('id','desc')->get();
        return view('vendor.products.index')->with(['products' => $products]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('vendor.products.create')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // dd($request->all());
        $this->validate($request, [
            'product_name'      => 'required|string',
            'stock_status'      => 'nullable|string',
            'quantity'          => 'nullable',
            'sale_price'        => 'nullable|numeric',
            'featured'          => 'nullable',
            'category_id'       => 'nullable',
            'image'             => 'nullable',
            'images.*'          => 'nullable'
        ]);
        
        $product = new Product(); 
        if ($request->hasFile('image')) {
            //dd($request->image);
            // Get File Name With Extenison
            $fileNameWithEex = $request->file('image')->getClientOriginalName();
             //dd($fileNameWithEex);

            // Get fileName Only
            $fileName = pathinfo($fileNameWithEex , PATHINFO_FILENAME);
            //dd($fileName);

            // Get FileExtenison
            $extension = $request->file('image')->getClientOriginalExtension();
            //dd($extension);

            // fileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //dd($fileNameToStore);

            // Upload file
            $folder = '/public/product/image';
            $path = $request->file('image')->storeAs($folder, $fileNameToStore);
            //dd($path);
        }else{
            $fileNameToStore = 'No Image To Store In .jpg';
        }
        if ($request->hasFile('images')) {
            $files = [];
            if($request->hasfile('images')){
                foreach($request->file('images') as $file){
                    $name = time().rand(1,100).'.'.$file->extension();
                    $folder = '/public/products/images';
                    $file->storeAs($folder, $name);
                    $files[] = $name;
                }
             }
        }else{
            $files = 'No Images To Store In .jpg';
        }
        $product->product_name  = $request->input('product_name');
        $product->slug          = Str::slug($request->input('product_name'));
        $product->image         = $fileNameToStore;
        //dd($fileNameToStore);
        $product->images        = json_encode($files);
        $product->stock_status  = $request->input('stock_status');
        $product->sale_price    = $request->input('sale_price');
        $product->regural_price = $request->input('regural_price');
        $product->sku           = $request->input('sku');
        $product->short_desc    = $request->input('short_desc');
        $product->long_desc     = $request->input('long_desc');
        $product->featured      = $request->input('featured');
        $product->quantity      = $request->input('quantity');
        $product->category_id   = $request->input('category_id');
        $product->user_id       =  Auth::user()->id;
        $product->save();
        return  redirect(route('vendor.products'))->with('success' ,'Product Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $categories = Category::orderBy('id','desc')->get();
        return view('vendor.products.edit')->with(['product' => $product,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
           // dd($request->all());
           $this->validate($request, [
            'product_name'      => 'required|string',
            'stock_status'      => 'required|string',
            'quantity'          => 'required',
            'sale_price'        => 'required|numeric',
            'featured'          => 'required',
            'category_id'       => 'required',
            'image'             => 'required',
            'images.*'          => 'nullable'
        ]);
        if ($request->hasFile('image')) {
            // Get File Name With Extenison
            $fileNameWithEex = $request->file('image')->getClientOriginalName();
            // Get fileName Only
            $fileName = pathinfo($fileNameWithEex , PATHINFO_FILENAME);
            // Get FileExtenison
            $extension = $request->file('image')->getClientOriginalExtension();
            // fileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload file
            $folder = '/public/product/image';
            $path = $request->file('image')->storeAs($folder, $fileNameToStore);
            // dd($path);
        }else{
            $fileNameToStore = 'No Image To Store In .jpg';
        }
        if ($request->hasFile('images')) {
            $files = [];
            if($request->hasfile('images')){
                foreach($request->file('images') as $file){
                    $name = time().rand(1,100).'.'.$file->extension();
                    $folder = '/public/products/images';
                    $file->storeAs($folder, $name);
                    $files[] = $name;
                }
             }
        }else{
            $files = 'No Images To Store In .jpg';
        }
        $product = Product::findOrFail($product->id);
        $product->product_name  = $request->input('product_name');
        $product->slug          = Str::slug($request->input('product_name'));
        $product->image         = $fileNameToStore;
        $product->images        = json_encode($files);
        $product->stock_status  = $request->input('stock_status');
        $product->sale_price    = $request->input('sale_price');
        $product->regural_price = $request->input('regural_price');
        $product->sku           = $request->input('sku');
        $product->short_desc    = $request->input('short_desc');
        $product->long_desc     = $request->input('long_desc');
        $product->featured      = $request->input('featured');
        $product->quantity      = $request->input('quantity');
        $product->category_id   = $request->input('category_id');
        $product->user_id       =  Auth::user()->id;
        $product->save();
        return  redirect(route('vendor.products'))->with('success' ,'Product Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::where('id', $request->id);
        $product->delete();
        return redirect(route('vendor.products'))->with('success', 'Product Has Been Deleted');
    }
}
