<?php
// CMG Imports
use cmsgears\core\common\base\Captcha;

$model			= $widget->model;
$captcha		= $widget->captcha;
$title			= $widget->title;
$success		= $widget->success;
$rating			= $widget->rating;
$ratingClass	= $widget->ratingClass;

$user = Yii::$app->core->getUser();

$ajaxUrl		= $widget->ajaxUrl;
$cmtApp			= $widget->cmtApp;
$cmtController	= $widget->cmtController;
$cmtAction		= $widget->cmtAction;
?>
<div class="box-content">
	<div cmt-app="<?= $cmtApp ?>" cmt-controller="<?= $cmtController ?>" cmt-action="<?= $cmtAction ?>" action="<?= $ajaxUrl ?>">
		<div class="max-area-cover spinner">
			<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
		</div>
		<div class="box-content-data color color-tertiary">
			<div class="h6 text text-default-r">
				Write Us
			</div>
			<?php if( empty( $user ) ) { ?>
				<div class="margin margin-small-v">
					<input type="text" name="Comment[name]" placeholder="Name" />
					<span class="error" cmt-error="Comment[name]"></span>
				</div>
				<div class="margin margin-small-v">
					<input type="text" name="Comment[email]" placeholder="Email" />
					<span class="error" cmt-error="Comment[email]"></span>
				</div>
			<?php } else { ?>
				<input type="hidden" name="Comment[name]" value="<?= $user->getName() ?>" />
				<input type="hidden" name="Comment[email]" value="<?= $user->email ?>" />
			<?php } ?>
			<div class="margin margin-small-v">
				<textarea name="Comment[content]" rows="5" placeholder="Write here ..."></textarea>
				<span class="error" cmt-error="Comment[content]"></span>
			</div>
		</div>
		<div class="box-content-data">
			<div class="h6 text text-default-r">
				Your Rating
			</div>
			<div class="margin margin-small-v">
				<?= Yii::$app->formDesigner->getRatingField(
					[ 'modelName' => 'Comment', 'fieldName' => 'rating', 'class' => $ratingClass ]
				)?>
				<span class="error" cmt-error="Comment[rating]"></span>
			</div>
			<?php if( !isset( $user ) ) { ?>
				<div class="clear captcha-wrap">
					<?= Captcha::widget( [ 'name' => 'Comment[captcha]', 'captchaAction' =>  '/core/site/captcha', 'options' => [ 'placeholder' => 'Captcha Key*' ] ] ) ?>
					<div class="warning">Click on the captcha image to get new code.</div>
					<div class="error" cmt-error="Comment[captcha]"></div>
				</div>
			<?php } ?>
			<div class="align align-right">
				 <input type="submit" class="cmt-click" value="Submit" />
			</div>
			<div class="filler-height"></div>
			<div class="message success"></div>
			<div class="message warning"></div>
			<div class="message error"></div>
			<div class="filler-height"> </div>
		</div>
	</div>
</div>
