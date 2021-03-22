<?php
namespace themes\basic\assets;

// Yii Imports
use yii\web\View;

/**
 * AssetBundle registers the global assets.
 *
 * @since 1.0.0
 */
class AssetBundle extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@themes/basic/resources';

	/**
	 * @inheritdoc
	 */
	public $cssOptions = [
		'position' => View::POS_HEAD
	];

	/**
	 * @inheritdoc
	 */
	public $js = [
		// vendor

		// templates
        'scripts/templates/public.js',

		// apix
		'scripts/apix/public.js',

		// apps
        'scripts/apps/public.js',

		'scripts/apps/core/base.js',
		'scripts/apps/core/autoload.js',
		'scripts/apps/core/controllers/site.js'
	];

	/**
	 * @inheritdoc
	 */
	public $jsOptions = [
		'position' => View::POS_END
	];

	/**
	 * @inheritdoc
	 */
    public $depends = [
		'cmsgears\assets\effects\Animate',
		'cmsgears\icons\assets\IconAssets',
		'cmsgears\assets\cmgtools\Lazy',
		'cmsgears\assets\jquery\Jquery',
		'cmsgears\assets\jquery\JqueryUi',
		'foxslider\widgets\assets\FxsAssets',
		//'cmsgears\assets\utilities\Conditionizr',
		'cmsgears\assets\utilities\ImagesLoaded',
		'cmsgears\assets\templates\Handlebars',
		'cmsgears\assets\components\MCustomScrollbar',
		//'cmsgears\assets\components\NoUiSlider',
		//'cmsgears\assets\components\ProgressBar',
		'cmsgears\assets\libraries\ChartJs',
		'cmsgears\assets\cmgtools\Velocity',
		'cmsgears\assets\components\IntlTelInput',
		'cmsgears\assets\vapps\BaseAssets',
		'cmsgears\assets\vapps\FormAssets',
		'cmsgears\assets\vapps\NotifyAssets'
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

    // AssetBundle ---------------------------

}
