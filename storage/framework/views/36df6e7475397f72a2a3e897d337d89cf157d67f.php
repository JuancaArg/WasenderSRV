 <footer>
   <!-- tp-footer-area-start -->
   <div class="tp-footer__area theme-bg pt-120 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="tp-footer__content text-center">
                  <h3 class="tp-section-title text-white wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo e(get_option('header_footer',true,true)->footer->title ?? ''); ?></h3>
                  <p class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s"><?php echo e(get_option('header_footer',true,true)->footer->description ?? ''); ?></p>
               </div>
               <div class="tp-footer__thumb d-flex justify-content-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <?php if(isset(get_option('header_footer',true,true)->footer_button_image)): ?>
                  <div class="tp-footer__thumb-sm">
                     <a href="<?php echo e(get_option('header_footer',true,true)->footer->right_image_link ?? ''); ?>"><img src="<?php echo e(asset(get_option('header_footer',true,true)->footer_button_image ?? '' )); ?>" alt=""></a>
                  </div>
                  <?php endif; ?>
                 
                  <?php if(isset(get_option('header_footer',true,true)->footer_left_button_image)): ?>
                  <div class="tp-footer__thumb-sm">
                     <a href="<?php echo e(get_option('header_footer',true,true)->footer->right_image_link ?? ''); ?>"><img src="<?php echo e(asset(get_option('header_footer',true,true)->footer_left_button_image ?? '' )); ?>" alt=""></a>
                  </div>
                  <?php endif; ?>
                  
               </div>
            </div>
         </div>
      </div>
      <div class="tp-footer-bottom__area mt-80 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
         <div class="container">
            <div class="tp-footer-bottom__border-top pt-40">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-md-6 col-12 order-2 order-lg-1 text-center text-md-start">
                     <div class="tp-footer-bottom__logo">
                        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset(get_option('primary_data',true)->footer_logo ?? '')); ?>" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-12 col-12 order-1 order-lg-2 d-none d-sm-block">
                     <div class="tp-footer-bottom__menu">
                        <ul>
                           <li><a href="<?php echo e(url('/features')); ?>"><?php echo e(__('Features')); ?></a></li>
                           <li><a href="<?php echo e(url('/about')); ?>"><?php echo e(__('About Us')); ?></a></li>
                           <li><a href="<?php echo e(url('/pricing')); ?>">Pricing</a></li>
                           <li><a href="<?php echo e(url('/faq')); ?>"><?php echo e(__('FAQ')); ?></a></li>
                           <li><a href="<?php echo e(url('/blogs')); ?>"><?php echo e(__('News')); ?></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-2 order-lg-3 text-center text-md-end">
                     <div class="tp-footer-bottom__social">
                        <ul>
                           <?php if(!empty(get_option('primary_data',true)->socials->facebook)): ?>
                           <li><a href="<?php echo e(get_option('primary_data',true)->socials->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                           <?php endif; ?>
                           <?php if(!empty(get_option('primary_data',true)->socials->youtube)): ?>
                           <li><a href="<?php echo e(get_option('primary_data',true)->socials->youtube); ?>"><i class="fab fa-youtube"></i></a></li>
                           <?php endif; ?>
                           <?php if(!empty(get_option('primary_data',true)->socials->instagram)): ?>
                           <li><a href="<?php echo e(get_option('primary_data',true)->socials->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                           <?php endif; ?>
                           <?php if(!empty(get_option('primary_data',true)->socials->twitter)): ?>
                           <li><a href="<?php echo e(get_option('primary_data',true)->socials->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                           <?php endif; ?>
                           <?php if(!empty(get_option('primary_data',true)->socials->linkedin)): ?>
                           <li><a href="<?php echo e(get_option('primary_data',true)->socials->linkedin); ?>"><i class="fab fa-linkedin"></i></a></li>
                           <?php endif; ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-footer-area-end -->
</footer><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/frontend/layouts/footer.blade.php ENDPATH**/ ?>