<?php
// CMG Imports
use cmsgears\core\common\utilities\ContentUtil;
use cmsgears\core\common\utilities\CodeGenUtil;

use themes\basic\assets\InlineAssets;

ContentUtil::initModel( $this );

InlineAssets::register( $this );

$this->registerAssetBundle( 'landing' );

// Common variables available for headers, sidebars and footers included within this layout
$coreProperties = $this->context->getCoreProperties();
$themePath		= Yii::getAlias( '@themes/basic' );
$user			= Yii::$app->core->getUser();
$resourceUrl	= $coreProperties->getResourceUrl();
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= $coreProperties->getLanguage() ?>">
    <head>
		<?php include "$themePath/views/headers/main.php"; ?>
    </head>
    <body id="scroll-top">
		<?= CodeGenUtil::generateSeoH1( $this->params ) ?>
        <?php $this->beginBody(); ?>
		<?php include "$themePath/views/templates/components/spinners/page.php"; ?>
		<?php
			if( isset( $user ) ) {

				include "$themePath/views/headers/private.php";
			}
			else {

				include "$themePath/views/headers/landing.php";
			}
		?>
        <div class="container container-main container-main-landing">
	        <div class="wrap-content wrap-content-main wrap-content-landing">
	        	<div class="content">
	        		<?= $content ?>
	        	</div>
	        </div>
        </div>
        <?php include "$themePath/views/footers/public.php"; ?>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php
$this->endPage();
