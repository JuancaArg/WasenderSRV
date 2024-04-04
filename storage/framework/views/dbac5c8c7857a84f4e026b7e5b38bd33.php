<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=>__('Device'),
'buttons'=>[
[
'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create Device'),
'url'=> route('user.device.create'),
]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
   <div class="col-12">
      <div class="row d-flex justify-content-between flex-wrap">
         <div class="col">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 total-transfers" id="total-device">
                        <img src="<?php echo e(asset('uploads/loader.gif')); ?>">
                        </span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                           <i class="fi fi-rs-devices mt-2"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                  <h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Devices')); ?></h5>
                  <p></p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 total-transfers" id="total-active">
                        <img src="<?php echo e(asset('uploads/loader.gif')); ?>">
                        </span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                           <i class="fi fi-rs-badge-check mt-2"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                  <h5 class="card-title  text-muted mb-0"><?php echo e(__('Active Devices')); ?></h5>
                  <p></p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 completed-transfers" id="total-inactive">
                        <img src="<?php echo e(asset('uploads/loader.gif')); ?>">
                        </span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                           <i class="fi  fi-rs-exclamation mt-2"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                  <h5 class="card-title  text-muted mb-0"><?php echo e(__('Inactive Devices')); ?></h5>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
      <?php if(count($devices ?? []) > 0): ?>
      <div class="row">
      <?php $__currentLoopData = $devices ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-xl-4 col-md-6">
         <div class="card  border-0">
            <!-- Card body -->
            <div class="card-body">
               <div class="row">
                  <div class="col">
                     <h5 class="card-title text-uppercase text-muted mb-0 text-dark"><?php echo e($device->name); ?></h5>
                     <div class="mt-3 mb-0">
                        <span class="pt-2 text-dark"><?php echo e(__('Phone :')); ?> 
                        <?php if(!empty($device->phone)): ?>
                        <a href="<?php echo e(route('user.device.scan',$device->uuid)); ?>">
                        <?php echo e($device->phone); ?>

                        </a>
                        <?php endif; ?>
                        </span>	  
                        <br>
                        <br>
                        <span class="pt-2 text-dark"><?php echo e(__('Total Messages:')); ?> <?php echo e(number_format($device->smstransaction_count)); ?>

                     </div>
                  </div>
                  <div class="col-auto">
                     <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-ellipsis-h"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item has-icon" href="<?php echo e(route('user.device.scan',$device->uuid)); ?>"><i class="fas fa-qrcode"></i><?php echo e(__('Scan')); ?></a>
                        <?php if($device->status == 1): ?>
                        <a class="dropdown-item has-icon" href="<?php echo e(url('/user/device/chats/'.$device->uuid)); ?>"><i class="fi fi-rs-comments-question-check"></i><?php echo e(__('Chats')); ?></a>
                        <a class="dropdown-item has-icon" href="<?php echo e(url('/user/device/groups/'.$device->uuid)); ?>"><i class="fi fi-rs-folder-tree"></i><?php echo e(__('Groups')); ?></a>
                        <?php endif; ?>
                        <a class="dropdown-item has-icon" href="<?php echo e(route('user.device.edit',$device->uuid)); ?>"><i class="fi  fi-rs-edit"></i><?php echo e(__('Edit Device Name')); ?></a>
                        <a class="dropdown-item has-icon" href="<?php echo e(route('user.device.show',$device->uuid)); ?>"><i class="ni ni-align-left-2"></i><?php echo e(__('View Log')); ?></a>
                        <a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('user.device.destroy',$device->uuid)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove Device')); ?></a>
                     </div>
                  </div>
               </div>
               <p class="mt-3 mb-0 text-sm">
                  <a class="text-nowrap  font-weight-600" href="<?php echo e(route('user.device.scan',$device->uuid)); ?>">
                  <span class="text-dark"><?php echo e(__('Status :')); ?></span>
                  <span class="badge badge-sm <?php echo e(badge($device->status)['class']); ?>">
                  <?php echo e($device->status == 1 ? __('Active') : __('Inactive')); ?>

                  </span>
                  </a>
               </p>
            </div>
         </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php else: ?>
      <div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Opps There Is No Device Found....')); ?></span></div>
      <?php endif; ?>
   </div>
</div>

<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/js/pages/user/device.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/device/index.blade.php ENDPATH**/ ?>