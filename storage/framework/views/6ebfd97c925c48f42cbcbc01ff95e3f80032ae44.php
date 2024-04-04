<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create Role'),
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
         <form method="post" action="<?php echo e(route('admin.role.store')); ?>" class="ajaxform_reset_form">
            <?php echo csrf_field(); ?>
            <div class="pt-20">
               <div class="form-group">
                  <label><?php echo e(__('Role Name')); ?></label>
                  <input type="text" class="form-control" required="" name="name" placeholder="sub admin">
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
                              <div class="col-3">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input group-input" id="<?php echo e($i); ?>Management" value="<?php echo e($group->group_name); ?>" data-class="role-<?php echo e($i); ?>-management-checkbox">
                                    <label class="custom-control-label" for="<?php echo e($i); ?>Management"><?php echo e($group->group_name); ?></label>
                                 </div>
                              </div>
                              <div class="col-9 role-<?php echo e($i); ?>-management-checkbox">
                                 <?php
                                 $permissions = \App\Models\User::getpermissionsByGroupName($group->group_name);
                                 $j = 1;
                                 ?>
                                 <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="permissions[]" id="checkPermission<?php echo e($permission->id); ?>" value="<?php echo e($permission->name); ?>">
                                    <label class="custom-control-label" for="checkPermission<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                 </div>
                                 <?php  $j++; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <br>
                              </div>
                           </div>
                        </div>
                        <?php  $i++; ?>
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/role/create.blade.php ENDPATH**/ ?>