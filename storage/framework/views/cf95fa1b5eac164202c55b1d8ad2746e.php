<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Languages'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create a language'),
      'url'=>'#',
      'components'=>'data-toggle="modal" data-target="#addRecord" id="add_record"',
      'is_button'=>true
   ]
]

], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col">
		<div class="card">
			<!-- Card header -->
			<div class="card-header border-0">
				<h3 class="mb-0"><?php echo e(__('Languages')); ?></h3>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-2"><?php echo e(__('Language Name')); ?></th>
							<th class="col-2"><?php echo e(__('Language Key')); ?></th>
							<th class="col-8 text-right"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>					
						<?php $__currentLoopData = $languages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languageKey => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<?php echo e($language); ?>

							</td>
							<td class="text-left">
								<?php echo e($languageKey); ?>

							</td>
							<td class="text-right">
								<a href="<?php echo e(route('admin.language.show',$languageKey)); ?>" class="btn btn-neutral btn-sm"><i class="fas fa-edit"></i></a>
								<a href="#" class="delete-confirm btn btn-sm btn-neutral" data-action="<?php echo e(route('admin.language.destroy',$languageKey)); ?>"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>				
			</div>			
		</div>
	</div>
</div>
<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(route('admin.language.store')); ?>" class="ajaxform_reset_form">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Create Language')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Language Name')); ?></label>
                  <input type="text" name="name" class="form-control" required="" placeholder="English">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Language')); ?></label>
                  <select class="form-control select2" name="language_code">
                  	<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  	<option value="<?php echo e($country['code']); ?>"><?php echo e($country['name']); ?></option>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-outline-primary col-12 submit-button" ><?php echo e(__('Create Now')); ?></button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/language/index.blade.php ENDPATH**/ ?>