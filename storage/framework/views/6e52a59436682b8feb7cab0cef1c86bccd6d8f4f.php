

<?php $__env->startSection('content'); ?>

<!--main area-->
<main id="main" class="main-site">

	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="#" class="link">home</a></li>
				<li class="item-link"><span>login</span></li>
			</ul>
		</div>
		<div class=" main-content-area">

			<div class="wrap-iten-in-cart">
				<h3 class="box-title">Products Name</h3>
				<ul class="products-cart">
					<li class="pr-cart-item">
						<div class="product-image">
							<figure><img src="<?php echo e(asset('/web/assets/images/products/digital_18.jpg')); ?>" alt=""></figure>
						</div>
						<div class="product-name">
							<a class="link-to-product" href="#">Radiant-360 R6 Wireless Omnidirectional Speaker [White]</a>
						</div>
						<div class="price-field produtc-price"><p class="price">$256.00</p></div>
						<div class="quantity">
							<div class="quantity-input">
								<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >									
								<a class="btn btn-increase" href="#"></a>
								<a class="btn btn-reduce" href="#"></a>
							</div>
						</div>
						<div class="price-field sub-total"><p class="price">$256.00</p></div>
						<div class="delete">
							<a href="#" class="btn btn-delete" title="">
								<span>Delete from your cart</span>
								<i class="fa fa-times-circle" aria-hidden="true"></i>
							</a>
						</div>
					</li>
					<li class="pr-cart-item">
						<div class="product-image">
							<figure><img src="<?php echo e(asset('/web/assets/images/products/digital_20.jpg')); ?>" alt=""></figure>
						</div>
						<div class="product-name">
							<a class="link-to-product" href="#">Radiant-360 R6 Wireless Omnidirectional Speaker [White]</a>
						</div>
						<div class="price-field produtc-price"><p class="price">$256.00</p></div>
						<div class="quantity">
							<div class="quantity-input">
								<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">									
								<a class="btn btn-increase" href="#"></a>
								<a class="btn btn-reduce" href="#"></a>
							</div>
						</div>
						<div class="price-field sub-total"><p class="price">$256.00</p></div>
						<div class="delete">
							<a href="#" class="btn btn-delete" title="">
								<span>Delete from your cart</span>
								<i class="fa fa-times-circle" aria-hidden="true"></i>
							</a>
						</div>
					</li>												
				</ul>
			</div>

			<div class="summary">
				<div class="order-summary">
					<h4 class="title-box">Order Summary</h4>
					<p class="summary-info"><span class="title">Subtotal</span><b class="index">$512.00</b></p>
					<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
					<p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b></p>
				</div>
				<div class="checkout-info">
					<label class="checkbox-field">
						<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
					</label>
					<a class="btn btn-checkout" href="checkout.html">Check out</a>
					<a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
				</div>
				<div class="update-clear">
					<a class="btn btn-clear" href="#">Clear Shopping Cart</a>
					<a class="btn btn-update" href="#">Update Shopping Cart</a>
				</div>
			</div>

			<div class="wrap-show-advance-info-box style-1 box-in-site">
				<h3 class="title-box">Most Viewed Products</h3>
				<div class="wrap-products">
					<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

 						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
						<div class="product product-style-2 equal-elem ">
							<div class="product-thumnail">
								<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
									<figure><img src="<?php echo e(URL::asset('/storage/product/image/'.$product->image)); ?>" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
								</a>
								<div class="group-flash">
									<span class="flash-item new-label">new</span>
									<span class="flash-item sale-label">sale</span>
								</div>
								<div class="wrap-btn">
									<a href="#" class="function-link">quick view</a>
								</div>
							</div>
							<div class="product-info">
								<a href="#" class="product-name"><span><?php echo e($product->product_name); ?></span></a>
								<div class="wrap-price"><ins><p class="product-price"><?php echo e(number_format($product->regural_price ,2)); ?></p></ins> <del><p class="product-price"><?php echo e(number_format($product->sale_price ,2)); ?></p></del></div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
					</div>
				</div><!--End wrap-products-->
			</div>

		</div><!--end main content area-->
	</div><!--end container-->

</main>
<!--main area-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web.webBase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/web/home/cart.blade.php ENDPATH**/ ?>