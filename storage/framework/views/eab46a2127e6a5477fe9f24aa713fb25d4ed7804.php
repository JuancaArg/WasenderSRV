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
            <label><?php echo e(__('Select File')); ?></label>
            <input id="phone" type="file" class="form-control" name="file"  />
            <small><?php echo e(__(' Supported file type:')); ?></small> <small class="text-danger"><?php echo e(__('jpg,jpeg,png,webp,pdf,docx,xlsx,csv,txt')); ?></small>
            <br>
            <?php if(isset($template->body['image'])): ?>
            <a href="<?php echo e(asset($template->body['image']['url'] ?? '')); ?>" target="_blank">
                <img src="<?php echo e(asset($template->body['image']['url'] ?? '')); ?>" height="50">
            </a>

            <?php elseif($template->body['document']): ?>
            <a href="<?php echo e(asset($template->body['document']['url'] ?? '')); ?>" target="_blank">
                <?php echo e(__('Attachment')); ?>

            </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-row mb-1">
            <label class="col-12 text-left"><?php echo e(__('Media Caption:')); ?></label>
        </div>
        <div class="form-group">
            <input class="form-control" name="message" required="" maxlength="1000" value="<?php echo e($template->body['caption'] ?? ''); ?>" />
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Save Template')); ?></button>
    </div>
</div>
</form><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/media.blade.php ENDPATH**/ ?>