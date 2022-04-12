-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 avr. 2022 à 17:47
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestiondestache`
--

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(33) NOT NULL,
  `Semestre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `examen`
--

INSERT INTO `examen` (`id`, `Date`, `Semestre`) VALUES
(1, '2021-08-15', 1),
(2, '22_10-2021', 3);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Matiere` varchar(35) NOT NULL,
  `Coeficient` int(11) NOT NULL,
  `Nom_enseignant` varchar(34) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `Nom_Matiere`, `Coeficient`, `Nom_enseignant`) VALUES
(1, 'Maintenance', 3, 'Mr DIop'),
(2, 'Pilo', 6, 'Mbengue');

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

DROP TABLE IF EXISTS `tache`;
CREATE TABLE IF NOT EXISTS `tache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Matiere` varchar(35) NOT NULL,
  `Type_de_tache` varchar(35) NOT NULL,
  `Date` varchar(34) NOT NULL,
  `Heure` varchar(34) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `Nom_Matiere`, `Type_de_tache`, `Date`, `Heure`) VALUES
(1, 'Maintenance', 'Examen', '14-08-2021', '19h:30'),
(2, 'Philo', 'Traveaux Pratique', '12-09-2021', '21h00'),
(3, 'Java', 'cours', '01-10-2021', '17h00'),
(4, 'Java', 'cours', '01-10-2021', '17h00'),
(5, 'Anglais', 'Travaux personnels', '08-08-2021', '08h');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sibylassana', '202c32a5caea07c26a4f3be05efcccde821db02e69c2cc3732c4cc009188194d');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
