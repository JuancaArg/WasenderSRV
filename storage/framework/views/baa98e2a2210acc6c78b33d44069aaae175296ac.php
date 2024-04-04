<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title' => __('Group List'),
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
			<?php if(getUserPlanData('access_group_list') == true): ?>
			<div class="col-sm-12 server_disconnect text-center none">
				<img src="<?php echo e(asset('/uploads/disconnect.webp')); ?>" class="w-50" height="80%"><br>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<div class="alert bg-gradient-red  text-white" role="alert">
							<?php echo e(__('Opps! Server Disconnected 😭')); ?>

						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
			<div class="col-sm-4 main-area" >
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
				<ul class="list-group list-group-flush list my--3 contact-list mt-5 position-relative">
				</ul>
			</div>
			<div class="col-sm-8 mt-5 main-area" >
				<div class="text-center">
					<img src="<?php echo e(asset('assets/img/whatsapp-bg.png')); ?>" class="wa-bg-img">
					<h3><?php echo e(__('Sent message to group')); ?></h3>
				</div>
				<form method="post" class="ajaxform" action="<?php echo e(route('user.group.send-message',$device->uuid)); ?>">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="group" class="reciver-id">

					<div class="form-group mb-5  none sendble-row">
						<label><?php echo e(__('Target Group Name')); ?></label>
						<input type="text" readonly="" name="group_name" class="form-control bg-white reciver-group">
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

						<?php echo e(__('Group access features is not available in your subscription plan')); ?>


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
<?php if(getUserPlanData('access_group_list') == true): ?>
<?php $__env->startPush('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/js/pages/chat/groups.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/chats/groups.blade.php ENDPATH**/ ?>