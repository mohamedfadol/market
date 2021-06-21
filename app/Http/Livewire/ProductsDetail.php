<?php

namespace App\Http\Livewire;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductsDetail extends Component
{
    public $lessCategories = [] ,$products=[];

    public function mount()
    {
        $this->lessCategories = Category::orderBy('id','desc')->limit(6)->get();
        $this->products = Product::all();
    }

    public function getProductById($category_id)
    {
        $this->products = Product::where('category_id',$category_id)->get();
    }
    public function render()
    {
        return view('livewire.products-detail');
    }
}
