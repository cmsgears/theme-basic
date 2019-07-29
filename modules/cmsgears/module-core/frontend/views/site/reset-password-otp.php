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

	<?php if( Yii::$app->session->hasFlash( 'message' ) ) {  ?>
		<div class="frm-message"><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
	<?php } else if( Yii::$app->smsManager->isOTP() ) { ?>
		<?php $form = ActiveForm::begin( [ 'id' => 'frm-password', 'options' => [ 'class' => 'form' ] ] ); ?>

			<div class="row">
				<?php if( empty( $mobile ) || !empty( $merror ) ) { ?>
					<div class="form-group">
						<label>Registered Mobile</label>
						<input type="text" name="mobile" placeholder="Mobile" value="<?= $mobile ?>" />
						<?php if( !empty( $merror ) ) { ?>
							<p class="error"><?= $merror ?></p>
						<?php } ?>
					</div>
				<?php } else { ?>
					<input type="hidden" name="mobile" value="<?= $mobile ?>" />
					<input type="hidden" name="status" value="<?= $status ?>" />
					<?= $form->field( $model, 'otp' )->textInput( [ 'placeholder' => 'OTP' ] ) ?>
					<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => 'Password' ] ) ?>
					<?= $form->field( $model, 'password_repeat' )->passwordInput( [ 'placeholder' => 'Repeat Password' ] ) ?>
				<?php } ?>
			</div>

			<div class="row max-cols-50 padding padding-small-v">
				<div class="col col2">
					<label>
						<a href="<?= Url::toRoute( [ '/login' ] ) ?>">Login</a>
					</label>
				</div>
				<div class="col col2 align align-right">
					<input class="frm-element-medium" type="submit" value="Submit" />
				</div>
			</div>
		<?php ActiveForm::end(); ?>
	<?php } else { ?>
		<div class="align align-center">
			<p>OTP facility is not available at the moment. <a href="<?= Url::toRoute( [ '/forgot-password' ] ) ?>">Click here</a> to reset password using email.</p>
		</div>
	<?php } ?>

<?php BasicBlock::end(); ?>
