<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> 'Edit Template','buttons'=>[
    [
        'name'=>'<i class="fas fa-step-backward"></i> &nbspBack',
        'url'=> route('user.template.index'),
    ]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('topcss'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

                  

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <h4 class="text-left col-6"><?php echo e(__('Edit Template')); ?></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                       <?php echo $__env->make($component, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="help-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Shortcode')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo e(__('{name} = recipient can see his/her name')); ?></li>
          <li class="list-group-item"><?php echo e(__('{phone_number} = recipient can see his/her phone number')); ?></li>
          <li class="list-group-item"><?php echo e(__('{my_name} = recipient can see your name')); ?></li>
          <li class="list-group-item"><?php echo e(__('{my_email} = recipient can see your email')); ?></li>
          <li class="list-group-item"><?php echo e(__('{my_contact_number} = recipient can see your contact number')); ?></li>
      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-neutral" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/vendor/select2/dist/js/select2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/pages/bulk/template.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/template/edit.blade.php ENDPATH**/ ?>