<?php
namespace themes\basic\assets;

// Yii Imports
use \Yii;

class LandingAssetBundle extends AssetBundle {

	// Variables ---------------------------------------------------

	// Public ----

	// Load css
    public $css     = [
		'styles/landing.css'
    ];

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();
	}
}

?>