<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Admins'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create a admin'),
      'url'=>route('admin.admin.create')
   ]
]

], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card"  >
			<div class="card-body">
				<div class="row mb-30">
					<div class="col-lg-6">
						<h4><?php echo e(__('Admins')); ?></h4>
					</div>
					<div class="col-lg-6">

					</div>
				</div>
				<br>
				<div class="card-action-filter">

					<div class="table-responsive custom-table">
						<table class="table">
							<thead>
								<tr>
									
									<th><?php echo e(__('Name')); ?></th>
									<th><?php echo e(__('Email')); ?></th>
									<th><?php echo e(__('Status')); ?></th>
									<th><?php echo e(__('Role')); ?></th>
									<th class="text-right"><?php echo e(__('Action')); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>

									<td>
										<?php echo e($row->name); ?>

										
									</td>
									<td>
										<?php echo e($row->email); ?>


									</td>
									<td><?php if($row->status==1): ?>
										<span class="badge badge-success"><?php echo e(__('Active')); ?></span>
										<?php else: ?>
										<span class="badge badge-danger"><?php echo e(__('Deactive')); ?></span>

									<?php endif; ?></td>
									<td><?php $__currentLoopData = $row->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <span class="badge badge-primary"><?php echo e($r->name); ?></span> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
									<td class="text-right">
										<a href="<?php echo e(route('admin.admin.edit',$row->id)); ?>" class="btn btn-neutral btn-sm"><?php echo e(__('Edit')); ?></a>
										<a href="#" data-action="<?php echo e(route('admin.admin.destroy',$row->id)); ?>" class="btn btn-neutral btn-sm delete-confirm"><?php echo e(__('Delete')); ?></a>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>


						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/admin/index.blade.php ENDPATH**/ ?>