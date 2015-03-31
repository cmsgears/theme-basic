<?php
use yii\helpers\Html;
?>
<header id="header" class="header-public">
	<div class="header-desktop clearfix">
		<div class="colf12x4">
			<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/user/home' ], null )?>
		</div>
		<div class="colf12x8">
			<ul class="nav-main">
	            <li><?=Html::a( "Home", [ '/user/home' ], null )?></li>
	            <li><?=Html::a( "Settings", [ '#' ], [ 'id' => 'btn-settings' ] )?></li>
			</ul>
		</div>
	</div>
	<div class="header-mobile clearfix">
		<div id="btn-mobile-menu"> 
			<span class="fa fa-3x fa-list"></span>
		</div>
		<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/user/home' ], null )?>
		<ul class="nav-main" id='nav-mobile'>
	        <li><?=Html::a( "Home", [ '/user/home' ], null )?></li>
	        <li><?=Html::a( "Settings", [ '#' ], [ 'id' => 'btn-settings-mobile' ] )?></li>
		</ul>
	</div>
	<div id="box-settings" class='popout-header'>
		<ul class="nav-settings">
	        <li><?=Html::a( "Profile", [ '/user/profile' ], null )?></li>
	        <li><?=Html::a( "Logout", [ '/apix/logout' ], [ 'id' => 'btn-logout' ] )?></li>
		</ul>
	</div>
</header>