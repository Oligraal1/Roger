-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le :  Dim 16 déc. 2018 à 16:47
-- Version du serveur :  5.7.23
-- Version de PHP :  7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `roger`
--

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `id` smallint(6) NOT NULL,
  `name` varchar(10) NOT NULL,
  `size` smallint(4) NOT NULL,
  `source` varchar(15) NOT NULL,
  `href` varchar(15) NOT NULL,
  `alt` text NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `name`, `size`, `source`, `href`, `alt`, `type`) VALUES
(1, '1c', 1532, 'img/1c.jpg', 'bigImage.php', 'jeune fille en bleu ecrivant sur un mur', 'couleur'),
(2, '2c', 1944, 'img/2c.jpg', 'bigImage.php', 'vieil homme en Chine', 'couleur'),
(3, '3c', 2995, 'img/3c.jpg', 'bigImage.php', 'vieil homme au Maroc', 'couleur'),
(4, '4c', 1806, 'img/4c.jpg', 'bigImage.php', 'femme voilée marchant dans une ruelle', 'couleur'),
(5, '5c', 2356, 'img/5c.jpg', 'bigImage.php', 'enfants courant dans l\'eau au Sénégal', 'couleur'),
(6, '6c', 2368, 'img/6c.jpg', 'bigImage.php', 'petite fille en Roumanie', 'couleur'),
(7, '7c', 1043, 'img/7c.jpg', 'bigImage.php', 'petite fille en Turquie', 'couleur'),
(8, '1nb', 1949, 'img/1nb.jpg', 'bigImage.php', 'vieil homme', 'nb'),
(9, '2nb', 2628, 'img/2nb.jpg', 'bigImage.php', 'troupeau de vaches', 'nb'),
(10, '3nb', 2448, 'img/3nb.jpg', 'bigImage.php', 'ronde d\'enfants', 'nb'),
(11, '4nb', 1959, 'img/4nb.jpg', 'bigImage.php', 'maison en ruine', 'nb'),
(12, '5nb', 2619, 'img/5nb.jpg', 'bigImage.php', 'rassemblement d\'hommes armés', 'nb'),
(13, '6nb', 1835, 'img/6nb.jpg', 'bigImage.php', 'homme assis et armé', 'nb'),
(14, '7nb', 2666, 'img/7nb.jpg', 'bigImage.php', 'enfants assis sur une jeep', 'nb'),
(15, '8nb', 2846, 'img/8nb.jpg', 'bigImage.php', 'enfants jouant avec un pneu', 'nb'),
(16, '9nb', 2526, 'img/9nb.jpg', 'bigImage.php', 'enfants dans une ruelle', 'nb'),
(17, '10nb', 2567, 'img/10nb.jpg', 'bigImage.php', 'hommes regardant un enfant avec un fusil', 'nb');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
