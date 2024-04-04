<div class="header pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <?php if(isset($prev)): ?>
          <a href="<?php echo e(url($prev)); ?>" class="btn btn-outline-primary btn-sm btn-icon"><i class="fas fa-arrow-left"></i></a>
          <?php endif; ?>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/login')); ?>"><i class="fas fa-home"></i></a></li>
              <?php if(isset($title)): ?>
              <li class="breadcrumb-item"><a href="#"><?php echo $title ?? ''; ?></a></li>
              <?php endif; ?>
              <?php $__currentLoopData = request()->segments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="breadcrumb-item"><a href="#"><?php echo e(Str::limit($segment,28)); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <?php if(isset($buttons)): ?>
          <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(isset($button['is_button'])): ?>
          <?php if($button['is_button'] == true): ?>
          <button type="button" <?php echo $button['components'] ?? ''; ?> class="btn btn-sm btn-neutral"><?php echo $button['name'] ?? ''; ?></button>
          <?php else: ?>
          <a href="<?php echo e($button['url'] ?? ''); ?>" <?php echo $button['components'] ?? ''; ?> class="btn btn-sm btn-neutral"><?php echo $button['name'] ?? ''; ?></a>
          <?php endif; ?>
          <?php else: ?>
          <a href="<?php echo e($button['url'] ?? ''); ?>" <?php echo $button['components'] ?? ''; ?> class="btn btn-sm btn-neutral"><?php echo $button['name'] ?? ''; ?></a>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/layouts/main/headersection.blade.php ENDPATH**/ ?>