<div class="tp-support__area pt-120 pb-120 grey-bg p-relative">
         <div class="tp-support__bg">
            <img src="<?php echo e(asset('assets/frontend/img/faq/faq-bg-shape.png')); ?>" alt="">
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
                            <?php if($faq->slug != 'top'): ?>
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
                           <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/frontend/sections/faq.blade.php ENDPATH**/ ?>