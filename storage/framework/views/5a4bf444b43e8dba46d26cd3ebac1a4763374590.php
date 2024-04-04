<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
   <table class="header">
      <tr>
         <td width="50%" nowrap>
            <p><img width="50%" height="50%" src="<?php echo e(asset(get_option('primary_data',true)->logo ?? '')); ?>" title="" /></p>
         </td>
         <td width="50%" align="right">
            <?php echo e(__('Payment With Stripe')); ?>

         </td>
      </tr>
   </table>
</div>

<div class="clear"></div>
<br>
<form action="<?php echo e(url('stripe/payment')); ?>" method="post" id="payment-form" class="paymentform p-4">
   <?php echo csrf_field(); ?>
   <div class="form-row">
      <label for="card-element">
      <?php echo e(__('Credit or debit card')); ?>

      </label>
      <div id="card-element" class="w-100">
         <!-- A Stripe Element will be inserted here. -->
      </div>
      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
      <button type="submit" class="btn btn-primary btn-lg w-100 mt-4" id="submit_btn"><?php echo e(__('Submit Payment')); ?></button>
   </div>
</form>
<input type="hidden" id="publishable_key" value="<?php echo e($Info['publishable_key']); ?>">             
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<!-- load stripe payment js api -->
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/plugins/gateways/stripe.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('gateways.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/gateways/stripe.blade.php ENDPATH**/ ?>