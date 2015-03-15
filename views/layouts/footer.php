<?php
use yii\helpers\Html;
?>
<!---Footer  ------------------>
<footer class="footer-main">
	<div class="content-wrapper row content-80 clearfix">
		<div class="col12x2">
			<h1 class="footer-title">Company</h1>
			<ul>
				<li><?= Html::a( 'Home', [ '/' ] ) ?></li>
				<li><?= Html::a( 'About', [ '/about-us' ] ) ?></li>
				<li><?= Html::a( 'Contact', [ '/contact' ] ) ?></li>
				<li><?= Html::a( 'Blog', [ '/blog' ] ) ?></li>
			</ul>
		</div>
		<div class="col12x2">
			<h1 class="footer-title">Rooms</h1>
			<ul>
				<li><?= Html::a( 'Chat Rooms', [ '/rooms/chat' ] ) ?></li>
				<li><?= Html::a( 'Movie Rooms', [ '/rooms/movie' ] ) ?></li>
				<li><?= Html::a( 'Game Rooms', [ '/rooms/game' ] ) ?></li>
			</ul>
		</div>
		<div class="col12x8">
			<ul class="social-icon-footer">
				<a href="https://www.facebook.com/" target="_blank"><li><i class="fa fa-facebook-square"> </i> </li></a>
				<a href="https://twitter.com/" target="_blank"><li> <i class="fa fa-twitter-square"> </i></li></a>
				<a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?gpsrc%3Dgplp0" target="_blank"><li> <i class="fa fa-google-plus-square"> </i> </li></a>
				<a href="https://in.linkedin.com/" target="_blank"><li><i class="fa fa-linkedin-square"> </i> </li></a>
			</ul>
		</div>
	</div>
</footer>