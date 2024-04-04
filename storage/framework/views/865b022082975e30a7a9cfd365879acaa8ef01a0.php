<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Features'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create Testimonial'),
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
				<h3 class="mb-0"><?php echo e(__('Testimonials')); ?></h3>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-3"><?php echo e(__('Reviewer Name')); ?></th>
							<th class="col-2"><?php echo e(__('Reviewer Position')); ?></th>
							<th class="col-4"><?php echo e(__('Comment')); ?></th>
							<th class="col-1 text-right"><?php echo e(__('Ratings')); ?></th>
							<th class="col-1 text-right"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>					
						<?php $__currentLoopData = $posts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<img src="<?php echo e(asset($post->preview->value)); ?>" class="avatar rounded-square mr-3">
								<?php echo e(Str::limit($post->title,30)); ?>

							</td>
							<td class="text-left">
								<?php echo e(Str::limit($post->slug,30)); ?>

							</td>
							<td class="text-left">
								<?php echo e(Str::limit($post->excerpt->value ?? '',50)); ?>

							</td>
							<td class="text-right">
								<?php echo e($post->lang); ?> <?php echo e(__('Star')); ?>

							</td>
							<td class="text-right">
								<div class="btn-group mb-2 float-right">
									<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo e(__('Action')); ?>

									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item has-icon edit-row" href="#" 
										data-action="<?php echo e(route('admin.testimonials.update',$post->id)); ?>" 
										data-title="<?php echo e($post->title ?? ''); ?>"
										data-slug="<?php echo e($post->slug ?? ''); ?>"
										data-comment="<?php echo e($post->excerpt->value ?? ''); ?>"  
										data-lang="<?php echo e($post->lang); ?>"
										data-toggle="modal" 
										data-target="#editModal"
										>
										<i class="fi fi-rs-edit"></i><?php echo e(__('Edit')); ?></a>

										
										<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('admin.testimonials.destroy',$post->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove')); ?></a>
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
         <form method="POST" action="<?php echo e(route('admin.testimonials.store')); ?>" class="ajaxform_instant_reload" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Create Testimonial')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Reviewer Name')); ?></label>
                  <input type="text" name="reviewer_name" maxlength="150" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Reviewer Position')); ?></label>
                  <input type="text" name="reviewer_position" class="form-control" required="" placeholder="CEO of Google" maxlength="50">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Reviewer Avatar')); ?></label>
                  <input type="file" name="reviewer_avatar" accept="image/*" class="form-control" required="">
               </div>
                <div class="form-group">
                  <label><?php echo e(__('Review Star')); ?></label>
                  <select class="form-control" name="star">
                  	<option value="5"><?php echo e(__('5 Star')); ?></option>
                  	<option value="4"><?php echo e(__('4 Star')); ?></option>
                  	<option value="3"><?php echo e(__('3 Star')); ?></option>
                  	<option value="2"><?php echo e(__('2 Star')); ?></option>
                  	<option value="1"><?php echo e(__('1 Star')); ?></option>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Comment')); ?></label>
                 <textarea class="form-control h-100" maxlength="500" name="comment" required=""></textarea>
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
               <h3><?php echo e(__('Edit Testimonial')); ?></h3>
            </div>
           <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Reviewer Name')); ?></label>
                  <input type="text" name="reviewer_name" id="reviewer_name" maxlength="150" class="form-control" required="">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Reviewer Position')); ?></label>
                  <input type="text" name="reviewer_position" id="reviewer_position" class="form-control" required="" placeholder="CEO of Google" maxlength="50">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Reviewer Avatar')); ?></label>
                  <input type="file" name="reviewer_avatar" accept="image/*" class="form-control" >
               </div>
                <div class="form-group">
                  <label><?php echo e(__('Review Star')); ?></label>
                  <select class="form-control" name="star" id="star">
                  	<option value="5"><?php echo e(__('5 Star')); ?></option>
                  	<option value="4"><?php echo e(__('4 Star')); ?></option>
                  	<option value="3"><?php echo e(__('3 Star')); ?></option>
                  	<option value="2"><?php echo e(__('2 Star')); ?></option>
                  	<option value="1"><?php echo e(__('1 Star')); ?></option>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Comment')); ?></label>
                 <textarea class="form-control h-100" maxlength="500" name="comment" id="comment" required=""></textarea>
               </div>
               
               <div class="form-group">
               	<button type="submit" class="btn btn-neutral  submit-button" ><?php echo e(__('Update')); ?></button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script type="text/javascript">
	$('.edit-row').on('click',function(){
		const title = $(this).data('title');
		const slug   = $(this).data('slug');
		const comment = $(this).data('comment');
		const lang = $(this).data('lang');
		const action =   $(this).data('action');

		$('#reviewer_name').val(title);
		$('#reviewer_position').val(slug);
		$('#star').val(lang);
		$('#comment').val(comment);

		$('.edit-modal').attr('action',action);
		
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/testimonial/index.blade.php ENDPATH**/ ?>