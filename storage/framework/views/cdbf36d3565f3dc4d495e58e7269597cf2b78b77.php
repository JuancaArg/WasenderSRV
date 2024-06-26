<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('Storage Settings'),
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
        <strong><?php echo e(__('Application Storage Settings')); ?></strong>
        <p><?php echo e(__('Edit you storage settings for store uploaded files')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform" action="<?php echo e(route('admin.developer-settings.update',$id)); ?>">
        	<?php echo csrf_field(); ?>
        	<?php echo method_field('PUT'); ?>
        	<div class="card">
            <div class="card-body">
                <div class="from-group row">
                    <label class="col-lg-12"><?php echo e(__('Storage Upload Mode')); ?></label>
                    <div class="col-lg-12">
                       <select class="form-control" name="FILESYSTEM_DISK" id="disk-method">
                           <option value="public" <?php echo e(env('FILESYSTEM_DISK') == 'public' ? 'selected' : ''); ?>><?php echo e(__('Own server (Uploads folder)')); ?></option>
                           <option value="wasabi" <?php echo e(env('FILESYSTEM_DISK') == 'wasabi' ? 'selected' : ''); ?>><?php echo e(__('Wasabi')); ?></option>
                       </select>
                    </div>
                </div> 
                
                <div class="wasabi <?php echo e(env('FILESYSTEM_DISK') == 'public' ? 'none' : ''); ?>">
                    <div class="from-group row mt-2">
                        <label class="col-lg-12"><?php echo e(__('Wasabi Access Key Id')); ?></label>
                        <div class="col-lg-12">
                           <input type="text" name="WAS_ACCESS_KEY_ID" class="form-control" value="<?php echo e(env('WAS_ACCESS_KEY_ID')); ?>">
                        </div>
                    </div> 
                    <div class="from-group row mt-2">
                        <label class="col-lg-12"><?php echo e(__('Wasabi Secret Access Key')); ?></label>
                        <div class="col-lg-12">
                           <input type="text" name="SECRET_ACCESS_KEY" class="form-control" value="<?php echo e(env('SECRET_ACCESS_KEY')); ?>">
                        </div>
                    </div> 
                    <div class="from-group row mt-2">
                        <label class="col-lg-12"><?php echo e(__('Wasabi Default Region')); ?></label>
                        <div class="col-lg-12">
                           <input type="text" name="WAS_DEFAULT_REGION" class="form-control" value="<?php echo e(env('WAS_DEFAULT_REGION')); ?>">
                        </div>
                    </div> 
                    <div class="from-group row mt-2">
                        <label class="col-lg-12"><?php echo e(__('Wasabi Bucket Name')); ?></label>
                        <div class="col-lg-12">
                           <input type="text" name="WAS_BUCKET" class="form-control" value="<?php echo e(env('WAS_BUCKET')); ?>">
                        </div>
                    </div> 
                    <div class="from-group row mt-2">
                        <label class="col-lg-12"><?php echo e(__('Wasabi Endpoint')); ?></label>
                        <div class="col-lg-12">
                           <input type="text" name="WAS_ENDPOINT" class="form-control" value="<?php echo e(env('WAS_ENDPOINT')); ?>">
                        </div>
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
<?php $__env->startPush('js'); ?>
<script type="text/javascript">
   "use strict";

   $('#disk-method').on('change',function(){

        $(this).val() == 'wasabi' ? $('.wasabi').show() : $('.wasabi').hide(); 

   });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/developer/storage.blade.php ENDPATH**/ ?>