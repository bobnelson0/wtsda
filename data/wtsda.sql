-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2013 at 02:30 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wtsda`
--

-- --------------------------------------------------------

--
-- Table structure for table `DojangAddresses`
--

CREATE TABLE IF NOT EXISTS `DojangAddresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dojangId` int(10) unsigned NOT NULL,
  `addressType` varchar(15) NOT NULL,
  `addressLine1` varchar(255) DEFAULT NULL,
  `addressLine2` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL COMMENT 'Town or City (Seattle)',
  `neighborhood` varchar(255) DEFAULT NULL COMMENT 'Area (Ballard)',
  `adminDistrict` varchar(255) DEFAULT NULL COMMENT 'State or Province (WA)',
  `adminDistrict2` varchar(255) DEFAULT NULL COMMENT 'County (King)',
  `formattedAddress` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) DEFAULT NULL,
  `countryRegion` varchar(255) DEFAULT NULL COMMENT 'Two letter country code (US)',
  `latitude` decimal(16,13) DEFAULT NULL,
  `longitude` decimal(16,13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `Dojangs`
--

CREATE TABLE IF NOT EXISTS `Dojangs` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `FormsEmptyHands`
--

CREATE TABLE IF NOT EXISTS `FormsEmptyHands` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `order` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `FormsWeapons`
--

CREATE TABLE IF NOT EXISTS `FormsWeapons` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `order` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `JudgeCertifications`
--

CREATE TABLE IF NOT EXISTS `JudgeCertifications` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `Passwords`
--

CREATE TABLE IF NOT EXISTS `Passwords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(10) unsigned NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userId` (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `Permissions`
--

CREATE TABLE IF NOT EXISTS `Permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resource` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `resource` (`resource`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

-- --------------------------------------------------------

--
-- Table structure for table `ProfileAddresses`
--

CREATE TABLE IF NOT EXISTS `ProfileAddresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profileId` int(10) unsigned NOT NULL,
  `addressType` varchar(15) NOT NULL,
  `addressLine1` varchar(255) DEFAULT NULL,
  `addressLine2` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL COMMENT 'Town or City (Seattle)',
  `neighborhood` varchar(255) DEFAULT NULL COMMENT 'Area (Ballard)',
  `adminDistrict` varchar(255) DEFAULT NULL COMMENT 'State or Province (WA)',
  `adminDistrict2` varchar(255) DEFAULT NULL COMMENT 'County (King)',
  `formattedAddress` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) DEFAULT NULL,
  `countryRegion` varchar(255) DEFAULT NULL COMMENT 'Two letter country code (US)',
  `latitude` decimal(16,13) DEFAULT NULL,
  `longitude` decimal(16,13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `ProfileEmails`
--

CREATE TABLE IF NOT EXISTS `ProfileEmails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profileId` int(10) unsigned NOT NULL,
  `email` varchar(150) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Profiles`
--

CREATE TABLE IF NOT EXISTS `Profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(10) unsigned DEFAULT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) NOT NULL,
  `preferredName` varchar(20) DEFAULT NULL,
  `wtsdaNumber` mediumint(6) unsigned zerofill DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `gender` enum('M','F') NOT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `rankId` tinyint(4) NOT NULL,
  `dojangId` int(11) NOT NULL,
  `judgeCertificationId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wtsdaNumber` (`wtsdaNumber`),
  KEY `name` (`firstName`,`middleName`,`lastName`,`preferredName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `RankGroups`
--

CREATE TABLE IF NOT EXISTS `RankGroups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `Ranks`
--

CREATE TABLE IF NOT EXISTS `Ranks` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `rankGroupId` smallint(5) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `minAge` tinyint(3) unsigned DEFAULT NULL,
  `maxAge` tinyint(3) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `RolePermissions`
--

CREATE TABLE IF NOT EXISTS `RolePermissions` (
  `roleId` int(10) unsigned NOT NULL,
  `permissionId` int(10) unsigned NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`roleId`,`permissionId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE IF NOT EXISTS `Roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `order` int(10) unsigned NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `hierarchy` (`order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `UserPermissions`
--

CREATE TABLE IF NOT EXISTS `UserPermissions` (
  `userId` int(10) unsigned NOT NULL,
  `permissionId` int(10) unsigned NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`userId`,`permissionId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profileId` int(10) unsigned DEFAULT NULL,
  `roleId` int(10) unsigned DEFAULT NULL,
  `username` varchar(60) NOT NULL COMMENT 'Username which will almost always be the same as email except in super admin cases',
  `email` varchar(60) NOT NULL COMMENT 'Used to communicate with the user, will almost always match the username',
  `passwordId` int(10) unsigned NOT NULL,
  `timestampCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestampLastLogin` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `passwordId` (`passwordId`),
  UNIQUE KEY `profileId` (`profileId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
