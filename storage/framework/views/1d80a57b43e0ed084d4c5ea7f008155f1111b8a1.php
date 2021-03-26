
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('customer.home')); ?>" class="brand-link">
      <img src="<?php echo e(asset('/template/dist/img/logo.png')); ?>" alt="AdminLTE Logo" class="brand-image  elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo e(__('message.Market')); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <!--Sidebar user panel (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
      <!--  <div class="image">-->
      <!--    <img src="<?php echo e(asset('/template/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">-->
      <!--  </div>-->
      <!--  <div class="info">-->
      <!--    <a href="<?php echo e(route('admin.dashboard')); ?>" class="d-block"><?php echo e(Auth::user()->name); ?></a>-->
      <!--  </div>-->
      <!--</div>-->

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                <?php echo e(__('Dashboard')); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('vendor.categories')); ?>" class="nav-link <?php echo e((\Request::route()->getName() == 'vendor.categories') ? 'active' : ''); ?>">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p><?php echo e(__('message.Categories')); ?></p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo e(route('vendor.products')); ?>" class="nav-link <?php echo e((\Request::route()->getName() == 'vendor.products') ? 'active' : ''); ?>">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p><?php echo e(__('message.products')); ?></p>
                </a>
              </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  


<?php /**PATH C:\xampp\htdocs\market\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>