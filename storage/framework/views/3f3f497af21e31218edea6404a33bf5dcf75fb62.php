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
			<div class="card-body">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Message From')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="number" class="form-control" disabled="" value="<?php echo e($info->device->phone ?? ''); ?>">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Delivery Date')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control bg-white" disabled="" value="<?php echo e(Carbon\Carbon::parse($info->date)->format('d-F-Y')); ?>">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Message Context')); ?></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control h-200 bg-white" disabled=""><?php echo e($info->body['body'] ?? ''); ?></textarea>
						<?php if($info->body['image'] != null): ?>
						<a href="<?php echo e(asset($info->body['image'])); ?>" target="_blank"><?php echo e(__('Attachment')); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>	

<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Receivers')); ?></h4>
			</div>
			<div class="card-body">
				<div class="col-sm-12 table-responsive">
					<table class="table col-12">
						<thead>
							<tr>
								<td><?php echo e(__('Name')); ?></td>
								<td><?php echo e(__('Number')); ?></td>
								<td><?php echo e(__('Status')); ?></td>
								<td><?php echo e(__('Status Code')); ?></td>
							</tr>
						</thead>
						<tbody class="tbody">
							<?php $__currentLoopData = $contacts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($contact->contact->name); ?></td>
								<td><?php echo e($contact->contact->country_code.$contact->contact->phone); ?></td>
								<td><?php echo e($contact->status_code == null ? 'pending' : 'procced'); ?></td>
								<td><?php echo e($contact->status_code); ?></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
					<div class="d-flex justify-content-center"><?php echo e($contacts->links('vendor.pagination.bootstrap-4')); ?></div>
				</div>
								
			</div>
		</div>
	</div>
</div>					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/schedule/show.blade.php ENDPATH**/ ?>