<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <main>
      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
         data-background="<?php echo e(asset('assets/frontend/img/breadcrumb/breadcrumb.jpg')); ?>">
         <div class="breadcrumb__scroll-bottom smooth">
            <a href="#contact">
               <i class="far fa-arrow-down"></i>
            </a>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center">
                     <h3 class="breadcrumb__title"><?php echo e(__('Contact us')); ?></h3>
                     <div class="breadcrumb__list">
                        <span><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span><?php echo e(__('Contact us')); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- contact area start -->
      <div class="tp-conatact-area pt-125 pb-125">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                  <div class="contact-info text-center">
                     <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                     <h4><?php echo e(__('Visit Us Daily')); ?></h4>
                     <span>
                        <a href="<?php echo e($contact_page->map_link ?? ''); ?>" target="_blank"><?php echo e($contact_page->address ?? ''); ?><br><?php echo e($contact_page->country ?? ''); ?></a>
                     </span>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                  <div class="contact-info text-center">
                     <span class="contact-icon"><i class="fas fa-phone-volume"></i></span>
                     <h4><?php echo e(__('Contact Us')); ?></h4>
                     <span>
                        <a href="tel:<?php echo e($contact_page->contact1 ?? ''); ?>"><?php echo e($contact_page->contact1 ?? ''); ?><br>
                          <?php echo e($contact_page->contact2 ?? ''); ?></a>
                     </span>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                  <div class="contact-info text-center">
                     <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                     <h4><?php echo e(__('Email Us')); ?></h4>
                     <span><a href="mailto:<?php echo e($contact_page->email1 ?? ''); ?>"><?php echo e($contact_page->email1 ?? ''); ?></a><br>
                        <a href="mailto:<?php echo e($contact_page->email2 ?? ''); ?>"><?php echo e($contact_page->email2 ?? ''); ?></a></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div id="contact" class="contact-form-box pt-60">
                     <div class="contact-form-box text-center">
                        <div class="row justify-content-center">
                           <div class="col-8">
                              <h4 class="contact-title"><?php echo e(__('Send us a Message :')); ?></h4>
                           </div>
                        </div>
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                         <ul>
                           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li><?php echo e($error); ?></li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                       </div>
                       <?php endif; ?>
                       <?php if(Session::has('success')): ?>                       
                       <div class="alert alert-success" role="alert">
                         <?php echo e(Session::get('success')); ?>

                       </div>
                       <?php endif; ?>
                       <?php if(Session::has('error')): ?>                       
                       <div class="alert alert-danger" role="alert">
                         <?php echo e(Session::get('error')); ?>

                       </div>
                       <?php endif; ?>
                        <form action="<?php echo e(route('send.mail')); ?>" method="post">
                           <?php echo csrf_field(); ?>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="text" required="" name="name" maxlength="20" placeholder="<?php echo e(__('Enter your Name')); ?>" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                 </div>                               
                              </div>
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="email" required="" name="email" maxlength="40" placeholder="<?php echo e(__('Enter your Mail')); ?>" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                 </div>
                                 
                              </div>
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="number" required="" name="phone" maxlength="15" placeholder="<?php echo e(__('Enter your Number')); ?>" class="<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                 </div>                                
                              </div>
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="text" placeholder="<?php echo e(__('Subject')); ?>" maxlength="100" required="" name="subject" class="<?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                 </div>                                
                              </div>
                              <div class="col-12">
                                 <div class="tp-contact-input">
                                    <textarea placeholder="<?php echo e(__('Type your Message')); ?>" maxlength="500" required="" name="message" class="<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea>
                                 </div>                                
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="tp-submit-button">
                                    <button type="submit" class="tp-btn-blue-square"><span><?php echo e(__('Send Message')); ?></span></button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact area end -->
   </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/frontend/contact.blade.php ENDPATH**/ ?>