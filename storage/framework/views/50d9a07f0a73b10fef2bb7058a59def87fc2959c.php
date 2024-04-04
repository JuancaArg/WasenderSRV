<?php $__env->startSection('content'); ?>
<?php
$enabled=true;
?>
<div class="col-sm-12">
   <h1 class="text-center mt-5 success-alert">🎉 <?php echo e(__('Congratulations Installlation is complete')); ?></h1>
   
   <div class="row">
      <div class="col-sm-6 text-right">
         <a href="<?php echo e(url('/')); ?>" class="btn btn-neutral"><i class="fi fi-rs-rocket-lunch"></i> <?php echo e(__('Go to the main site')); ?></a>
      </div>
       <div class="col-sm-6 text-left">
         <a href="<?php echo e(url('/login')); ?>" class="btn btn-neutral"><i class="fi fi-rs-user"></i> <?php echo e(__('Login to admin')); ?></a>
      </div>      
   </div>
</div>
<div class="clear"></div>
<br>      
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/plugins/canvas-confetti/confetti.browser.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/installer.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('installer.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/installer/congratulations.blade.php ENDPATH**/ ?>