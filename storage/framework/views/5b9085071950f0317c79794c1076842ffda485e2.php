<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Create Page'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.page.index'),
	]
 ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="row justify-content-center">
		<div class="col-lg-10 card-wrapper">	
			<?php if(Session::has('error')): ?>
			<div class="alert bg-gradient-danger text-white alert-dismissible fade show success-alert" role="alert">
			<span class="alert-text"><?php echo e(Session::get('error')); ?></span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		   </div>
		   <?php endif; ?>

		   <?php if(Session::has('success')): ?>
			<div class="alert bg-gradient-success text-white alert-dismissible fade show success-alert" role="alert">
			<span class="alert-text"><?php echo e(Session::get('success')); ?></span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		   </div>
		   <?php endif; ?>

		   <?php if(!Session::has('update-data')): ?>
			<!-- Alerts -->
			<div class="card">
				<div class="card-header">
					<div class="row w-100">
						<div class="col-6">
							<h3 class="mb-0"><?php echo e(__('Site Update')); ?></h3>
						</div>

						<div class="col-6">
							<h3 class="float-right"> <?php echo e(__('Current Version: '). env('APP_VERSION')); ?></h3>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label><?php echo e(__('Purchase Key')); ?></label>
						<input type="text" name="title" readonly="" value="<?php echo e(env
						('SITE_KEY')); ?>" class="form-control">
					</div>
					
		
					<div class="from-group  mt-3">						
						<form class="ajaxform_instant_reload" method="post" action="<?php echo e(route('admin.update.store')); ?>">
							<?php echo csrf_field(); ?>
							<button class="btn btn-neutral submit-btn"><i class="fi  fi-rs-search-alt"></i> <?php echo e(__('Check New Update')); ?></button>
						</form>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<div class="alert bg-gradient-primary text-white alert-dismissible fade show success-alert" role="alert">
				<span class="alert-text"><strong><?php echo e(__('Note')); ?></strong> <?php echo e(__('If you have customised the script from codebase do not use this option. you will lose your customization.')); ?> </span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>

			<?php if(Session::has('update-data')): ?>
			<div class="card">
				<div class="card-header">
					<div class="row w-100">
						<div class="col-6">
							<h3 class="mb-0"><?php echo e(__('Version')); ?></h3>
						</div>

						<div class="col-6">
							<h3 class="float-right"> <?php echo e(__('Update')); ?></h3>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							
						<tbody class="list">
							<tr>
								<td>
									v1
								</td>
								<td>								
									<form class="update_form" method="post" action="<?php echo e(route('admin.update.update',Session::get('update-data')['version'])); ?>">
										<?php echo csrf_field(); ?>
										<?php echo method_field('PUT'); ?>
									
									<button class="btn btn-neutral btn-sm float-right submit-btn"><i class="fi fi-rs-download"></i> <?php echo e(__('Update now')); ?></button>
									</form>
								</td>
							</tr>							
						</tbody>
						
						</table>
					</div>
				</div>
				<?php if(!empty(Session::get('update-data')['message'])): ?>
				<div class="card-footer">
					Note: <?php echo e(Session::get('update-data')['message'] ?? ''); ?>

				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>

		</div>		
	</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script type="text/javascript">
	"use strict";



let $update_form = $('.update_form');
let $updateLoader = '<div class="spinner-border spinner-border-sm" role="status">' +
    '<span class="visually-hidden">please wait...</span>' +
    '</div>';
$update_form.initFormValidation();

$(document).on('submit', '.update_form', function (e) {
	e.preventDefault();

	Swal.fire({
		title: 'Note!',
		text: "Before sent a request for update please take a backup of your site with database.",
		icon: 'warning',
		confirmButtonText: 'Procced for update',
		showCancelButton: true,
		confirmButtonColor: '#6777ef',
		cancelButtonColor: '#fc544b',
	}).then((result) => {
		if (result.value) {

			 let $this = $(this);
    let $submitBtn = $this.find('.submit-btn');
    let $oldSubmitBtn = $submitBtn.html();

    if ($update_form.valid()) {
        $.ajax({
            type: 'POST',
            url: this.action,
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $submitBtn.html($updateLoader).addClass('disabled').attr('disabled', true);
            },
            success: function (res) {
                $submitBtn.html($oldSubmitBtn).removeClass('disabled').attr('disabled', false);
                window.sessionStorage.hasPreviousMessage = true;
                window.sessionStorage.previousMessage = res.message ?? null;

                if (res.redirect) {
                    location.href = res.redirect;
                }
            },
            error: function (xhr) {
                $submitBtn.html($oldSubmitBtn).removeClass('disabled').attr('disabled', false);
                NotifyAlert('error', xhr.responseJSON);
                showInputErrors(xhr.responseJSON);
            }
        });
      }
		}
	});
});

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/update/index.blade.php ENDPATH**/ ?>