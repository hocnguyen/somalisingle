CREATE TABLE `dating_message` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `from_user` BIGINT(20) NOT NULL,
  `to_user` BIGINT(20) NOT NULL,
  `title` CHAR(255) DEFAULT NULL,
  `title_catalog` INT(11) DEFAULT NULL,
  `message` TEXT NOT NULL,
  `from_delete` TINYINT(1) NOT NULL DEFAULT '0',
  `to_delete` TINYINT(1) NOT NULL DEFAULT '0',
  `is_read` TINYINT(1) NOT NULL DEFAULT '0',
  `photo_no` CHAR(255) DEFAULT NULL,
  `trying_read` TINYINT(1) DEFAULT NULL,
  `created` DATETIME DEFAULT NULL,
  `updated` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

CREATE TABLE `dating_message_folder` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `title` CHAR(255) DEFAULT NULL,
  `user_created` BIGINT(20) DEFAULT NULL,
  `created` DATETIME DEFAULT NULL,
  `updated` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

CREATE TABLE `dating_message_folder_bridge` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `folder_id` INT(11) DEFAULT NULL,
  `from_user` BIGINT(20) DEFAULT NULL,
  `user_created` BIGINT(20) DEFAULT NULL,
  `created` DATETIME DEFAULT NULL,
  `updated` DATETIME DEFAULT NULL,
  KEY `Auto_Increment_Key` (`id`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

CREATE TABLE `ratings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `score` FLOAT NOT NULL,
  `photo_id` INT(11) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  `ip` VARCHAR(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1

CREATE TABLE `user_photo_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `description` text,
  `is_private` int(1) DEFAULT '0' COMMENT '0: public , 1: Private',
  `is_comment` int(1) DEFAULT '0' COMMENT '0: yes, 1: no',
  `is_photo_main` int(1) DEFAULT '0' COMMENT '0: yes, 1: no',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE `photo_comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `photo_id` INT(11) DEFAULT NULL,
  `content` TEXT,
  `created` DATETIME DEFAULT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MYISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

CREATE TABLE `dating_friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) DEFAULT NULL,
  `to` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT '0' COMMENT '0: friend, 1: unfriend',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci


DROP TABLE IF EXISTS `blogcats`;

CREATE TABLE `blogcats` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parentid` int(10) DEFAULT NULL,
  `title` varchar(155) NOT NULL DEFAULT '',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(125) NOT NULL DEFAULT '',
  `position` int(10) NOT NULL DEFAULT '0',
  `metadesc` varchar(255) NOT NULL DEFAULT '',
  `metakeys` varchar(255) NOT NULL DEFAULT '',
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `viewperms` text,
  `addpostsperms` text,
  `addcommentsperms` text,
  `addfilesperms` text,
  `autoaddperms` text,
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `parentid` (`parentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `blogcats` */

/*Table structure for table `blogcomments` */

DROP TABLE IF EXISTS `blogcomments`;

CREATE TABLE `blogcomments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `postid` varchar(125) NOT NULL DEFAULT '',
  `authorid` int(10) NOT NULL DEFAULT '0',
  `postdate` int(10) NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `postid` (`postid`),
  KEY `authorid` (`authorid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `blogcomments` */

/*Table structure for table `blogposts` */

DROP TABLE IF EXISTS `blogposts`;

CREATE TABLE `blogposts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `catid` int(10) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `alias` varchar(125) NOT NULL DEFAULT '',
  `language` varchar(3) NOT NULL DEFAULT '',
  `metadesc` varchar(255) NOT NULL DEFAULT '',
  `metakeys` varchar(255) NOT NULL DEFAULT '',
  `views` int(10) NOT NULL DEFAULT '0',
  `rating` int(10) NOT NULL DEFAULT '0',
  `totalvotes` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `authorid` int(10) NOT NULL DEFAULT '0',
  `postdate` int(10) NOT NULL DEFAULT '0',
  `last_updated_date` int(10) NOT NULL DEFAULT '0',
  `last_updated_author` int(10) NOT NULL DEFAULT '0',
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `catid` (`catid`),
  CONSTRAINT `FK_blogposts` FOREIGN KEY (`catid`) REFERENCES `blogcats` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `blogposts` */

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL DEFAULT '',
  `email` varchar(55) NOT NULL DEFAULT '',
  `subject` varchar(55) NOT NULL DEFAULT '',
  `content` text,
  `postdate` int(10) NOT NULL DEFAULT '0',
  `sread` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `subject` (`subject`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `contactus` */

/*Table structure for table `custompages` */

DROP TABLE IF EXISTS `custompages`;

CREATE TABLE `custompages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `dateposted` int(10) NOT NULL DEFAULT '0',
  `authorid` int(10) NOT NULL DEFAULT '0',
  `last_edited_date` int(10) NOT NULL DEFAULT '0',
  `last_edited_author` int(10) NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(3) NOT NULL DEFAULT '',
  `metadesc` varchar(255) NOT NULL DEFAULT '',
  `metakeys` varchar(255) NOT NULL DEFAULT '',
  `visible` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`,`language`),
  KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


