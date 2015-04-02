<?php
use themes\basic\assets\AssetLoaderPrivate;

AssetLoaderPrivate::register( $this );

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
        <div class="container-main container-private">
	        <div class="wrap-content">
	        	<div class="wrap-content-private clearfix">
		        	<div class="box-sidebar col12x3">
		        		<?php include dirname( __FILE__ ) . "/sidebar.php"; ?>
		        	</div>
		        	<div class="box-content col12x9">
		        		<?= $content ?>
		        	</div>
		        </div>
	        </div>
        </div>
        <?php include dirname( __FILE__ ) . "/footer-private.php"; ?>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>