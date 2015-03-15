<?php
use yii\helpers\Html;
?>
<!-- Header -->
<header id="header" class="header-public">
	<div class="row row-desktop clearfix">
		<div class="col12x4">
			<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		</div>
		<div class="col12x6">
			<ul class="nav-main">
	            <li><a class="smooth-scroll" href="#slider">Home</a></li>
	            <li><a class="smooth-scroll" href="#rooms">Rooms</a></li>
	            <li><a class="smooth-scroll" href="#about">About</a></li>
	            <li><a class="smooth-scroll" href="#contact">Contact</a></li>
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
            <li><a class="smooth-scroll" href="#slider">Home</a></li>
            <li><a class="smooth-scroll" href="#rooms">Rooms</a></li>
            <li><a class="smooth-scroll" href="#about">About</a></li>
            <li><a class="smooth-scroll" href="#contact">Contact</a></li>
		</ul>
	</div>
</header>