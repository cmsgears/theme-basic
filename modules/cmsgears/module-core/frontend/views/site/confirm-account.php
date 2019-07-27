<?php
// CMG Imports
use cmsgears\widgets\block\BasicBlock;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Confirm Account";
$resourceUrl	= $coreProperties->getResourceUrl();
?>
<?= BasicBlock::widget([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Confirm Account</h2>',
	'boxWrapClass' => 'center', 'content' => true,
	'contentData' => Yii::$app->session->getFlash( "message" )
])?>
