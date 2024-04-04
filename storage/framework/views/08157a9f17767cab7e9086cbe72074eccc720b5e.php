<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> __('Supports')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
									<?php echo e($totalSupports); ?>

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
									<i class="fi fi-rs-time-forward mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Pending Supports')); ?></h5>
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
									<?php echo e($closedSupport); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-comment-slash mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Closed Supports')); ?></h5>
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
				<h3 class="mb-0"><?php echo e(__('Tickets')); ?></h3>
				<form action="" class="card-header-form">
					<div class="input-group">
						<input type="text" name="search" value="<?php echo e($request->search ?? ''); ?>" class="form-control" placeholder="Search......">
						<select class="form-control" name="type">
							<option value="email" <?php if($type == 'email'): ?> selected="" <?php endif; ?>><?php echo e(__('User Email')); ?></option>
							<option value="ticket_no" <?php if($type == 'ticket_no'): ?> selected="" <?php endif; ?>><?php echo e(__('Ticket No')); ?></option>
							<option value="subject" <?php if($type == 'subject'): ?> selected="" <?php endif; ?>><?php echo e(__('Subject')); ?></option>
						</select>
						<div class="input-group-btn">
							<button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-1"><?php echo e(__('Ticket No')); ?></th>
							<th class="col-6"><?php echo e(__('Subject')); ?></th>
							<th class="col-1"><?php echo e(__('Conversations')); ?></th>
							<th class="col-1"><?php echo e(__('Status')); ?></th>
							<th class="col-1"><?php echo e(__('User')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('Created At')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('Ticket')); ?></th>
						</tr>
					</thead>
					<?php if(count($supports) != 0): ?>
					<tbody class="list">
						<?php $__currentLoopData = $supports ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $support): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center">
								<?php echo e($support->ticket_no); ?>

							</td>
							<td>
								<a class="text-dark" href="<?php echo e(route('admin.support.show',$support->id)); ?>">
									<?php echo e(Str::limit($support->subject,50)); ?>

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
							<td class="text-center">
								<a href="<?php echo e(route('admin.customer.show',$support->user_id)); ?>" class="text-dark"><?php echo e(Str::limit($support->user->name ?? '',10)); ?></a>
							</td>
							<td class="text-center">
								<?php echo e($support->created_at->format('d F y')); ?>

							</td>
							<td>
								<a href="<?php echo e(route('admin.support.show',$support->id)); ?>" class="btn btn-neutral btn-sm"><?php echo e(__('View Ticket')); ?></a>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<?php endif; ?>
				</table>
				<?php if(count($supports) == 0): ?>
				<div class="text-center mt-2">
					<div class="alert  bg-gradient-primary text-white">
						<span class="text-left"><?php echo e(__('!Opps no support query found')); ?></span>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="card-footer py-4">
				<?php echo e($supports->appends($request->all())->links('vendor.pagination.bootstrap-4')); ?>

			</div>	
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/support/index.blade.php ENDPATH**/ ?>