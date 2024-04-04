<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
         data-background="<?php echo e(asset('assets/frontend/img/breadcrumb/breadcrumb.jpg')); ?>">
         <div class="breadcrumb__scroll-bottom smooth">
            <a href="#login">
               <i class="far fa-arrow-down"></i>
            </a>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center">
                     <h3 class="breadcrumb__title"><?php echo e(__('Login')); ?></h3>
                     <div class="breadcrumb__list">
                        <span><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span><?php echo e(__('Login')); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->
        <!--login-area-start -->
      <div class="tp-login-area">
         <div class="container-fluid p-0">
            <div class="row gx-0 align-items-center">
               <div class="col-xl-6 col-lg-6 col-12">
                  <div class="tp-login-thumb login-space sky-bg d-flex justify-content-center">
                     <img src="<?php echo e(asset('assets/frontend/img/contact/login.jpg')); ?>" alt="">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-12">
                  <div class="tp-login-wrapper login-space d-flex justify-content-center">
                     <div id="login" class="tplogin">
                        <div class="tplogin__title">
                           <h3 class="tp-login-title"><?php echo e(__('Login your Account')); ?></h3>
                        </div>
                        <div class="tplogin__form">
                          <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                              <div class="tp-mail">
                                 <label for="mail"><?php echo e(__('Email Address')); ?></label>
                                  <input id="email" type="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                              <div class="tp-password">
                                 <label for="Password"><?php echo e(__('Password')); ?></label>
                                 <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                              <div class="tp-forgot-password d-flex justify-content-between">
                                 <div class="checkbox">
                                    <input type="checkbox" id="Remember" name="remember" value="Remember">
                                    <label for="Remember"><?php echo e(__('Remember me')); ?></label>
                                 </div>
                                 <div class="forgot">
                                    <a href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forgot password?')); ?></a>
                                 </div>
                              </div>
                              <div class="tp-login-button">
                                 <button class="tp-btn-blue-square w-100" type="submit"><span><?php echo e(__('Sign In')); ?></span></button>
                              </div>
                              <div class="tp-signup d-flex justify-content-between">
                                 <div class="account">
                                    <a href="<?php echo e(url('/pricing')); ?>"><?php echo e(__('Dont have an account?')); ?></a>
                                 </div>
                                 <div class="signin">
                                    <a href="<?php echo e(url('/pricing')); ?>"><?php echo e(__('Sign up now')); ?></a>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- login-area-end -->
   </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/auth/login.blade.php ENDPATH**/ ?>