<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'Create App',
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#addRecord" id="add_record"',
		'is_button'=>true
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="<?php echo e(route('user.apps.store')); ?>" class="ajaxform_instant_reload">
				<?php echo csrf_field(); ?>
				<div class="modal-header">
					<h3><?php echo e(__('Create New App')); ?></h3>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label><?php echo e(__('Select Number')); ?></label>
						<select class="form-control"  name="device" required="">
							<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($device->id); ?>"><?php echo e($device->phone); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						<small><?php echo e(__('User Will Receive Message From The Selected Number')); ?></small>
					</div>
					<div class="form-group">
						<label><?php echo e(__('App Name')); ?></label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Website Link')); ?></label>
						<input type="url" name="website" class="form-control" required="">
					</div>

				</div>
				<div class="modal-footer">

					<button type="submit" class="btn btn-outline-primary col-12" ><?php echo e(__('Create Now')); ?></button>

				</div>	
			</form>
		</div>
	</div>
</div>

<div class="row">
<?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-xl-3 col-md-6">
    <div class="card  border-0">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0 text-dark"><?php echo e($app->title); ?></h5>
            
            <div class="mt-3 mb-0">
               <span class="pt-2 text-dark"><?php echo e(__('Messages Count:')); ?> (<?php echo e(number_format($app->live_messages_count)); ?>)
               	<span class="pt-2 text-dark"><?php echo e(__('Device:')); ?> <?php echo e($app->device->phone ?? ''); ?>

            </div>
          </div>
          <div class="col-auto">
            <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-h"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="<?php echo e(route('user.app.logs',$app->uuid)); ?>"><?php echo e(__('Live Messages Logs')); ?></a>
              <a class="dropdown-item" href="<?php echo e(route('user.app.logs',$app->uuid.'?mode=test')); ?>"><?php echo e(__('Test Messages Logs')); ?></a>
              <a class="dropdown-item" href="<?php echo e(route('user.app.integration',$app->uuid)); ?>"><?php echo e(__('REST API')); ?></a>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">
          <a href="<?php echo e(route('user.app.integration',$app->uuid)); ?>" class="text-nowrap  font-weight-600"><?php echo e(__('Integration')); ?> <i class="fa fa-arrow-right"></i></a>
        </p>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/apps/index.blade.php ENDPATH**/ ?>