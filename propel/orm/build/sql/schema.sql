
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- author
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `author`;


CREATE TABLE `author`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`password` CHAR(42)  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
