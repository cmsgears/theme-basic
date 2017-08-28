<?php
// CMG Imports
use cmsgears\core\common\config\CoreGlobal;
use cmsgears\core\common\models\entities\Site;
use cmsgears\core\common\models\entities\User;
use cmsgears\core\common\models\entities\Theme;

use cmsgears\core\common\utilities\DateUtil;

class m160623_072812_theme_basic extends \yii\db\Migration {

	// Public variables

	// Make this theme as default theme.
	public $default 	= true;

	// Allow this theme to be applied for site using current site slug.
	public $activate	= true;

	// Private Variables

	private $cmgPrefix;
	private $appPrefix;

	private $site;

	private $master;

	public function init() {

		// Table prefix
		$this->cmgPrefix	= Yii::$app->migration->cmgPrefix;
		$this->appPrefix	= Yii::$app->migration->appPrefix;

		$this->site			= Site::findBySlug( CoreGlobal::SITE_MAIN );
		$this->master		= User::findByUsername( Yii::$app->migration->getSiteMaster() );
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

		$this->batchInsert( $this->cmgPrefix . 'core_theme', $columns, $themes );

		if( $this->default ) {

			// Update default
			$this->update( $this->cmgPrefix . 'core_theme', [ 'default' => false ], [ 'default' => true ] );

			// Make current as default
			$this->update( $this->cmgPrefix . 'core_theme', [ 'default' => true ], "slug='basic'" );
		}
	}

	private function insertThemeTemplates() {

		$columns = [ 'createdBy', 'modifiedBy', 'name', 'slug', 'icon', 'type', 'description', 'renderer', 'fileRender', 'layout', 'layoutGroup', 'viewPath', 'createdAt', 'modifiedAt', 'content', 'data' ];

		$templates = [
			[ $this->master->id, $this->master->id, 'Form', 'form', null, 'form', 'It can be used to display public forms.', 'default', true, 'form/default', false, 'views/templates/form/default', DateUtil::getDateTime(), DateUtil::getDateTime(), null, null ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_template', $columns, $templates );
	}

	private function configureTheme() {

		// Theme
		$mainTheme	= Theme::findBySlug( 'basic' );

		// Site
		$siteId		= $this->site->id;

		if( $this->activate ) {

			$this->update( $this->cmgPrefix . 'core_site', [ 'themeId' => $mainTheme->id ], "id=$siteId" );
		}
	}

    public function down() {

        echo "m161102_163135_theme_basic will be deleted with m160621_014408_core.\n";

        return true;
    }
}
