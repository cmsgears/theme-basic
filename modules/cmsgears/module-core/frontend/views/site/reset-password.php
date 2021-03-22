<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Reset Password | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Reset Password' ] ]
];
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Reset Password</h2>',
	'boxWrapClass' => 'center', 'content' => true
]);?>

	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<div class="frm-message"><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
	<?php
		}
		else {

			$form = ActiveForm::begin( [ 'id' => 'frm-reset-password' ] );
	?>
			<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => 'Password*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password_repeat' )->passwordInput( [ 'placeholder' => 'Repeat Password*' ] )->label( false ) ?>

			<input type="submit" value="Reset" />
	<?php
			ActiveForm::end();
		}
	?>

<?php BasicBlock::end(); ?>
