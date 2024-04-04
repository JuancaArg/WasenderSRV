<?php if(!empty($data)): ?>
	<?php $__currentLoopData = $data['data'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if(isset($row->children)): ?>
		<li>
            <a href="#"><?php echo e($row->text); ?></a>
			<ul class="submenu">
			 <?php $__currentLoopData = $row->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			 	<?php echo $__env->make('frontend.menu.submenu', ['childrens' => $childrens], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</li>
		<?php else: ?>
		<li>
			<a href="<?php echo e(url($row->href ?? '')); ?>" <?php if(!empty($row->target)): ?> target="<?php echo e($row->target); ?>" <?php endif; ?>><?php echo e($row->text ?? ''); ?></a>
		</li>
		<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/frontend/menu/main-menu.blade.php ENDPATH**/ ?>