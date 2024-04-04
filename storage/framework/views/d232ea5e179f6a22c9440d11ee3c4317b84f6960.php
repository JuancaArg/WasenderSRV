<!-- Nav items -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/dashboard*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard.index')); ?>">
     <i class="fi fi-rs-dashboard"></i>
      <span class="nav-link-text"><?php echo e(__('Dashboard')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/order*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.order.index')); ?>">
     <i class="fi  fi-rs-boxes"></i>
      <span class="nav-link-text"><?php echo e(__('Orders')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/plan*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.plan.index')); ?>">
     <i class="fi  fi-rs-light-switch"></i>
      <span class="nav-link-text"><?php echo e(__('Subscriptions')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/customer*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.customer.index')); ?>">
     <i class="fi fi-rs-users-alt"></i>
      <span class="nav-link-text"><?php echo e(__('Customers')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/gateways*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.gateways.index')); ?>">
     <i class="fi fi-rs-bank"></i>
      <span class="nav-link-text"><?php echo e(__('Payment Gateways')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/cron-job*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.cron-job.index')); ?>">
     <i class="fi fi-rs-calendar-clock"></i>
      <span class="nav-link-text"><?php echo e(__('Cron Jobs')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/support*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.support.index')); ?>">
     <i class="fi  fi-rs-headset"></i>
      <span class="nav-link-text"><?php echo e(__('Help & Supports')); ?></span>
    </a>
  </li>
</ul>

<!-- Heading -->
<h6 class="navbar-heading p-0 text-muted mt-4"><?php echo e(__('User Logs')); ?></h6>
<!-- Navigation -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/devices*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.devices.index')); ?>">
      <i class="fi fi-rs-devices"></i>
      <span class="nav-link-text"><?php echo e(__('Devices')); ?></span>
    </a>
  </li>
  <li class="nav-item">
     <a class="nav-link <?php echo e(Request::is('admin/apps*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.apps.index')); ?>">
      <i class="fi fi-rs-apps"></i>
      <span class="nav-link-text"><?php echo e(__('Apps')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/contacts*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.contacts.index')); ?>">
      <i class="fi  fi-rs-address-book"></i>
      <span class="nav-link-text"><?php echo e(__('Contacts')); ?></span>
    </a>
  </li>
  <li class="nav-item">
   <a class="nav-link <?php echo e(Request::is('admin/template*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.template.index')); ?>">
      <i class="fi  fi-rs-template-alt"></i>
      <span class="nav-link-text"><?php echo e(__('Templates')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/schedules*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.schedules.index')); ?>">
      <i class="ni ni-calendar-grid-58"></i>
      <span class="nav-link-text"><?php echo e(__('Schedules')); ?></span>
    </a>
  </li>

  <li class="nav-item">
     <a class="nav-link <?php echo e(Request::is('admin/message-transactions*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.message-transactions.index')); ?>">
      <i class="fi  fi-rs-comments"></i>
      <span class="nav-link-text"><?php echo e(__('Messages')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/notification*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.notification.index')); ?>">
     <i class="fi fi-rs-envelope-bulk"></i>
      <span class="nav-link-text"><?php echo e(__('Notifications')); ?></span>
    </a>
  </li>  
</ul>
<!-- Heading -->
<h6 class="navbar-heading p-0 text-muted mt-4"><?php echo e(__('Appearance')); ?></h6>
<!-- Navigation -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/blog*') || Request::is('admin/category*') || Request::is('admin/tag*') ? 'active' : ''); ?>" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
      <i class="fi  fi-rs-blog-text"></i>
      <span class="nav-link-text"><?php echo e(__('Blogs')); ?></span>
    </a>
    <div class="collapse" id="navbar-forms">
      <ul class="nav nav-sm flex-column">
        <li class="nav-item">
          <a href="<?php echo e(route('admin.blog.index')); ?>" class="nav-link"><?php echo e(__('Blogs')); ?></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.category.index')); ?>" class="nav-link"><?php echo e(__('Category')); ?></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.tag.index')); ?>" class="nav-link"><?php echo e(__('Tags')); ?></a>
        </li>

      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/faq*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.faq.index')); ?>">
      <i class="fi  fi-rs-comments-question-check"></i>
      <span class="nav-link-text"><?php echo e(__('Faq')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/features*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.features.index')); ?>">
      <i class="fi fi-rs-dice-alt"></i>
      <span class="nav-link-text"><?php echo e(__('Features')); ?></span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/testimonials*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.testimonials.index')); ?>">
      <i class="fi  fi-rs-comment-quote"></i>
      <span class="nav-link-text"><?php echo e(__('Testimonials')); ?></span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/team*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.team.index')); ?>">
      <i class="fi fi-rs-users-alt"></i>
      <span class="nav-link-text"><?php echo e(__('Team')); ?></span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/about*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.about.index')); ?>">
      <i class="fi fi-rs-comment-question"></i>
      <span class="nav-link-text"><?php echo e(__('About Us')); ?></span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/partner*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.partner.index')); ?>">
      <i class="fi  fi-rs-animated-icon"></i>
      <span class="nav-link-text"><?php echo e(__('Partners')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/language*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.language.index')); ?>">
      <i class="fi fi-rs-globe"></i>
      <span class="nav-link-text"><?php echo e(__('Language')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/menu*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.menu.index')); ?>">
      <i class="fi fi-rs-chart-tree"></i>
      <span class="nav-link-text"><?php echo e(__('Menu')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/page*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.page.index')); ?>">
      <i class="fi fi-rs-desktop-wallpaper"></i>
      <span class="nav-link-text"><?php echo e(__('Custom Pages')); ?></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/seo*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.seo.index')); ?>">
      <i class="fi fi-rs-chart-line-up"></i>
      <span class="nav-link-text"><?php echo e(__('Seo Settings')); ?></span>
    </a>
  </li>
</ul>


<h6 class="navbar-heading p-0 text-muted mt-4"><?php echo e(__('Site Settings')); ?></h6>
<ul class="navbar-nav mb-md-3">

   <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('admin.page-settings.index')); ?>">
      <i class="fi fi-rs-magic-wand"></i>
      <span class="nav-link-text"><?php echo e(__('Page Settings')); ?></span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/admin*') || Request::is('admin/role*') ? 'active' : ''); ?>" href="#admin-roles" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
      <i class="fi  fi-rs-shield-check"></i>
      <span class="nav-link-text"><?php echo e(__('Admin and Role')); ?></span>
    </a>
    <div class="collapse" id="admin-roles">
      <ul class="nav nav-sm flex-column">
        <li class="nav-item">
          <a href="<?php echo e(route('admin.admin.index')); ?>" class="nav-link"><?php echo e(__('Admin')); ?></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.role.index')); ?>" class="nav-link"><?php echo e(__('Roles')); ?></a>
        </li>
      </ul>
    </div>
  </li>
 
  
   <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/developer-settings*') ? 'active' : ''); ?>" href="#dev-settings" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
      <i class="fi  fi-rs-settings"></i>
      <span class="nav-link-text"><?php echo e(__('Developer Settings')); ?></span>
    </a>
    <div class="collapse" id="dev-settings">
      <ul class="nav nav-sm flex-column">
        
        <li class="nav-item">
          <a href="<?php echo e(route('admin.developer-settings.show','app-settings')); ?>" class="nav-link"><?php echo e(__('App Settings')); ?></a>
        </li>
        
        <li class="nav-item">
          <a href="<?php echo e(route('admin.developer-settings.show','mail-settings')); ?>" class="nav-link"><?php echo e(__('SMTP Settings')); ?></a>
        </li>

        <li class="nav-item">
          <a href="<?php echo e(route('admin.developer-settings.show','wa-settings')); ?>" class="nav-link"><?php echo e(__('Whatsapp Server')); ?></a>
        </li>
        
        <li class="nav-item">
          <a href="<?php echo e(route('admin.developer-settings.show','storage-settings')); ?>" class="nav-link"><?php echo e(__('Storage Settings')); ?></a>
        </li>
       
      </ul>
    </div>
  </li>  
</ul>

<h6 class="navbar-heading p-0 text-muted mt-2"><?php echo e(__('My Settings')); ?></h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
  <li class="nav-item">
    <a class="nav-link <?php echo e(Request::is('admin/profile') ? 'active' : ''); ?>" href="<?php echo e(url('/admin/profile')); ?>">
      <i class="fi fi fi-rs-comment-user"></i>
      <span class="nav-link-text"><?php echo e(__('Profile Settings')); ?></span>
    </a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link logout-button" href="#" >
      <i class="ni ni-button-power"></i>
      <span class="nav-link-text"><?php echo e(__('Logout')); ?></span>
    </a>
  </li>
</ul>
<?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/layouts/main/admin.blade.php ENDPATH**/ ?>