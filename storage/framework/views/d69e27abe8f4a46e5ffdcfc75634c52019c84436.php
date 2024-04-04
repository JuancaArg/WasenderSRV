<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(env('APP_NAME')); ?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo e(asset(get_option('primary_data',true)->favicon ?? '')); ?>" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/uicons-regular-straight.css')); ?>">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <?php echo $__env->yieldPushContent('topcss'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/argon.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/toastify-js/src/toastify.css')); ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/pace/pace-theme-default.min.css')); ?>">
  <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?php echo e(url('/login')); ?>">
          <img src="<?php echo e(asset(get_option('primary_data',true)->logo ?? '')); ?>" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <?php echo $__env->make('layouts.main.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php echo $__env->make('layouts.main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head'); ?>
    <!-- Page content -->
    <div class="container-fluid mt--6">

     <?php echo $__env->yieldContent('content'); ?>

     <!-- Footer -->
     <?php echo $__env->make('layouts.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
 </div>
 <form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form"><?php echo csrf_field(); ?></form>

 <!-- Core -->
 <script src="<?php echo e(asset('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
 <?php echo $__env->yieldPushContent('topjs'); ?>  
 <script src="<?php echo e(asset('assets/plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
 <!-- Plugins  -->
 <script src="<?php echo e(asset('assets/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/plugins/toastify-js/src/toastify.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/plugins/form.js?v=2')); ?>"></script>
 <?php echo $__env->yieldPushContent('js'); ?>
 <script src="<?php echo e(asset('assets/plugins/pace/pace.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/argon.js?v=1.1.1')); ?>"></script>
 <?php echo $__env->yieldPushContent('bottomjs'); ?>
 <?php if(Request::is('user/*')): ?>
 <script src="<?php echo e(asset('assets/js/pages/notifications.js')); ?>"></script>
 <?php endif; ?>

</body>
</html>

<?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/layouts/main/app.blade.php ENDPATH**/ ?>