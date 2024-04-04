<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
[
'name'=>'Back',
'url'=>route('user.apps.index'),
]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-sm-12">
        <div class="row d-flex justify-content-between flex-wrap">
            <div class="col">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h2 font-weight-bold mb-0 total-transfers" id="total-device">
                                   <?php echo e(number_format($totalUsed)); ?>

                               </span>
                           </div>
                           <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Used')); ?></h5>
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
                                <?php echo e(number_format($todaysMessage)); ?>

                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="fas fa-signal"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Todays Transactions')); ?></h5>
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
                             <?php echo e(number_format($monthlyMessages)); ?>

                         </span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                            <i class="fas fa-power-off"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                </p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Last 30 days message')); ?></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">
        <table class="table table-flush">
            <tr>
             <th class="col-3"><?php echo e(__('Device From')); ?></th>
             <th class="col-4"><?php echo e(__('Device To')); ?></th>
             <th class="col-2"><?php echo e(__('Request Type')); ?></th>
             <th class="col-1"><?php echo e(__('Requested At')); ?></th>
             <th class="col-2 text-center"><?php echo e(__('Requested Date')); ?></th>
            </tr>
            <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($log->from ?? ''); ?></td>
                <td><?php echo e($log->to); ?></td>
                <td><?php echo e($log->template_id != null ? 'Template' : 'Plain Text'); ?></td>
                <td class="text-right"><?php echo e($log->created_at->diffForHumans()); ?></td>
                <td class="text-right">
                   <?php echo e($log->created_at->format('d F Y')); ?>

                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    </div>
    <?php echo e($logs->appends($request->all())->links('vendor.pagination.bootstrap-4')); ?>

</div>
</div>  
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/apps/logs.blade.php ENDPATH**/ ?>