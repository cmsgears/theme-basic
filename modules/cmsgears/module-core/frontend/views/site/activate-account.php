<?php
use yii\widgets\ActiveForm;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Activate Account";
?>
<section class="module module-basic" id="module-public">
	<div class="module-bkg"></div>
	<div class="texture texture1"></div>
	<div class="module-wrap-content valign-center">
		<div class="module-header">
			<h2 class="align-middle">ACCOUNT ACTIVATION</h2>
		</div>
		<div class="module-content">
    	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
			<p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p>
		<?php		
			}
			else {

        		$form = ActiveForm::begin( ['id' => 'frm-activate-account'] ); 
        ?>
	        	<?= $form->field( $model, 'password' )->passwordInput() ?>
	        	<?= $form->field( $model, 'password_repeat' )->passwordInput() ?>

				<input type="submit" value="Activate" />
        <?php 
        		ActiveForm::end();
			}
		?>
		</div>
	</div>
</section>