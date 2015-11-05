<?php
use themes\basic\assets\LandingAssetBundle;

LandingAssetBundle::register( $this );

// Variables available for headers, sidebars and footers included within this layout
$coreProperties = $this->context->getCoreProperties();
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= $coreProperties->getLanguage() ?>">
    <head>
		<?php include dirname( __DIR__ ) . "/headers/main.php"; ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
		<div id='pre-loader-main' class="max-area-cover"><div class="valign-center cmti cmti-5x cmti-flexible-o spin"></div></div>
		<?php include dirname( __DIR__ ) . "/headers/landing.php"; ?>
        <div class="container-main">
	        <div class="wrap-content">
	        	<?= $content ?>
	        </div>
	        <?php include dirname( __DIR__ ) . "/footers/common.php"; ?>
        </div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>