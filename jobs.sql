-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 08 月 06 日 10:04
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `copy_66k`
--

-- --------------------------------------------------------

--
-- 表的结构 `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jobs_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_title` varchar(50) NOT NULL,
  `jobs_category` int(11) NOT NULL,
  `jobs_lower` int(11) NOT NULL,
  `jobs_higher` int(11) NOT NULL,
  `jobs_place` text NOT NULL,
  `jobs_description` text NOT NULL,
  `jobs_hire` text NOT NULL,
  `jobs_company` varchar(50) NOT NULL,
  `jobs_url` text NOT NULL,
  `jobs_email` text NOT NULL,
  `jobs_update` date NOT NULL,
  PRIMARY KEY (`jobs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `jobs`
--

INSERT INTO `jobs` (`jobs_id`, `jobs_title`, `jobs_category`, `jobs_lower`, `jobs_higher`, `jobs_place`, `jobs_description`, `jobs_hire`, `jobs_company`, `jobs_url`, `jobs_email`, `jobs_update`) VALUES
(1, 'awdawdawd', 1, 2000, 2000, 'awdawd', 'awdaw', 'dawda', 'wdawdawdawd', 'awd', 'awdawdawdawd', '2014-08-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
