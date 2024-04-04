<?php $__env->startSection('head'); ?>
  <?php echo $__env->make('layouts.main.headersection',[], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header row">
				<h4 class="text-left col-6"><?php echo e(__('Sent Custom Message')); ?></h4>
				<h4 class="text-right col-6"><?php echo e(__('Request Charge:')); ?> <span class="text-right"><?php echo e(transactionCharge('custom_message')); ?></span></h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('user.sent.customtext')); ?>" class="ajaxform_reset_form">
					<?php echo csrf_field(); ?>
				
				
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Select Number')); ?></label>
					<div class="col-sm-12 col-md-7">    
						<select class="form-control"  name="device" required="">
									<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($device->id); ?>">+<?php echo e($device->phone); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('SMS To')); ?></label>
					<div class="col-sm-12 col-md-7">
						
						<div class="input-group form-row">
							<div class="input-group-prepend col-2">
								<select name="phone_code" class="form-control">
									<?php $__currentLoopData = $phoneCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phoneCodes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($phoneCodes->dial_code); ?>"><?php echo e($phoneCodes->code); ?> <?php echo e($phoneCodes->dial_code); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
							<input id="phone" type="number" class="form-control col-10" name="phone" placeholder="Enter Phone number" value="" required="" autofocus="" minlength="10" maxlength="10">
						</div>
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
						<button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Send Request')); ?></button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/bulk/single.blade.php ENDPATH**/ ?>