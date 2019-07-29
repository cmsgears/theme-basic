<?php
// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

use cmsgears\core\common\models\entities\ObjectData;
use cmsgears\core\common\models\entities\Site;
use cmsgears\core\common\models\entities\User;
use cmsgears\core\common\models\entities\Theme;
use cmsgears\core\common\models\entities\Template;

use cmsgears\core\common\utilities\DateUtil;

/**
 * The basic theme migration inserts the theme data.
 *
 * @since 1.0.0
 */
class m180812_112655_theme_basic extends \cmsgears\core\common\base\Migration {

	// Public variables

	// Private Variables

	private $cmgPrefix;
	private $sitePrefix;
	private $themePrefix;

	private $site;

	private $master;

	public function init() {

		// Table prefix
		$this->cmgPrefix	= Yii::$app->migration->cmgPrefix;
		$this->sitePrefix	= Yii::$app->migration->sitePrefix;
		$this->themePrefix	= 'basic';

		$this->site		= Site::findBySlug( CoreGlobal::SITE_MAIN );
		$this->master	= User::findByUsername( Yii::$app->migration->getSiteMaster() );

		Yii::$app->core->setSite( $this->site );
	}

    public function up() {

		// Theme
		$this->insertTheme();

		// Templates
		$this->insertTemplates();

		// Objects
		$this->insertObjects();

		// Site
		$this->configureTheme();
    }

	private function insertTheme() {

		$columns = [ 'createdBy', 'modifiedBy', 'name', 'slug', 'type', 'description', 'renderer', 'basePath', 'createdAt', 'modifiedAt', 'data' ];

		$themes = [
			[ $this->master->id, $this->master->id, 'Basic', 'basic', CoreGlobal::TYPE_SITE, 'Basic Theme.', 'default', '@themes/basic', DateUtil::getDateTime(), DateUtil::getDateTime(), NULL ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_theme', $columns, $themes );

		if( Yii::$app->controller->default ) {

			// Update default
			$this->update( $this->cmgPrefix . 'core_theme', [ 'default' => false ], [ 'default' => true ] );

			// Make current as default
			$this->update( $this->cmgPrefix . 'core_theme', [ 'default' => true ], "slug='basic'" );
		}
	}

	private function insertTemplates() {

		$theme	= Theme::findBySlug( 'basic' );
		$prefix	= $this->themePrefix;

		$master	= $this->master;

		$columns = [ 'themeId', 'createdBy', 'modifiedBy', 'name', 'slug', 'type', 'icon', 'title', 'active', 'description', 'classPath', 'dataPath', 'dataForm', 'attributesPath', 'attributesForm', 'configPath', 'configForm', 'settingsPath', 'settingsForm', 'renderer', 'fileRender', 'layout', 'layoutGroup', 'viewPath', 'view', 'createdAt', 'modifiedAt', 'htmlOptions', 'content', 'data' ];

		$templates = [
			// Theme Templates
			[ $theme->id, $master->id, $master->id, 'Contact', "$prefix-contact", 'block', null, null, true, 'Default layout for contact block.', null, null, null, null, null, null, null, 'templates\models\core\settings\BlockSettings', '@templates/core/block/default/forms', 'default', true, null, false, '@themeTemplates/block/contact', null, DateUtil::getDateTime(), DateUtil::getDateTime(), '{ "class": "block-basic block-default" }', null, null ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_template', $columns, $templates );
	}

	private function insertObjects() {

		$theme	= Theme::findBySlug( 'basic' );
		$prefix	= $this->themePrefix;

		$master	= $this->master;

		$status	= ObjectData::STATUS_ACTIVE;

		$columns = [ 'themeId', 'siteId', 'themeId', 'templateId', 'avatarId', 'bannerId', 'videoId', 'galleryId', 'createdBy', 'modifiedBy', 'name', 'slug', 'type', 'icon', 'texture', 'title', 'description', 'classPath', 'link', 'status', 'visibility', 'order', 'pinned', 'featured', 'createdAt', 'modifiedAt', 'htmlOptions', 'summary', 'content', 'data', 'gridCache', 'gridCacheValid', 'gridCachedAt' ];

		$objects = [
			// Theme Objects
			//[ $theme->id, $site->id, NULL, $block->id, NULL, NULL, NULL, NULL, $master->id, $master->id, 'Object 1', 'object-1', CoreGlobal::TYPE_DEFAULT, 'icon', 'texture', NULL, NULL, NULL, NULL, 16000, 1500, 0, 0, 0, DateUtil::getDateTime(), DateUtil::getDateTime(), NULL, NULL, NULL, NULL, NULL, 0, NULL ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_object', $columns, $objects );
	}

	private function configureTheme() {

		// Theme
		$mainTheme = Theme::findBySlug( 'basic' );

		// Site
		$siteId = $this->site->id;

		if( Yii::$app->controller->activate ) {

			$this->update( $this->cmgPrefix . 'core_site', [ 'themeId' => $mainTheme->id ], "id=$siteId" );
		}
	}

    public function down() {

        echo "m180812_112655_theme_basic will be deleted with m160621_014408_core.\n";

        return true;
    }

}
