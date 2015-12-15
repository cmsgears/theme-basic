<?php
use themes\basic\assets\LandingAssetBundle;

LandingAssetBundle::register( $this );

// Variables available for headers, sidebars and footers included within this layout
$coreProperties = $this->context->getCoreProperties();
$themePath		= Yii::getAlias( "@themes/basic" );
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= $coreProperties->getLanguage() ?>">
    <head>
		<?php include "$themePath/views/headers/main.php"; ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
		<div id='pre-loader-main' class="max-area-cover"><div class="valign-center cmti cmti-5x cmti-spinner-1 spin"></div></div>
		<?php include "$themePath/views/headers/public.php"; ?>
        <div class="container-main">
	        <div class="wrap-content wrap-content-main">
	        	<div class="content">
	        		<?= $content ?>
	        	</div>
	        </div>
	        <?php include "$themePath/views/footers/common.php"; ?>
        </div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>