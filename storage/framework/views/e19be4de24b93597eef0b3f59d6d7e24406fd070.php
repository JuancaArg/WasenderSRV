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
		<div class="row d-flex justify-content-between flex-wrap">
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($info->schedulecontacts_count ?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
									<i class="ni ni-bullet-list-67"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Contacts')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e($info->device->phone ?? ''); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
									<i class="ni ni-time-alarm"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Phone Number (from)')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers"><?php echo e(Ucwords($info->status)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
									<i class="ni ni-chart-pie-35"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Schedule Status')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>


		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Receivers')); ?></h4>
			</div>
			<div class="card-body">
				<div class="col-sm-12 table-responsive">
					<table class="table col-12">
						<thead>
							<tr>
								<td><?php echo e(__('From')); ?></td>
								<td><?php echo e(__('Name')); ?></td>
								<td><?php echo e(__('Number')); ?></td>
								<td><?php echo e(__('Delivery Date')); ?></td>
							</tr>
						</thead>
						<tbody class="tbody">
							<?php $__currentLoopData = $contacts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($info->device->phone ?? ''); ?></td>
								<td><?php echo e($contact->contact->name ?? ''); ?></td>
								<td><?php echo e($contact->contact->phone ?? ''); ?></td>
								<td><?php echo e(Carbon\Carbon::parse($info->date)->copy()->tz($info->zone)->format('F j, Y  g:i A')); ?></td>
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/schedule/show.blade.php ENDPATH**/ ?>