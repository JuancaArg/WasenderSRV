<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Plans'),
'buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create A Plan'),
		'url'=>route('admin.plan.create'),
	]
]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-md-6 col-lg-3 text-center">
		<div class="card">
			<div class="card-body">
				<h2 class="pricing-green"><?php echo e($plan->title); ?></h2>
				<h1><?php echo e(amount_format($plan->price)); ?></h1>
				<?php echo e($plan->days == 30 ? 'Per month' : 'Per year'); ?>

				<br>
				<span href="#!" class="text-muted"><?php echo e(__('Active Users')); ?> (<?php echo e($plan->activeuser_count); ?>)</span>
				<hr>
				<?php $__currentLoopData = $plan->data ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="mt-2 text-left">
					<?php if(planData($key,$data)['is_bool'] == true): ?>
					<?php if(planData($key,$data)['value'] == true): ?>
					<i class="<?php echo e(planData($key,$data)['value'] == true ? 'far text-success fa-check-circle' : 'fas text-danger fa-times-circle'); ?>"></i> 
					<?php else: ?>
					<i class="fas text-danger fa-times-circle"></i> 
					<?php endif; ?>

					<?php else: ?>
					<i class="far text-success fa-check-circle"></i> 
					<?php endif; ?>      
					<?php echo e(str_replace('_',' ',planData($key,$data)['title'])); ?>

				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<hr>
				<div class="mt-2">
					<div class="text-center">
						<a class="btn btn-sm  btn-neutral text-left" href="<?php echo e(route('admin.plan.edit',$plan->id)); ?>"  data-icon="fa fa-plus-circle">
							<i class="fa fa-edit" aria-hidden="true"></i>
						</a>
						
						<a class="btn btn-sm btn-primary text-left delete-confirm" href="#" data-action="<?php echo e(route('admin.plan.destroy',$plan->id)); ?>" data-icon="fa fa-plus-circle">
							<i class="fa fa-trash" aria-hidden="true"></i>
						</a>
					</div>

					
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php if(count($plans) == 0): ?>
		<div class="alert  bg-gradient-primary text-white col-sm-12"><span class="text-left"><?php echo e(__('Opps you have not created any plan....')); ?></span></div>
	<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/plan/index.blade.php ENDPATH**/ ?>