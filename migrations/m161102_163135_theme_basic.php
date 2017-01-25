<?php
// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

use cmsgears\core\common\models\entities\Site;
use cmsgears\core\common\models\entities\User;
use cmsgears\core\common\models\entities\Template;
use cmsgears\core\common\models\entities\Theme;

use cmsgears\core\common\utilities\DateUtil;

class m161102_163135_theme_basic extends \yii\db\Migration {

	// Public variables

	// Make this theme as default theme.
	public $default 	= true;

	// Allow this theme to be applied for site using current site slug.
	public $activate	= true;

	// Private Variables

	private $prefix;

	private $site;

	private $master;

	public function init() {

		// Fixed
		$this->prefix	= 'cmg_';

		$this->site		= Site::findBySlug( Yii::$app->migration->siteSlug );
		$this->master	= User::findByUsername( Yii::$app->migration->siteMaster );

		Yii::$app->core->setSite( $this->site );
	}

    public function up() {

		// Theme
		$this->insertTheme();

		// Templates
		$this->insertThemeTemplates();

		// Site
		$this->configureTheme();
    }

	private function insertTheme() {

		$columns = [ 'createdBy', 'modifiedBy', 'name', 'slug', 'description', 'renderer', 'basePath', 'createdAt', 'modifiedAt', 'data' ];

		$themes = [
			[ $this->master->id, $this->master->id, 'Basic','basic', 'Basic Theme.', 'default', '@themes/basic', DateUtil::getDateTime(), DateUtil::getDateTime(), null ]
		];

		$this->batchInsert( $this->prefix . 'core_theme', $columns, $themes );

		if( $this->default ) {

			// Update default
			$this->update( $this->prefix . 'core_theme', [ 'default' => false ], [ 'default' => true ] );

			// Make current as default
			$this->update( $this->prefix . 'core_theme', [ 'default' => true ], "slug='basic'" );
		}
	}

	private function insertThemeTemplates() {

		$columns = [ 'createdBy', 'modifiedBy', 'name', 'slug', 'icon', 'type', 'description', 'renderer', 'fileRender', 'layout', 'layoutGroup', 'viewPath', 'createdAt', 'modifiedAt', 'content', 'data' ];

		$templates = [
			[ $this->master->id, $this->master->id, 'Form', 'form', null, 'form', 'It can be used to display public forms.', 'default', true, 'form/default', false, 'views/templates/form/default', DateUtil::getDateTime(), DateUtil::getDateTime(), null, null ]
		];

		$this->batchInsert( $this->prefix . 'core_template', $columns, $templates );
	}

	private function configureTheme() {

		// Theme
		$mainTheme	= Theme::findBySlug( 'basic' );

		// Site
		$siteId		= $this->site->id;

		if( $this->activate ) {

			$this->update( $this->prefix . 'core_site', [ 'themeId' => $mainTheme->id ], "id=$siteId" );
		}
	}

    public function down() {

        echo "m161102_163135_theme_basic will be deleted with m160621_014408_core.\n";

        return true;
    }
}