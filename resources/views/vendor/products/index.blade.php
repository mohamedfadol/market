@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="{{route('vendor.create.product')}}">
                    {{ __('message.New product') }}</a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr> 
                    <th>{{ __('message.ID') }}</th>
                    <th>{{ __('message.Title') }}</th>
                    <th>{{ __('message.Vendor Name') }}</th>
                    <th>{{ __('message.Date') }}</th>
                    <th>{{ __('message.Actions') }}</th>
                </tr>
            </thead>
            @if($products->count() > 0)
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td> 
                        <td>{{ $product->vendor->name }}</td> 
                        <td>{{ $product->created_at }}</td>
                        <td class="text-center">
                            <div class="btn-group content-align-center">
                                <a type="button" class="btn btn-success"
                                    href="{{route('vendor.edit.product',$product->id)}}">
                                    {{ __('message.Edit') }}
                                </a>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm delete"
                                    data-toggle="modal" data-target="#modal-warning"
                                        data-id={{ $product->id }} >{{ __('message.Delete') }} </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            @else
                <p class="text-info text-center">{{ __('message.Theres No Categories In Your Database To Show Them') }}</p>
            @endif
            <tfoot>
                <tr>
                    <th>{{ __('message.ID') }}</th>
                    <th>{{ __('message.Title') }}</th> 
                    <th>{{ __('message.Vendor Name') }}</th>
                    <th>{{ __('message.Date') }}</th>
                    <th>{{ __('message.Actions') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->


 <!-- start /.modal delete -->
<div class="modal fade delete" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title text-white">{{ __('message.For Comfirm Delete product') }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <div class="modal-body">
            <form action="  " method="post">
                {{ method_field('delete') }}
                 {{ csrf_field() }}
            <div class="bg-danger text-white text-center">{{ __('message.Sure Delete product') }}</div>
            <input type="hidden" id="id" name="id" value="">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">{{ __('message.Not Delete') }}</button>
              <button type="submit" class="btn btn-outline-dark bg-danger">{{ __('message.Yes ! Delete') }}</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- end /.modal delete -->
@endsection
