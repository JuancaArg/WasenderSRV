<?php $__env->startSection('head'); ?>
  <?php echo $__env->make('layouts.main.headersection',['title'=> 'Sent Request','prev'=>url('/user/whatsapp-templates'), 'buttons'=>[
	  [
		  'name'=>'Sample',
		  'url'=>'#',
		  'components'=>'data-toggle="modal" data-target="#exampleModal"',
		  'is_button'=>true
	  ]
    ]
  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      	
      	<?php if($info->header_text != null): ?>
      	<input type="text" disabled="" class="form-control" value="<?php echo e($info->header_text); ?>" style="background-color: transparent;border: 0">
      	<?php elseif($info->header == 'IMAGE'): ?>
      	<img src="<?php echo e(asset('https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/UL8I81pzwLA.png')); ?>" height="50">
      	<?php elseif($info->header == 'VIDEO'): ?>
      	<img src="<?php echo e(asset('https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/WbGV1ImQmlh.png')); ?>" height="50">
      	<?php elseif($info->header == 'DOCUMENT'): ?>
      	<img src="<?php echo e(asset('https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/FgGwlb24b_H.png')); ?>" height="50">
      	<?php endif; ?>
      	<br>
        <textarea class="form-control" style="height: 400px; background-color: transparent; border: 0"><?php echo $info->body; ?></textarea>
        <br>
        <small><?php echo e($info->footer); ?></small>
      </div>
     
    </div>
  </div>
</div>

<form method="POST" action="<?php echo e(route('user.submit-template',$info->id)); ?>">
					<?php echo csrf_field(); ?>
<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(str_replace('_',' ',$info->title)); ?></h4>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('SMS TO')); ?></label>
					<div class="col-sm-12 col-md-7">
					<input type="number" name="phone" class="form-control" value="<?php echo e(env('SENT_TO')); ?>">
				</div>
				</div>
			</div>
			<div class="card-body">
				
				
				
				<?php if($info->header == 'IMAGE' && $info->header != ''): ?>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Image Link')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="header_link" required="" class="form-control" placeholder="https://example.com/image.png">
					</div>
				</div>
				<?php endif; ?>
				<?php if($info->header == 'DOCUMENT' && $info->header != ''): ?>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Document Link')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="header_link" required="" class="form-control" placeholder="https://example.com/Document.pdf">
					</div>
				</div>
				<?php endif; ?>
				<?php if($info->header == 'VIDEO' && $info->header != ''): ?>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Video Link')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="header_link" required="" class="form-control" placeholder="https://example.com/video.pdf">
					</div>
				</div>
				<?php endif; ?>
				<?php if($info->header == 'AUDIO' && $info->header != ''): ?>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Audio Link')); ?></label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="header_link" required="" class="form-control" placeholder="https://example.com/audio.mp4">
					</div>
				</div>
				<?php endif; ?>
				
				<?php for($i=0; $i < $param_count_for_header; $i++): ?>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Header Property ')); ?> {(<?php echo e($i+1); ?>)}</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="header[]" required="" class="form-control" placeholder="">
					</div>
				</div>
				<?php endfor; ?>
				<hr>
				<?php for($i=0; $i < $param_count_for_body; $i++): ?>
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><?php echo e(__('Body Property ')); ?> {(<?php echo e($i+1); ?>)}</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" name="body[]" required="" class="form-control" placeholder="">
					</div>
				</div>
				<?php endfor; ?>
				
								

				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button type="submit" class="btn btn-outline-primary"><?php echo e(__('Send Request')); ?></button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/whatsapp/template/show.blade.php ENDPATH**/ ?>