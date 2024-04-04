<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'Back',
		'url'=>route('user.apps.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
               

                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 font-weight-bolder"><?php echo e(__('Create New Message')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="">
             
                            <?php
                            $url=route('api.create.message');
                            ?>
                           <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" data-target="#curl" type="button" role="tab" aria-controls="home" aria-selected="true">cUrl</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" data-target="#php" type="button" role="tab" aria-controls="profile" aria-selected="false">Php</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" data-target="#nodejs" type="button" role="tab" aria-controls="profile" aria-selected="false">NodeJs - Request</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" data-target="#python" type="button" role="tab" aria-controls="contact" aria-selected="false">Python</a>
  </li>
</ul>

<div class="tab-content mt-4 mb-4" id="myTabContent">
<div class="tab-pane fade show active" id="curl" role="tabpanel" aria-labelledby="home-tab">
<pre class="language-markup" tabindex="0">
curl --location --request POST '<?php echo e($url); ?>' \
--form 'appkey="<?php echo e($key); ?>"' \
--form 'authkey="<?php echo e(Auth::user()->authkey); ?>"' \
--form 'to="RECEIVER_NUMBER"' \
--form 'message="Example message"' \
--form 'sandbox="false"'
</pre>
</div>
  <div class="tab-pane fade" id="php" role="tabpanel" aria-labelledby="profile-tab">
      <pre class="language-markup" tabindex="1">

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '<?php echo e($url); ?>',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
  'appkey' => '<?php echo e($key); ?>',
  'authkey' => '<?php echo e(Auth::user()->authkey); ?>',
  'to' => 'RECEIVER_NUMBER',
  'message' => Example message',
  'sandbox' => 'false'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


                                       </pre>
  </div>
  <div class="tab-pane fade" id="nodejs" role="tabpanel" aria-labelledby="contact-tab">
      <pre class="language-markup" tabindex="2">
<code class="language-markup">
var request = require('request');
var options = {
  'method': 'POST',
  'url': '<?php echo e($url); ?>',
  'headers': {
  },
  formData: {
    'appkey': '<?php echo e($key); ?>',
    'authkey': '<?php echo e(Auth::user()->authkey); ?>',
    'to': 'RECEIVER_NUMBER',
    'message': 'Example message',
    'sandbox': 'false'
  }
};
request(options, function (error, response) {
  if (error) throw new Error(error);
  console.log(response.body);
});

</code></pre>

  </div>
  <div class="tab-pane fade" id="python" role="tabpanel" aria-labelledby="contact-tab">
       <pre class="language-markup" tabindex="3">
<code class="language-markup">
import requests

url = "<?php echo e($url); ?>"

payload={
'appkey': '<?php echo e($key); ?>',
'authkey': '<?php echo e(Auth::user()->authkey); ?>',
'to': 'RECEIVER_NUMBER',
'message': 'Example message',
'sandbox': 'false'
}
files=[

]
headers = {}

response = requests.request("POST", url, headers=headers, data=payload, files=files)

print(response.text)



</code></pre>
  </div>


</div>
                        </div>

                        <h3 class="font-weight-bolder"><?php echo e(__('Successful Json Callback')); ?></h3>
                        <pre>
                        <code>
 {
    "message_status": "Success",
    "data": {
        "phone": "RECEIVER_NUMBER",
        "body": "Example message",
        "charge": 0,
        "messaging_id": "ALGzHqN72J1mNX3PQ3LGHFGHFHFTYRTYRTY5",
        "status_code": 200
    }
}
                        </code>
                    </pre>
                    </div>
                </div>

                

                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 font-weight-bolder"><?php echo e(__('Parameters')); ?></h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush">
                            <thead class="">
                            <tr>
                                <th><?php echo e(__('S/N')); ?></th>
                                <th><?php echo e(__('Value')); ?></th>
                                <th><?php echo e(__('Type')); ?></th>
                                <th><?php echo e(__('Required')); ?></th>
                                <th><?php echo e(__('Description')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo e(__('1.')); ?></td>
                                <td><?php echo e(__('appkey')); ?></td>
                                <td><?php echo e(__('string')); ?></td>
                                <td><?php echo e(__('Yes')); ?></td>
                                <td><?php echo e(__("Used to authorize a transaction for the app")); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('2.')); ?></td>
                                <td><?php echo e(__('authkey')); ?></td>
                                <td><?php echo e(__('string')); ?></td>
                                <td><?php echo e(__('Yes')); ?></td>
                                <td><?php echo e(__("Used to authorize a transaction for the is valid user")); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('3.')); ?></td>
                                <td><?php echo e(__('to')); ?></td>
                                <td><?php echo e(__('number')); ?></td>
                                <td><?php echo e(__('Yes')); ?></td>
                                <td><?php echo e(__("Who will receive the message the Whatsapp number should be full number with country code")); ?></td>
                            </tr>
                           	<tr>
                                <td><?php echo e(__('4.')); ?></td>
                                <td><?php echo e(__('message')); ?></td>
                                <td><?php echo e(__('string')); ?></td>
                                <td><?php echo e(__('Yes')); ?></td>
                                <td><?php echo e(__("The transactional message max:1000 words")); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('5.')); ?></td>
                                <td><?php echo e(__('sandbox')); ?></td>
                                <td><?php echo e(__('Boolean (true / false)')); ?></td>
                                <td><?php echo e(__('Yes')); ?></td>
                                <td><?php echo e(__("true = test mode and false = live mode")); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatscloud/resources/views/user/apps/integration.blade.php ENDPATH**/ ?>