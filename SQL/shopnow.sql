-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 24 jan. 2022 à 09:39
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shopnow`
--

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `UserID` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `pwd` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`UserID`, `name`, `email`, `phone`, `pwd`) VALUES
(1212, 'admin', 'admin@shopnow.com', '+2125416389', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441'),
(1313, 'test', 'test@shopnow.com', '+2122334590', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `model` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`model`, `brand`, `description`, `price`, `quantity`) VALUES
('c-111', 'Ducci', 'Bohemian Beach Dress', 1500, 5),
('c-112', 'H&M', 'jacket', 10, 15),
('c-113', 'Roland Mendel', 'Summer Floral Dress', 150, 7),
('c-14', 'Bennett', 'Sweater', 10, 15),
('c-134', 'Yoshi Tannamuri', 'kimono', 1000, 6),
('C-A12122', 'DUCCI', 'red skirt', 100, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
