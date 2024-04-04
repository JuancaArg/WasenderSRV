<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Write Your Post</h4>
			</div>
			<div class="card-body">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Choose App')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="app_type">
							<option value="whatsappCloud"><?php echo e(__('Whatsapp Cloud API')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Trigger Event')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="event_type">
							<option value="message_notification"><?php echo e(__('Message Notification')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Webhook URL')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="webwhook" value="" class="form-control">
					</div>
				</div>

				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-primary"><?php echo e(__('Capture Webhook Response')); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('API By '.env('APP_NAME'))); ?></h4>
			</div>
			<div class="card-body">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Choose App')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="app_type">
							<option value="whatsappCloud"><?php echo e(__('Whatsapp Cloud API')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Action Event')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="action_event">
							<option value="GET"><?php echo e(__('GET')); ?></option>
							<option value="POST"><?php echo e(__('POST')); ?></option>
							<option value="PUT"><?php echo e(__('PUT')); ?></option>
							<option value="PATCH"><?php echo e(__('PATCH')); ?></option>
							<option value="DELETE"><?php echo e(__('DELETE')); ?></option>
							<option value="CUSTOM"><?php echo e(__('CUSTOM REQUEST')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Choose Method')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="method">
							<option value="GET"><?php echo e(__('GET')); ?></option>
							<option value="POST"><?php echo e(__('POST')); ?></option>
							<option value="PUT"><?php echo e(__('PUT')); ?></option>
							<option value="PATCH"><?php echo e(__('PATCH')); ?></option>
							<option value="DELETE"><?php echo e(__('DELETE')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Payload Type')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="payload">
							<option value="json"><?php echo e(__('JSON')); ?></option>
							<option value="form_data"><?php echo e(__('Form Data')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Authentication')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="payload">
							<option value="no_auth"><?php echo e(__('No Auth')); ?></option>
							<option value="bearer_token"><?php echo e(__('Bearer Token')); ?></option>
							<option value="basic_auth"><?php echo e(__('Basic Auth')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Add Header')); ?></label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control" name="payload">
							<option value="no_auth"><?php echo e(__('No Auth')); ?></option>
							<option value="bearer_token"><?php echo e(__('Bearer Token')); ?></option>
							<option value="basic_auth"><?php echo e(__('Basic Auth')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Data')); ?></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="data"></textarea>
					</div>
				</div>

				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-primary"><?php echo e(__('Save & Send Request')); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Sent Any Message To A Number</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('user.whatsapp.store')); ?>">
					<?php echo csrf_field(); ?>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Enter The Phone Number Who Will Recive')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="number" name="phone" value="8801571310561" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Access Token')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="access_token" value="EAAtzisIzvtoBAL0rhHNGeDPiLHoy6IPPZBLZA2MHT7juPyKwhaPKM7DLbGOhgUPu4HyWR5nxJ8376yoKgwK2m7pneJZCKEt6UFfhHq5digsMlUQ3llMJrRzGjxrQK7tcz71FVT9xLEZBtoPtuYZCCVWpugGBulP0JIWuZBVO1piGTP33Lko4siriMMxJzY1skXBCInvMeMDQZDZD" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Phone Number ID')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="phone_id" value="101811502712902" class="form-control">
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Template Name')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="template" value="maruf_test_template" class="form-control">
					</div>
				</div>
				

				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button type="submit" class="btn btn-outline-primary"><?php echo e(__('Send Now')); ?></button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/apps/create.blade.php ENDPATH**/ ?>