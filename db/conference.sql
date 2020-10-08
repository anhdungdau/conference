-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 07:01 AM
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
  `webUserName` varchar(32) NOT NULL,
  `webPassword` varchar(32) NOT NULL,
  `webUserType` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`attendeeID`, `firstName`, `lastName`, `email`, `phone`, `company`, `webUserName`, `webPassword`, `webUserType`) VALUES
(1, 'Paul', 'Stephens', 'paul.stephens@coinforall.lab', '(07) 5730 7971', 'Coinforall Trust Limited', 'paul.stephens', 'Password1', 0),
(2, 'Matthew', 'Parkinson', 'matthew.parkinson@davistaylorclark.lab', '(09) 2005 5219', 'Davis Taylor Clark', 'matthew.parkinson', 'Password1', 0),
(3, 'Neil', 'Johnston', 'neil.johnston@elizabethuninversity.edu', '(09) 4287 6866', 'Elizabeth University', 'neil.johnston', 'Password1', 0),
(4, 'Melissa', 'Nelson', 'melissa.nelson@harpynorlan.lab', '(02) 1633 5632', 'Harpy Norlan Enterprises', 'melissa.nelson', 'Password1', 0),
(5, 'Peter', 'Sharpe', 'peter.sharpe@kingston.lab', '(08) 6040 8143', 'Kingston City Council', 'peter.sharpe', 'Password1', 0),
(6, 'Ben', 'Warden', 'ben.warden@newlifehealth.lab', '(09) 6782 2285', 'New Life Health', 'ben.warden', 'Password1', 0),
(7, 'Justin', 'Brennan', 'justin.brennan@primedecor.lab', '(04) 6331 9679', 'Prime Decor', 'justin.brennan', 'Password1', 0),
(8, 'Marian', 'Ross', 'marian.ross@proclaimmedia.lab', '(09) 2111 2607', 'Proclaim Media Group', 'marian.ross', 'Password1', 0),
(9, 'Michael', 'Ho', 'michael.ho@gumtreeconfectionery.lab', '(06) 4493 8926', 'Gum Tree Confectionery Company', 'michael.ho', 'Password1', 0),
(10, 'Charles', 'Sutherland', 'charles.sutherland@highstakesfinancial.lab', '(01) 9436 7884', 'High Stakes Financial', 'charles.sutherland', 'Password1', 0),
(11, 'Michael', 'Gardner', 'michael.gardner@jamescolawyers.lab', '(02) 3484 4191', 'James and Co Lawyers', 'michael.gardner', 'Password1', 0),
(12, 'Brian', 'Pearson', 'brian.pearson@lyonuniversity.edu', '(03) 1514 2649', 'Lyon University', 'brian.pearson', 'Password1', 0),
(13, 'Pam', 'O\'Brien', 'pam.o\'brien@hammerhardware.lab', '(09) 5878 8660', 'Hammer Hardware', 'pam.o\'brien', 'Password1', 0),
(14, 'Peter', 'Anderson', 'peter.anderson@Islandmuicipalservices.lab', '(05) 7390 4278', 'Island Municipal Services', 'peter.anderson', 'Password1', 0),
(15, 'Graham', 'Turner', 'graham.turner@nationalhealth.lab', '(08) 7600 1671', 'National Health  Care Group', 'graham.turner', 'Password1', 0),
(16, 'Catherine', 'Bennett', 'catherine.bennett@brilliantdecorating.lab', '(03) 6271 2044', 'Brilliant Home Decorating', 'catherine.bennett', 'Password1', 0),
(17, 'Daniel', 'Ryan', 'daniel.ryan@worldpressgroup.lab', '(06) 3534 4804', 'World Press Group', 'daniel.ryan', 'Password1', 0),
(18, 'Claire', 'Brooks', 'claire.brooks@nextgeneration.lab', '(01) 3228 3038', 'Next Generation Media', 'claire.brooks', 'Password1', 0),
(19, 'Maree', 'Fraser', 'maree.fraser@worldtravel.lab', '(09) 1541 4900', 'World Travel Enterprises', 'maree.fraser', 'Password1', 0),
(20, 'Victoria', 'Beighton', 'victoria.beighton@rivervalleyhospital.lab', '(06) 1153 7217', 'River Valley District Hosptal', 'victoria.beighton', 'Password1', 0),
(21, 'David', 'Jones', 'david.jones@victoriauniversity.lab', '(08) 5881 1704', 'Victoria University', 'david.jones', 'Password1', 0),
(22, 'Bruce', 'Greenwood', 'bruce.greenwood@nationaltimes.lab', '(09) 2832 9368', 'The National Times', 'bruce.greenwood', 'Password1', 0),
(23, 'David', 'Wood', 'david.wood@channeltwenty.lab', '(09) 0796 2671', 'Channel Twenty', 'david.wood', 'Password1', 0),
(24, 'David', 'Bowden', 'david.bowden@magazinesmedia.lab', '(08) 6275 6303', 'Magazines Media Services', 'david.bowden', 'Password1', 0),
(25, 'John', 'Bednall', 'john.bednall@kennyswastemanagement.lab', '(01) 9030 3157', 'Kenny\'s Waste Management', 'john.bednall', 'Password1', 0),
(26, 'Richard', 'Phillips', 'richard.phillips@mainroadmedical.lab', '(06) 0606 8655', 'Main Road Medical Centre', 'richard.phillips', 'Password1', 0),
(27, 'Anna', 'Shadbolt', 'anna.shadbolt@superiorlegal.lab', '(03) 7607 1635', 'Superior Legal Services', 'anna.shadbolt', 'Password1', 0),
(28, 'Robert', 'Butcher', 'robert.butcher@westerncouncil.lab', '(04) 5049 6915', 'Western Districts City Council', 'robert.butcher', 'Password1', 0),
(29, 'Andrew', 'Norris', 'andrew.norris@mtpleasantregional.lab', '(05) 2404 7958', 'Mt Pleasant Regional Education', 'andrew.norris', 'Password1', 0),
(30, 'Matthew', 'Klein', 'matthew.klein@jamesdwyer.lab', '(06) 9965 2764', 'James Dwyer University', 'matthew.klein', 'Password1', 0),
(31, 'Tim', 'Walker', 'tim.walker@premium.lab', '(01) 6084 4078', 'Premium Finance Company', 'tim.walker', 'Password1', 0),
(32, 'Christine', 'Carrington', 'christine.carrington@superior.lab', '(09) 4160 8741', 'Superior Legal Associates', 'christine.carrington', 'Password1', 0),
(33, 'Fiona', 'Kennedy', 'fiona.kennedy@training.lab', '(07) 7905 8155', 'Five Star Training', 'fiona.kennedy', 'Password1', 0),
(34, 'Stewart', 'Davidson', 'stewart.davidson@fastroad.lab', '(04) 9939 5292', 'Fast Road Delivery Group', 'stewart.davidson', 'Password1', 0),
(35, 'Kevin', 'Adams', 'kevin.adams@webuildroads.lab', '(07) 9580 7882', 'We Build Roads Incorporated', 'kevin.adams', 'Password1', 0),
(36, 'Anthony', 'Burrell', 'anthony.burrell@happyacres.lab', '(09) 7156 9053', 'Happy Acres Resort Retirement Village', 'anthony.burrell', 'Password1', 0),
(37, 'Christine', 'Britt', 'christine.britt@covered.lab', '(06) 2682 7782', 'You Are Covered Floors', 'christine.britt', 'Password1', 0),
(38, 'Claire', 'Brady', 'claire.brady@enlightenement.lab', '(02) 8205 1611', 'Enlightenment Newspaper', 'claire.brady', 'Password1', 0),
(39, 'Sophia', 'Keal', 'sophia.keal@lemtin.lab', '(03) 4128 4258', 'Lemtin Packaging', 'sophia.keal', 'Password1', 0),
(40, 'James', 'Saunders', 'james.saunders@regionallending.lab', '(01) 0107 3489', 'Regional Lending Company', 'james.saunders', 'Password1', 0),
(41, 'Graeme', 'Eadie', 'graeme.eadie@mengan.lab', '(06) 9764 1817', 'Mengan Law Associates', 'graeme.eadie', 'Password1', 0),
(42, 'John', 'Ball', 'john.ball@kline.lab', '(01) 9460 6841', 'Kline Research Group', 'john.ball', 'Password1', 0),
(43, 'Anthony', 'Hill', 'anthony.hill@timber.lab', '(03) 3278 1209', 'Timber Resources Pty Ltd', 'anthony.hill', 'Password1', 0),
(44, 'Dan', 'McLean', 'dan.mclean@waterresources.lab', '(02) 3625 6696', 'Waste Resource Centre', 'dan.mclean', 'Password1', 0),
(45, 'Sonia', 'Carr', 'sonia.carr@sleepypines.lab', '(06) 8132 1728', 'Sleepy Pines Retirement Villiage', 'sonia.carr', 'Password1', 0),
(46, 'Charles', 'Jones', 'charles.jones@tilecompany.lab', '(08) 1920 0464', 'The Tile Specialist Company', 'charles.jones', 'Password1', 0),
(47, 'Bella', 'Knox', 'bella.knox@intmedia.lab', '(08) 4192 7799', 'International Media Group', 'bella.knox', 'Password1', 0),
(48, 'Kimberly', 'Nash', 'kimberly.nash@traveljournal.lab', '(09) 6374 2551', 'Travel Journal Media', 'kimberly.nash', 'Password1', 0),
(49, 'Harry', 'Gill', 'harry.gill@tempt.lab', '(08) 4148 8774', 'Tempt Airlines', 'harry.gill', 'Password1', 0),
(50, 'Max', 'Howard', 'max.howard@floralhealth.lab', '(03) 7318 0842', 'Floral Health Services', 'max.howard', 'Password1', 0),
(51, 'Blake', 'Gibson', 'blake.gibson@corptrain.lab', '(09) 3940 5358', 'Corporate Training Services', 'blake.gibson', 'Password1', 0),
(52, 'Alexandra', 'Ellison', 'alexandra.ellison@centurymag.lab', '(01) 1398 7560', 'Century Magazine', 'alexandra.ellison', 'Password1', 0),
(53, 'Andrea', 'Hodges', 'andrea.hodges@fireworksad.lab', '(08) 7220 7202', 'Fireworks Advertising', 'andrea.hodges', 'Password1', 0),
(54, 'Adrian', 'Martin', 'adrian.martin@inkpaperprint.lab', '(02) 0491 1276', 'Ink Paper Printing', 'adrian.martin', 'Password1', 0),
(55, 'Tim', 'Greene', 'tim.greene@rubbishremoval.lab', '(08) 0240 7555', 'Rubbish Removal Company', 'tim.greene', 'Password1', 0),
(56, 'Christopher', 'Ball', 'christopher.ball@healthone.lab', '(01) 7683 3309', 'Health One Services', 'christopher.ball', 'Password1', 0),
(57, 'Chloe', 'Davidson', 'chloe.davidson@jamessonlawyers.lab', '(05) 8194 1082', 'James and Son Lawyers', 'chloe.davidson', 'Password1', 0),
(58, 'Dorothy', 'May', 'dorothy.may@diggerlandscape.lab', '(01) 1932 2718', 'Digger Landscape', 'dorothy.may', 'Password1', 0),
(59, 'Phil', 'Hudson', 'phil.hudson@leadervillecollege.lab', '(01) 1145 9669', 'Leaderville College', 'phil.hudson', 'Password1', 0),
(60, 'Robert', 'Hart', 'robert.hart@monolithresearch.lab', '(03) 3381 1223', 'Monolith Research Centre', 'robert.hart', 'Password1', 0),
(61, 'Alan', 'Piper', 'alan.piper@sunshinefinance.lab', '(05) 1890 9630', 'Sunshine Finance', 'alan.piper', 'Password1', 0),
(62, 'Una', 'Ellison', 'una.ellison@insurancedirect.lab', '(03) 9257 0619', 'Insurance Cover Direct', 'una.ellison', 'Password1', 0),
(63, 'Trevor', 'Miller', 'trevor.miller@jonesmortgage.lab', '(06) 0070 6464', 'Jones Mortgage Brokers', 'trevor.miller', 'Password1', 0),
(64, 'Nicholas', 'Mills', 'nicholas.mills@interbank.lab', '(08) 3853 7052', 'Interbank Group', 'nicholas.mills', 'Password1', 0),
(65, 'Rebecca', 'Vance', 'rebecca.vance@hannonspecial.lab', '(08) 4967 6830', 'Hannons Special Cover', 'rebecca.vance', 'Password1', 0),
(66, 'Isaac', 'Berry', 'isaac.berry@fourflowersvilla.lab', '(09) 7243 2404', 'Four Flowers Villa Units', 'isaac.berry', 'Password1', 0),
(67, 'Anthony', 'Grant', 'anthony.grant@nationalresort.lab', '(03) 3405 3476', 'National Resort Network', 'anthony.grant', 'Password1', 0);

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
  `attendeeID` int(12) NOT NULL,
  `venueID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `capacity` int(6) NOT NULL,
  `disabilityAccess` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venueID`, `title`, `location`, `capacity`, `disabilityAccess`) VALUES
(1, 'Grand Hall', 'Level 1 Promenade', 150, 1),
(2, 'Lecture Theatre', 'Level 1 Access B', 30, 1),
(3, 'Meeting Room A', 'Ground Floor', 15, 0),
(4, 'Meeting Room B2', 'Level 2 Atrium', 10, 0);

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
  ADD KEY `topicID` (`topicID`,`speakerID`,`attendeeID`,`venueID`),
  ADD KEY `speakerID` (`speakerID`),
  ADD KEY `attendeeID` (`attendeeID`),
  ADD KEY `venueID` (`venueID`);

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
  MODIFY `attendeeID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `presentations`
--
ALTER TABLE `presentations`
  MODIFY `presentationID` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `speakerID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `presentations_ibfk_2` FOREIGN KEY (`attendeeID`) REFERENCES `attendees` (`attendeeID`),
  ADD CONSTRAINT `presentations_ibfk_3` FOREIGN KEY (`topicID`) REFERENCES `topics` (`topicID`),
  ADD CONSTRAINT `presentations_ibfk_4` FOREIGN KEY (`venueID`) REFERENCES `venues` (`venueID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
