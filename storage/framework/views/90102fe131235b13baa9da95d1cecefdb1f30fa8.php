<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title' => __('Create Support Ticket'),
'buttons'=>[
	[
		'name'=>'Back',
		'url'=> route('user.support.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Create Ticket')); ?></h4>
			</div>
			<div class="card-body">
				<form method="POST" class="ajaxform_instant_reload" action="<?php echo e(route('user.support.store')); ?>">
					<?php echo csrf_field(); ?>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Subject')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="subject" maxlength="100" required="" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Message')); ?></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control h-200" name="message" required="" maxlength="1000"></textarea>
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/support/create.blade.php ENDPATH**/ ?>