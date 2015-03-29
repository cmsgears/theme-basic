<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Forgot Password";
?>
<section class="module module-public">
	<div class="module-bkg"></div>
	<div class="texture-default"></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle">Forgot Password</h1>
		</div>
		<div class="module-content">
	    	<?php if( Yii::$app->session->hasFlash( "success" ) ) { ?>
				<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "success" ); ?> </p></div>
			<?php
				}
				else {
	
	        		$form = ActiveForm::begin( [ 'id' => 'frm-forgot-password', 'options' => [ 'class' => 'frm-medium' ] ] ); 
	        ?>
		        	<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>
	
					<input type="submit" value="Submit" />
	        <?php 
	        		ActiveForm::end();
				}
			?>
		</div>
	</div>
</section>