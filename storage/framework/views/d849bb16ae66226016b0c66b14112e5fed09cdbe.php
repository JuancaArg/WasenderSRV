<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('App Settings'),
'buttons' =>[
	[
		'name'=> __('Back to dashboard'),
		'url'=> url('admin/dashboard'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row ">
	<div class="col-lg-5 mt-5">
        <strong><?php echo e(__('Application Settings')); ?></strong>
        <p><?php echo e(__('Edit you application global settings')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform" action="<?php echo e(route('admin.developer-settings.update',$id)); ?>">
        	<?php echo csrf_field(); ?>
        	<?php echo method_field('PUT'); ?>
        	<div class="card">
            <div class="card-body">
                <div class="from-group row">
                    <label class="col-lg-12"><?php echo e(__('Application Name')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="name"  value="<?php echo e(env('APP_NAME')); ?>" required="" class="form-control">
                    </div>
                </div> 
                
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Visibility Of Site Error')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="app_debug">
                            <option value="true" <?php echo e(env('APP_DEBUG') == true ? 'selected' : ''); ?>><?php echo e(__('Enable')); ?></option>
                            <option value="false" <?php echo e(env('APP_DEBUG') == false ? 'selected' : ''); ?>><?php echo e(__('Disable')); ?></option>
                        </select>
                    </div>
                </div>   
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Application Time Zone')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="timezone">
                            <?php $__currentLoopData = $tzlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($timezone); ?>" <?php echo e(env('TIME_ZONE') == $timezone ? 'selected' : ''); ?>><?php echo e($timezone); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                        </select>
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Application Default Language')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="default_lang">
                            <?php $__currentLoopData = $languages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langKey => $langauge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($langKey); ?>" <?php echo e(env('DEFAULT_LANG') == $langKey ? 'selected' : ''); ?>><?php echo e($langauge); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                        </select>
                    </div>
                </div>                
                <div class="from-group row mt-3">
                    <div class="col-lg-12">
                       <button class="btn btn-neutral submit-button btn-sm float-left"><?php echo e(__('Update Settings')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/developer/app.blade.php ENDPATH**/ ?>