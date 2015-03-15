<?php
use yii\helpers\Html;
?>
<!-- Header -->
<header class="header-public header-small">
	<div class="row row-desktop clearfix">
		<div class="col12x4">
			<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		</div>
		<div class="col12x6">
			<ul class="nav-main">
				<li> <?= Html::a( 'Home', [ '/' ] ) ?> </li>
	            <li> <?= Html::a( 'About', [ '/about-us' ] ) ?> </li>
	            <li> <?= Html::a( 'Contact', [ '/contact' ] ) ?> </li>
			</ul>
		</div>
		<div class="col12x2">
			<?=Html::a( "Login", [ '/site/login' ], [ 'class' => 'btn'] )?>
		</div>
	</div>

	<div class="row row-mobile clearfix">
		<div class="wrap-logo">
			<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		</div>
		<div id="btn-mobile-menu"> 
			<span class="fa fa-2x fa-list"></span>
			<div class="wrap-login-btn">
				<?=Html::a( "Login", [ '/site/login' ], [ 'class' => 'btn'] )?>
			</div>
		</div>
		<ul class="nav-main">
			<li> <?= Html::a( 'Home', [ '/' ] ) ?> </li>
	        <li> <?= Html::a( 'About', [ '/about-us' ] ) ?> </li>
	        <li> <?= Html::a( 'Contact', [ '/contact' ] ) ?> </li>
		</ul>
	</div>
</header>