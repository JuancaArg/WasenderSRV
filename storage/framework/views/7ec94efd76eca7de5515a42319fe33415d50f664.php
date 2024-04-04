<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',[
'title'=> __('Blogs'),
'buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create a blog post'),
		'url'=>route('admin.blog.create'),
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
									<?php echo e($totalPosts); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-blog-text mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Total Blogs')); ?></h5>
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
									<?php echo e($totalActivePosts); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-circle-book-open mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Active Blogs')); ?></h5>
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
									<?php echo e($totalInActivePosts); ?>

								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-comment-exclamation mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0"><?php echo e(__('Inactive Blogs')); ?></h5>
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
				<h3 class="mb-0"><?php echo e(__('Blogs')); ?></h3>
				<form action="" class="card-header-form">
					<div class="input-group">
						<input type="text" name="search" value="<?php echo e($request->search ?? ''); ?>" class="form-control" placeholder="title......">
						
						<div class="input-group-btn">
							<button class="btn btn-neutral btn-icon"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-3"><?php echo e(__('Title')); ?></th>
							<th class="col-3"><?php echo e(__('Url')); ?></th>
							<th class="col-1"><?php echo e(__('Status')); ?></th>
							<th class="col-2"><?php echo e(__('Created At')); ?></th>
							<th class="col-1 text-right"><?php echo e(__('Action')); ?></th>
						</tr>
					</thead>					
						<?php $__currentLoopData = $posts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-left">
								<img src="<?php echo e(asset($post->preview->value)); ?>" class="avatar rounded-square mr-3">
								<?php echo e(Str::limit($post->title,20)); ?>

							</td>
							<td class="text-left">
								<a href="<?php echo e(url('blog/'.$post->slug)); ?>" target="_blank"><?php echo e(Str::limit(url('blog/'.$post->slug),50)); ?></a>
							</td>
							
							<td class="text-left">
								<span class="badge badge-<?php echo e($post->status == 1 ? 'success' : 'danger'); ?>">
									<?php echo e($post->status == 1 ? __('Active') : __('Draft')); ?>

								</span>
							</td>
							<td>
								<?php echo e($post->created_at->format('F-d-Y')); ?>

							</td>
							<td class="text-right">
								<div class="btn-group mb-2 float-right">
									<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo e(__('Action')); ?>

									</button>
									<div class="dropdown-menu">

										<a class="dropdown-item has-icon" href="<?php echo e(route('admin.blog.edit',$post->id)); ?>"><i class="fi fi-rs-edit"></i><?php echo e(__('Edit Blog')); ?></a>
																				
										<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="<?php echo e(route('admin.blog.destroy',$post->id)); ?>"><i class="fas fa-trash"></i><?php echo e(__('Remove Blog')); ?></a>
									</div>
								</div>								
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<?php if(count($posts) == 0): ?>
				<div class="text-center mt-2">
					<div class="alert  bg-gradient-primary text-white">
						<span class="text-left"><?php echo e(__('!Opps no records found')); ?></span>
					</div>
				</div>
				<?php endif; ?>				
			</div>

			<div class="card-footer">
				<?php echo e($posts->appends($request->all())->links('vendor.pagination.bootstrap-5')); ?>

			</div>			
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/blogs/index.blade.php ENDPATH**/ ?>