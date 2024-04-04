<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Features'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create feature'),
      'url'=>route('admin.features.create'),
      
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
				<h3 class="mb-0"><?php echo e(__('Our Features')); ?></h3>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-3"><?php echo e(__('Title')); ?></th>
							<th class="col-6"><?php echo e(__('Description')); ?></th>
							<th class="col-1 text-right"><?php echo e(__('Language')); ?></th>
							<th class="col-1 text-right"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>					
						<?php $__currentLoopData = $posts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<img src="<?php echo e(asset($post->preview->value)); ?>" class="avatar rounded-circle mr-3">
								<?php echo e(Str::limit($post->title,30)); ?>

							</td>
							<td class="text-left">
								<?php echo e(Str::limit($post->excerpt->value ?? '',50)); ?>

							</td>
							<td class="text-right">
								<?php echo e($post->lang); ?>

							</td>
							<td class="text-right">
								<div class="btn-group mb-2 float-right">
									<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo e(__('Action')); ?>

									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item has-icon" href="<?php echo e(route('admin.features.edit',$post->id)); ?>" >
										<i class="fi fi-rs-edit"></i><?php echo e(__('Edit')); ?></a>

										
										<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('admin.features.destroy',$post->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove')); ?></a>
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>				
			</div>

			<div class="card-footer py-4">
				<?php echo e($posts->links('vendor.pagination.bootstrap-5')); ?>

			</div>					
		</div>
	</div>
</div>




<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(route('admin.features.store')); ?>" class="ajaxform_instant_reload" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Create Feature')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('title')); ?></label>
                  <input type="text" name="title" maxlength="150" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('preview image')); ?></label>
                  <input type="file" name="preview_image" accept="image/*" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('description')); ?></label>
                 <textarea class="form-control h-100" maxlength="500" name="description" required=""></textarea>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Language')); ?></label>
                 <select class="form-control" name="language" required="">
                 	<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languageKey => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 	<option value="<?php echo e($languageKey); ?>"><?php echo e($language); ?></option>
                 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
               </div>
               <div class="form-group">
               	<button type="submit" class="btn btn-neutral  submit-button" ><?php echo e(__('Create Now')); ?></button>
               </div>
            </div>
           
         </form>
      </div>
   </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="" class="ajaxform_instant_reload edit-modal" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>

            <div class="modal-header">
               <h3><?php echo e(__('Edit Feature')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('title')); ?></label>
                  <input type="text" name="title" maxlength="150" class="form-control" id="title" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('description')); ?></label>
                 <textarea class="form-control h-100" maxlength="500" name="description" required="" id="description"></textarea>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('preview image')); ?></label>
                  <input type="file" name="preview_image" accept="image/*" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Language')); ?></label>
                 <select class="form-control" name="language" id="language" required="">
                 	<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languageKey => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 	<option value="<?php echo e($languageKey); ?>"><?php echo e($language); ?></option>
                 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-outline-primary col-12 submit-button" ><?php echo e(__('Update')); ?></button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/js/pages/admin/features.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/features/index.blade.php ENDPATH**/ ?>