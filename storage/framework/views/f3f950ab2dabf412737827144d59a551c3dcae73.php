<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Payment Gateways'),
'buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create A Manual Gateway'),
		'url'=>route('admin.gateways.create'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row d-flex justify-content-between flex-wrap">
	<div class="col">
		<div class="card card-stats">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<span class="h2 font-weight-bold mb-0 total-transfers" id="total-device">
							<?php echo e($totalGateways); ?>

						</span>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
							<i class="fi fi-rs-bank mt-2"></i>
						</div>
					</div>
				</div>
				<p class="mt-3 mb-0 text-sm">
				</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Gateways')); ?></h5>
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
							<?php echo e($active_gateway); ?>

						</span>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
							<i class="fi  fi-rs-badge-check mt-2"></i>
						</div>
					</div>
				</div>
				<p class="mt-3 mb-0 text-sm">
				</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Active Gateways')); ?></h5>
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
							<?php echo e($inactive_gateway); ?>

						</span>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
							<i class="fi fi-rs-delete-document mt-2"></i>
						</div>
					</div>
				</div>
				<p class="mt-3 mb-0 text-sm">
				</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Inactive Gateways')); ?></h5>
				<p></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="card">
			<!-- Card header -->
			<div class="card-header border-0">
				<h3 class="mb-0"><?php echo e(__('Gateways')); ?></h3>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th scope="col" class="sort col-3" ><?php echo e(__('Name')); ?></th>
							<th scope="col" class="sort col-1 text-right"><?php echo e(__('Minimum Amount')); ?></th>
							<th scope="col" class="sort col-1 text-right"><?php echo e(__('Maximum Amount')); ?></th>
							<th scope="col" class="sort col-1 text-right"><?php echo e(__('Charge')); ?></th>
							<th scope="col" class="sort col-1 text-right"><?php echo e(__('Currency')); ?></th>
							<th scope="col" class="sort col-1 text-right"><?php echo e(__('Gateway Status')); ?></th>
							<th scope="col" class="sort col-2 text-right"><?php echo e(__('Payment Mode')); ?></th>
							<th scope="col" class="sort col-2 text-right"><?php echo e(__('Edit')); ?></th>
						</tr>
					</thead>
					<tbody class="list">
						<?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<th scope="row">
								<div class="media align-items-center">
									<?php if($gateway->logo != null): ?>
									<a href="<?php echo e(route('admin.gateways.edit',$gateway->id)); ?>" class="avatar rounded-square mr-3">
										<img alt="Image placeholder" src="<?php echo e(asset($gateway->logo)); ?>">
									</a>
									<?php endif; ?>
									<div class="media-body">
										<span class="name mb-0 text-sm"><?php echo e($gateway->name); ?></span>
									</div>
								</div>
							</th>
							<td class="text-center"><?php echo e(number_format($gateway->min_amount,2)); ?></td>
							<td class="text-center"><?php echo e(number_format($gateway->max_amount,2)); ?></td>
							<td class="text-right"><?php echo e($gateway->charge.strtoupper($gateway->currency)); ?></td>
							<td class="text-right"><?php echo e(strtoupper($gateway->currency)); ?></td>
							<td class="text-center">
								<span class="badge badge-dot text-right">
									<i class="bg-<?php echo e($gateway->status == 1 ? 'success' : 'danger'); ?>"></i>
									<span class="status"><?php echo e($gateway->status == 1 ? 'Active' : 'Disabled'); ?></span>
								</span>
							</td>
							
							<td class="text-right">
								<span class="badge badge-dot ">
									<i class="bg-<?php echo e($gateway->test_mode == 1 ? 'danger' : 'success'); ?>"></i>
									<span class="status"><?php echo e($gateway->test_mode == 1 ? 'Sandbox' : 'Live'); ?></span>
								</span>
							</td>
							<td class="text-right">
								<a class="btn btn-sm btn-neutral" href="<?php echo e(route('admin.gateways.edit',$gateway->id)); ?>">
									<i class="fas fa-edit"></i>
								</a>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/gateway/index.blade.php ENDPATH**/ ?>