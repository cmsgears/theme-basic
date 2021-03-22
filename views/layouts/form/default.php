<?php
// CMG Imports
use cmsgears\core\common\utilities\ContentUtil;

use themes\basic\assets\InlineAssets;

ContentUtil::initModel( $this );

InlineAssets::register( $this );

$this->registerAssetBundle( 'public' );

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
        <?php $this->beginBody(); ?>
		<?php include "$themePath/views/templates/components/spinners/page.php"; ?>
		<?php
			if( isset( $user ) ) {

				include "$themePath/views/headers/private.php";
			}
			else {

				include "$themePath/views/headers/public.php";
			}
		?>
        <div class="container container-main">
	        <div class="wrap-content wrap-content-main">
	        	<div class="content">
	        		<?= $content ?>
	        	</div>
	        </div>
	        <?php include "$themePath/views/footers/public.php"; ?>
        </div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php
$this->endPage();
