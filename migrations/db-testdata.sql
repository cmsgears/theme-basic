/* ================================ Theme Basic ============================================== */

SET FOREIGN_KEY_CHECKS=0;

--
-- Dumping data for table `cmg_core_template`
--

INSERT INTO `cmg_core_template` (`name`,`description`,`type`,`layout`,`viewPath`,`adminView`,`frontendView`,`content`) VALUES 
	('form','It can be used to display form.','form','form','@themes/basic/views/templates/form',null,'form',null);

SET FOREIGN_KEY_CHECKS=1;