<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Edit Role'),
'buttons'=>[
[
'name'=> __('Back'),
'url'=> route('admin.role.index')
]
]

], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Add Role')); ?></h4>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo e(route('admin.role.update',$role->id)); ?>" class="ajaxform">
					<?php echo csrf_field(); ?>
					<?php echo method_field("PUT"); ?>
					<div class="pt-20">
						<div class="form-group">
							<label><?php echo e(__('Role Name')); ?></label>
							<input type="text" class="form-control" required="" value="<?php echo e($role->name); ?>"  name="name" placeholder="sub admin">
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input checkAll" id="customCheck12">
									<label class="custom-control-label checkAll" for="customCheck12"><?php echo e(__('Check All Permissions')); ?></label>
								</div>
								<hr>
								<?php $i = 1; ?>
								<div class="row">
									<?php $__currentLoopData = $permission_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-6">
										<div class="row">
											<?php
											$permissions = App\Models\User::getpermissionsByGroupName($group->name);
											$j = 1;
											?>

											<div class="col-6">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="<?php echo e($i); ?>Management" value="<?php echo e($group->name); ?>" onclick="checkPermissionByGroup('role-<?php echo e($i); ?>-management-checkbox', this)" <?php echo e(App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : ''); ?>>
													<label class="custom-control-label" for="checkPermission"><?php echo e($group->name); ?></label>
												</div>
											</div>

											<div class="col-6 role-<?php echo e($i); ?>-management-checkbox">

												<?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" 
													
													onclick="checkSinglePermission('role-<?php echo e($i); ?>-management-checkbox', '<?php echo e($i); ?>Management', <?php echo e(count($permissions)); ?>)" name="permissions[]" <?php echo e($role->hasPermissionTo($permission->name) ? 'checked' : ''); ?> id="checkPermission<?php echo e($permission->id); ?>" value="<?php echo e($permission->name); ?>">
													<label class="custom-control-label" for="checkPermission<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
												</div>
												<?php  $j++; ?>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<br>
											</div>

										</div>
										<?php  $i++; ?>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-neutral submit-button"><i class="fa fa-save"></i> <?php echo e(__('Save')); ?></button>
				</div>
			</div>
		</div>
	</form>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/role/edit.blade.php ENDPATH**/ ?>