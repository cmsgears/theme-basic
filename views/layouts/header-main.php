<?php
use \Yii;
use yii\helpers\Html;

$actionId		= $this->context->action->id;
$page			= null;
?>
<meta charset="<?= $coreProperties->getCharset() ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="<?php if( isset( $page ) ) echo $page->getDesc(); ?>">
<meta name="keywords" content="<?php if( isset( $page ) ) echo $page->getMetaTags(); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?= Html::csrfMetaTags() ?>

<!-- Social sharing meta tags for FB Posts and Twitter Cards -->
<!--
<meta property="og:title" content="title">
<meta property="og:type" content="website">
<meta property="og:url" content="site url">
<meta property="og:image" content="<image link for facebook wallpost>">
<meta property="og:site_name" content="<site name>">
<meta property="og:description" content="<site description>">
<link rel="canonical" href="canonical link"/>

<meta name="twitter:card" content="<card type - it can be summary, photo, product>">
<meta name="twitter:site" content="@<site name>">
<meta name="twitter:description" content="<card description>">
<meta name="twitter:image:src" content="<card image>">
<meta name="twitter:domain" content="<website domain>">
-->

<title><?= $this->title ?></title>

<!-- IE fix for console -->
<script type="text/javascript"> if ( !window.console ) console = { log: function() {} }; </script>

<!-- Icons -->
<link href="assets/images/icons/icon.ico" rel="shortcut icon">
<link href="assets/images/icons/icon.jpg" rel="apple-touch-icon-precomposed">

<?php $this->head(); ?>