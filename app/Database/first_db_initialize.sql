DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` TEXT NOT NULL,
  `birth_date` DATE NOT NULL,
  `master_department_id` int(11) NOT NULL,
  `master_position_id` int(11) NOT NULL,
  `entry_date` DATE NOT NULL,
  `status` varchar(11) NULL,
  `created_by` int(11) NOT NULL,
  `date_time_created` DATETIME NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_time_modified` DATETIME NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `master_department`;
CREATE TABLE IF NOT EXISTS `master_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` varchar(11) NULL,
  `created_by` int(11) NOT NULL,
  `date_time_created` DATETIME NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_time_modified` DATETIME NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `master_position`;
CREATE TABLE IF NOT EXISTS `master_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` varchar(11) NULL,
  `created_by` int(11) NOT NULL,
  `date_time_created` DATETIME NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_time_modified` DATETIME NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `master_kpi`;
CREATE TABLE IF NOT EXISTS `master_kpi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objective` TEXT NOT NULL,
  `kpi` varchar(255) NOT NULL,
  `uom` varchar(255) NOT NULL,
  `threshold` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `max` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `ytd_method` varchar(255) NOT NULL,
  `status` varchar(11) NULL,
  `created_by` int(11) NOT NULL,
  `date_time_created` DATETIME NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_time_modified` DATETIME NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `user_kpi`;
CREATE TABLE IF NOT EXISTS `user_kpi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `master_kpi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `actual_value` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `status` varchar(11) NULL,
  `created_by` int(11) NOT NULL,
  `date_time_created` DATETIME NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_time_modified` DATETIME NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `user_kpi_problem`;
CREATE TABLE IF NOT EXISTS `user_kpi_problem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_kpi_id` int(11) NOT NULL,
  `problem` TEXT NOT NULL,
  `status` varchar(11) NULL,
  `created_by` int(11) NOT NULL,
  `date_time_created` DATETIME NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_time_modified` DATETIME NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `user_kpi_action`;
CREATE TABLE IF NOT EXISTS `user_kpi_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_kpi_problem_id` int(11) NOT NULL,
  `action` TEXT NOT NULL,
  `status` varchar(11) NULL,
  `created_by` int(11) NOT NULL,
  `date_time_created` DATETIME NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_time_modified` DATETIME NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
);