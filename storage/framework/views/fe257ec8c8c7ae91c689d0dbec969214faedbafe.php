<?php if(Request::is('admin/*')): ?>

 <?php echo $__env->make('layouts.main.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>

 <?php echo $__env->make('layouts.main.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/layouts/main/sidebar.blade.php ENDPATH**/ ?>