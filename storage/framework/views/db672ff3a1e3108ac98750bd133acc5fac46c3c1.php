<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('Schedule Message'),
'buttons' =>[
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
								<span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($totalSchedule ?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="ni ni-calendar-grid-58 "></i>
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
								<span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($pendingSchedule ?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendar-clock mt-2"></i>
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
								<span class="h2 font-weight-bold mb-0 completed-transfers"><?php echo e(number_format($deliveredSchedule?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-rocket-lunch mt-2"></i>
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
								<span class="h2 font-weight-bold mb-0 pending-transfers"><?php echo e(number_format($failedSchedule ?? 0)); ?></span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendar-xmark mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Failed Schedules')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<?php if(getUserPlanData('schedule_message') == false): ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="alert bg-gradient-primary text-white alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="fi  fi-rs-info text-white"></i></span>
					<span class="alert-text">
						<strong><?php echo e(__('!Opps ')); ?></strong> 

						<?php echo e(__('Schedule Message features is not available in your subscription plan')); ?>

						
					</span>
				</div>
			</div>
		</div>
		<?php endif; ?>

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
									<th class="col-4"><?php echo e(__('Title')); ?></th>
									<th class="col-1"><?php echo e(__('Message Type')); ?></th>
									<th class="col-1"><?php echo e(__('Status')); ?></th>
									<th class="col-1"><?php echo e(__('Delivery Date')); ?></th>
									<th class="col-2"><?php echo e(__('Action')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($post->device->phone ?? ''); ?></td>
										<td><?php echo e(Str::limit($post->title ?? '',90)); ?></td>
										<td class="text-center"><?php echo e($post->body !=  null ? 'Plain Text' : 'Template'); ?></td>
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/schedule/index.blade.php ENDPATH**/ ?>