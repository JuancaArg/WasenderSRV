<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
   <head>
      <meta charset="utf-8">
      <base href="<?php echo e(url('/')); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <title><?php echo e(env('APP_NAME')); ?> - <?php echo e(__('Make Payment')); ?></title>
      <!-- Favicon -->
      <link rel="icon" href="<?php echo e(asset(get_option('primary_data',true)->favicon)); ?>" type="image/png">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <!-- Icons -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
      <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
      <link rel='stylesheet' href="<?php echo e(asset('assets/css/uicons-regular-straight.css')); ?>">
      <!-- Page plugins -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/argon.css')); ?>" type="text/css">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>" type="text/css">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/toastify-js/src/toastify.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/pace/pace-theme-default.min.css')); ?>">
      <link href="<?php echo e(asset('assets/css/invoice.css')); ?>" rel="stylesheet">
      <?php echo $__env->yieldPushContent('css'); ?>
   </head>
   <body>
      <div class="container py-5 deposit-payment">
         <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-8">
               <div class="card">
                  <div class="card-body">
                     <?php echo $__env->yieldContent('content'); ?>                               
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="<?php echo e(asset('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
      <!-- Plugins  -->
      <script src="<?php echo e(asset('assets/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/plugins/form.js?v=1')); ?>"></script>
      <script src="<?php echo e(asset('assets/plugins/pace/pace.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/argon.js?v=1.1.1')); ?>"></script>
      <?php echo $__env->yieldPushContent('js'); ?>   
  
   </body>
</html><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/gateways/main.blade.php ENDPATH**/ ?>