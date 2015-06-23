-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2015 at 11:52 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airport`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `name`, `source`, `destination`, `time`, `date`) VALUES
(1, 'Xebia Air', 'chd', 'Delhi', '07:20:00', '2015-06-18'),
(5, 'AirAsia', 'chd', 'delhi', '00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `type` tinyint(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security_details`
--

CREATE TABLE IF NOT EXISTS `security_details` (
`id` int(11) NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  `time_limit` int(11) NOT NULL,
  `cat` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `security_details`
--

INSERT INTO `security_details` (`id`, `number`, `time_limit`, `cat`) VALUES
(1, 9, 60, ''),
(2, 10, 90, ''),
(3, 11, 125, ''),
(4, 5, 999, 'noramlCase'),
(5, 2, 150, 'emergencyCase'),
(6, 10, 888, 'noramlCase');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `lane_no` int(11) NOT NULL DEFAULT '0',
  `board` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `flight_id`, `lane_no`, `board`) VALUES
(1, 'parminder', '9634082867', 5, 0, 0),
(2, 'Vaibhav', '9761234481', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uuid`
--

CREATE TABLE IF NOT EXISTS `uuid` (
  `uuid` varchar(40) NOT NULL,
  `user_id` int(11) NOT NULL,
  `loaded` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(2) NOT NULL DEFAULT 'a',
  `no` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uuid`
--

INSERT INTO `uuid` (`uuid`, `user_id`, `loaded`, `status`, `no`) VALUES
('2f234454-cf6d-4a0f-adf2-f4911ba9ffa6', 1, 0, 'a', 0),
('ffe4d519d016599e8ec0ff785b0be9bd', 1, 0, 'a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_details`
--
ALTER TABLE `security_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uuid`
--
ALTER TABLE `uuid`
 ADD PRIMARY KEY (`uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `security_details`
--
ALTER TABLE `security_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
