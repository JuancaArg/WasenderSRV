<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('Subscription Plan'),
'buttons' => [
	 [
      'name'=> __('Back'),
      'url'=> url('/user/subscription'),
   ]
]

], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
     <div class="col-12">
        <?php if(count($orders ?? []) == 0): ?>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <img src="<?php echo e(asset('assets/img/404.jpg')); ?>" height="500">
                        <h3 class="text-center"><?php echo e(__('!Opps You Have Not Created Any Order Now')); ?></h3>
                    </center>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="card">
            
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Order No')); ?></th>
                                    <th><?php echo e(__('Plan Name')); ?></th>
                                    <th><?php echo e(__('Payment Method')); ?></th>
                                    <th><?php echo e(__('Amount')); ?></th>
                                    <th><?php echo e(__('Staus')); ?></th>
                                    <th class="text-right"><?php echo e(__('Order Date')); ?></th>
                                    <th class="text-right"><?php echo e(__('Will Expire')); ?></th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <?php $__currentLoopData = $orders ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($log->invoice_no); ?>

                                        </td>
                                        <td>
                                            <?php echo e($log->plan->title ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php echo e($log->gateway->name ?? ''); ?>

                                        </td>

                                        <td>
                                            <?php echo e(amount_format($log->amount)); ?>

                                        </td>
                                        <td>
                                            <span class="badge <?php echo e(badge($log->status)['class']); ?>">
                                                <?php echo e(badge($log->status)['text']); ?>

                                            </span>
                                        </td>
                                        <td class="text-right">
                                            <?php echo e($log->created_at->format('d F Y')); ?>

                                        </td>
                                        <td class="text-right">
                                            <?php echo e(\Carbon\Carbon::parse($log->will_expire)->format('d F Y')); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center"><?php echo e($orders->links('vendor.pagination.bootstrap-4')); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/subscription/log.blade.php ENDPATH**/ ?>