<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create a feature'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.features.index'),
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="ajaxform_instant_reload" method="post" action="<?php echo e(route('admin.features.update',$info->id)); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<?php echo method_field("PUT"); ?>
	<div class="row">
		<div class="col-lg-5">
			<strong><?php echo e(__('Edit features post')); ?></strong>
			<p><?php echo e(__('Edit your features post details and necessary information from here')); ?></p>
		</div>

		<div class="col-lg-7">
			<div class="card">
				<div class="card-body">
					<div class="from-group row">
						<label  class="col-lg-12"><?php echo e(__('Features Title')); ?></label>
						<div class="col-lg-12">
							<input type="text" name="title" required="" class="form-control" value="<?php echo e($info->title); ?>">
						</div>
					</div>
				
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('Preview Image')); ?></label>
						<div class="col-lg-12">
							<input type="file" class="form-control"  name="preview_image" accept="image/*">
						</div>
					</div>
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('Banner Image')); ?></label>
						<div class="col-lg-12">
							<input type="file" class="form-control"  name="banner_image" accept="image/*">
						</div>
					</div>
					<div class="from-group row mt-2">
						<label  class="col-lg-12"><?php echo e(__('Short Description')); ?></label>
						<div class="col-lg-12">
							<textarea name="description" required="" class="form-control h-100" maxlength="500"><?php echo e($info->excerpt->value ?? ''); ?></textarea>
						</div>
					</div>
					<div class="from-group row mt-3">
						<label  class="col-lg-12"><?php echo e(__('Main Description')); ?></label>
						<div class="col-lg-12">
							<textarea name="main_description" required="" class="h-200 form-control"><?php echo e($info->longDescription->value ?? ''); ?></textarea>
						</div>
					</div>
					<div class="from-group row  mt-2">
						<label  class="col-lg-12"><?php echo e(__('Select Langauge')); ?></label>
						<div class="col-lg-12">
							<select name="language" class="form-control" >
								<?php $__currentLoopData = $languages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languagesKey => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($languagesKey); ?>" <?php echo e($info->lang == $languagesKey ? 'selected' : ''); ?>> <?php echo e($language); ?> </option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="from-group row  mt-2">
						<div class="col-lg-12 d-flex">
							<label class="custom-toggle custom-toggle-primary">
								<input type="checkbox"  name="featured" value="1" id="plain-text-with-featured"  data-target=".plain-title-with-featured" class="save-template"  <?php echo e($info->featured == 1 ? 'checked' : ''); ?>>
								<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
							</label>
							<label class="mt-1 ml-1" for="plain-text-with-featured"><h4><?php echo e(__('Make it featured?')); ?></h4></label>
						</div>
						<div class="col-lg-12 d-flex">
							<label class="custom-toggle custom-toggle-primary">
								<input type="checkbox"  name="status" value="1" id="plain-text-with-button"  data-target=".plain-title-with-button" class="save-template" <?php echo e($info->status == 1 ? 'checked' : ''); ?>>
								<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
							</label>
							<label class="mt-1 ml-1" for="plain-text-with-button"><h4><?php echo e(__('Make it publish?')); ?></h4></label>
						</div>
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

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/features/edit.blade.php ENDPATH**/ ?>