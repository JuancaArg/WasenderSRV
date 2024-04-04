<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=>__('Device'),
'buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create Support Request'),
		'url'=> route('user.support.create'),
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
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-device">
								  <?php echo e($total); ?>

							    </span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-tickets-airline mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Tickets')); ?></h5>
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
									<?php echo e($openSupport); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-ticket-airline mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Open Tickets')); ?></h5>
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
								  <?php echo e($pendingSupport); ?>

							    </span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-ticket-alt mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Pending Supports')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>

		<?php if(count($supports ?? []) > 0): ?>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-8"><?php echo e(__('Subject')); ?></th>
									<th class="col-1"><?php echo e(__('Conversations')); ?></th>
									<th class="col-1"><?php echo e(__('Status')); ?></th>
									<th class="col-1 text-left"><?php echo e(__('Created At')); ?></th>
									<th class="col-1 text-left"><?php echo e(__('Ticket')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $supports ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $support): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>
											<a class="text-dark" href="<?php echo e(route('user.support.show',$support->id)); ?>">
												<?php echo e($support->subject); ?>

											</a>
										</td>
										<td class="text-center">
											<?php echo e($support->conversations_count); ?>

										</td>
										<td>
											<span class="badge badge-<?php echo e($support->status == 2 ? 'warning' : ($support->status == 1 ? 'success' : 'danger')); ?>">
											  <?php echo e($support->status == 2 ? 'pending' : ($support->status == 1 ? 'Open' : 'Closed')); ?>

											</span>
										</td>
										<td class="text-center"><?php echo e($support->created_at->format('d F y')); ?></td>
										<td>
											<a href="<?php echo e(route('user.support.show',$support->id)); ?>" class="btn btn-neutral btn-sm"><?php echo e(__('View Ticket')); ?></a>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($supports->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Opps you have not created any support now....')); ?></span></div>
		<?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/support/index.blade.php ENDPATH**/ ?>