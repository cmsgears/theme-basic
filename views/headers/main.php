<?php
use \Yii;
use yii\helpers\Html;
?>
<meta charset="<?= $coreProperties->getCharset() ?>">
<!-- Use minimum-scale=1.0, maximum-scale=1.0, user-scalable=no for mobile applications -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php if( isset( $this->params['desc'] ) ) { ?>
	<meta name="description" content="<?=$this->params['desc']?>">
<?php } ?>
<?php if( isset( $this->params['meta'] ) ) { ?>
	<meta name="keywords" content="<?=$this->params['meta']?>">
<?php } ?>

<?= Html::csrfMetaTags() ?>

<title><?= $this->title ?></title>

<!-- IE fix for console -->
<script type="text/javascript"> if ( !window.console ) console = { log: function() {} }; </script>

<!-- Icons -->
<link href="images/icons/favicon.ico" rel="shortcut icon">
<link href="images/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

<?php $this->head(); ?>