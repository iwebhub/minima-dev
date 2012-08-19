-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2012 at 11:13 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `minimadev`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_content`
--

CREATE TABLE IF NOT EXISTS `cms_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cms_content`
--

INSERT INTO `cms_content` (`id`, `title`, `body`, `email`, `delcode`, `author`) VALUES
(18, 'Hi there!', 'This is a pre-release version of Minima. If you find any bugs, please let us know.', 'nobody@example.com', 0, 'nobody o.O'),
(19, 'You''re running 1.1 pre-release 2. So, what''s new?', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul>\r\n<li>A simple(r) way to install themes - upload the stylesheet to /and/themes and change the link in the database via the admin interface.</li>\r\n<li>Addons now work - upload it to ant/addons and add it (with &lt;?php include ''ant/addons/someaddon.php''; ?&gt;)</li>\r\n<li>nothing else (yet!)</li>\r\n</ul>\r\n</body>\r\n</html>', 'nobody@example.com', 4478589, 'RelNotes');

-- --------------------------------------------------------

--
-- Table structure for table `defaulttheme`
--

CREATE TABLE IF NOT EXISTS `defaulttheme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inc` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `defaulttheme`
--

INSERT INTO `defaulttheme` (`id`, `inc`) VALUES
(1, '<link href="ant/themes/simple.css" rel="stylesheet" type="text/css"/>');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `email`, `delcode`, `author`) VALUES
(20, '123, a sample page', 'Hi there. This is a sample page.', '', 0, 'beep boop');
