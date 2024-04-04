<?php $__env->startComponent('mail::message'); ?>

<?php echo e($subject); ?>


<?php echo e(__('Name')); ?> <strong><?php echo e($name); ?></strong><br> 
<?php echo e(__('Email')); ?> <strong><?php echo e($email); ?></strong><br> 
<?php echo e(__('Phone')); ?> <strong><?php echo e($phone); ?></strong><br> 

<?php echo e(__('message:')); ?>,
<?php echo e($message); ?>



<?php echo e(__('Thanks')); ?>,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/mails/contact.blade.php ENDPATH**/ ?>