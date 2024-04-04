 <div id="price" class="tp-price__area tp-price__border pt-120 pb-90 ">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-10">
            <div class="tp-price__section text-center pb-60 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
               <h3 class="tp-section-title-sm pb-20"><?php echo e(__('Pricing to suite all size of business')); ?></h3>
               <span><?php echo e(__('*We help companies of all sizes')); ?></span>
            </div>
         </div>
      </div>
      <div class="row g-0 align-items-end align-items-lg-center">
         <?php $__currentLoopData = $plans ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
            <div class="tp-price__item <?php echo e($plan->is_recommended == 1 ? 'tp-price__active z-index' : ''); ?>">
               <div class="tp-price__icon d-flex justify-content-between align-items-center">
                  <span class="icon <?php echo e($plan->labelcolor); ?>"><i class="<?php echo e($plan->iconname); ?>"></i></span>
                  <span><?php echo e($plan->title); ?> </span>
               </div>
               <h3 class="tp-price__title"><?php echo e(amount_format($plan->price,'icon')); ?> <small class="tp-price__small_title"><?php echo e($plan->days == 30 ? '/month' : '/year'); ?></small></h3>
               <div class="tp-price__list">
                  <ul>
                     <?php $__currentLoopData = $plan->data ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li class="<?php echo e(planData($key,$data)['value'] == false && planData($key,$data)['is_bool'] == true ? 'd-none' : ''); ?>">

                        <?php echo e(ucfirst(str_replace('_',' ',planData($key,$data)['title']))); ?>

                     </li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
               </div>
               <div class="tp-price__btn">
                  <a class="tp-btn-border" href="<?php echo e(url('/register',$plan->id)); ?>"><span><?php echo e($plan->is_trial == 1 ? __('Free '.$plan->trial_days.' days trial') : __('Sign Up Now')); ?></span></a>
               </div>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </div>
</div><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/pricings.blade.php ENDPATH**/ ?>