<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
   <!-- breadcrumb area start -->
   <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
      data-background="<?php echo e(asset('frontend/img/breadcrumb/breadcrumb.jpg')); ?>">
      <div class="breadcrumb__scroll-bottom smooth">
         <a href="#team">
         <i class="far fa-arrow-down"></i>
         </a>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content text-center">
                  <h3 class="breadcrumb__title"><?php echo e(__('Team')); ?></h3>
                  <div class="breadcrumb__list">
                     <span><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></span>
                     <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                     <span><?php echo e(__('Our Team')); ?></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb area end -->
   <div id="team" class="tp-team__area tp-team__inner p-relative pt-130 pb-70">
      <div class="container">
         <div class="row">
            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-70">
               <div class="tp-team__item text-center">
                  <div class="tp-team__img fix">
                     <img src="<?php echo e(asset($team['avatar'])); ?>" alt="">
                  </div>
                  <div class="tp-team__content">
                     <h4 class="tp-team__title"><a href="#"><?php echo e($team['name']); ?></a></h4>
                     <span><?php echo e($team['position']); ?></span>
                  </div>
                  <div class="tp-team__social">
                     <?php if(!empty($team['socials']->facebook)): ?>
                     <a href="<?php echo e($team['socials']->facebook); ?>"><i class="fab fa-facebook-f"></i></a>
                     <?php endif; ?>
                     <?php if(!empty($team['socials']->twitter)): ?>
                     <a href="<?php echo e($team['socials']->twitter); ?>"><i class="fab fa-twitter"></i></a>
                     <?php endif; ?>
                     <?php if(!empty($team['socials']->linkedin)): ?>
                     <a href="<?php echo e($team['socials']->linkedin); ?>"><i class="fab fa-linkedin"></i></a>
                     <?php endif; ?>
                     <?php if(!empty($team['socials']->instagram)): ?>
                     <a href="<?php echo e($team['socials']->instagram); ?>"><i class="fab fa-instagram"></i></a>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
   <!-- tp-support-area-start -->
   <div class="tp-support__area pt-120 pb-120 grey-bg p-relative">
      <div class="tp-support__bg">
         <img src="<?php echo e(asset('frontend/img/faq/faq-bg-shape.png')); ?>" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="tp-support__title-box text-center mb-70">
                  <h3 class="tp-section-title"><?php echo e(__('Frequently asked questions')); ?> 📣</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="tp-support__faq">
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

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/team.blade.php ENDPATH**/ ?>