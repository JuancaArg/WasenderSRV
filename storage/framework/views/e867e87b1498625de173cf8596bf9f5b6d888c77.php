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
      <div class="col-sm-12">
         <div class="form-row mb-1">
            <label class="col-6"><?php echo e(__('Message:')); ?></label>
            <div class="col-6">
               <button type="button" data-toggle="modal" data-target="#help-modal" class="btn btn-neutral btn-sm float-right"><i class="fas fas fa-code"></i>&nbsp<?php echo e(__('Shortcodes')); ?></button>
            </div>
         </div>
         <div class="form-group">
            <textarea class="form-control h-200" name="message" required="" maxlength="1000"><?php echo e($template->body['text'] ?? ''); ?></textarea>
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
</form><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/edit/plaintext.blade.php ENDPATH**/ ?>