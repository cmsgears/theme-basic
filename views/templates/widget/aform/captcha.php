<?php
use cmsgears\core\common\widgets\Captcha;
?>
<div class="frm-field wrap-captcha">
	<div class="row">
		<?= Captcha::widget([
			'name' => 'GenericForm[captcha]',
			'captchaAction' => '/forms/form/acaptcha',
			'options' => [ 'placeholder' => 'Captcha Key*', 'class' => 'element-large' ]
		])?>
	</div>
	<div class="row">
		<span class="info">Click on the captcha image to get new code.</span>
		<span class="error" cmt-error="captcha"></span>
	</div>
</div>
