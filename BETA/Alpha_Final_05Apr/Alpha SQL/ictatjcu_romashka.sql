-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2019 at 10:36 PM
-- Server version: 5.6.40-84.0-log
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictatjcu_romashka`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `stuID` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`stuID`, `username`, `password`) VALUES
('stu001', 'ana001', 'pass_ana001'),
('stu002', 'preeti002', 'pass_preeti002'),
('Rom001', 'user1', 'pass1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Pnum` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `zip` varchar(6) NOT NULL,
  `street` varchar(80) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Fname`, `Sname`, `Pnum`, `email`, `zip`, `street`, `state`) VALUES
(1, 'Ana', 'V', '0426687741', 'ana@gmail.com', '4066', '9 harbour st', 'brisbane'),
(2, 'Preeti', 'C', '0426687751', 'preeti@gmail.com', '5088', '11 street st', 'brisbane'),
(3, 'bnb', ' nbn', '0403528740', 'pppp@gmail.com', '4122', '53 ansdell st,, mount gravatt, QLD', 'australia'),
(4, 'Anastasia', 'Verchak', '123345567', 'anastasia_verchak@icloud.com', '4051', 'fdsdf', 'qld'),
(5, '123', '432', '323', '2334@234', '111', '444', '222'),
(6, 'w', 'w', 'e', 'e@g', '235', 'asdf', 'qwe'),
(7, 'asbc', 'jksdhf', '1234234', 'dfg@jsxgh.com', '234', 'sdf', 'fggch'),
(8, 'test', 'test', '45465', 'test@test.com', '4032', 'dfafds', 'qld');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StfID` varchar(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubID` varchar(20) NOT NULL,
  `SubName` varchar(35) NOT NULL,
  `StfID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`stuID`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Pnum` (`Pnum`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StfID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
