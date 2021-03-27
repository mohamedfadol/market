

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="<?php echo e(route('vendor.create.product')); ?>">
                    <?php echo e(__('message.New product')); ?></a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr> 
                    <th><?php echo e(__('message.ID')); ?></th>
                    <th><?php echo e(__('message.Title')); ?></th>
                    <th><?php echo e(__('message.Vendor Name')); ?></th>
                    <th><?php echo e(__('message.Date')); ?></th>
                    <th><?php echo e(__('message.Actions')); ?></th>
                </tr>
            </thead>
            <?php if($products->count() > 0): ?>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><?php echo e($product->product_name); ?></td> 
                        <td><?php echo e($product->vendor->name); ?></td> 
                        <td><?php echo e($product->created_at); ?></td>
                        <td class="text-center">
                            <div class="btn-group content-align-center">
                                <a type="button" class="btn btn-success"
                                    href="<?php echo e(route('vendor.edit.product',$product->id)); ?>">
                                    <?php echo e(__('message.Edit')); ?>

                                </a>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm delete"
                                    data-toggle="modal" data-target="#modal-warning"
                                        data-id=<?php echo e($product->id); ?> ><?php echo e(__('message.Delete')); ?> </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php else: ?>
                <p class="text-info text-center"><?php echo e(__('message.Theres No Categories In Your Database To Show Them')); ?></p>
            <?php endif; ?>
            <tfoot>
                <tr>
                    <th><?php echo e(__('message.ID')); ?></th>
                    <th><?php echo e(__('message.Title')); ?></th> 
                    <th><?php echo e(__('message.Vendor Name')); ?></th>
                    <th><?php echo e(__('message.Date')); ?></th>
                    <th><?php echo e(__('message.Actions')); ?></th>
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
              <h4 class="modal-title text-white"><?php echo e(__('message.For Comfirm Delete product')); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <div class="modal-body">
            <form action="  " method="post">
                <?php echo e(method_field('delete')); ?>

                 <?php echo e(csrf_field()); ?>

            <div class="bg-danger text-white text-center"><?php echo e(__('message.Sure Delete product')); ?></div>
            <input type="hidden" id="id" name="id" value="">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal"><?php echo e(__('message.Not Delete')); ?></button>
              <button type="submit" class="btn btn-outline-dark bg-danger"><?php echo e(__('message.Yes ! Delete')); ?></button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- end /.modal delete -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/vendor/products/index.blade.php ENDPATH**/ ?>