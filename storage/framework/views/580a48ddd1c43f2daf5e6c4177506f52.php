<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('uploads/favicon.png')); ?>">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/style.css?v=1.0')); ?>">
        <!-- Styles -->
        
    </head>
    <body class="grey-bg">
        <main>
      <!-- error area start -->
      <div class="breadcrumb__area breadcrumb-height p-relative grey-bg mt-8-per"
         data-background="<?php echo e(asset('assets/frontend/img/breadcrumb/breadcrumb.jpg')); ?>">        
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center">
                     <h3 class="breadcrumb__title"><?php echo $__env->yieldContent('code'); ?></h3>
                     <div class="breadcrumb__list">
                        <span><?php echo $__env->yieldContent('message'); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- error area end -->      
   </main>
   <script src="<?php echo e(asset('assets/frontend/js/jquery.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/frontend/js/bootstrap.bundle.min.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/frontend/js/magnific-popup.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/frontend/js/wow.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/frontend/js/meanmenu.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/frontend/js/main.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/errors/minimal.blade.php ENDPATH**/ ?>