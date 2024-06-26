<!-- tp-slider-area-start -->
<div class="tp-hero__area tp-hero__bg p-relative" data-background="<?php echo e(asset('assets/frontend/img/hero/hero-bg.png')); ?>">
   <div class="scroll-down smooth d-none d-xl-block">
      <a href="#feature-area">
         <div class="scroll-dots d-flex justify-content-center flex-column align-items-center">
            <span class="rotate-text"><?php echo e(__('Scrool Down')); ?></span>
            <span class="circle-1"></span>
            <span class="circle-2"></span>
            <span class="circle-3"></span>
            <button class="scroll-mouse"><i class="fal fa-mouse"></i></button>
         </div>
      </a>
   </div>
   <div class="tp-hero__social d-none d-xl-flex">
      <?php if(!empty(get_option('primary_data',true)->socials->twitter)): ?>
      <a class="p-relative" href="<?php echo e(get_option('primary_data',true)->socials->twitter); ?>"><i class="fab fa-twitter"></i>
         <div class="social-icon">
            <span><i class="fab fa-twitter"></i> <?php echo e(__('twitter')); ?></span>
         </div>
      </a>
      <?php endif; ?>
      <?php if(!empty(get_option('primary_data',true)->socials->facebook)): ?>
      <a class="p-relative" href="<?php echo e(get_option('primary_data',true)->socials->facebook); ?>"><i class="fab fa-facebook-f"></i>
         <div class="social-icon facebook">
            <span><i class="fab fa-facebook-f"></i> <?php echo e(__('facebook')); ?></span>
         </div>
      </a>
      <?php endif; ?>
      <?php if(!empty(get_option('primary_data',true)->socials->instagram)): ?>
      <a class="p-relative" href="<?php echo e(get_option('primary_data',true)->socials->instagram); ?>"><i class="fab fa-instagram"></i>
         <div class="social-icon instagram">
            <span><i class="fab fa-instagram"></i> <?php echo e(__('instagram')); ?></span>
         </div>
      </a>
      <?php endif; ?>
      <?php if(!empty(get_option('primary_data',true)->socials->linkedin)): ?>
      <a class="p-relative" href="<?php echo e(get_option('primary_data',true)->socials->linkedin); ?>"><i class="fab fa-linkedin"></i>
         <div class="social-icon dribbble">
            <span><i class="fab fa-linkedin"></i> <?php echo e(__('linkedin')); ?></span>
         </div>
      </a>
      <?php endif; ?>   
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-8 col-12">
            <div class="tp-hero__wrapper">
               <div class="tp-hero__content pb-70 text-center">
                  <h2 class="tp-hero__title wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s"><?php echo filterXss($heading); ?></h2>
               </div>
               <div class="tp-hero__thumb text-xl-block text-lg-center  p-relative">
                  <img class="wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s" src="<?php echo e(asset($home->hero_image ?? '')); ?>" alt="">
                  <div class="tp-hero__thumb-icon">

                     <span class="hero-icon-1 tp-pulse-border z-index d-none d-md-block wow tpfadeLeft" data-wow-duration=".7s" data-wow-delay=".9s"><img src="<?php echo e(asset($home->hero_left_image ?? '')); ?>" alt=""></span>

                     <span class="hero-icon-2 tp-pulse-border z-index d-none d-md-block wow tpfadeRight" data-wow-duration=".7s" data-wow-delay="1s"><img src="<?php echo e(asset($home->hero_right_image ?? '')); ?>" alt=""></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- tp-slider-area-end --><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/frontend/sections/hero-1.blade.php ENDPATH**/ ?>