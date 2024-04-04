<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'. __('Add Record'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#addRecord" id="add_record"',
		'is_button'=>true
	],
	[
		'name'=>'<i class="fa fa-file-csv"></i>&nbsp'. __('Import Contracts'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#exampleModal" id="import_record"',
		'is_button'=>true
	],
	[
		'name'=>'<i class="fa fa-clipboard-list"></i>&nbsp'. __('Messages Log'),
		'url'=>url('/user/bulk-message'),
		'is_button'=>false
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-group">
					<label><?php echo e(__('Select Number (From)')); ?></label>
					<select class="form-control" id="device_import"  name="device" required="">
						<option value="" disabled="" selected=""><?php echo e(__('Select Number')); ?></option>
						<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($device->id); ?>">+<?php echo e($device->phone); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="form-group none csv_row">
					<label><?php echo e(__('Select CSV File')); ?> <a href="<?php echo e(asset('uploads/demo.csv')); ?>" download="" class="text-primary">(<?php echo e(__('Download Sample')); ?>)</a></label>
					<input type="file" name="csv" class="form-control csv" required="" accept=".csv">
				</div>

			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-outline-primary col-12" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
				
			</div>	
		</div>
	</div>
</div>

<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4><?php echo e(__('Add Custom Row')); ?></h4>
			</div>	
			<div class="modal-body">
				<div class="form-group">
					<label><?php echo e(__('Select Number (From)')); ?></label>
					<select class="form-control" id="device_custom"  name="device" required="">
						<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($device->id); ?>">+<?php echo e($device->phone); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="form-group">
					<label><?php echo e(__('Receiver (To)')); ?></label>
					<input type="number" class="form-control" required="" id="to">
					<span class="text-danger to_alert none"><?php echo e(__('Add The Whatsapp Number')); ?></span>
				</div>
				<div class="form-group">
					<label><?php echo e(__('Message')); ?></label>
					<textarea class="form-control" required="" id="wa_message" maxlength="1000"></textarea>
					<span class="text-danger message_alert none"><?php echo e(__('Add The Message')); ?></span>
				</div>
			</div>
			<div class="modal-header">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
				<button class="btn btn-outline-primary add_custom_row" type="submit"><?php echo e(__('Add Now')); ?></button>
			</div>	
		</div>
	</div>
</div>

<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			
			<div class="card-body">
				<div class="row mb-3">
					<div class="col-12">
						<div class="float-left">
							<h4><span class="total_sent">0</span>/<span class="total_records">0</span> (<small><?php echo e(__('Per Request Charge:')); ?> <?php echo e(transactionCharge('bulk_message')); ?></small>)</h4>
						</div>

						<div class="float-right">
							<button class="btn  btn-neutral btn-sm  send_now" type="button"><i class="ni ni-send"></i>&nbsp&nbsp<?php echo e(__('Send Now')); ?></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-3"><?php echo e(__('Receiver (To)')); ?></th>
									<th class="col-2"><?php echo e(__('Device (From)')); ?></th>
									<th class="col-7"><?php echo e(__('Message')); ?></th>
									<th class="col-2"><?php echo e(__('Status')); ?></th>
								</tr>
							</thead>
							<tbody class="tbody">
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" id="bulk_message_link" value="<?php echo e(route('user.bulk-message.store')); ?>">
<?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/js/pages/bulk/jquery.csv.min.js')); ?>" ></script>
<script src="<?php echo e(asset('assets/js/pages/bulk/bulkmessage.js')); ?>" ></script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/bulk/multiple.blade.php ENDPATH**/ ?>