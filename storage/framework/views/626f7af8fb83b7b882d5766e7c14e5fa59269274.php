<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> __('Schedules')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
									<?php echo e($totalSchedules); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendars mt-2"></i>
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
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-active">
									<?php echo e($pendingSchedules); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-calendar-clock mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Upcoming Schedules')); ?></h5>
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
									<?php echo e($deliveredSchedules); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendar-check mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Executed Schedules')); ?></h5>
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
				<h3 class="mb-0"><?php echo e(__('Schedules')); ?></h3>
				<form action="" class="card-header-form">
					<div class="input-group">
						<input type="text" name="search" value="<?php echo e($request->search ?? ''); ?>" class="form-control" placeholder="Search......">
						<select class="form-control" name="type">
							<option value="email" <?php if($type == 'email'): ?> selected="" <?php endif; ?>><?php echo e(__('User Email')); ?></option>
							<option value="title" <?php if($type == 'title'): ?> selected="" <?php endif; ?>><?php echo e(__('Schedule Name')); ?></option>
														
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
							<th class="col-2"><?php echo e(__('Name')); ?></th>
							<th class="col-4"><?php echo e(__('User')); ?></th>
							<th class="col-2"><?php echo e(__('Device')); ?></th>
							<th class="col-1"><?php echo e(__('Total Receivers')); ?></th>
							<th class="col-1"><?php echo e(__('Status')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('Schedule Date')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>
					<?php if(count($schedulemessages) != 0): ?>
					<tbody class="list">
						<?php $__currentLoopData = $schedulemessages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedulemessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<?php echo e($schedulemessage->title); ?>

							</td>
							<td>
								<a class="text-dark" href="<?php echo e(route('admin.customer.show',$schedulemessage->user_id)); ?>">
									<?php echo e(Str::limit($schedulemessage->user->name ?? '',15)); ?>

								</a>
							</td>
							<td>
	       						<?php echo e($schedulemessage->device->phone ?? ''); ?>

							</td>

							<td class="text-center">
								<?php echo e(number_format($schedulemessage->schedulecontacts_count)); ?>

							</td>
							
							<td>
								<span class="badge <?php echo e(badge($schedulemessage->status)['class']); ?>"><?php echo e($schedulemessage->status); ?></span>
							</td>
							
							<td class="text-center">
								<?php echo e(\Carbon\Carbon::parse($schedulemessage->date)->format('d-F-Y')); ?>

							</td>
							<td>
								
								<div class="dropdown">
									<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										
										<a class="dropdown-item delete-confirm" href="#" data-action="<?php echo e(route('admin.schedules.destroy',$schedulemessage->id)); ?>"><?php echo e(__('Remove')); ?></a>
										
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<?php endif; ?>
				</table>
				<?php if(count($schedulemessages) == 0): ?>
				<div class="text-center mt-2">
					<div class="alert  bg-gradient-primary text-white">
						<span class="text-left"><?php echo e(__('!Opps no records found')); ?></span>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="card-footer py-4">
				<?php echo e($schedulemessages->appends($request->all())->links('vendor.pagination.bootstrap-4')); ?>

			</div>	
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/logs/schedules.blade.php ENDPATH**/ ?>