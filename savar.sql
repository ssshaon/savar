-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 05:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `savar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_officer`
--

CREATE TABLE IF NOT EXISTS `admin_officer` (
  `id` int(11) NOT NULL,
  `info` varchar(256) NOT NULL,
  `profile` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_org`
--

CREATE TABLE IF NOT EXISTS `admin_org` (
  `id` int(11) NOT NULL,
  `stuffs` varchar(256) NOT NULL,
  `branches` int(11) NOT NULL,
  `structure` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_others`
--

CREATE TABLE IF NOT EXISTS `admin_others` (
  `id` int(11) NOT NULL,
  `idea` text NOT NULL,
  `questions` varchar(256) NOT NULL,
  `notices` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_work`
--

CREATE TABLE IF NOT EXISTS `admin_work` (
  `id` int(11) NOT NULL,
  `monthly_work` double NOT NULL,
  `notice` text NOT NULL,
  `decision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agri_food`
--

CREATE TABLE IF NOT EXISTS `agri_food` (
  `id` int(11) NOT NULL,
  `office` varchar(256) NOT NULL,
  `list` text NOT NULL,
  `dealer_list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `edu_culture`
--

CREATE TABLE IF NOT EXISTS `edu_culture` (
  `id` int(11) NOT NULL,
  `education_office` int(11) NOT NULL,
  `sec_edu_office` int(11) NOT NULL,
  `resors_center` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `edu_institution`
--

CREATE TABLE IF NOT EXISTS `edu_institution` (
  `id` int(11) NOT NULL,
  `university` int(11) NOT NULL,
  `colleges` int(11) NOT NULL,
  `primary_school` int(11) NOT NULL,
  `secondary_school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_service`
--

CREATE TABLE IF NOT EXISTS `e_service` (
  `id` int(11) NOT NULL,
  `e_book` varchar(256) NOT NULL,
  `e_dictionary` varchar(256) NOT NULL,
  `online_application` text NOT NULL,
  `android` varchar(256) NOT NULL,
  `iphone` varchar(256) NOT NULL,
  `bang_form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE IF NOT EXISTS `health` (
  `id` int(11) NOT NULL,
  `doctor_list` int(11) NOT NULL,
  `famility_planing_office` int(11) NOT NULL,
  `health_complex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pourosova`
--

CREATE TABLE IF NOT EXISTS `pourosova` (
  `id` int(11) NOT NULL,
  `words` int(11) NOT NULL,
  `law` text NOT NULL,
  `officers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pri_institution`
--

CREATE TABLE IF NOT EXISTS `pri_institution` (
  `id` int(11) NOT NULL,
  `ngo` int(11) NOT NULL,
  `bank` int(11) NOT NULL,
  `bima` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `religious_ins`
--

CREATE TABLE IF NOT EXISTS `religious_ins` (
  `id` int(11) NOT NULL,
  `masjid` int(11) NOT NULL,
  `tample` int(11) NOT NULL,
  `orphanage` int(11) NOT NULL,
  `grave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rule_regulation`
--

CREATE TABLE IF NOT EXISTS `rule_regulation` (
  `id` int(11) NOT NULL,
  `savar_thana` varchar(256) NOT NULL,
  `asulia_thana` varchar(256) NOT NULL,
  `fire_service` varchar(256) NOT NULL,
  `village_police` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `up_echo`
--

CREATE TABLE IF NOT EXISTS `up_echo` (
  `id` int(11) NOT NULL,
  `identy` text NOT NULL,
  `river` varchar(256) NOT NULL,
  `buisness` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `up_history`
--

CREATE TABLE IF NOT EXISTS `up_history` (
  `id` int(11) NOT NULL,
  `language` varchar(256) NOT NULL,
  `place` varchar(256) NOT NULL,
  `history` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `up_others`
--

CREATE TABLE IF NOT EXISTS `up_others` (
  `id` int(11) NOT NULL,
  `leader` varchar(256) NOT NULL,
  `papers` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `up_porishod`
--

CREATE TABLE IF NOT EXISTS `up_porishod` (
  `id` int(11) NOT NULL,
  `chairman` varchar(256) NOT NULL,
  `vice_chairman` varchar(256) NOT NULL,
  `women_vice-chairman` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `u_info`
--

CREATE TABLE IF NOT EXISTS `u_info` (
  `id` int(11) NOT NULL,
  `glance` varchar(256) NOT NULL,
  `war` text NOT NULL,
  `area` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_officer`
--
ALTER TABLE `admin_officer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_org`
--
ALTER TABLE `admin_org`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_others`
--
ALTER TABLE `admin_others`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_work`
--
ALTER TABLE `admin_work`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agri_food`
--
ALTER TABLE `agri_food`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu_culture`
--
ALTER TABLE `edu_culture`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu_institution`
--
ALTER TABLE `edu_institution`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_service`
--
ALTER TABLE `e_service`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pourosova`
--
ALTER TABLE `pourosova`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pri_institution`
--
ALTER TABLE `pri_institution`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religious_ins`
--
ALTER TABLE `religious_ins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule_regulation`
--
ALTER TABLE `rule_regulation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_echo`
--
ALTER TABLE `up_echo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_history`
--
ALTER TABLE `up_history`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_others`
--
ALTER TABLE `up_others`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_porishod`
--
ALTER TABLE `up_porishod`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_info`
--
ALTER TABLE `u_info`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
