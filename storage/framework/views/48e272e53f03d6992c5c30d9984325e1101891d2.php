<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('SMTP Settings'),
'buttons' =>[
	[
		'name'=> __('Back to dashboard'),
		'url'=> url('admin/dashboard'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row ">
	<div class="col-lg-5 mt-5">
        <strong><?php echo e(__('SMTP mail Settings')); ?></strong>
        <p><?php echo e(__('Edit you smtp settings for mail transaction')); ?></p>
    </div>
    <div class="col-lg-7 mt-5">
        <form class="ajaxform" action="<?php echo e(route('admin.developer-settings.update',$id)); ?>">
        	<?php echo csrf_field(); ?>
        	<?php echo method_field('PUT'); ?>
        	<div class="card">
            <div class="card-body">
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Use Queue Job For Mail Transaction?')); ?></label>
                    <div class="col-lg-12">
                     <select name="QUEUE_MAIL" class="form-control">
                        <option value="true" <?php if(env('QUEUE_MAIL') == true): echo 'selected'; endif; ?>><?php echo e(__('Enable')); ?></option>
                        <option value="false" <?php if(env('QUEUE_MAIL') == false): echo 'selected'; endif; ?>><?php echo e(__('Disable')); ?></option>
                      </select>
                    </div>
                </div>
                <div class="from-group row">
                    <label class="col-lg-12"><?php echo e(__('Mail driver type')); ?></label>
                    <div class="col-lg-12">
                        <select name="MAIL_DRIVER_TYPE" class="form-control">
                            <option value="MAIL_MAILER" <?php if(env('MAIL_DRIVER_TYPE') == 'MAIL_MAILER'): ?> selected="" <?php endif; ?>><?php echo e(__('MAIL MAILER')); ?></option>
                            <option value="MAIL_DRIVER" <?php if(env('MAIL_DRIVER_TYPE') == 'MAIL_DRIVER'): ?> selected="" <?php endif; ?>><?php echo e(__('MAIL DRIVER')); ?></option>
                        </select>
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail Driver')); ?></label>
                    <div class="col-lg-12">
                     <select name="MAIL_DRIVER" class="form-control">
                        <option value="sendmail" <?php if($mailDriver == 'sendmail'): echo 'selected'; endif; ?>><?php echo e(__('sendmail')); ?></option>
                        <option value="smtp" <?php if($mailDriver == 'smtp'): echo 'selected'; endif; ?>><?php echo e(__('smtp')); ?></option>
                      </select>
                    </div>
                </div>                
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail Host')); ?></label>
                    <div class="col-lg-12">
                     <input type="text"   name="MAIL_HOST" class="form-control" required="" value="<?php echo e(env('MAIL_HOST')); ?>">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail Port')); ?></label>
                    <div class="col-lg-12">
                     <input type="text"   name="MAIL_PORT" class="form-control" required="" value="<?php echo e(env('MAIL_PORT')); ?>">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail Username')); ?></label>
                    <div class="col-lg-12">
                     <input type="text"   name="MAIL_USERNAME" class="form-control" required="" value="<?php echo e(env('MAIL_USERNAME')); ?>">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail Password')); ?></label>
                    <div class="col-lg-12">
                     <input type="text"   name="MAIL_PASSWORD" class="form-control" required="" value="<?php echo e(env('MAIL_PASSWORD')); ?>">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail Encryption')); ?></label>
                    <div class="col-lg-12">
                     <select name="MAIL_ENCRYPTION" class="form-control">
                        <option value="ssl" <?php if(env('MAIL_ENCRYPTION') == 'ssl'): echo 'selected'; endif; ?>><?php echo e(__('SSL')); ?></option>
                        <option value="tls" <?php if(env('MAIL_ENCRYPTION') == 'tls'): echo 'selected'; endif; ?>><?php echo e(__('TLS')); ?></option>
                      </select>
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail From Address')); ?></label>
                    <div class="col-lg-12">
                     <input type="email"   name="MAIL_FROM_ADDRESS" class="form-control" placeholder="email" required="" value="<?php echo e(env('MAIL_FROM_ADDRESS')); ?>">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Mail From Name')); ?></label>
                    <div class="col-lg-12">
                     <input type="text"   name="MAIL_FROM_NAME" class="form-control" placeholder="Website Name" required="" value="<?php echo e(env('MAIL_FROM_NAME')); ?>">
                    </div>
                </div> 
                <div class="from-group row mt-2">
                    <label class="col-lg-12"><?php echo e(__('Incoming Mail')); ?></label>
                    <div class="col-lg-12">
                     <input type="email"   name="MAIL_TO" class="form-control" placeholder="email" required="" value="<?php echo e(env('MAIL_TO')); ?>">
                    </div>
                </div>                                  
                <div class="from-group row mt-3">
                    <div class="col-lg-12">
                       <button class="btn btn-neutral submit-button btn-sm float-left"><?php echo e(__('Update Settings')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/developer/smtp.blade.php ENDPATH**/ ?>