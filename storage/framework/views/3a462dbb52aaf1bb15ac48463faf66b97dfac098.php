<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'   => __('Subscription Plan'),
'buttons' => [
	 [
      'name'=>'<i class="fi  fi-rs-calendar-clock"></i>&nbsp&nbsp'.__('Subscriptions History'),
      'url'=> url('/user/subscriptions/log'),
   ]
]

], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
<?php if(Session::has('saas_error')): ?>
 <div class="col-sm-12">
   <div class="alert bg-gradient-danger text-white alert-dismissible fade show" role="alert">
     <span class="alert-icon"><i class="fi  fi-rs-info"></i></span>
     <span class="alert-text"><strong><?php echo e(__('!Opps ')); ?></strong> <?php echo e(Session::get('saas_error')); ?></span>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
</div>
<?php endif; ?>
	<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-sm-4 text-center">
		<div class="card">
			<div class="card-body">
				<h2 class="pricing-green"><?php echo e($plan->title); ?></h2>
				<h1><?php echo e(amount_format($plan->price)); ?></h1>
				
				<?php echo e($plan->days == 30 ? 'Per month' : 'Per year'); ?>

				
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
				<a class="btn btn-block  btn-neutral" href="<?php echo e(route('user.subscription.show',$plan->id)); ?>">
						<i class="<?php echo e(Auth::user()->plan_id == $plan->id ? 'fa fa-check' : 'fa fa-plus-circle'); ?> " ></i>
				 	<?php echo e(Auth::user()->plan_id == $plan->id ? __('Activated') :  __('Subscribe')); ?>

				</a>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/subscription/index.blade.php ENDPATH**/ ?>