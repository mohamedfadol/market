@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" 
                    href="{{route('vendor.categories')}}">{{ __('message.Back') }}</a> 
            </div>
            <div class="btn-group">
                <a type="button"  class="btn btn-info" 
                    href="{{route('vendor.categories')}}">{{ __('message.Categories List') }}</a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('vendor.store.category')}}" method="POST" >
             {{ csrf_field() }}
             {{ method_field('POST') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="title">{{ __('message.Category Title') }}</label>
                    <input type="text" name="category_name" 
                        class="form-control form-control-sm" id="title" 
                            placeholder="Enter Category Title">
                    @error('title') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-dark bg-primary">{{ __('message.Add New') }}</button>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
