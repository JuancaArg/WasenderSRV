<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'<i class="ni ni-curved-next"></i> Back',
		'url'=> route('user.device.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Edit Device')); ?></h4>
			</div>
			<div class="card-body">
				<form method="POST" class="ajaxform_instant_reload" action="<?php echo e(route('user.device.update',$device->uuid)); ?>">
					<?php echo csrf_field(); ?>
					<?php echo method_field('PUT'); ?>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Device Name')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="name" placeholder="My Iphone 13 Pro" value="<?php echo e($device->name); ?>" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
						<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Webhook Url')); ?></label>
						<div class="col-sm-12 col-md-7">
							<input type="url" value="<?php echo e($device->hook_url ?? ''); ?>" name="webhook_url" placeholder="your webhook receiver url" class="form-control">
							<small class="text-danger"><?php echo e(env('APP_NAME').__(' will sent via post method to this url')); ?></small>
						</div>

				</div>
				
								
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button type="submit" class="btn btn-outline-primary submit-btn"><?php echo e(__('Save Now')); ?></button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/device/edit.blade.php ENDPATH**/ ?>