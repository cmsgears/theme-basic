<?php
use yii\helpers\Html;
?>
<header id="header" class="header-public">
	<div class="header-desktop clearfix">
		<div class="colf12x4">
			<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		</div>
		<div class="colf12x8">
			<ul class="nav-main">
	            <li><?=Html::a( "Home", [ '/' ], null )?></li>
	            <li><?=Html::a( "Contact", [ '/contact' ], null )?></li>
	            <li><?=Html::a( "Login", [ '/login' ], null )?></li>
	            <li><?=Html::a( "Register", [ '/register' ], null )?></li>
			</ul>
		</div>
	</div>
	<div class="header-mobile clearfix">
		<div id="btn-mobile-menu"> 
			<span class="fa fa-3x fa-list"></span>
		</div>
		<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		<ul class="nav-main" id='nav-mobile'>
	        <li><?=Html::a( "Home", [ '/' ], null )?></li>
	        <li><?=Html::a( "Contact", [ '/contact' ], null )?></li>
	        <li><?=Html::a( "Login", [ '/login' ], null )?></li>
	        <li><?=Html::a( "Register", [ '/register' ], null )?></li>
		</ul>
	</div>
</header>