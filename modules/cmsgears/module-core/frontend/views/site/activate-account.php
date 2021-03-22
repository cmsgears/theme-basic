<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Activate Account | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Activate Account' ] ]
];
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Activate Account</h2>',
	'boxWrapClass' => 'center', 'content' => true
]);?>

	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p>
	<?php
		}
		else {

			$form = ActiveForm::begin( ['id' => 'frm-activate-account'] );
	?>
	    	<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => 'Password*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password_repeat' )->passwordInput([ 'placeholder' => 'Confirm Password*' ] )->label( false ) ?>

			<input type="submit" value="Activate" />
	<?php
			ActiveForm::end();
		}
	?>

<?php BasicBlock::end(); ?>
