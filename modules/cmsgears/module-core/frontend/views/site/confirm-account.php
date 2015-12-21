<?php
// CMG Imports
use cmsgears\widgets\block\BasicBlock;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Confirm Account";
?>
<?=BasicBlock::widget([
	'options' => [ 'id' => 'block-public', 'class' => 'block block-basic' ],
	'bkg' => true,
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align-middle">ACCOUNT CONFIRMATION</h2>',
	'contentWrapClass' => 'align align-center','content' => true,
	'contentData' => Yii::$app->session->getFlash( "message" )
]);?>