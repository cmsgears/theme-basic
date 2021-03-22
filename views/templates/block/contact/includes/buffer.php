<?php
use cmsgears\widgets\aform\AjaxFormWidget;
?>

<?= AjaxFormWidget::widget([
	'slug' => 'contact-us', 'labels' => true,
	'templateDir' => '@themeTemplates/widget', 'template' => 'aform'
])?>
