<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
[
'name'=>'Back',
'url'=> route('user.schedule-message.index'),
]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header row">
				<h4 class="text-left col-6"><?php echo e(__('Create Scheduled Message')); ?></h4>
				
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('user.schedule-message.store')); ?>" class="ajaxform_reset_form" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label><?php echo e(__('Scheduled Name')); ?></label>
								<input type="text" name="title" class="form-control" required="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label><?php echo e(__('Select Number')); ?></label>
								<select class="form-control"  name="device" required="">
									<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($device->id); ?>"><?php echo e($device->phone); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								

								<label><?php echo e(__('Receiver Group')); ?></label>								
								
								<select class="form-control select2 "  name="group" >
									<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?> - (<?php echo e($group->contacts_count); ?> <?php echo e(__('Contacts')); ?>)</option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label><?php echo e(__('Delivery date and time')); ?></label>
							<div class="input-group">							

								
								<input type="datetime-local" name="date" class="form-control" required="" min="<?php echo e(now()->format('Y-m-d')); ?>">
								<div class="input-group-append">
									<select name="timezone" class="form-control" required="">
										<option value="" selected="" disabled=""><?php echo e(__('Select TImezone')); ?></option>
										<?php $__currentLoopData = timezone_identifiers_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($timezone); ?>" >
											<?php echo e($timezone); ?>

										</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>						


							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label><?php echo e(__('Messaging Type')); ?></label>
								<select class="form-control message_type"  name="message_type" required="">
									<option value="text"><?php echo e(__('Text Message')); ?></option>
									<option value="template"><?php echo e(__('Template Message')); ?></option>
								</select>
							</div>
						</div>
					</div>
					<div class="row plain-text">
						<div class="col-sm-12 plain-text">
							<div class="form-group">
								<label><?php echo e(__('Message')); ?></label>
								<textarea class="form-control h-200" name="message" required="" maxlength="1000" placeholder="<?php echo e(__('note : {name} write the name according to the recipient.')); ?>"></textarea>
							</div>
						</div>
						
					</div>
					<div class="templates-list none">
						<div class="form-group">
							<label><?php echo e(__('Select Template')); ?></label>
							<select  class="form-control" name="template">
								<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($template->id); ?>"><?php echo e($template->title); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Create Schedule')); ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<script src="<?php echo e(asset('assets/js/pages/user/schedule-create.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/schedule/create.blade.php ENDPATH**/ ?>