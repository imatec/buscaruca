-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 06:03 AM
-- Server version: 5.6.15
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buscaruca`
--

-- --------------------------------------------------------

--
-- Table structure for table `prospects`
--

CREATE TABLE IF NOT EXISTS `prospects` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `search_id` mediumint(9) NOT NULL,
  `name` varchar(70) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `score` int(10) DEFAULT NULL,
  `google_maps_url` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prospects`
--

INSERT INTO `prospects` (`id`, `search_id`, `name`, `url`, `address`, `state_id`, `price`, `score`, `google_maps_url`, `created`, `modified`) VALUES
(1, 2, 'test 1', 'ijcsoaijc', NULL, 0, NULL, NULL, NULL, '2014-04-30 05:38:43', '2014-04-30 05:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE IF NOT EXISTS `searches` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(9) unsigned NOT NULL,
  `name` varchar(70) NOT NULL,
  `created` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `user_id`, `name`, `created`, `active`, `modified`) VALUES
(1, 1, 'testeador', '2014-04-28 22:00:25', 1, '2014-04-28 22:00:25'),
(2, 1, 'Casa en la playa', '2014-04-30 04:58:48', 1, '2014-04-30 04:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'test', 'df4059fc187fd239aecd86392adf1342049abba8', 'admin', '2014-04-27 00:18:37', '2014-04-27 00:18:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
