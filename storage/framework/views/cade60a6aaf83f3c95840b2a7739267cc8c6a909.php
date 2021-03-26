

<?php $__env->startSection('content'); ?>
<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">						
                        <div class="login-form form-item form-stl">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                            <?php if(session('status')): ?>
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <form name="frm-login" method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?> 
                                <fieldset class="wrap-title">
                                    <h3 class="form-title"><?php echo e(__('Log in to your account')); ?></h3>										
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname"><?php echo e(__('Email Address')); ?>:</label>
                                    <input type="text" id="frm-login-uname" name="email" placeholder="Type your email address">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass"><?php echo e(__('Password')); ?>:</label>
                                    <input type="password" id="frm-login-pass" name="password" placeholder="************">
                                </fieldset>
                                
                                <fieldset class="wrap-input">
                                    <label class="remember-field">
                                        <input class="frm-input "  id="remember_me" name="remember" value="forever" type="checkbox"><span><?php echo e(__('Remember me')); ?></span>
                                    </label>
                                    <a class="link-function left-position" href="<?php echo e(route('password.request')); ?>" title="Forgotten password?"><?php echo e(__('Forgotten password?')); ?></a>
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="<?php echo e(__('Login')); ?>" name="submit">
                            </form>
                        </div>												
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web.webBase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/auth/login.blade.php ENDPATH**/ ?>