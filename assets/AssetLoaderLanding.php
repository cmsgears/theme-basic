<?php
namespace cmsgears\themes\basic\frontend\assets;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

class AssetLoaderLanding extends AssetBundle {

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();

		// Path Configuration

	    $this->sourcePath = dirname( __DIR__ ) . '/resources';

		// Load CSS
 
	    $this->css     = [
	    		"styles/vendor/jquery.mCustomScrollbar.css",
	            "styles/landing.css"
	    ];

		// Load Javascript

	    $this->js      = [
            "scripts/vendor/condi-jqui-jqeasing.js",
            "conditionizr/detects/ie6-ie7-ie8-ie9.js",
            "scripts/vendor/jquery.mCustomScrollbar.js",
            "scripts/vendor/imagesloaded.pkgd.min.js",
            "scripts/cmgtools/cmg-ajax-processor.js",
            "scripts/cmgtools/cmg-modules.js",
            "scripts/cmgtools/cmg-utilities.js",
            "scripts/main.js",
            "scripts/landing.js"
	    ];

		// Define the Position to load Assets
	    $this->jsOptions = [
	        "position" => View::POS_END
	    ];

		// Define dependent Asset Loaders
	    $this->depends = [
			'yii\web\JqueryAsset'
	    ];
	}
}

?>