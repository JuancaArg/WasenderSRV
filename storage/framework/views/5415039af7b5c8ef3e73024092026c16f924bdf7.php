<form method="POST" action="<?php echo e(route('user.template.update',$template->id)); ?>" class="ajaxform">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label><?php echo e(__('Template Name:')); ?></label>
            <input type="text" name="template_name" required="" class="form-control" value="<?php echo e($template->title); ?>">
        </div>
    </div>   
    <div class="col-sm-12">
        <div class="form-group">
            <label><?php echo e(__('Message Caption')); ?></label>
            <textarea class="form-control h-200" name="message" required="" maxlength="1000"><?php echo e($template->body['text'] ?? ''); ?></textarea>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label><?php echo e(__('Footer Text')); ?></label>
            <input type="text" class="form-control" name="footer_text" required="" autofocus="" maxlength="100" value="<?php echo e($template->body['footer'] ?? ''); ?>" />
        </div>
    </div>
    <div class="col-sm-12" id="list-button-appendarea">
        <?php
        $buttons=count($template->body['buttons'] ?? []);
        ?>
        <?php $__currentLoopData = $template->body['buttons'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key == 0): ?>
        <div class="form-group plain_button_message_text">
            <div class="row">
                <div class="col-6">
                    <label><?php echo e(__('Button 1 Text')); ?></label>
                </div>
                <div class="col-6">
                    <a href="javascript:void(0)" id="add-more" class="btn btn-sm btn-primary btn-neutral float-right mb-1 <?php echo e($buttons == 3 ? 'none' : ''); ?>"><i class="fa fa-plus"></i>&nbsp<?php echo e(__('Add More')); ?></a>
                </div>
            </div>
            <input type="text" class="form-control" name="buttons[]" required="" autofocus="" maxlength="50"  value="<?php echo e($button['buttonText']['displayText'] ?? ''); ?>"/>
        </div>

        <?php else: ?>
        <div class="plain_button_message_text exist_button<?php echo e($key+1); ?>">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label><?php echo e(__('Button')); ?> <?php echo e($key+1); ?> <?php echo e(__('Text')); ?></label>
                    </div>
                    <div class="col-6">
                        <a href="javascript:void(0)" data-target=".exist_button<?php echo e($key+1); ?>" class="btn btn-sm btn-danger float-right mb-1 remove-button"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
                <input type="text" class="form-control" name="buttons[]" required="" autofocus="" maxlength="50" value="<?php echo e($button['buttonText']['displayText'] ?? ''); ?>">
            </div>
        </div>
        <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Save Template')); ?></button>
    </div>
  </div>
</form><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/button.blade.php ENDPATH**/ ?>