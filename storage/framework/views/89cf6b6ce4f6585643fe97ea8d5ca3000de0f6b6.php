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
         <div class="form-group">
            <label><?php echo e(__('Template Title (Header)')); ?></label>
            <input  type="text" class="form-control" name="header_title" placeholder="<?php echo e(__('Example: Amazing boldfaced list title')); ?>" value="<?php echo e($template->body['title'] ?? ''); ?>" required=""  maxlength="50"  />
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
         <div class="form-group">
            <label><?php echo e(__('Template Footer Text')); ?></label>
            <input  type="text" class="form-control" name="footer_text" placeholder="<?php echo e(__('Example: Thank you')); ?>" required=""  maxlength="50" value="<?php echo e($template->body['footer'] ?? ''); ?>" />
         </div>
      </div>
      <div class="col-sm-12">
         <div class="form-group">
            <label><?php echo e(__('Button Text for select option')); ?></label>
            <input  type="text" class="form-control" name="button_text" placeholder="<?php echo e(__('Example: Required, text on the button to view the list')); ?>" value="<?php echo e($template->body['buttonText'] ?? ''); ?>" required=""  maxlength="50" />
         </div>
      </div>
      <div class="col-sm-12">
         <div class="list-option-area">
            <div class="row">
               <div class="col-6">
                  <h4 class="mt-2"><?php echo e(__('List Options')); ?></h4>
               </div>
               <div class="col-6">
                  <a href="javascript:void(0)" id="add-more-option" class="btn btn-sm btn-primary btn-neutral float-right mb-1"><i class="fa fa-plus"></i>&nbsp; <?php echo e(__('Add More Card')); ?></a>
               </div>
            </div>
            <div class="list-area">
               <?php $__currentLoopData = $template->body['sections']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sectionKey => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($sectionKey == 0): ?>
               <div class="card card-primary card-item">
                  <div class="card-header">
                     <h4><?php echo e(__('List 1')); ?></h4>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label><?php echo e(__('List Section Title')); ?></label>
                              <input  type="text" class="form-control" name="section[1][title]" placeholder="<?php echo e(__('Example: Select a fruit')); ?>" value="<?php echo e($section['title'] ?? ''); ?>" required=""  maxlength="50" />
                           </div>
                        </div>
                     </div>
                     <div class="row list-item-area1">
                        <?php $__currentLoopData = $section['rows'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowKey => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 item-<?php echo e($sectionKey+1); ?>-<?php echo e($rowKey+1); ?>">
                           <div class="form-group">
                              <label><?php echo e(__('Enter List Value Name')); ?></label>
                              <input  type="text" class="form-control itemval-1" name="section[1][value][<?php echo e($rowKey); ?>][title]" placeholder="<?php echo e(__('Example: Banana')); ?>" value="<?php echo e($row['title'] ?? ''); ?>" required=""  maxlength="50" />
                           </div>
                        </div>
                        <div class="col-6 item-<?php echo e($sectionKey+1); ?>-<?php echo e($rowKey+1); ?>">
                           <div class="form-group">
                              <label><?php echo e(__('Enter List Value Description')); ?></label>
                              <?php if($rowKey != 0): ?>
                              <a href="javascript:void(0)" class="float-right btn btn-sm btn-danger remove-option-item" data-addbutton=".option-item-btn1" data-target=".item-<?php echo e($sectionKey+1); ?>-<?php echo e($rowKey+1); ?>">X</a>
                              <?php endif; ?>
                              <input  type="text" class="form-control" name="section[1][value][<?php echo e($rowKey); ?>][description]" placeholder="<?php echo e(__('Example: Banana is a healthly food')); ?>" value="<?php echo e($row['description'] ?? ''); ?>"   maxlength="50" />
                           </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                     <div class="row">
                        <div class="col-12 text-right">
                           <a href="javascript:void(0)" class="text-right btn btn-sm btn-neutral add-more-option-item option-item-btn1" data-target=".list-item-area1" data-key="1"><i class="fas fa-plus"></i>&nbsp<?php echo e(__('Add More Item')); ?></a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php else: ?>
               <div class="card card-primary card-item card-area<?php echo e($sectionKey+1); ?>">
                  <div class="card-header">
                     <h4>List <?php echo e($sectionKey+1); ?></h4>
                     <div class="card-header-action">
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-card" data-target=".card-area<?php echo e($sectionKey+1); ?>">
                        <i class="fas fa-trash"></i>
                        </a>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label><?php echo e(__('List Section Title')); ?></label>
                              <input type="text" class="form-control" name="section[<?php echo e($sectionKey+1); ?>][title]" placeholder="Example: Select a fruit"  required="" maxlength="50"  value="<?php echo e($section['title'] ?? ''); ?>" />
                           </div>
                        </div>
                     </div>
                     <div class="row list-item-area<?php echo e($sectionKey+1); ?>">
                        <?php $__currentLoopData = $section['rows'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowKey => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 item-<?php echo e($sectionKey+1); ?>-<?php echo e($rowKey+1); ?>">
                           <div class="form-group">
                              <label><?php echo e(__('Enter List Value Name')); ?></label>
                              <input type="text" class="form-control itemval-<?php echo e($sectionKey+1); ?>" name="section[<?php echo e($sectionKey+1); ?>][value][<?php echo e($rowKey); ?>][title]" placeholder="Example: Banana" value="<?php echo e($row['title'] ?? ''); ?>" required="" maxlength="50" />
                           </div>
                        </div>
                        <div class="col-6 item-<?php echo e($sectionKey+1); ?>-<?php echo e($rowKey+1); ?>">
                           <div class="form-group">
                              <label><?php echo e(__('Enter List Value Description')); ?></label>
                              <?php if($rowKey != 0): ?>
                              <a href="javascript:void(0)" class="float-right btn btn-sm btn-danger remove-option-item" data-addbutton=".option-item-btn1" data-target=".item-<?php echo e($sectionKey+1); ?>-<?php echo e($rowKey+1); ?>">X</a>
                              <?php endif; ?>
                              <input type="text" class="form-control" name="section[<?php echo e($sectionKey+1); ?>][value][<?php echo e($rowKey); ?>][description]" placeholder="Example: Banana is a healthly food" value="<?php echo e($row['description'] ?? ''); ?>" maxlength="50" />
                           </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                     <div class="row">
                        <div class="col-12 text-right">
                           <a href="javascript:void(0)" class="text-right btn btn-sm btn-neutral add-more-option-item option-item-btn<?php echo e($sectionKey+1); ?>" data-target=".list-item-area<?php echo e($sectionKey+1); ?>" data-key="<?php echo e($sectionKey+1); ?>"><i class="fas fa-plus"></i>&nbsp;<?php echo e(__('Add More Item')); ?></a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
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
</form><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/edit/list.blade.php ENDPATH**/ ?>