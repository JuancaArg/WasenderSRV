<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=>__('Support'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=> route('admin.support.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
				<div class="card-header">
					<div class="row">
						<h3 class="mb-0 font-weight-bolder"><?php echo e(__('Subject :')); ?> <?php echo e($support->subject); ?></h3>
					</div>
				</div>
				<div class="card-body">
					<div class="timeline timeline-one-side" data-timeline-content="axis"
					data-timeline-axis-style="dashed">
					
					<?php $__currentLoopData = $support->conversations ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="timeline-block">
						<span class="timeline-step badge-primary">
							<i class="<?php echo e($reply->is_admin == 0 ? 'fi fi-rs-paper-plane' : 'fi  fi-rs-headset'); ?>"></i>
						</span>
						<div class="timeline-content">
							<small class="text-xs">
								<?php echo e($reply->created_at->format('d M, Y - h:i A')); ?> 
								<?php echo e($reply->is_admin == 1 && $reply->seen == 1 ? '(Seen)' : ''); ?>

							</small>
							<h5 class="mt-3 mb-0"><?php echo e($reply->comment); ?></h5>
							<br>
							<b class="text-sm tt-5"><?php echo e($reply->is_admin == 1 ? 'You' : $support->user->name); ?></b>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div></span>
			</div>
		</div>

		
		<div class="card shadow">
			<div class="card-body">
				<form method="POST" class="ajaxform_instant_reload" action="<?php echo e(route('admin.support.update',$support->id)); ?>">
					<?php echo csrf_field(); ?>
					<?php echo method_field('PUT'); ?>
					<div class="form-group">
						<label><?php echo e(__('Reply')); ?></label>
						<textarea class="form-control h-200" required="" name="message" maxlength="1000"></textarea>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Support Status')); ?></label>
						<select class="form-control" name="status">
							<option value="1" <?php if($support->status == 1): ?> selected <?php endif; ?>><?php echo e(__('Open')); ?></option>
							<option value="2" <?php if($support->status == 2): ?> selected <?php endif; ?>><?php echo e(__('Pending')); ?></option>
							<option value="0" <?php if($support->status == 0): ?> selected <?php endif; ?>><?php echo e(__('Closed')); ?></option>
						</select>
					</div>
					<button class="btn btn-neutral" ><?php echo e(__('Reply')); ?></button>
				</form>
			</div>
		</div>	
		
	</div>
</div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/support/show.blade.php ENDPATH**/ ?>