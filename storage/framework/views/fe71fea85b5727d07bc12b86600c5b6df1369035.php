<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title' => __('Apps'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create App'),
      'url'=>'#',
      'components'=>'data-toggle="modal" data-target="#addRecord" id="add_record"',
      'is_button'=>true
   ]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row d-flex justify-content-between flex-wrap">
   <div class="col">
      <div class="card card-stats">
         <div class="card-body">
            <div class="row">
               <div class="col">
                  <span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e($limit); ?></span>
               </div>
               <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                     <i class="fi fi-rs-apps-add mt-2"></i>
                  </div>
               </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
            </p>
            <h5 class="card-title  text-muted mb-0"><?php echo e(__('Total App')); ?></h5>
            <p></p>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card card-stats">
         <div class="card-body">
            <div class="row">
               <div class="col">
                  <span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($total)); ?></span>
               </div>
               <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                     <i class="fas fa-paper-plane"></i>
                  </div>
               </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
            </p>
            <h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Messages Sent')); ?></h5>
            <p></p>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card card-stats">
         <div class="card-body">
            <div class="row">
               <div class="col">
                  <span class="h2 font-weight-bold mb-0 pending-transfers"><?php echo e(number_format($last30_messages ?? 0)); ?></span>
               </div>
               <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                     <i class="ni ni-calendar-grid-58"></i>
                  </div>
               </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
            </p>
            <h5 class="card-title  text-muted mb-0"><?php echo e(__('Last 30 days Messages')); ?></h5>
            <p></p>
         </div>
      </div>
   </div>
</div>
<div class="row">
<?php if(count($apps ?? []) == 0): ?>
<div class="col-sm-12">
   <div class="card">
      <div class="card-body">
         <center>
            <img src="<?php echo e(asset('assets/img/404.jpg')); ?>" height="500">
            <h1 class="text-center"><?php echo e(__('!Opps You Have Not Created Any APP')); ?></h1>
         </center>
      </div>
   </div>
</div>
<?php endif; ?>
<?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-xl-4 col-md-6">
   <div class="card  border-0">
      <!-- Card body -->
      <div class="card-body">
         <div class="row">
            <div class="col">
               <h5 class="card-title text-uppercase text-muted mb-0 text-dark"><?php echo e($app->title); ?></h5>
               <div class="mt-3 mb-0">
                  <span class="pt-2 text-dark"><?php echo e(__('Messages Count:')); ?> (<?php echo e(number_format($app->live_messages_count)); ?>)
                  <br>
                  <span class="pt-2 text-dark"><?php echo e(__('Device:')); ?> <?php echo e($app->device->phone ?? ''); ?>

               </div>
            </div>
            <div class="col-auto">
               <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-ellipsis-h"></i>
               </button>
               <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="<?php echo e(route('user.app.logs',$app->uuid)); ?>"><?php echo e(__('Messages Log')); ?></a>
                  <a class="dropdown-item" href="<?php echo e(route('user.app.integration',$app->uuid)); ?>"><?php echo e(__('REST API')); ?></a>
                  <a class="dropdown-item delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('user.apps.destroy',$app->uuid)); ?>"><?php echo e(__('Remove APP')); ?></a>
               </div>
            </div>
         </div>
         <p class="mt-3 mb-0 text-sm">
            <a href="<?php echo e(route('user.app.integration',$app->uuid)); ?>" class="text-nowrap  font-weight-600"><?php echo e(__('Integration')); ?> <i class="fa fa-arrow-right"></i></a>
         </p>
      </div>
   </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-12">
   <div class="d-flex justify-content-center"><?php echo e($apps->links('vendor.pagination.bootstrap-4')); ?></div>
</div>
<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(route('user.apps.store')); ?>" class="ajaxform_instant_reload">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Create New App')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Select Number')); ?></label>
                  <select class="form-control"  name="device" required="">
                     <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($device->id); ?>">
                        <?php echo e($device->name); ?> 
                        <?php if(!empty($device->phone)): ?> 
                        (<?php echo e($device->phone); ?>) 
                        <?php endif; ?>
                     </option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <small><?php echo e(__('User Will Receive Message From The Selected Number')); ?></small>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('App Name')); ?></label>
                  <input type="text" name="name" class="form-control" required>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Website Link')); ?></label>
                  <input type="url" name="website" class="form-control" required="">
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-outline-primary col-12" ><?php echo e(__('Create Now')); ?></button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/apps/index.blade.php ENDPATH**/ ?>