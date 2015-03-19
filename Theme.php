<?php
namespace themes\basic;

use \Yii;

class Theme extends \yii\base\Theme {

    public $pathMap = [
        '@frontend/views' => '@themes/basic/views',
        '@frontend/modules' => '@themes/basic/modules'
    ];

    public function init() {

        parent::init();

		// The path for pre-defined images (logo etc) directly accessed using the img tag and placed within the frontend/web/images directory.
		Yii::setAlias( "@images", "@web/images" );
    }
}