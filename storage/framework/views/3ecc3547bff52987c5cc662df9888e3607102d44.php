<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'Back',
		'url'=> route('user.device.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/qr-page.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-sm-8">
		<div class="card card-neutral">
			<div class="card-header">
				<h4><?php echo e(__('Scan the QR Code On Your Whatsapp Mobile App')); ?></h4>
				<div class="card-header-action none loggout_area">
					<a href="javascript:void(0)" class="btn btn-sm btn-neutral logout-btn" data-id="<?php echo e($device->uuid); ?>">
						<i class="fas fa-sign-out-alt"></i>&nbsp<?php echo e(__('Logout')); ?>

					</a>
				</div>
			</div>
			<div class="card-body">
				<div class="d-flex justify-content-center qr-area">
					
					
					<div class="justify-content-center">
						&nbsp&nbsp
						<div class="spinner-grow text-primary" role="status">
							<span class="sr-only"><?php echo e(__('Loading...')); ?></span> 
						</div>
						<br>
						<p><strong><?php echo e(__('QR Loading.....')); ?></strong></p>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<div class="alert bg-gradient-red server_disconnect none text-white" role="alert">
					<?php echo e(__('Opps! Server Disconnected 😭')); ?>

				</div>
				
				<div class="alert bg-gradient-green logged-alert none text-white" role="alert">
					<?php echo e(__('Device Connected ')); ?> <img src="<?php echo e(asset('uploads/firework.png')); ?>" alt="">
				</div>
			</div>
		</div>
		<div class="card card-neutral none helper-box">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-6 mb-2 mt-2">
						<a href="<?php echo e(url('/user/device/chats/'.$device->uuid)); ?>" class="btn btn-neutral col-12">
							<i class="fi fi-rs-paper-plane"></i>&nbsp <?php echo e(__('My Chat list')); ?>

						</a>
					</div>
					<div class="col-sm-6 mb-2 mt-2">
						<a href="<?php echo e(url('/user/device/groups/'.$device->uuid)); ?>" class="btn btn-neutral col-12">
							<i class="fi fi-rs-paper-plane"></i>&nbsp <?php echo e(__('My Group list')); ?>

						</a>
					</div>

					<div class="col-sm-6 mt-3">
						<a href="<?php echo e(url('/user/sent-text-message')); ?>" class="btn btn-neutral col-12">
							<i class="fi fi-rs-paper-plane"></i>&nbsp <?php echo e(__('Send a message')); ?>

						</a>
					</div>
					<div class="col-sm-6 mt-3">
						<a href="<?php echo e(url('/user/bulk-message/create')); ?>" class="btn btn-neutral col-12">
							<i class="fi fi-rs-rocket-lunch"></i>&nbsp <?php echo e(__('Send bulk message')); ?>

						</a>
					</div>
					
				</div>
			</div>
		</div>	
	</div>
	<div class="col-sm-4">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('How To Scan?')); ?></h4>
				<div class="card-header-action">
					<a href="#" class="btn btn-sm btn-neutral">
						<i class="fas fa-lightbulb"></i>&nbsp<?php echo e(__('Guide')); ?>

					</a>
				</div>
			</div>
			<div class="card-body">
				<img src="<?php echo e(asset('uploads/scan-demo.gif')); ?>" class="w-100" >
			</div>
			<div class="card-footer">
				<div class="activities">
			<div class="activity">
				<div class="activity-icon bg-primary text-white shadow-primary">
					<i class="ni ni-mobile-button"></i>
				</div>
				<div class="activity-detail">
					<div class="mb-2">
						<span class="text-job text-primary"><?php echo e(__('Step 1')); ?></span>
						<span class="bullet"></span>
					</div>
					<p><?php echo e(__('Open WhatsApp on your phone')); ?></p>
				</div>
			</div>
			<div class="activity">
				<div class="activity-icon bg-primary text-white shadow-primary">
					<i class="ni ni-active-40"></i>
				</div>
				<div class="activity-detail">
					<div class="mb-2">
						<span class="text-job text-primary"><?php echo e(__('Step 2')); ?></span>
						<span class="bullet"></span>
					</div>
					<p><?php echo e(__('Tap Menu or Settings and select Linked Devices')); ?></p>
				</div>
			</div>
			<div class="activity">
				<div class="activity-icon bg-primary text-white shadow-primary">
					<i class="ni ni-active-40"></i>
				</div>
				<div class="activity-detail">
					<div class="mb-2">
						<span class="text-job text-primary"><?php echo e(__('Step 3')); ?></span>
						<span class="bullet"></span>
					</div>
					<p><?php echo e(__('Tap on Link a Device')); ?></p>
				</div>
			</div>
			<div class="activity">
				<div class="activity-icon bg-primary text-white shadow-primary">
					<i class="fa fa-qrcode"></i>
				</div>
				<div class="activity-detail">
					<div class="mb-2">
						<span class="text-job text-primary"><?php echo e(__('Step 4')); ?></span>
						<span class="bullet"></span>
					</div>
					<p><?php echo e(__('Point your phone to this screen to capture the code')); ?></p>
				</div>
			</div>
		</div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="device_status" value="<?php echo e($device->status); ?>">
<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" id="device_id" value="<?php echo e($device->uuid); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/plugins/canvas-confetti/confetti.browser.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/user/qr.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/device/qr.blade.php ENDPATH**/ ?>