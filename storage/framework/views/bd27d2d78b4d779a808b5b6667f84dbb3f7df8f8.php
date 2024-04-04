<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Edit SEO Settings'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.seo.index'),
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="ajaxform" method="post" action="<?php echo e(route('admin.seo.update',$id)); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
	
	<div class="row">
		<div class="col-lg-5">
			<strong><?php echo e(__('Edit page seo settings')); ?></strong>
			<p><?php echo e(__('Edit page seo and necessary information from here')); ?></p>
		</div>
		<div class="col-lg-7 card-wrapper">
			<!-- Alerts -->
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0"><?php echo e(__('Edit Settings')); ?></h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label><?php echo e(__('Meta Title')); ?></label>
						<input type="text" name="metadata[site_name]" required="" value="<?php echo e($contents->site_name ?? ''); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Meta Description')); ?></label>
						<textarea name="metadata[matadescription]" required="" class="summernote form-control h-200"><?php echo e($contents->matadescription ?? ''); ?></textarea>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Meta Tags')); ?></label>
						<input type="text" name="metadata[matatag]" required="" value="<?php echo e($contents->matatag ?? ''); ?>" class="form-control">
					</div>
					<?php if(isset($contents->twitter_site_title)): ?>
					<div class="form-group">
						<label><?php echo e(__('Twitter Site Title')); ?></label>
						<input type="text" name="metadata[twitter_site_title]" required="" value="<?php echo e($contents->twitter_site_title ?? ''); ?>" class="form-control">
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label><?php echo e(__('Meta Image')); ?></label>
						<input type="file" accept="image/*" name="image"  class="form-control">
					</div>
					<div class="from-group row mt-3">
						<div class="col-lg-12">
							<button class="btn btn-neutral submit-button"><?php echo e(__('Save Changes')); ?></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/seo/show.blade.php ENDPATH**/ ?>