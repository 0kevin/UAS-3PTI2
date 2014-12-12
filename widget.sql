-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2014 at 01:21 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `widget`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67898 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `hashed_password`) VALUES
(67893, 'kevin', '$2y$10$NjgzMTM4ZDRiNTZhNWY4Z./Mwcnd2B91DDndmkowKvA73NEVVe3n2');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE IF NOT EXISTS `coment` (
  `nama` varchar(50) NOT NULL,
  `koment` text NOT NULL,
  `pelayanan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`nama`, `koment`, `pelayanan`) VALUES
('asd', 'dsa', 'baik'),
('fdasdas', 'asdsadgaadfada sadassdsa alsdasd sdadasdl lasdas asda asd  asdasdas adsads', 'kurang baik'),
('asdasdasd', 'asdasdasdasd asd dsa', 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `body`, `file`) VALUES
(23, 'dsa', 'dsa', 'gambar/apache_pb.png'),
(24, 'asd', 'asd', 'gambar/apache_pb2_ani.gif');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `title`, `body`, `file`) VALUES
(2, 'cxzz', 'xc', 'logo/maccc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject_id` int(20) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `position` int(10) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67896 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES
(67895, 12345, 'es', 1, 1, '			nfkjasdkfnalkndflnasdf				lalalalala							');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `position` int(20) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12350 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `menu_name`, `position`, `visible`) VALUES
(12345, 'Home', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `body`, `file`) VALUES
(1, 'bagus', 'bagus', 'video/Iklan Biskuat (Versi Kenapa-).mp4'),
(2, 'cxz', 'cxcx', 'video/Iklan Biskuat (Versi Kenapa-).mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
