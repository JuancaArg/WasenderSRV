<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Categories'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create a partner'),
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
									<?php echo e($totalBrands); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-elevator mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Partners')); ?></h5>
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
									<?php echo e($activeBrands); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-badge-check mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Active Partners')); ?></h5>
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
									<?php echo e($inActiveBrands); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-circle-cross mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Inactive Partners')); ?></h5>
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
				<h3 class="mb-0"><?php echo e(__('Partners / Brands')); ?></h3>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-2"><?php echo e(__('Image')); ?></th>
							<th class="col-3"><?php echo e(__('Url')); ?></th>
							<th class="col-1"><?php echo e(__('Type')); ?></th>
							<th class="col-2"><?php echo e(__('Status')); ?></th>
							<th class="col-2"><?php echo e(__('Created At')); ?></th>
							<th class="col-2 text-right"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>					
						<?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<img src="<?php echo e(asset($row->slug)); ?>" class="avatar rounded-square w-70-per">
							</td>
							<td class="text-left">
								<?php echo e($row->title); ?>

							</td>
							<td class="text-left">
								<?php echo e($row->lang == 'en' ? 'Partner' : $row->lang); ?>

							</td>
							
							<td class="text-left">
								<span class="badge badge-<?php echo e($row->status == 1 ? 'success' : 'danger'); ?>">
									<?php echo e($row->status == 1 ? __('Active') : __('Draft')); ?>

								</span>
							</td>
							<td>
								<?php echo e($row->created_at->format('F-d-Y')); ?>

							</td>
							<td class="text-right">
								<div class="btn-group mb-2 float-right">
									<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo e(__('Action')); ?>

									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item has-icon edit-row" href="#" 
										data-action="<?php echo e(route('admin.partner.update',$row->id)); ?>" 
										data-url="<?php echo e($row->title); ?>"  
										data-type="<?php echo e($row->lang); ?>"  
										
										data-status="<?php echo e($row->status); ?>"
										data-toggle="modal" 
										data-target="#editModal"
										>
										<i class="fi fi-rs-edit"></i><?php echo e(__('Edit')); ?></a>

										
										<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('admin.partner.destroy',$row->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove')); ?></a>
									</div>
								</div>								
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<?php if(count($brands) == 0): ?>
				<div class="text-center mt-2">
					<div class="alert  bg-gradient-primary text-white">
						<span class="text-left"><?php echo e(__('!Opps no records found')); ?></span>
					</div>
				</div>
				<?php endif; ?>				
			</div>			
		</div>
	</div>
</div>


<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(route('admin.partner.store')); ?>" class="ajaxform_instant_reload" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Create Partner')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Brand Url')); ?></label>
                  <input type="text" name="url" class="form-control" >
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Brand image')); ?></label>
                  <input type="file" accept="image/*" name="image" required="" class="form-control" >
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Type')); ?></label>
                  <select class="form-control" name="type">
                  	<option value="partner"><?php echo e(__('Partner / Brand')); ?></option>
                  	<option value="integration"><?php echo e(__('Integration Partner')); ?></option>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Status')); ?></label>
                  <select class="form-control" name="status">
                  	<option value="1"><?php echo e(__('Active')); ?></option>
                  	<option value="0"><?php echo e(__('InActive')); ?></option>
                  </select>
               </div>
               
               
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-neutral submit-button" ><?php echo e(__('Create Now')); ?></button>
            </div>
         </form>
      </div>
   </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="" class="ajaxform_instant_reload edit-form">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="modal-header">
               <h3><?php echo e(__('Edit Partner')); ?></h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label><?php echo e(__('Brand Url')); ?></label>
                  <input type="text" name="url" class="form-control"  id="url">
               </div>
                <div class="form-group">
                  <label><?php echo e(__('Type')); ?></label>
                  <select class="form-control" name="type" id="type" required="">
                  	<option value="partner"><?php echo e(__('Partner / Brand')); ?></option>
                  	<option value="integration"><?php echo e(__('Integration Partner')); ?></option>
                  </select>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Status')); ?></label>
                  <select class="form-control" name="status" id="status">
                  	<option value="1"><?php echo e(__('Active')); ?></option>
                  	<option value="0"><?php echo e(__('InActive')); ?></option>
                  </select>
               </div>               
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-neutral submit-button" ><?php echo e(__('Update Now')); ?></button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/js/pages/admin/brand.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/brand/index.blade.php ENDPATH**/ ?>