<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

use cmsgears\core\common\base\Migration;

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
class m180812_112655_theme_basic extends Migration {

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
		$this->insertThemeTemplates();

		// Site
		$this->configureTheme();
    }

	private function insertTheme() {

		$columns = [ 'createdBy', 'modifiedBy', 'name', 'slug', 'type', 'description', 'renderer', 'basePath', 'createdAt', 'modifiedAt', 'data' ];

		$themes = [
			[ $this->master->id, $this->master->id, 'Basic', 'basic', CoreGlobal::TYPE_SITE, 'Blog Theme.', 'default', '@themes/blog', DateUtil::getDateTime(), DateUtil::getDateTime(), null ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_theme', $columns, $themes );

		if( Yii::$app->controller->default ) {

			// Update default
			$this->update( $this->cmgPrefix . 'core_theme', [ 'default' => false ], [ 'default' => true ] );

			// Make current as default
			$this->update( $this->cmgPrefix . 'core_theme', [ 'default' => true ], "slug='blog'" );
		}
	}

	private function insertThemeTemplates() {

		$theme	= Theme::findBySlug( 'basic' );

		$columns = [ 'themeId', 'createdBy', 'modifiedBy', 'name', 'slug', 'icon', 'type', 'active', 'description', 'classPath', 'renderer', 'fileRender', 'layout', 'layoutGroup', 'viewPath', 'view', 'createdAt', 'modifiedAt', 'htmlOptions', 'content', 'data' ];

		$templates = [
			// Theme Templates - Widget
			//[ $theme->id, $this->master->id, $this->master->id, 'Address', "address", null, CmsGlobal::TYPE_WIDGET, true, 'It can be used to display address and location.', null, 'default', true, null, false, '@themeTemplates/widget/address', null, DateUtil::getDateTime(), DateUtil::getDateTime(), null, null, null ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_template', $columns, $templates );
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
