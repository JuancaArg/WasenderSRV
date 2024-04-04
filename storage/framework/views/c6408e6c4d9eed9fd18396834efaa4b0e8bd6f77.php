<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
   <table class="header">
      <tr>
         <td width="50%" nowrap>
            <p><img width="50%" height="50%" id="logo" src="<?php echo e(asset(get_option('primary_data',true)->logo ?? '')); ?>" /></p>
         </td>
         <td width="50%" align="right">
            <?php echo e(__('Payment With Razorpay')); ?>

         </td>
      </tr>
   </table>
</div>

<div class="clear"></div>
<br>
<button class="btn btn-primary mt-4 col-12 w-100 btn-lg" id="rzp-button1"><?php echo e(__('Pay Now')); ?></button>

   <form action="<?php echo e(url('/razorpay/status')); ?>" method="POST" hidden>
        <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token" />
        <input type="text" class="form-control" id="rzp_paymentid" name="rzp_paymentid">
        <input type="text" class="form-control" id="rzp_orderid" name="rzp_orderid">
        <input type="text" class="form-control" id="rzp_signature" name="rzp_signature">
        <button type="submit" id="rzp-paymentresponse" hidden class="btn btn-primary"></button>
    </form>
    <input type="hidden" value="<?php echo e($response['razorpayId']); ?>" id="razorpayId">
    <input type="hidden" value="<?php echo e($response['amount']); ?>" id="amount">
    <input type="hidden" value="<?php echo e($response['currency']); ?>" id="currency">
    <input type="hidden" value="<?php echo e($response['name']); ?>" id="name">
    <input type="hidden" value="<?php echo e($response['description']); ?>" id="description">
    <input type="hidden" value="<?php echo e($response['orderId']); ?>" id="orderId">
    <input type="hidden" value="<?php echo e($response['name']); ?>" id="name">
    <input type="hidden" value="<?php echo e($response['email']); ?>" id="email">
    <input type="hidden" value="<?php echo e($response['contactNumber']); ?>" id="contactNumber">
    <input type="hidden" value="<?php echo e($response['address']); ?>" id="address">      
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<!-- load razorpay payment js api -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script  src="<?php echo e(asset('assets/plugins/gateways/razorpay.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('gateways.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/gateways/razorpay.blade.php ENDPATH**/ ?>