

<?php $__env->startSection('content'); ?>
<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link"><?php echo e(__('home')); ?></a></li>
                <li class="item-link"><span><?php echo e(__('Register')); ?></span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
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

                            <form class="form-stl" method="POST" action="<?php echo e(route('register')); ?>" name="frm-login">
                                <?php echo csrf_field(); ?>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title"><?php echo e(__('Create an account')); ?></h3>
                                    <h4 class="form-subtitle"><?php echo e(__('Personal infomation')); ?></h4>
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname"><?php echo e(__('Name')); ?> *</label>
                                    <input type="text" id="frm-reg-lname" name=" name" placeholder="Last name*">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email"><?php echo e(__('Email Address')); ?> *</label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                                </fieldset>
                                <fieldset class="wrap-functions ">
                                    <label class="remember-field">
                                        <input name="remember" id="new-letter" value="forever" type="checkbox"><span>Sign Up for Newsletter</span>
                                    </label>
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title"><?php echo e(__('Login Information')); ?></h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass"><?php echo e(__('Password')); ?> *</label>
                                    <input type="text" id="frm-reg-pass" name="password" placeholder="Password">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass"><?php echo e(__('Confirm Password')); ?> *</label>
                                    <input type="text" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password">
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="Register" name="register">
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
<?php echo $__env->make('layouts.web.webBase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/auth/register.blade.php ENDPATH**/ ?>