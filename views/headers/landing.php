<?php
// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	[ 'label' => 'Home', 'url' => '#block-slider-main', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap active' ] ],
	[ 'label' => 'Features', 'url' => '#block-features', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'About', 'url' => '#block-about', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'Contact', 'url' => '#block-contact', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'Login', 'url' => '#', 'urlOptions' => [ 'id' => 'btn-login' ] ]
];
?>
<header id="header-main" class="cmt-header-perspective header header-basic header-basic-duo header-landing header-fixed shadow shadow-primary">
	<div class="row">
		<div class="header-logo">
			<div class="logo">
				<?= Html::a( "<img src=\"$resourceUrl/images/logo.png\">", [ '/' ], null ) ?>
			</div>
			<div class="logo-small">
				<?= Html::a( "<img src=\"$resourceUrl/images/logo-small.png\">", [ '/' ], null ) ?>
			</div>
		</div>
		<?= BasicNav::widget([
			'options' => [ 'id' => 'menu-main', 'class' => 'nav' ],
			'items' => $menuItems
		])?>
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
