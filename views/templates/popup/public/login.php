<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

use cmsgears\widgets\login\LoginWidget;

$title	= $widget->title;
$modal	= $widget->modal;
$data	= $widget->data;

// Redirect url
$redirectUrl	= Url::previous( CoreGlobal::REDIRECT_LOGIN );
$redirectUrl	= empty( $redirectUrl ) ? Url::toRoute( Yii::$app->core->getLoginRedirectPage() ) : $redirectUrl;
$redirectUrl	= in_array( $redirectUrl, [ 'login', 'register', 'forgot-password', 'reset-password', 'reset-password-otp', 'activate-account', 'confirm-account' ] ) ? '' : $redirectUrl;

$loginUrl = "site/login?redirect=$redirectUrl";
?>
<div id="popup-login" class="cmt-popup popup popup-basic <?= $modal ? 'popup-modal' : null ?>">
	<div class="popup-screen"></div>
	<?php if( $widget->bkg ) { ?>
		<div class="popup-bkg <?= $widget->bkgClass ?>" <?= isset( $widget->bkgUrl ) ? " style=\"background-image:url($widget->bkgUrl);\"" : null ?>></div>
	<?php } ?>
	<div class="popup-screen-listener"></div>
	<div class="popup-data <?= isset( $widget->size ) ? "popup-data-$widget->size" : null ?> rounded rounded-medium">
		<!-- <span class="popup-close">
			<span class="cmti cmti-close-c"></span>
		</span> -->
		<?php if( $widget->bkgData ) { ?>
			<div class="popup-data-bkg <?= $widget->bkgDataClass ?>" <?= isset( $widget->bkgDataUrl ) ? "style=\"background-image:url($widget->bkgDataUrl);\"" : null ?>></div>
		<?php } ?>
		<?php if( isset( $title ) ) { ?>
			<div class="popup-header">
				<div class="popup-title"><?= $title ?></div>
			</div>
		<?php } ?>
		<div class="popup-content-wrap">
			<div class="popup-content">
				<?= LoginWidget::widget([
					'loadAssets' => true, 'loginUrl' => $loginUrl
				]) ?>
			</div>
		</div>
	</div>
</div>
