<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title' => __('Group List'),
'buttons' =>[
	[
		'name'=>__('Create Group'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#create-modal" ',
		'is_button'=>true
	],
	[
		'name'=>__('Contact List'),
		'url'=> route('user.contact.index'),
	],
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="row d-flex justify-content-between flex-wrap">
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-device">
									<?php echo e($total_groups ?? 0); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-address-book mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Groups')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-active">
								  <?php echo e($limit ?? 0); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fas fa-signal"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Groups statics')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			
		</div>

		<?php if(count($groups ?? []) > 0): ?>
		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-3"><?php echo e(__('Group Name')); ?></th>
									<th class="col-7 text-right"><?php echo e(__('Total Contact Numbers')); ?></th>
									
									<th class="col-2 text-right"><?php echo e(__('Action')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $groups ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td>
										<?php echo e($group->name); ?>

									</td>
									<td class="text-right">
										<?php echo e($group->groupcontacts_count); ?>

									</td>									
									<td>
										<div class="btn-group mb-2 float-right">
											<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<?php echo e(__('Action')); ?>

											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item has-icon edit-contact" href="#" 
												data-action="<?php echo e(route('user.group.update',$group->id)); ?>" 
												data-name="<?php echo e($group->name); ?>"  
												
												data-toggle="modal" 
												data-target="#editModal"
												>
												<i class="ni ni-align-left-2"></i><?php echo e(__('Edit')); ?></a>
												<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('user.group.destroy',$group->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove Number')); ?></a>
											</div>
										</div>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($groups->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Opps There Is No Groups Found....')); ?></span></div>
		<?php endif; ?>
	</div>
</div>

<div class="modal fade" id="create-modal" tabindex="-1" aria-labelledby="create-modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form type="POST" action="<?php echo e(route('user.group.store')); ?>" class="edit-modal ajaxform_instant_reload">
				<?php echo csrf_field(); ?>
				

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Create Group')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label><?php echo e(__('Group Name')); ?></label>
						<input type="text" name="name" placeholder="<?php echo e(__('Enter your group name')); ?>" maxlength="50" class="form-control" required="">
					</div>
					

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
					<button type="submit" class="btn btn-primary submit-btn"><?php echo e(__('Save')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="edit-modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form type="POST" action="" class="edit-modal ajaxform_instant_reload">
				<?php echo csrf_field(); ?>
				<?php echo method_field("PUT"); ?>
				

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Group')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label><?php echo e(__('Group Name')); ?></label>
						<input type="text" name="name" placeholder="<?php echo e(__('Enter your group name')); ?>" maxlength="50" id="groupname" class="form-control groupname" required="">
					</div>
					

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
					<button type="submit" class="btn btn-primary submit-btn"><?php echo e(__('Save')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<script type="text/javascript">
	$('.edit-contact').on('click',function(){
		const name = $(this).data('name');
		const action = $(this).data('action');

		$('.groupname').val(name);
		
		$('.edit-modal').attr('action',action);
	});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/group/index.blade.php ENDPATH**/ ?>