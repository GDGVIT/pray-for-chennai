-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2015 at 02:44 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prayforchennai`
--

-- --------------------------------------------------------

--
-- Table structure for table `addngo`
--

CREATE TABLE IF NOT EXISTS `addngo` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `typeOfHelp` varchar(100) NOT NULL,
  `areaCovered` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `addngo`
--

INSERT INTO `addngo` (`id`, `name`, `address`, `contact`, `typeOfHelp`, `areaCovered`) VALUES
(1, 'Ashwini purohit', 'e', '8098678877', 'evacuation', 'e'),
(2, 'Ashwini', 'ddd', '8098678877', 'food', 'sdkafjskl'),
(3, 'Ashwini purohit', 's', '8098678877', 'evacuation', 'sdkafjskl'),
(4, 'Ashwini purohit', 'sfsaf', '8098678877', 'evacuation', 'sdkafjskl'),
(5, 'hfkjdahkfjh', 'safdsf', '8098678877', 'medical', 'sdkafjskl'),
(6, 'codeashwini', 'adsfl\r\ndsaflkfsaklfdaslf;dksl;fkdsf\r\nkadsklfk', '8004947868', 'Evacuation', 'qd');

-- --------------------------------------------------------

--
-- Table structure for table `helpline`
--

CREATE TABLE IF NOT EXISTS `helpline` (
`id` int(11) NOT NULL,
  `helplineTitle` varchar(255) NOT NULL,
  `helplineNumber` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `helpline`
--

INSERT INTO `helpline` (`id`, `helplineTitle`, `helplineNumber`, `description`) VALUES
(1, 'NGO 1', '9900990099', 'dkfajfkls\r\nfds\r\nf\r\nskfjasdklf\r\nfdfjlkjklsjflskfjsdklf');

-- --------------------------------------------------------

--
-- Table structure for table `needhelp`
--

CREATE TABLE IF NOT EXISTS `needhelp` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `area` varchar(255) NOT NULL,
  `typeOfHelp` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `needhelp`
--

INSERT INTO `needhelp` (`id`, `name`, `contact`, `address`, `area`, `typeOfHelp`) VALUES
(1, 'Ashwini', '8098678877', 'sf', 'qd', 'evacuation'),
(2, 'XYZskjdfdal', '8098678877', 'sadfsffkj\r\nsadfkljdflkjlkadsjfk', 'adfa', 'venue'),
(3, 'codeashwini', '9985877878', 'dsakfjlkjf''ffja\r\ndfkjsf\r\nadf\r\nkfjs\r\nkf', 'adfa', 'Evacuation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addngo`
--
ALTER TABLE `addngo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpline`
--
ALTER TABLE `helpline`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needhelp`
--
ALTER TABLE `needhelp`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addngo`
--
ALTER TABLE `addngo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `helpline`
--
ALTER TABLE `helpline`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `needhelp`
--
ALTER TABLE `needhelp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
