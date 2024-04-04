<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> __('Dashboard')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xl-3 col-md-6">
		<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Orders')); ?></h5>
						<span class="h2 font-weight-bold mb-0" id="total-orders"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
							<i class="fi  fi-rs-boxes mt-1"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6">
		<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Pending Orders')); ?></h5>
						<span class="h2 font-weight-bold mb-0 mt-1" id="pending-orders"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
							<i class="fi fi-rs-box-alt mt-2"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6">
		<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Open Supports')); ?></h5>
						<span class="h2 font-weight-bold mb-0" id="open-support"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
							<i class="ni ni-calendar-grid-58"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6">
		<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Active Customers')); ?></h5>
						<span class="h2 font-weight-bold mb-0" id="active-customers"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
							<i class="fi fi-rs-users-alt mt-1"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-9">
		<div class="card">
			<div class="card-header">
				<h4><i class="fi fi-rs-shopping-cart text-primary"></i> <span class="ml-2"><?php echo e(__('Overview Of Sales Value')); ?></span></h4>
				<div class="card-header-action dropdown">
					<a href="#" data-toggle="dropdown" class="btn btn-neutral btn-sm dropdown-toggle overview-target"><?php echo e(__('Monthly')); ?></a>
					<ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
						<li><a href="#" class="dropdown-item overview-list" data-type="Weekly"><?php echo e(__('This Week')); ?></a></li>
						<li><a href="#" class="dropdown-item overview-list" data-type="Monthly"><?php echo e(__('This Month')); ?></a></li>
						<li><a href="#" class="dropdown-item overview-list" data-type="Yearly"><?php echo e(__('This Year')); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="card-body">
				<!-- Chart -->
				<div class="chart">
					<canvas id="sales-chart" class="chart-canvas"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="card">
			<div class="card-header card-bottom-min-25">
				<h4><i class="fi  fi-rs-chart-line-up text-primary"></i> <span class="ml-1"><?php echo e(__('Statics')); ?></span></h4>
			</div>
			<div class="card-body">
				<ul class="list-group list-group-flush list my--3">
					<li class="list-group-item px-0 ml-2">
						<div class="row align-items-center">                 
							<div class="col ml--2">
								<h4 class="mb-0 text-muted">
								 <i class="fi  fi-rs-network-cloud text-primary"></i>	<?php echo e(__('WA Server Status')); ?>

								</h4>
								<span id="server-status"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></span>
								
							</div>
						</div>
					</li>
					<li class="list-group-item px-0 ml-2">
						<div class="row align-items-center">                 
							<div class="col ml--2">
								<h4 class="mb-0 text-muted">
								 <i class="fi fi-rs-devices text-primary"></i>	<?php echo e(__('Active Devices')); ?>

								</h4>
								<span class="text-success">●</span>
								<small id="active-devices"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></small>
							</div>
						</div>
					</li>
					<li class="list-group-item px-0 ml-2">
						<div class="row align-items-center">                 
							<div class="col ml--2">
								<h4 class="mb-0 text-muted">
									<i class="fi  fi-rs-trash text-primary"></i> <?php echo e(__('Junk Devices')); ?>

								</h4>
								<span class="text-danger">●</span>
								<small id="junk-devices"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></small>
							</div>
						</div>
					</li>
					<li class="list-group-item px-0 ml-2">
						<div class="row align-items-center">                 
							<div class="col ml--2">
								<h4 class="mb-0 text-muted">
									<i class="fi   fi-rs-headphones text-primary"></i> <?php echo e(__('Pending Tickets')); ?>

								</h4>
								<span class="text-success">●</span>
								<small id="pending-tickets"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></small>
							</div>
						</div>
					</li>
					<li class="list-group-item px-0 ml-2">
						<div class="row align-items-center">                 
							<div class="col ml--2">
								<h4 class="mb-0 text-muted">
								 <i class="fi  fi-rs-comments text-primary"></i>	<?php echo e(__('Today\'s  Messages')); ?>

								</h4>
								<span class="text-success">●</span>
								<small id="todays-messages"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></small>
							</div>
						</div>
					</li>
					<li class="list-group-item px-0 ml-2">
						<div class="row align-items-center">                 
							<div class="col ml--2">
								<h4 class="mb-0 text-muted">
									<i class="fi fi-rs-users-alt text-primary"></i> <?php echo e(__('New Users')); ?>

								</h4>
								<span class="text-success">●</span>
								<small id="new-users"><img src="<?php echo e(asset('uploads/loader.gif')); ?>"></small>
							</div>
						</div>
					</li>


				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	
	<div class="col-sm-4">
		<div class="card">
			<div class="card-header">
				<h4><i class="fi  fi-rs-shopping-bag text-primary"></i> <span class="ml-1"><?php echo e(__('Recent Orders')); ?></span></h4>
			</div>
			<div class="card-body">
				<ul class="list-group list-group-flush list my--3 recent-order-list">
									
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="card">
			<div class="card-header bg-transparent">
				<div class="row align-items-center">
					<div class="col">
						<h2 class="h3 mb-0"><i class="fi-rs-hand-holding-box text-primary"></i> <span class="ml-2"><?php echo e(__('Popular Plan')); ?></span></h2>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<!-- Projects table -->
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th class="col-5 text-left" ><?php echo e(__('Plan')); ?></th>
								<th class="col-2 text-right" ><?php echo e(__('Active Users')); ?></th>
								<th class="col-2 text-right" ><?php echo e(__('Sales')); ?></th>
								<th class="col-3 text-right" ><?php echo e(__('Total Amount')); ?></th>

							</tr>
						</thead>
						<tbody class="list popular-list">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="static-data" value="<?php echo e(route('admin.dashboard.static')); ?>"> 
<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>"> 
<input type="hidden" id="amount_text" value="Amount">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/vendor/chart.js/dist/chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/canvas-confetti/confetti.browser.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('bottomjs'); ?>
<script src="<?php echo e(asset('assets/js/pages/admin/dashboard.js?v=1')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>