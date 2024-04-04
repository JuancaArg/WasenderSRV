<?php $__env->startSection('head'); ?>
<?php echo $__env->make('layouts.main.headersection',['buttons'=>[
	[
		'name'=>'Back',
		'url'=>route('user.apps.index'),
	]
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div>
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
    <div class="language-markup">
        
<pre class="language-markup" tabindex="0">
<h3><?php echo e(__('Text Message Only')); ?></h3>     
curl --location --request POST '<?php echo e($url); ?>' \
--form 'appkey="<?php echo e($key); ?>"' \
--form 'authkey="<?php echo e(Auth::user()->authkey); ?>"' \
--form 'to="RECEIVER_NUMBER"' \
--form 'message="Example message"' \
</pre>
</div>
<hr>
<div class="language-markup">
        
<pre class="language-markup" tabindex="0">
<h3><?php echo e(__('Text Message with file')); ?></h3>     
curl --location --request POST '<?php echo e($url); ?>' \
--form 'appkey="<?php echo e($key); ?>"' \
--form 'authkey="<?php echo e(Auth::user()->authkey); ?>"' \
--form 'to="RECEIVER_NUMBER"' \
--form 'message="Example message"' \
--form 'file="https://www.africau.edu/images/default/sample.pdf"'
</pre>
</div>
<hr>
<div class="language-markup">
    <pre class="language-markup" tabindex="2">
<code class="language-markup">
<h3><?php echo e(__('Template Only')); ?></h3>    
curl --location --request POST '<?php echo e($url); ?>' \
--form 'appkey="<?php echo e($key); ?>"' \
--form 'authkey="<?php echo e(Auth::user()->authkey); ?>"' \
--form 'to="RECEIVER_NUMBER"' \
--form 'template_id="TEMPLATE_ID"' \
--form 'variables[{variableKey1}]="jhone"' \
--form 'variables[{variableKey2}]="replaceable value"'

</code>
</pre>
</div>
</div>

  <div class="tab-pane fade" id="php" role="tabpanel" aria-labelledby="profile-tab">
      <pre class="language-markup" tabindex="1">
<h3><?php echo e(__('Text Message Only')); ?></h3>   
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
  'message' => 'Example message',
  'sandbox' => 'false'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
</pre>
<hr>
<pre class="language-markup" tabindex="1">
<h3><?php echo e(__('Text Message with file')); ?></h3>   
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
  'message' => 'Example message',
  'file' => 'https://www.africau.edu/images/default/sample.pdf',
  'sandbox' => 'false'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
</pre>
<hr>
 <pre class="language-markup" tabindex="1">
<h3><?php echo e(__('Template Message Only')); ?></h3>   
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
  'template_id' => 'TEMPLATE_ID',
  'variables' => array(
    '{variableKey1}' => 'Jhone', 
    '{variableKey2}' => 'replaceable value'
   )
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
<h3><?php echo e(__('Text Message Only')); ?></h3>    
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
    'message': 'Example message'
  }
};
request(options, function (error, response) {
  if (error) throw new Error(error);
  console.log(response.body);
});

</code>
</pre>
<hr>
<pre class="language-markup" tabindex="2">
<code class="language-markup">
<h3><?php echo e(__('Text Message With File')); ?></h3>    
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
    'file': 'https://www.africau.edu/images/default/sample.pdf'
  }
};
request(options, function (error, response) {
  if (error) throw new Error(error);
  console.log(response.body);
});

</code>
</pre>
<hr>
<pre class="language-markup" tabindex="2">
<code class="language-markup">
<h3><?php echo e(__('Template Only')); ?></h3>    
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
    'template_id': 'SELECTED_TEMPLATE_ID',
    'variables': {
        '{variableKey1}' : 'jhone',
        '{variableKey2}' : 'replaceable value'
    }
  }
};
request(options, function (error, response) {
  if (error) throw new Error(error);
  console.log(response.body);
});

</code>
</pre>

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
        "from": "SENDER_NUMBER",
        "to": "RECEIVER_NUMBER",
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
                                <td><?php echo e(__('template_id')); ?></td>
                                <td><?php echo e(__('string')); ?></td>
                                <td><?php echo e(__('No')); ?></td>
                                <td><?php echo e(__("Used to authorize a transaction for the template")); ?></td>
                            </tr>
                           	<tr>
                                <td><?php echo e(__('5.')); ?></td>
                                <td><?php echo e(__('message')); ?></td>
                                <td><?php echo e(__('string')); ?></td>
                                <td><?php echo e(__('No')); ?></td>
                                <td><?php echo e(__("The transactional message max:1000 words")); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('6.')); ?></td>
                                <td><?php echo e(__('file')); ?></td>
                                <td><?php echo e(__('string')); ?></td>
                                <td><?php echo e(__('No')); ?></td>
                                <td><?php echo e(__("file extension type should be in jpg,jpeg,png,webp,pdf,docx,xlsx,csv,txt")); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('7.')); ?></td>
                                <td><?php echo e(__('variables')); ?></td>
                                <td><?php echo e(__('Array')); ?></td>
                                <td><?php echo e(__('No')); ?></td>
                                <td><?php echo e(__("the first value you list replaces the {1} variable in the template message and the second value you list replaces the {2} variable")); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/wasender/resources/views/user/apps/integration.blade.php ENDPATH**/ ?>