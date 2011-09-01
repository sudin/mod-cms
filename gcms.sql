-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2011 at 07:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE IF NOT EXISTS `cms_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(200) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `page_url` varchar(110) NOT NULL,
  `page_status` varchar(10) NOT NULL,
  `page_content` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `page_title` (`page_title`),
  UNIQUE KEY `page_url` (`page_url`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `page_title`, `meta_keyword`, `meta_description`, `page_url`, `page_status`, `page_content`) VALUES
(2, 'home', 'home', 'amantran nepal', 'home-page', 'draft', 'hello this is a home paeg'),
(3, 'About Us', 'about us', 'jsdkj', 'about-us', 'live', 'hello thjiis is aboutusp age'),
(5, 'about us1', 'sjjsd', 'skkjdsksj', 'about-us-one', 'draft', 'Hello this is about us');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(20) NOT NULL,
  `link_type` varchar(50) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `position` varchar(20) NOT NULL,
  `module_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `nav_name`, `link_type`, `page_id`, `position`, `module_name`) VALUES
(1, 'home', 'pages', 3, 'buttom', NULL),
(2, 'ds', 'modules', NULL, 'top', '');

-- --------------------------------------------------------

--
-- Table structure for table `simpleusers`
--

CREATE TABLE IF NOT EXISTS `simpleusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `group` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profile_fields` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `simpleusers`
--

INSERT INTO `simpleusers` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`) VALUES
(1, 'samitrimal', 'CtBbdH0DLQPbrV7KoF1IY7kziZAsYMFsICx5KT1l5Jo=', 100, 'rimalsamit@yahoo.com', '1314884043', '1cfb1ed0d7aba5766dd2185023eca60111dcc119', 'a:6:{s:5:"phone";s:6:"383883";s:7:"address";s:7:"dskldss";s:10:"first_name";s:5:"samit";s:11:"middle_name";s:0:"";s:9:"last_name";s:5:"rimal";i:0;s:3:"100";}'),
(2, 'samitrimal1', 'TpR49e7Trd715Z5SQ/7vvQJjkgEz9cHrne8dmYAD5xA=', 1, 'samit1@samit1.com', '', '', 'a:6:{s:5:"phone";s:10:"9841669913";s:7:"address";s:12:"kdslkldslsdk";i:0;s:1:"1";s:10:"first_name";s:6:"samit1";s:11:"middle_name";s:4:"test";s:9:"last_name";s:5:"rimal";}'),
(3, 'samitrimal2', 'TpR49e7Trd715Z5SQ/7vvQJjkgEz9cHrne8dmYAD5xA=', -1, 'rimalsamit@yahoo.comu', '', '', 'a:5:{s:5:"phone";s:6:"929292";s:7:"address";s:6:"sldsls";s:10:"first_name";s:6:"929292";s:11:"middle_name";s:6:"929292";s:9:"last_name";s:6:"929292";}');
