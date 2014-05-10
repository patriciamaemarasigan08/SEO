-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2014 at 04:15 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `searchengine`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(100) NOT NULL,
  `site_link` varchar(10000) NOT NULL,
  `site_keyword` varchar(500) NOT NULL,
  `site_description` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `site_title`, `site_link`, `site_keyword`, `site_description`) VALUES
(1, 'google', 'http://google.com', 'search engine google', 'Google is a search for information about (someone or something) on the Internet using the search engine Google.'),
(2, 'yahoo', 'http://www.yahoo.com', 'search engine yahoo', 'It is globally known for its Web portal, search engine Yahoo Search, and related services, including Yahoo Directory, Yahoo Mail, Yahoo News, Yahoo Finance, Yahoo Groups, Yahoo Answers, advertising, online mapping, video sharing, fantasy sports and its social media website. It is one of the most popular sites in the United States.'),
(3, 'twitter', 'http://twitter.com', 'search engine twitter', 'Twitter is an online social networking and microblogging service that enables users to send and read short 140-character text messages, called "tweets". Registered users can read and post tweets, but unregistered users can only read them. Users access Twitter through the website interface, SMS, or mobile device app.'),
(4, 'twitter', 'www.twitter.com', 'search engine twitter', 'Twitter was created in March 2006 by Jack Dorsey, Evan Williams, Biz Stone and Noah Glass and by July 2006, the site was launched.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
