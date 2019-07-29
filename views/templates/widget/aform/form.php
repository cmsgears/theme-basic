<?php
$themeTemplates = Yii::getAlias( '@themeTemplates' );
?>

<?php include "$themeTemplates/components/spinners/aform.php"; ?>

<?= $fieldsHtml ?>

<div class="frm-actions clear align align-right">
	<?= $captchaHtml ?>
</div>

<div class="frm-actions align align-right">
	<input class="btn btn-small" type="submit" name="submit" value="Submit">
</div>

<div class="message success"></div>
<div class="message warning"></div>
<div class="message error"></div>
