<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Confirm Account";
?>
<section class="module module-public">
	<div class="module-bkg"></div>
	<div class="texture-default"></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle">Confirm</h1>
		</div>
		<div class="module-content">
			<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
		</div>
	</div>
</section>