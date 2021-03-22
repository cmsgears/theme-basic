<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Login | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Login' ] ]
];
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Login</h2>',
	'boxWrapClass' => 'center', 'content' => true
]);?>

	<?php $form = ActiveForm::begin( [ 'id' => 'frm-login' ] ); ?>

	<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>
	<?= $form->field( $model, 'password' )->passwordInput( array( 'placeholder' => 'Password*' ) )->label( false ) ?>
	<?= $form->field( $model, 'rememberMe' )->checkbox() ?>

	<?= Html::a( "Forgot your Password ?", [ '/forgot-password' ] ) ?>

	<div class='align-middle'><input type="submit" value="Login" /></div>

	<?php ActiveForm::end(); ?>

<?php BasicBlock::end(); ?>
