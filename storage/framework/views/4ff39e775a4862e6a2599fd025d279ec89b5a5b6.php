<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'<i class="fa fa-backward"></i>&nbsp'. __('Back To Templates'),
		'url'=>url('/user/template'),
		'is_button'=>false
	],	
	[
		'name'=>'<i class="fa fa-backward"></i>&nbsp'. __('Back To Contacts'),
		'url'=>url('/user/contact'),
		'is_button'=>false
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
   <div class="col-12">
      <div class="row d-flex justify-content-between flex-wrap">
         <div class="col-sm-4">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 total-transfers total_sent">
                        0
                        </span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                           <i class="fas fa-mobile-alt"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                  <h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Sent')); ?></h5>
                  <p></p>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 total_records" id="total_records"><?php echo e(number_format(count($contacts))); ?></span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                           <i class="fas fa-signal"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                  <h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Contacts')); ?></h5>
                  <p></p>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="card card-stats">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <span class="h2 font-weight-bold mb-0 completed-transfers total-faild">
                        0
                        </span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                           <i class="fas fa-power-off"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                  <h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Faild')); ?></h5>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <div class="row mb-3">
               <div class="col-12">
                  <div class="float-left">
                     <h4><span class="total_sent">0</span>/<span class="total_records"><?php echo e(count($contacts)); ?></span></h4>
                  </div>
                  <div class="float-right">
                     <button class="btn  btn-neutral btn-sm  send_now" type="button"><i class="ni ni-send"></i>&nbsp&nbsp<?php echo e(__('Send To All')); ?></button>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 table-responsive">
                  <table class="table col-12">
                     <thead>
                        <tr>
                           <th class="col-3"><?php echo e(__('Receiver (To)')); ?></th>
                           <th class="col-3"><?php echo e(__('Device (From)')); ?></th>
                           <th class="col-3"><?php echo e(__('Template')); ?></th>
                           <th class="col-2"><?php echo e(__('Status')); ?></th>
                           <th class="col-1"><?php echo e(__('Actions')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="contact_form_row<?php echo e($key); ?>">
                           <form action="<?php echo e(url('user/sent-message-with-template')); ?>" method="POST" class="bulk_form form-<?php echo e($key); ?>" data-key="<?php echo e($key); ?>">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="contact" value="<?php echo e($contact->id); ?>">
                              <td><?php echo e($contact->name.' - '.$contact->phone); ?></td>
                              <td>
                                 <select class="form-control" name="device">
                                 <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($row->id); ?>" <?php echo e($row->id ==  $device->id ? 'selected' : ''); ?>><?php echo e($row->name. ' - '. $row->phone); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </td>
                              <td>
                                 <select class="form-control" name="template">
                                 <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($template_row->id); ?>" <?php echo e($template_row->id ==  $template->id ? 'selected' : ''); ?>><?php echo e($template_row->title); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </td>
                              <td>
                                 <span class="badge badge-warning badge_<?php echo e($key); ?> sendable"><?php echo e(__('Waiting')); ?></span>
                              </td>
                              <td>
                                 <div class="btn-group mb-2 float-right">
                                    <button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo e(__('Action')); ?>

                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item has-icon send-message submit-button" data-form=".form-<?php echo e($key); ?>" href="javascript:void(0)"><i class="ni ni-send"></i><?php echo e(__('Send Now')); ?></a>
                                       <a class="dropdown-item has-icon delete-form" href="javascript:void(0)" data-action=".contact_form_row<?php echo e($key); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove')); ?></a>
                                    </div>
                                 </div>
                              </td>
                           </form>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script type="text/javascript">
	
	$(document).on('click','.send_now',function(){
		var forms = $('.bulk_form').length;
	
		if (forms > 0) {
			$('.send_now').attr('disabled','disable');
			
			$('.bulk_form').each(function(){
				$(this).submit();
			})
		}
		else{
			$('.send_now').removeAttr('disabled');
			ToastAlert('error', 'No Record Avaible For Sent A Request');
		}

	});

	$(document).on('click','.delete-form',function(){
		
		const row= $(this).data('action');
		$(row).remove();
		
		var totalRecords = $('#total_records').text();
		totalRecords = parseInt(totalRecords)
		totalRecords = totalRecords-1;
		$('.total_records').html(parseInt(totalRecords))
	});

	$('.send-message').on('click',function(){
		var formclass = $(this).data('form');
		$(formclass).submit();
	});

	$('.bulk_form').on('submit',function(e){
		 e.preventDefault();
		 $.ajaxSetup({
		 	headers: {
		 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		 	}
		 });

		 let $savingLoader = 'Please wait...';

		 let $this = $(this);
		 let $submitBtn = $this.find('.submit-button');
		 let $oldSubmitBtn = $submitBtn.html();
		 const key = $(this).data('key');


		 
		 	$.ajax({
		 		type: 'POST',
		 		url: this.action,
		 		data: new FormData(this),
		 		dataType: 'json',
		 		contentType: false,
		 		cache: false,
		 		processData: false,
		 		beforeSend: function () {
		 			$submitBtn.html($savingLoader).attr('disabled', true);
		 			$('.badge_'+key).html('Sending.....')
		 		},
		 		success: function (res) {
		 			$submitBtn.html($oldSubmitBtn).attr('disabled', false);
		 			$('.badge_'+key).html('Sent 🚀');
		 			
		 			$('.badge_'+key).removeClass('badge-warning');
		 			$('.badge_'+key).addClass('badge-success');
		 			$('.badge_'+key).removeClass('sendable');
		 			$('.badge_'+key).addClass('msg-sent');
		 			$('.badge_'+key).removeClass('faild-form');
		 			
		 			var totalSent = $('.msg-sent').length;
		 			$('.total_sent').html(totalSent);
		 			NotifyAlert('success', res);
		 		},
		 		error: function (xhr) {
		 			$submitBtn.html($oldSubmitBtn).attr('disabled', false);
		 			showInputErrors(xhr.responseJSON);
		 			$('.badge_'+key).html('Sending Faild');
		 			$('.badge_'+key).addClass('badge-danger');
		 			$('.badge_'+key).addClass('faild-form');

		 			$('.total-faild').html($('.faild-form').length);
		 			NotifyAlert('error', xhr);
		 		}
		 	});
		 
	});

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/bulk.blade.php ENDPATH**/ ?>