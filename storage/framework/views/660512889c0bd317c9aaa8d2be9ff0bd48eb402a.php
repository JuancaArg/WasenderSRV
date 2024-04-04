<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
   <!-- breadcrumb area start -->
   <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
   data-background="<?php echo e(asset('frontend/img/breadcrumb/breadcrumb.jpg')); ?>">
   <div class="breadcrumb__scroll-bottom smooth">
      <a href="#faq">
         <i class="far fa-arrow-down"></i>
      </a>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content text-center">
               <h3 class="breadcrumb__title"><?php echo e(__('Ask Question')); ?></h3>
               <div class="breadcrumb__list">
                  <span><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></span>
                  <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                  <span><?php echo e(__('Faq')); ?></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb area end -->

<!-- tp-support-area-start -->
<div class="tp-support__area tp-support__bg-2 pt-120 pb-120 p-relative">
   <div class="tp-support__bg tp-support__bg-2">
      <img src="<?php echo e(asset('frontend/img/faq/faq-bg-shape-2.png')); ?>" alt="">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="tp-support__title-box text-center mb-70">
               <h3 class="tp-section-title"><?php echo e(__('Need A Support?')); ?> 🎧</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="tp-support__faq" >
               <div class="tp-custom-accordio-2">
                  <div class="accordion" id="accordionExample-2">
                     <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="accordion-items">
                        <h2 class="accordion-header" id="heading-<?php echo e($key+1); ?>">
                           <button class="accordion-buttons <?php echo e($key > 0 ? 'collapsed' : ''); ?>" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-<?php echo e($key+1); ?>" aria-expanded="<?php echo e($key == 0 ? true : false); ?>" aria-controls="collapse-1">
                              <?php echo e($faq->title); ?>

                           </button>
                        </h2>
                        <div id="collapse-<?php echo e($key+1); ?>" class="accordion-collapse collapse <?php echo e($key == 0 ? 'show' : ''); ?>" aria-labelledby="heading-<?php echo e($key+1); ?>"
                        data-bs-parent="#accordionExample-2">
                        <div class="accordion-body">
                         <?php echo e($faq->excerpt->value ?? ''); ?>

                      </div>
                   </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
</div>
<!-- tp-support-area-end -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/faq.blade.php ENDPATH**/ ?>