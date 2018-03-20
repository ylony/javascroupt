-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 mars 2018 à 12:54
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `heroesjs`
--

-- --------------------------------------------------------

--
-- Structure de la table `heroes`
--

DROP TABLE IF EXISTS `heroes`;
CREATE TABLE IF NOT EXISTS `heroes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `pv` int(11) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `heroes`
--

INSERT INTO `heroes` (`id`, `nom`, `pv`, `description`) VALUES
(1, 'OcÃ©ane', 150, 'La princesse !'),
(2, 'Dimitri', 150, 'Le prince charmant ducoup :)'),
(14, 'Flavien el justiciador', 140, 'Justicier solitaire toujours prÃ©sent lorsqu&#39;on a besoin de lui enfin sauf quand on parle de taxi ...'),
(11, 'Dorian', 140, 'Le fumeur d&#39;herbe !'),
(12, 'Yanni Tweetos', 140, 'Tweet plus vite que son ombre'),
(13, 'Trandbert le valeureux', 140, 'Seducteur profesionnel un seul regard et sa cible est entiÃ¨rement charmÃ© (Si de sexe masculin seulement)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
