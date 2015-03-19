<?php
namespace themes\basic\assets;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

class AssetLoaderPrivate extends AssetBundle {

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();

		// Path Configuration

	    $this->sourcePath = dirname( __DIR__ ) . '/resources';

		// Load CSS
	    $this->css     = [
	            "styles/private.css"
	    ];

		// Load Javascript
	    $this->js      = [
            "scripts/vendor/conditionizr.min.js",
            "conditionizr/detects/ie6-ie7-ie8-ie9.js",
            "scripts/vendor/imagesloaded.pkgd.min.js",
            "scripts/cmgtools/cmg-ajax-processor.js",
            "scripts/cmgtools/cmg-modules.js",
            "scripts/cmgtools/cmg-utilities.js",
            "scripts/main.js",
            "scripts/private.js"
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