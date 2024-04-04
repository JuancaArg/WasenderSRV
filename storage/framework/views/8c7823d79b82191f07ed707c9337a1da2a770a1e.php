<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('Edit Profile'),
'buttons' =>[
	[
		'name'=> __('Back to dashboard'),
		'url'=> url('user/dashboard'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row ">
	<div class="col-lg-5 mt-5">
        <strong><?php echo e(__('Authentication Key')); ?></strong>
        <p><?php echo e(__('Use auth key for authenticate your api request')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform_instant_reload" action="<?php echo e(route('user.profile.update','auth-key')); ?>">
        	<?php echo csrf_field(); ?>
        	<?php echo method_field('PUT'); ?>
        	<div class="card">
            <div class="card-body">
               
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Auth API Key')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="authket" required="" class="form-control" value="<?php echo e(Auth::user()->authkey); ?>" disabled="">
                    </div>
                </div>
                 <div class="from-group row mt-3">
                    <div class="col-lg-12">
                       <button class="btn btn-neutral submit-button btn-sm float-left"> <?php echo e(__('Regenerate Auth Key')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/profile/auth-key.blade.php ENDPATH**/ ?>