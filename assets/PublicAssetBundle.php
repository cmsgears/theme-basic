<?php
namespace themes\basic\assets;

// Yii Imports
use \Yii;
use yii\web\View;

class PublicAssetBundle extends AssetBundle {

	// Variables ---------------------------------------------------

	// Public ----

	// Load css
    public $css     = [
		'styles/public.css'
    ];

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();
	}
}

?>