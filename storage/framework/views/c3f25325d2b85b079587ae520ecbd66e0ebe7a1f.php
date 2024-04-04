<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
   <table class="header">
      <tr>
         <td width="50%" nowrap>
            <p><img width="50%" height="50%" src="<?php echo e(asset(get_option('primary_data',true)->logo ?? '')); ?>" title="VPSDime" /></p>
         </td>
         <td width="50%" align="right">
            <?php echo e(__('Payment With Paystack')); ?>

         </td>
      </tr>
   </table>
</div>
<?php if(Session::has('error')): ?>
<div class="col-sm-12">
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <span class="alert-icon"><i class="fas fa-sad-tear"></i></span>
      <span class="alert-text"><strong><?php echo e(__('!Opps ')); ?></strong> <?php echo e(__('Transaction failed if you make payment successfully please contact us.')); ?></span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
   </div>
</div>
<?php endif; ?>

<div class="clear"></div>
<br>
<button class="btn btn-primary mt-4 col-12 w-100 btn-lg" id="payment_btn"><?php echo e(__('Pay Now')); ?></button>

<form method="post" class="status" action="<?php echo e(route('paystack.status')); ?>">
 <?php echo csrf_field(); ?>
 <input type="hidden" name="ref_id" id="ref_id">
 <input type="hidden" value="<?php echo e($Info['currency']); ?>" id="currency">
 <input type="hidden" value="<?php echo e($Info['amount']); ?>" id="amount">
 <input type="hidden" value="<?php echo e($Info['public_key']); ?>" id="public_key">
 <input type="hidden" value="<?php echo e($Info['email'] ?? Auth::user()->email); ?>" id="email">
</form>

<input type="hidden" id="pay-id" value="<?php echo e('ps_'.Str::random(15)); ?>">          
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<!-- load paystack payment js api -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<script  src="<?php echo e(asset('assets/plugins/gateways/paystack.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('gateways.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/gateways/paystack.blade.php ENDPATH**/ ?>