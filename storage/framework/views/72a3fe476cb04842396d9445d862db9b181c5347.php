<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Admin Roles'),
'buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create a Role'),
		'url'=>route('admin.role.create')
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
						<h4><?php echo e(__('Roles')); ?></h4>
					</div>
					<div class="col-lg-6">				
					</div>
				</div>
				<br>
				<div class="table-responsive custom-table">
					<table class="table">
						<thead>
							<tr>
								<th width="10%"><?php echo e(__('Name')); ?></th>
								<th width="80%"><?php echo e(__('Permissions')); ?></th>
								<th width="10%" class="text-right"><?php echo e(__('Action')); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>							
								<td>
									<?php echo e($role->name); ?>

								</td>
								<td>
									<?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<span class="badge badge-primary mr-1 mb-2">
										<?php echo e($perm->name); ?>

									</span>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</td>
								<td>
									<div class="hover">
										<a href="javascript:void(0)"  data-action="<?php echo e(route('admin.role.destroy',$role->id)); ?>" class="btn btn-neutral con btn-sm  delete-confirm"><?php echo e(__('Delete')); ?></a>
									</div>
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/role/index.blade.php ENDPATH**/ ?>