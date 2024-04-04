<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['title'=> 'Create Template','buttons'=>[
    [
        'name'=>'<i class="fas fa-step-backward"></i> &nbspBack',
        'url'=> route('user.template.index'),
    ]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('topcss'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <h4 class="text-left col-6"><?php echo e(__('Create Messages Template')); ?></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3">
                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#mode_1" role="tab" aria-controls="home" aria-selected="true"><?php echo e(__('Plain Text')); ?></a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#mode_2" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Text With Media')); ?></a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#mode_3" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Message With Button')); ?></a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#mode_4" role="tab" aria-controls="profile" aria-selected="false">
                                    <?php echo e(__('Template Message ')); ?> <small class="text-danger"><?php echo e(__('(Beta)')); ?></small>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#mode_5" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('List Message')); ?></a>
                            </li>
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#mode_7" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Send Location')); ?></a>
                            </li>
                           

                            <li class="nav-item mt-2 none">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#mo" role="tab" aria-controls="profile" aria-selected="false"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-9">
                        <div class="tab-content no-padding" id="myTab2Content">
                            <div class="tab-pane fade show active" id="mode_1" role="tabpanel" aria-labelledby="home-tab4">
                                <form method="POST" action="<?php echo e(route('user.template.store-now','plain-text')); ?>" class="ajaxform_reset_form">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                         <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Template Name')); ?></label>
                                                <input type="text" name="template_name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-row mb-1">
                                                <label class="col-6"><?php echo e(__('Message:')); ?></label>
                                                <div class="col-6">
                                                    <button type="button" data-toggle="modal" data-target="#help-modal" class="btn btn-neutral btn-sm float-right"><i class="fas fas fa-code"></i>&nbsp<?php echo e(__('Shortcodes')); ?></button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control h-200" name="message" required="" maxlength="1000"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Save Template')); ?></button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="tab-pane fade" id="mode_2" role="tabpanel" aria-labelledby="profile-tab4">
                                <form method="POST" action="<?php echo e(route('user.template.store-now','text-with-media')); ?>" class="ajaxform_reset_form" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Template Name:')); ?></label>
                                                <input type="text" name="template_name" required="" placeholder="<?php echo e(__('Enter Your Template Name')); ?>" class="form-control">
                                            </div>
                                        </div>   
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Select File')); ?></label>
                                                <input id="phone" type="file" class="form-control" name="file" required="" />
                                               <small><?php echo e(__(' Supported file type:')); ?></small> <small class="text-danger"><?php echo e(__('jpg,jpeg,png,webp,pdf,docx,xlsx,csv,txt')); ?></small>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-row mb-1">
                                                <label class="col-12 text-left"><?php echo e(__('Media Caption:')); ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="message" required="" maxlength="1000" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Save Template')); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="mode_3" role="tabpanel" aria-labelledby="profile-tab4">
                                <form method="POST" action="<?php echo e(route('user.template.store-now','text-with-button')); ?>" class="ajaxform_reset_form" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                       <div class="col-sm-12">
                                        <div class="form-group">
                                            <label><?php echo e(__('Template Name:')); ?></label>
                                            <input type="text" name="template_name" required="" placeholder="<?php echo e(__('Enter Your Template Name')); ?>" class="form-control">
                                        </div>
                                        </div>   
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Message Caption')); ?></label>
                                                <textarea class="form-control h-100" name="message" required="" maxlength="1000"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Footer Text')); ?></label>
                                                <input type="text" class="form-control" name="footer_text" required="" autofocus="" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="list-button-appendarea">
                                            <div class="form-group plain_button_message_text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label><?php echo e(__('Button 1 Text')); ?></label>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="javascript:void(0)" id="add-more" class="btn btn-sm btn-primary btn-neutral float-right mb-1"><i class="fa fa-plus"></i>&nbsp<?php echo e(__('Add More')); ?></a>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="buttons[]" required="" autofocus="" maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-outline-primary submit-button float-left"><?php echo e(__('Save Template')); ?></button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="mode_4" role="tabpanel" aria-labelledby="profile-tab4">
                                <form method="POST" action="<?php echo e(route('user.template.store-now','text-with-template')); ?>" class="ajaxform_reset_form" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                       
                                       <div class="col-sm-12">
                                        <div class="form-group">
                                            <label><?php echo e(__('Template Name:')); ?></label>
                                            <input type="text" name="template_name" required="" placeholder="<?php echo e(__('Enter Your Template Name')); ?>" class="form-control">
                                        </div>
                                    </div>   
                                        <div class="col-sm-12">
                                            <div class="form-row mb-1">
                                                <label class="col-6"><?php echo e(__('Message:')); ?></label>
                                                <div class="col-6">
                                                    <button type="button" data-toggle="modal" data-target="#help-modal" class="btn btn-neutral btn-sm float-right"><i class="fas fas fa-code"></i>&nbsp<?php echo e(__('Shortcodes')); ?></button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control h-200" name="message" required="" maxlength="1000"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Footer Text')); ?></label>
                                                <input type="text" class="form-control" name="footer_text" required="" autofocus="" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="list-button-appendarea">
                                            <div class="form-group button_message_text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h4 class="mt-2"><?php echo e(__('Call To Action Buttons')); ?></h4>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="javascript:void(0)" id="add-more-action" class="btn btn-sm btn-primary btn-neutral float-right mb-1"><i class="fa fa-plus"></i>&nbsp<?php echo e(__('Add More')); ?></a>
                                                    </div>
                                                </div>
                                               
                                                <div id="action-body">

                                                    <div class="card card-primary mt-2 call-to-action-area">
                                                        <div class="card-header">
                                                            <h4><?php echo e(__('Button 1')); ?></h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="form-group col-sm-4">
                                                                    <label>
                                                                        <?php echo e(__('Select Action Type')); ?>

                                                                    </label>
                                                                    <select class="form-control action-type" name="buttons[0][type]" required="" >
                                                                        <option value="urlButton" data-key="0"><?php echo e(__('Url Button')); ?></option>
                                                                        <option value="callButton" data-key="0"><?php echo e(__('Phone number (Call Button)')); ?></option>
                                                                        <option value="quickReplyButton" data-key="0"><?php echo e(__('Quick Reply Button')); ?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-sm-4">
                                                                    <label>
                                                                        <?php echo e(__('Button Display Text')); ?>

                                                                    </label>
                                                                    <input type="text" class="form-control" name="buttons[0][displaytext]" required="" autofocus="" maxlength="50" placeholder="<?php echo e(__('Button Display Text')); ?>" />
                                                                </div>
                                                                <div class="form-group col-sm-4 action-area0">
                                                                    <label>
                                                                        <?php echo e(__('Button Click To Action Value')); ?>

                                                                    </label>
                                                                    <input type="text" class="form-control input_action0" name="buttons[0][action]" required="" autofocus="" maxlength="50" placeholder="https://www.google.com/" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                                </div>
                                            </div>
                                        </div>
                                       <div class="col-sm-12">
                                            <button type="submit" class="btn btn-outline-primary submit-button float-left"><?php echo e(__('Save Template')); ?></button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="mode_5" role="tabpanel" aria-labelledby="profile-tab4">
                                <form method="POST" action="<?php echo e(route('user.template.store-now','text-with-list')); ?>" class="ajaxform_reset_form">
                                     <?php echo csrf_field(); ?>
                                      <div class="row">
                                       <div class="col-sm-12">
                                        <div class="form-group">
                                            <label><?php echo e(__('Template Name:')); ?></label>
                                            <input type="text" name="template_name" required="" placeholder="<?php echo e(__('Enter Your Template Name')); ?>" class="form-control">
                                        </div>
                                    </div>   
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Template Title (Header)')); ?></label>
                                                <input  type="text" class="form-control" name="header_title" placeholder="<?php echo e(__('Example: Amazing boldfaced list title')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-row mb-1">
                                                <label class="col-6"><?php echo e(__('Message:')); ?></label>
                                                <div class="col-6">
                                                    <button type="button" data-toggle="modal" data-target="#help-modal" class="btn btn-neutral btn-sm float-right"><i class="fas fas fa-code"></i>&nbsp<?php echo e(__('Shortcodes')); ?></button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control h-200" name="message" required="" maxlength="1000"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Template Footer Text')); ?></label>
                                                <input  type="text" class="form-control" name="footer_text" placeholder="<?php echo e(__('Example: Thank you')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Button Text for select option')); ?></label>
                                                <input  type="text" class="form-control" name="button_text" placeholder="<?php echo e(__('Example: Required, text on the button to view the list')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="list-option-area">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h4 class="mt-2"><?php echo e(__('List Options')); ?></h4>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="javascript:void(0)" id="add-more-option" class="btn btn-sm btn-primary btn-neutral float-right mb-1"><i class="fa fa-plus"></i>&nbsp; <?php echo e(__('Add More Card')); ?></a>
                                                    </div>
                                                </div>
                                                <div class="list-area">
                                                    <div class="card card-primary card-item">
                                                        <div class="card-header">
                                                            <h4><?php echo e(__('List 1')); ?></h4>
                                                          
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label><?php echo e(__('List Section Title')); ?></label>
                                                                        <input  type="text" class="form-control" name="section[1][title]" placeholder="<?php echo e(__('Example: Select a fruit')); ?>" value="" required=""  maxlength="50" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row list-item-area1">

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label><?php echo e(__('Enter List Value Name')); ?></label>
                                                                        <input  type="text" class="form-control itemval-1" name="section[1][value][1][title]" placeholder="<?php echo e(__('Example: Banana')); ?>" value="" required=""  maxlength="50" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label><?php echo e(__('Enter List Value Description')); ?></label>

                                                                        <input  type="text" class="form-control" name="section[1][value][1][description]" placeholder="<?php echo e(__('Example: Banana is a healthly food')); ?>" value=""   maxlength="50" />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">

                                                                <div class="col-12 text-right">
                                                                    <a href="javascript:void(0)" class="text-right btn btn-sm btn-neutral add-more-option-item option-item-btn1" data-target=".list-item-area1" data-key="1"><i class="fas fa-plus"></i>&nbsp<?php echo e(__('Add More Item')); ?></a>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        
                                       <div class="col-sm-12">
                                            <button type="submit" class="btn btn-outline-primary submit-button float-left"><?php echo e(__('Save Template')); ?></button>
                                        </div>
                                  </div>
                              </form>
                            </div>
                             <div class="tab-pane fade" id="mode_7" role="tabpanel" aria-labelledby="profile-tab4">
                                <form method="POST" action="<?php echo e(route('user.template.store-now','text-with-location')); ?>" class="ajaxform_instant_reload">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Template Name:')); ?></label>
                                                <input type="text" name="template_name" required="" placeholder="<?php echo e(__('Enter Your Template Name')); ?>" class="form-control">
                                            </div>
                                        </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo e(__('Latitude')); ?></label>
                                                <input type="number" step="any" name="degreesLatitude" required="" class="form-control" placeholder="Example: 24.121231">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo e(__('Longitude')); ?></label>
                                                <input type="number" step="any" name="degreesLongitude" required="" class="form-control" placeholder="Example: 55.1121221">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-outline-primary submit-button float-left"><?php echo e(__('Save Template')); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="mode_6" role="tabpanel" aria-labelledby="profile-tab4">
                                <form method="POST" action="<?php echo e(route('user.template.store-now','text-with-vcard')); ?>" class="ajaxform_reset_form">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                       
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo e(__('Display Name')); ?></label>
                                                <input  type="text" class="form-control" name="display_name" placeholder="<?php echo e(__('Enter Display Name')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-body">
                                                <div class="row">
                                                <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo e(__('Full Name (VCARD)')); ?></label>
                                                <input  type="text" class="form-control" name="full_name" placeholder="<?php echo e(__('Enter Full Name')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo e(__('Organization of the contact (VCARD)')); ?></label>
                                                <input  type="text" class="form-control" name="org_name" placeholder="<?php echo e(__('Enter Organization Name')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo e(__('User Contact Number (VCARD)')); ?></label>
                                                <input  type="text" class="form-control" name="contact_number" placeholder="<?php echo e(__('Enter Contact Full Number')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo e(__('User Whatsapp Number (VCARD)')); ?></label>
                                                <input  type="text" class="form-control" name="wa_number" placeholder="<?php echo e(__('Enter Whatsapp Full Number')); ?>" value="" required=""  maxlength="50" />
                                            </div>
                                        </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="plain-text-vcard" type="checkbox" name="templatestatus">
                                            <label class="custom-control-label pt-1" for="plain-text-vcard"><?php echo e(__('Save this as a template')); ?></label>
                                        </div>
                                            <button type="submit" class="btn btn-outline-primary submit-button"><?php echo e(__('Save Template')); ?></button>
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
</div>

<div class="modal fade" id="help-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Shortcode')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo e(__('{name} = recipient can see his/her name')); ?></li>
          <li class="list-group-item"><?php echo e(__('{phone_number} = recipient can see his/her phone number')); ?></li>
          <li class="list-group-item"><?php echo e(__('{my_name} = recipient can see your name')); ?></li>
          <li class="list-group-item"><?php echo e(__('{my_email} = recipient can see your email')); ?></li>
          <li class="list-group-item"><?php echo e(__('{my_contact_number} = recipient can see your contact number')); ?></li>

          <li class="list-group-item"><p><b>Note: </b>If you want custom parameter for API. Use <strong>{1}</strong> maximum parameter limit is 20. Like  <strong>{1},{2},{3},.....,{20}</strong> <br> Example: You made a purchase for <b>{1}</b> using a credit card ending in <b>{2}</b></p></li>

        </ul>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-neutral" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/vendor/select2/dist/js/select2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/pages/bulk/template.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/user/template/create.blade.php ENDPATH**/ ?>