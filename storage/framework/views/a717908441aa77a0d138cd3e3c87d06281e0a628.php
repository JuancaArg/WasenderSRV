<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Edit User'),
'buttons'=>[
    [
        'name'=>__('Back'),
        'url'=>route('admin.customer.index'),
    ]
]

], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row ">
	<div class="col-lg-5 mt-5">
        <strong><?php echo e(__('Edit User')); ?></strong>
        <p><?php echo e(__('Edit user profile information')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform_instant_reload" action="<?php echo e(route('admin.customer.update',$customer->id)); ?>">
        	<?php echo csrf_field(); ?>
        	<?php echo method_field('PUT'); ?>
        	<div class="card">
            <div class="card-body">
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Name')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="name" required="" class="form-control" value="<?php echo e($customer->name); ?>">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Email')); ?></label>
                    <div class="col-lg-12">
                        <input type="email" name="email" required="" class="form-control" value="<?php echo e($customer->email); ?>">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Phone')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="phone"  class="form-control" value="<?php echo e($customer->phone); ?>">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Address')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="address"  class="form-control" value="<?php echo e($customer->address); ?>">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('New Password')); ?></label>
                    <div class="col-lg-12">
                        <input type="text" name="password"  class="form-control" value="">
                    </div>
                </div>
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Status')); ?></label>
                    <div class="col-lg-12">
                       <select class="form-control" name="status">
                       	 <option value="1" <?php echo e($customer->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
                       	 <option value="0" <?php echo e($customer->status == 0 ? 'selected' : ''); ?>><?php echo e(__('Deactive')); ?></option>
                       </select>
                    </div>
                </div>
                

                 <div class="from-group row mt-3">
                    <div class="col-lg-12">
                       <button class="btn btn-neutral submit-button btn-sm float-left"> <?php echo e(__('Update')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/customers/edit.blade.php ENDPATH**/ ?>