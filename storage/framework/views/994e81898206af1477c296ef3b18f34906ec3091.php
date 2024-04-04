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
        <strong><?php echo e(__('Whatsapp Server Settings')); ?></strong>
        <p><?php echo e(__('Edit you Whatsapp server settings')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform" action="<?php echo e(route('admin.developer-settings.update',$id)); ?>">
        	<?php echo csrf_field(); ?>
        	<?php echo method_field('PUT'); ?>
        	<div class="card">
            <div class="card-body">
                
               

               
                 <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Whatsapp Server Url')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="wa_server_url"  value="<?php echo e(env('WA_SERVER_URL')); ?>" required="" class="form-control">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Whatsapp Server Host')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="host"  value="<?php echo e(env('WA_SERVER_HOST')); ?>" required="" class="form-control">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Whatsapp Server Port')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="port"  value="<?php echo e(env('WA_SERVER_PORT')); ?>" required="" class="form-control">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Max Retties')); ?></label>
                    <div class="col-lg-12">
                        <input type="number" name="MAX_RETRIES"  value="<?php echo e(env('WA_SERVER_MAX_RETRIES')); ?>" required="" class="form-control">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Reconnect Interval')); ?></label>
                    <div class="col-lg-12">
                        <input type="number" name="reconnect_interval"  value="<?php echo e(env('WA_SERVER_RECONNECT_INTERVAL')); ?>" required="" class="form-control">
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/developer/whatsapp.blade.php ENDPATH**/ ?>