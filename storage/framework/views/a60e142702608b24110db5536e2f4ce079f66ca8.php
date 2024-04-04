<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- tp-offcanvus-area-start -->
<div class="body-overlay"></div>
<main>
      <?php echo $__env->make('frontend.sections.hero-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if($features_area == 'active'): ?>
       <!-- tp-feature-area-start -->
       <div id="feature-area" class="tp-feature__area pt-60 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-feature__section-box text-center mb-70">
                     <h3 class="tp-section-title wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s"><?php echo e($home->features->title ?? ''); ?></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php echo $__env->make('frontend.sections.features',['limit'=> 6], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
      </div>
      <!-- tp-feature-area-end -->
      <?php endif; ?>

      <!-- tp-appliction-area-start -->
       <?php echo $__env->make('frontend.sections.top-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-appliction-area-end -->


      <!-- tp-faq-area-end -->
      <?php echo $__env->make('frontend.sections.top-faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-faq-area-end -->


      <!-- tp-Integration-area-start -->
      <?php echo $__env->make('frontend.sections.top-integration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-Integration-area-end -->
      <?php echo $__env->make('frontend.pricings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-testimonial-area-start -->
      <?php echo $__env->make('frontend.sections.feedback-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-testimonial-area-end -->

      <!-- tp-choose-area-start -->
       <?php echo $__env->make('frontend.whychoose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-choose-area-end -->


      <!-- tp-support-area-start -->
      <?php echo $__env->make('frontend.sections.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- tp-support-area-end -->


   </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/frontend/index.blade.php ENDPATH**/ ?>