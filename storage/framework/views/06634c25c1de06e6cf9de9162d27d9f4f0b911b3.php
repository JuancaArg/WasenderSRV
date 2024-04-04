<?php $__env->startSection('head'); ?>
  <?php echo $__env->make('layouts.main.headersection',['title'=> 'All Templates'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Get All Template List</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('user.get.whatsapp.templates')); ?>">
					<?php echo csrf_field(); ?>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('WhatsApp Business Account ID')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="number" name="business_account_id" value="<?php echo e(env('BUSINESS_ACCOUNT_ID')); ?>" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Access Token')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="access_token" value="<?php echo e(env('ACCESS_TOKEN')); ?>" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Page Limit')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="limit" value="10" class="form-control">
					</div>
				</div>
								

				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button type="submit" class="btn btn-outline-primary"><?php echo e(__('Send Request')); ?></button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>All Templates</h4>
			</div>
			<div class="card-body">
				<table class="table table-responsive table-stripe">
					<tr>
						<th>Template Id</th>
						<th>Template Name</th>
						<th>Header Type</th>
						<th>Category</th>
						<th>Language</th>
						<th>Status</th>
						<th class="text-center">Use</th>
					</tr>

					<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><a href="<?php echo e(url('/user/whatsapp-template/'.$template->id)); ?>"><?php echo e($template->template_id); ?></a></td>
						<td><?php echo e($template->title); ?></td>
						<td><?php echo e($template->header); ?></td>
						<td><?php echo e($template->category); ?></td>
						<td><?php echo e($template->language); ?></td>
						<td><?php echo e($template->status); ?></td>
						<td class="text-center"><a href="<?php echo e(url('/user/whatsapp-template/'.$template->id)); ?>" class="btn btn-primary">Use</a></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
				

				
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/template/create.blade.php ENDPATH**/ ?>