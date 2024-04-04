<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
	'name'=>'<i class="ni ni-calendar-grid-58"></i>&nbspCreate Schedule',
	'url'=> route('user.schedule-message.create'),
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
								<span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($total ?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
									<i class="ni ni-bullet-list-67"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Schedules')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($total ?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
									<i class="ni ni-time-alarm"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Pending Schedules')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers"><?php echo e(number_format($today_transaction?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
									<i class="ni ni-chart-pie-35"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Schedules Executed')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 pending-transfers"><?php echo e(number_format($total_charge ?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
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
		</div>

		<?php if(count($posts) > 0): ?>
		<div class="card">
			
			<div class="card-body">
				<h3><?php echo e(__('Schedules')); ?></h3>
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-3"><?php echo e(__('Send From')); ?></th>
									<th class="col-5"><?php echo e(__('Message')); ?></th>
									<th class="col-1"><?php echo e(__('Status')); ?></th>
									<th class="col-1"><?php echo e(__('Delivery Date')); ?></th>
									<th class="col-2"><?php echo e(__('Action')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($post->device->phone ?? ''); ?></td>
										<td><?php echo e(Str::limit($post->body['body'] ?? '',90)); ?></td>
										<td><span class="badge <?php echo e(badge($post->status)['class']); ?>"><?php echo e($post->status); ?></span></td>
										<td><?php echo e($post->date); ?></td>
										<td>
											<div class="btn-group mb-2">
												<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<?php echo e(__('Action')); ?>

												</button>
												<div class="dropdown-menu">

													<a class="dropdown-item has-icon" href="<?php echo e(route('user.schedule-message.show',$post->id)); ?>"><i class="ni ni-align-left-2"></i><?php echo e(__('View Log')); ?></a>


													<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('user.schedule-message.destroy',$post->id)); ?>"><i class="ni ni-basket"></i><?php echo e(__('Remove Schedule')); ?></a>
													

												</div>
											</div>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Opps There Is No Schedules Found....')); ?></span></div>
		<?php endif; ?>
	</div>
</div>



<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" id="bulk_message_link" value="<?php echo e(route('user.bulk-message.store')); ?>">
<?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/js/pages/bulk/jquery.csv.min.js')); ?>" ></script>
<script src="<?php echo e(asset('assets/js/pages/bulk/bulkmessage.js')); ?>" ></script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/schedule/index.blade.php ENDPATH**/ ?>