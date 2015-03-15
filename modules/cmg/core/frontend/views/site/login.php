<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Login";
?>
<section class="module module-public">
	<div class="module-bkg"></div>
	<div class="texture-default"></div>
	<div class="module-wrap-content">
		<div class="module-header">
			<h1 class="align-middle">LOGIN</h1>
		</div>
		<div class="module-content">
			<?php $form = ActiveForm::begin( [ 'id' => 'frm-login', 'options' => [ 'class' => 'frm-medium' ] ] );?>
	
	    	<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password' )->passwordInput( array( 'placeholder' => 'Password*' ) )->label( false ) ?>
	    	<?= $form->field( $model, 'rememberMe' )->checkbox() ?>

			<?= Html::a( "Forgot your Password ?", [ '/site/forgot-password' ] ) ?>
			
			<div class='align-middle'><input type="submit" value="Login" /></div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
</section>