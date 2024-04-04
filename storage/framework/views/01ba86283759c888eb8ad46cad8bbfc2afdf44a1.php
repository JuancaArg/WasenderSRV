<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
   <table class="header">
      <tr>
         <td width="50%" nowrap>
            <p><img width="50%" height="50%" src="<?php echo e(asset(get_option('primary_data',true)->logo ?? '')); ?>" title="" /></p>
         </td>
         <td width="50%" align="right">
            <font class="unpaid" style="font-size:30px">Unpaid</font><br />
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
<?php if(Session::has('min-max')): ?>
<div class="col-sm-12">
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span class="alert-icon"><i class="fas fa-sad-tear"></i></span>
    <span class="alert-text"><strong><?php echo e(__('!Opps ')); ?></strong> <?php echo e(Session::get('min-max')); ?></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
   </button>
</div>
</div>
<?php endif; ?>
<?php if(Session::has('errors')): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-12">
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span class="alert-icon"><i class="fas fa-sad-tear"></i></span>
    <span class="alert-text"><?php echo e($error); ?></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
   </button>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="row">
   <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="radiocontainer gateways col-sm-4">
      <input id="gateway_<?php echo e($gateway->id); ?>" class="gateway-button" type="radio" name="paymentmethod" value="<?php echo e($gateway->id); ?>" <?php echo e($key == 0 ? 'checked' : ''); ?> data-target="#gateway-form<?php echo e($gateway->id); ?>" />
      <label for="gateway_<?php echo e($gateway->id); ?>"><img src="<?php echo e(asset($gateway->logo)); ?>" style="height: 100%;" /></label>
   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>
<div class="clear"></div>
<?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-12 <?php echo e($key != 0 ? 'none' : ''); ?> gateway-form" id="gateway-form<?php echo e($gateway->id); ?>">
   <form method="post" action="<?php echo e(url('user/make-subscribe/'.$gateway->id.'/'.$plan->id)); ?>" class="ajaxform_next_page" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="table-responsive">
         <table class="items table">
            <tr>
               <td>
                  <?php echo e(__('Method Name: ')); ?>

               </td>
               <td class="textcenter">
                  <?php echo e($gateway->name); ?>

               </td>
            </tr>
            <?php if($gateway->currency != null): ?>
            <tr>
               <td>
                  <?php echo e(__('Gateway Currency: ')); ?>

               </td>
               <td class="textcenter">
                  <?php echo e(strtoupper($gateway->currency)); ?>

               </td>
            </tr>
            <?php endif; ?>
            <?php if($gateway->charge != 0): ?>
            <tr>
               <td>
                  <?php echo e(__('Gateway Charge: ')); ?>

               </td>
               <td class="textcenter">
                  <?php echo e($gateway->charge); ?>

               </td>
            </tr>
            <?php endif; ?>
            <tr>
               <td>
                  <?php echo e(__('Payble Amount: ')); ?>

               </td>
               <td class="textcenter">
                  <?php echo e($total*$gateway->multiply+$gateway->charge); ?>

               </td>
            </tr>
         </table>
         <?php if($gateway->comment != null): ?>
         <table class="table mt-2 items">
            <tr>
               <td>
                  <?php echo e(__('Payment Instruction: ')); ?>                                           
               </td>
            </tr>
            <tr>
               <td><?php echo e($gateway->comment); ?></td>
            </tr>
         </table>
         <?php endif; ?>
         <?php if($gateway->phone_required == 1): ?>
         <div class="form-group mt-2">
            <label><b><?php echo e(__('Your phone number')); ?></b></label>
            <input type="number" name="phone" class="form-control" required="" value="<?php echo e(Auth::user()->phone); ?>">
         </div>
         <?php endif; ?>
         <?php if($gateway->is_auto == 0): ?>
         <div class="form-group mt-2">
            <label><b><?php echo e(__('Submit your payment proof')); ?></b></label>
            <input type="file" name="image" class="form-control" required="" accept="image/*">
         </div>
         <div class="form-group">
            <label><b><?php echo e(__('Comment')); ?></b></label>
            <textarea class="form-control" required="" name="comment" maxlength="500"></textarea>
         </div>
         <?php endif; ?>
      </div>
      <button class="btn btn-neutral  col-12 submit-button mb-2 mt-2"><?php echo e(__('Pay Now')); ?></button>
   </form>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<div class="col-sm-12">

   <table class="address table " cellspacing="8">
      <tr>
         <td class="col-6">
            <div class="addressbox">
               <strong><?php echo e(__('Invoiced To')); ?></strong><br />
               <?php echo e(Auth::user()->name); ?><br />
               <?php echo e(Auth::user()->address); ?>

            </div>
         </td>
         <td class="col-6">
            <div class="addressbox">
               <strong><?php echo e(__('Pay To')); ?></strong><br />
               <?php echo e($invoice_data->company_name); ?><br />
               <?php echo e($invoice_data->address); ?><br />
               <?php echo e($invoice_data->city); ?> <br />
               <?php echo e($invoice_data->post_code); ?><br />
               <?php echo e($invoice_data->country); ?>

            </div>
         </td>
      </tr>
   </table>

   <table class="items table mt-2">
      <tr class="title textcenter">
         <td class="col-9"><?php echo e(__('Description')); ?></td>
         <td class="col-3"><?php echo e(__('Amount')); ?></td>
      </tr>
      <tr>
         <td>
            - <?php echo e($plan->title); ?>

         </td>
         <td class="textcenter"><?php echo e(amount_format($plan->price,'name')); ?></td>
      </tr>
      <tr class="title">
         <td class="textright"><?php echo e(__('Sub Total')); ?>:</td>
         <td class="textcenter"><?php echo e(amount_format($plan->price,'name')); ?></td>
      </tr>
      <tr class="title">
         <td class="textright"><?php echo e(__('Tax')); ?>:</td>
         <td class="textcenter"><?php echo e(amount_format($tax,'name')); ?></td>
      </tr>
      <tr class="title">
         <td class="textright">Total:</td>
         <td class="textcenter"><?php echo e(amount_format($total,'name')); ?></td>
      </tr>
   </table>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script type="text/javascript">
   $('.gateway-button').on('change',function (argument) {
      $('.gateway-form').hide();
      var target = $(this).data('target');
      $(target).show();
   });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('gateways.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/subscription/payment.blade.php ENDPATH**/ ?>