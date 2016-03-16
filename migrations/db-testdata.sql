/* ================================ Theme Basic ============================================== */

SET FOREIGN_KEY_CHECKS=0;

--
-- Theme
--

INSERT INTO `cmg_core_theme` (`createdBy`,`modifiedBy`,`name`,`slug`,`description`,`renderer`,`basePath`,`createdAt`,`modifiedAt`,`data`) VALUES  
	(1,1,'Basic','basic','Basic Theme.',NULL,'@themes/basic','2016-01-01 17:04:54','2016-01-01 17:06:22',NULL);

--
-- Map Theme with main site
--

SELECT @site := `id` FROM cmg_core_site WHERE slug = 'main';
SELECT @theme := `id` FROM cmg_core_theme WHERE slug = 'basic';

UPDATE cmg_core_site set themeId=@theme where id=@site;

--
-- Theme Templates
--

INSERT INTO `cmg_core_template` (`createdBy`,`modifiedBy`,`name`,`slug`,`type`,`renderer`,`fileRender`,`description`,`layout`,`layoutGroup`,`viewPath`,`createdAt`,`modifiedAt`,`content`) VALUES
	(1,1,'Form','form','form','default',1,'It can be used to display public forms.','form/simple',0,'views/templates/form/simple','2016-01-01 17:04:54','2016-01-01 17:06:22',NULL);


SET FOREIGN_KEY_CHECKS=1;