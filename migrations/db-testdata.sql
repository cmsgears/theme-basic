/* ================================ Theme Basic ============================================== */

SET FOREIGN_KEY_CHECKS=0;

--
-- Dumping data for table `cmg_core_template`
--

INSERT INTO `cmg_core_template` (`createdBy`,`modifiedBy`,`name`,`slug`,`description`,`type`,`layout`,`viewPath`,`adminView`,`frontendView`,`createdAt`,`modifiedAt`,`content`) VALUES 
	(1,1,'Form Public','form-public','It can be used to display public forms.','form','form/public','@themes/basic/views/templates/form',null,'public','2015-08-16 16:48:32','2015-08-16 16:48:32',null),
	(1,1,'Form Private','form-private','It can be used to display private forms.','form','form/private','@themes/basic/views/templates/form',null,'private','2015-08-16 16:48:32','2015-08-16 16:48:32',null);

SET FOREIGN_KEY_CHECKS=1;