<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Customers'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.customer.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-sm-4">
		<div class="card card-profile">
			<div class="card-img-top bg-gradient-info h-150" >

			</div>
			<div class="row justify-content-center">
				<div class="col-lg-3 order-lg-2">
					<div class="card-profile-image">
						<a href="#">
							<img src="<?php echo e($customer->avatar == null ? 'https://ui-avatars.com/api/?name='.$customer->name : asset($customer->avatar)); ?>" class="rounded-circle">
						</a>
					</div>
				</div>
			</div>

			<div class="card-body pt-2">
				<div class="row">
					<div class="col">
						<div class="card-profile-stats d-flex justify-content-center">
							<div>
								<span class="heading"><?php echo e($customer->orders_count); ?></span>
								<span class="description"><?php echo e(__('Orders')); ?></span>
							</div>
							<div>
								<span class="heading"><?php echo e($customer->smstransaction_count); ?></span>
								<span class="description"><?php echo e(__('Transactions')); ?></span>
							</div>
							<div>
								<span class="badge badge-<?php echo e($customer->status == 1 ? 'success' : 'danger'); ?> badge-sm"><small><?php echo e($customer->status == 1 ? 'Active' : 'Suspended'); ?></small></span>
								<span class="description"><?php echo e(__('Status')); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<h5 class="h3">
						<?php echo e($customer->name); ?>

					</h5>
					<div class="h5 font-weight-300">
						<i class="ni location_pin mr-2"></i><?php echo e(__('Join Date: ')); ?> <?php echo e($customer->created_at->format('d F Y')); ?><br>
						<i class="ni location_pin mr-2"></i><?php echo e(__('Will Expire: ')); ?> <?php echo e($customer->will_expire); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-8">	
		<div class="card">
			<div class="card-body">
				<div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
					<div class="timeline-block">
						<span class="timeline-step badge-success">
							<i class="ni ni-circle-08"></i>
						</span>
						<div class="timeline-content">
							<small class="text-muted font-weight-bold"><?php echo e(__('Bio')); ?></small>
							<p><?php echo e(__('Name : ')); ?> <?php echo e($customer->name); ?></p>
							<p><?php echo e(__('Email : ')); ?> <?php echo e($customer->email); ?></p>
							<p><?php echo e(__('Phone : ')); ?> <?php echo e($customer->phone); ?></p>
							<p><?php echo e(__('Address : ')); ?> <?php echo e($customer->address); ?></p>
							
						</div>
					</div>
					<div class="timeline-block">
						<span class="timeline-step badge-danger">
							<i class="ni ni-chart-pie-35"></i>
						</span>
						<div class="timeline-content">
							<small class="text-muted font-weight-bold"><?php echo e(__('Other Info')); ?></small>
							<p><?php echo e(__('Plan Name:')); ?> <strong><?php echo e($customer->subscription->title ?? ''); ?></strong></p>
							<p><?php echo e(__('Plan Expire Date:')); ?> <?php echo e($customer->will_expire ?? ''); ?></p>
							<p><?php echo e(__('Total Spended:')); ?> <?php echo e($customer->orders_sum_amount != null ? amount_format($customer->orders_sum_amount ?? '') : 0); ?></p>
							<p><?php echo e(__('Total Devices:')); ?> <?php echo e($customer->device_count ?? ''); ?></p>
							<p><?php echo e(__('Total Messages:')); ?> <?php echo e($customer->smstransaction_count ?? ''); ?></p>
							<p><?php echo e(__('Total Contacts:')); ?> <?php echo e($customer->contact_count ?? ''); ?></p>	
						</div>
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
				<h3 class="mb-0"><?php echo e(__('Orders')); ?></h3>
				
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-1"><?php echo e(__('Order No')); ?></th>
							<th class="col-4"><?php echo e(__('Plan Name')); ?></th>
							<th class="col-2"><?php echo e(__('Payment Mode')); ?></th>
							<th class="col-1"><?php echo e(__('Amount')); ?></th>
							<th class="col-1"><?php echo e(__('Status')); ?></th>
							
							<th class="col-2 text-left"><?php echo e(__('Created At')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('View')); ?></th>
						</tr>
					</thead>
					<?php if(count($orders) != 0): ?>
					<tbody class="list">
						<?php $__currentLoopData = $orders ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center">
								<a href="<?php echo e(route('admin.order.show',$order->id)); ?>" class="text-dark">
									<?php echo e($order->invoice_no); ?>

								</a>
							</td>
							<td>
								<a class="text-dark" href="<?php echo e(route('admin.plan.edit',$order->plan_id)); ?>">
									<?php echo e(Str::limit($order->plan->title ?? '',50)); ?>

								</a>
							</td>
							<td>
	       						<?php echo e($order->gateway->name ?? ''); ?>

							</td>

							<td class="text-center">
								<?php echo e(number_format($order->amount,2)); ?>

							</td>
							<td>
								<span class="badge badge-<?php echo e($order->status == 2 ? 'warning' : ($order->status == 1 ? 'success' : 'danger')); ?>">
									<?php echo e($order->status == 2 ? 'pending' : ($order->status == 1 ? 'approved' : 'declined')); ?>

								</span>
							</td>
							
							<td class="text-center">
								<?php echo e($order->created_at->format('d F y')); ?>

							</td>
							<td>
								<a href="<?php echo e(route('admin.order.show',$order->id)); ?>" class="btn btn-neutral btn-sm"><?php echo e(__('View')); ?></a>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<?php endif; ?>
				</table>
				<?php if(count($orders) == 0): ?>
				<div class="text-center mt-2">
					<div class="alert  bg-gradient-primary text-white">
						<span class="text-left"><?php echo e(__('!Opps no orders found')); ?></span>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="card-footer py-4">
				<?php echo e($orders->links('vendor.pagination.bootstrap-4')); ?>

			</div>	
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/customers/show.blade.php ENDPATH**/ ?>