<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
	'title'=> __('Orders'),
	'buttons'=>[
	[
		'name'=> '<i class="fi fi-rs-file-invoice-dollar"></i>&nbsp&nbsp'.__('Invoice Settings'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#addRecord" id="add_record"',
		'is_button'=>true
	],
	[
		'name'=> '<i class="fi fi-rs-money-check-edit"></i>&nbsp&nbsp'.__('Currency Settings'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#currency" id="edit_currency"',
		'is_button'=>true
	],
	[
		'name'=> '<i class="fi fi-rs-bank"></i>&nbsp&nbsp'.__('Tax Settings'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#tax" id="edit_tax"',
		'is_button'=>true
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
									<?php echo e($totalOrders); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-boxes mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Orders')); ?></h5>
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
									<?php echo e($totalCompleteOrders); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-box-check mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Completed Orders')); ?></h5>
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
									<?php echo e($totalPendingOrders); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendar-clock mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Pending Orders')); ?></h5>
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
									<?php echo e($totalDeclinedOrders); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-remove-folder mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Rejected Orders')); ?></h5>
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
				<h3 class="mb-0"><?php echo e(__('Orders')); ?></h3>
				<form action="" class="card-header-form">
					<div class="input-group">
						<input type="text" name="search" value="<?php echo e($request->search ?? ''); ?>" class="form-control" placeholder="Search......">
						<select class="form-control" name="type">
							<option value="email" <?php if($type == 'email'): ?> selected="" <?php endif; ?>><?php echo e(__('User Email')); ?></option>
							<option value="invoice_no" <?php if($type == 'invoice_no'): ?> selected="" <?php endif; ?>><?php echo e(__('Invoice No')); ?></option>
							
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
							<th class="col-1"><?php echo e(__('Order No')); ?></th>
							<th class="col-4"><?php echo e(__('Plan Name')); ?></th>
							<th class="col-2"><?php echo e(__('Payment Mode')); ?></th>
							<th class="col-1"><?php echo e(__('Amount')); ?></th>
							<th class="col-1"><?php echo e(__('Status')); ?></th>
							<th class="col-1"><?php echo e(__('User')); ?></th>
							<th class="col-1 text-left"><?php echo e(__('Created At')); ?></th>
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
								<a href="<?php echo e(route('admin.customer.show',$order->user_id)); ?>" class="text-dark"><?php echo e(Str::limit($order->user->name ?? '',10)); ?></a>
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
				<?php echo e($orders->appends($request->all())->links('vendor.pagination.bootstrap-4')); ?>

			</div>	
		</div>
	</div>
</div>


<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(route('admin.option.update','invoice_data')); ?>" class="ajaxform">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Edit Invoice Information')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Company Name')); ?></label>
                  <input type="text" name="data[company_name]" value="<?php echo e($invoice->company_name ?? ''); ?>" class="form-control" required="">
               </div>
                <div class="form-group">
                  <label><?php echo e(__('Company Address')); ?></label>
                  <input type="text" name="data[address]" value="<?php echo e($invoice->address ?? ''); ?>" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Company City')); ?></label>
                  <input type="text" name="data[city]" value="<?php echo e($invoice->city ?? ''); ?>" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Post Code')); ?></label>
                  <input type="text" name="data[post_code]" value="<?php echo e($invoice->post_code ?? ''); ?>" class="form-control" required="">
               </div>
                <div class="form-group">
                  <label><?php echo e(__('Country')); ?></label>
                  <input type="text" name="data[country]" value="<?php echo e($invoice->country ?? ''); ?>" class="form-control" required="">
               </div>
              
               <div class="form-group">
               	<input type="hidden" name="is_array" value="1">
               <button type="submit" class="btn btn-neutral col-4 float-left submit-button" ><?php echo e(__('Update')); ?></button>
               </div>
            </div>
            <div class="modal-footer">
      		</div>
         </form>
      </div>
   </div>
</div>
<div class="modal fade" id="currency" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(route('admin.option.update','base_currency')); ?>" class="ajaxform">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Currency Settings')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Currency Name')); ?></label>
                  <input type="text" name="data[name]" value="<?php echo e($currency->name ?? ''); ?>" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Currency Icon')); ?></label>
                  <input type="text" name="data[icon]" value="<?php echo e($currency->icon ?? ''); ?>" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Currency Icon')); ?></label>
                  <select class="form-control" name="data[position]">
                  	<option value="left" <?php echo e($currency->position == 'left' ? 'selected' : ''); ?>><?php echo e(__('Left')); ?></option>
                  	<option value="right" <?php echo e($currency->position == 'right' ? 'selected' : ''); ?>><?php echo e(__('Right')); ?></option>
                  </select>
               </div>
               <div class="form-group">
               	<input type="hidden" name="is_array" value="1">
               <button type="submit" class="btn btn-neutral col-4 float-left submit-button" ><?php echo e(__('Update')); ?></button>
               </div>
            </div>
            <div class="modal-footer">
      		</div>
         </form>
      </div>
   </div>
</div>
<div class="modal fade" id="tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(route('admin.option.update','tax')); ?>" class="ajaxform">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Tax Settings')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Tax Amount')); ?></label>
                  <input type="number" step="any" name="data" value="<?php echo e($tax); ?>" class="form-control" required="">
               </div>
               
               <div class="form-group">
              
               <button type="submit" class="btn btn-neutral col-4 float-left submit-button" ><?php echo e(__('Update')); ?></button>
               </div>
            </div>
            <div class="modal-footer">
      		</div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>