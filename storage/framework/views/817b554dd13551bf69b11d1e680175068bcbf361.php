<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Edit Gateway'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.gateways.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row ">
	<div class="col-lg-5 mt-5">
		<strong><?php echo e(__('Edit Payment Gateway')); ?></strong>
		<p><?php echo e(__('Edit gateway information for accepting payment')); ?></p>
	</div>
	<div class="col-lg-7 mt-5">
		<form class="ajaxform_instant_reload" action="<?php echo e(route('admin.gateways.update',$gateway->id)); ?>">
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
			<div class="card">
				<div class="card-body">
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="name"><?php echo e(__('Gateway Name')); ?></label>
						<input type="text" class="form-control" name="name" id="name" value="<?php echo e($gateway->name); ?>" required>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="logo"><?php echo e(__('Logo')); ?></label>
						<input type="file" id="logo" class="form-control" name="logo">
						<?php if($gateway->logo != ''): ?>
						<img src="<?php echo e(asset($gateway->logo)); ?>" height="30" alt="" class="image-thumbnail mt-2">
						<?php endif; ?>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="currency"><?php echo e(__('Currency')); ?></label>
						<input type="text" class="form-control" name="currency" id="currency" value="<?php echo e($gateway->currency); ?>" required>
					</div>
					<?php if($gateway->is_auto == 1): ?>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="sandbox"><?php echo e(__('Sandbox Mode')); ?></label>
						<select class="form-control selectric" name="test_mode" id="sandbox">
							<option value="1" <?php echo e($gateway->test_mode == 1 ? 'selected' : ''); ?>><?php echo e(__('Enable')); ?></option>
							<option value="0" <?php echo e($gateway->test_mode == 0 ? 'selected' : ''); ?>><?php echo e(__('Disable')); ?></option>
						</select>
					</div>
					<?php endif; ?>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="min_amount"><?php echo e(__('Minimum Amount')); ?></label>
						<input type="number" name="min_amount" id="min_amount" step="any" value="<?php echo e($gateway->min_amount); ?>" class="form-control" placeholder="<?php echo e(__("Minimum transaction amount")); ?>" required>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="max_amount"><?php echo e(__('Maximum Amount')); ?></label>
						<input type="number" name="max_amount" id="max_amount" step="any" value="<?php echo e($gateway->max_amount); ?>" class="form-control" placeholder="<?php echo e(__("Maximum transaction amount")); ?>" required>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="charge"><?php echo e(__('Charge')); ?></label>
						<input type="text" class="form-control" name="charge" id="charge" value="<?php echo e($gateway->charge ?? 0); ?>" required>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="multiply"><?php echo e(__('Multiply from base currency')); ?></label>
						<input type="number" step="any" class="form-control" name="multiply" id="multiply"  value="<?php echo e($gateway->multiply ?? 0); ?>"  required value="0">
					</div>
					<?php if($gateway->is_auto == 1): ?>
					<?php 
					   $data = json_decode($gateway->data ?? '')
					?>
					 <?php $__currentLoopData = $data ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="status"><?php echo e(ucwords(str_replace("_", " ", $key))); ?></label>
						<input type="text" class="form-control" name="data[<?php echo e($key); ?>]" value="<?php echo e($value); ?>">
					</div>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>

					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="status"><?php echo e(__('Payment Instruction')); ?></label>
						<textarea class="form-control" maxlength="1000" name="comment"><?php echo e($gateway->comment); ?></textarea>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="status"><?php echo e(__('Status')); ?></label>
						<select class="form-control selectric" name="status" id="status">
							<option value="1" <?php echo e($gateway->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
							<option value="0" <?php echo e($gateway->status == 0 ? 'selected' : ''); ?>><?php echo e(__('Deactivate')); ?></option>
						</select>
					</div>
					<div class="form-group mb-4">
						<button class="btn btn-neutral submit-button"><?php echo e(__('Update')); ?></button>
					</div>	
				</div>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/gateway/edit.blade.php ENDPATH**/ ?>