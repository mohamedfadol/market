<div>
    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Product Categories</h3>
        <div class="wrap-top-banner">
            <a href="#" class="link-banner banner-effect-2">
                <figure><img src="<?php echo e(asset('/web/assets/images/fashion-accesories-banner.jpg')); ?>" width="1170" height="240" alt=""></figure>
            </a>

        </div>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-control">
                    <?php $__currentLoopData = $lessCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a wire:click="getProductById(<?php echo e($category->id); ?>)" class="tab-control-item"><?php echo e($category->category_name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </div>
                <div class="tab-contents">
                    <div class="tab-content-item active" id="fashion_1a">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('home.product.details',$product->id)); ?>" title="<?php echo e($product->product_name); ?>">
                                            <figure><img src="<?php echo e(URL::asset('/storage/product/image/'.$product->image)); ?>" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="<?php echo e(route('home.product.details',$product->id)); ?>" class="product-name"><span><?php echo e($product->product_name); ?></span></a>
                                        <div class="wrap-price"><span class="product-price"><?php echo e(number_format($product->regural_price ,2)); ?></span></div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <?php endif; ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\market\resources\views/livewire/products-detail.blade.php ENDPATH**/ ?>