<?php
use themes\basic\assets\AssetLoaderPublic;

AssetLoaderPublic::register( $this );

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
		<div id='pre-loader-page' class="max-area-cover"><div class="valign-center fa fa-5x fa-spinner fa-spin"></div></div>
		<?php include dirname( __FILE__ ) . "/header-common.php"; ?>
        <div class="container-main">
	        <div class="wrap-content">
	        	<?= $content ?>
	        </div>
	        <?php include dirname( __FILE__ ) . "/footer.php"; ?>
        </div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>