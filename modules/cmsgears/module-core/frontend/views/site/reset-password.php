<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Reset Password";
?>
<section class="module module-public">
	<div class="module-bkg"></div>
	<div class="texture-default"></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle">Reset Password</h1>
		</div>
		<div class="module-content">
	    	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
				<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
			<?php		
				}
				else {
	
	        		$form = ActiveForm::begin( [ 'id' => 'frm-reset-password', 'options' => [ 'class' => 'frm-medium' ] ] ); 
	        ?>
	        		<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>
		        	<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => 'Password*' ] )->label( false ) ?>
		        	<?= $form->field( $model, 'password_repeat' )->passwordInput( [ 'placeholder' => 'Repeat Password*' ] )->label( false ) ?>
	
					<input type="submit" value="Reset" />
	        <?php 
	        		ActiveForm::end();
				}
			?>
		</div>
	</div>
</section>