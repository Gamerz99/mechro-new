-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2018 at 11:28 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7814629_michanic`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Heading` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `Qualifications` varchar(200) NOT NULL,
  `Stat` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Id`, `Name`, `Image`, `Heading`, `Description`, `Position`, `Qualifications`, `Stat`) VALUES
(2, 'R.M.K.C.B. RATHNATHILAKA', '1535434534.jpg', 'A Perfectionist On Every Detail', 'Hi!!!. I am KALITHA, managing director of â€œR & R HOLDINGSâ€.â€ THE EVENTSâ€ is a sub company of R & R HOLDINGS. The Events crew try to give you memorable experiences through creative event planning and management, because in your dreams, every detail matters.', 'MANAGING DIRECTOR', '(UG) BSc Eng. EEE', 2),
(3, 'HASHAN RATHNAYAKE', '1535434667.jpg', 'Turning a Vision Into Reality', 'Hi!!! I am HASHAN, vice president of â€œR & R HOLDINGSâ€. The Events crew help you create your event with exceptional experience every time because we take your fun seriously.', 'VICE PRESIDENT', '(UG) BBA HONORS Accounting & Finance', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(2) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Lastlogin` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`, `Lastlogin`) VALUES
(2, 'admin', 'admin', '2018-12-19 03:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Parent_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Category`, `Parent_id`) VALUES
(1, 'machinery', 0),
(2, 'construction', 0),
(3, 'other', 0),
(4, 'tea machinery', 1),
(5, 'conveyors', 1),
(6, 'dust collector', 1),
(7, 'exhaust fan', 1),
(8, 'packers', 1),
(9, 'filters', 1),
(10, 'equipment', 2),
(11, 'roofing sheets', 2),
(12, 'gates', 2),
(13, 'roller doors', 2),
(14, 'hand railing', 2),
(15, 'building', 2),
(16, 'land', 3),
(17, 'vehicle', 3);

-- --------------------------------------------------------

--
-- Table structure for table `construction`
--

CREATE TABLE `construction` (
  `Id` int(11) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Pid` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `construction`
--

INSERT INTO `construction` (`Id`, `Type`, `Pid`) VALUES
(4, '', 130),
(5, '', 131),
(6, '', 132),
(7, '', 133),
(8, '', 134),
(9, '', 135),
(10, '', 136),
(11, '', 137),
(12, '', 138),
(13, '', 139),
(14, '', 140),
(15, '', 141),
(16, '', 142),
(17, '', 143),
(18, '', 144),
(19, '', 145);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(5) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Category`, `Image`) VALUES
(11, 'Other', 'cover5.jpg'),
(18, 'Machine', '4.jpg'),
(19, 'Machine', '1.jpg'),
(20, 'Machine', '2.jpg'),
(21, 'Construction', 'other.jpg'),
(22, 'Construction', 'constructions.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `machinery`
--

CREATE TABLE `machinery` (
  `Id` int(10) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Pid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machinery`
--

INSERT INTO `machinery` (`Id`, `Type`, `Pid`) VALUES
(17, 'ss', 77),
(18, 'ss', 78),
(33, 'test', 93),
(52, '', 112),
(65, '', 126),
(35, 'test', 95),
(34, 'test', 94),
(26, 'ss', 86),
(27, 'ss', 87),
(28, 'ss', 88),
(29, 'ss', 89),
(30, 'ss', 90),
(63, '', 124),
(36, 'test', 96),
(37, 'test', 97),
(53, '', 113),
(39, 'test', 99),
(64, '', 125),
(41, 'test', 101),
(42, '', 102),
(43, '', 103),
(44, '', 104),
(45, '', 105),
(46, '', 106),
(47, '', 107),
(48, '', 108),
(49, '', 109),
(50, '', 110),
(51, '', 111),
(54, '', 114),
(55, '', 115),
(56, '', 116),
(57, '', 117),
(58, '', 118),
(59, '', 119),
(60, '', 120),
(61, '', 121),
(62, '', 122),
(66, '', 127),
(67, '', 128),
(68, '', 129);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` int(20) NOT NULL,
  `Pcategory` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Date` datetime NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Category`, `Pcategory`, `Image`, `Date`, `Description`) VALUES
(77, '7.5 HP THROUGH FAN', 7, 1, '1542456999.jpg', '2018-11-17 12:16:39', 'Supplying & Installing of 01no.Trough Fan an air foil type 48’’ diameter non guide value, single stage variable pitch, cast aluminum blades, fan provided with 7.5 HP, 6pole TEFC motor suitable for 380/440 volts, 3 phase, 50hz AC supply provided with star delta starter suitable for 7.5 HP motor 3mm thick fan casing, 1 ½” x 1 ½” 5mm thick fan half flanges, round	riangularhalf round air mixing chamber with 2 sets of louvers for hot and fresh air, and oval type transformation duct etc. made out of z'),
(78, 'THROUGH FAN', 7, 1, '1542457205.jpg', '2018-11-17 12:20:04', 'Supplying & Installing of 01no.Trough Fan an air foil type 48’’ diameter non guide value, single stage variable pitch, cast aluminum blades, fan provided with 7.5 HP, 6pole TEFC motor suitable for 380/440 volts, 3 phase, 50hz AC supply provided with star delta starter suitable for 7.5 HP motor 3mm thick fan casing, 1 ½” x 1 ½” 5mm thick fan half flanges, round	riangularhalf round air mixing chamber with 2 sets of louvers for hot and fresh air, and oval type transformation duct etc. made out of z'),
(93, 'PLENUM CHAMBERS', 4, 1, '1542852659.jpg', '2018-11-22 02:10:58', 'Trough plenum normally plenum made 1’’x 1’’ x 1/8 Angle Iron Frame complete with 2 x 2’’ GI mesh and nylon net to spreading bed and 32G, Zncoted sheets lining to flow, and 20G sheets for tray'),
(112, 'CONVEYOR', 5, 1, '1543065522.jpg', '2018-11-24 13:18:41', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system'),
(86, 'DUST FAN', 6, 1, '1542458369.jpg', '2018-11-17 12:39:29', 'Supplying of 48’’ Dust Fans complete with steel fabricated fan blades with cast-iron hubs and fabricated front doors, and 3HP Motor and starters.'),
(87, 'CONVEYOR', 5, 1, '1542458409.jpg', '2018-11-17 12:40:08', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system.'),
(122, 'RECIPROCATING ROLL BREAKERS ', 4, 1, '1542457445.jpg', '2018-11-17 12:24:04', 'Supplying of 01 No. Reciprocating Roll Breaker complete with single steel tray fitted with 4” x 4”  S.S. weld mesh &stainless steel mesh complete with s. s. beater box or without beater box,, solid one piece forged crank with journals turned to close limits, 1.5 hp motor and starter, ball bearing fitted to crank with 03 Nos stainless steel side under hoppers.'),
(95, 'PLENUM CHAMBERS', 4, 1, '1542852726.jpg', '2018-11-22 02:12:06', 'Trough plenum normally plenum made 1’’x 1’’ x 1/8 Angle Iron Frame complete with 2 x 2’’ GI mesh and nylon net to spreading bed and 32G, Zncoted sheets lining to flow, and 20G sheets for tray'),
(94, 'PLENUM CHAMBERS', 4, 1, '1542852690.jpg', '2018-11-22 02:11:29', 'Trough plenum normally plenum made 1’’x 1’’ x 1/8 Angle Iron Frame complete with 2 x 2’’ GI mesh and nylon net to spreading bed and 32G, Zncoted sheets lining to flow, and 20G sheets for tray'),
(88, 'CONVEYOR', 5, 1, '1542458424.jpg', '2018-11-17 12:40:24', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system.'),
(89, 'CONVEYOR', 5, 1, '1542458438.jpg', '2018-11-17 12:40:37', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system.'),
(90, 'SUCTION WINNOWER', 8, 1, '1542458583.jpg', '2018-11-17 12:43:02', 'Supply of 01 No. suction winnower c/w Feeding Conveyor (normal ) machine comprised with made tea feeding and to control the input, suction flow is obtained  auxiliary flow fan and the discharge level is the center of the winnower, construction would be out of level is the center of the winnower, construction would be out of Zncotted & aluminum sheets or stainless Steel sheets with an Angle iron and a control discharge valve. (with or without bucket conveyor)'),
(124, 'TEA PACKER', 8, 1, '1543412456.jpg', '2018-11-28 13:40:56', ''),
(125, 'CONVEYOR', 5, 1, '1543412495.jpg', '2018-11-28 13:41:34', ''),
(126, 'WATER FILTER', 9, 1, '1543412523.jpg', '2018-11-28 13:42:02', ''),
(127, 'WATER FILTER', 9, 1, '1543412536.jpg', '2018-11-28 13:42:15', ''),
(128, 'WATER FILTER', 9, 1, '1543412548.jpg', '2018-11-28 13:42:27', ''),
(129, 'SAND FILTER', 9, 1, '1543412569.jpg', '2018-11-28 13:42:48', ''),
(130, 'ROOFING SHEET', 11, 2, '1543412610.jpg', '2018-11-28 13:43:29', ''),
(131, 'ROOFING SHEET', 11, 2, '1543412627.jpg', '2018-11-28 13:43:46', ''),
(96, 'SUCTION WINNOWER', 4, 1, '1542852782.jpg', '2018-11-22 02:13:02', 'Supply of 01 No. suction winnower c/w Feeding Conveyor (normal ) machine comprised with made tea feeding and to control the input, suction flow is obtained auxiliary flow fan and the discharge level is the center of the winnower, construction would be out of level is the center of the winnower, construction would be out of Zncotted & aluminum sheets or stainless Steel sheets with an Angle iron and a control discharge valve. (with or without bucket conveyor)'),
(97, 'SUCTION WINNOWER', 4, 1, '1542852806.jpg', '2018-11-22 02:13:26', 'Supply of 01 No. suction winnower c/w Feeding Conveyor (normal ) machine comprised with made tea feeding and to control the input, suction flow is obtained auxiliary flow fan and the discharge level is the center of the winnower, construction would be out of level is the center of the winnower, construction would be out of Zncotted & aluminum sheets or stainless Steel sheets with an Angle iron and a control discharge valve. (with or without bucket conveyor)'),
(113, 'CONVEYOR', 4, 1, '1543065534.jpg', '2018-11-24 13:18:53', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system'),
(99, 'DUST FAN', 4, 1, '1542852892.jpg', '2018-11-22 02:14:51', 'Supplying of 48’’ Dust Fans complete with steel fabricated fan blades with cast-iron hubs and fabricated front doors, and 3HP Motor and starters.'),
(132, 'ROOFING SHEET', 11, 2, '1543412643.jpg', '2018-11-28 13:44:03', ''),
(133, 'ROOFING SHEET', 11, 2, '1543412656.jpg', '2018-11-28 13:44:15', ''),
(134, 'GATES', 12, 2, '1543412677.jpg', '2018-11-28 13:44:37', ''),
(101, 'THROUGH FAN', 4, 1, '1542853047.jpg', '2018-11-22 02:17:27', 'Supplying & Installing of 01no.Trough Fan an air foil type 48’’ diameter non guide value, single stage variable pitch, cast aluminum blades, fan provided with 7.5 HP, 6pole TEFC motor suitable for 380/440 volts, 3 phase, 50hz AC supply provided with star delta starter suitable for 7.5 HP motor 3mm thick fan casing, 1 ½” x 1 ½” 5mm thick fan half flanges, round	riangularhalf round air mixing chamber with 2 sets of louvers for hot and fresh air, and oval type transformation duct etc. made out of z'),
(102, 'CENTRIFUGAL FAN', 6, 1, '1543046941.jpg', '2018-11-24 08:09:00', ''),
(103, 'DUST COLLECTOR SYSTEM', 6, 1, '1543046972.jpg', '2018-11-24 08:09:32', ''),
(104, 'DUST COLLECTOR SYSTEM', 6, 1, '1543046993.jpg', '2018-11-24 08:09:52', ''),
(105, 'DUST COLLECTOR SYSTEM PRINCIPLE', 6, 1, '1543047027.jpg', '2018-11-24 08:10:27', ''),
(106, 'ID FAN', 6, 1, '1543047044.jpg', '2018-11-24 08:10:43', ''),
(107, 'WALL WINDOW MOUNTED INDUSTRIAL EXHAUST FAN', 7, 1, '1543047615.jpg', '2018-11-24 08:20:14', ''),
(108, 'INDUSTRIAL EXHAUST FAN', 7, 1, '1543047646.jpg', '2018-11-24 08:20:46', ''),
(109, 'INDUSTRIAL ROOF EXHAUST FAN', 7, 1, '1543047689.jpg', '2018-11-24 08:21:28', ''),
(110, 'ROOF VENTILATION', 7, 1, '1543047719.jpg', '2018-11-24 08:21:59', ''),
(111, 'TUNNEL VENTILATION', 7, 1, '1543047747.jpg', '2018-11-24 08:22:26', ''),
(114, 'CONVEYOR', 5, 1, '1543065548.jpg', '2018-11-24 13:19:07', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system'),
(115, 'CONVEYOR', 5, 1, '1543065558.jpg', '2018-11-24 13:19:17', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system'),
(116, 'CONVEYOR', 4, 1, '1543065571.jpg', '2018-11-24 13:19:30', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system'),
(117, 'CONVEYOR', 4, 1, '1543065583.jpg', '2018-11-24 13:19:42', 'Suppliying and installing of 18’’ wide feed conveyor, complete with canvas conveyor belts, feeder and discharge hopper with driver system'),
(118, 'MIDDLETON', 4, 1, '1543065621.jpg', '2018-11-24 13:20:20', 'Supplying of Middleton stalk extractor complete with two trays having perforated bubbles size of 3mm & 5m, and timber frame work, angle iron deck frame, spring blades, discharge hopper, 1.5 HP motor with starter, V- belts & pulleys etc. (with or without C/W conveyor)'),
(119, 'MICHIE SHEFTER ', 4, 1, '1543065641.jpg', '2018-11-24 13:20:40', 'Supply of 01 no. Michie Shifter, complete with large tray, fitted with S.S. mesh hardwood frame work, iron bed and flywheel, solid one piece forged crank with journal turned to close limits, 1hp motor with starter and pulley with V- belt front rear fixing Bearings with pins. (Sizes :- 6’x3’, 8’x3’ or 10’x3’) (Zncotted or Stainless steel)'),
(120, 'FIBROMAT', 4, 1, '1543065672.jpg', '2018-11-24 13:21:12', 'Single deck (vibratory) Fibermat 12ft long, 36 inches wide fitted with 6nos. 12 inch diameter PVC jumbo pickers, height of the rollers adjustable the tray fitted with an aluminum bubble tray heavy duty chain drivers for jumbo picker with guards complete with 2 HP motor. (With or without heaters'),
(121, 'RECIPROCATING ROLL BREAKERS', 4, 1, '1543065711.jpg', '2018-11-24 13:21:51', 'Supplying of 01 No. Reciprocating Roll Breaker complete with single steel tray fitted with 4” x 4”  S.S. weld mesh &stainless steel mesh complete with s. s. beater box, solid one piece forged crank with journals turned to close limits, 1.5 hp motor and starter, ball bearing fitted to crank with 03 Nos stainless steel side under hoppers.'),
(135, 'GATES', 12, 2, '1543412692.jpg', '2018-11-28 13:44:51', ''),
(136, 'GATES', 12, 2, '1543412709.jpg', '2018-11-28 13:45:09', ''),
(137, 'GATES', 12, 2, '1543412731.jpg', '2018-11-28 13:45:30', ''),
(138, 'GATES', 12, 2, '1543412754.jpg', '2018-11-28 13:45:53', ''),
(139, 'GATES', 12, 2, '1543412771.jpg', '2018-11-28 13:46:11', ''),
(140, 'GATES', 12, 2, '1543412789.jpg', '2018-11-28 13:46:29', ''),
(141, 'HAND RAILING', 14, 2, '1543412823.jpg', '2018-11-28 13:47:02', ''),
(142, 'HAND RAILING', 14, 2, '1543412843.jpg', '2018-11-28 13:47:22', ''),
(143, 'ROLLER DOORS', 13, 2, '1543412884.jpg', '2018-11-28 13:48:04', ''),
(144, 'ROLLER DOORS', 13, 2, '1543412903.jpg', '2018-11-28 13:48:23', ''),
(145, 'ROLLER DOORS', 13, 2, '1543412919.jpg', '2018-11-28 13:48:38', ''),
(146, 'Land', 16, 3, 'land.jpg', '2018-11-13 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Image1` varchar(50) NOT NULL,
  `Image2` varchar(50) NOT NULL,
  `Image3` varchar(50) NOT NULL,
  `Image4` varchar(50) NOT NULL,
  `Stat` int(11) NOT NULL DEFAULT '0',
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Id`, `Name`, `Description`, `Image1`, `Image2`, `Image3`, `Image4`, `Stat`, `Start_Date`, `End_Date`, `Date`) VALUES
(4, 'test', 'test', '15443642411.jpg', '15443642412.jpg', '', '', 1, '0000-00-00', '2018-12-09', '2018-12-09'),
(6, 'test 2', 'test 2', '15443646961.jpg', '15443646962.jpg', '15443646963.jpg', '15443646964.jpg', 0, '0000-00-00', '0000-00-00', '2018-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `construction`
--
ALTER TABLE `construction`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `machinery`
--
ALTER TABLE `machinery`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_grade_id` (`Pid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `construction`
--
ALTER TABLE `construction`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `machinery`
--
ALTER TABLE `machinery`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
