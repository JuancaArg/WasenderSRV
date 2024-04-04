<?php $__env->startSection('head'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')); ?>"/>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create Plan'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.plan.index'),
	]
]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row ">
	<div class="col-lg-5 mt-5">
        <strong><?php echo e(__('Plan')); ?></strong>
        <p><?php echo e(__('Create subscription plan for charging from the customer')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform_instant_reload" action="<?php echo e(route('admin.plan.store')); ?>">
        	<?php echo csrf_field(); ?>
        	<div class="card">
            <div class="card-body">
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Plan Name')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="title" required="" class="form-control">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Select Duration')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="days">
                        	<option value="30"><?php echo e(__('Monthly')); ?></option>
                        	<option value="365"><?php echo e(__('yearly')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Price')); ?></label>
                    <div class="col-lg-12">
                         <input type="number" name="price" step="any" required="" class="form-control">
                    </div>
                </div>
                <div class="form-group  mt-2">
                    <label for="text"><?php echo e(__('Select Label Color')); ?></label>
                    <div class="input-group">
                       <select class="form-control" name="labelcolor">
                           <option value="price-color-1"><?php echo e(__('Pink Color')); ?></option>
                           <option value="price-color-2"><?php echo e(__('Sky Color')); ?></option>
                           <option value="price-color-3"><?php echo e(__('Yellow Color')); ?></option>
                       </select>
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary" id="iconpicker" data-icon=""  role="iconpicker"></button>
                        </span>
                    </div>
                    <input type="hidden" id="icon-name" name="iconname" >
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Monthly Messages Limit')); ?></label>
                    <div class="col-lg-12">
                         <input type="number" name="plan_data[messages_limit]" required="" class="form-control">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Contacts Limit')); ?></label>
                    <div class="col-lg-12">
                         <input type="number" name="plan_data[contact_limit]" required="" class="form-control">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Device Limit')); ?></label>
                    <div class="col-lg-12">
                         <input type="number" name="plan_data[device_limit]" required="" class="form-control">
                    </div>
                </div>
              
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Template Limit')); ?></label>
                    <div class="col-lg-12">
                         <input type="number" name="plan_data[template_limit]" required="" class="form-control">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('App Limit')); ?></label>
                    <div class="col-lg-12">
                         <input type="number" name="plan_data[apps_limit]" required="" class="form-control">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Chatbot')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="plan_data[chatbot]">
                        	<option value="true"><?php echo e(__('Enabled')); ?></option>
                        	<option value="false"><?php echo e(__('Disabled')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Bulk Message')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="plan_data[bulk_message]">
                        	<option value="true"><?php echo e(__('Enabled')); ?></option>
                        	<option value="false"><?php echo e(__('Disabled')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Schedule Message')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="plan_data[schedule_message]">
                        	<option value="true"><?php echo e(__('Enabled')); ?></option>
                        	<option value="false"><?php echo e(__('Disabled')); ?></option>
                        </select>
                    </div>
                </div>
                
               
                 <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Chat List Access')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="plan_data[access_chat_list]">
                            <option value="true"><?php echo e(__('Enabled')); ?></option>
                            <option value="false"><?php echo e(__('Disabled')); ?></option>
                        </select>
                    </div>
                </div>
                 <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Group List Access')); ?></label>
                    <div class="col-lg-12">
                        <select class="form-control" name="plan_data[access_group_list]">
                            <option value="true"><?php echo e(__('Enabled')); ?></option>
                            <option value="false"><?php echo e(__('Disabled')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 d-flex">
                		<label class="custom-toggle custom-toggle-primary">
                			<input type="checkbox"  name="is_featured" id="is-featured" >
                			<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                		</label>
                		<label class="mt-1 ml-1" for="is-featured"><h4>&nbsp <?php echo e(__('Featured in home page?')); ?></h4></label>
                	</div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 d-flex">
                		<label class="custom-toggle custom-toggle-primary">
                			<input type="checkbox"  name="is_recommended" id="is-recommended" >
                			<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                		</label>
                		<label class="mt-1 ml-1" for="is-recommended"><h4>&nbsp <?php echo e(__('Is recommended?')); ?></h4></label>
                	</div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 d-flex">
                		<label class="custom-toggle custom-toggle-primary">
                			<input type="checkbox"  name="is_trial" id="is-trial" data-target=".trial-days">
                			<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                		</label>
                		<label class="mt-1 ml-1" for="is-trial"><h4>&nbsp <?php echo e(__('Accept Trial?')); ?></h4></label>
                	</div>
                </div>
                <div class="from-group row mt-2 trial-days none">
                    <label class="col-lg-12"><?php echo e(__('Trial days')); ?></label>
                    <div class="col-lg-12">
                         <input type="number" name="trial_days"  class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                	<div class="col-sm-12 d-flex">
                		<label class="custom-toggle custom-toggle-primary">
                			<input type="checkbox"  name="status" id="status" >
                			<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                		</label>
                		<label class="mt-1 ml-1" for="status"><h4>&nbsp <?php echo e(__('Activate This Plan?')); ?></h4></label>
                	</div>
                </div>

                 <div class="from-group row mt-3">
                    <div class="col-lg-12">
                       <button class="btn btn-neutral submit-button btn-sm float-left"> <?php echo e(__('Create')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script  src="<?php echo e(asset('assets/plugins/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js')); ?>"></script>
<script  src="<?php echo e(asset('assets/plugins/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js')); ?>"></script>
<script type="text/javascript">
	"use strict";

    $('#iconpicker').on('change', function(e){
        $('#icon-name').val(e.icon);
    });

	$('#is-trial').on('change',function(){
		var target_action = $(this).data('target');
        $(this).is(':checked') ? $(target_action).show() : $(target_action).hide();
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/plan/create.blade.php ENDPATH**/ ?>