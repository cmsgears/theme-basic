<?php
namespace themes\basic\assets;

/**
 * LandingAssets registers the assets specific to landing page.
 *
 * @since 1.0.0
 */
class LandingAssets extends AssetBundle {

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
    public $css = [
		'styles/landing.css'
    ];

    // Protected --------------

    // Private ----------------

    // Traits ------------------------------------------------------

    // Constructor and Initialisation ------------------------------

	public function init() {

		parent::init();

		$this->js[] = 'scripts/main.js';
		$this->js[] = 'scripts/search.js';
		$this->js[] = 'scripts/sliders.js';
		$this->js[] = 'scripts/popups.js';
	}

    // Instance methods --------------------------------------------

    // Yii interfaces ------------------------

    // Yii parent classes --------------------

    // CMG interfaces ------------------------

    // CMG parent classes --------------------

    // LandingAssets -------------------------

}
