<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>
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
								<div class="row">
									<div class="col-sm-6">
										<label><?php echo e(__('Receivers')); ?></label>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-checkbox float-right">
											<input class="custom-control-input" id="selectall" type="checkbox" name="selectall">
											<label class="custom-control-label mt-1" for="selectall"><?php echo e(__('Select All Receivers')); ?></label>
										</div>
									</div>
								</div>
								<div class="receivers">
									<select class="form-control select2 " multiple name="receivers[]" >
										<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($contact->id); ?>">(<?php echo e($contact->name); ?>) - <?php echo e($contact->country_code.$contact->phone); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label><?php echo e(__('Delivery date')); ?></label>
								<input type="date" name="date" class="form-control" required="" min="<?php echo e(now()->format('Y-m-d')); ?>">
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
<script src="<?php echo e(asset('assets/plugins/select2/select2.min.js')); ?>"></script>
<script type="text/javascript">
	"use strict";
	$('.message_type').on('change',function(){
		var val=$(this).val();
		if (val == 'text') {
			$('.templates-list').hide();
			$('.plain-text').show();
		}
		else{
			$('.templates-list').show();
			$('.plain-text').hide();
		}
		
	});

	$('#selectall').on('change',function(){
		if ($(this).is(':checked')) {
			
			$('.receivers').hide();
		}
		else{
			$('.receivers').show();
		}

	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/schedule/create.blade.php ENDPATH**/ ?>