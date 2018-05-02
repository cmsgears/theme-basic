<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace themes\basic\assets;

// Yii Imports
use yii\web\AssetBundle as BaseAssetBundle;
use yii\web\View;

class AssetBundle extends BaseAssetBundle {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	// Path Configuration
	public $sourcePath	= '@themes/basic/resources';

	// CSS Position
    public $cssOptions = [
        'position' => View::POS_HEAD
    ];

	// Load JS
    public $js = [
        'scripts/main.js',
        'scripts/apps/public.js'
    ];

	// JS Position
    public $jsOptions = [
        'position' => View::POS_END
    ];

	// Dependent Assets
    public $depends = [
    	//'cmsgears\core\common\assets\Jquery',
		'cmsgears\core\common\assets\JqueryUi',
		'cmsgears\core\common\assets\CmgToolsJs',
		'cmsgears\core\common\assets\MCustomScrollbar',
		'cmsgears\core\common\assets\ImagesLoaded',
		'cmsgears\widgets\aform\assets\FormAssets',
		'cmsgears\icons\assets\IconAssets',
		'cmsgears\core\common\assets\Handlebars'
    ];

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// InlineAssets --------------------------

}
