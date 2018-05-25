<?php
// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	[ 'label' => 'Home', 'url' => '#block-banner', 'urlOptions' => [ 'class' => 'smooth-scroll' ], 'options' => [ 'class' => 'active' ] ],
	[ 'label' => 'Features', 'url' => '#block-feature-1', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ],
	[ 'label' => 'Gallery', 'url' => '#block-slider', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ],
	[ 'label' => 'Info', 'url' => '#block-feature-2', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ],
	[ 'label' => 'About', 'url' => '#block-about', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ],
	[ 'label' => 'Contact', 'url' => '#block-contact', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ],
	[ 'label' => 'Login', 'url' => '#', 'urlOptions' => [ 'id' => 'btn-login' ] ],
	[ 'label' => 'Register', 'url' => '#', 'urlOptions' => [ 'id' => 'btn-register' ] ]
];
?>
<header id="header-main" class="header header-basic header-public header-landing header-fixed shadow shadow-primary">
	<div class="header-logo">
		<div class="logo">
			<?= Html::a( "<img class=\"fluid\" src=\"" . Yii::getAlias( '@images' ) . "/logo.png\">", [ '/' ], null ) ?>
		</div>
		<div class="logo-small">
			<?= Html::a( "<img class=\"fluid\" class=\"hidden-easy\" src=\"" . Yii::getAlias( '@images' ) . "/logo-small.png\">", [ '/' ], null ) ?>
		</div>
	</div>
	<?= BasicNav::widget([
		'options' => [ 'id' => 'menu-main', 'class' => 'nav' ],
		'items' => $menuItems
	]);?>
	<div id="btn-menu-mobile">
		<i class="cmti cmti-menu cmti-action"></i>
	</div>
	<?= BasicNav::widget([
		'options' => [ 'id' => 'menu-main-mobile', 'class' => 'vnav' ],
		'items' => $menuItems
	])?>
</header>
