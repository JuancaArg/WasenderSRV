<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Sent Image By Link</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('user.send.message.with.preview')); ?>">
					<?php echo csrf_field(); ?>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Phone ID')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="number" name="phone_id" value="<?php echo e(env('PHONE_ID')); ?>" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Access Token')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="access_token" value="<?php echo e(env('ACCESS_TOKEN')); ?>" class="form-control">
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Enter The Phone Number Who Will Recive')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="number" name="phone" value="<?php echo e(env('SENT_TO')); ?>" class="form-control" required="">
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Image Link')); ?></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="link" required=""></textarea>
					</div>
				</div>
				
								

				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button type="submit" class="btn btn-outline-primary"><?php echo e(__('Send Request')); ?></button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/message/message_with_image_link.blade.php ENDPATH**/ ?>