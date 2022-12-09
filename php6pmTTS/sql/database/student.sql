-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 07:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `counrtyid` int(11) NOT NULL,
  `countrynm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`counrtyid`, `countrynm`) VALUES
(1, 'AFGHANISTAN'),
(2, 'ALAND ISLANDS'),
(3, 'ALBANIA'),
(4, 'ALGERIA'),
(5, 'AMERICAN SAMOA'),
(6, 'ANDORRA'),
(7, 'ANGUILLA'),
(8, 'ARGENTINA'),
(9, 'ARMENIA'),
(10, 'AUSTRALIA'),
(11, 'AUSTRIA'),
(12, 'AZERBAIJAN'),
(13, 'BANGLADESH'),
(14, 'BELGIUM'),
(15, 'BERMUDA'),
(16, 'BOSNIA AND HERZEGOVINA'),
(17, 'BRAZIL'),
(18, 'BRITISH INDIAN OCEAN TERRITORY'),
(19, 'BRUNEI DARUSSALAM'),
(20, 'BULGARIA'),
(21, 'CABO VERDE'),
(22, 'CAYMAN ISLANDS'),
(23, 'CHILE'),
(24, 'CHINA'),
(25, 'COSTA RICA'),
(26, 'CROATIA'),
(27, 'CUBA'),
(28, 'CYPRUS'),
(29, 'CZECHIA'),
(30, 'DENMARK'),
(31, 'DOMINICAN REPUBLIC'),
(32, 'ESTONIA'),
(33, 'ESWATINI'),
(34, 'FALKLAND ISLANDS (MALVINAS)'),
(35, 'FAROE ISLANDS'),
(36, 'FINLAND'),
(37, 'FRANCE'),
(38, 'FRENCH GUIANA'),
(39, 'GERMANY'),
(40, 'GIBRALTAR'),
(41, 'GREECE'),
(42, 'GREENLAND'),
(43, 'GUADELOUPE'),
(44, 'GUAM'),
(45, 'GUATEMALA'),
(46, 'GUERNSEY'),
(47, 'HAITI'),
(48, 'HOLY SEE'),
(49, 'HUNGARY'),
(50, 'ICELAND'),
(51, 'INDIA'),
(52, 'INDONESIA'),
(53, 'IRELAND'),
(54, 'ISLE OF MAN'),
(55, 'ITALY'),
(56, 'JAMAICA'),
(57, 'JAPAN'),
(58, 'JERSEY'),
(59, 'KOREA (REPUBLIC OF)'),
(60, 'KUWAIT'),
(61, 'LIBYA'),
(62, 'LIECHTENSTEIN'),
(63, 'LITHUANIA'),
(64, 'LUXEMBOURG'),
(65, 'MADAGASCAR'),
(66, 'MALAYSIA'),
(67, 'MARSHALL ISLANDS'),
(68, 'MARTINIQUE'),
(69, 'MAYOTTE'),
(70, 'MEXICO'),
(71, 'MOLDOVA (REPUBLIC OF)'),
(72, 'MONACO'),
(73, 'MONGOLIA'),
(74, 'MOROCCO'),
(75, 'MOZAMBIQUE'),
(76, 'NEPAL'),
(77, 'NETHERLANDS'),
(78, 'NEW ZEALAND'),
(79, 'NIGERIA'),
(80, 'NORTH MACEDONIA'),
(81, 'NORTHERN MARIANA ISLANDS'),
(82, 'NORWAY'),
(83, 'PAKISTAN'),
(84, 'PARAGUAY'),
(85, 'PERU'),
(86, 'PITCAIRN'),
(87, 'POLAND'),
(88, 'PORTUGAL'),
(89, 'PUERTO RICO'),
(90, 'REUNION'),
(91, 'ROMANIA'),
(92, 'RUSSIAN FEDERATION'),
(93, 'SAINT BARTHELEMY'),
(94, 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA'),
(95, 'SAINT MARTIN (FRENCH PART)'),
(96, 'SAINT PIERRE AND MIQUELON'),
(97, 'SINGAPORE'),
(98, 'SLOVAKIA'),
(99, 'SOUTH AFRICA'),
(100, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
(101, 'SPAIN'),
(102, 'SRI LANKA'),
(103, 'SVALBARD AND JAN MAYEN'),
(104, 'SWEDEN'),
(105, 'SWITZERLAND'),
(106, 'TAIWAN (PROVINCE OF CHINA)'),
(107, 'TUNISIA'),
(108, 'TURKEY'),
(109, 'TURKS AND CAICOS ISLANDS'),
(110, 'UKRAINE'),
(111, 'UNITED KINGDOM OF GREAT BRITAIN AND NORTHERN IRELAND'),
(112, 'UNITED STATES MINOR OUTLYING ISLANDS'),
(113, 'UNITED STATES OF AMERICA'),
(114, 'URUGUAY'),
(115, 'VENEZUELA (BOLIVARIAN REPUBLIC OF)'),
(116, 'VIRGIN ISLANDS (BRITISH)'),
(117, 'VIRGIN ISLANDS (U.S.)');

-- --------------------------------------------------------

--
-- Table structure for table `india_state`
--

CREATE TABLE `india_state` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `india_state`
--

INSERT INTO `india_state` (`stateid`, `statename`) VALUES
(1, 'Andaman & Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli'),
(9, 'Daman and Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Orissa'),
(27, 'Pondicherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `stu_details`
--

CREATE TABLE `stu_details` (
  `stu_id` int(11) NOT NULL,
  `usernm` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `secondname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `experience` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`counrtyid`);

--
-- Indexes for table `india_state`
--
ALTER TABLE `india_state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `stu_details`
--
ALTER TABLE `stu_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `counrtyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `india_state`
--
ALTER TABLE `india_state`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stu_details`
--
ALTER TABLE `stu_details`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
