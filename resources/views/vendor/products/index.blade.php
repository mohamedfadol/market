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
                    <th>{{ __('message.product images') }}</th>
                    <th>{{ __('message.Title') }}</th>
                    <th>{{ __('message.Vendor Name') }}</th>
                    <th>{{ __('message.Category') }}</th>
                    <th>{{ __('message.sale price') }}</th>
                    <th>{{ __('message.regural price') }}</th>
                    <th>{{ __('message.product quantity') }}</th>
                    <th>{{ __('message.Stock') }}</th>
                    <th>{{ __('message.SKU') }}</th>
                    <th>{{ __('message.Date') }}</th>
                    <th>{{ __('message.Actions') }}</th>
                </tr>
            </thead>
            @if($products->count() > 0)
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                        <img class="img-thumbnail"
                            src="{{ URL::asset('/storage/product/image/'.$product->image) }}"
                                width="80" />
                        </td>
                        <td>{{ $product->product_name }}</td> 
                        <td>{{ $product->vendor->name }}</td> 
                        <td>{{ $product->category->category_name }}</td>
                        <td>{{ $product->sale_price }}</td>
                        <td>{{ $product->regural_price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                        @if( $product->stock_status == 'instock')
                        <label class="btn btn-primary btn-sm">{{ $product->stock_status }}</label> 
                        @elseif( $product->stock_status == 'outofstock')
                        <label class="btn btn-danger btn-sm">{{ $product->stock_status }}</label>
                        @endif
                        </td>
                        <td>{{ $product->sku }}</td>
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
                <p class="text-info text-center">{{ __('message.Theres No Product In Your Database To Show Them') }}</p>
            @endif
            <tfoot>
                <tr> 
                    <th>{{ __('message.ID') }}</th>
                    <th>{{ __('message.product images') }}</th>
                    <th>{{ __('message.Title') }}</th>
                    <th>{{ __('message.Vendor Name') }}</th>
                    <th>{{ __('message.Category') }}</th>
                    <th>{{ __('message.sale price') }}</th>
                    <th>{{ __('message.regural price') }}</th>
                    <th>{{ __('message.product quantity') }}</th>
                    <th>{{ __('message.Stock') }}</th>
                    <th>{{ __('message.SKU') }}</th>
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
            <form action=" {{route('products.destroy','product')}} " method="post">
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



@section('scripts')
    <script>
        /* function for edit CostsTypes with alert modal */
        $("#editModal").on('show.bs.modal.edit', function(event){
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var name_ar = button.data('name_ar');
            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #name_ar').val(name_ar);

        });
    </script>
    <script>
        /* function for delete CostsTypes with alert modal */
        $("#modal-warning").on('show.bs.modal.delete', function(event){
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var modal = $(this);
            modal.find('.modal-body #id').val(id);
        });
    </script>

@stop()