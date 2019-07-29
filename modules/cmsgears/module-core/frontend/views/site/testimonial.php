<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\block\BasicBlock;
use cmsgears\widgets\comment\submit\SubmitTestimonial;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Testimonial | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

$model = Yii::$app->core->site;

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Testimonial' ] ]
];
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Testimonial</h2>',
	'boxWrapClass' => 'center', 'content' => true
]);?>

	<?= SubmitTestimonial::widget([
	   'model' => $model, 'ajaxUrl' => "core/site/submit-feedback?slug=$model->slug",
	   'templateDir' => '@themeTemplates/comment/feedback', 'template' => 'submit'
	])?>

<?php BasicBlock::end(); ?>
