<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	[ 'label' => 'Home', 'url' => Url::toRoute( [ '/' ], true ) ],
	[ 'label' => 'Terms & Conditions', 'url' => Url::toRoute( [ '/terms' ], true ) ],
	[ 'label' => 'Privacy Policy', 'url' => Url::toRoute( [ '/privacy' ], true ) ],
	[ 'label' => 'Contact', 'url' => Url::toRoute( [ '/form/contact-us' ], true ) ]
];
?>
<footer class="footer footer-basic footer-main">
	<div class="row row-xlarge max-cols-50">
		<div class="col col12x8">
			<?= BasicNav::widget( [ 'items' => $menuItems, 'options' => [ 'class' => 'menu-footer nav' ] ] ) ?>
		</div>
		<div class="col col12x4">
			<div class="menu-social align align-right">
				<a href="https://www.facebook.com/" target="_blank">
					<i class="icon icon-border icon-rounded cmti cmti-1-5x cmti-social-facebook"> </i>
				</a>
				<a href="https://www.twitter.com/" target="_blank">
					<i class="icon icon-border icon-rounded cmti cmti-1-5x cmti-social-twitter"> </i>
				</a>
				<a href="https://plus.google.com/" target="_blank">
					<i class="icon icon-border icon-rounded cmti cmti-1-5x cmti-social-google-plus"> </i>
				</a>
				<a href="https://in.linkedin.com/" target="_blank">
					<i class="icon icon-border icon-rounded cmti cmti-1-5x cmti-social-linkedin"> </i>
				</a>
			</div>
		</div>
	</div>
</footer>
<footer class="footer footer-basic footer-copyright">
	<div class="content-80">
		<div class="content-80 align align-center padding padding-default">Copyright © 2015 - <?= date( 'Y' ) ?> <?= $coreProperties->getSiteName() ?>. All Rights Reserved.</div>
	</div>
</footer>
