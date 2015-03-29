<?php
use yii\helpers\Html;
?>
<header id="header" class="header-public">
	<div class="header-desktop clearfix">
		<div class="colf12x4">
			<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		</div>
		<div class="colf12x6">
			<ul class="nav-main">
	            <li><a class="smooth-scroll" href="#module-banner">Home</a></li>
	            <li><a class="smooth-scroll" href="#module-about">About</a></li>
	            <li><a class="smooth-scroll" href="#module-contact">Contact</a></li>
			</ul>
		</div>
		<div class="colf12x2">
			<span class="btn" id="btn-login">My Account</span>
		</div>
	</div>
	<div class="header-mobile clearfix">
		<div id="btn-mobile-menu"> 
			<span class="fa fa-3x fa-list"></span>
		</div>
		<?=Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		<span class="fa fa-3x fa-user" id="btn-login-mobile"></span>
		<ul class="nav-main">
            <li><a class="smooth-scroll" href="#module-banner">Home</a></li>
	        <li><a class="smooth-scroll" href="#module-about">About</a></li>
			<li><a class="smooth-scroll" href="#module-contact">Contact</a></li>
		</ul>
	</div>
	<div id="box-login">
		<form class="frm-ajax" id="frm-login" group="0" key="5" action="<?php echo Yii::$app->urlManager->createAbsoluteUrl("apix/cmgcore/site/login"); ?>" method="post">
			<div class="max-area-cover frm-spinner"><div class="valign-center fa fa-3x fa-spinner fa-spin"></div></div>

			<div class="frm-icon-field">
				<span class="wrap-icon fa fa-at"></span><input class="fa-field-email" type="text" name="Login[email]" placeholder="Email *">
			</div>
			<span class="error" formError="email"></span>

			<div class="frm-icon-field">
				<span class="wrap-icon fa fa-lock"></span><input class="fa-field-email" type="password" name="Login[password]" placeholder="Password *">
			</div>
			<span class="error" formError="password"></span>

			<div class="row clearfix">
				<input type="submit" name="submit" value="Login">
			</div>
			<div class="row clearfix">
				<div class="frm-message warning"></div>
			</div>	
		</form>
	</div>
</header>