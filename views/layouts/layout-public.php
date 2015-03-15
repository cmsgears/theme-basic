<?php
use cmsgears\themes\basic\frontend\assets\AssetLoaderPublic;

AssetLoaderPublic::register( $this );

// for CMS Purpose
$coreProperties = $this->context->getCoreProperties();
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= $coreProperties->getLanguage() ?>">
    <head>
		<?php include dirname( __FILE__ ) . "/header-main.php"; ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
		<div id='pre-loader' class="max-area-spinner"><div class="valign-center fa fa-5x fa-spinner fa-spin"></div></div>
        <div class="container-main">
	        <?php include dirname( __FILE__ ) . "/header-public.php"; ?>
	        <div class="wrap-content">
	        	<?= $content ?>
	        </div>
	        <?php include dirname( __FILE__ ) . "/footer.php"; ?>
        </div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>
