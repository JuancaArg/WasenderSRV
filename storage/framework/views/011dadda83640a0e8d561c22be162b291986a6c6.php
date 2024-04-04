<?php $__env->startComponent('mail::message'); ?>

Dear <?php echo e($data['name']); ?>,

<?php echo e(__('Thanks for useing ')); ?> <strong><?php echo e($data['plan_name']); ?></strong>. 
<?php echo e(__('Your subscription will ending soon the last due date is ')); ?> <strong><?php echo e($data['will_expire']); ?></strong>.
<?php echo e(__('Please renew your subscription')); ?>


<?php $__env->startComponent('mail::table'); ?>
| <?php echo e(__('Description')); ?> | <?php echo e(__('Amount')); ?>  |
| :---------------------- | :------------------ |
<?php $__currentLoopData = $data['contents'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
| <?php echo e($key); ?> | <?php echo e($content); ?> |
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => url($data['link']) ]); ?>
<?php echo e(__('Renew Subscription Now')); ?>

<?php echo $__env->renderComponent(); ?>


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/mails/renewalalert.blade.php ENDPATH**/ ?>