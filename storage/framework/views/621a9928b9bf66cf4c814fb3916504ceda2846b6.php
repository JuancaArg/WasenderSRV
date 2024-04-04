<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create Gateway'),
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
		<strong><?php echo e(__('Create Payment Gateway')); ?></strong>
		<p><?php echo e(__('Create manual payment gateway for accepting payment')); ?></p>
	</div>
	<div class="col-lg-7 mt-5">
		<form class="ajaxform_instant_reload" action="<?php echo e(route('admin.gateways.store')); ?>" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<div class="card">
				<div class="card-body">
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="name"><?php echo e(__('Gateway Name')); ?></label>
						<input type="text" class="form-control" name="name" id="name"  required>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="logo"><?php echo e(__('Logo')); ?></label>
						<input type="file" id="logo" class="form-control" name="logo" accept="image/*">
												
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="currency"><?php echo e(__('Currency')); ?></label>
						<input type="text" class="form-control" name="currency" id="currency"  required>
					</div>
					
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="min_amount"><?php echo e(__('Minimum Amount')); ?></label>
						<input type="number" name="min_amount" id="min_amount" step="any"  class="form-control" placeholder="<?php echo e(__("Minimum transaction amount")); ?>" required>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="max_amount"><?php echo e(__('Maximum Amount')); ?></label>
						<input type="number" name="max_amount" id="max_amount" step="any"  class="form-control" placeholder="<?php echo e(__("Maximum transaction amount")); ?>" required>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="charge"><?php echo e(__('Gateway Charge')); ?></label>
						<input type="number" step="any" class="form-control" name="charge" id="charge"  required value="0">
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="multiply"><?php echo e(__('Multiply from base currency')); ?></label>
						<input type="number" step="any" class="form-control" name="multiply" id="multiply"  required value="0">
					</div>
					
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="status"><?php echo e(__('Payment Instruction')); ?></label>
						<textarea class="form-control" maxlength="1000" name="comment"></textarea>
					</div>
					<div class="form-group mb-4">
						<label class="col-form-label text-md-right required" for="status"><?php echo e(__('Status')); ?></label>
						<select class="form-control selectric" name="status" id="status">
							<option value="1" ><?php echo e(__('Active')); ?></option>
							<option value="0" ><?php echo e(__('Deactivate')); ?></option>
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/gateway/create.blade.php ENDPATH**/ ?>