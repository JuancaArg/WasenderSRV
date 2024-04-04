<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'&nbsp'.__('Back'),
		'url'=> route('user.device.index'),
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
								   <?php echo e(number_format($totalUsed)); ?>

							    </span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
									<i class="fas fa-paper-plane"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Used')); ?></h5>
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
									<?php echo e(number_format($todaysMessage)); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
									<i class="fas fa-paper-plane"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Todays Transactions')); ?></h5>
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
								 <?php echo e(number_format($monthlyMessages)); ?>

							    </span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
									<i class="fas fa-paper-plane"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Last 30 days message')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>

		<?php if(count($posts ?? []) > 0): ?>
		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-3"><?php echo e(__('Device From')); ?></th>
									<th class="col-4"><?php echo e(__('Device To')); ?></th>
									<th class="col-2"><?php echo e(__('Request Type')); ?></th>
									<th class="col-1"><?php echo e(__('Message Type')); ?></th>
									<th class="col-2 text-center"><?php echo e(__('Requested At')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $posts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>
											<?php echo e($post->from); ?>											
										</td>
										<td>
											<?php echo e($post->to); ?>

										</td>
										<td>
											<?php echo e($post->type); ?>

										</td>
										<td>
											<?php echo e($post->template_id != null ? 'Template' : 'Plain Text'); ?>

										</td>
										<td class="text-right">
											<span><?php echo e($post->created_at->diffForHumans()); ?></span> - <?php echo e($post->created_at->format('d F Y')); ?>

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
		<div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Opps There Is No Transaction Found....')); ?></span></div>
		<?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/device/show.blade.php ENDPATH**/ ?>