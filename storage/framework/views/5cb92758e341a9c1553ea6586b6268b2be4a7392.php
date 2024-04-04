<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> 'Automatic Replies','buttons'=>[
[
'name'=>'<i class="fas fa-plus"></i> &nbspCreate Reply',
'url'=>'#',
'components'=>'data-toggle="modal" data-target="#send-template-bulk" id="send-template-bulks"',
'is_button'=>true
]
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
								<span class="h2 font-weight-bold mb-0 total-transfers" >
									<?php echo e(number_format($total_replies)); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fas  fa-robot"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Replies')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers" >
									<?php echo e(number_format($template_replies)); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-test mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Template Replies')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers" >
									<?php echo e(number_format($text_replies)); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class=" fi-rs-text-check mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Text Replies')); ?></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<?php if(getUserPlanData('chatbot') == false): ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="alert bg-gradient-primary text-white alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="fi  fi-rs-info text-white"></i></span>
					<span class="alert-text">
						<strong><?php echo e(__('!Opps ')); ?></strong> 

						<?php echo e(__('Chatbot features is not available in your subscription plan')); ?>

						
					</span>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if(count($replies ?? []) == 0): ?>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<center>
							<img src="<?php echo e(asset('assets/img/404.jpg')); ?>" height="500">
							<h3 class="text-center"><?php echo e(__('!Opps You Have Not Created Automatic Reply')); ?></h3>
							<a href="#" data-toggle="modal" data-target="#send-template-bulk" id="send-template-bulks" class="btn btn-neutral"><i class="fas fa-plus"></i> <?php echo e(__('Create a reply')); ?></a>
						</center>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th><?php echo e(__('Keyword')); ?></th>
									<th><?php echo e(__('Device')); ?></th>
									<th><?php echo e(__('Reply Type')); ?></th>
									<th><?php echo e(__('Keyword Match Type')); ?></th>
									<th class="text-right"><?php echo e(__('Action')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								<?php $__currentLoopData = $replies ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($reply->keyword); ?></td>
									<td><?php echo e($reply->device->phone ?? ''); ?></td>
									<td><?php echo e($reply->reply_type); ?></td>
									<td><?php echo e($reply->match_type == 'equal' ? 'Whole Word' : 'Similar Word'); ?></td>
									<td>
										<div class="btn-group mb-2 float-right">
											<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<?php echo e(__('Action')); ?>

											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item has-icon edit-reply" href="#" 
												data-action="<?php echo e(route('user.chatbot.update',$reply->id)); ?>" 
												data-templateid="<?php echo e($reply->template_id); ?>"
												data-keyword="<?php echo e($reply->keyword); ?>"  
												data-reply="<?php echo e($reply->reply); ?>"
												data-matchtype="<?php echo e($reply->match_type); ?>"
												data-replytype="<?php echo e($reply->reply_type); ?>"
												data-device="<?php echo e($reply->device_id); ?>"
												data-toggle="modal" 
												data-target="#editModal"
												>
												<i class="ni ni-align-left-2"></i><?php echo e(__('Edit')); ?></a>
												<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('user.chatbot.destroy',$reply->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove Reply')); ?></a>
											</div>
										</div>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="d-flex justify-content-center"><?php echo e($replies->links('vendor.pagination.bootstrap-4')); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>

<div class="modal fade" id="send-template-bulk" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form type="POST" action="<?php echo e(route('user.chatbot.store')); ?>" class="ajaxform_instant_reload">
				<?php echo csrf_field(); ?>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Create Reply')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label><?php echo e(__('Keyword')); ?></label>
						<input type="text" name="keyword" class="form-control" name="keyword" maxlength="50">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Select Device')); ?></label>
						<select  class="form-control" name="device">
							<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($device->id); ?>"><?php echo e($device->name . ' - '. $device->phone); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Reply Type')); ?></label>
						<select  class="form-control reply_type" name="reply_type">
							<option value="text"><?php echo e(__('Plain Text')); ?></option>
							<option value="template"><?php echo e(__('Template')); ?></option>
						</select>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Keyword Match Type')); ?></label>
						<select  class="form-control" name="match_type">
							<option value="equal"><?php echo e(__('Whole Words')); ?></option>
							
						</select>
					</div>
					<div class="form-group text-area">
						<label><?php echo e(__('Reply')); ?></label>
						<textarea class="form-control" name="reply" maxlength="1000"></textarea>
					</div>			
					<div class="form-group templates none">
						<label><?php echo e(__('Select Template')); ?></label>
						<select  class="form-control" name="template">
							<?php $__currentLoopData = $templates ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($template->id); ?>"><?php echo e($template->title); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-neutral submit-btn float-right"><?php echo e(__('Create Now')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form type="POST" action="" class="ajaxform_instant_reload edit-reply-form">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Reply')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="form-group">
						<label><?php echo e(__('Keyword')); ?></label>
						<input type="text" name="keyword" class="form-control" id="keyword" required="" maxlength="50" name="keyword">
					</div>
					<div class="form-group">
						<label><?php echo e(__('Select Device')); ?></label>
						<select  class="form-control" name="device" id="device">
							<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($device->id); ?>"><?php echo e($device->name . ' - '. $device->phone); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					
					<div class="form-group">
						<label><?php echo e(__('Reply Type')); ?></label>
						<select  class="form-control reply_type" name="reply_type" id="replytype">
							<option value="text"><?php echo e(__('Plain Text')); ?></option>
							<option value="template"><?php echo e(__('Template')); ?></option>
						</select>
					</div>
					<div class="form-group">
						<label><?php echo e(__('Keyword Match Type')); ?></label>
						<select  class="form-control" name="match_type" id="matchtype">
							<option value="equal"><?php echo e(__('Whole Words')); ?></option>
							
						</select>
					</div>
					<div class="form-group text-area" id="reply-area">
						<label><?php echo e(__('Reply')); ?></label>
						<textarea class="form-control" name="reply" maxlength="1000" id="reply"></textarea>
					</div>			
					<div class="form-group templates none" id="templates-area">
						<label><?php echo e(__('Select Template')); ?></label>
						<select  class="form-control" name="template" id="templateid">
							<?php $__currentLoopData = $templates ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($template->id); ?>"><?php echo e($template->title); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-neutral submit-btn float-right"><?php echo e(__('Update Reply')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/js/pages/user/chatbot.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/chatbot/index.blade.php ENDPATH**/ ?>