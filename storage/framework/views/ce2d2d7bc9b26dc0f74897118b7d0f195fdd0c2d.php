<form method="POST" action="<?php echo e(route('user.template.update',$template->id)); ?>" class="ajaxform">
   <?php echo csrf_field(); ?>
   <?php echo method_field('PUT'); ?>
   <div class="row">
      <div class="col-sm-12">
         <div class="form-group">
            <label><?php echo e(__('Template Name')); ?></label>
            <input type="text" name="template_name" class="form-control" value="<?php echo e($template->title); ?>">
         </div>
      </div>
      <div class="col-sm-6">
         <div class="form-group">
            <label><?php echo e(__('Latitude')); ?></label>
            <input type="number" step="any" name="degreesLatitude" required="" class="form-control" placeholder="Example: 24.121231" value="<?php echo e($template->body['location']['degreesLatitude'] ?? ''); ?>">
         </div>
      </div>
      <div class="col-sm-6">
         <div class="form-group">
            <label><?php echo e(__('Longitude')); ?></label>
            <input type="number" step="any" name="degreesLongitude" required="" class="form-control" placeholder="Example: 55.1121221" value="<?php echo e($template->body['location']['degreesLongitude'] ?? ''); ?>">
         </div>
      </div>
      <div class="col-sm-12">
         <div class="row">
            <div class="col-sm-8 d-flex">
               <label class="custom-toggle custom-toggle-primary">
               <input type="checkbox"  <?php echo e($template->status == 1 ? 'checked' : ''); ?>  name="status" id="template-status" >
               <span class="custom-toggle-slider rounded-circle" data-label-off="<?php echo e(__('No')); ?>" data-label-on="<?php echo e(__('Yes')); ?>"></span>
               </label>
               <label class="mt-1 ml-1" for="template-status">
                  <h4><?php echo e(__('Make it active template?')); ?></h4>
               </label>
            </div>
            <div class="col-sm-4">
               <button type="submit" class="btn btn-outline-primary submit-button float-right"><?php echo e(__('Save Template')); ?></button>
            </div>
         </div>
      </div>
   </div>
</form><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/edit/location.blade.php ENDPATH**/ ?>