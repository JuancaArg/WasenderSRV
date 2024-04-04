<?php $__env->startSection('content'); ?>
<?php
$enabled=true;
?>
<div class="col-sm-12">
   <h3 class="text-center">🎉 <?php echo e(__('Welcome to QServe Web Installer')); ?></h3>
   <table class="header table table-hover mt-3">
    <tr>
      <th><?php echo e(__('Extension')); ?></th>
      <th class="text-right"><?php echo e(__('Status')); ?></th>
    </tr>
      <tr>
         <td><h4><?php echo e(__('PHP >= 8.1')); ?></h4></td>
         <td class="text-right">
           <i class="fas <?php echo e(PHP_VERSION >= 8.1 ? 'fas fa-check text-success' : 'fas fa-times text-danger'); ?>"></i> 
        </td>
     </tr>
     <?php $__currentLoopData = $extentions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $extention): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php
     $extention != true ? $enabled = false : '';
     ?>
     <tr>
      <td><h4><?php echo e($key); ?></h4></td>
      <td class="text-right">
        <i class="fas <?php echo e($extention == 1 ? 'fas fa-check text-success' : 'fas fa-times text-danger'); ?>"></i> 
     </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<h3 class="col-8 float-left mt-3 <?php echo e($enabled == true ? 'text-dark'  : 'text-danger'); ?>">
<?php echo e($enabled == true ? __('Click to next button')  : __('Some extensions are missing')); ?>

</h3>
<a href="<?php echo e($enabled == true ? url('/install/purchase') : 'javascript:void(0)'); ?>" class="btn btn-outline-primary col-4 float-right mt-3">
 <?php if($enabled == false): ?> <del> <?php endif; ?>
   <span class="mb-1"><?php echo e(__('Next')); ?></span> 
   <i class="fi  fi-rs-angle-right text-right mt-5"></i> 
<?php if($enabled == false): ?> </del> <?php endif; ?>
</a>
</div>

<div class="clear"></div>
<br>        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('installer.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/installer/requirements.blade.php ENDPATH**/ ?>