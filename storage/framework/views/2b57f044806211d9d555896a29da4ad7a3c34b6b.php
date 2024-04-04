<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Sent List Message</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('user.send.list.message')); ?>">
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
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Header Text')); ?></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="header_text" required=""></textarea>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Body Text')); ?></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="body_text" required=""></textarea>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Footer Text')); ?></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="footer_text" required=""></textarea>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Action Button Title')); ?></label>
					<div class="col-sm-12 col-md-7">
						
						<input type="text" name="action_button_title" required="" class="form-control" required="">
					</div>
				</div>

				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('List Section 1 title')); ?></label>
					<div class="col-sm-12 col-md-7">
						
						<input type="text" name="list_section_1_title" required="" class="form-control" required="">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Section 1 Child Row Id')); ?></label>
					<div class="col-sm-12 col-md-7">
						
						<input type="text" name="section_1_child_row_id" required="" class="form-control" required="">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Section 1 Child Row Title')); ?></label>
					<div class="col-sm-12 col-md-7">
						
						<input type="text" name="section_1_child_row_title" required="" class="form-control" required="">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Section 1 Child Row Description')); ?></label>
					<div class="col-sm-12 col-md-7">
						
						<input type="text" name="section_1_child_row_description" required="" class="form-control" required="">
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/message/message_with_list.blade.php ENDPATH**/ ?>