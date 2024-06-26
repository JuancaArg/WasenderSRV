<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> __('Devices')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
									<?php echo e($totalDevices); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-devices mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Devices')); ?></h5>
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
									<?php echo e($totalActiveDevices); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-badge-check mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Active Devices')); ?></h5>
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
									<?php echo e($totalInactiveDevices); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-exclamation mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Inactive Devices')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>  


<div class="row">
	<div class="col">
		<div class="card">
			<!-- Card header -->
			<div class="card-header border-0">
				<h3 class="mb-0"><?php echo e(__('Devices')); ?></h3>
				<form action="" class="card-header-form">
					<div class="input-group">
						<input type="text" name="search" value="<?php echo e($request->search ?? ''); ?>" class="form-control" placeholder="Search......">
						<select class="form-control" name="type">
							<option value="email" <?php if($type == 'email'): ?> selected="" <?php endif; ?>><?php echo e(__('User Email')); ?></option>
							<option value="name" <?php if($type == 'name'): ?> selected="" <?php endif; ?>><?php echo e(__('Device Name')); ?></option>
							<option value="uuid" <?php if($type == 'uuid'): ?> selected="" <?php endif; ?>><?php echo e(__('Device Id')); ?></option>
							<option value="phone" <?php if($type == 'phone'): ?> selected="" <?php endif; ?>><?php echo e(__('Phone Number')); ?></option>
							
						</select>
						<div class="input-group-btn">
							<button class="btn btn-neutral btn-icon"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-2"><?php echo e(__('Device Name')); ?></th>
							<th class="col-4"><?php echo e(__('User')); ?></th>
							<th class="col-2"><?php echo e(__('Phone')); ?></th>
							<th class="col-1"><?php echo e(__('Transactions')); ?></th>
							<th class="col-1"><?php echo e(__('Status')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('Created At')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>
					<?php if(count($devices) != 0): ?>
					<tbody class="list">
						<?php $__currentLoopData = $devices ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<?php echo e($device->name); ?>

							</td>
							<td>
								<a class="text-dark" href="<?php echo e(route('admin.customer.show',$device->user_id)); ?>">
									<?php echo e(Str::limit($device->user->name ?? '',15)); ?>

								</a>
							</td>
							<td>
	       						<?php echo e($device->phone); ?>

							</td>

							<td class="text-center">
								<?php echo e(number_format($device->smstransaction_count)); ?>

							</td>
							
							<td>
								<span class="badge badge-<?php echo e($device->status == 1 ? 'success' : 'danger'); ?>">
									<?php echo e($device->status == 1 ? 'Active' : 'Inactive'); ?>

								</span>
							</td>
							
							<td class="text-center">
								<?php echo e(\Carbon\Carbon::parse($device->created_at)->format('d-F-Y')); ?>

							</td>
							<td>
								
								<div class="dropdown">
									<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										
										<a class="dropdown-item delete-confirm" href="#" data-action="<?php echo e(route('admin.devices.destroy',$device->id)); ?>"><?php echo e(__('Remove')); ?></a>
										
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<?php endif; ?>
				</table>
				<?php if(count($devices) == 0): ?>
				<div class="text-center mt-2">
					<div class="alert  bg-gradient-primary text-white">
						<span class="text-left"><?php echo e(__('!Opps no records found')); ?></span>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="card-footer py-4">
				<?php echo e($devices->appends($request->all())->links('vendor.pagination.bootstrap-4')); ?>

			</div>	
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/devices/index.blade.php ENDPATH**/ ?>