@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" 
                    href="{{route('vendor.products')}}">{{ __('message.Back') }}</a> 
            </div>
            <div class="btn-group">
                <a type="button"  class="btn btn-info" 
                    href="{{route('vendor.products')}}">{{ __('message.products List') }}</a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('vendor.update.product',$product->id)}}" method="POST" >
        <div class="btn-group">
                <button type="submit" class="btn btn-outline-dark bg-primary">{{ __('message.Update') }}</button>
            </div>
             {{ csrf_field() }}
             {{ method_field('PUT') }}
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">

                <div class="form-group">
                    <label for="product_name">{{ __('message.product Name') }}</label>
                    <input type="text" name="product_name" value="{{ $product->product_name }}"
                        class="form-control form-control-sm" id="product_name" 
                            placeholder="Enter product Name">
                    @error('product_name') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                
                <div class="form-group">
                  <label>{{ __('message.Select Category') }}</label>
                  <select name="category_id" class="form-control select2" style="width: 100%;">
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : ''}}  >{{ $category->category_name }}</option>
                    @endforeach
                  </select>
                  @error('category_id') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="sale_price">{{ __('message.sale price') }}</label>
                    <input type="number" name="sale_price"  value="{{ $product->sale_price }}"
                        class="form-control form-control-sm" id="sale_price" 
                            placeholder="Enter product Sale Price">
                    @error('sale_price') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="long_desc">{{ __('message.long description') }}</label>
                    <input type="text" name="long_desc"  value="{{ $product->long_desc }}"
                        class="form-control form-control-sm" id="long_desc" 
                            placeholder="Enter Product Description">
                    @error('long_desc') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="featured">{{ __('message.product featured') }}</label>
                    <input type="number" name="featured"  value="{{ $product->featured }}"
                        class="form-control form-control-sm" id="featured" 
                            placeholder="Enter Product Featured">
                    @error('featured') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="quantity">{{ __('message.product quantity') }}</label>
                    <input type="number" name="quantity"  value="{{ $product->quantity }}"
                        class="form-control form-control-sm" id="quantity" 
                            placeholder="Enter Product Quantity">
                    @error('quantity') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                </div>

                <div class="col-md-6">
                
                <div class="form-group">
                  <label>{{ __('message.Select Stock') }}</label>
                  <select name="stock_status" class="form-control select2" style="width: 100%;">
                    <option value="instock" {{ $product->quantity == 'instock' ? 'checked' : ''}} >In Stock</option>
                    <option value="outofstock" {{ $product->quantity == 'outofstock' ? 'checked' : ''}} >Out Of Stock</option>
                  </select>
                  @error('stock_status') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="regural_price">{{ __('message.regural price') }}</label>
                    <input type="number" name="regural_price"  value="{{ $product->regural_price }}"
                        class="form-control form-control-sm" id="regural_price" 
                            placeholder="Enter product Regural Price">
                    @error('regural_price') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="sku">{{ __('message.product sku') }}</label>
                    <input type="text" name="sku"  value="{{ $product->sku }}"
                        class="form-control form-control-sm" id="sku" 
                            placeholder="Enter product SKU">
                    @error('sku') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="short_desc">{{ __('message.short description') }}</label>
                    <input type="text" name="short_desc"  value="{{ $product->short_desc }}"
                        class="form-control form-control-sm" id="short_desc" 
                            placeholder="Enter Product Description">
                    @error('short_desc') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="images">{{ __('message.product images') }}</label>
                    <input type="file" name="images" 
                        class="form-control form-control-sm" id="images">
                    @error('images') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="image">{{ __('message.product image') }}</label>
                    <input type="file" name="image" 
                        class="form-control form-control-sm" id="image" >
                    @error('image') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                </div>
                </div>    
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
