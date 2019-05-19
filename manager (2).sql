-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 10:14 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `username`, `email`, `password`) VALUES
(1, 'Rcern', '', 'abc'),
(2, 'Gregory', '', '123\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `accountemployee`
--

CREATE TABLE `accountemployee` (
  `accountID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `accountemployee`
--

INSERT INTO `accountemployee` (`accountID`, `employeeID`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `ID_assets` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `month` int(11) NOT NULL,
  `Revenue` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`ID_assets`, `name`, `month`, `Revenue`) VALUES
(1, 'abc', 1, 1000),
(2, 'refund', 2, 1200),
(3, 'aaa', 3, 600);

-- --------------------------------------------------------

--
-- Table structure for table `costassets`
--

CREATE TABLE `costassets` (
  `IdP` int(11) NOT NULL,
  `IdA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costassets`
--

INSERT INTO `costassets` (`IdP`, `IdA`) VALUES
(1, 1),
(1, 2),
(1, 0),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `costliabilities`
--

CREATE TABLE `costliabilities` (
  `IdP` int(11) NOT NULL,
  `IdL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costliabilities`
--

INSERT INTO `costliabilities` (`IdP`, `IdL`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `costID` int(11) NOT NULL,
  `expenses` double NOT NULL,
  `furnitures` double NOT NULL,
  `salaries` double NOT NULL,
  `mounth` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `costs_licenses`
--

CREATE TABLE `costs_licenses` (
  `costID` int(5) NOT NULL,
  `licensesID` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `salary` double NOT NULL,
  `timeParticipation` int(11) NOT NULL,
  `accountID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `name`, `type`, `salary`, `timeParticipation`, `accountID`) VALUES
(1, 'Radu Cernaianu', 'BOSS', 30000, 150, 1),
(2, 'Louis Potron', 'Communication', 25000, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `liabilities`
--

CREATE TABLE `liabilities` (
  `ID_liabilities` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `month` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liabilities`
--

INSERT INTO `liabilities` (`ID_liabilities`, `name`, `month`, `price`) VALUES
(1, 'WaWA', 1, 500),
(2, 'Salary', 2, 2100),
(3, 'Salary', 3, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE `licenses` (
  `licensesID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `expiration_date` date NOT NULL,
  `costs` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profitability`
--

CREATE TABLE `profitability` (
  `ID_assets` int(11) NOT NULL,
  `ID_liabilities` int(11) NOT NULL,
  `ProjectId` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profitability`
--

INSERT INTO `profitability` (`ID_assets`, `ID_liabilities`, `ProjectId`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hours_allocated` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `revenus` double NOT NULL,
  `costs` double NOT NULL,
  `priority` int(11) NOT NULL,
  `percentageDone` int(100) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `name`, `hours_allocated`, `deadline`, `revenus`, `costs`, `priority`, `percentageDone`, `Description`) VALUES
(3, '', 0, '0000-00-00', 0, 0, 0, 0, ' '),
(1, 'Transverse', 100, '2019-05-31', 0, 0, 2, 10, 'oikgbkidgvbkneqskfn'),
(2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, '2019-05-15', 0, 0, 0, 0, '0\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `project_team`
--

CREATE TABLE `project_team` (
  `projectID` int(5) NOT NULL,
  `teamID` int(5) NOT NULL,
  `hours` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_team`
--

INSERT INTO `project_team` (`projectID`, `teamID`, `hours`) VALUES
(1, 1, 39),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` int(11) NOT NULL,
  `Tname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamID`, `Tname`) VALUES
(1, 'Team 1'),
(2, 'Team 2');

-- --------------------------------------------------------

--
-- Table structure for table `team_employee`
--

CREATE TABLE `team_employee` (
  `employeeID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `leader` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_employee`
--

INSERT INTO `team_employee` (`employeeID`, `teamID`, `leader`) VALUES
(1, 1, 1),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `token` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`token`) VALUES
(12345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`ID_assets`);

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`costID`);

--
-- Indexes for table `costs_licenses`
--
ALTER TABLE `costs_licenses`
  ADD PRIMARY KEY (`costID`,`licensesID`),
  ADD KEY `licensesID` (`licensesID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `fk_account_id` (`accountID`);

--
-- Indexes for table `liabilities`
--
ALTER TABLE `liabilities`
  ADD PRIMARY KEY (`ID_liabilities`);

--
-- Indexes for table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`licensesID`);

--
-- Indexes for table `profitability`
--
ALTER TABLE `profitability`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `project_team`
--
ALTER TABLE `project_team`
  ADD PRIMARY KEY (`projectID`,`teamID`),
  ADD KEY `teamID` (`teamID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`);

--
-- Indexes for table `team_employee`
--
ALTER TABLE `team_employee`
  ADD PRIMARY KEY (`teamID`,`employeeID`),
  ADD KEY `fk_employee_id` (`employeeID`),
  ADD KEY `fk_team_ID` (`teamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
