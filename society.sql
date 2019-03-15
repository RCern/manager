-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 mars 2019 à 19:47
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `society`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `accountID` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`accountID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`accountID`, `username`, `password`) VALUES
(1, 'Albert', '$2a$10$kXbn6c6sh/n5g6nPKbgEKO2CDtpQTmR1yEO/A.RFeI3Nehrt63vY2'),
(2, 'Gregory', '$2a$10$5m6sJuNzyUzx8wP/4Ri2nO4OGa0s49kHq/DVoRu/WDMXaOix8MST6'),
(3, 'Charles', '$2a$10$c0hm8qiKIlNMoNyLiGbZz.C7NIRbieUV/w2dXlUWgS2t.1RBXFyKO');

-- --------------------------------------------------------

--
-- Structure de la table `costs`
--

DROP TABLE IF EXISTS `costs`;
CREATE TABLE IF NOT EXISTS `costs` (
  `costID` int(11) NOT NULL,
  `expenses` double NOT NULL,
  `furnitures` double NOT NULL,
  `salaries` double NOT NULL,
  `mounth` date NOT NULL,
  PRIMARY KEY (`costID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `costs_licenses`
--

DROP TABLE IF EXISTS `costs_licenses`;
CREATE TABLE IF NOT EXISTS `costs_licenses` (
  `costID` int(5) NOT NULL,
  `licensesID` int(5) NOT NULL,
  PRIMARY KEY (`costID`,`licensesID`),
  KEY `licensesID` (`licensesID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employeeID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `salary` double NOT NULL,
  `timeParticipation` int(11) NOT NULL,
  `accountID` int(11) NOT NULL,
  PRIMARY KEY (`employeeID`),
  KEY `fk_account_id` (`accountID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`employeeID`, `name`, `type`, `salary`, `timeParticipation`, `accountID`) VALUES
(1, 'Albert  Hiskronow', 'CEO', 30000, 150, 1),
(2, 'Gregory', 'RH', 20000, 120, 2);

-- --------------------------------------------------------

--
-- Structure de la table `licenses`
--

DROP TABLE IF EXISTS `licenses`;
CREATE TABLE IF NOT EXISTS `licenses` (
  `licensesID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `expiration_date` date NOT NULL,
  `costs` double NOT NULL,
  PRIMARY KEY (`licensesID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profitability`
--

DROP TABLE IF EXISTS `profitability`;
CREATE TABLE IF NOT EXISTS `profitability` (
  `assets` double NOT NULL,
  `liabilities` double NOT NULL,
  `mounth` date NOT NULL,
  `id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profitability`
--

INSERT INTO `profitability` (`assets`, `liabilities`, `mounth`, `id`) VALUES
(500000, 450000, '2018-11-01', 1);

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `projectID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hours_allocated` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `revenus` double NOT NULL,
  `costs` double NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`projectID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`projectID`, `name`, `hours_allocated`, `deadline`, `revenus`, `costs`, `priority`) VALUES
(1, 'firstproject', 40, '2019-03-15', 1000000, 500000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `project_team`
--

DROP TABLE IF EXISTS `project_team`;
CREATE TABLE IF NOT EXISTS `project_team` (
  `projectID` int(5) NOT NULL,
  `teamID` int(5) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  PRIMARY KEY (`projectID`,`teamID`),
  KEY `teamID` (`teamID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `project_team`
--

INSERT INTO `project_team` (`projectID`, `teamID`, `hours`) VALUES
(1, 1, 39);

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `teamID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`teamID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`teamID`, `name`) VALUES
(1, 'team1');

-- --------------------------------------------------------

--
-- Structure de la table `team_employee`
--

DROP TABLE IF EXISTS `team_employee`;
CREATE TABLE IF NOT EXISTS `team_employee` (
  `employeeID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  PRIMARY KEY (`teamID`,`employeeID`),
  KEY `fk_employee_id` (`employeeID`),
  KEY `fk_team_ID` (`teamID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `team_employee`
--

INSERT INTO `team_employee` (`employeeID`, `teamID`) VALUES
(1, 1),
(2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
