<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
   <table class="header">
      <tr>
         <td width="50%" nowrap>
            <p><img width="50%" height="50%" src="<?php echo e(asset(get_option('primary_data',true)->logo ?? '')); ?>" title="" /></p>
         </td>
         <td width="50%" align="right">
            <?php echo e(__('Payment With PayU')); ?>

         </td>
      </tr>
   </table>
</div>

<div class="clear"></div>
<br>
<form action="#" method="post" name="payuForm" id="payment_form">
 <?php echo csrf_field(); ?>
 <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
 <input type="hidden" id="salt" value="<?php echo e($Info['salt']); ?>" />
 <input type="hidden" name="key" id="key" value="<?php echo e($Info['key']); ?>" />
 <input type="hidden" name="hash" id="hash" value="<?php echo e($Info['hash']); ?>" />
 <input type="hidden" name="txnid" id="txnid" value="<?php echo e($Info['txnid']); ?>" />
 <input type="hidden" name="amount" id="amount" value="<?php echo e($Info['amount']); ?>" />
 <input type="hidden" name="firstname" id="firstname" value="<?php echo e($Info['firstname']); ?>" />
 <input type="hidden" name="email" id="email" value="<?php echo e($Info['email']); ?>" />
 <input type="hidden" name="phone" id="mobile" value="<?php echo e($Info['phone']); ?>" />
 <input type="hidden" name="productinfo" id="productinfo" value="<?php echo e($Info['productinfo']); ?>" />
 <input type="hidden" name="surl" id="surl" value="<?php echo e($Info['surl']); ?>" />
 <input type="hidden" name="furl" id="furl" value="<?php echo e($Info['furl']); ?>" />
 <div class="card-footer bg-white">
   <input type="submit" class="btn btn-primary mt-4 col-12 w-100 btn-lg" value="Pay Now"/>
</div>
</form>

          
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<!-- load payu payment js api -->
<?php if($Info['test_mode'] == true): ?>
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt- color="e34524"
bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
<?php else: ?>
<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524"
bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
<?php endif; ?>

<script type="text/javascript" src="<?php echo e(asset('assets/plugins/gateways/payu.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('gateways.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/gateways/payu.blade.php ENDPATH**/ ?>