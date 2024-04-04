<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> __('Dashboard'),'buttons'=>[
  [
    'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create Device'),
    'url'=> route('user.device.create'),
  ],
  [
    'name'=>'<i class="fi fi-rs-paper-plane"></i>&nbsp'.__('Sent a message'),
    'url'=> url('/user/sent-text-message'),
  ],
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Devices')); ?></h5>
            <span class="h2 font-weight-bold mb-0" id="total-device"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
             <i class="fas fa-server"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Messages')); ?></h5>
            <span class="h2 font-weight-bold mb-0 mt-1" id="total-messages"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
              <i class="ni ni-spaceship"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Pending Schedules')); ?></h5>
            <span class="h2 font-weight-bold mb-0" id="total-schedule"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
              <i class="ni ni-calendar-grid-58"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="col-xl-3 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Contacts')); ?></h5>
            <span class="h2 font-weight-bold mb-0" id="total-contacts"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
              <i class="ni ni-collection"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
 <?php if(Session::has('success')): ?>
 <div class="col-sm-12">
   <div class="alert bg-gradient-success text-white alert-dismissible fade show success-alert" role="alert">
     <span class="alert-icon"><img src="<?php echo e(asset('uploads/firework.png')); ?>" alt=""></span>
     <span class="alert-text"><strong><?php echo e(__('Congratulations ')); ?></strong> <?php echo e(Session::get('success')); ?></span>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
</div>
<?php endif; ?>
 <?php if(Session::has('saas_error')): ?>
 <div class="col-sm-12">
   <div class="alert bg-gradient-primary text-white alert-dismissible fade show" role="alert">
     <a href="<?php echo e(url(Auth::user()->plan_id == null ? '/user/subscription' : '/user/subscription/'.Auth::user()->plan_id)); ?>">
      <span class="alert-icon"><i class="fi  fi-rs-info text-white"></i></span>
    </a>
    <span class="alert-text">
      <strong><?php echo e(__('!Opps ')); ?></strong> 
      <a class="text-white" href="<?php echo e(url(Auth::user()->plan_id == null ? '/user/subscription' : '/user/subscription/'.Auth::user()->plan_id)); ?>">
        <?php echo e(Session::get('saas_error')); ?>

      </a>
    </span>
  </div>
</div>
<?php endif; ?>
  <div class="col-sm-6">
    <div class="card">
       <div class="card-header bg-transparent">
        <h4 class="card-header-title"><?php echo e(__('Messages Transaction')); ?></h4>
        <div class="card-header-action">
          <select class="form-control" id="period" >
            <option value="7"><?php echo e(__('Last 7 Days')); ?></option>
            <option value="1"><?php echo e(__('Today')); ?></option>
            <option value="30"><?php echo e(__('Last 30 Days')); ?></option>
          </select>
        </div>
      </div>
      <div class="card-body">
        <!-- Chart -->
        <div class="chart">
          <!-- Chart wrapper -->
          <canvas id="chart-sales" class="chart-canvas"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <!--* Card header *-->
    <!--* Card body *-->
    <!--* Card init *-->
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <!-- Surtitle -->
        <h4 class="h3 mb-0 card-header-title"><?php echo e(__('Automatic Replies')); ?></h4>
        <div class="card-header-action">
          <select class="form-control" id="automaticReply" >
            <option value="7"><?php echo e(__('Last 7 Days')); ?></option>
            <option value="1"><?php echo e(__('Today')); ?></option>
            <option value="30"><?php echo e(__('Last 30 Days')); ?></option>
          </select>
        </div>
      </div>
      <!-- Card body -->
      <div class="card-body">
        <div class="chart">
          <!-- Chart wrapper -->
          <canvas id="chart-bars" class="chart-canvas"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <!--* Card header *-->
    <!--* Card body *-->
    <!--* Card init *-->
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h4 class="h3 mb-0 card-header-title"><?php echo e(__('Messages')); ?></h4>
        <div class="card-header-action">
          <select class="form-control" id="messagesTypes" >
            <option value="7"><?php echo e(__('Last 7 Days')); ?></option>
            <option value="1"><?php echo e(__('Today')); ?></option>
            <option value="30"><?php echo e(__('Last 30 Days')); ?></option>
          </select>
        </div>
      </div>
      <!-- Card body -->
      <div class="card-body">
        <div class="chart">
          <!-- Chart wrapper -->
          <canvas id="chart-doughnut" class="chart-canvas"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <!-- Card header -->
      <div class="card-header bg-transparent">
        <!-- Title -->
        <h4 class="card-header-title"><?php echo e(__('Devices Statistics')); ?></h4>
      </div>
      <!-- Card body -->
      <div class="card-body">
        <!-- List group -->
        <ul class="list-group list-group-flush list my--3" id="device-list">
          
        </ul>
      </div>
    </div>
  </div>
 </div>
<input type="hidden" id="static-data" value="<?php echo e(route('user.dashboard.static')); ?>"> 
<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>"> 

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/vendor/chart.js/dist/chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/canvas-confetti/confetti.browser.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('bottomjs'); ?>
<script src="<?php echo e(asset('assets/js/pages/user/dashboard.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/dashboard.blade.php ENDPATH**/ ?>