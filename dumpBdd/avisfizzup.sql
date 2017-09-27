-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 sep. 2017 à 12:54
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `avisfizzup`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `Id_Commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` int(5) NOT NULL,
  PRIMARY KEY (`Id_Commentaire`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`Id_Commentaire`, `pseudo`, `mail`, `commentaire`, `date`, `note`) VALUES
(1, 'Tipo', 'penz.th@hotmail.fr', 'opkfpsokfd ok fqpokqpsof kqpo sfk', '2017-09-27 11:36:13', 1),
(15, '123121', '21315', '31513', '2017-09-27 11:41:41', 0),
(16, 'Gok', 'qokdop', 'qoskpdf', '2017-09-27 11:44:58', 0),
(17, 'Thiébaud', 'kqdpsok', 'sdsdfqgdsf', '2017-09-27 14:03:25', 3),
(18, 'ds', 'sfdgsdf', 'qgf', '2017-09-27 14:09:54', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
