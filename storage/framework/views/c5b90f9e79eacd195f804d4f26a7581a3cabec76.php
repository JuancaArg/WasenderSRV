<div class="tp-integration__area tp-integration__bg pt-120">
         <div class="tp-integration__title-box text-center">
            <h3 class="tp-section-title"><?php echo e($home->integration->title ?? ''); ?></h3>
         </div>
         <div class="tp-integration__wrapper d-none d-md-block p-relative">
            <div class="tp-integration__border-shape">
               <img src="assets/frontend/img/border/border-shapepng.png" alt="">
            </div>
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brandKey => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($brand->lang == 'integration'): ?>
                  <div class="tp-integration__icon int-icon-<?php echo e($brandKey+1); ?> wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".<?php echo e(3+$brandKey); ?>s">
                     <span><img src="<?php echo e(asset($brand->slug)); ?>" alt=""></span>
                  </div>
               <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
         </div>
         <div class="tp-integration__bottom p-relative text-center">
            <div class="tp-integration__big-thumb wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
               <img src="<?php echo e(asset($home->integration_cover ?? '')); ?>" alt="">
            </div>
            <div class="int-icon-bottom int-icon-8 d-none d-md-block wow tpfadeLeft" data-wow-duration=".7s" data-wow-delay=".8">
               <span class="tp-pulse-border z-index"><img src="<?php echo e(asset($home->integration_left ?? '')); ?>" alt=""></span>
            </div>
            <div class="int-icon-bottom int-icon-9 d-none d-md-block wow tpfadeRight" data-wow-duration=".7s" data-wow-delay=".7s">
               <span class="tp-pulse-border z-index"><img src="<?php echo e(asset($home->integration_right ?? '')); ?>" alt=""></span>
            </div>
         </div>
      </div><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/frontend/sections/top-integration.blade.php ENDPATH**/ ?>