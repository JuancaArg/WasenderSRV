<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create Page'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.page.index'),
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="ajaxform_instant_reload" method="post" action="<?php echo e(route('admin.page.store')); ?>">
	<?php echo csrf_field(); ?>
	<div class="row justify-content-center">
		<div class="col-lg-10 card-wrapper">
			<!-- Alerts -->
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0"><?php echo e(__('Create Custom Page')); ?></h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label><?php echo e(__('Page Title')); ?></label>
						<input type="text" name="title" required="" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Page Description')); ?></label>
						<textarea class="summernote" name="description" required=""></textarea>
					</div>
					
					<div class="from-group row">
						<label class="col-lg-12"><?php echo e(__('SEO Meta Title')); ?></label>
						<div class="col-lg-12">
							<input type="text" name="meta_title" required="" class="form-control">
						</div>
					</div>     
					<div class="from-group row mt-2">
						<label class="col-lg-12"><?php echo e(__('SEO Meta Description')); ?></label>
						<div class="col-lg-12">
							<textarea name="meta_description" required="" class="form-control h-100"></textarea>
						</div>
					</div>
					<div class="from-group row mt-3">
						<label class="col-lg-12"><?php echo e(__('SEO Meta Tags')); ?></label>
						<div class="col-lg-12">
							<input type="text" name="meta_tags" required="" class="form-control">
						</div>
					</div>
					<div class="d-flex mt-2">
						<label class="custom-toggle custom-toggle-primary">
							<input type="checkbox"  name="status" value="1" id="plain-text-with-button"  data-target=".plain-title-with-button" class="save-template">
							<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
						</label>
						<label class="mt-1 ml-1" for="plain-text-with-button"><h4><?php echo e(__('Make it publish?')); ?></h4></label>
					</div>
					<div class="from-group row mt-3">
						<div class="col-lg-12">
							<button class="btn btn-neutral submit-button"><?php echo e(__('Submit')); ?></button>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/plugins/summernote/summernote.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/page/create.blade.php ENDPATH**/ ?>