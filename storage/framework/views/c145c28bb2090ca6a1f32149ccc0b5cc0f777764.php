<!-- Nav items -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/dashboard*') ? 'active' : ''); ?>" href="<?php echo e(route('user.dashboard.index')); ?>">
     <i class="fi fi-rs-dashboard"></i>
      <span class="nav-link-text"><?php echo e(__('Dashboard')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/device*') ? 'active' : ''); ?>" href="<?php echo e(route('user.device.index')); ?>">
      <i class="fi-rs-sensor-on"></i>
      <span class="nav-link-text"><?php echo e(__('My Devices')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/sent-text-message*') ? 'active' : ''); ?>" href="<?php echo e(url('user/sent-text-message')); ?>">
      <i class="fi fi-rs-paper-plane"></i>
      <span class="nav-link-text"><?php echo e(__('Single Send')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/chatbot*') ? 'active' : ''); ?>" href="<?php echo e(route('user.chatbot.index')); ?>">
      <i class="fas fa-robot"></i>
      <span class="nav-link-text"><?php echo e(__('Chatbot (Auto Reply)')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/apps*') ? 'active' : ''); ?>" href="<?php echo e(route('user.apps.index')); ?>">
      <i class="fi fi-rs-apps-add"></i>
      <span class="nav-link-text"><?php echo e(__('My Apps')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/contact*') ? 'active' : ''); ?>" href="<?php echo e(route('user.contact.index')); ?>">
      <i class="fi  fi-rs-address-book"></i>
      <span class="nav-link-text"><?php echo e(__('Contacts Book')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/template*') ? 'active' : ''); ?>" href="<?php echo e(url('user/template')); ?>">
      <i class="fi  fi-rs-template-alt"></i>
      <span class="nav-link-text"><?php echo e(__('My Templates')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/bulk-message*') ? 'active' : ''); ?>" href="<?php echo e(url('user/bulk-message')); ?>">
      <i class="fi fi-rs-rocket-lunch"></i>
      <span class="nav-link-text"><?php echo e(__('Send Bulk Message')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/schedule-message*') ? 'active' : ''); ?>" href="<?php echo e(url('user/schedule-message')); ?>">
      <i class="ni ni-calendar-grid-58"></i>
      <span class="nav-link-text"><?php echo e(__('Scheduled Message')); ?></span>
    </a>
  </li>
  <li class="nav-item ">
    <a class="nav-link <?php echo e(Request::is('user/logs*') ? 'active' : ''); ?>" href="<?php echo e(url('user/logs')); ?>">
      <i class="ni ni-ui-04"></i>
      <span class="nav-link-text"><?php echo e(__('Message Log')); ?></span>
    </a>
  </li>
</ul>


<!-- Divider -->
<hr class="my-3 mt-6">
<!-- Heading -->
<h6 class="navbar-heading p-0 text-muted"><?php echo e(__('Settings')); ?></h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/subscription*') ? 'active' : ''); ?>" href="<?php echo e(url('/user/subscription')); ?>">
      <i class="ni ni-spaceship"></i>
      <span class="nav-link-text"><?php echo e(__('Subscription')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/support*') ? 'active' : ''); ?>" href="<?php echo e(url('/user/support')); ?>" >
      <i class="fas fa-headset"></i>
      <span class="nav-link-text"><?php echo e(__('Help & Support')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/user/profile')); ?>">
      <i class="ni ni-settings-gear-65"></i>
      <span class="nav-link-text"><?php echo e(__('Profile Settings')); ?></span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('user/auth-key*') ? 'active' : ''); ?>" href="<?php echo e(url('/user/auth-key')); ?>">
      <i class="ni ni-key-25"></i>
      <span class="nav-link-text"><?php echo e(__('Auth Key')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link logout-button" href="#" >
      <i class="ni ni-button-power"></i>
      <span class="nav-link-text"><?php echo e(__('Logout')); ?></span>
    </a>
  </li>
</ul>
<?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/layouts/main/user.blade.php ENDPATH**/ ?>