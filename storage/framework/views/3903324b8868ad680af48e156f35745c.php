<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> 'Webhooks log reports'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-device">
									<?php echo e(number_format($total)); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-rocket-lunch mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Payloads')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-active">
									<?php echo e(number_format($sent_hooks)); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendar-day mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Sent Hooks')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers" id="total-inactive">
									<?php echo e(number_format($failed)); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="ni ni-calendar-grid-58"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Failed Hooks')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>

		<?php if(count($hooks ?? []) == 0): ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<center>
							<img src="<?php echo e(asset('assets/img/404.jpg')); ?>" height="500">
							<h3 class="text-center"><?php echo e(__('!Opps no records found')); ?></h3>
						</center>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="card">			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th><?php echo e(__('Device')); ?></th>
									<th><?php echo e(__('Hook Url')); ?></th>
									<th><?php echo e(__('Payload')); ?></th>
									<th><?php echo e(__('Status')); ?></th>
									<th><?php echo e(__('Http Status')); ?></th>
									<th class="text-right"><?php echo e(__('Requested At')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $hooks ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td>
										<?php echo e($hook->device->name ?? 'None'); ?>

									</td>
									<td>
										<?php echo e($hook->hook); ?>

									</td>
									<td>
										<textarea class="form-control"><?php echo e($hook->payload); ?></textarea>
									</td>
									<td><span class="badge badge-<?php echo e($hook->status == 1 ? 'success' : ($hook->status == 2 ? 'warning' : 'danger')); ?>"><?php echo e($hook->status == 1 ? 'Sent' : ($hook->status == 2 ? 'pending' : 'Failed')); ?></span></td>
									<td>
										<?php echo e($hook->status_code); ?>

									</td>
									
									<td class="text-right">
										<?php echo e($hook->created_at->format('d F Y')); ?>

									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($hooks->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/webhook/index.blade.php ENDPATH**/ ?>