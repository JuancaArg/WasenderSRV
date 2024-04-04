<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'Back',
		'url'=> route('user.device.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(Session::has('new-user')): ?>
<div class="row justify-content-center">
	<div class="col-sm-12">
		<div class="alert bg-gradient-primary text-white alert-dismissible fade show success-alert" role="alert">
			<span class="alert-text"><strong><?php echo e(__('Hi. ').Auth::user()->name); ?></strong> <?php echo e(__('Welcome to ').env('APP_NAME')); ?> <?php echo e(Session::get('new-user')); ?></span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
	</div>  
	<?php endif; ?>    
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Create Device')); ?></h4>
			</div>
			<div class="card-body">
				<form method="POST" class="ajaxform_instant_reload" action="<?php echo e(route('user.device.store')); ?>">
					<?php echo csrf_field(); ?>
					<div class="form-group row mb-4">
						<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Device Name')); ?></label>
						<div class="col-sm-12 col-md-7">
							<input type="text" name="name" placeholder="My Iphone 13 Pro" class="form-control">
						</div>
					</div>
					<div class="form-group row mb-4">
						<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
						<div class="col-sm-12 col-md-7">
							<button type="submit" class="btn btn-outline-primary submit-btn"><?php echo e(__('Create Now')); ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/device/create.blade.php ENDPATH**/ ?>