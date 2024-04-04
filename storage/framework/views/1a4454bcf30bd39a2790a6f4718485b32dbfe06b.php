<?php $__env->startPush('topcss'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'<i class="ni ni-send"></i>&nbsp'. __('Send Bulk Message'),
		'url'=>route('user.bulk-message.create'),
		'is_button'=>false
	],
	[
		'name'=>'<i class="ni ni-send"></i>&nbsp'. __('Send Bulk Message With Template'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#send-template-bulk" id=""',
		'is_button'=>true
	]
],'title' => 'Transaction History'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="modal fade" id="send-template-bulk" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
   <div class="modal-dialog">
      <?php if(count($templates) > 0 && count($groups) > 0): ?>
      <div class="modal-content">
         <form type="POST" action="<?php echo e(route('user.contact.send-template-bulk')); ?>" class="ajaxform_instant_reload">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="page_url" value="<?php echo e(url()->full()); ?>">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Send Bulk Message With Template')); ?></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Select Template')); ?></label>
                  <select  class="form-control" name="template">
                     <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($template->id); ?>"><?php echo e($template->title); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Device')); ?></label>
                  <select  class="form-control" name="device">
                     <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($device->id); ?>"><?php echo e($device->name); ?> - <?php echo e($device->phone); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
               <div class="form-group receivers">
                  <label><?php echo e(__('Select Group')); ?></label>
                  <select  class="form-control select2" name="group" >
                     <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
              
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-neutral submit-btn float-right"><?php echo e(__('Sent Now')); ?></button>
            </div>
         </form>
      </div>
      <?php else: ?>
      <div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Create some template and contacts')); ?></span></div>
      <?php endif; ?>
   </div>
</div>
<div class="row justify-content-center">
   <div class="col-12">
      <div class="row d-flex justify-content-between flex-wrap">
         <div class="col">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 total-transfers"><?php echo e(number_format($total)); ?></span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                           <i class="fi fi-rs-rocket-lunch mt-2"></i>
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
         <div class="col">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 completed-transfers"><?php echo e(number_format($today_transaction)); ?></span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                           <i class="fi fi-rs-calendar-day mt-2"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                  <h5 class="card-title  text-muted mb-0"><?php echo e(__('Today\'s Transaction')); ?></h5>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <div class="row">
               <?php if(count($posts) > 0): ?>
               <div class="col-sm-12">
                  <h4><?php echo e(__('Transaction History')); ?></h4>
               </div>
               <div class="col-sm-12 table-responsive">
                  <table class="table col-12">
                     <thead>
                        <tr>
                        	<th><?php echo e(__('Message From')); ?></th>
                        	<th><?php echo e(__('Message To')); ?></th>
                        	<th><?php echo e(__('Message Type')); ?></th>
                        	<th><?php echo e(__('Template name')); ?></th>
                        	<th class="text-right"><?php echo e(__('Requested At')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        	<td>
                        		<?php echo e($log->from); ?>

                        	</td>
                        	<td>
                        		<?php echo e($log->to); ?>

                        	</td>
                        	<td><?php echo e($log->template != null ? 'Template' : 'Plain Text'); ?></td>

                        	<td>
                        		<?php echo e($log->template->title ?? ''); ?>

                        	</td>
                        	<td class="text-right">
                        		<?php echo e($log->created_at->format('d F Y')); ?>

                        	</td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
                  <div class="d-flex justify-content-center"><?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?></div>
               </div>
               <?php else: ?>
               <div class="btn btn-neutral  col-12 text-center"><?php echo e(__('No Transaction Found')); ?></div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('topjs'); ?>
<script src="<?php echo e(asset('assets/vendor/select2/dist/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/user/wa-bulk-index.js?v=1')); ?>" ></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/whatsapp/bulk/index.blade.php ENDPATH**/ ?>