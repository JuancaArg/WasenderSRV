<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- tp-offcanvus-area-start -->
<div class="body-overlay"></div>
<!-- tp-offcanvus-area-end -->
<main>
   <div class="tp-header-bg">
      <img src="<?php echo e(asset('frontend/img/hero/hero-bg-2.png')); ?>" alt="">
   </div>
   <!-- tp-slider-area-start -->
   <div class="tp-hero__area tp-hero__bg-2">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-9 col-12">
               <div class="tp-hero__wrapper text-center">
                  <div class="tp-hero__content text-center">
                     <h2 class="tp-hero__title-lg pb-40 theme-color wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <?php echo filterXss($heading); ?>

                     </h2>
                  </div>
                  <div class="tp-app__download pb-40 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tp-app__thumb-sm d-flex justify-content-center">
                        <div class="tp-app__thumb-sm-1">
                           <a href="<?php echo e($home->heading->left_button_link ?? '#'); ?>"><img src="<?php echo e(asset($home->left_button_image ?? '')); ?>" alt=""></a>
                        </div>
                        <div class="tp-app__thumb-sm-2">
                           <a href="<?php echo e($home->heading->right_button_link ?? '#'); ?>"><img src="<?php echo e(asset($home->right_button_image ?? '')); ?>" alt=""></a>
                        </div>
                     </div>
                  </div>
                  <div class="tp-hero__contact pb-70 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <a href="<?php echo e(url('/contact')); ?>"><?php echo e(__('Have a query?')); ?> <b><?php echo e(__('Contact us')); ?></b></a>
                  </div>
                  <div class="tp-hero__thumb-2 p-relative">
                     <img class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s" src="<?php echo e(asset($home->hero_image ?? '')); ?>" alt="">
                     <div class="tp-hero__img-1 d-none d-lg-block">
                        <img src="<?php echo e(asset($home->hero_left_image ?? '')); ?>" alt="">
                     </div>
                     <div class="tp-hero__img-2 d-none d-lg-block">
                        <img src="<?php echo e(asset($home->hero_right_image ?? '')); ?>" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-slider-area-end -->
   <?php if($brand_area == 'active'): ?>
   <!-- tp-brand-area-start -->
   <div class="tp-brand__area tp-brand__space pt-130 pb-190">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="tp-brand__section text-center pb-45 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <h3 class="tp-brand__title"><?php echo e($home->brand->title ?? ''); ?></h3>
               </div>
            </div>
         </div>
         <div class="tp-brand-slide-section">
            <div class="tp-barnd__active">
               <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="tp-brand__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <a href="<?php echo e($brand->title); ?>"><img src="<?php echo e(asset($brand->slug)); ?>" alt=""></a>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-brand-area-end -->
   <?php endif; ?>
   <!-- tp-cta-area-start -->
   <div class="tp-cta__area wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
      <div class="container p-relative">
         <div class="tp-cta__thumb">
            <img src="<?php echo e(asset($home->cta_thumbnail ?? '')); ?>" alt="">
         </div>
         <div class="tp-cta__thumb-2 d-none d-lg-block">
            <img src="<?php echo e(asset($home->cta_logo ?? '')); ?>" alt="">
         </div>
         <div class="tp-cta__bg grey-bg">
            <div class="row">
               <div class="col-xl-7 col-lg-8 col-md-12">
                  <div class="tp-cta__item-left">
                     <h3 class="tp-cta__title"><?php echo e($home->cta->title ?? ''); ?></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-cta-area-end -->
   <?php if($features_area == 'active'): ?>
   <!-- tp-feature-area-start -->
   <div class="tp-feature__area pt-120 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="tp-feature__section text-center mb-70">
                  <h3 class="tp-section-title wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo e($home->features->title ?? ''); ?></h3>
               </div>
            </div>
         </div>
         <div class="row">
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-4 col-md-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
               <div class="tp-feature__item mb-30 text-center">
                  <div class="tp-feature__icon">
                     <img src="<?php echo e(asset($feature->preview->value ?? '')); ?>" alt="">
                  </div>
                  <div class="tp-feature__content">
                     <h4 class="tp-feature__title-sm"><?php echo e(Str::limit($feature->title,20)); ?></h4>
                     <p><?php echo e(Str::limit($feature->excerpt->value ?? '',90)); ?></p>
                  </div>
                  <div class="tp-feature__link pt-50">
                     <a href="<?php echo e(url('feature/'.$feature->slug)); ?>">
                        <svg width="39" height="16" viewBox="0 0 39 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z" fill="currentColor"/>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
   <!-- tp-feature-area-end -->
   <?php endif; ?>
   <!-- tp-platform-area-start -->
   <div class="tp-platform__area pb-120">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
               <div class="tp-platform__wrapper p-relative">
                  <div class="tp-platform__shape-1">
                     <img src="<?php echo e(asset('frontend/img/platform/pf-3.png')); ?>" alt="">
                  </div>
                  <div class="tp-platform__shape-2">
                     <img src="<?php echo e(asset('frontend/img/platform/pf-4.png')); ?>" alt="">
                  </div>
                  <div class="tp-platform__thumb z-index wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                     <img src="<?php echo e(asset($home->platform_thumbnail ?? '')); ?>" alt="">
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".8s">
               <div class="tp-platform__content pl-40">
                  <h3 class="tp-section-title-sm pb-25"><?php echo e($home->platform->title ?? ''); ?></h3>
                  <p class="pb-25"><?php echo e($home->platform->description ?? ''); ?></p>
                  <a class="tp-btn-blue" href="<?php echo e(url($home->platform->button_link ?? '')); ?>"><span><?php echo e($home->platform->button_title ?? ''); ?></span></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-platform-area-end -->
   <!-- tp-price-area-start -->
   <?php echo $__env->make('frontend.pricings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- tp-price-area-end -->
   <!-- tp-account-area-start -->
   <div class="tp-account__area pt-120 pb-120">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
               <div class="tp-account__wrapper">
                  <div class="tp-account__section-box">
                     <h3 class="tp-section-title-sm pb-20"><?php echo e($home->account_area->heading ?? ''); ?></h3>
                     <span><?php echo e($home->account_area->subheading ?? ''); ?></span>
                     <p><?php echo e($home->account_area->description ?? ''); ?> </p>
                  </div>
                  <div class="tp-account__form p-relative">
                     <form action="<?php echo e(url($home->account_area->form_link ?? '')); ?>">
                        <div class="tp-account__input">
                           <input type="email" placeholder="example@email.com" name="email">
                        </div>
                        <button><?php echo e(__('sign up')); ?><i class="fas fa-paper-plane"></i></button>
                     </form>
                  </div>
                  <div class="tp-account__app-download">
                     <span><?php echo e(__('# Also available mobile apps')); ?></span>
                     <div class="tp-account__img-main d-flex">
                        <div class="tp-account__img-1 mr-20">
                           <a href="<?php echo e(url($home->account_area->button_link1 ?? '')); ?>"><img src="<?php echo e(asset($home->account_footer_left_image ?? '')); ?>" alt=""></a>
                        </div>
                        <div class="tp-account__img-2">
                           <a href="<?php echo e(url($home->account_area->button_link2 ?? '')); ?>"><img src="<?php echo e(asset($home->account_footer_right_image ?? '')); ?>" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
               <div class="tp-account__thumb-wrapper p-relative">
                  <div class="tp-account__thumb text-center ">
                     <img src="<?php echo e(asset($home->account_area_thumbnail ?? '')); ?>" alt="">
                  </div>
                  <div class="tp-account__sm-img-1 d-none d-md-block">
                     <img src="<?php echo e(asset($home->account_area_top_thumbnail ?? '')); ?>" alt="">
                  </div>
                  <div class="tp-account__sm-img-2 d-none d-md-block">
                     <img src="<?php echo e(asset($home->account_area_bottom_thumbnail ?? '')); ?>" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-account-area-end -->
   <!-- tp-testimonial-area-start -->
   <div class="tp-testimonial__area grey-bg pt-110 pb-120 fix">
      <div class="container-fluid">
         <div class="row g-0">
            <div class="col-12">
               <div class="tp-testimonial__section text-center pb-50">
                  <h3 class="tp-section-title wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo e(__('Testimonials')); ?></h3>
               </div>
            </div>
         </div>
         <div class="tp-testimonial__section">
            <div class="tp-testimonial__active">
               <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="tp-testimonial__slider-item d-flex align-items-center p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-testimonial__slider-content">
                     <p><?php echo e(Str::limit($testimonial->excerpt->value ?? '',200)); ?></p>
                     <h4 class="tp-testimonial__slider-title">- <?php echo e($testimonial->title ?? ''); ?>, <?php echo e($testimonial->slug ?? ''); ?></h4>
                  </div>
                  <div class="tp-testimonial__slider-img">
                     <img src="<?php echo e(asset($testimonial->preview->value ?? '')); ?>" alt="">
                  </div>
                  <div class="tp-testimonial__slider-quote">
                     <i class="fas fa-quote-left"></i>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-testimonial-area-end -->
   <!-- tp-cta-area-start -->
   <div class="tp-cta__area p-relative">
      <div class="tp-cta__grey-bg grey-bg"></div>
      <div class="tp-cta__white-bg white-bg"></div>
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="tp-cta__wrapper-2 theme-bg p-relative">
                  <div class="tp-cta__shape-1">
                     <img src="<?php echo e(asset('frontend/img/cta/cta-shape-1.png')); ?>" alt="">
                  </div>
                  <div class="tp-cta__shape-2">
                     <img src="<?php echo e(asset('frontend/img/cta/cta-shape-2.png')); ?>" alt="">
                  </div>
                  <div class="tp-cta__shape-3">
                     <img src="<?php echo e(asset('frontend/img/cta/cta-shape-3.png')); ?>" alt="">
                  </div>
                  <div class="tp-cta__shape-4">
                     <img src="<?php echo e(asset('frontend/img/cta/cta-shape-4.png')); ?>" alt="">
                  </div>
                  <div class="tp-cta__shape-5">
                     <img src="<?php echo e(asset('frontend/img/cta/cta-shape-5.png')); ?>" alt="">
                  </div>
                  <div class="tp-cta__item text-center">
                     <h3 class="tp-section-title text-white pb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo e($home->calltoaction->title ?? ''); ?></h3>
                     <a class="tp-btn-sky wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s" href="<?php echo e(url($home->calltoaction->button_link ?? '')); ?>"><span><?php echo e($home->calltoaction->button_title ?? ''); ?></span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-cta-area-end -->
   <!-- tp-faq-area-start -->
   <div class="tp-faq__area pt-120 pb-110">
      <div class="container">
         <div class="row">
            <div class="col-xl-7 col-lg-6">
               <div class="tp-custom-accordio-3">
                  <div class="accordion" id="accordionExample">
                     <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="accordion-items wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-buttons <?php echo e($key > 0 ? 'collapsed' : ''); ?>" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne<?php echo e($key); ?>" aria-expanded="<?php echo e($key == 0 ? true : false); ?>" aria-controls="collapseOne">
                           <?php echo e($faq->title); ?>

                           </button>
                        </h2>
                        <div id="collapseOne<?php echo e($key); ?>" class="accordion-collapse collapse <?php echo e($key == 0 ? 'show' : ''); ?>"
                           aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <?php echo e($faq->excerpt->value ?? ''); ?>

                           </div>
                        </div>
                     </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
            </div>
            <div class="col-xl-5 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".9s">
               <div class="tp-faq__right-side text-center">
                  <div class="tp-faq__icon">
                     <a href="#">
                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M5.9542 23.9764L0 29V0H30V23.9764H5.9542Z" fill="#017EFA"/>
                        </svg>
                     </a>
                  </div>
                  <div class="tp-faq__content">
                     <h4 class="tp-faq__faq-sm-title"><?php echo e(__('Do you have more questions?')); ?></h4>
                     <p><?php echo e(__('faq_description')); ?></p>
                     <a class="w-100" href="<?php echo e(url('/contact')); ?>"><?php echo e(__('Shoot a Direct Mail')); ?></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-faq-area-end -->
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/index.blade.php ENDPATH**/ ?>