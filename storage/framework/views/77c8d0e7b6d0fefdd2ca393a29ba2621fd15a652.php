<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
	'name'=>'<i class="ni ni-send"></i>&nbsp'. __('Create Bulk Message'),
	'url'=>route('user.bulk-message.create'),
	'is_button'=>false
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="row d-flex justify-content-between flex-wrap">
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($total)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
									<i class="ni ni-bullet-list-67"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">Total Transaction Messages</h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 pending-transfers"><?php echo e(number_format($total_charge)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
									<i class="ni ni-money-coins"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Charges')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers"><?php echo e(number_format($today_transaction)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
									<i class="ni ni-chart-pie-35"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Today\'s Transaction')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<?php if(count($posts) > 0): ?>
					<div class="col-sm-12">
						<h4><?php echo e(__('Transaction History')); ?></h4>
					</div>
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-2"><?php echo e(__('Device (From)')); ?></th>
									<th class="col-2"><?php echo e(__('Receiver (To)')); ?></th>
									<th class="col-2"><?php echo e(__('Charge')); ?></th>
									<th class="col-4"><?php echo e(__('Message')); ?></th>
									<th class="col-1"><?php echo e(__('Status')); ?></th>
									<th class="col-1"><?php echo e(__('Created At')); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td>+<?php echo e($post->device->phone ?? ''); ?></td>
									<td><?php echo e($post->phone); ?></td>
									<td><?php echo e($post->charge); ?></td>
									<td><?php echo e(Str::limit($post->body,100)); ?></td>
									<td><?php echo e($post->status_code == 200 ? 'sent' : 'faild'); ?></td>
									<td><?php echo e($post->created_at->format('d-F-y')); ?></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
					<?php else: ?>
					<div class="btn btn-neutral  col-12 text-center"><?php echo e(__('No Transaction Found')); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/bulk/index.blade.php ENDPATH**/ ?>