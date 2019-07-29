<?php
// Yii Imports
use yii\helpers\Url;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'FAQs | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'FAQs' ] ]
];
?>
<div class="page page-basic page-default page-faqs" data-slug="terms" cmt-block="block-half-auto">
	<div class="page-content-wrap">
		<div class="page-header-wrap page-header-banner">
			<div class="page-bkg" style="background-image:url(<?= $resourceUrl ?>/images/banner-page.jpg);"></div>
			<div class="texture texture-black"></div>
			<div class="page-header page-header-scroll valign-center">
				<div class="page-header-title">FAQs</div>
			</div>
		</div>
		<div class="page-content-row row">
			<div class="page-content">
				<div class="page-content-data reader">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>
	</div>
</div>
