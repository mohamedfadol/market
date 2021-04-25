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
        <form action="{{route('vendor.store.product')}}" method="POST" >
        <div class="btn-group">
                <button type="submit" class="btn btn-outline-dark bg-primary">{{ __('message.Add New') }}</button>
            </div>
             {{ csrf_field() }}
             {{ method_field('POST') }}
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">

                <div class="form-group">
                    <label for="product_name">{{ __('message.product Name') }}</label>
                    <input type="text" name="product_name" 
                        class="form-control form-control-sm" id="product_name" 
                            placeholder="Enter product Name">
                    @error('product_name') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                
                <div class="form-group">
                  <label>{{ __('message.Select Category') }}</label>
                  <select name="category_id" class="form-control select2" style="width: 100%;">
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}" >{{ $category->category_name }}</option>
                    @endforeach
                  </select>
                  @error('category_id') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="sale_price">{{ __('message.sale price') }}</label>
                    <input type="number" name="sale_price" 
                        class="form-control form-control-sm" id="sale_price" 
                            placeholder="Enter product Sale Price">
                    @error('sale_price') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="long_desc">{{ __('message.long description') }}</label>
                    <input type="text" name="long_desc" 
                        class="form-control form-control-sm" id="long_desc" 
                            placeholder="Enter Product Description">
                    @error('long_desc') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="featured">{{ __('message.product featured') }}</label>
                    <input type="number" name="featured" 
                        class="form-control form-control-sm" id="featured" 
                            placeholder="Enter Product Featured">
                    @error('featured') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="quantity">{{ __('message.product quantity') }}</label>
                    <input type="number" name="quantity" 
                        class="form-control form-control-sm" id="quantity" 
                            placeholder="Enter Product Quantity">
                    @error('quantity') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                </div>

                <div class="col-md-6">
                
                <div class="form-group">
                  <label>{{ __('message.Select Stock') }}</label>
                  <select name="stock_status" class="form-control select2" style="width: 100%;">
                    <option value="instock" >In Stock</option>
                    <option value="outofstock" >Out Of Stock</option>
                  </select>
                  @error('stock_status') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="regural_price">{{ __('message.regural price') }}</label>
                    <input type="number" name="regural_price" 
                        class="form-control form-control-sm" id="regural_price" 
                            placeholder="Enter product Regural Price">
                    @error('regural_price') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="sku">{{ __('message.product sku') }}</label>
                    <input type="text" name="sku" 
                        class="form-control form-control-sm" id="sku" 
                            placeholder="Enter product SKU">
                    @error('sku') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="short_desc">{{ __('message.short description') }}</label>
                    <input type="text" name="short_desc" 
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
                    <img id="blah" src="#" alt="..." class="img-thumbnail">
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



@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
    $(function() {
        var imgPrev = function(input, imgPlaceholder) {

            if (input.files) {
                var allFiles = input.files.length;

                for (i = 0; i < allFiles; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('#multiImg').on('change', function() {
            imgPrev(this, 'div.preview');
        });
    });
    </script>

<script>
    /* function for perview image*/
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function(){
        readURL(this);
    });
    /* function for perview image*/
</script>

@endsection