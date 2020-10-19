-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 12:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `attendeeID` int(12) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `company` varchar(128) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`attendeeID`, `firstName`, `lastName`, `email`, `phone`, `company`, `username`, `password`, `user_type`) VALUES
(70, 'dan', 'dau', 'dan.dau@gmail.com', '1', '1', 'dan.dau', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(71, 'rob', 'bank', 'rob@bank.com', '123', 'ABC', 'rob.bank', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(74, 'Paul', 'Stephens', 'paul.stephens@coinforall.lab', '(07) 5730 7971', 'Coinforall Trust Limited', 'paul.stephens', '2ac9cb7dc02b3c0083eb70898e549b63', 'user'),
(75, 'Matthew', 'Parkinson', 'matthew.parkinson@davistaylorclark.lab', '(09) 2005 5219', 'Davis Taylor Clark', 'matthew.parkinson', '2ac9cb7dc02b3c0083eb70898e549b63', 'user'),
(76, 'Neil', 'Johnston', 'neil.johnston@elizabethuninversity.edu', '(09) 4287 6866', 'Elizabeth University', 'neil.johnston', '2ac9cb7dc02b3c0083eb70898e549b63', 'user'),
(77, 'Melissa', 'Nelson', 'melissa.nelson@harpynorlan.lab', '(02) 1633 5632', 'Harpy Norlan Enterprises', 'melissa.nelson', '2ac9cb7dc02b3c0083eb70898e549b63', 'user'),
(78, 'Peter', 'Sharpe', 'peter.sharpe@kingston.lab', '(08) 6040 8143', 'Kingston City Council', 'peter.sharpe', '2ac9cb7dc02b3c0083eb70898e549b63', 'user'),
(79, '1', '2', '3', '4', '5', '6', '2ac9cb7dc02b3c0083eb70898e549b63', 'user'),
(80, 'harry', 'potter', 'harry.potter@yahoo.com', '0123456789', 'HP', 'harry.potter', '2ac9cb7dc02b3c0083eb70898e549b63', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `presentations`
--

CREATE TABLE `presentations` (
  `presentationID` int(12) NOT NULL,
  `topicID` int(12) NOT NULL,
  `speakerID` int(12) NOT NULL,
  `startTime` datetime(6) NOT NULL,
  `duration` time(6) NOT NULL,
  `venueID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presentations`
--

INSERT INTO `presentations` (`presentationID`, `topicID`, `speakerID`, `startTime`, `duration`, `venueID`) VALUES
(1, 1, 1, '2020-10-13 09:00:00.000000', '01:00:00.000000', 1),
(2, 2, 2, '2020-10-13 10:00:00.000000', '01:30:00.000000', 2),
(3, 3, 3, '2020-10-13 11:45:00.000000', '01:15:00.000000', 3),
(4, 4, 4, '2020-10-13 14:00:00.000000', '01:00:00.000000', 4),
(5, 5, 5, '2020-10-13 15:15:00.000000', '01:15:00.000000', 1),
(6, 6, 6, '2020-10-13 16:30:00.000000', '01:00:00.000000', 2),
(7, 7, 7, '2020-10-13 17:45:00.000000', '01:00:00.000000', 3),
(8, 8, 8, '2020-10-13 19:00:00.000000', '01:00:00.000000', 4),
(9, 9, 9, '2020-10-13 20:15:00.000000', '00:45:00.000000', 1),
(10, 10, 10, '2020-10-13 21:15:00.000000', '00:30:00.000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `registerID` int(12) NOT NULL,
  `presentationID` int(12) NOT NULL,
  `attendeeID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`registerID`, `presentationID`, `attendeeID`) VALUES
(1, 1, 71),
(10, 1, 74),
(14, 1, 80),
(11, 2, 74),
(15, 2, 80),
(8, 3, 71),
(9, 4, 71),
(13, 5, 74),
(2, 7, 71),
(3, 8, 71),
(4, 9, 71),
(5, 10, 71),
(12, 10, 74);

-- --------------------------------------------------------

--
-- Stand-in structure for view `registration`
-- (See below for the actual view)
--
CREATE TABLE `registration` (
`attendeeID` int(12)
,`Attendee` varchar(65)
,`presentationID` int(12)
,`startTime` datetime(6)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `showpre`
-- (See below for the actual view)
--
CREATE TABLE `showpre` (
`presentationID` int(12)
,`title` varchar(128)
,`Speaker` varchar(129)
,`Company` varchar(128)
,`startTime` datetime(6)
,`duration` time(6)
,`Venue` varchar(128)
,`location` varchar(128)
,`capacity` int(6)
);

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `speakerID` int(12) NOT NULL,
  `firstName` varchar(64) NOT NULL,
  `lastName` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `company` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`speakerID`, `firstName`, `lastName`, `email`, `phone`, `company`) VALUES
(1, 'John', 'Alexander', 'john.alexander@', '(09) 6765 6140', 'General Bank of Big Town'),
(2, 'Susan', 'Taylor', 'susan.taylor@', '(08) 5300 0383', 'Golden Credit Union Group'),
(3, 'Chen', 'Zhijian', 'chen.zhijian@', '(09) 9463 4973', 'Home Loans Plus'),
(4, 'David', 'Sutherland', 'david.sutherland@', '(07) 2323 1361', 'Market Services'),
(5, 'Louise', 'Turner', 'louise.turner@', '(04) 9135 9630', 'Sunshine Finance'),
(6, 'Priya', 'Singh', 'priya.singh@', '(02) 5587 5638', 'Insurance Cover Direct'),
(7, 'Rachel', 'Carr', 'rachel.carr@', '(05) 1179 4973', 'Jones Mortgage Brokers'),
(8, 'Oliver', 'Avery', 'oliver.avery@', '(09) 8510 7987', 'Interbank Group'),
(9, 'Paul', 'Bailey', 'paul.bailey@', '(07) 8700 9633', 'Rainman Investments'),
(10, 'Vanessa', 'Bond', 'vanessa.bond@', '(08) 6809 2505', 'Property Trust Group'),
(11, 'Sean', 'McGrath', 'sean.mcgrath@', '(07) 3949 4269', 'Share Market Services'),
(12, 'Sally', 'Wilson', 'sally.wilson@', '(08) 1133 0453', 'Online Finance Express');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topicID` int(12) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topicID`, `title`, `description`) VALUES
(1, 'Maximise Profits', 'How to maximise profits on managed funds'),
(2, 'Minimise Tax', 'Minimising tax in the new environment'),
(3, 'Stock Momentum', 'Measuring stock momentum for investments'),
(4, 'Forecasts', 'Economic forecasts and how to interpret them'),
(5, 'ATO Web Site', 'The exciting new features of the ATO web site'),
(6, 'Enterprise Risk Management', 'Explore opportunities to bridge and enhance risk'),
(7, 'Total Impact', 'Companies and investors deploying innovative new processes'),
(8, 'Digital Channels', 'Investment services by leveraging technology and digital channels'),
(9, 'Fund Compliance', 'Fund accounting, unit pricing, financial & regulatory reporting'),
(10, 'Wealth Management', 'Client engagement in dynamic and complex wealth management');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `venueID` int(6) NOT NULL,
  `title` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `capacity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venueID`, `title`, `location`, `capacity`) VALUES
(1, 'Grand Hall', 'Level 1 Promenade', 150),
(2, 'Lecture Theatre', 'Level 1 Access B', 100),
(3, 'Meeting Room A', 'Ground Floor', 15),
(4, 'Meeting Room B2', 'Level 2 Atrium', 10);

-- --------------------------------------------------------

--
-- Structure for view `registration`
--
DROP TABLE IF EXISTS `registration`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `registration`  AS  select `attendees`.`attendeeID` AS `attendeeID`,concat(`attendees`.`firstName`,' ',`attendees`.`lastName`) AS `Attendee`,`presentations`.`presentationID` AS `presentationID`,`presentations`.`startTime` AS `startTime` from ((`register` join `attendees` on(`register`.`attendeeID` = `attendees`.`attendeeID`)) join `presentations` on(`register`.`presentationID` = `presentations`.`presentationID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `showpre`
--
DROP TABLE IF EXISTS `showpre`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `showpre`  AS  select `presentations`.`presentationID` AS `presentationID`,`topics`.`title` AS `title`,concat(`speakers`.`firstName`,' ',`speakers`.`lastName`) AS `Speaker`,`speakers`.`company` AS `Company`,`presentations`.`startTime` AS `startTime`,`presentations`.`duration` AS `duration`,`venues`.`title` AS `Venue`,`venues`.`location` AS `location`,`venues`.`capacity` AS `capacity` from (((`presentations` join `topics` on(`presentations`.`topicID` = `topics`.`topicID`)) join `speakers` on(`presentations`.`speakerID` = `speakers`.`speakerID`)) join `venues` on(`presentations`.`venueID` = `venues`.`venueID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`attendeeID`);

--
-- Indexes for table `presentations`
--
ALTER TABLE `presentations`
  ADD PRIMARY KEY (`presentationID`),
  ADD KEY `topicID` (`topicID`,`speakerID`,`venueID`),
  ADD KEY `speakerID` (`speakerID`),
  ADD KEY `venueID` (`venueID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`registerID`),
  ADD KEY `presentationID` (`presentationID`,`attendeeID`),
  ADD KEY `attendeeID` (`attendeeID`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`speakerID`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topicID`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`venueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `attendeeID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `presentations`
--
ALTER TABLE `presentations`
  MODIFY `presentationID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `registerID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `speakerID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topicID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `venueID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `presentations`
--
ALTER TABLE `presentations`
  ADD CONSTRAINT `presentations_ibfk_1` FOREIGN KEY (`speakerID`) REFERENCES `speakers` (`speakerID`),
  ADD CONSTRAINT `presentations_ibfk_3` FOREIGN KEY (`topicID`) REFERENCES `topics` (`topicID`),
  ADD CONSTRAINT `presentations_ibfk_4` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`presentationID`) REFERENCES `presentations` (`presentationID`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`attendeeID`) REFERENCES `attendees` (`attendeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
