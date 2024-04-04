<!doctype html>
<html class="no-js" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
   <?php echo SEOMeta::generate(); ?>

   <?php echo OpenGraph::generate(); ?>

   <?php echo Twitter::generate(); ?>

   <?php echo JsonLd::generate(); ?>

   
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(get_option('primary_data',true)->favicon ?? '')); ?>">

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/custom-animation.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/swiper-bundle.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/slick.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/nice-select.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/flaticon.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/meanmenu.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome-pro.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/spacing.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
</head>

<body>
   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
   </button>
   <!-- back-to-top-end  -->
    <?php echo $__env->yieldContent('content'); ?>
    <div class="body-overlay"></div>

    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <!-- JS here -->
   <script src="<?php echo e(asset('frontend/js/jquery.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/waypoints.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/swiper-bundle.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/slick.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/magnific-popup.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/counterup.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/wow.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/nice-select.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/meanmenu.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/isotope-pkgd.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/imagesloaded-pkgd.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/ajax-form.js')); ?>"></script>
   <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>



</body>
</html><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/layouts/main.blade.php ENDPATH**/ ?>