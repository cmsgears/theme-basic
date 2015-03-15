<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Error";
?>
<section class="module module-public">
	<div class="module-bkg"></div>
	<div class="texture-default"></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle">Error</h1>
		</div>
		<div class="module-content">
	    	<div class='frm-message'><p> <?= nl2br(Html::encode($message)) ?> </p></div>
		</div>
	</div>
</section>