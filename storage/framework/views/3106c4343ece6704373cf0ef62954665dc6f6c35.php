<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title' => __('Contact List'),
'buttons' =>[
	[
		'name'=>__('Create Contact'),
		'url'=> route('user.contact.create'),
	],
	[
		'name'=>__('Contact Groups'),
		'url'=> route('user.group.index'),
	],
	[
		'name'=>__('Import Contacts'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#import-contact"', 
		'is_button'=>true
	],
	[
		'name'=>__('Sent Bulk With Template'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#send-template-bulk" id="send-template-bulks"',
		'is_button'=>true
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('topcss'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/select2/dist/css/select2.min.css')); ?>">

<?php $__env->stopPush(); ?>
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
									<?php echo e($total_contacts); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-address-book mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Contacts')); ?></h5>
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
								  <?php echo e($limit); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fas fa-signal"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Contacts statics')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			
		</div>

		<?php if(count($contacts ?? []) > 0): ?>
		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-3"><?php echo e(__('Contact Name')); ?></th>
									<th class="col-4"><?php echo e(__('Group')); ?></th>
									<th class="col-3 text-right"><?php echo e(__('Whatsapp Number')); ?></th>
									
									<th class="col-2 text-right"><?php echo e(__('Action')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $contacts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td>
										<?php echo e($contact->name); ?>

									</td>
									<td>
										<?php $__currentLoopData = $contact->groupcontact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupcontact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<span class="badge badge-primary"><?php echo e($groupcontact->name); ?></span>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</td>
									<td class="text-right">
										<?php echo e($contact->phone); ?>

									</td>									
									<td>
										<div class="btn-group mb-2 float-right">
											<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<?php echo e(__('Action')); ?>

											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item has-icon edit-contact" href="#" 
												data-action="<?php echo e(route('user.contact.update',$contact->id)); ?>" 
												data-name="<?php echo e($contact->name); ?>"  
												data-phone="<?php echo e($contact->phone); ?>"
												data-groupid="<?php echo e($contact->groupcontact[0]->id ?? ''); ?>"
												data-toggle="modal" 
												data-target="#editModal"
												>
												<i class="ni ni-align-left-2"></i><?php echo e(__('Edit')); ?></a>
												<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('user.contact.destroy',$contact->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove Number')); ?></a>
											</div>
										</div>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($contacts->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Opps There Is No Contact Found....')); ?></span></div>
		<?php endif; ?>
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form type="POST" action="" class="edit-modal ajaxform_instant_reload">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Contact')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label><?php echo e(__('User Name')); ?></label>
						<input type="text" name="name" id="user_name" placeholder="Jhone Doe" maxlength="50" class="form-control" required="">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Whatsapp Number')); ?></label>
						<input type="number" name="phone" id="user_phone" placeholder="<?php echo e(__('Enter Phone Number With Country Code')); ?>" maxlength="15" class="form-control">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Select Group')); ?></label>
						<select name="group" class="form-control" id="group-list">
							<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<div class="modal fade" id="import-contact" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form type="POST" action="<?php echo e(route('user.contact.import')); ?>" class="ajaxform_instant_reload" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Import Contact')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label><?php echo e(__('Select CSV')); ?> <a href="<?php echo e(asset('uploads/demo-contact.csv')); ?>" download=""><?php echo e(__('(Download Sample)')); ?></a></label>
						<input type="file" accept=".csv" name="file"  class="form-control" required="">
					</div>	

					<div class="form-group">
						<label><?php echo e(__('Select Group')); ?></label>
						<select name="group" class="form-control" >
							<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>									
				</div>

				

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
					<button type="submit" class="btn btn-primary submit-btn"><?php echo e(__('Import')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>




<div class="modal fade" id="send-template-bulk" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
	<div class="modal-dialog">
		<?php if(count($templates) > 0 && count($contacts) > 0): ?>
		<div class="modal-content">
			
			<form type="POST" action="<?php echo e(route('user.contact.send-template-bulk')); ?>" class="ajaxform bulk_send_form">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="page_url" value="<?php echo e(url()->full()); ?>">
				
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Send Bulk Message With Template')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
					<div class="form-group">
						<label><?php echo e(__('Select Template')); ?></label>
						<select  class="form-control" name="template">
							<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($template->id); ?>"><?php echo e($template->title); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Select Device')); ?></label>
						<select  class="form-control" name="device">
							<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($device->id); ?>"><?php echo e($device->name); ?> - <?php echo e($device->phone); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					
					<div class="form-group receivers">
						<label><?php echo e(__('Select Receivers')); ?></label>
						<select  class="form-control select2" name="contacts[]" multiple="">
							<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conatct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($conatct->id); ?>">(<?php echo e($conatct->name); ?>) - <?php echo e($conatct->phone); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					
					<div class="form-group d-flex">
						<label class="custom-toggle custom-toggle-primary">
							<input type="checkbox"  name="sentall" id="plain-text"  data-target=".plain-title" class="save-template">
							<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
						</label>
						<label class="mt-1 ml-1" for="plain-text"><h4><?php echo e(__('Sent this template to all user?')); ?></h4></label>
					</div>
					

				</div>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-neutral submit-btn float-right"><?php echo e(__('Sent Now')); ?></button>
				</div>
			</form>
		</div>
		<?php else: ?>
		<div class="alert  bg-gradient-primary text-white"><span class="text-left"><?php echo e(__('Create some template and contacts')); ?></span></div>
		<?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('topjs'); ?>
<script src="<?php echo e(asset('assets/vendor/select2/dist/js/select2.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/js/pages/user/contact.js?V=1')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/contact/index.blade.php ENDPATH**/ ?>