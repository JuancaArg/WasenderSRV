<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
         data-background="<?php echo e(asset('assets/img/breadcrumb/breadcrumb.jpg')); ?>">
         <div class="breadcrumb__scroll-bottom smooth">
            <a href="#service-inner__process-box">
               <i class="far fa-arrow-down"></i>
            </a>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center">
                     <h3 class="breadcrumb__title"><?php echo e($feature->title); ?></h3>
                     <div class="breadcrumb__list">
                        <span><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span><?php echo e($feature->title); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- service-inner-area-start -->
      <div class="service-inner__area pt-130 pb-110">
         <div class="container">
            <div class="row">
               <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 mb-30">
                  <div class="service-inner__top-thumb text-center">
                     <img src="<?php echo e(asset($feature->banner->value ?? '')); ?>" alt="">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div id="service-inner__process-box" class="service-inner__process-box">
                     <h3 class="service-inner__title"><?php echo e($feature->title); ?></h3>
                     <p><?php echo e($feature->excerpt->value ?? ''); ?></p>
                  </div>               
                  <div class="service-inner__process-box">                     
                     <p><?php echo e($feature->longDescription->value ?? ''); ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service-inner-area-end -->

      <!-- tp-price-area-start -->
     <?php echo $__env->make('frontend.pricings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-price-area-end -->
   </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/features/show.blade.php ENDPATH**/ ?>