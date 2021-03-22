<?php
// CMG Imports
use cmsgears\widgets\popup\Popup;

// Basic Imports
use widgets\block\BlockWidget;
?>

<?= BlockWidget::widget( [ 'slug' => 'main-slider' ] ) ?>

<?= BlockWidget::widget( [ 'slug' => 'features' ] ) ?>

<?= BlockWidget::widget( [ 'slug' => 'about' ] ) ?>

<?= BlockWidget::widget( [ 'slug' => 'contact' ] ) ?>

<?= Popup::widget( [ 'templateDir' => Yii::getAlias( '@themeTemplates/popup/public' ), 'template' => 'login', 'title' => 'Login' ] ) ?>
