<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> 'All Templates','buttons'=>[
	[
		'name'=>'<i class="fas fa-plus"></i> &nbspCreate Template',
		'url'=> route('user.template.create'),
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
								   <?php echo e($limit); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-layers mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Templates')); ?></h5>
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
									<?php echo e($active_templates); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-template mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Active Templates')); ?></h5>
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
								  <?php echo e($inactive_templates); ?>

							    </span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-template-alt mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Inactive Templates')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>

		<?php if(count($templates ?? []) == 0): ?>
		<div class="row">
			<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<center>
						<img src="<?php echo e(asset('assets/img/404.jpg')); ?>" height="500">
						<h3 class="text-center"><?php echo e(__('!Opps You Have Not Created Any Template')); ?></h3>
						<a href="<?php echo e(route('user.template.create')); ?>" class="btn btn-neutral"><i class="fas fa-plus"></i> <?php echo e(__('Create a template')); ?></a>
					</center>
				</div>
			</div>
		</div>
		</div>

		<?php else: ?>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-3"><?php echo e(__('Template Name')); ?></th>
									<th class="col-2"><?php echo e(__('Type')); ?></th>
									<th class="col-1"><?php echo e(__('Status')); ?></th>
									<th class="col-2 text-right"><?php echo e(__('Action')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $templates ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>
											<?php echo e($template->title); ?>

										</td>
										<td><?php echo e($template->type); ?></td>
										<td><span class="badge <?php echo e(badge($template->status)['class']); ?>"><?php echo e($template->status == 1 ? 'active' : 'inactive'); ?></span> </td>
										<td>
											<div class="btn-group mb-2 float-right">
												<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<?php echo e(__('Action')); ?>

												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item has-icon" href="<?php echo e(route('user.template.edit',$template->id)); ?>"><i class="fas fa-pen"></i><?php echo e(__('Edit Template')); ?></a>

													<a class="dropdown-item has-icon show-id" 
													href="javascript:void(0)" 
													data-toggle="modal" 
													data-uuid="<?php echo e($template->uuid); ?>"
													data-templatename="<?php echo e($template->title); ?>"
													data-target="#exampleModal"><i class="fas fa-id-card"></i><?php echo e(__('View Template ID')); ?></a>

													<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('user.template.destroy',$template->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove Template')); ?></a>
													

												</div>
											</div>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($templates->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
				</div>
			</div>
		</div>
		
		<?php endif; ?>
	</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="templateName"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label><?php echo e(__('Template ID')); ?></label>
        	<input type="text" class="form-control" value="" id="templateid" disabled="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script type="text/javascript">
	"use strict";

	$('.show-id').on('click',function(){
		const uuid= $(this).data('uuid');
		const templateName= $(this).data('templatename');

		$('#templateid').val(uuid);
		$('#templateName').html(templateName);
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/index.blade.php ENDPATH**/ ?>