

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" 
                    href="<?php echo e(route('vendor.products')); ?>"><?php echo e(__('message.Back')); ?></a> 
            </div>
            <div class="btn-group">
                <a type="button"  class="btn btn-info" 
                    href="<?php echo e(route('vendor.products')); ?>"><?php echo e(__('message.products List')); ?></a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="<?php echo e(route('vendor.update.product',$product->id)); ?>" method="POST" >
        <div class="btn-group">
                <button type="submit" class="btn btn-outline-dark bg-primary"><?php echo e(__('message.Update')); ?></button>
            </div>
             <?php echo e(csrf_field()); ?>

             <?php echo e(method_field('PUT')); ?>

            <div class="card-body">
                <div class="row">
                <div class="col-md-6">

                <div class="form-group">
                    <label for="product_name"><?php echo e(__('message.product Name')); ?></label>
                    <input type="text" name="product_name" value="<?php echo e($product->product_name); ?>"
                        class="form-control form-control-sm" id="product_name" 
                            placeholder="Enter product Name">
                    <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="form-group">
                  <label><?php echo e(__('message.Select Category')); ?></label>
                  <select name="category_id" class="form-control select2" style="width: 100%;">
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>  ><?php echo e($category->category_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="sale_price"><?php echo e(__('message.sale price')); ?></label>
                    <input type="number" name="sale_price"  value="<?php echo e($product->sale_price); ?>"
                        class="form-control form-control-sm" id="sale_price" 
                            placeholder="Enter product Sale Price">
                    <?php $__errorArgs = ['sale_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="long_desc"><?php echo e(__('message.long description')); ?></label>
                    <input type="text" name="long_desc"  value="<?php echo e($product->long_desc); ?>"
                        class="form-control form-control-sm" id="long_desc" 
                            placeholder="Enter Product Description">
                    <?php $__errorArgs = ['long_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="featured"><?php echo e(__('message.product featured')); ?></label>
                    <input type="number" name="featured"  value="<?php echo e($product->featured); ?>"
                        class="form-control form-control-sm" id="featured" 
                            placeholder="Enter Product Featured">
                    <?php $__errorArgs = ['featured'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="quantity"><?php echo e(__('message.product quantity')); ?></label>
                    <input type="number" name="quantity"  value="<?php echo e($product->quantity); ?>"
                        class="form-control form-control-sm" id="quantity" 
                            placeholder="Enter Product Quantity">
                    <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                </div>

                <div class="col-md-6">
                
                <div class="form-group">
                  <label><?php echo e(__('message.Select Stock')); ?></label>
                  <select name="stock_status" class="form-control select2" style="width: 100%;">
                    <option value="instock" <?php echo e($product->quantity == 'instock' ? 'checked' : ''); ?> >In Stock</option>
                    <option value="outofstock" <?php echo e($product->quantity == 'outofstock' ? 'checked' : ''); ?> >Out Of Stock</option>
                  </select>
                  <?php $__errorArgs = ['stock_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="regural_price"><?php echo e(__('message.regural price')); ?></label>
                    <input type="number" name="regural_price"  value="<?php echo e($product->regural_price); ?>"
                        class="form-control form-control-sm" id="regural_price" 
                            placeholder="Enter product Regural Price">
                    <?php $__errorArgs = ['regural_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="sku"><?php echo e(__('message.product sku')); ?></label>
                    <input type="text" name="sku"  value="<?php echo e($product->sku); ?>"
                        class="form-control form-control-sm" id="sku" 
                            placeholder="Enter product SKU">
                    <?php $__errorArgs = ['sku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="short_desc"><?php echo e(__('message.short description')); ?></label>
                    <input type="text" name="short_desc"  value="<?php echo e($product->short_desc); ?>"
                        class="form-control form-control-sm" id="short_desc" 
                            placeholder="Enter Product Description">
                    <?php $__errorArgs = ['short_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="images"><?php echo e(__('message.product images')); ?></label>
                    <input type="file" name="images" 
                        class="form-control form-control-sm" id="images">
                    <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="image"><?php echo e(__('message.product image')); ?></label>
                    <input type="file" name="image" 
                        class="form-control form-control-sm" id="image" >
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/vendor/products/edit.blade.php ENDPATH**/ ?>