<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace themes\basic;

// Yii Imports
use Yii;

/**
 * Theme represents an application theme.
 *
 * @since 1.0.0
 */
class Theme extends \cmsgears\core\common\base\Theme {

	// Variables ---------------------------------------------------

	// Globals ----------------

	const SLIDER_MAIN	= 'main';

	// Public -----------------

    public $pathMap = [
        '@frontend/views' => '@themes/basic/views',
        '@cmsgears' => '@themes/basic/modules/cmsgears'
    ];

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

    public function init() {

        parent::init();

		// The path for templates
		Yii::setAlias( '@themeTemplates', '@themes/basic/views/templates' );
	}

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// Theme ---------------------------------

}
