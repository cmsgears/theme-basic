<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	[ 'label' => 'Home', 'url' => Url::toRoute( [ '/' ], true ) ],
	[ 'label' => 'Contact', 'url' => Url::toRoute( [ '/form/contact-us' ], true ) ],
	[ 'label' => 'Login', 'url' => '#', 'urlOptions' => [ 'id' => 'btn-login' ] ],
	[ 'label' => 'Register', 'url' => '#', 'urlOptions' => [ 'id' => 'btn-register' ] ]
];
?>
<header id="header-main" class="header header-basic header-public header-fixed shadow shadow-primary">
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
