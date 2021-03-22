<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Forgot Password | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

$otp	= true;
$otpUrl	= '/reset-password-otp';

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Forgot Password' ] ]
];
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Forgot Password</h2>',
	'boxWrapClass' => 'center', 'content' => true
]);?>

	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
	<?php
		}
		else {

			$form = ActiveForm::begin( [ 'id' => 'frm-forgot-password' ] );
	?>
	    	<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>

			<input type="submit" value="Submit" />
	<?php
			ActiveForm::end();

			if( $otp && Yii::$app->smsManager->isOTP() ) {
	?>
			<div class="text-with-line">
				<p class="text-content">OR</p>
			</div>
			<div class="align align-center">
				<p>Get OTP on registered mobile. <a href="<?= Url::toRoute( [ $otpUrl ] ) ?>">Click here</a> to receive OTP.</p>
			</div>
	<?php
			}
		}
	?>

<?php BasicBlock::end(); ?>
