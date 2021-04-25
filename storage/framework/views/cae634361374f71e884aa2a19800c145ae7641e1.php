

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" 
                    href="<?php echo e(route('vendor.categories')); ?>"><?php echo e(__('message.Back')); ?></a> 
            </div>
            <div class="btn-group">
                <a type="button"  class="btn btn-info" 
                    href="<?php echo e(route('vendor.categories')); ?>"><?php echo e(__('message.Categories List')); ?></a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="<?php echo e(route('vendor.store.category')); ?>" method="POST" >
             <?php echo e(csrf_field()); ?>

             <?php echo e(method_field('POST')); ?>

            <div class="card-body">
                <div class="form-group">
                    <label for="category_name"><?php echo e(__('message.Category Title')); ?></label>
                    <input type="text" name="category_name" 
                        class="form-control form-control-sm" id="category_name" 
                            placeholder="Enter Category Title">
                    <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-dark bg-primary"><?php echo e(__('message.Add New')); ?></button>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/vendor/categories/create.blade.php ENDPATH**/ ?>