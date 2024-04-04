<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
    [
        'name'=>'Back',
        'url'=>route('user.apps.index'),
    ]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-sm-12">
  <div class="card">
      <div class="card-header">
          <h3 class="mb-0 font-weight-bolder"><?php echo e(__('Messages Logs')); ?></h3>
      </div>
     <div class="card-body">
        <div class="table-responsive">
            <table class="table table-flush">
                <tr>
                    <th><?php echo e(__('Phone (To)')); ?></th>
                    <th><?php echo e(__('Content')); ?></th>
                    <th><?php echo e(__('Charge')); ?></th>
                    <th><?php echo e(__('Status Code')); ?></th>
                    <th><?php echo e(__('Date')); ?></th>
                </tr>

                <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($log->phone); ?></td>
                    <td><textarea class="form-control"><?php echo e($log->body); ?></textarea></td>
                    <td><?php echo e($log->charge); ?></td>
                    <td><?php echo e($log->status_code); ?></td>
                    <td><?php echo e($log->created_at->format('d-F-Y')); ?></td>
                   
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/apps/logs.blade.php ENDPATH**/ ?>