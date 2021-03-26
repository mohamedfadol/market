  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">Home</a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">-->
      <!--  <a href="#" class="nav-link">Contact</a>-->
      <!--</li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class=" btn btn-primary btn-sm" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <?php echo e(__('message.Choose language')); ?>

        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                        href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                            <?php echo e($properties['native']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </li>
        <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->is_admin === 2): ?>
                    <!-- Authentications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-user"></i>
                            <span class=""><?php echo e(auth()->user()->name); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">Your Informations</span>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <a href="" class="dropdown-item  text-center" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();"> <i class="fas fa-power-off"> </i> 
                                    <?php echo e(__('Logout')); ?>

                                </a>
                            </form>
                        </div>
                    </li>
                <?php else: ?>
                <li class="nav-item dropdown">
                    <a href="<?php echo e(Route('customer.home')); ?>" class="dropdown-item dropdown-footer">Home</a>
                </li>
            <?php endif; ?>  
                <?php endif; ?>  
        <?php else: ?>
                <li class="nav-item dropdown">
                    <a href="<?php echo e(Route('register')); ?>" class="dropdown-item dropdown-footer">Register</a>
                </li> 
                <li class="nav-item dropdown">
                    <a href="<?php echo e(Route('login')); ?>" class="dropdown-item dropdown-footer">Login</a>
                </li>
        <?php endif; ?>
    </ul>
  </nav>
  <!-- /.navbar -->
<?php /**PATH C:\xampp\htdocs\market\resources\views/layouts/admin/nav.blade.php ENDPATH**/ ?>