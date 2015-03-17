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

		// The path for images directly accessed using the img tag 
		Yii::setAlias( "@images", "@web/images" );
    }
}