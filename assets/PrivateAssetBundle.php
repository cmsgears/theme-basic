<?php
namespace themes\basic\assets;

// Yii Imports
use \Yii;
use yii\web\View;

class PrivateAssetBundle extends AssetBundle {

	// Variables ---------------------------------------------------

	// Public ----

	// Load css
    public $css     = [
		'styles/private.css'
    ];

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();
	}

	// Additional Assets Registration ------------------------------

	public function registerAssetFiles( $view ) {

		parent::registerAssetFiles( $view );

    	$siteUrl = "var fileUploadUrl 	= '" . Yii::$app->homeUrl . "apix/file/file-handler';";

		$view->registerJs( $siteUrl, View::POS_END );
	}
}

?>