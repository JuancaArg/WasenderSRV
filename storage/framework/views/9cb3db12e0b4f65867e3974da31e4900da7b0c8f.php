<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create admin'),
'buttons'=>[
    [
        'name'=>__('Back'),
        'url'=>route('admin.admin.index'),
    ]
]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-5 mt-5">
        <strong><?php echo e(__('Create Admin')); ?></strong>
        <p><?php echo e(__('add admin profile information')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">     
		<div class="card">
			<div class="card-body">
				<form method="post" action="<?php echo e(route('admin.admin.store')); ?>" class="ajaxform_instant_reload">
					<?php echo csrf_field(); ?>
					<div class="pt-20">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" placeholder="Enter Name" name="name" class="form-control" id="name" required="" value="" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" placeholder="Enter Email" name="email" class="form-control" id="email" required="" value="" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" placeholder="Enter password" name="password" class="form-control" id="password" required="" value="" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password_confirmation">Password</label>
							<input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control" id="password_confirmation" required="" value="" autocomplete="off">
						</div>

						<div class="form-group">
							<label >Assign Roles</label>
							<select required name="roles[]" id="roles" class="form-control select2" multiple>
								<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
						
					</div>
				</div>
				<div class="card-footer">
					<div class="btn-publish">
							<button type="submit" class="btn btn-neutral submit-button"><i class="fa fa-save"></i> <?php echo e(__('Save')); ?></button>
						</div>
				</div>
			</div>

		</div>
		
	</form>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/admin/create.blade.php ENDPATH**/ ?>