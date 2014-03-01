-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 01 Mars 2014 à 12:08
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `somalisingle`
--

-- --------------------------------------------------------

--
-- Structure de la table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('add_post', '0', 'return 3==$params[''value''];', 'N;'),
('add_post', '16813', 'return 3==$params[''value''];', 'N;'),
('add_post', '16816', 'return 3==$params[''value''];', 'N;'),
('admin', '0', '', 'N;'),
('admin', '1', NULL, 'N;'),
('admin', '118', NULL, 'N;'),
('admin', '16814', '', 'N;'),
('admin', '16819', NULL, 'N;'),
('admin', '2', NULL, 'N;'),
('admin', '92', NULL, 'N;'),
('guest', '100', NULL, 'N;'),
('guest', '115', NULL, 'N;'),
('guest', '140', NULL, 'N;'),
('guest', '58', NULL, 'N;'),
('guest', '71', NULL, 'N;'),
('guest', '72', NULL, 'N;'),
('guest', '79', NULL, 'N;'),
('guest', '84', NULL, 'N;'),
('guest', '90', NULL, 'N;'),
('manage_posts', '0', '', 'N;'),
('manage_posts', '16813', '', 'N;'),
('member', '16824', NULL, 'N;'),
('mod', '2', NULL, 'N;'),
('moderators', '0', '', 'N;'),
('moderators', '16813', '', 'N;'),
('moderators', '5', '', 'N;'),
('quest', '1', NULL, 'N;'),
('user', '0', '', 'N;'),
('user', '1', NULL, 'N;'),
('user', '102', NULL, 'N;'),
('user', '105', NULL, 'N;'),
('user', '106', NULL, 'N;'),
('user', '108', NULL, 'N;'),
('user', '109', NULL, 'N;'),
('user', '113', NULL, 'N;'),
('user', '119', NULL, 'N;'),
('user', '120', NULL, 'N;'),
('user', '121', NULL, 'N;'),
('user', '122', NULL, 'N;'),
('user', '125', NULL, 'N;'),
('user', '128', NULL, 'N;'),
('user', '147', NULL, 'N;'),
('user', '148', NULL, 'N;'),
('user', '149', NULL, 'N;'),
('User', '16', NULL, 'N;'),
('user', '16813', '', 'N;'),
('User', '17', NULL, 'N;'),
('user', '2', NULL, 'N;'),
('User', '29', NULL, 'N;'),
('user', '3', NULL, 'N;'),
('user', '30', NULL, 'N;'),
('user', '31', NULL, 'N;'),
('user', '34', NULL, 'N;'),
('user', '35', NULL, 'N;'),
('user', '4', NULL, 'N;'),
('user', '57', NULL, 'N;'),
('user', '58', NULL, 'N;'),
('user', '59', NULL, 'N;'),
('user', '61', NULL, 'N;'),
('user', '65', NULL, 'N;'),
('user', '67', NULL, 'N;'),
('user', '68', NULL, 'N;'),
('user', '69', NULL, 'N;'),
('user', '7', NULL, 'N;'),
('user', '74', NULL, 'N;'),
('user', '8', NULL, 'N;'),
('user', '80', NULL, 'N;'),
('user', '81', NULL, 'N;'),
('user', '82', NULL, 'N;'),
('user', '85', NULL, 'N;'),
('user', '86', NULL, 'N;'),
('user', '87', NULL, 'N;'),
('user', '89', NULL, 'N;'),
('user', '91', NULL, 'N;'),
('user', '92', NULL, 'N;'),
('user', '94', NULL, 'N;'),
('user', '95', NULL, 'N;'),
('user', '97', NULL, 'N;'),
('user', '98', NULL, 'N;'),
('waiting', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- Structure de la table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, 'System Administrator', '', 'N;'),
('editor', 2, 'Site Editor', '', 'N;'),
('guest', 2, 'Site Guest', '', 'N;'),
('member', 2, 'Site Member', 'return !Yii::app()->user->isGuest;', 'N;'),
('op_acp_access', 0, 'Admin: Enter The Admin Control Panel', '', 'N;'),
('op_blog_addcats', 0, 'Blog: Add Categories', '', 'N;'),
('op_blog_addposts', 0, 'Blog: Add Posts', '', 'N;'),
('op_blog_comments', 0, 'Blog: Manage Comments', '', 'N;'),
('op_blog_deletecats', 0, 'Blog: Delete Categories', '', 'N;'),
('op_blog_deletecomments', 0, 'Blog: Delete Comments', '', 'N;'),
('op_blog_deleteposts', 0, 'Blog: Delete Posts', '', 'N;'),
('op_blog_editcats', 0, 'Blog: Edit Categories', '', 'N;'),
('op_blog_editposts', 0, 'Blog: Edit Posts', '', 'N;'),
('op_blog_manage', 0, 'Blog: Manage Posts', '', 'N;'),
('op_blog_managecats', 0, 'Blog: Manage Categories', '', 'N;'),
('op_custompages_addpages', 0, 'Custom Pages: Add New Pages', '', 'N;'),
('op_custompages_deletepages', 0, 'Custom Pages: Delete Pages', '', 'N;'),
('op_custompages_editpages', 0, 'Custom Pages: Edit Pages', '', 'N;'),
('op_custompages_managepages', 0, 'Custom Pages: Manage Pages', '', 'N;'),
('op_doc_add_comments', 0, 'Documentations: Add Comments', '', 'N;'),
('op_doc_delete_comments', 0, 'Documentations: Delete Comments', '', 'N;'),
('op_doc_edit_docs', 0, 'Documentations: Edit Topics', '', 'N;'),
('op_doc_manage_comments', 0, 'Documentations: Manage Comments', '', 'N;'),
('op_extensions_addcats', 0, 'Extensions: Add Categories', '', 'N;'),
('op_extensions_addposts', 0, 'Extensions: Add Extensions', '', 'N;'),
('op_extensions_comments', 0, 'Extensions: Manage Comments', '', 'N;'),
('op_extensions_deletecats', 0, 'Extensions: Delete Categories', '', 'N;'),
('op_extensions_deletecomments', 0, 'Extensions: Delete Comments', '', 'N;'),
('op_extensions_deleteposts', 0, 'Extensions: Delete Extension', '', 'N;'),
('op_extensions_editcats', 0, 'Extensions: Edit Categories', '', 'N;'),
('op_extensions_editposts', 0, 'Extensions: Edit Extensions', '', 'N;'),
('op_extensions_manage', 0, 'Extensions: Manage Posts', '', 'N;'),
('op_extensions_managecats', 0, 'Extensions: Manage Categories', '', 'N;'),
('op_forum_posts', 0, 'Forum: Manage Forum Posts', '', 'N;'),
('op_forum_post_posts', 0, 'Forum: Post New Posts', '', 'N;'),
('op_forum_post_topics', 0, 'Forum: Post New Topics', '', 'N;'),
('op_forum_topics', 0, 'Forum: Manage Forum Topics', '', 'N;'),
('op_lang_copy_strings', 0, 'Languages: Copy Source Language Strings', '', 'N;'),
('op_lang_translate', 0, 'Languages: Translate Strings', '', 'N;'),
('op_roles_add_auth', 0, 'Roles: Add Auth Items', '', 'N;'),
('op_roles_add_authchild', 0, 'Roles: Add Auth Items Childs', '', 'N;'),
('op_roles_delete_auth', 0, 'Roles: Delete Auth Items', '', 'N;'),
('op_roles_edit_auth', 0, 'Roles: Edit Auth Items', '', 'N;'),
('op_settings_add_settings', 0, 'Settings: Add New Settings', '', 'N;'),
('op_settings_add_settings_groups', 0, 'Settings: Add Setting Groups', '', 'N;'),
('op_settings_delete_settings', 0, 'Settings: Delete Settings', '', 'N;'),
('op_settings_delete_settings_groups', 0, 'Settings: Delete Setting Groups', '', 'N;'),
('op_settings_edit_settings', 0, 'Settings: Edit Settings', '', 'N;'),
('op_settings_edit_settings_groups', 0, 'Settings: Edit Setting Groups', '', 'N;'),
('op_settings_revert_settings', 0, 'Settings: Revert Settings', '', 'N;'),
('op_settings_update_settings', 0, 'Settings: Update Settings', '', 'N;'),
('op_settings_view_settings', 0, 'Settings: View Settings', '', 'N;'),
('op_tutorials_addcats', 0, 'Tutorials: Add Categories', '', 'N;'),
('op_tutorials_addtutorials', 0, 'Tutorials: Add Tutorials', '', 'N;'),
('op_tutorials_comments', 0, 'Tutorials: Manage Comments', '', 'N;'),
('op_tutorials_deletecats', 0, 'Tutorials: Delete Categories', '', 'N;'),
('op_tutorials_deletecomments', 0, 'Tutorials: Delete Comments', '', 'N;'),
('op_tutorials_deletetutorials', 0, 'Tutorials: Delete Tutorials', '', 'N;'),
('op_tutorials_editcats', 0, 'Tutorials: Edit Categories', '', 'N;'),
('op_tutorials_edittutorials', 0, 'Tutorials: Edit Tutorials', '', 'N;'),
('op_tutorials_manage', 0, 'Tutorials: Manage Tutorials', '', 'N;'),
('op_tutorials_managecats', 0, 'Tutorials: Manage Categories', '', 'N;'),
('op_users_add_users', 0, 'Users: Add New Users', '', 'N;'),
('op_users_bulk_users', 0, 'Users: Perform Bulk Operations On Users', '', 'N;'),
('op_users_comment', 0, 'Users: Add Comments to profiles', '', 'N;'),
('op_users_delete_users', 0, 'Users: Delete Users', '', 'N;'),
('op_users_edit_users', 0, 'Users: Edit Users', '', 'N;'),
('op_users_manage_comments', 0, 'Users: Manage Comments', '', 'N;'),
('task_blog', 1, 'Task Manage Blog', '', 'N;'),
('task_custompages', 1, 'Task Manage Custom Pages', '', 'N;'),
('task_documentations', 1, 'Task Manage Documentations', '', 'N;'),
('task_extensions', 1, 'Task Manage Extensions', '', 'N;'),
('task_forum', 1, 'Task: Manage Forum', '', 'N;'),
('task_languages', 1, 'Task Manage System Languages', '', 'N;'),
('task_members', 1, 'Task Manage Users', '', 'N;'),
('task_roles', 1, 'Task Manage User Roles', '', 'N;'),
('task_settings', 1, 'Task Manage System Setting', '', 'N;'),
('task_tutorials', 1, 'Task Manage Tutorials', '', 'N;');

-- --------------------------------------------------------

--
-- Structure de la table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('manage_posts', 'add_post'),
('admin', 'editor'),
('admin', 'guest'),
('member', 'guest'),
('moderators', 'manage_posts'),
('admin', 'member'),
('editor', 'member'),
('admin', 'op_acp_access'),
('admin', 'op_blog_addcats'),
('task_blog', 'op_blog_addcats'),
('admin', 'op_blog_addposts'),
('member', 'op_blog_addposts'),
('task_blog', 'op_blog_addposts'),
('admin', 'op_blog_comments'),
('task_blog', 'op_blog_comments'),
('admin', 'op_blog_deletecats'),
('task_blog', 'op_blog_deletecats'),
('admin', 'op_blog_deletecomments'),
('task_blog', 'op_blog_deletecomments'),
('admin', 'op_blog_deleteposts'),
('task_blog', 'op_blog_deleteposts'),
('admin', 'op_blog_editcats'),
('task_blog', 'op_blog_editcats'),
('admin', 'op_blog_editposts'),
('task_blog', 'op_blog_editposts'),
('admin', 'op_blog_manage'),
('task_blog', 'op_blog_manage'),
('admin', 'op_blog_managecats'),
('task_blog', 'op_blog_managecats'),
('admin', 'op_custompages_addpages'),
('task_custompages', 'op_custompages_addpages'),
('admin', 'op_custompages_deletepages'),
('task_custompages', 'op_custompages_deletepages'),
('admin', 'op_custompages_editpages'),
('task_custompages', 'op_custompages_editpages'),
('admin', 'op_custompages_managepages'),
('task_custompages', 'op_custompages_managepages'),
('admin', 'op_doc_add_comments'),
('editor', 'op_doc_add_comments'),
('member', 'op_doc_add_comments'),
('task_documentations', 'op_doc_add_comments'),
('admin', 'op_doc_delete_comments'),
('task_documentations', 'op_doc_delete_comments'),
('admin', 'op_doc_edit_docs'),
('task_documentations', 'op_doc_edit_docs'),
('admin', 'op_doc_manage_comments'),
('editor', 'op_doc_manage_comments'),
('task_documentations', 'op_doc_manage_comments'),
('admin', 'op_extensions_addcats'),
('task_extensions', 'op_extensions_addcats'),
('admin', 'op_extensions_addposts'),
('member', 'op_extensions_addposts'),
('task_extensions', 'op_extensions_addposts'),
('admin', 'op_extensions_comments'),
('task_extensions', 'op_extensions_comments'),
('admin', 'op_extensions_deletecats'),
('task_extensions', 'op_extensions_deletecats'),
('admin', 'op_extensions_deletecomments'),
('task_extensions', 'op_extensions_deletecomments'),
('admin', 'op_extensions_deleteposts'),
('task_extensions', 'op_extensions_deleteposts'),
('admin', 'op_extensions_editcats'),
('task_extensions', 'op_extensions_editcats'),
('admin', 'op_extensions_editposts'),
('task_extensions', 'op_extensions_editposts'),
('admin', 'op_extensions_manage'),
('task_extensions', 'op_extensions_manage'),
('admin', 'op_extensions_managecats'),
('task_extensions', 'op_extensions_managecats'),
('admin', 'op_forum_posts'),
('task_forum', 'op_forum_posts'),
('admin', 'op_forum_post_posts'),
('member', 'op_forum_post_posts'),
('task_forum', 'op_forum_post_posts'),
('admin', 'op_forum_post_topics'),
('member', 'op_forum_post_topics'),
('task_forum', 'op_forum_post_topics'),
('admin', 'op_forum_topics'),
('task_forum', 'op_forum_topics'),
('admin', 'op_lang_copy_strings'),
('task_languages', 'op_lang_copy_strings'),
('admin', 'op_lang_translate'),
('task_languages', 'op_lang_translate'),
('admin', 'op_roles_add_auth'),
('task_roles', 'op_roles_add_auth'),
('admin', 'op_roles_add_authchild'),
('task_roles', 'op_roles_add_authchild'),
('admin', 'op_roles_delete_auth'),
('task_roles', 'op_roles_delete_auth'),
('admin', 'op_roles_edit_auth'),
('task_roles', 'op_roles_edit_auth'),
('admin', 'op_settings_add_settings'),
('task_settings', 'op_settings_add_settings'),
('admin', 'op_settings_add_settings_groups'),
('task_settings', 'op_settings_add_settings_groups'),
('admin', 'op_settings_delete_settings'),
('task_settings', 'op_settings_delete_settings'),
('admin', 'op_settings_delete_settings_groups'),
('task_settings', 'op_settings_delete_settings_groups'),
('admin', 'op_settings_edit_settings'),
('task_settings', 'op_settings_edit_settings'),
('admin', 'op_settings_edit_settings_groups'),
('task_settings', 'op_settings_edit_settings_groups'),
('admin', 'op_settings_revert_settings'),
('task_settings', 'op_settings_revert_settings'),
('admin', 'op_settings_update_settings'),
('task_settings', 'op_settings_update_settings'),
('admin', 'op_settings_view_settings'),
('task_settings', 'op_settings_view_settings'),
('admin', 'op_tutorials_addcats'),
('task_tutorials', 'op_tutorials_addcats'),
('admin', 'op_tutorials_addtutorials'),
('member', 'op_tutorials_addtutorials'),
('task_tutorials', 'op_tutorials_addtutorials'),
('admin', 'op_tutorials_comments'),
('task_tutorials', 'op_tutorials_comments'),
('admin', 'op_tutorials_deletecats'),
('task_tutorials', 'op_tutorials_deletecats'),
('admin', 'op_tutorials_deletecomments'),
('task_tutorials', 'op_tutorials_deletecomments'),
('admin', 'op_tutorials_deletetutorials'),
('task_tutorials', 'op_tutorials_deletetutorials'),
('admin', 'op_tutorials_editcats'),
('task_tutorials', 'op_tutorials_editcats'),
('admin', 'op_tutorials_edittutorials'),
('task_tutorials', 'op_tutorials_edittutorials'),
('admin', 'op_tutorials_manage'),
('task_tutorials', 'op_tutorials_manage'),
('admin', 'op_tutorials_managecats'),
('task_tutorials', 'op_tutorials_managecats'),
('admin', 'op_users_add_users'),
('task_members', 'op_users_add_users'),
('admin', 'op_users_bulk_users'),
('task_members', 'op_users_bulk_users'),
('admin', 'op_users_comment'),
('member', 'op_users_comment'),
('task_members', 'op_users_comment'),
('admin', 'op_users_delete_users'),
('task_members', 'op_users_delete_users'),
('admin', 'op_users_edit_users'),
('task_members', 'op_users_edit_users'),
('admin', 'op_users_manage_comments'),
('task_members', 'op_users_manage_comments'),
('admin', 'task_blog'),
('admin', 'task_custompages'),
('admin', 'task_documentations'),
('admin', 'task_extensions'),
('admin', 'task_forum'),
('admin', 'task_languages'),
('admin', 'task_members'),
('admin', 'task_roles'),
('admin', 'task_settings'),
('admin', 'task_tutorials');

-- --------------------------------------------------------

--
-- Structure de la table `blogcats`
--

CREATE TABLE IF NOT EXISTS `blogcats` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `blogcats`
--


-- --------------------------------------------------------

--
-- Structure de la table `blogcomments`
--

CREATE TABLE IF NOT EXISTS `blogcomments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `postid` varchar(125) NOT NULL DEFAULT '',
  `authorid` int(10) NOT NULL DEFAULT '0',
  `postdate` int(10) NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `postid` (`postid`),
  KEY `authorid` (`authorid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `blogcomments`
--


-- --------------------------------------------------------

--
-- Structure de la table `blogposts`
--

CREATE TABLE IF NOT EXISTS `blogposts` (
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
  KEY `catid` (`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `blogposts`
--


-- --------------------------------------------------------

--
-- Structure de la table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `contactus`
--


-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `iso2` char(2) DEFAULT NULL,
  `short_name` varchar(80) NOT NULL DEFAULT '',
  `long_name` varchar(80) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  `numcode` varchar(6) DEFAULT NULL,
  `un_member` varchar(12) DEFAULT NULL,
  `calling_code` varchar(8) DEFAULT NULL,
  `cctld` varchar(5) DEFAULT NULL,
  `is_active` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=251 ;

--
-- Contenu de la table `countries`
--

INSERT INTO `countries` (`id`, `iso2`, `short_name`, `long_name`, `iso3`, `numcode`, `un_member`, `calling_code`, `cctld`, `is_active`) VALUES
(1, 'AF', 'Afghanistan', 'Islamic Republic of Afghanistan', 'AFG', '004', 'yes', '93', '.af', 0),
(2, 'AX', 'Aland Islands', '&Aring;land Islands', 'ALA', '248', 'no', '358', '.ax', 0),
(3, 'AL', 'Albania', 'Republic of Albania', 'ALB', '008', 'yes', '355', '.al', 0),
(4, 'DZ', 'Algeria', 'People''s Democratic Republic of Algeria', 'DZA', '012', 'yes', '213', '.dz', 0),
(5, 'AS', 'American Samoa', 'American Samoa', 'ASM', '016', 'no', '1+684', '.as', 0),
(6, 'AD', 'Andorra', 'Principality of Andorra', 'AND', '020', 'yes', '376', '.ad', 0),
(7, 'AO', 'Angola', 'Republic of Angola', 'AGO', '024', 'yes', '244', '.ao', 0),
(8, 'AI', 'Anguilla', 'Anguilla', 'AIA', '660', 'no', '1+264', '.ai', 0),
(9, 'AQ', 'Antarctica', 'Antarctica', 'ATA', '010', 'no', '672', '.aq', 0),
(10, 'AG', 'Antigua and Barbuda', 'Antigua and Barbuda', 'ATG', '028', 'yes', '1+268', '.ag', 0),
(11, 'AR', 'Argentina', 'Argentine Republic', 'ARG', '032', 'yes', '54', '.ar', 0),
(12, 'AM', 'Armenia', 'Republic of Armenia', 'ARM', '051', 'yes', '374', '.am', 0),
(13, 'AW', 'Aruba', 'Aruba', 'ABW', '533', 'no', '297', '.aw', 0),
(14, 'AU', 'Australia', 'Commonwealth of Australia', 'AUS', '036', 'yes', '61', '.au', 0),
(15, 'AT', 'Austria', 'Republic of Austria', 'AUT', '040', 'yes', '43', '.at', 1),
(16, 'AZ', 'Azerbaijan', 'Republic of Azerbaijan', 'AZE', '031', 'yes', '994', '.az', 0),
(17, 'BS', 'Bahamas', 'Commonwealth of The Bahamas', 'BHS', '044', 'yes', '1+242', '.bs', 0),
(18, 'BH', 'Bahrain', 'Kingdom of Bahrain', 'BHR', '048', 'yes', '973', '.bh', 0),
(19, 'BD', 'Bangladesh', 'People''s Republic of Bangladesh', 'BGD', '050', 'yes', '880', '.bd', 0),
(20, 'BB', 'Barbados', 'Barbados', 'BRB', '052', 'yes', '1+246', '.bb', 0),
(21, 'BY', 'Belarus', 'Republic of Belarus', 'BLR', '112', 'yes', '375', '.by', 0),
(22, 'BE', 'Belgium', 'Kingdom of Belgium', 'BEL', '056', 'yes', '32', '.be', 0),
(23, 'BZ', 'Belize', 'Belize', 'BLZ', '084', 'yes', '501', '.bz', 0),
(24, 'BJ', 'Benin', 'Republic of Benin', 'BEN', '204', 'yes', '229', '.bj', 0),
(25, 'BM', 'Bermuda', 'Bermuda Islands', 'BMU', '060', 'no', '1+441', '.bm', 0),
(26, 'BT', 'Bhutan', 'Kingdom of Bhutan', 'BTN', '064', 'yes', '975', '.bt', 0),
(27, 'BO', 'Bolivia', 'Plurinational State of Bolivia', 'BOL', '068', 'yes', '591', '.bo', 0),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', '535', 'no', '599', '.bq', 0),
(29, 'BA', 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BIH', '070', 'yes', '387', '.ba', 0),
(30, 'BW', 'Botswana', 'Republic of Botswana', 'BWA', '072', 'yes', '267', '.bw', 0),
(31, 'BV', 'Bouvet Island', 'Bouvet Island', 'BVT', '074', 'no', 'NONE', '.bv', 0),
(32, 'BR', 'Brazil', 'Federative Republic of Brazil', 'BRA', '076', 'yes', '55', '.br', 0),
(33, 'IO', 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'IOT', '086', 'no', '246', '.io', 0),
(34, 'BN', 'Brunei', 'Brunei Darussalam', 'BRN', '096', 'yes', '673', '.bn', 0),
(35, 'BG', 'Bulgaria', 'Republic of Bulgaria', 'BGR', '100', 'yes', '359', '.bg', 0),
(36, 'BF', 'Burkina Faso', 'Burkina Faso', 'BFA', '854', 'yes', '226', '.bf', 0),
(37, 'BI', 'Burundi', 'Republic of Burundi', 'BDI', '108', 'yes', '257', '.bi', 0),
(38, 'KH', 'Cambodia', 'Kingdom of Cambodia', 'KHM', '116', 'yes', '855', '.kh', 0),
(39, 'CM', 'Cameroon', 'Republic of Cameroon', 'CMR', '120', 'yes', '237', '.cm', 0),
(40, 'CA', 'Canada', 'Canada', 'CAN', '124', 'yes', '1', '.ca', 0),
(41, 'CV', 'Cape Verde', 'Republic of Cape Verde', 'CPV', '132', 'yes', '238', '.cv', 0),
(42, 'KY', 'Cayman Islands', 'The Cayman Islands', 'CYM', '136', 'no', '1+345', '.ky', 0),
(43, 'CF', 'Central African Republic', 'Central African Republic', 'CAF', '140', 'yes', '236', '.cf', 0),
(44, 'TD', 'Chad', 'Republic of Chad', 'TCD', '148', 'yes', '235', '.td', 0),
(45, 'CL', 'Chile', 'Republic of Chile', 'CHL', '152', 'yes', '56', '.cl', 0),
(46, 'CN', 'China', 'People''s Republic of China', 'CHN', '156', 'yes', '86', '.cn', 0),
(47, 'CX', 'Christmas Island', 'Christmas Island', 'CXR', '162', 'no', '61', '.cx', 0),
(48, 'CC', 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CCK', '166', 'no', '61', '.cc', 0),
(49, 'CO', 'Colombia', 'Republic of Colombia', 'COL', '170', 'yes', '57', '.co', 0),
(50, 'KM', 'Comoros', 'Union of the Comoros', 'COM', '174', 'yes', '269', '.km', 0),
(51, 'CG', 'Congo', 'Republic of the Congo', 'COG', '178', 'yes', '242', '.cg', 0),
(52, 'CK', 'Cook Islands', 'Cook Islands', 'COK', '184', 'some', '682', '.ck', 0),
(53, 'CR', 'Costa Rica', 'Republic of Costa Rica', 'CRI', '188', 'yes', '506', '.cr', 0),
(54, 'CI', 'Cote d''ivoire (Ivory Coast)', 'Republic of C&ocirc;te D''Ivoire (Ivory Coast)', 'CIV', '384', 'yes', '225', '.ci', 0),
(55, 'HR', 'Croatia', 'Republic of Croatia', 'HRV', '191', 'yes', '385', '.hr', 0),
(56, 'CU', 'Cuba', 'Republic of Cuba', 'CUB', '192', 'yes', '53', '.cu', 0),
(57, 'CW', 'Curacao', 'Cura&ccedil;ao', 'CUW', '531', 'no', '599', '.cw', 0),
(58, 'CY', 'Cyprus', 'Republic of Cyprus', 'CYP', '196', 'yes', '357', '.cy', 0),
(59, 'CZ', 'Czech Republic', 'Czech Republic', 'CZE', '203', 'yes', '420', '.cz', 0),
(60, 'CD', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', 'COD', '180', 'yes', '243', '.cd', 0),
(61, 'DK', 'Denmark', 'Kingdom of Denmark', 'DNK', '208', 'yes', '45', '.dk', 0),
(62, 'DJ', 'Djibouti', 'Republic of Djibouti', 'DJI', '262', 'yes', '253', '.dj', 0),
(63, 'DM', 'Dominica', 'Commonwealth of Dominica', 'DMA', '212', 'yes', '1+767', '.dm', 0),
(64, 'DO', 'Dominican Republic', 'Dominican Republic', 'DOM', '214', 'yes', '1+809, 8', '.do', 0),
(65, 'EC', 'Ecuador', 'Republic of Ecuador', 'ECU', '218', 'yes', '593', '.ec', 0),
(66, 'EG', 'Egypt', 'Arab Republic of Egypt', 'EGY', '818', 'yes', '20', '.eg', 0),
(67, 'SV', 'El Salvador', 'Republic of El Salvador', 'SLV', '222', 'yes', '503', '.sv', 0),
(68, 'GQ', 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GNQ', '226', 'yes', '240', '.gq', 0),
(69, 'ER', 'Eritrea', 'State of Eritrea', 'ERI', '232', 'yes', '291', '.er', 0),
(70, 'EE', 'Estonia', 'Republic of Estonia', 'EST', '233', 'yes', '372', '.ee', 0),
(71, 'ET', 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ETH', '231', 'yes', '251', '.et', 0),
(72, 'FK', 'Falkland Islands (Malvinas)', 'The Falkland Islands (Malvinas)', 'FLK', '238', 'no', '500', '.fk', 0),
(73, 'FO', 'Faroe Islands', 'The Faroe Islands', 'FRO', '234', 'no', '298', '.fo', 0),
(74, 'FJ', 'Fiji', 'Republic of Fiji', 'FJI', '242', 'yes', '679', '.fj', 0),
(75, 'FI', 'Finland', 'Republic of Finland', 'FIN', '246', 'yes', '358', '.fi', 0),
(76, 'FR', 'France', 'French Republic', 'FRA', '250', 'yes', '33', '.fr', 0),
(77, 'GF', 'French Guiana', 'French Guiana', 'GUF', '254', 'no', '594', '.gf', 0),
(78, 'PF', 'French Polynesia', 'French Polynesia', 'PYF', '258', 'no', '689', '.pf', 0),
(79, 'TF', 'French Southern Territories', 'French Southern Territories', 'ATF', '260', 'no', NULL, '.tf', 0),
(80, 'GA', 'Gabon', 'Gabonese Republic', 'GAB', '266', 'yes', '241', '.ga', 0),
(81, 'GM', 'Gambia', 'Republic of The Gambia', 'GMB', '270', 'yes', '220', '.gm', 0),
(82, 'GE', 'Georgia', 'Georgia', 'GEO', '268', 'yes', '995', '.ge', 0),
(83, 'DE', 'Deutschland', 'Federal Republic of Germany', 'DEU', '276', 'yes', '49', '.de', 1),
(84, 'GH', 'Ghana', 'Republic of Ghana', 'GHA', '288', 'yes', '233', '.gh', 0),
(85, 'GI', 'Gibraltar', 'Gibraltar', 'GIB', '292', 'no', '350', '.gi', 0),
(86, 'GR', 'Greece', 'Hellenic Republic', 'GRC', '300', 'yes', '30', '.gr', 0),
(87, 'GL', 'Greenland', 'Greenland', 'GRL', '304', 'no', '299', '.gl', 0),
(88, 'GD', 'Grenada', 'Grenada', 'GRD', '308', 'yes', '1+473', '.gd', 0),
(89, 'GP', 'Guadaloupe', 'Guadeloupe', 'GLP', '312', 'no', '590', '.gp', 0),
(90, 'GU', 'Guam', 'Guam', 'GUM', '316', 'no', '1+671', '.gu', 0),
(91, 'GT', 'Guatemala', 'Republic of Guatemala', 'GTM', '320', 'yes', '502', '.gt', 0),
(92, 'GG', 'Guernsey', 'Guernsey', 'GGY', '831', 'no', '44', '.gg', 0),
(93, 'GN', 'Guinea', 'Republic of Guinea', 'GIN', '324', 'yes', '224', '.gn', 0),
(94, 'GW', 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GNB', '624', 'yes', '245', '.gw', 0),
(95, 'GY', 'Guyana', 'Co-operative Republic of Guyana', 'GUY', '328', 'yes', '592', '.gy', 0),
(96, 'HT', 'Haiti', 'Republic of Haiti', 'HTI', '332', 'yes', '509', '.ht', 0),
(97, 'HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HMD', '334', 'no', 'NONE', '.hm', 0),
(98, 'HN', 'Honduras', 'Republic of Honduras', 'HND', '340', 'yes', '504', '.hn', 0),
(99, 'HK', 'Hong Kong', 'Hong Kong', 'HKG', '344', 'no', '852', '.hk', 0),
(100, 'HU', 'Hungary', 'Hungary', 'HUN', '348', 'yes', '36', '.hu', 0),
(101, 'IS', 'Iceland', 'Republic of Iceland', 'ISL', '352', 'yes', '354', '.is', 0),
(102, 'IN', 'India', 'Republic of India', 'IND', '356', 'yes', '91', '.in', 0),
(103, 'ID', 'Indonesia', 'Republic of Indonesia', 'IDN', '360', 'yes', '62', '.id', 0),
(104, 'IR', 'Iran', 'Islamic Republic of Iran', 'IRN', '364', 'yes', '98', '.ir', 0),
(105, 'IQ', 'Iraq', 'Republic of Iraq', 'IRQ', '368', 'yes', '964', '.iq', 0),
(106, 'IE', 'Ireland', 'Ireland', 'IRL', '372', 'yes', '353', '.ie', 0),
(107, 'IM', 'Isle of Man', 'Isle of Man', 'IMN', '833', 'no', '44', '.im', 0),
(108, 'IL', 'Israel', 'State of Israel', 'ISR', '376', 'yes', '972', '.il', 0),
(109, 'IT', 'Italy', 'Italian Republic', 'ITA', '380', 'yes', '39', '.jm', 0),
(110, 'JM', 'Jamaica', 'Jamaica', 'JAM', '388', 'yes', '1+876', '.jm', 0),
(111, 'JP', 'Japan', 'Japan', 'JPN', '392', 'yes', '81', '.jp', 0),
(112, 'JE', 'Jersey', 'The Bailiwick of Jersey', 'JEY', '832', 'no', '44', '.je', 0),
(113, 'JO', 'Jordan', 'Hashemite Kingdom of Jordan', 'JOR', '400', 'yes', '962', '.jo', 0),
(114, 'KZ', 'Kazakhstan', 'Republic of Kazakhstan', 'KAZ', '398', 'yes', '7', '.kz', 0),
(115, 'KE', 'Kenya', 'Republic of Kenya', 'KEN', '404', 'yes', '254', '.ke', 0),
(116, 'KI', 'Kiribati', 'Republic of Kiribati', 'KIR', '296', 'yes', '686', '.ki', 0),
(117, 'XK', 'Kosovo', 'Republic of Kosovo', '---', '---', 'some', '381', '', 0),
(118, 'KW', 'Kuwait', 'State of Kuwait', 'KWT', '414', 'yes', '965', '.kw', 0),
(119, 'KG', 'Kyrgyzstan', 'Kyrgyz Republic', 'KGZ', '417', 'yes', '996', '.kg', 0),
(120, 'LA', 'Laos', 'Lao People''s Democratic Republic', 'LAO', '418', 'yes', '856', '.la', 0),
(121, 'LV', 'Latvia', 'Republic of Latvia', 'LVA', '428', 'yes', '371', '.lv', 0),
(122, 'LB', 'Lebanon', 'Republic of Lebanon', 'LBN', '422', 'yes', '961', '.lb', 0),
(123, 'LS', 'Lesotho', 'Kingdom of Lesotho', 'LSO', '426', 'yes', '266', '.ls', 0),
(124, 'LR', 'Liberia', 'Republic of Liberia', 'LBR', '430', 'yes', '231', '.lr', 0),
(125, 'LY', 'Libya', 'Libya', 'LBY', '434', 'yes', '218', '.ly', 0),
(126, 'LI', 'Liechtenstein', 'Principality of Liechtenstein', 'LIE', '438', 'yes', '423', '.li', 0),
(127, 'LT', 'Lithuania', 'Republic of Lithuania', 'LTU', '440', 'yes', '370', '.lt', 0),
(128, 'LU', 'Luxembourg', 'Grand Duchy of Luxembourg', 'LUX', '442', 'yes', '352', '.lu', 0),
(129, 'MO', 'Macao', 'The Macao Special Administrative Region', 'MAC', '446', 'no', '853', '.mo', 0),
(130, 'MK', 'Macedonia', 'The Former Yugoslav Republic of Macedonia', 'MKD', '807', 'yes', '389', '.mk', 0),
(131, 'MG', 'Madagascar', 'Republic of Madagascar', 'MDG', '450', 'yes', '261', '.mg', 0),
(132, 'MW', 'Malawi', 'Republic of Malawi', 'MWI', '454', 'yes', '265', '.mw', 0),
(133, 'MY', 'Malaysia', 'Malaysia', 'MYS', '458', 'yes', '60', '.my', 0),
(134, 'MV', 'Maldives', 'Republic of Maldives', 'MDV', '462', 'yes', '960', '.mv', 0),
(135, 'ML', 'Mali', 'Republic of Mali', 'MLI', '466', 'yes', '223', '.ml', 0),
(136, 'MT', 'Malta', 'Republic of Malta', 'MLT', '470', 'yes', '356', '.mt', 0),
(137, 'MH', 'Marshall Islands', 'Republic of the Marshall Islands', 'MHL', '584', 'yes', '692', '.mh', 0),
(138, 'MQ', 'Martinique', 'Martinique', 'MTQ', '474', 'no', '596', '.mq', 0),
(139, 'MR', 'Mauritania', 'Islamic Republic of Mauritania', 'MRT', '478', 'yes', '222', '.mr', 0),
(140, 'MU', 'Mauritius', 'Republic of Mauritius', 'MUS', '480', 'yes', '230', '.mu', 0),
(141, 'YT', 'Mayotte', 'Mayotte', 'MYT', '175', 'no', '262', '.yt', 0),
(142, 'MX', 'Mexico', 'United Mexican States', 'MEX', '484', 'yes', '52', '.mx', 0),
(143, 'FM', 'Micronesia', 'Federated States of Micronesia', 'FSM', '583', 'yes', '691', '.fm', 0),
(144, 'MD', 'Moldava', 'Republic of Moldova', 'MDA', '498', 'yes', '373', '.md', 0),
(145, 'MC', 'Monaco', 'Principality of Monaco', 'MCO', '492', 'yes', '377', '.mc', 0),
(146, 'MN', 'Mongolia', 'Mongolia', 'MNG', '496', 'yes', '976', '.mn', 0),
(147, 'ME', 'Montenegro', 'Montenegro', 'MNE', '499', 'yes', '382', '.me', 0),
(148, 'MS', 'Montserrat', 'Montserrat', 'MSR', '500', 'no', '1+664', '.ms', 0),
(149, 'MA', 'Morocco', 'Kingdom of Morocco', 'MAR', '504', 'yes', '212', '.ma', 0),
(150, 'MZ', 'Mozambique', 'Republic of Mozambique', 'MOZ', '508', 'yes', '258', '.mz', 0),
(151, 'MM', 'Myanmar (Burma)', 'Republic of the Union of Myanmar', 'MMR', '104', 'yes', '95', '.mm', 0),
(152, 'NA', 'Namibia', 'Republic of Namibia', 'NAM', '516', 'yes', '264', '.na', 0),
(153, 'NR', 'Nauru', 'Republic of Nauru', 'NRU', '520', 'yes', '674', '.nr', 0),
(154, 'NP', 'Nepal', 'Federal Democratic Republic of Nepal', 'NPL', '524', 'yes', '977', '.np', 0),
(155, 'NL', 'Netherlands', 'Kingdom of the Netherlands', 'NLD', '528', 'yes', '31', '.nl', 0),
(156, 'NC', 'New Caledonia', 'New Caledonia', 'NCL', '540', 'no', '687', '.nc', 0),
(157, 'NZ', 'New Zealand', 'New Zealand', 'NZL', '554', 'yes', '64', '.nz', 0),
(158, 'NI', 'Nicaragua', 'Republic of Nicaragua', 'NIC', '558', 'yes', '505', '.ni', 0),
(159, 'NE', 'Niger', 'Republic of Niger', 'NER', '562', 'yes', '227', '.ne', 0),
(160, 'NG', 'Nigeria', 'Federal Republic of Nigeria', 'NGA', '566', 'yes', '234', '.ng', 0),
(161, 'NU', 'Niue', 'Niue', 'NIU', '570', 'some', '683', '.nu', 0),
(162, 'NF', 'Norfolk Island', 'Norfolk Island', 'NFK', '574', 'no', '672', '.nf', 0),
(163, 'KP', 'North Korea', 'Democratic People''s Republic of Korea', 'PRK', '408', 'yes', '850', '.kp', 0),
(164, 'MP', 'Northern Mariana Islands', 'Northern Mariana Islands', 'MNP', '580', 'no', '1+670', '.mp', 0),
(165, 'NO', 'Norway', 'Kingdom of Norway', 'NOR', '578', 'yes', '47', '.no', 0),
(166, 'OM', 'Oman', 'Sultanate of Oman', 'OMN', '512', 'yes', '968', '.om', 0),
(167, 'PK', 'Pakistan', 'Islamic Republic of Pakistan', 'PAK', '586', 'yes', '92', '.pk', 0),
(168, 'PW', 'Palau', 'Republic of Palau', 'PLW', '585', 'yes', '680', '.pw', 0),
(169, 'PS', 'Palestine', 'State of Palestine (or Occupied Palestinian Territory)', 'PSE', '275', 'some', '970', '.ps', 0),
(170, 'PA', 'Panama', 'Republic of Panama', 'PAN', '591', 'yes', '507', '.pa', 0),
(171, 'PG', 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PNG', '598', 'yes', '675', '.pg', 0),
(172, 'PY', 'Paraguay', 'Republic of Paraguay', 'PRY', '600', 'yes', '595', '.py', 0),
(173, 'PE', 'Peru', 'Republic of Peru', 'PER', '604', 'yes', '51', '.pe', 0),
(174, 'PH', 'Phillipines', 'Republic of the Philippines', 'PHL', '608', 'yes', '63', '.ph', 0),
(175, 'PN', 'Pitcairn', 'Pitcairn', 'PCN', '612', 'no', 'NONE', '.pn', 0),
(176, 'PL', 'Poland', 'Republic of Poland', 'POL', '616', 'yes', '48', '.pl', 0),
(177, 'PT', 'Portugal', 'Portuguese Republic', 'PRT', '620', 'yes', '351', '.pt', 0),
(178, 'PR', 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PRI', '630', 'no', '1+939', '.pr', 0),
(179, 'QA', 'Qatar', 'State of Qatar', 'QAT', '634', 'yes', '974', '.qa', 0),
(180, 'RE', 'Reunion', 'R&eacute;union', 'REU', '638', 'no', '262', '.re', 0),
(181, 'RO', 'Romania', 'Romania', 'ROU', '642', 'yes', '40', '.ro', 0),
(182, 'RU', 'Russia', 'Russian Federation', 'RUS', '643', 'yes', '7', '.ru', 0),
(183, 'RW', 'Rwanda', 'Republic of Rwanda', 'RWA', '646', 'yes', '250', '.rw', 0),
(184, 'BL', 'Saint Barthelemy', 'Saint Barth&eacute;lemy', 'BLM', '652', 'no', '590', '.bl', 0),
(185, 'SH', 'Saint Helena', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', '654', 'no', '290', '.sh', 0),
(186, 'KN', 'Saint Kitts and Nevis', 'Federation of Saint Christopher and Nevis', 'KNA', '659', 'yes', '1+869', '.kn', 0),
(187, 'LC', 'Saint Lucia', 'Saint Lucia', 'LCA', '662', 'yes', '1+758', '.lc', 0),
(188, 'MF', 'Saint Martin', 'Saint Martin', 'MAF', '663', 'no', '590', '.mf', 0),
(189, 'PM', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'SPM', '666', 'no', '508', '.pm', 0),
(190, 'VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VCT', '670', 'yes', '1+784', '.vc', 0),
(191, 'WS', 'Samoa', 'Independent State of Samoa', 'WSM', '882', 'yes', '685', '.ws', 0),
(192, 'SM', 'San Marino', 'Republic of San Marino', 'SMR', '674', 'yes', '378', '.sm', 0),
(193, 'ST', 'Sao Tome and Principe', 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'STP', '678', 'yes', '239', '.st', 0),
(194, 'SA', 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SAU', '682', 'yes', '966', '.sa', 0),
(195, 'SN', 'Senegal', 'Republic of Senegal', 'SEN', '686', 'yes', '221', '.sn', 0),
(196, 'RS', 'Serbia', 'Republic of Serbia', 'SRB', '688', 'yes', '381', '.rs', 0),
(197, 'SC', 'Seychelles', 'Republic of Seychelles', 'SYC', '690', 'yes', '248', '.sc', 0),
(198, 'SL', 'Sierra Leone', 'Republic of Sierra Leone', 'SLE', '694', 'yes', '232', '.sl', 0),
(199, 'SG', 'Singapore', 'Republic of Singapore', 'SGP', '702', 'yes', '65', '.sg', 0),
(200, 'SX', 'Sint Maarten', 'Sint Maarten', 'SXM', '534', 'no', '1+721', '.sx', 0),
(201, 'SK', 'Slovakia', 'Slovak Republic', 'SVK', '703', 'yes', '421', '.sk', 0),
(202, 'SI', 'Slovenia', 'Republic of Slovenia', 'SVN', '705', 'yes', '386', '.si', 0),
(203, 'SB', 'Solomon Islands', 'Solomon Islands', 'SLB', '090', 'yes', '677', '.sb', 0),
(204, 'SO', 'Somalia', 'Somali Republic', 'SOM', '706', 'yes', '252', '.so', 0),
(205, 'ZA', 'South Africa', 'Republic of South Africa', 'ZAF', '710', 'yes', '27', '.za', 0),
(206, 'GS', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'SGS', '239', 'no', '500', '.gs', 0),
(207, 'KR', 'South Korea', 'Republic of Korea', 'KOR', '410', 'yes', '82', '.kr', 0),
(208, 'SS', 'South Sudan', 'Republic of South Sudan', 'SSD', '728', 'yes', '211', '.ss', 0),
(209, 'ES', 'Spain', 'Kingdom of Spain', 'ESP', '724', 'yes', '34', '.es', 0),
(210, 'LK', 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LKA', '144', 'yes', '94', '.lk', 0),
(211, 'SD', 'Sudan', 'Republic of the Sudan', 'SDN', '729', 'yes', '249', '.sd', 0),
(212, 'SR', 'Suriname', 'Republic of Suriname', 'SUR', '740', 'yes', '597', '.sr', 0),
(213, 'SJ', 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'SJM', '744', 'no', '47', '.sj', 0),
(214, 'SZ', 'Swaziland', 'Kingdom of Swaziland', 'SWZ', '748', 'yes', '268', '.sz', 0),
(215, 'SE', 'Sweden', 'Kingdom of Sweden', 'SWE', '752', 'yes', '46', '.se', 0),
(216, 'CH', 'Switzerland', 'Swiss Confederation', 'CHE', '756', 'yes', '41', '.ch', 0),
(217, 'SY', 'Syria', 'Syrian Arab Republic', 'SYR', '760', 'yes', '963', '.sy', 0),
(218, 'TW', 'Taiwan', 'Republic of China (Taiwan)', 'TWN', '158', 'former', '886', '.tw', 0),
(219, 'TJ', 'Tajikistan', 'Republic of Tajikistan', 'TJK', '762', 'yes', '992', '.tj', 0),
(220, 'TZ', 'Tanzania', 'United Republic of Tanzania', 'TZA', '834', 'yes', '255', '.tz', 0),
(221, 'TH', 'Thailand', 'Kingdom of Thailand', 'THA', '764', 'yes', '66', '.th', 0),
(222, 'TL', 'Timor-Leste (East Timor)', 'Democratic Republic of Timor-Leste', 'TLS', '626', 'yes', '670', '.tl', 0),
(223, 'TG', 'Togo', 'Togolese Republic', 'TGO', '768', 'yes', '228', '.tg', 0),
(224, 'TK', 'Tokelau', 'Tokelau', 'TKL', '772', 'no', '690', '.tk', 0),
(225, 'TO', 'Tonga', 'Kingdom of Tonga', 'TON', '776', 'yes', '676', '.to', 0),
(226, 'TT', 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TTO', '780', 'yes', '1+868', '.tt', 0),
(227, 'TN', 'Tunisia', 'Republic of Tunisia', 'TUN', '788', 'yes', '216', '.tn', 0),
(228, 'TR', 'Turkey', 'Republic of Turkey', 'TUR', '792', 'yes', '90', '.tr', 0),
(229, 'TM', 'Turkmenistan', 'Turkmenistan', 'TKM', '795', 'yes', '993', '.tm', 0),
(230, 'TC', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TCA', '796', 'no', '1+649', '.tc', 0),
(231, 'TV', 'Tuvalu', 'Tuvalu', 'TUV', '798', 'yes', '688', '.tv', 0),
(232, 'UG', 'Uganda', 'Republic of Uganda', 'UGA', '800', 'yes', '256', '.ug', 0),
(233, 'UA', 'Ukraine', 'Ukraine', 'UKR', '804', 'yes', '380', '.ua', 0),
(234, 'AE', 'United Arab Emirates', 'United Arab Emirates', 'ARE', '784', 'yes', '971', '.ae', 0),
(235, 'GB', 'United Kingdom', 'United Kingdom of Great Britain and Nothern Ireland', 'GBR', '826', 'yes', '44', '.uk', 0),
(236, 'US', 'United States', 'United States of America', 'USA', '840', 'yes', '1', '.us', 0),
(237, 'UM', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UMI', '581', 'no', 'NONE', 'NONE', 0),
(238, 'UY', 'Uruguay', 'Eastern Republic of Uruguay', 'URY', '858', 'yes', '598', '.uy', 0),
(239, 'UZ', 'Uzbekistan', 'Republic of Uzbekistan', 'UZB', '860', 'yes', '998', '.uz', 0),
(240, 'VU', 'Vanuatu', 'Republic of Vanuatu', 'VUT', '548', 'yes', '678', '.vu', 0),
(241, 'VA', 'Vatican City', 'State of the Vatican City', 'VAT', '336', 'no', '39', '.va', 0),
(242, 'VE', 'Venezuela', 'Bolivarian Republic of Venezuela', 'VEN', '862', 'yes', '58', '.ve', 0),
(243, 'VN', 'Vietnam', 'Socialist Republic of Vietnam', 'VNM', '704', 'yes', '84', '.vn', 0),
(244, 'VG', 'Virgin Islands, British', 'British Virgin Islands', 'VGB', '092', 'no', '1+284', '.vg', 0),
(245, 'VI', 'Virgin Islands, US', 'Virgin Islands of the United States', 'VIR', '850', 'no', '1+340', '.vi', 0),
(246, 'WF', 'Wallis and Futuna', 'Wallis and Futuna', 'WLF', '876', 'no', '681', '.wf', 0),
(247, 'EH', 'Western Sahara', 'Western Sahara', 'ESH', '732', 'no', '212', '.eh', 0),
(248, 'YE', 'Yemen', 'Republic of Yemen', 'YEM', '887', 'yes', '967', '.ye', 0),
(249, 'ZM', 'Zambia', 'Republic of Zambia', 'ZMB', '894', 'yes', '260', '.zm', 0),
(250, 'ZW', 'Zimbabwe', 'Republic of Zimbabwe', 'ZWE', '716', 'yes', '263', '.zw', 0);

-- --------------------------------------------------------

--
-- Structure de la table `custompages`
--

CREATE TABLE IF NOT EXISTS `custompages` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `custompages`
--


-- --------------------------------------------------------

--
-- Structure de la table `dating_friends`
--

CREATE TABLE IF NOT EXISTS `dating_friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) DEFAULT NULL,
  `to` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT '0' COMMENT '0: friend, 1: unfriend',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `dating_friends`
--


-- --------------------------------------------------------

--
-- Structure de la table `dating_message`
--

CREATE TABLE IF NOT EXISTS `dating_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` bigint(20) NOT NULL,
  `to_user` bigint(20) NOT NULL,
  `title` char(255) DEFAULT NULL,
  `title_catalog` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `from_delete` tinyint(1) NOT NULL DEFAULT '0',
  `to_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `photo_no` char(255) DEFAULT NULL,
  `trying_read` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `dating_message`
--


-- --------------------------------------------------------

--
-- Structure de la table `dating_message_folder`
--

CREATE TABLE IF NOT EXISTS `dating_message_folder` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` char(255) DEFAULT NULL,
  `user_created` bigint(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `dating_message_folder`
--


-- --------------------------------------------------------

--
-- Structure de la table `dating_message_folder_bridge`
--

CREATE TABLE IF NOT EXISTS `dating_message_folder_bridge` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `folder_id` int(11) DEFAULT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `user_created` bigint(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  KEY `Auto_Increment_Key` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `dating_message_folder_bridge`
--


-- --------------------------------------------------------

--
-- Structure de la table `dating_search`
--

CREATE TABLE IF NOT EXISTS `dating_search` (
  `user_id` bigint(20) NOT NULL,
  `gender` smallint(6) DEFAULT NULL,
  `age_min` smallint(6) DEFAULT NULL,
  `age_max` smallint(6) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `living_within_radius` smallint(6) DEFAULT NULL,
  `hair_color` longblob,
  `hair_length` longblob,
  `hair_type` longblob,
  `eye_color` longblob,
  `eye_wear` longblob,
  `height_min` smallint(6) DEFAULT NULL,
  `height_max` smallint(6) DEFAULT NULL,
  `weight_min` smallint(6) DEFAULT NULL,
  `weight_max` smallint(6) DEFAULT NULL,
  `body_style` longblob,
  `ethnicity` longblob,
  `best_feature` longblob,
  `body_art` longblob,
  `appearance` longblob,
  `drink` longblob,
  `smoke` longblob,
  `marital_status` longblob,
  `children_have` longblob,
  `children_number` smallint(6) DEFAULT NULL,
  `children_youngest` smallint(6) DEFAULT NULL,
  `children_oldest` smallint(6) DEFAULT NULL,
  `children_want` longblob,
  `pets_have` longblob,
  `occupation` longblob,
  `employment_status` longblob,
  `income_bracket` smallint(6) DEFAULT NULL,
  `home_type` longblob,
  `living_situation` longblob,
  `relocate` longblob,
  `nationality` longblob,
  `education` smallint(6) DEFAULT NULL,
  `language_spoken` longblob,
  `english_ability` smallint(6) DEFAULT NULL,
  `vietnamese_ability` smallint(6) DEFAULT NULL,
  `religion` smallint(6) DEFAULT NULL,
  `chinese_sign` longblob,
  `star_sign` longblob,
  `facial_hair` longblob,
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(0) DEFAULT NULL,
  `order_by` char(50) DEFAULT NULL,
  `have_image` smallint(6) DEFAULT '0',
  `searching_for` longblob,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dating_search`
--


-- --------------------------------------------------------

--
-- Structure de la table `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) DEFAULT NULL,
  `alias` varchar(512) DEFAULT NULL,
  `language` varchar(3) DEFAULT NULL,
  `email_subject` varchar(512) DEFAULT NULL,
  `email_content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `alias`, `language`, `email_subject`, `email_content`) VALUES
(1, 'Reset password', 'reset-password', 'en', 'Password Reset Completed', 'Dear {username},<br><br>\r\n									We have reseted your password successfully.<br><br>\r\n									You new password is: <b>{password}</b><br>'),
(2, 'Passwort zurücksetzen', 'reset-password', 'de', 'Passwort erfolgreich zurückgesetzt', 'Sehr geehrte(r) Herr/Frau {username},<br><br>Wir haben Ihr Passwort erfolgreich zurückgesetzt.<br><br>\r\n									Ihr neues Passwort ist: <b>{password}</b><br>'),
(3, 'Register Member', 'register-member', 'en', 'Member Registration Successfull ', '"Dear {username},<br><br>You''ve created an account on {homelink}.<br><br> \r\n											Please click the link below in order to confirm your email address and active your account.<br><br>\r\n											The activation link is:<br><br>\r\n											----------------------<br>\r\n											{link}<br>\r\n											----------------------<br>"'),
(4, 'Contact Us', 'contact-us', 'en', 'New Contact Us Form Submitted', 'Id: {id}<br>\r\n													By: {name}<br>\r\n													Email: {email}<br>\r\n													Subject: {subject}<br>\r\n													========================<br>\r\n													{msg}<br>\r\n													========================<br><br>\r\n													Regards, the {team} Team.'),
(5, 'Forum Mail', 'forum-mail', 'en', 'New post in a topic you are subscribed', 'Dear {user}, <br><br>A new post was made by ''{author}'' in the topic ''{topic}'' you are subscribed to. To visit the topic please click the following link<br><br>{link}<br><br>\r\n                                                                          <small>To unsubscribe from receiving updates for this topic please click the following link {unlink}</small>.<br><br>\r\n                                                                          Regards, The {name} Team.'),
(6, 'Change email', 'change-email', 'en', 'Change email successfull', '"Dear {username},<br><br>\r\nYou or any people have used this email to changed email on {homelink}.<br><br> \r\n----------------------<br>"');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_code` varchar(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `languages`
--

INSERT INTO `languages` (`id`, `region_code`, `name`, `icon`) VALUES
(1, 'es', 'Spain', '5681-Spain.png'),
(2, 'en', 'English', '1710-England.png');

-- --------------------------------------------------------

--
-- Structure de la table `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) CHARACTER SET utf8 NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Contenu de la table `lookup`
--

INSERT INTO `lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Asia', 1, 'ethnicity', 1),
(2, 'African American', 2, 'ethnicity', 2),
(3, 'Caucasian', 3, 'ethnicity', 3),
(4, '4''0" or less', 1, 'height', 1),
(5, '4''1" - 4''3"', 2, 'height', 2),
(6, '4''4" - 4''6"', 3, 'height', 3),
(7, 'Slim', 1, 'body', 1),
(8, 'Fat', 2, 'body', 2),
(9, 'Think', 3, 'body', 3),
(10, 'Black', 1, 'eyes', 1),
(11, 'Blue', 2, 'eyes', 2),
(12, 'Brown', 3, 'eyes', 3),
(13, 'Auburn', 1, 'hair', 1),
(14, 'Black', 2, 'hair', 2),
(15, 'Blonde', 3, 'hair', 3),
(16, 'No', 1, 'smoke', 1),
(17, 'Socially', 2, 'smoke', 2),
(18, 'Daily', 3, 'smoke', 3),
(19, 'No', 1, 'drink', 1),
(20, 'Socially', 2, 'drink', 2),
(21, 'Dailly', 3, 'drink', 3),
(22, 'Some hight school', 1, 'education', 1),
(23, 'Hight scholl grad', 2, 'education', 2),
(24, 'Some College', 3, 'education', 3),
(25, 'Sigle never maried', 1, 'maritalStatus', 1),
(26, 'Divorced', 2, 'maritalStatus', 2),
(27, 'Widowed', 3, 'maritalStatus', 3),
(28, 'Alone', 1, 'currentliving', 1),
(29, 'With kids', 2, 'currentliving', 2),
(30, 'With parents', 3, 'currentliving', 3);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(16) NOT NULL DEFAULT '',
  `translation` text,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(2, 'de', 'Admin'),
(3, 'de', 'Benutzer'),
(4, 'de', 'Einstellen'),
(5, 'de', 'Benutzer'),
(6, 'de', 'ID'),
(7, 'de', 'Vorname'),
(8, 'de', 'Nachname'),
(9, 'de', 'Email'),
(10, 'de', 'Passwort'),
(11, 'de', 'Passwort wiederholen'),
(12, 'de', 'Rolle'),
(13, 'de', 'Altes Passwort'),
(14, 'de', 'Neues Passwort'),
(15, 'de', 'Neues Passwort wiederholen'),
(16, 'de', 'Sind Sie sicher, dass Sie diesen Artikel löschen möchten? \\ NDiese Aktion kann nicht rückgängig gemacht werden!'),
(17, 'de', 'OK! Aktion wurde abgebrochen'),
(18, 'de', 'Apps'),
(19, 'de', 'Registrierungen'),
(20, 'de', 'Code-Beispiele '),
(21, 'de', 'Newsletter'),
(22, 'de', 'Startseite'),
(23, 'de', 'Hallo'),
(24, 'de', 'Mein Profil'),
(25, 'de', 'Abmelden'),
(28, 'de', 'Registrieren'),
(29, 'de', 'Anmelden'),
(30, 'de', 'Passwort vergessen?'),
(31, 'de', 'Bitte melden Sie sich an, um den Zugriff auf die App zu erhalten.'),
(32, 'de', 'Email'),
(33, 'de', 'Passwort'),
(34, 'de', 'Jetzt anmelden'),
(35, 'de', 'Vielen Dank. Sie sind jetzt eingeloggt.'),
(36, 'de', 'Sprachen'),
(37, 'de', 'Sprache'),
(38, 'de', 'Sprache Titel'),
(39, 'de', 'Ausgangssprache'),
(40, 'de', '# Strings'),
(41, 'de', 'Optionen'),
(42, 'de', 'Quelle kann nicht übersetzt werden.'),
(43, 'de', 'Nicht Ausgangssprache'),
(44, 'de', 'Translate this language'),
(45, 'de', 'Translate only the strings that were not translated yet.'),
(46, 'de', 'Copy missing language strings from source into this language'),
(47, 'de', 'Copy completed! Total of {number} missing strings copied.'),
(48, 'de', 'Success!'),
(49, 'de', 'Translate'),
(50, 'de', 'Language Strings'),
(51, 'de', 'Original String'),
(52, 'de', 'Translation'),
(53, 'de', 'Search'),
(54, 'de', 'ID'),
(55, 'de', 'Sort by string id'),
(56, 'de', 'Sort by translation'),
(57, 'de', 'Delete'),
(58, 'de', 'Revert translation to original'),
(59, 'de', 'Submit'),
(61, 'de', 'Strings Updated.'),
(62, 'de', 'You are now logged out.');

-- --------------------------------------------------------

--
-- Structure de la table `my_settings`
--

CREATE TABLE IF NOT EXISTS `my_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_format` varchar(255) DEFAULT NULL,
  `date_time_format` varchar(255) DEFAULT NULL,
  `search_match` int(1) DEFAULT NULL,
  `allow_rate_photo` int(1) DEFAULT NULL,
  `email_notification` int(1) DEFAULT NULL,
  `allow_comment` int(1) DEFAULT NULL,
  `timezone_id` int(20) DEFAULT NULL,
  `receive_newsletter` int(1) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_my_settings` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `my_settings`
--

INSERT INTO `my_settings` (`id`, `date_format`, `date_time_format`, `search_match`, `allow_rate_photo`, `email_notification`, `allow_comment`, `timezone_id`, `receive_newsletter`, `user_id`) VALUES
(1, '%m/%d/%Y', '%m/%d/%Y %I:%M %p', 2, 1, 1, 0, 20, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) NOT NULL DEFAULT '',
  `joined` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `joined` (`joined`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `newsletter`
--


-- --------------------------------------------------------

--
-- Structure de la table `photo_comments`
--

CREATE TABLE IF NOT EXISTS `photo_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_id` int(11) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `photo_comments`
--

INSERT INTO `photo_comments` (`id`, `photo_id`, `content`, `created`, `updated`, `user_id`) VALUES
(1, 5, 'Test comment', '2014-03-01 11:16:18', '2014-03-01 11:16:18', 1),
(2, 5, 'Test comment 2', '2014-03-01 11:54:12', '2014-03-01 11:54:12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` float NOT NULL,
  `photo_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `ratings`
--

INSERT INTO `ratings` (`id`, `score`, `photo_id`, `created`, `updated`, `ip`, `user_id`) VALUES
(1, 4, 3, '2014-03-01 10:50:07', '2014-03-01 10:50:07', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL DEFAULT '',
  `description` text,
  `category` int(10) NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL DEFAULT 'text',
  `settingkey` varchar(125) NOT NULL DEFAULT '',
  `default_value` text,
  `value` text,
  `extra` text,
  `php` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settingkey` (`settingkey`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `category`, `type`, `settingkey`, `default_value`, `value`, `extra`, `php`) VALUES
(13, 'Site Name', 'This is the default application (site) title', 2, 'text', 'applicationName', 'My Site', 'Somalisingle', '', ''),
(14, 'Default Role ', 'Choose the default group for new users registered.', 0, 'dropdown', 'default_group', 'user', 'admin', '#show_roles#', ''),
(15, 'Incoming Email Address', 'Enter the incoming email address', 2, 'text', 'emailin', 'info@userapp.toasternet-online.de', 'info@somalisingle.com', '', ''),
(16, 'Out Going Email Address', 'Enter the out going email address.', 2, 'text', 'emailout', 'info@userapp.toasternet-online.de', 'info@somalisingle.com', '', ''),
(35, 'Default date of format', NULL, 5, 'text', 'date_format', '%m/%d/%Y', NULL, NULL, NULL),
(36, 'Date and time format', NULL, 5, 'text', 'date_time_format', '%m/%d/%Y %I:%M %p', NULL, NULL, NULL),
(37, 'How often do you want to receive your search matches? (days)', NULL, 5, 'text', 'search_match', '2', NULL, NULL, NULL),
(38, 'Allow my photos to be rated?', NULL, 5, 'checkbox', 'allow_rate_photo', '1', NULL, NULL, NULL),
(42, 'Send me email notifications when I receive messages?', NULL, 5, 'text', 'email_notification', '1', NULL, NULL, NULL),
(43, 'Allow comments on my profile?', NULL, 5, 'text', 'allow_comment', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sourcemessage`
--

CREATE TABLE IF NOT EXISTS `sourcemessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=419 ;

--
-- Contenu de la table `sourcemessage`
--

INSERT INTO `sourcemessage` (`id`, `category`, `message`) VALUES
(2, 'global', 'Admin'),
(3, 'global', 'Users'),
(4, 'global', 'Create'),
(5, 'global', 'User'),
(6, 'global', 'ID'),
(7, 'global', 'Firstname'),
(8, 'global', 'Lastname'),
(9, 'global', 'Email'),
(10, 'global', 'Password'),
(11, 'global', 'Password Repetition'),
(12, 'global', 'Role'),
(13, 'global', 'Old Password'),
(14, 'global', 'New Password'),
(15, 'global', 'New Password Repetition'),
(16, 'adminglobal', 'Are you sure you want to delete this item?\\nThis action cannot be undone!'),
(17, 'adminglobal', 'OK! Action Cancled.'),
(18, 'global', 'Apps'),
(19, 'global', 'Registrations'),
(20, 'global', 'Code Samples'),
(21, 'global', 'Newsletter'),
(22, 'global', 'Home'),
(23, 'global', 'Hello'),
(24, 'global', 'My Profile'),
(25, 'global', 'Logout'),
(28, 'global', 'Register'),
(29, 'global', 'Login'),
(30, 'global', 'Password forgotten?'),
(31, 'global', 'Please sign in to get the access to the app'),
(32, 'members', 'Email'),
(33, 'members', 'Password'),
(34, 'global', 'Login now'),
(35, 'global', 'Thanks. You are now logged in.'),
(36, 'adminlang', 'Languages'),
(37, 'adminlang', 'Language Key'),
(38, 'adminlang', 'Language Title'),
(39, 'adminlang', 'Source Language'),
(40, 'adminlang', '# Strings'),
(41, 'adminlang', 'Options'),
(42, 'adminlang', 'Source cannot be translated'),
(43, 'adminlang', 'Not Source Language'),
(44, 'adminlang', 'Translate this language'),
(45, 'adminlang', 'Translate only the strings that were not translated yet.'),
(46, 'adminlang', 'Copy missing language strings from source into this language'),
(47, 'adminlang', 'Copy completed! Total of {number} missing strings copied.'),
(48, 'global', 'Success!'),
(49, 'adminlang', 'Translate'),
(50, 'adminlang', 'Language Strings'),
(51, 'adminlang', 'Original String'),
(52, 'adminlang', 'Translation'),
(53, 'global', 'Search'),
(54, 'adminlang', 'ID'),
(55, 'adminlang', 'Sort by string id'),
(56, 'adminlang', 'Sort by translation'),
(57, 'adminlang', 'Delete'),
(58, 'adminlang', 'Revert translation to original'),
(59, 'adminlang', 'Submit'),
(61, 'adminlang', 'Strings Updated.'),
(62, 'global', 'You are now logged out.'),
(63, 'global', ''),
(64, 'global', 'Register now'),
(65, 'global', 'Somalisingle'),
(66, 'global', 'Somalisingle Home'),
(67, 'global', 'I am'),
(68, 'global', 'Male'),
(69, 'global', 'Female'),
(70, 'global', 'From'),
(71, 'global', 'Birthday'),
(72, 'global', 'Username'),
(73, 'global', 'PHOTOS'),
(74, 'global', 'BLOGS'),
(75, 'global', 'WHO''S ONLINE'),
(76, 'global', 'Antonyms of '),
(77, 'global', 'Dictionary of synonyms online with more than 20,000 words'),
(78, 'global', 'Synonym'),
(79, 'global', 'Definition'),
(80, 'global', 'Containing it'),
(81, 'global', 'Definitions'),
(82, 'global', 'Antonyms'),
(83, 'error', 'error'),
(84, 'error', 'Sorry, But the page you were looking for was not found.'),
(85, 'global', ' I agree to Somalisingle {term_sevices}.'),
(86, 'global', ' I agree to Somalisingle {term_services}.'),
(87, 'adminglobal', 'Back'),
(88, 'global', 'Vericode'),
(89, 'global', 'Gender'),
(90, 'global', 'Seeking'),
(91, 'global', 'Country'),
(92, 'global', 'About Me'),
(93, 'global', 'Ethnicity'),
(94, 'global', 'Height'),
(95, 'global', 'Body'),
(96, 'global', 'Eyes'),
(97, 'global', 'Hair'),
(98, 'global', 'Smoke'),
(99, 'global', 'Drink'),
(100, 'global', 'Education'),
(101, 'global', 'Marital Status'),
(102, 'global', 'Living Current'),
(103, 'global', 'Austria'),
(104, 'global', 'Deutschland'),
(105, 'global', '-- Choose Value --'),
(106, 'global', 'Afghanistan'),
(107, 'global', 'Aland Islands'),
(108, 'global', 'Albania'),
(109, 'global', 'Algeria'),
(110, 'global', 'American Samoa'),
(111, 'global', 'Andorra'),
(112, 'global', 'Angola'),
(113, 'global', 'Anguilla'),
(114, 'global', 'Antarctica'),
(115, 'global', 'Antigua and Barbuda'),
(116, 'global', 'Argentina'),
(117, 'global', 'Armenia'),
(118, 'global', 'Aruba'),
(119, 'global', 'Australia'),
(120, 'global', 'Azerbaijan'),
(121, 'global', 'Bahamas'),
(122, 'global', 'Bahrain'),
(123, 'global', 'Bangladesh'),
(124, 'global', 'Barbados'),
(125, 'global', 'Belarus'),
(126, 'global', 'Belgium'),
(127, 'global', 'Belize'),
(128, 'global', 'Benin'),
(129, 'global', 'Bermuda'),
(130, 'global', 'Bhutan'),
(131, 'global', 'Bolivia'),
(132, 'global', 'Bonaire, Sint Eustatius and Saba'),
(133, 'global', 'Bosnia and Herzegovina'),
(134, 'global', 'Botswana'),
(135, 'global', 'Bouvet Island'),
(136, 'global', 'Brazil'),
(137, 'global', 'British Indian Ocean Territory'),
(138, 'global', 'Brunei'),
(139, 'global', 'Bulgaria'),
(140, 'global', 'Burkina Faso'),
(141, 'global', 'Burundi'),
(142, 'global', 'Cambodia'),
(143, 'global', 'Cameroon'),
(144, 'global', 'Canada'),
(145, 'global', 'Cape Verde'),
(146, 'global', 'Cayman Islands'),
(147, 'global', 'Central African Republic'),
(148, 'global', 'Chad'),
(149, 'global', 'Chile'),
(150, 'global', 'China'),
(151, 'global', 'Christmas Island'),
(152, 'global', 'Cocos (Keeling) Islands'),
(153, 'global', 'Colombia'),
(154, 'global', 'Comoros'),
(155, 'global', 'Congo'),
(156, 'global', 'Cook Islands'),
(157, 'global', 'Costa Rica'),
(158, 'global', 'Cote d''ivoire (Ivory Coast)'),
(159, 'global', 'Croatia'),
(160, 'global', 'Cuba'),
(161, 'global', 'Curacao'),
(162, 'global', 'Cyprus'),
(163, 'global', 'Czech Republic'),
(164, 'global', 'Democratic Republic of the Congo'),
(165, 'global', 'Denmark'),
(166, 'global', 'Djibouti'),
(167, 'global', 'Dominica'),
(168, 'global', 'Dominican Republic'),
(169, 'global', 'Ecuador'),
(170, 'global', 'Egypt'),
(171, 'global', 'El Salvador'),
(172, 'global', 'Equatorial Guinea'),
(173, 'global', 'Eritrea'),
(174, 'global', 'Estonia'),
(175, 'global', 'Ethiopia'),
(176, 'global', 'Falkland Islands (Malvinas)'),
(177, 'global', 'Faroe Islands'),
(178, 'global', 'Fiji'),
(179, 'global', 'Finland'),
(180, 'global', 'France'),
(181, 'global', 'French Guiana'),
(182, 'global', 'French Polynesia'),
(183, 'global', 'French Southern Territories'),
(184, 'global', 'Gabon'),
(185, 'global', 'Gambia'),
(186, 'global', 'Georgia'),
(187, 'global', 'Ghana'),
(188, 'global', 'Gibraltar'),
(189, 'global', 'Greece'),
(190, 'global', 'Greenland'),
(191, 'global', 'Grenada'),
(192, 'global', 'Guadaloupe'),
(193, 'global', 'Guam'),
(194, 'global', 'Guatemala'),
(195, 'global', 'Guernsey'),
(196, 'global', 'Guinea'),
(197, 'global', 'Guinea-Bissau'),
(198, 'global', 'Guyana'),
(199, 'global', 'Haiti'),
(200, 'global', 'Heard Island and McDonald Islands'),
(201, 'global', 'Honduras'),
(202, 'global', 'Hong Kong'),
(203, 'global', 'Hungary'),
(204, 'global', 'Iceland'),
(205, 'global', 'India'),
(206, 'global', 'Indonesia'),
(207, 'global', 'Iran'),
(208, 'global', 'Iraq'),
(209, 'global', 'Ireland'),
(210, 'global', 'Isle of Man'),
(211, 'global', 'Israel'),
(212, 'global', 'Italy'),
(213, 'global', 'Jamaica'),
(214, 'global', 'Japan'),
(215, 'global', 'Jersey'),
(216, 'global', 'Jordan'),
(217, 'global', 'Kazakhstan'),
(218, 'global', 'Kenya'),
(219, 'global', 'Kiribati'),
(220, 'global', 'Kosovo'),
(221, 'global', 'Kuwait'),
(222, 'global', 'Kyrgyzstan'),
(223, 'global', 'Laos'),
(224, 'global', 'Latvia'),
(225, 'global', 'Lebanon'),
(226, 'global', 'Lesotho'),
(227, 'global', 'Liberia'),
(228, 'global', 'Libya'),
(229, 'global', 'Liechtenstein'),
(230, 'global', 'Lithuania'),
(231, 'global', 'Luxembourg'),
(232, 'global', 'Macao'),
(233, 'global', 'Macedonia'),
(234, 'global', 'Madagascar'),
(235, 'global', 'Malawi'),
(236, 'global', 'Malaysia'),
(237, 'global', 'Maldives'),
(238, 'global', 'Mali'),
(239, 'global', 'Malta'),
(240, 'global', 'Marshall Islands'),
(241, 'global', 'Martinique'),
(242, 'global', 'Mauritania'),
(243, 'global', 'Mauritius'),
(244, 'global', 'Mayotte'),
(245, 'global', 'Mexico'),
(246, 'global', 'Micronesia'),
(247, 'global', 'Moldava'),
(248, 'global', 'Monaco'),
(249, 'global', 'Mongolia'),
(250, 'global', 'Montenegro'),
(251, 'global', 'Montserrat'),
(252, 'global', 'Morocco'),
(253, 'global', 'Mozambique'),
(254, 'global', 'Myanmar (Burma)'),
(255, 'global', 'Namibia'),
(256, 'global', 'Nauru'),
(257, 'global', 'Nepal'),
(258, 'global', 'Netherlands'),
(259, 'global', 'New Caledonia'),
(260, 'global', 'New Zealand'),
(261, 'global', 'Nicaragua'),
(262, 'global', 'Niger'),
(263, 'global', 'Nigeria'),
(264, 'global', 'Niue'),
(265, 'global', 'Norfolk Island'),
(266, 'global', 'North Korea'),
(267, 'global', 'Northern Mariana Islands'),
(268, 'global', 'Norway'),
(269, 'global', 'Oman'),
(270, 'global', 'Pakistan'),
(271, 'global', 'Palau'),
(272, 'global', 'Palestine'),
(273, 'global', 'Panama'),
(274, 'global', 'Papua New Guinea'),
(275, 'global', 'Paraguay'),
(276, 'global', 'Peru'),
(277, 'global', 'Phillipines'),
(278, 'global', 'Pitcairn'),
(279, 'global', 'Poland'),
(280, 'global', 'Portugal'),
(281, 'global', 'Puerto Rico'),
(282, 'global', 'Qatar'),
(283, 'global', 'Reunion'),
(284, 'global', 'Romania'),
(285, 'global', 'Russia'),
(286, 'global', 'Rwanda'),
(287, 'global', 'Saint Barthelemy'),
(288, 'global', 'Saint Helena'),
(289, 'global', 'Saint Kitts and Nevis'),
(290, 'global', 'Saint Lucia'),
(291, 'global', 'Saint Martin'),
(292, 'global', 'Saint Pierre and Miquelon'),
(293, 'global', 'Saint Vincent and the Grenadines'),
(294, 'global', 'Samoa'),
(295, 'global', 'San Marino'),
(296, 'global', 'Sao Tome and Principe'),
(297, 'global', 'Saudi Arabia'),
(298, 'global', 'Senegal'),
(299, 'global', 'Serbia'),
(300, 'global', 'Seychelles'),
(301, 'global', 'Sierra Leone'),
(302, 'global', 'Singapore'),
(303, 'global', 'Sint Maarten'),
(304, 'global', 'Slovakia'),
(305, 'global', 'Slovenia'),
(306, 'global', 'Solomon Islands'),
(307, 'global', 'Somalia'),
(308, 'global', 'South Africa'),
(309, 'global', 'South Georgia and the South Sandwich Islands'),
(310, 'global', 'South Korea'),
(311, 'global', 'South Sudan'),
(312, 'global', 'Spain'),
(313, 'global', 'Sri Lanka'),
(314, 'global', 'Sudan'),
(315, 'global', 'Suriname'),
(316, 'global', 'Svalbard and Jan Mayen'),
(317, 'global', 'Swaziland'),
(318, 'global', 'Sweden'),
(319, 'global', 'Switzerland'),
(320, 'global', 'Syria'),
(321, 'global', 'Taiwan'),
(322, 'global', 'Tajikistan'),
(323, 'global', 'Tanzania'),
(324, 'global', 'Thailand'),
(325, 'global', 'Timor-Leste (East Timor)'),
(326, 'global', 'Togo'),
(327, 'global', 'Tokelau'),
(328, 'global', 'Tonga'),
(329, 'global', 'Trinidad and Tobago'),
(330, 'global', 'Tunisia'),
(331, 'global', 'Turkey'),
(332, 'global', 'Turkmenistan'),
(333, 'global', 'Turks and Caicos Islands'),
(334, 'global', 'Tuvalu'),
(335, 'global', 'Uganda'),
(336, 'global', 'Ukraine'),
(337, 'global', 'United Arab Emirates'),
(338, 'global', 'United Kingdom'),
(339, 'global', 'United States'),
(340, 'global', 'United States Minor Outlying Islands'),
(341, 'global', 'Uruguay'),
(342, 'global', 'Uzbekistan'),
(343, 'global', 'Vanuatu'),
(344, 'global', 'Vatican City'),
(345, 'global', 'Venezuela'),
(346, 'global', 'Vietnam'),
(347, 'global', 'Virgin Islands, British'),
(348, 'global', 'Virgin Islands, US'),
(349, 'global', 'Wallis and Futuna'),
(350, 'global', 'Western Sahara'),
(351, 'global', 'Yemen'),
(352, 'global', 'Zambia'),
(353, 'global', 'Zimbabwe'),
(354, 'global', 'Day'),
(355, 'global', 'Month'),
(356, 'global', 'Year'),
(357, 'global', 'Please check agree Somalisingle terms of services'),
(358, 'global', 'Why Join?'),
(359, 'global', 'Use advanced searches to find someone near you'),
(360, 'global', 'Post blogs, photos'),
(361, 'global', 'Talk to other members'),
(362, 'global', 'Send messages and flirts'),
(363, 'global', 'Set up notification alerts to know when someone of interest signs up'),
(364, 'global', 'And much more...'),
(365, 'global', 'Safety'),
(366, 'global', 'Registration'),
(367, 'global', 'My ethnicity is'),
(368, 'global', 'My height is'),
(369, 'global', ',My Body type is'),
(370, 'global', 'My eyes are'),
(371, 'global', 'My hair is'),
(372, 'global', 'I smoke'),
(373, 'global', 'I drink'),
(374, 'global', 'My education is'),
(375, 'global', 'My marital status is'),
(376, 'global', 'I am currently living'),
(377, 'global', 'Asia'),
(378, 'global', 'African American'),
(379, 'global', 'Caucasian'),
(380, 'global', '-----Choose Your Ethnicity-----'),
(381, 'global', '4''0" or less'),
(382, 'global', '4''1" - 4''3"'),
(383, 'global', '4''4" - 4''6"'),
(384, 'global', '-----Choose Your Height-----'),
(385, 'global', 'Slim'),
(386, 'global', 'Fat'),
(387, 'global', 'Think'),
(388, 'global', 'Black'),
(389, 'global', 'Blue'),
(390, 'global', 'Brown'),
(391, 'global', 'Auburn'),
(392, 'global', 'Blonde'),
(393, 'global', 'No'),
(394, 'global', 'Socially'),
(395, 'global', 'Daily'),
(396, 'global', 'Dailly'),
(397, 'global', 'Some hight school'),
(398, 'global', 'Hight scholl grad'),
(399, 'global', 'Some College'),
(400, 'global', 'Sigle never maried'),
(401, 'global', 'Divorced'),
(402, 'global', 'Widowed'),
(403, 'global', 'My Body type is'),
(404, 'global', 'Alone'),
(405, 'global', 'With kids'),
(406, 'global', 'With parents'),
(407, 'global', 'Save'),
(408, 'global', 'Signup successful!'),
(409, 'success', 'A confirmation email has been sent to the address you specified ({email}).\r\n            You need to read and respond to this email before you can use your account. If you don''t do this, the new account will be deleted automatically after a few days.'),
(410, 'success', 'A confirmation email has been sent to the address you specified ( {email} ).\r\n            You need to read and respond to this email before you can use your account. If you don''t do this, the new account will be deleted automatically after a few days.'),
(411, 'success', 'A confirmation email has been sent to the address you specified ( {email} ). <br/>\r\n            You need to read and respond to this email before you can use your account. If you don''t do this, the new account will be deleted automatically after a few days.'),
(412, 'success', 'A confirmation email has been sent to the address you specified ( {email} ). <br/>\r\n            You need to read and respond to this email before you can use your account. <br/> If you don''t do this, the new account will be deleted automatically after a few days.'),
(413, 'global', 'Men'),
(414, 'global', 'Women'),
(415, 'global', 'My username'),
(416, 'global', 'My password'),
(417, 'global', 'Please enter username or password before submit'),
(418, 'global', 'Username not be blank.');

-- --------------------------------------------------------

--
-- Structure de la table `time_zone`
--

CREATE TABLE IF NOT EXISTS `time_zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `time_zone`
--

INSERT INTO `time_zone` (`id`, `name`) VALUES
(1, 'GMT-12'),
(2, 'GMT-11'),
(3, 'GMT-10'),
(4, 'GMT-9'),
(5, 'GMT-8'),
(6, 'GMT-7'),
(7, 'GMT-6'),
(8, 'GMT-5'),
(9, 'GMT-4'),
(10, 'GMT-3'),
(11, 'GMT-2'),
(12, 'GMT-1'),
(13, 'GMT'),
(14, 'GMT+1'),
(15, 'GMT+2'),
(16, 'GMT+3'),
(17, 'GMT+4'),
(18, 'GMT+5'),
(19, 'GMT+6'),
(20, 'GMT+7'),
(21, 'GMT+8'),
(22, 'GMT+9'),
(23, 'GMT+10'),
(24, 'GMT+11'),
(25, 'GMT+12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `vericode` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL COMMENT '0: male. 1 :female',
  `seeking` varchar(10) DEFAULT NULL COMMENT '0: male. 1 :female',
  `birthday` varchar(200) DEFAULT NULL,
  `country_id` int(10) DEFAULT NULL,
  `about_me` text,
  `ethnicity` int(10) DEFAULT NULL,
  `height` int(30) DEFAULT NULL,
  `body` int(20) DEFAULT NULL,
  `eyes` int(20) DEFAULT NULL,
  `hair` int(20) DEFAULT NULL,
  `smoke` int(10) DEFAULT NULL,
  `drink` int(10) DEFAULT NULL,
  `education` int(10) DEFAULT NULL,
  `marital_status` int(10) DEFAULT NULL,
  `living_current` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `vericode`, `username`, `gender`, `seeking`, `birthday`, `country_id`, `about_me`, `ethnicity`, `height`, `body`, `eyes`, `hair`, `smoke`, `drink`, `education`, `marital_status`, `living_current`, `status`) VALUES
(1, 'N', NULL, 'hocnv@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', 'admin', 'e837c06937f62d2dea73daa584b117d9402a03ba', 'hocnv', 1, '1,', '03.03.1990', 243, NULL, 2, 3, 1, 1, 1, 1, 1, 1, 1, '1,3,', 0),
(2, 'L', NULL, 'huyenlt@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', 'user', '0d414b5eef75c308aecff6132e9c3d5abf5343ec', 'huyenlt', 0, '1,', '02.01.1995', 243, NULL, 1, 2, 1, 1, 1, 1, 1, 1, 1, '1,3,', 0),
(3, NULL, NULL, 'test02@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', 'guest', NULL, 'test02', 1, NULL, '02.01.1996', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '', '', 'test011@yopmail.com', 'a64b02a68a630a8abb1ef5590a702d9906ccee03', 'guest', '89c8cda5df714c8ac85054121faf7d4781017cfb', 'hocnv12', 1, '', '02.01.1996', 2, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 0),
(5, '', '', 'test012@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', 'guest', '0bc7fff95f5c10452e8388834c0b81aafce45b90', 'test123', 1, '', '03.02.1996', 2, '<p>\r\n	Test 123</p>\r\n', 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_photo_galleries`
--

CREATE TABLE IF NOT EXISTS `user_photo_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `description` text,
  `is_private` int(1) DEFAULT '0' COMMENT '0: public , 1: Private',
  `is_comment` int(1) DEFAULT '0' COMMENT '0: yes, 1: no',
  `is_photo_main` int(1) DEFAULT '0' COMMENT '0: yes, 1: no',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `views` int(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `user_photo_galleries`
--

INSERT INTO `user_photo_galleries` (`id`, `user_id`, `filename`, `description`, `is_private`, `is_comment`, `is_photo_main`, `created`, `updated`, `views`) VALUES
(3, 1, '1953-1-800e1.jpg', 'Test update', 0, 1, 1, '2014-03-01 08:30:24', '2014-03-01 08:30:24', 0),
(5, 1, '2785-9937-20140205_161454.jpg', 'Photo 2', 0, 1, 0, '2014-03-01 07:30:55', '2014-03-01 07:30:55', 1);

-- --------------------------------------------------------

--
-- Structure de la table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `language` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `widgets`
--

INSERT INTO `widgets` (`id`, `title`, `alias`, `content`, `language`) VALUES
(2, 'onecentdeal.de', 'onecentdeal', '<ul>\n	<li>\n		<a href="/">Home</a></li>\n	<li>\n		<a href="/how-it-works">How it works</a></li>\n	<li>\n		<a href="/auctions/allEnded">Ended auction</a></li>\n	<li>\n		<a href="/helps">Help</a></li>\n</ul>\n', 'en'),
(3, 'Basic Autions', 'basic-auction', '<ul>\n            <li><a href="/auctions/active/basic">All active Auction</a></li>\n            <li><a href="/auctions/ended/basic">Ended Auction</a></li>\n            <li><a href="/auctions/upcoming/basic">Upcoming Auction</a></li>\n            <li><a href="/votes/voting/basic">Voting</a></li>\n            <li><a href="/how-it-works">How it works</a></li>\n        </ul>', 'en'),
(4, 'Low-price Auctions', 'low-price-auction', '<ul>\n            <li><a href="/auctions/active/lowprice">All active Auction</a></li>\n            <li><a href="/auctions/ended/lowprice">Ended Auction</a></li>\n            <li><a href="/auctions/upcoming/lowprice">Upcoming Auction</a></li>\n            <li><a href="/votes/voting/lowprice">Voting</a></li>\n       \n        </ul>', 'en'),
(5, 'Informationen', 'information', '<ul>\r\n	<li>[page]terms-of-service[/page]</li>\r\n	<li>[page]faq[/page]</li>\r\n	<li>[page]privacy-policy[/page]</li>\r\n	<li>[page]partners[/page]</li>\r\n	<li>[page]imprint[/page]</li>\r\n	<li>[page]about-us[/page]</li>\r\n</ul>\r\n', 'en'),
(6, 'onecentdeal.de', 'onecentdeal', '<ul>\n	<li>\n		<a href="/">Startseite</a></li>\n	<li>\n		<a href="/how-it-works">So funktioniert es</a></li>\n	<li>\n		<a href="/auctions/allEnded">Beendete Auktionen</a></li>\n	<li>\n		<a href="/helps">Hilfe</a></li>\n</ul>\n', 'de'),
(9, 'Information', 'information', '<ul>\r\n	<li>[page]terms-of-service[/page]</li>\r\n	<li>[page]faq[/page]</li>\r\n	<li>[page]privacy-policy[/page]</li>\r\n	<li>[page]partners[/page]</li>\r\n	<li>[page]imprint[/page]</li>\r\n	<li>[page]about-us[/page]</li>\r\n</ul>\r\n', 'de'),
(10, 'Gründungauktion', 'basic-auction', '<ul>\n            <li><a href="/auctions/active/basic">Alle aktiven Auktionen</a></li>\n            <li><a href="/auctions/ended/basic">Beendete Auktionen</a></li>\n            <li><a href="/auctions/upcoming/basic">Zukünftige Auktionen</a></li>\n            <li><a href="/votes/voting/basic">Voting</a></li>\n            <li><a href="/how-it-works">So funktioniert es</a></li>\n        </ul>', 'de'),
(13, 'Tiefpreis-Auktion', 'low-price-auction', '<ul>\n            <li><a href="/auctions/active/lowprice">Alle aktiven Auktionen</a></li>\n            <li><a href="/auctions/ended/lowprice">Beendete Auktionen</a></li>\n            <li><a href="/auctions/upcoming/lowprice">Zukünftige Auktionen</a></li>\n            <li><a href="/votes/voting/lowprice">Voting</a></li>\n           \n        </ul>', 'de'),
(14, 'abc', 'abc', 'abc', 'en');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `blogposts`
--
ALTER TABLE `blogposts`
  ADD CONSTRAINT `FK_blogposts` FOREIGN KEY (`catid`) REFERENCES `blogcats` (`id`);
