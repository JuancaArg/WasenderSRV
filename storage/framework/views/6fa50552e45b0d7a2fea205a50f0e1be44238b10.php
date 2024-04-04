<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Edit Profile Information</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('user.profile.update')); ?>">
					<?php echo csrf_field(); ?>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('WhatsApp PHONE_ID')); ?></label>
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
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Address')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="address" value="" class="form-control" placeholder="<business-address>">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Description')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="description" value="" class="form-control" placeholder="<business-description>">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('vertical')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="vertical" value="" class="form-control" placeholder="<business-industry>">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('About')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="about" value="" class="form-control" placeholder="<profile-about-text>">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('email')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="email" name="email" value="" class="form-control" placeholder="<business-email>">
					</div>
				</div>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('websites')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="websites" value="" placeholder="example.com,anotherdomain.com" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Profile Pic (base64 format)')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="profile_picture_handle" value="" placeholder="example.com,anotherdomain.com" class="form-control">
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/profile/edit.blade.php ENDPATH**/ ?>