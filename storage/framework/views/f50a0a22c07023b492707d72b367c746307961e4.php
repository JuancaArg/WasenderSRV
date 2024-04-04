<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Edit Team Member profile'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.team.index'),
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form class="ajaxform" method="post" action="<?php echo e(route('admin.team.update',$info->id)); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
	
	<div class="row">
		<div class="col-lg-5">
			<strong><?php echo e(__('Edit team member')); ?></strong>
			<p><?php echo e(__('Edit your team member details and necessary information from here')); ?></p>
		</div>
		<div class="col-lg-7 card-wrapper">
			<!-- Alerts -->
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0"><?php echo e(__('Edit Team Member bio')); ?></h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label><?php echo e(__('Member Name')); ?></label>
						<input type="text" name="member_name" value="<?php echo e($info->title); ?>" required="" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Member Position')); ?></label>
						<input type="text" name="member_position" value="<?php echo e($info->slug); ?>" required="" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Profile Picture')); ?></label>
						<input type="file" accept="image/*" name="profile_picture"  class="form-control">
					</div>
					

					<div class="form-group">
						<label><?php echo e(__('Profile Description')); ?></label>
						<textarea class="form-control h-200" name="about" maxlength="1000" required=""><?php echo e($info->description->value ?? ''); ?></textarea>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Facebook profile link')); ?></label>
						<input type="url" name="socials[facebook]" value="<?php echo e($socials->facebook ?? ''); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Twitter profile link')); ?></label>
						<input type="url" name="socials[twitter]" value="<?php echo e($socials->twitter ?? ''); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Linkedin profile link')); ?></label>
						<input type="url" name="socials[linkedin]" value="<?php echo e($socials->linkedin ?? ''); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Instagram profile link')); ?></label>
						<input type="url" name="socials[instagram]" value="<?php echo e($socials->instagram ?? ''); ?>" class="form-control">
					</div>
					<div class="d-flex">
						<label class="custom-toggle custom-toggle-primary">
							<input type="checkbox"  name="status" value="1" id="plain-text-with-button"   data-target=".plain-title-with-button" class="save-template" <?php echo e($info->status == 1 ? 'checked' : ''); ?> >
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
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/team/edit.blade.php ENDPATH**/ ?>