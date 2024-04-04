<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> __('Page Settings')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-12 col-sm-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4><?php echo e(__('Page settings')); ?></h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-4">
						<ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true"><?php echo e(__('Primary Settings')); ?></a>
							</li>
							<li class="nav-item mt-2">
								<a class="nav-link" id="profile-tab4" data-toggle="tab" href="#header-footer" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Header Footer Settings')); ?></a>
							</li>
							<li class="nav-item mt-2">
								<a class="nav-link" id="profile-tab4" data-toggle="tab" href="#why-choose" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Why choose Settings')); ?></a>
							</li>
							<li class="nav-item mt-2">
								<a class="nav-link" id="profile-tab4" data-toggle="tab" href="#home-page" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Home Page')); ?></a>
							</li>
							<li class="nav-item mt-2">
								<a class="nav-link" id="profile-tab4" data-toggle="tab" href="#contact-page" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Contact Page')); ?></a>
							</li>
							
							<li class="nav-item mt-2 none">
								<a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false"></a>
							</li>
						</ul>
					</div>
					<div class="col-12 col-sm-12 col-md-8">
						<div class="tab-content no-padding" id="myTab2Content">
							<div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
								<form method="POST" action="<?php echo e(route('admin.page-settings.update','primary_data')); ?>" class="ajaxform" enctype="multipart/form-data">
									<?php echo method_field('PUT'); ?>
									<div class="form-group">
										<label><?php echo e(__('Site Logo - Deep Colour')); ?></label>
										<input type="file" accept="image/*" name="logo" class="form-control">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Site Logo - light colour')); ?></label>
										<input type="file" accept="image/*" name="footer_logo" class="form-control">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Favicon')); ?></label>
										<input type="file" accept="image/*" name="favicon" class="form-control">
									</div>
									
									<div class="form-group">
										<label><?php echo e(__('Contact Email address')); ?></label>
										<input type="email" name="contact_email" value="<?php echo e($primary_data->contact_email ?? ''); ?>" class="form-control" required="">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Contact Phone')); ?></label>
										<input type="number" name="contact_phone"  class="form-control" required value="<?php echo e($primary_data->contact_phone ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Office Location')); ?></label>
										<input type="text" name="address" class="form-control" required="" value="<?php echo e($primary_data->address ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Facbook  Profile Link')); ?></label>
										<input type="url" name="socials[facebook]" class="form-control" value="<?php echo e($primary_data->socials->facebook ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Youtube  Profile Link')); ?></label>
										<input type="url" name="socials[youtube]" class="form-control" value="<?php echo e($primary_data->socials->youtube ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Twitter  Profile Link')); ?></label>
										<input type="url" name="socials[twitter]" class="form-control" value="<?php echo e($primary_data->socials->twitter ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Instagram  Profile Link')); ?></label>
										<input type="url" name="socials[instagram]" class="form-control" value="<?php echo e($primary_data->socials->instagram ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Linkedin Profile  Link')); ?></label>
										<input type="url" name="socials[linkedin]" class="form-control" value="<?php echo e($primary_data->socials->linkedin ?? ''); ?>">
									</div>
									<div class="form-group">
										<button class="btn btn-neutral submit-button"><?php echo e(__('Update')); ?></button>
									</div>

								</form>
							</div>
							<div class="tab-pane fade" id="why-choose" role="tabpanel" aria-labelledby="profile-tab4">
								<form method="POST" action="<?php echo e(route('admin.page-settings.update','why-choose')); ?>" class="ajaxform" enctype="multipart/form-data">
									<?php echo method_field('PUT'); ?>
									<div class="form-group">
										<label><?php echo e(__('Section Title')); ?></label>
										<input type="text" name="data[title]" class="form-control" value="<?php echo e($why_choose->title ?? ''); ?>" required="" placeholder="<?php echo e(__('Why choose QServe 🎖️')); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Section Sub Title')); ?></label>
										<input type="text" name="data[subtitle]" class="form-control" value="<?php echo e($why_choose->subtitle ?? ''); ?>" required="">
									</div>
									
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Action Left Button Image')); ?></label>
												<input type="file" name="left_button_image" accept="image/*" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="text" name="data[left_button_link]" class="form-control" value="<?php echo e($why_choose->left_button_link ?? ''); ?>">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Action Right Button Image')); ?></label>
												<input type="file" name="right_button_image" accept="image/*" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="text" name="data[right_button_link]" class="form-control" value="<?php echo e($why_choose->right_button_link ?? ''); ?>">
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-body">
											<div class="form-row">
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Left Block Image')); ?></label>
														<input type="file" name="left_block_image" accept="image/*" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Block Title')); ?></label>
														<input type="text" name="data[left_block_title]" class="form-control" value="<?php echo e($why_choose->left_block_title ?? ''); ?>" placeholder="<?php echo e(__('Active Users')); ?>">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Block Counter Value')); ?></label>
														<input type="text" name="data[left_block_value]" class="form-control" value="<?php echo e($why_choose->left_block_value ?? ''); ?>" placeholder="1000">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-body">
											<div class="form-row">
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Center Block Image')); ?></label>
														<input type="file" name="center_block_image" accept="image/*" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Block Title')); ?></label>
														<input type="text" name="data[center_block_title]" class="form-control" value="<?php echo e($why_choose->center_block_title ?? ''); ?>" placeholder="<?php echo e(__('Satisfied users')); ?>">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Block Counter Value')); ?></label>
														<input type="text" name="data[center_block_value]" class="form-control" value="<?php echo e($why_choose->center_block_value ?? ''); ?>" placeholder="1000">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-body">
											<div class="form-row">
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Right Block Image')); ?></label>
														<input type="file" name="right_block_image" accept="image/*" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Block Title')); ?></label>
														<input type="text" name="data[right_block_title]" class="form-control" value="<?php echo e($why_choose->right_block_title ?? ''); ?>" placeholder="<?php echo e(__('1000+ posivie reviews')); ?>">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label><?php echo e(__('Block Counter Value')); ?></label>
														<input type="text" name="data[right_block_value]" class="form-control" value="<?php echo e($why_choose->right_block_value ?? ''); ?>" placeholder="1000">
													</div>
												</div>
											</div>
										</div>
									</div>
									

									<div class="form-group">
										<button class="btn btn-neutral submit-button"><?php echo e(__('Update')); ?></button>
									</div>
								</form>	
							</div>
							<div class="tab-pane fade" id="contact-page" role="tabpanel" aria-labelledby="profile-tab4">
								<form method="POST" action="<?php echo e(route('admin.page-settings.update','contact-page')); ?>" class="ajaxform" enctype="multipart/form-data">
									<?php echo method_field('PUT'); ?>
									<div class="form-group">
										<label><?php echo e(__('Office Address')); ?></label>
										<input type="text" name="data[address]" class="form-control" value="<?php echo e($contact_page->address ?? ''); ?>" required="">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Country Name')); ?></label>
										<input type="text" name="data[country]" class="form-control" value="<?php echo e($contact_page->country ?? ''); ?>" required="">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Google Map Link')); ?></label>
										<input type="text" name="data[map_link]" class="form-control" value="<?php echo e($contact_page->map_link ?? ''); ?>" required="">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Contact Number 1')); ?></label>
										<input type="text" name="data[contact1]" class="form-control" value="<?php echo e($contact_page->contact1 ?? ''); ?>" required="">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Contact Number 2')); ?></label>
										<input type="text" name="data[contact2]" class="form-control" value="<?php echo e($contact_page->contact2 ?? ''); ?>" required="">
									</div>

									<div class="form-group">
										<label><?php echo e(__('Contact Email 1')); ?></label>
										<input type="email" name="data[email1]" class="form-control" value="<?php echo e($contact_page->email1 ?? ''); ?>" required="">
									</div>

									<div class="form-group">
										<label><?php echo e(__('Contact Email 2')); ?></label>
										<input type="email" name="data[email2]" class="form-control" value="<?php echo e($contact_page->email2 ?? ''); ?>" required="">
									</div>

									<div class="form-group">
										<button class="btn btn-neutral submit-button"><?php echo e(__('Update')); ?></button>
									</div>
								</form>	
							</div>
							<div class="tab-pane fade" id="home-page" role="tabpanel" aria-labelledby="profile-tab4">
								<form method="POST" action="<?php echo e(route('admin.page-settings.update','home-page')); ?>" class="ajaxform" enctype="multipart/form-data">
									<?php echo method_field('PUT'); ?>
									
									<div class="form-group">
										<label><?php echo e(__('Hero Ttitle')); ?></label>
										<input type="text" name="data[heading][title]" class="form-control" value="<?php echo e($home->heading->title ?? ''); ?>" required="">
									</div>
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Action Left Button Image')); ?></label>
												<input type="file" name="left_button_image" accept="image/*" class="form-control">
											</div>											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="text" name="data[heading][left_button_link]" class="form-control" value="<?php echo e($home->heading->left_button_link ?? ''); ?>">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Action Right Button Image')); ?></label>
												<input type="file" name="right_button_image" accept="image/*" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="text" name="data[heading][right_button_link]" class="form-control" value="<?php echo e($home->heading->right_button_link ?? ''); ?>">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-sm-12">
											<div class="form-group">
												<label><?php echo e(__('Hero Left Image')); ?></label>
												<input type="file" name="hero_left_image" accept="image/*" class="form-control">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label><?php echo e(__('Hero Image')); ?></label>
												<input type="file" name="hero_image" accept="image/*" class="form-control">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label><?php echo e(__('Hero Right Image')); ?></label>
												<input type="file" name="hero_right_image" accept="image/*" class="form-control">
											</div>
										</div>
									</div>
									<hr>
									
									<div class="form-group">
										<label><?php echo e(__('Brands Area Title')); ?></label>
										<input type="text" name="data[brand][title]" class="form-control" value="<?php echo e($home->brand->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Visibility Of Brand Area')); ?></label>
										
										<select class="form-control" name="data[brand][status]">
											<option value="active" <?php echo e($brand_area == 'active' ? 'selected' : ''); ?>><?php echo e(__('Show')); ?></option>
											<option value="inactive" <?php echo e($brand_area == 'inactive' ? 'selected' : ''); ?>><?php echo e(__('Hide')); ?></option>
										</select>
									</div>
									
									<hr>

									<div class="form-group">
										<label><?php echo e(__('Call to action area title')); ?></label>
										<input type="text" name="data[cta][title]" class="form-control" value="<?php echo e($home->cta->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Call to action area logo')); ?></label>
										<input type="file" accept="image/*" name="cta_logo" class="form-control">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Call to action area thumbnail')); ?></label>
										<input type="file" accept="image/*" name="cta_thumbnail" class="form-control">
									</div>

									<hr>

									<div class="form-group">
										<label><?php echo e(__('Features Area Title')); ?></label>
										<input type="text" name="data[features][title]" class="form-control" value="<?php echo e($home->features->title ?? ''); ?>">
									</div>
									
									<div class="form-group">
										<label><?php echo e(__('Visibility Of Features Area')); ?></label>
										<select class="form-control" name="data[features][status]">
											<option value="active" <?php echo e($features_area == 'active' ? 'selected' : ''); ?>><?php echo e(__('Show')); ?></option>
											<option value="inactive" <?php echo e($features_area == 'inactive' ? 'selected' : ''); ?>><?php echo e(__('Hide')); ?></option>
										</select>
									</div>

									<hr>

									<div class="form-group">
										<label><?php echo e(__('Platform Area Title')); ?></label>
										<input type="text" name="data[platform][title]" class="form-control" value="<?php echo e($home->platform->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Platform Area Description')); ?></label>
										<textarea name="data[platform][description]" class="form-control h-100"><?php echo e($home->platform->description ?? ''); ?></textarea>
									</div>
									<div class="form-group">
										<label><?php echo e(__('Action Button Title')); ?></label>
										<input type="text" name="data[platform][button_title]" class="form-control" value="<?php echo e($home->platform->button_title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Action Button Link')); ?></label>
										<input type="text" name="data[platform][button_link]" class="form-control" value="<?php echo e($home->platform->button_link ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Platform Area thumbnail')); ?></label>
										<input type="file" accept="image/*" name="platform_thumbnail" class="form-control">
									</div>

									<hr>

									<div class="form-group">
										<label><?php echo e(__('Free Account Create Area Main thumbnail')); ?></label>
										<input type="file" accept="image/*" name="account_area_thumbnail" class="form-control">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Free Account Create Area top thumbnail')); ?></label>
										<input type="file" accept="image/*" name="account_area_top_thumbnail" class="form-control">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Free Account Create Area bottom thumbnail')); ?></label>
										<input type="file" accept="image/*" name="account_area_bottom_thumbnail" class="form-control">
									</div>

									<div class="form-group">
										<label><?php echo e(__('Free Account Create Area Heading Title')); ?></label>
										<input type="text" name="data[account_area][heading]" class="form-control" value="<?php echo e($home->account_area->heading ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Free Account Create Area Sub Heading Title')); ?></label>
										<input type="text" name="data[account_area][subheading]" class="form-control"  value="<?php echo e($home->account_area->subheading ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Free Account Create Area Description')); ?></label>
										<textarea name="data[account_area][description]" class="form-control h-100"><?php echo e($home->account_area->description ?? ''); ?></textarea>
									</div>
									<div class="form-group">
										<label><?php echo e(__('Free Account Action Form Link')); ?></label>
										<input type="text" name="data[account_area][form_link]" class="form-control" value="<?php echo e($home->account_area->form_link ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Visibility Of Free Account Create Area')); ?></label>
										<select class="form-control" name="data[account_area][status]">
											<option value="active" <?php echo e($account_area == 'active' ? 'selected' : ''); ?>><?php echo e(__('Show')); ?></option>
											<option value="inactive" <?php echo e($account_area == 'inactive' ? 'selected' : ''); ?>><?php echo e(__('Hide')); ?></option>
										</select>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Free Account Create Area Footer Button Left Image')); ?></label>
												<input type="file" accept="image/*" name="account_footer_left_image" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="text" name="data[account_area][button_link1]" class="form-control" value="<?php echo e($home->account_area->button_link1 ?? ''); ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Free Account Create Area Footer Button Right Image')); ?></label>
												<input type="file" accept="image/*" name="account_footer_right_image" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="text" name="data[account_area][button_link2]" class="form-control" value="<?php echo e($home->account_area->button_link2 ?? ''); ?>">
											</div>
										</div>
									</div>
									<hr>
									<div class="form-group">
										<label><?php echo e(__('App About Area Title')); ?></label>
										<input type="text" name="data[about][title]" class="form-control" value="<?php echo e($home->about->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('App About Section Description')); ?></label>
										<input type="text" name="data[about][description]" class="form-control" value="<?php echo e($home->about->description ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Action Button Area Title')); ?></label>
										<input type="text" name="data[about][action_area_title]" class="form-control" value="<?php echo e($home->about->action_area_title ?? ''); ?>">
									</div>
									
									<div class="form-group">
										<label><?php echo e(__('App About Section cover Image')); ?></label>
										<input type="file" accept="image/*" name="about_cover" class="form-control">
									</div>
									
									<hr>

									<div class="form-group">
										<label><?php echo e(__('App Faq Section Title')); ?></label>
										<input type="text" name="data[top_faq][title]" class="form-control" value="<?php echo e($home->top_faq->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('App Faq Section Description')); ?></label>
										<input type="text" name="data[top_faq][description]" class="form-control" value="<?php echo e($home->top_faq->description ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('App Faq Section cover Image')); ?></label>
										<input type="file" accept="image/*" name="faq_cover" class="form-control">
									</div>
									
									
									<hr>
									<div class="form-group">
										<label><?php echo e(__('Integration area title')); ?></label>
										<input type="text" name="data[integration][title]" class="form-control" value="<?php echo e($home->integration->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Integration area cover Image')); ?></label>
										<input type="file" accept="image/*" name="integration_cover" class="form-control">
									</div>
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Integration left Image')); ?></label>
												<input type="file" accept="image/*" name="integration_left" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Integration right image')); ?></label>
												<input type="file" accept="image/*" name="integration_right" class="form-control">
											</div>
										</div>
									</div>
									

									<hr>
									<div class="form-group">
										<label><?php echo e(__('Testimonial area title')); ?></label>
										<input type="text" name="data[testimonial][title]" class="form-control" value="<?php echo e($home->testimonial->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Testimonial area cover Image')); ?></label>
										<input type="file" accept="image/*" name="testimonial_cover" class="form-control">
									</div>
									
									<hr>

									<div class="form-group">
										<label><?php echo e(__('Footer Call To Action Area Title')); ?></label>
										<input type="text" name="data[calltoaction][title]" class="form-control" value="<?php echo e($home->calltoaction->title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Footer Call To Action Button Title')); ?></label>
										<input type="text" name="data[calltoaction][button_title]" class="form-control" value="<?php echo e($home->calltoaction->button_title ?? ''); ?>">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Footer Call To Action Button Link')); ?></label>
										<input type="text" name="data[calltoaction][button_link]" class="form-control" value="<?php echo e($home->calltoaction->button_link ?? ''); ?>">
									</div>
									
									
									<div class="form-group">
										<button class="btn btn-neutral submit-button"><?php echo e(__('Update')); ?></button>
									</div>
								</form>	
							</div>
							<div class="tab-pane fade" id="header-footer" role="tabpanel" aria-labelledby="contact-tab4">
								<form method="POST" action="<?php echo e(route('admin.page-settings.update','header_footer')); ?>" class="ajaxform" enctype="multipart/form-data">
									<?php echo method_field('PUT'); ?>
									
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Header announcement type')); ?></label>
												<input type="text" name="header[announcement_type]" class="form-control" value="<?php echo e($headerFooter->header->announcement_type ?? ''); ?>" placeholder="<?php echo e(__('Example: NOW HIRING')); ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Header announcement title')); ?></label>
												<input type="text" name="header[announcement_title]" class="form-control" value="<?php echo e($headerFooter->header->announcement_title ?? ''); ?>" placeholder="<?php echo e(__('Example: Are You A Driven And Motivated 1st Line IT Support Engineer?')); ?>">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label><?php echo e(__('Header announcement link')); ?></label>
												<input type="text" name="header[announcement_link]" class="form-control" value="<?php echo e($headerFooter->header->announcement_link ?? ''); ?>">
											</div>
										</div>	
									</div>

									

									<div class="form-group">
										<label><?php echo e(__('Footer title')); ?></label>
										<input type="text" name="footer[title]" class="form-control" value="<?php echo e($headerFooter->footer->title ?? ''); ?>" required="">
									</div>
									<div class="form-group">
										<label><?php echo e(__('Footer Description')); ?></label>
										<input type="text" name="footer[description]" class="form-control" value="<?php echo e($headerFooter->footer->description ?? ''); ?>" required="">
									</div>
									
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Footer Button Left Image')); ?></label>
												<input type="file" accept="image/*" name="footer_button_image" class="form-control" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="url" name="footer[right_image_link]" class="form-control" value="<?php echo e($headerFooter->footer->right_image_link ?? ''); ?>" required="">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Footer Button Right Image')); ?></label>
												<input type="file" accept="image/*" name="footer_left_button_image" class="form-control" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><?php echo e(__('Button Link')); ?></label>
												<input type="url" name="footer[left_image_link]" class="form-control" value="<?php echo e($headerFooter->footer->left_image_link ?? ''); ?>" required="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-neutral submit-button"><?php echo e(__('Update')); ?></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/qserve/resources/views/admin/settings/page-settings.blade.php ENDPATH**/ ?>