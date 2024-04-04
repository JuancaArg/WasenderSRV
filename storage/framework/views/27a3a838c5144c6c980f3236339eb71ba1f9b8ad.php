<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2/select2.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create a blog'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.blog.index'),
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="ajaxform_instant_reload" method="post" action="<?php echo e(route('admin.blog.store')); ?>">
	<?php echo csrf_field(); ?>
	<div class="row">
		<div class="col-lg-5">
			<strong><?php echo e(__('Create a blog post')); ?></strong>
			<p><?php echo e(__('Add your blog details and necessary information from here')); ?></p>
		</div>

		<div class="col-lg-7">
			<div class="card">
				<div class="card-body">
					<div class="from-group row">
						<label  class="col-lg-12"><?php echo e(__('Blog Title')); ?></label>
						<div class="col-lg-12">
							<input type="text" name="title" required="" class="form-control">
						</div>
					</div>
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('Select Category')); ?></label>
						<div class="col-lg-12">
							<select name="categories[]" class="form-control select2" multiple="">
								<?php $__currentLoopData = $categories ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($key); ?>"> <?php echo e(__($category)); ?> </option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('Select Tags')); ?></label>
						<div class="col-lg-12">
							<select name="categories[]" class="form-control select2" multiple="">
								<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($key); ?>"> <?php echo e(__($tag)); ?> </option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('Blog Image')); ?></label>
						<div class="col-lg-12">
							<input type="file" class="form-control" required="" name="preview" accept="image/*">
						</div>
					</div>
					<div class="from-group row mt-2">
						<label  class="col-lg-12"><?php echo e(__('Short Description')); ?></label>
						<div class="col-lg-12">
							<textarea name="short_description" required="" class="form-control h-100" maxlength="500"></textarea>
						</div>
					</div>
					<div class="from-group row mt-3">
						<label  class="col-lg-12"><?php echo e(__('Main Description')); ?></label>
						<div class="col-lg-12">
							<textarea name="main_description" required="" class="h-200 form-control"></textarea>
						</div>
					</div>
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('Select Langauge')); ?></label>
						<div class="col-lg-12">
							<select name="language" class="form-control" >
								<?php $__currentLoopData = $languages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languagesKey => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($languagesKey); ?>"> <?php echo e($language); ?> </option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="from-group row  mt-2">
						<div class="col-lg-12 d-flex">
							
							<label class="custom-toggle custom-toggle-primary">
								<input type="checkbox"  name="featured" value="1" id="plain-text-with-featured"  data-target=".plain-title-with-featured" class="save-template">
								<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
							</label>
							<label class="mt-1 ml-1" for="plain-text-with-featured"><h4><?php echo e(__('Make it featured?')); ?></h4></label>

							
						</div>
						<div class="col-lg-12 d-flex">
							<label class="custom-toggle custom-toggle-primary">
								<input type="checkbox"  name="status" value="1" id="plain-text-with-button"  data-target=".plain-title-with-button" class="save-template">
								<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
							</label>
							<label class="mt-1 ml-1" for="plain-text-with-button"><h4><?php echo e(__('Make it publish?')); ?></h4></label>
						</div>
					</div>


				</div>
			</div>
		</div>

		<div class="col-lg-5 mt-5">
			<strong><?php echo e(__('SEO Settings')); ?></strong>
			<p><?php echo e(__('Add your SEO meta data information')); ?></p>
		</div>

		<div class="col-lg-7 mt-5">
			<div class="card">
				<div class="card-body">
					<div class="from-group row">
						<label  class="col-lg-12"><?php echo e(__('SEO Meta Title')); ?></label>
						<div class="col-lg-12">
							<input type="text" name="meta_title" required="" class="form-control">
						</div>
					</div>     
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('SEO Meta Image')); ?></label>
						<div class="col-lg-12">
							<input type="file" class="form-control" name="meta_image" required="" accept="image/*">
						</div>
					</div>
					<div class="from-group row mt-2">
						<label  class="col-lg-12"><?php echo e(__('SEO Meta Description')); ?></label>
						<div class="col-lg-12">
							<textarea name="meta_description" required="" class="form-control h-100"></textarea>
						</div>
					</div>
					<div class="from-group row mt-2">
						<label  class="col-lg-12"><?php echo e(__('SEO Meta Tags')); ?></label>
						<div class="col-lg-12">
							<input type="text" name="meta_tags" required="" class="form-control">
						</div>
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
<script src="<?php echo e(asset('assets/plugins/select2/select2.min.js')); ?>"></script>
<script>
	$(document).ready(function() {
		$('.select2').select2();
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/blogs/create.blade.php ENDPATH**/ ?>