<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'Back',
		'url'=> route('user.contact.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Create Contact')); ?></h4>
			</div>
			<div class="card-body">
				<form method="POST" class="ajaxform_reset_form" action="<?php echo e(route('user.contact.store')); ?>">
					<?php echo csrf_field(); ?>				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('User Name')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="name" placeholder="Jhone Doe" maxlength="50" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Whatsapp Number')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="number" name="phone" placeholder="<?php echo e(__('Enter Phone Number With Country Code')); ?>" maxlength="15" class="form-control">
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/user/contact/create.blade.php ENDPATH**/ ?>