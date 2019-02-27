<?php
// CMG Imports
use cmsgears\widgets\block\BasicBlock;
use cmsgears\widgets\aform\AjaxFormWidget;

use themes\basic\Theme;

// FXS Imports
use foxslider\widgets\FoxSliderMain;

$coreProperties	= $this->context->getCoreProperties();
$siteProperties = $this->context->getSiteProperties();

// SEO - Page Title
$siteTitle		= $coreProperties->getSiteTitle();
$this->title	= "Home | $siteTitle";

// SEO H1 - Page Summary
$this->params[ 'summary' ]	= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

// SEO Meta Tags - Description, Keywords, Robot Text
$this->params[ 'desc' ]		= "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$this->params[ 'keywords' ]	= "Home, Application, $siteTitle";
$this->params[ 'robot' ]	= isset( $seoData ) && !empty( $seoData->robot ) ? $seoData->robot : null;
?>

<?= BasicBlock::widget([
	'options' => [ 'id' => 'block-banner', 'class' => 'block', 'cmt-block' => 'block-full' ],
	'fixedBkg' => true,
	'texture' => true, 'textureClass' => 'texture-basic',
	'content' => true, 'contentClass' => 'valign-center row content-90',
	'contentTitle' => "Lorem ipsum dolor sit amet",
	'contentSummary' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
])?>

<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-feature-1', 'class' => 'block block-basic row content-90', 'cmt-block' => 'block-full' ], 'buffer' => true,
	'content' => true, 'contentDataClass' => 'reader', 'boxWrapClass' => 'row max-cols-50',
	'header' => true, 'headerTitle' => "Features",
	'headerInfo' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
]);?>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<?php BasicBlock::end(); ?>

<?php BasicBlock::begin( [ 'options' => [ 'id' => 'block-slider', 'class' => 'block', 'cmt-block' => 'block-full' ], 'buffer' => true ] ); ?>
	<?= FoxSliderMain::widget([
		'options' => [ 'id' => 'slider-main', 'class' => 'fx-slider fx-slider-regular' ],
		'fxOptions' => [
			'bullets' => true, 'controls' => true, 'autoScroll' => true, 'stopOnHover' => false,
			'lControlClass' => 'circled circled1', 'lControlContent' => '<i class="cmti cmti-chevron-left"></i>',
			'rControlClass' => 'circled circled1', 'rControlContent' => '<i class="cmti cmti-chevron-right"></i>',
		],
		'slug' => Theme::SLIDER_MAIN,
		'template' => 'landing',
		'templateDir' => Yii::getAlias( '@themeTemplates/widget/fxslider' )
	])?>
<?php BasicBlock::end(); ?>

<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-feature-2', 'class' => 'block block-basic row content-90', 'cmt-block' => 'block-full' ], 'buffer' => true,
	'content' => true, 'contentDataClass' => 'reader', 'boxWrapClass' => 'row max-cols-50',
	'header' => true, 'headerTitle' => "Highlights",
	'headerInfo' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
]);?>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<div class="box box-feature col col4">
	<div class="box-content-wrap">
		<div class="box-header-wrap">
			<div class="box-header">
				<div class="box-header-icon">
					<i class="cmti cmti-anchor"></i>
				</div>
				<div class="box-header-title">
					Lorem Ipsum
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-data reader">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
	</div>
</div>
<?php BasicBlock::end(); ?>

<?= BasicBlock::widget([
	'options' => [ 'id' => 'block-about', 'class' => 'block', 'cmt-block' => 'block-full' ],
	'parallaxBkg' => true,
	'texture' => true, 'textureClass' => 'texture-basic',
	'content' => true, 'contentClass' => 'valign-center row row-xlarge',
	'contentTitle' => "Lorem ipsum",
	'contentSummary' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
])?>

<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-contact', 'class' => 'block block-basic row content-90 color color-primary-l', 'cmt-block' => 'block-full' ], 'buffer' => true,
	'content' => true,
	'header' => true, 'headerTitle' => "Contact Us",
	'headerInfo' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
]);?>

<?= AjaxFormWidget::widget([
	'slug' => 'contact-us', 'labels' => true,
	'templateDir' => '@themeTemplates/widget', 'template' => 'aform'
])?>

<?php BasicBlock::end(); ?>
