<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title' => __('Chat List'),
'buttons'=>[
[
'name'=> __('Devices List'),
'url'=> route('user.device.index'),
]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/qr-page.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-body position-relative">
		<div class="row">
			<?php if(getUserPlanData('access_chat_list') == true): ?>
			<div class="col-sm-4" >
				<div class="form-group">
					<input type="text" data-target=".contact" class="form-control filter-row" placeholder="<?php echo e(__('Search....')); ?>">
				</div>
				<div class="d-flex justify-content-center qr-area">
					<div class="justify-content-center">
						&nbsp&nbsp
						<div class="spinner-grow text-primary" role="status">
							<span class="sr-only"><?php echo e(__('Loading...')); ?></span> 
						</div>
						<br>
						<p><strong><?php echo e(__('Loading Contacts.....')); ?></strong></p>
					</div>

				</div>
				<div class="alert bg-gradient-red server_disconnect none text-white" role="alert">
					<?php echo e(__('Opps! Server Disconnected 😭')); ?>

				</div>
				<ul class="list-group list-group-flush list my--3 contact-list mt-5 position-relative">
				</ul>
			</div>
			<div class="col-sm-8 mt-5" >
					<div class="text-center">
						<img src="<?php echo e(asset('assets/img/whatsapp-bg.png')); ?>" class="wa-bg-img">
					</div>
					<form method="post" class="ajaxform" action="<?php echo e(route('user.chat.send-message',$device->uuid)); ?>">
						<?php echo csrf_field(); ?>
						<div class="form-group mb-5  none sendble-row">
							<label><?php echo e(__('Reciver')); ?></label>
							<input type="number" readonly="" name="reciver" value="" class="form-control bg-white reciver-number">
						</div>
						<div class="input-group none sendble-row wa-content-area" >
							<select class="form-control" name="selecttype" id="select-type">
								<option value="plain-text"><?php echo e(__('Plan Text')); ?></option>
								<?php if(count($templates) > 0): ?>
								<option value="template"><?php echo e(__('Template')); ?></option>
								<?php endif; ?>
							</select>
							<?php if(count($templates) > 0): ?>
							<select class="form-control none" name="template" id="templates">
								<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($template->id); ?>"><?php echo e($template->title); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<?php endif; ?>
							<input type="text" name="message" class="form-control" id="plain-text" placeholder="Message" aria-label="Recipient's username" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-success mr-3 submit-button" type="submit"><i class="fi fi-rs-paper-plane"></i>&nbsp&nbsp <?php echo e(__('Sent')); ?></button>
							</div>
						</div>
					</form>				
			</div>
			<?php else: ?>
			<div class="col-sm-12">
				<div class="alert bg-gradient-primary text-white alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="fi  fi-rs-info text-white"></i></span>
					<span class="alert-text">
						<strong><?php echo e(__('!Opps ')); ?></strong> 

						<?php echo e(__('Chat list access features is not available in your subscription plan')); ?>


					</span>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<input type="hidden" id="uuid" value="<?php echo e($device->uuid); ?>">
<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<?php $__env->stopSection(); ?>
<?php if(getUserPlanData('access_chat_list') == true): ?>
<?php $__env->startPush('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/js/pages/chat/list.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/chats/list.blade.php ENDPATH**/ ?>