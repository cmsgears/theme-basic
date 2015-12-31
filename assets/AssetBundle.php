<?php
namespace themes\basic\assets;

// Yii Imports
use \Yii;
use yii\web\View;

class AssetBundle extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Public ----

	// Path Configuration
	public $sourcePath	= '@themes/basic/resources';

	// Position to load css
    public $cssOptions = [
        'position' => View::POS_HEAD
    ];

	// Load Javascript
    public $js      = [
        'scripts/vendor/imagesloaded.pkgd-3.2.0.min.js',
        'scripts/main.js',
        'scripts/api-processor.js'
    ];

	// Position to load Javascript
    public $jsOptions = [
        'position' => View::POS_END
    ];

	// Define dependent Asset Loaders
    public $depends = [
		'yii\web\JqueryAsset',
		'cmsgears\core\common\assets\CMTAssetBundle',
		'cmsgears\widgets\aform\assets\FormAssetBundle'
    ];

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();
	}

	// Additional Assets Registration ------------------------------

	public function registerAssetFiles( $view ) {

		parent::registerAssetFiles( $view );

    	$siteUrl = "var siteUrl 	= '" . Yii::$app->homeUrl . "';
    				var ajaxUrl 	= '" . Yii::$app->homeUrl . "apix';
					var loginUrl 	= '" . Yii::$app->homeUrl . "apix/login';";

		$view->registerJs( $siteUrl, View::POS_END );
	}
}

?>