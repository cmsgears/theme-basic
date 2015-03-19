<?php
use cmsgears\modules\cms\common\utilities\ContentUtility;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle();
$uploadUrl		= Yii::$app->fileManager->uploadUrl;
?>
<section class="module" id="slider">

</section>

<section class="module" id="rooms">
	<div class="max-area-spinner"><div class="valign-center fa fa-5x fa-refresh fa-spin"></div></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle">ROOMS</h1>
		</div>
	</div>
</section>

<section class="module" id="about">
	<div class="texture-wall"></div>
	<div class="module-wrap-content content-80">
		<div class="module-header">
			<h1 class="align-middle">ABOUT</h1>
		</div>
		<div class="module-content">
			<?php echo ContentUtility::getPageSummary( "about-us" ); ?>
		</div>
	</div>
</section>

<section class="module" id="contact">
	<div class="module-bkg-parallax"> </div>
	<div class="texture-default"> </div>
	<div class="module-wrap-content content-80 valign-center">
		<div class="module-content">
			<h1 class="align-center">CONTACT</h1>
			<form class="frm-ajax" id="frm-contact" group="0" key="5" action="<?php echo Yii::$app->urlManager->createAbsoluteUrl("apix/cmgforms/site/contact"); ?>" method="post">
				<div class="max-area-spinner spinner"><div class="valign-center fa fa-5x fa-refresh fa-spin"></div></div>
				<ul>
					<li>
						<input type="text" name="Contact[name]" placeholder="Name *">
						<span class="error" formError="name"></span>
					</li>
					<li>
						<input type="text" name="Contact[email]" placeholder="Email *" >
						<span class="error" formError="email"></span>
					</li>
					<li>
						<input type="text" name="Contact[subject]" placeholder="Subject *" >
						<span class="error" formError="subject"></span>
					</li>
					<li>
						<textarea rows="5" name="Contact[message]" placeholder="Message *" ></textarea>
						<span class="error" formError="message"></span>
					</li>
					<li class="align-middle">
						<input type="submit" name="submit" value="SEND">
					</li>
				</ul>
				<div class="frm-message warning"></div>
			</form>
		</div>
	</div>
</section>
