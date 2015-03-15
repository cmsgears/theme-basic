<?php
namespace cmsgears\themes\basic\frontend;

use \Yii;

class Theme extends \yii\base\Theme {

    public $pathMap = [
        '@frontend/views' => '@cmsgears/themes/basic/frontend/views',
        '@cmsgears/modules' => '@cmsgears/themes/basic/frontend/modules/cmg'
    ];

    public function init() {

        parent::init();

		// The path for images directly accessed using the img tag 
		Yii::setAlias( "@images", "@web/assets/images" );
    }
}