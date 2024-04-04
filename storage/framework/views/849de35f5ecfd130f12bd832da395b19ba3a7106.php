<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> __('Cron Jobs')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Execute Schedule Messages')); ?></h4>
			</div>
			<div class="card-body">
				<div class="code"><p class="text-white">curl -s <?php echo e(url('/cron/execute-schedule')); ?></p></div>
				<br>
				<strong><?php echo e(__('Everyday')); ?></strong>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Notify to customer before expire the subscription')); ?></h4>
			</div>
			<div class="card-body">
				<div class="code"><p class="text-white">curl -s <?php echo e(url('/cron/notify-to-user')); ?></p></div>
				<br>
				<strong><?php echo e(__('Everyday')); ?></strong>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Remove Junk Devices')); ?></h4>
			</div>
			<div class="card-body">
				<div class="code"><p class="text-white">curl -s <?php echo e(url('/cron/remove-junk-device')); ?></p></div>
				<br>
				<strong><?php echo e(__('Everyday')); ?></strong>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/cron/index.blade.php ENDPATH**/ ?>