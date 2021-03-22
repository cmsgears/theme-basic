<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\block\BasicBlock;
use cmsgears\widgets\comment\submit\SubmitFeedback;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Feedback | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

$model = Yii::$app->core->site;

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Feedback' ] ]
];
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Feedback</h2>',
	'boxWrapClass' => 'center', 'content' => true
]);?>

	<?= SubmitFeedback::widget([
	   'model' => $model, 'ajaxUrl' => "core/site/submit-feedback?slug=$model->slug",
	   'templateDir' => '@themeTemplates/comment/feedback', 'template' => 'submit'
	])?>

<?php BasicBlock::end(); ?>
