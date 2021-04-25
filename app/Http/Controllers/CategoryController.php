<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class CategoryController extends Controller
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
        $categories = Category::orderBy('id','desc')->get();
        return view('vendor.categories.index')->with(['categories' => $categories]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('vendor.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name       =  $request->input('category_name');
        $category->user_id =  Auth::user()->id;
        $category->save();
         return  redirect(route('vendor.categories'))->with('success' ,'Category Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category = Category::findOrFail($category->id);
        return view('vendor.categories.edit')->with(['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category = Category::findOrFail($category->id);
        $category->category_name       =  $request->input('category_name');
        $category->user_id =  Auth::user()->id;
        $category->save();
        return  redirect(route('vendor.categories'))->with('success' ,'Category Has Been Inserted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::where('id', $request->id);
        $category->delete();
        return redirect(route('vendor.categories'))->with('success', 'Category Has Been Deleted');
         
    }
}
