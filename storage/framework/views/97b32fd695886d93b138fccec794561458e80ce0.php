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
        <button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Save Template')); ?></button>
    </div>
</div>
</form><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/location.blade.php ENDPATH**/ ?>