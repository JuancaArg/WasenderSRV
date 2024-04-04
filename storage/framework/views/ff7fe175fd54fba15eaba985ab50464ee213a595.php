<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Dashboard'),
'buttons'=>[
	[
		'name'=> __('Orders'),
		'url'=>route('admin.order.index'),
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="invoice">
					<div class="invoice-print">
						<div class="row">
							<div class="col-lg-12">
								<div class="invoice-title">
									<span class="badge badge-<?php echo e($order->status == 2 ? 'warning' : ($order->status == 1 ? 'success' : 'danger')); ?> float-right">
										<?php echo e($order->status == 2 ? 'pending' : ($order->status == 1 ? 'approved' : 'declined')); ?>

									</span>
									<h2><?php echo e(__('Invoice')); ?></h2>
									<div class="invoice-number">Order <?php echo e($order->invoice_no); ?></div>
								</div>

								<hr>
								<div class="row">
									<div class="col-md-6">
										<address>
											<strong><?php echo e(__('Billed To:')); ?></strong><br>
											<?php echo e(__('Name: ')); ?> <?php echo e($order->user->name ?? ''); ?><br>
											<?php echo e(__('Address: ')); ?> <?php echo e($order->user->address ?? ''); ?><br>
											<?php echo e(__('Email: ')); ?> <?php echo e($order->user->email ?? ''); ?><br>
											<?php echo e(__('Phone: ')); ?> <?php echo e($order->user->phone ?? ''); ?><br>
										</address>
									</div>
									<div class="col-md-6 text-md-right">
										<address>
											<strong><?php echo e(__('Billed From:')); ?></strong><br>
											<?php echo e($invoice_data->company_name); ?><br />
											<?php echo e($invoice_data->address); ?><br />
											<?php echo e($invoice_data->city); ?> <br />
											<?php echo e($invoice_data->post_code); ?><br />
											<?php echo e($invoice_data->country); ?>

										</address>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<address>
											<strong><?php echo e(__('Payment Method:')); ?></strong><br>
											<?php echo e(__('Name:')); ?> <?php echo e($order->gateway->name ?? ''); ?><br>
											<?php echo e(__('Pay Id:')); ?> <?php echo e($order->payment_id ?? ''); ?><br>
										</address>
									</div>
									<div class="col-md-6 text-md-right">
										<address>

											<strong><?php echo e(__('Order Date:')); ?></strong> <?php echo e($order->created_at->format('F d Y')); ?><br>
											<strong><?php echo e(__('Expire Date')); ?>:</strong> <?php echo e(Carbon\Carbon::parse($order->will_expire)->format('F d Y')); ?><br>
										</address>

									</div>
								</div>
							</div>
						</div>

						<div class="row mt-4">
							<div class="col-md-12">

								<div class="table-responsive">
									<table class="table table-striped table-hover table-md">
										<tbody>
											<tr>

												<td class="col-9"><?php echo e(__('Subscription Plan Name')); ?></td>
												<td class="col-3 text-right"><?php echo e(__('Amount')); ?></td>
											</tr>
											<tr>
												<td>
													- <?php echo e($order->plan->title ?? ''); ?>

												</td>
												<td class="text-right"><?php echo e(amount_format($order->amount,'name')); ?></td>
											</tr>


										</tbody>
									</table>
								</div>
								<div class="row mt-4">
									<div class="col-lg-8">
										<?php if(!empty($order->meta)): ?>
										<div class="section-title"><?php echo e(__('Payment Info:')); ?></div>
										<br>
										<p class="section-lead"><?php echo e($order->meta['comment'] ?? ''); ?></p>
										<p class="section-lead"><a target="_blank" href="<?php echo e(asset($order->meta['screenshot'] ?? '')); ?>"><?php echo e(__('Attachment')); ?></a></p>
										<?php endif; ?>
									</div>
									<div class="col-lg-4 text-right">
										<div class="invoice-detail-item">
											<div class="invoice-detail-name"><?php echo e(__('Subtotal: ')); ?> <?php echo e(amount_format($order->amount,'name')); ?></div>

										</div>
										<div class="invoice-detail-item">
											<div class="invoice-detail-name"><?php echo e(__('Tax: ')); ?> <?php echo e(amount_format($order->tax,'name')); ?></div>

										</div>
										<hr class="mt-2 mb-2">
										<div class="invoice-detail-item">

											<div class="invoice-detail-value invoice-detail-value-lg"><?php echo e(__('Total: ')); ?> <?php echo e(amount_format($order->tax+$order->amount,'name')); ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="text-md-right">
						<form method="POST" action="<?php echo e(route('admin.order.update',$order->id)); ?>" class="ajaxform">
						 <?php echo csrf_field(); ?>
						 <?php echo method_field('PUT'); ?>
						<div class="row">
							
								<div class="form-group col-sm-3">
								<label class="float-left"><?php echo e(__('Order Status')); ?></label>
								<select class="form-control" name="status">
									<option value="1" <?php echo e($order->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Approved')); ?></option>
									<option value="2" <?php echo e($order->status == 2 ? 'selected' : ''); ?>><?php echo e(__('Pending')); ?></option>
									<option value="0" <?php echo e($order->status == 0 ? 'selected' : ''); ?>><?php echo e(__('Rejected')); ?></option>
								</select>
							</div>
							<div class="form-group col-sm-3">
								<label class="float-left"><?php echo e(__('Assign This Plan?')); ?></label>
								<select class="form-control" name="assign_order">
									<option value="yes"><?php echo e(__('Yes')); ?></option>
									<option value="no" selected=""><?php echo e(__('No')); ?></option>
									
								</select>
							</div>
							<div class="form-group">
								<br>
								<button class="btn btn-neutral btn-icon icon-left mt-2 submit-btn"><?php echo e(__('Update')); ?></button>
							</div>
							
							
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/orders/show.blade.php ENDPATH**/ ?>