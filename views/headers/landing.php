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
<header id="header-main" class="header header-basic header-basic-duo header-landing header-fixed shadow shadow-primary">
	<div class="row">
		<div class="header-logo">
			<div class="logo">
				<?= Html::a( "<img src=\"" . Yii::getAlias( '@images' ) . "/logo.png\">", [ '/' ], null ) ?>
			</div>
			<div class="logo-small">
				<?= Html::a( "<img src=\"" . Yii::getAlias( '@images' ) . "/logo-small.png\">", [ '/' ], null ) ?>
			</div>
		</div>
		<?= BasicNav::widget([
			'options' => [ 'id' => 'menu-main', 'class' => 'nav' ],
			'items' => $menuItems
		]);?>
		<div id="mobile-actions">
			<span id="btn-menu-mobile" class="mobile-action">
				<i class="cmti cmti-menu cmti-action"></i>
			</span>
		</div>
	</div>
	<div id="menu-mobile-wrap" class="relative">
		<?= BasicNav::widget([
			'options' => [ 'id' => 'menu-main-mobile', 'class' => 'vnav' ],
			'items' => $menuItems
		])?>
	</div>
</header>
