<?php $__env->startSection('content'); ?>
<?php
$enabled=true;
?>
<div class="col-sm-12">
   <h3 class="text-center">🔑 <?php echo e(__('Lets verify the purchase key')); ?></h3>
   <?php if(Session::has('purchase-key-error')): ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <span class="alert-icon"><i class="fi fi-rs-triangle-warning"></i></span>
      <span class="alert-text"><strong><?php echo e(__('Opps')); ?></strong> <?php echo e(Session::get('purchase-key-error')); ?></span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true" class="text-danger">×</span>
      </button>
   </div>
   <?php endif; ?>

   <form class="ajaxform_instant_reload" method="post" action="<?php echo e(route('install.verify')); ?>">
      <?php echo csrf_field(); ?>
      <div class="form-group mt-5">
         <label class="text-right"><?php echo e(__('Enter your purchase key')); ?></label>
         <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank" class="float-right text-primary"><?php echo e(__('How to find purchase key ?')); ?> </a>
         <input type="text" name="purchase_key" class="form-control" required="" placeholder="16ed9971-0c47-XXXX-XXXX-XXXXXX" maxlength="36" minlength="30">
      </div>
      <button class="btn btn-outline-primary mt-1 submit-btn">
      <span class="mb-1"><?php echo e(__('Verify & Next')); ?></span> 
      <i class="fi  fi-rs-angle-right text-right mt-5"></i>
      </button>
   </form>
   
</div>
<div class="clear"></div>
<br>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('installer.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/installer/purchase.blade.php ENDPATH**/ ?>