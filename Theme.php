<?php
namespace themes\basic;

// Yii Imports
use \Yii;

class Theme extends \cmsgears\core\common\base\Theme {

    public $pathMap = [
        '@frontend/views' => '@themes/basic/views',
        '@cmsgears' => '@themes/basic/modules/cmsgears'
    ];

    public function init() {

        parent::init();

		// The path for templates
		Yii::setAlias( '@templates', '@themes/basic/views/templates' );
	}
}

?>