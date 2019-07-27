<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	[ 'label' => 'Home', 'url' => Url::toRoute( [ '/' ], true ) ],
	[ 'label' => 'Contact', 'url' => Url::toRoute( [ '/form/contact-us' ], true ) ],
	[ 'label' => 'Login', 'url' => Url::toRoute( [ '/login' ], true ) ],
	[ 'label' => 'Register', 'url' => Url::toRoute( [ '/register' ], true ) ]
];
?>
<header id="header-main" class="header header-basic header-basic-duo header-fixed shadow shadow-primary">
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
