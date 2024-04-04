<?php if($childrens): ?>
  	<li>
        <?php if(isset($childrens->children)): ?>
        <li>
            <a  href="<?php echo e(url($childrens->href)); ?>" <?php if(!empty($childrens->target)): ?> target="<?php echo e($childrens->target); ?>" <?php endif; ?>><?php echo e($childrens->text); ?></a>
        <ul class="submenu">
			<?php $__currentLoopData = $childrens->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			     <?php echo $__env->make('frontend.menu.submenu', ['childrens' => $row], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </li>
        <?php else: ?>
        <a  href="<?php echo e(url($childrens->href)); ?>" <?php if(!empty($childrens->target)): ?> target="<?php echo e($childrens->target); ?>" <?php endif; ?>><?php echo e($childrens->text); ?></a>
		<?php endif; ?>
	</li>
<?php endif; ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/menu/submenu.blade.php ENDPATH**/ ?>