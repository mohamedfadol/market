@extends('layouts.admin.base')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="{{route('vendor.create.category')}}">
                    {{ __('message.New Category') }}</a>
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
            @if($categories->count() > 0)
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td> 
                        <td>{{ $category->category_name }}</td> 
                        <td>{{ $category->vendor->name }}</td> 
                        <td>{{ $category->created_at }}</td>
                        <td class="text-center">
                            <div class="btn-group content-align-center">
                                <a type="button" class="btn btn-success"
                                    href="{{route('vendor.edit.category',$category->id)}}">
                                    {{ __('message.Edit') }}
                                </a>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm delete"
                                    data-toggle="modal" data-target="#modal-warning"
                                        data-id={{ $category->id }} >{{ __('message.Delete') }} </a>
                            </div>
                        </td>
                    </tr>
                @empty
                 <p class="text-info text-center">{{ __('message.Theres No Categories In Your Database To Show Them') }}</p>
                @endforelse
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



 <!-- start Modal for edit  -->
<div class="modal fade edit" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModal">{{ __('message.Edit Job') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('categories.update','category')}}" method="POST">
            @csrf
            {{ method_field('patch')}}
            <input type="hidden" name="id" value="" id="id">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label col-form-label-sm">{{ __('message.Name English') }}</label>
                <div class="col-sm-10">
                <input type="text" name="name" class="form-control form-control-sm" id="name" />
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('message.Close') }}</button>
            <button type="submit" class="btn btn-primary">{{ __('message.Save changes') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- end Modal for edit  -->


 <!-- start /.modal delete -->
<div class="modal fade delete" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title text-white">{{ __('message.For Comfirm Delete Category') }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <div class="modal-body">
            <form action=" {{ route('categories.destroy','category') }} " method="post">
                {{ method_field('delete') }}
                 {{ csrf_field() }}
            <div class="bg-danger text-white text-center">{{ __('message.Sure Delete Category') }}</div>
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