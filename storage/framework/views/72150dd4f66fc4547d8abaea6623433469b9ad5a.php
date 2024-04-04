<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Edit Language'),
'buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Add Translation Key'),
		'url'=>'#',
		'components'=>'data-toggle="modal" data-target="#addRecord" id="add_record"',
		'is_button'=>true
	],
	[
	     'name'=> __('Back'),
	     'url'=>route('admin.language.index'),
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
            <h3 class="mb-0"><?php echo e(__('Languages')); ?></h3>
         </div>
         <form class="ajaxform" action="<?php echo e(route('admin.language.update',$id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <!-- Light table -->
            <div class="table-responsive">
               <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                     <tr>
                        <th class="col-6"><?php echo e(__('Translation Key')); ?></th>
                        <th class="col-6"><?php echo e(__('Translated Value')); ?></th>
                     </tr>
                  </thead>
                  <?php $__currentLoopData = $posts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <td>
                        <?php echo e($key); ?>

                     </td>
                     <td>
                        <input type="text" name="values[<?php echo e($key); ?>]" class="form-control" value="<?php echo e($value); ?>">
                     </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-outline-primary submit-button float-right mb-3" ><?php echo e(__('Update Changes')); ?></button>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="POST" action="<?php echo e(url('admin/language/addkey')); ?>" class="ajaxform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($id); ?>">
            <div class="modal-header">
               <h3><?php echo e(__('Add Key')); ?></h3>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label><?php echo e(__('Key')); ?></label>
                  <input type="text" name="key" class="form-control" required>
               </div>
               <div class="form-group">
                  <label><?php echo e(__('Value')); ?></label>
                  <input type="text" name="value" class="form-control" required>
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-outline-primary col-12 submit-button" ><?php echo e(__('Create Now')); ?></button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/admin/language/show.blade.php ENDPATH**/ ?>