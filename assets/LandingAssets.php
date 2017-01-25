<?php
namespace themes\basic\assets;

// Yii Imports
use \Yii;

class LandingAssets extends AssetBundle {

	// Variables ---------------------------------------------------

	// Public ----

	// Load css
    public $css     = [
		'styles/landing.css'
    ];

	// Constructor and Initialisation ------------------------------

	public function init()  {

		parent::init();

		// Foxslider required on landing page
		$this->depends[]	= 'foxslider\widgets\assets\FxsAssets';
	}
}