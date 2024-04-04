<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Menu List'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create Menu'),
      'url'=>'#',
      'components'=>'data-toggle="modal" data-target="#addRecord" id="add_record"',
      'is_button'=>true
   ]
]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
									<?php echo e($totalMenus); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-chart-tree mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Menus')); ?></h5>
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
									<?php echo e($totalActiveMenus); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-badge-check mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Active Menus')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers" id="total-inactive">
									<?php echo e($totalDraftMenus); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-box mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Draft Menu')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>   

<div class="row">
	<div class="col">
		<div class="card">
			<!-- Card header -->
			<div class="card-header border-0">
				<h3 class="mb-0"><?php echo e(__('Menu List')); ?></h3>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-2"><?php echo e(__('Menu Name')); ?></th>
							<th class="col-2"><?php echo e(__('Position')); ?></th>
							<th class="col-2 text-center"><?php echo e(__('Language')); ?></th>
							<th class="col-2"><?php echo e(__('Status')); ?></th>
							<th class="col-2"><?php echo e(__('Last Update')); ?></th>
							<th class="col-2 text-right"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>					
						<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<a href="<?php echo e(route('admin.menu.show',$menu->id)); ?>"><?php echo e($menu->name); ?></a>
							</td>
							<td class="text-left">
								<?php echo e($menu->position); ?>

							</td>
							<td class="text-center">
								<?php echo e($menu->lang); ?>

							</td>
							<td class="text-left">
								<span class="badge badge-<?php echo e($menu->status == 1 ? 'success' : 'danger'); ?>">
									<?php echo e($menu->status == 1 ? __('Active') : __('Draft')); ?>

								</span>
							</td>
							<td>
								<?php echo e($menu->updated_at->format('F-d-Y')); ?>

							</td>
							<td class="text-right">
								<a href="<?php echo e(route('admin.menu.show',$menu->id)); ?>" class="btn btn-neutral btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Edit Menu')); ?>"><i class="fi fi-rs-diagram-project mt-3 pt-3"></i></a>

								<a href="<?php echo e(route('admin.menu.show',$menu->id)); ?>" 
									class="edit-contact btn btn-sm btn-primary" 	      
									data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Customize Menu Items')); ?>"   	
									data-action="<?php echo e(route('admin.menu.update',$menu->id)); ?>" 
									data-name="<?php echo e($menu->name); ?>"  
									data-position="<?php echo e($menu->position); ?>"
									data-lang="<?php echo e($menu->lang); ?>"
									data-status="<?php echo e($menu->status); ?>"
									data-toggle="modal" 
									data-target="#editModal">
									<i class="fi fi-rs-edit"></i>
								</a>

								<a 
								class="delete-confirm btn btn-sm btn-danger" 
								href="javascript:void(0)" 
								data-action="<?php echo e(route('admin.menu.destroy',$menu->id)); ?>"
								data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Delete Menu')); ?>"   	
								><i class="fas fa-trash"></i></a>

																
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
         <form method="POST" action="<?php echo e(route('admin.menu.store')); ?>" class="ajaxform_instant_reload">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Create Menu')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Menu Name')); ?></label>
                  <input type="text" name="name" class="form-control" required="" placeholder="Example">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Menu Position')); ?></label>
                  <select class="form-control" name="position">
                  	<option value="main-menu"><?php echo e(__('Main Menu')); ?></option>
                  	<option value="footer-left" class="none"><?php echo e(__('Footer Left')); ?></option>
                  	<option value="footer-right" class="none"><?php echo e(__('Footer right')); ?></option>
                  	<option value="footer-center" class="none"><?php echo e(__('Footer Center')); ?></option>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Language')); ?></label>
                  <select class="form-control" name="language">
                  	<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languageKey => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  	<option value="<?php echo e($languageKey); ?>"><?php echo e($language); ?></option>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Menu Status')); ?></label>
                  <select class="form-control" name="status">
                    <option value="1"><?php echo e(__('Active')); ?></option>
                    <option value="0" selected=""><?php echo e(__('Draft')); ?></option>
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


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form type="POST" action="" class="edit-modal ajaxform_instant_reload">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Menu')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				 <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Menu Name')); ?></label>
                  <input type="text" id="name" name="name" class="form-control" required="" placeholder="Example">
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Menu Position')); ?></label>
                  <select class="form-control" name="position" id="position">
                  	<option value="main-menu"><?php echo e(__('Main Menu')); ?></option>
                  	<option value="footer-left" class="none"><?php echo e(__('Footer Left')); ?></option>
                  	<option value="footer-right" class="none"><?php echo e(__('Footer right')); ?></option>
                  	<option value="footer-center" class="none"><?php echo e(__('Footer Center')); ?></option>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Select Language')); ?></label>
                  <select class="form-control" name="language" id="language">
                  	<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languageKey => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  	<option value="<?php echo e($languageKey); ?>"><?php echo e($language); ?></option>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Menu Status')); ?></label>
                  <select class="form-control" name="status" id="status">
                    <option value="1"><?php echo e(__('Active')); ?></option>
                    <option value="0"><?php echo e(__('Draft')); ?></option>
                  </select>
               </div>
            </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
					<button type="submit" class="btn btn-primary submit-btn"><?php echo e(__('Save changes')); ?></button>
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
		const position = $(this).data('position');
		const language = $(this).data('lang');
		const status = $(this).data('status');
		const action = $(this).data('action');

		$('#name').val(name);
		$('#position').val(position);
		$('#language').val(language);
		$('#status').val(status);

		$('.edit-modal').attr('action',action);
		
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/menu/index.blade.php ENDPATH**/ ?>