<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('Edit Profile'),
'buttons' =>[
	[
		'name'=> __('Back to dashboard'),
		'url'=> url('admin/dashboard'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row ">
	<div class="col-lg-5 mt-5">
        <strong><?php echo e(__('General Settings')); ?></strong>
        <p><?php echo e(__('Edit you basic credentials')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform" action="<?php echo e(route('admin.profile.update','general')); ?>" enctype="multipart/form-data">
        	<?php echo csrf_field(); ?>
        	<?php echo method_field('PUT'); ?>
        	<div class="card">
            <div class="card-body">
                <div class="from-group row">
                    <label class="col-lg-12"><?php echo e(__('Name')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="name" required="" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
                    </div>
                </div>     
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Email')); ?></label>
                    <div class="col-lg-12">
                       <input type="email" name="email" required="" class="form-control" value="<?php echo e(Auth::user()->email); ?>">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Phone')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="phone" required="" class="form-control" value="<?php echo e(Auth::user()->phone); ?>">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Address (will used for invoice)')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="address" required="" class="form-control" value="<?php echo e(Auth::user()->address); ?>">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Avatar')); ?></label>
                    <div class="col-lg-12">
                        <input type="file" name="avatar"  class="form-control" accept="image/*">
                    </div>
                </div>
                 <div class="from-group row mt-3">
                    <div class="col-lg-12">
                       <button class="btn btn-neutral submit-button btn-sm float-left"><?php echo e(__('Update Settings')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<div class="row ">
	<div class="col-lg-5">
        <strong><?php echo e(__('Password')); ?></strong>
        <p><?php echo e(__('Change Your Password')); ?></p>
    </div>
    <div class="col-lg-7">
    	<form class="ajaxform_reset_form" action="<?php echo e(route('admin.profile.update','password')); ?>">
    		<?php echo csrf_field(); ?>
    		<?php echo method_field('PUT'); ?>
        <div class="card">
            <div class="card-body">
                <div class="from-group row">
                    <label class="col-lg-12"><?php echo e(__('Old Password')); ?></label>
                    <div class="col-lg-12">
                        <input type="password" name="oldpassword" required="" class="form-control">
                    </div>
                </div>     
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('New Password')); ?></label>
                    <div class="col-lg-12">
                       <input type="password" name="password" required="" class="form-control">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Confirm Password')); ?></label>
                    <div class="col-lg-12">
                        <input type="password" name="password_confirmation" required="" class="form-control">
                    </div>
                </div>
                 <div class="from-group row mt-3">
                    <div class="col-lg-12">
                       <button class="btn btn-neutral submit-button btn-sm float-left"><?php echo e(__('Update Password')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/profile.blade.php ENDPATH**/ ?>