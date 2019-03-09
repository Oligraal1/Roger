-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le :  sam. 09 mars 2019 à 13:32
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
-- Structure de la table `contactform`
--

CREATE TABLE `contactform` (
  `id` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `question`, `creationDate`) VALUES
(1, 'olivia coffineau', 'oli@yahoo.fr', 'Ceci est un test.', '2019-01-21 17:11:28'),
(3, 'Olive', 'oli@oli.fr', 'Voici un nouveau test', '2019-01-21 17:11:28'),
(4, 'Juliette', 'bohm@fr.de', 'Je sais plus quoi écrire', '2019-01-21 17:11:28'),
(6, 'oligraal', 'oligraal@sfr.fr', 'rerererereTest', '2019-01-21 17:11:28'),
(7, 'olivia coffineau', 'oli@yahoo.fr', 'a effacer', '2019-01-21 17:11:28'),
(8, 'olivia coffineau', 'oli@yahoo.fr', 'a effacer aussi', '2019-01-21 17:11:28'),
(9, 'olivia coffineau', 'oli@yahoo.fr', 'delete', '2019-01-21 17:11:28'),
(18, 'olivia coffineau', 'oli@yahoo.fr', 'eh c\'est encore moi', '2019-01-21 17:11:28'),
(21, 'olivia coffineau', 'oli@yahoo.fr', 'fcsdcdez', '2019-01-21 17:11:28'),
(23, 'olivia coffineau', 'oli@yahoo.fr', 'test 1 2', '2019-01-21 17:11:28'),
(24, 'olivia coffineau', 'oli@yahoo.fr', 'blablabla', '2019-01-21 17:11:28'),
(27, 'olivia coffineau', 'oli@yahoo.fr', 'et bla et bli et blou', '2019-01-21 17:11:28'),
(29, 'olivia coffineau', 'oli@yahoo.fr', 'testouille', '2019-01-21 17:11:28'),
(30, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-01-21 17:11:28'),
(31, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-01-21 17:11:28'),
(32, 'olivia coffineau', 'oli@yahoo.fr', 'vfffffffb', '2019-01-21 17:11:28'),
(33, 'olivia coffineau', 'oli@yahoo.fr', 'drgzsg', '2019-01-21 17:11:28'),
(34, 'olivia coffineau', 'oli@yahoo.fr', 'dezafgtttttt', '2019-01-21 17:11:28'),
(35, 'olivia coffineau', 'oli@yahoo.fr', 'mmmdddpppcckkkss', '2019-01-21 17:11:28'),
(37, 'olivia coffineau', 'oli@yahoo.fr', 'test today', '2019-01-21 17:11:28'),
(38, 'olivia coffineau', 'oli@yahoo.fr', 'test today', '2019-01-21 17:11:28'),
(47, 'olivia coffineau', 'oli@yahoo.fr', 'testtttt', '2019-01-21 17:11:28'),
(48, 'olivia coffineau', 'oli@yahoo.fr', 'testtttt', '2019-01-21 17:11:28'),
(50, 'olivia coffineau', 'oli@yahoo.fr', 'mljkgswet drtdurc', '2019-01-21 17:11:28'),
(51, 'olivia coffineau', 'oli@yahoo.fr', 'ce coup ci ca marche ...', '2019-01-21 17:11:28'),
(52, 'olivia coffineau', 'oli@yahoo.fr', 'On y croit', '2019-01-21 17:11:28'),
(53, 'olivia coffineau', 'oli@yahoo.fr', 'allez allez', '2019-01-21 17:11:28'),
(54, 'olivia coffineau', 'oli@yahoo.fr', 'sans echo', '2019-01-21 17:11:28'),
(55, 'olivia coffineau', 'oli@yahoo.fr', 'sans echo', '2019-01-21 17:11:28'),
(56, 'olivia coffineau', 'oli@yahoo.fr', 'j\'ai tout casse', '2019-01-21 17:11:28'),
(57, 'olivia coffineau', 'oli@yahoo.fr', 'pffff', '2019-01-21 17:11:28'),
(58, 'olivia coffineau', 'oli@yahoo.fr', 'avec header', '2019-01-21 17:11:28'),
(60, 'olivia coffineau', 'oli@yahoo.fr', 'presque', '2019-01-21 17:11:28'),
(61, 'olivia coffineau', 'oli@yahoo.fr', 'j\'y crois', '2019-01-21 17:11:28'),
(62, 'olivia coffineau', 'oli@yahoo.fr', 'OK', '2019-01-21 17:11:28'),
(63, 'olivia coffineau', 'oli@yahoo.fr', 'et encore', '2019-01-21 17:11:28'),
(65, 'olivia coffineau', 'oli@yahoo.fr', 'pfffff', '2019-01-21 17:11:28'),
(66, 'olivia coffineau', 'oli@yahoo.fr', 'htgrzb j-s', '2019-01-21 17:11:28'),
(73, 'olivz', 'oli@yahoo.fr', 'pfkoperj', '2019-01-21 17:11:28'),
(74, 'Olivia', 'oli@oli.fr', 'encore un test...', '2019-01-21 17:11:28'),
(91, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-01-21 19:00:43'),
(93, 'Olivia', 'ocoffineau@yahoo.fr', 'Ceci est un test mail', '2019-01-21 20:09:43'),
(94, 'Olivia', 'ocoffineau@yahoo.fr', 'Ceci est un test mail', '2019-01-21 20:09:59'),
(95, 'Olivia', 'ocoffineau@yahoo.fr', 'Autre test mail.', '2019-01-21 20:13:31'),
(96, 'olivia coffineau', 'oli_owner@yahoo.fr', 'test mail again', '2019-01-21 20:20:51'),
(97, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-01-21 20:26:32'),
(98, 'Olivia', 'oli_owner@yahoo.fr', 'Coucou \nCeci est un test', '2019-01-21 20:32:33'),
(99, 'olivia coffineau', 'oli_owner@yahoo.fr', 'Ceci est un test', '2019-01-21 20:41:31'),
(100, 'olivia coffineau', 'oli@yahoo.fr', 'ceci est un test', '2019-01-21 22:37:20'),
(101, 'olivia coffineau', 'oli_owner@yahoo.fr', 'Et encore un autre test', '2019-01-21 22:39:47'),
(102, 'olivia coffineau', 'oli@yahoo.fr', 'khujgg  cxfdc cff fs fgujkkyf', '2019-01-21 22:47:58'),
(103, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-01-21 22:57:01'),
(104, 'olivia coffineau', 'oli@yahoo.fr', 'pffff', '2019-01-21 22:59:25'),
(105, 'olivia coffineau', 'oli@yahoo.fr', 'jyftd   fytfrydses esftygo f gydj ', '2019-01-21 23:00:18'),
(106, 'olivia coffineau', 'oli@yahoo.fr', 'vdfbdbgbfg ', '2019-01-21 23:18:21'),
(107, 'olivia coffineau', 'oli@yahoo.fr', 'ytrg  rzbtilpxgoifg(fyblit', '2019-01-21 23:43:04'),
(109, 'olivia coffineau', 'oli@yahoo.fr', 'Nouveau test', '2019-01-22 13:21:32'),
(111, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-01-22 13:40:30'),
(112, 'olivia coffineau', 'oli@yahoo.fr', 'testouille', '2019-01-22 13:44:11'),
(113, 'olivia coffineau', 'oli@yahoo.fr', 'test avec fichiers séparés', '2019-01-22 13:57:31'),
(114, 'olivia coffineau', 'oli@yahoo.fr', '2eme test fichiers séparés', '2019-01-22 14:00:39'),
(115, 'olivia coffineau', 'oli@yahoo.fr', '3eme test fichiers séparés', '2019-01-22 14:04:18'),
(116, 'olivia coffineau', 'oli@yahoo.fr', '4eme test fichiers séparés', '2019-01-22 14:06:51'),
(117, 'olivia coffineau', 'oli@yahoo.fr', '5eme test fichiers séparés', '2019-01-22 14:10:47'),
(118, 'olivia coffineau', 'oli@yahoo.fr', '6eme test fichiers séparés', '2019-01-22 14:13:07'),
(119, 'olivia coffineau', 'oli@yahoo.fr', 'test var_dump', '2019-01-22 14:24:36'),
(120, 'olivia coffineau', 'oli@yahoo.fr', '2eme test var_dump', '2019-01-22 14:28:45'),
(121, 'olivia coffineau', 'oli@yahoo.fr', 'test bizarre', '2019-01-22 14:42:55'),
(122, 'olivia coffineau', 'oli@yahoo.fr', 'test 1 - 2 ', '2019-01-22 14:44:06'),
(123, 'olivia coffineau', 'oli@yahoo.fr', 'test sans js', '2019-01-22 14:56:30'),
(124, 'olivia coffineau', 'oli@yahoo.fr', '2eme test sans js', '2019-01-22 15:00:48'),
(125, 'olivia coffineau', 'oli@yahoo.fr', '3eme test sans js', '2019-01-22 15:05:27'),
(126, 'olivia coffineau', 'oli@yahoo.fr', '4eme test sans js', '2019-01-22 15:06:55'),
(127, 'olivia coffineau', 'oli@yahoo.fr', '6eme test sans js', '2019-01-22 15:13:32'),
(128, 'olivia coffineau', 'oli@yahoo.fr', '7eme test sans js', '2019-01-22 15:15:05'),
(129, 'olivia coffineau', 'oli@yahoo.fr', '8eme test sans js', '2019-01-22 15:30:26'),
(130, 'olivia coffineau', 'oli@yahoo.fr', 'Nouveau test avec redirection mail.php', '2019-01-22 15:33:41'),
(131, 'olivia coffineau', 'oli@yahoo.fr', 'new test et y en a marre', '2019-01-22 15:38:57'),
(132, 'olivia coffineau', 'oli@yahoo.fr', 'again and again and again', '2019-01-22 15:42:01'),
(134, 'olivia coffineau', 'oli@yahoo.fr', 'pfff je sais plus comment faire', '2019-01-22 17:34:19'),
(135, 'olivia coffineau', 'oli@yahoo.fr', 'test du soir bonsoir', '2019-01-22 20:08:41'),
(136, 'olivia coffineau', 'oli@yahoo.fr', 'je vais dans le mur', '2019-01-22 20:10:22'),
(137, 'olivia coffineau', 'oli@yahoo.fr', 'pfffff flemme', '2019-01-22 20:11:50'),
(138, 'olivia coffineau', 'oli@yahoo.fr', 'test bizarre 2', '2019-01-22 20:46:22'),
(139, 'olivia coffineau', 'oli@yahoo.fr', 'uchuiefifjkejfoj fgvrzvr', '2019-01-22 20:50:15'),
(140, 'olivia coffineau', 'oli@yahoo.fr', 'bla bla bla ', '2019-01-22 21:01:27'),
(141, 'olivia coffineau', 'oli@yahoo.fr', 'dgrehj, j(-\'(-\'hvcgn,,', '2019-01-22 21:09:55'),
(142, 'olivia coffineau', 'oli@yahoo.fr', 'again and again ', '2019-01-22 21:12:13'),
(143, 'olivia coffineau', 'oli@yahoo.fr', 'un coup oui un coup non', '2019-01-22 21:13:14'),
(144, 'olivia coffineau', 'oli@yahoo.fr', 'un coup oui un coup non', '2019-01-22 21:13:48'),
(145, 'olivia coffineau', 'oli@yahoo.fr', 'tout est vrai', '2019-01-22 21:15:00'),
(147, 'olivia coffineau', 'oli@yahoo.fr', 'cvbn, jfh jtdgjnkyry', '2019-01-22 21:36:44'),
(148, 'olivia coffineau', 'oli@yahoo.fr', 'texte', '2019-01-25 11:02:25'),
(149, 'olivia coffineau', 'oli_owner@yahoo.fr', 'Hello \r\n\r\nTest today', '2019-02-03 15:06:01'),
(150, 'olivia coffineau', 'oli@yahoo.fr', 'test et retest !', '2019-02-18 22:17:44'),
(151, 'olivia coffineau', 'oli@yahoo.fr', 'ryersyey', '2019-02-19 10:27:36'),
(152, 'olivia coffineau', 'oli@yahoo.fr', 'rydtdfyimlk ijhupiou', '2019-02-19 10:52:06'),
(165, 'olivia coffineau', 'oli@yahoo.fr', 'rydtdfyimlk ijhupiou', '2019-02-19 11:10:00'),
(166, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 13:36:16'),
(167, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 13:38:35'),
(168, 'olivia coffineau', 'oli@yahoo.fr', 'ca me soule', '2019-02-19 13:39:02'),
(169, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 14:29:30'),
(170, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 14:53:57'),
(171, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 14:55:33'),
(172, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 14:55:57'),
(173, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 14:56:16'),
(174, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 15:00:55'),
(175, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 15:01:28'),
(176, 'olivia coffineau', 'oli@yahoo.fr', 'test again and again\r\n', '2019-02-19 17:46:24'),
(177, 'olivia coffineau', 'oli@yahoo.fr', 'test again and again\r\n', '2019-02-19 17:49:46'),
(178, 'Olive', 'oli@yahoo.fr', 'Voila un nouveau message', '2019-02-19 17:51:43'),
(179, 'Olive', 'oli@yahoo.fr', 'Voila un nouveau message', '2019-02-19 18:00:59'),
(180, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-02-19 18:01:17'),
(187, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-03-07 01:45:20'),
(188, 'olivia coffineau', 'oli@yahoo.fr', 'retest', '2019-03-07 01:46:44'),
(189, 'olivia coffineau', 'oli@yahoo.fr', 'test 3', '2019-03-07 01:48:10'),
(190, 'olivia coffineau', 'oli@yahoo.fr', 'test du jour', '2019-03-07 15:37:04'),
(191, 'olivia coffineau', 'oli@yahoo.fr', 'retest du jour', '2019-03-07 15:40:19'),
(192, 'olivia coffineau', 'oli@yahoo.fr', 're test encore', '2019-03-07 15:43:13'),
(193, 'olivia', 'oli@yahoo.fr', 'pffffffffffffffffffffffffff', '2019-03-07 15:49:57'),
(194, 'olivia coffineau', 'oli@yahoo.fr', 'test', '2019-03-07 16:42:49'),
(195, 'olivia coffineau', 'oli@yahoo.fr', 'fffsqqqqdrf', '2019-03-07 17:06:32'),
(196, 'olivia coffineau', 'oli@yahoo.fr', 'que faire ?', '2019-03-07 17:10:52'),
(197, 'olivia coffineau', 'oli@yahoo.fr', 'I may have found', '2019-03-07 17:11:42'),
(198, 'olivia coffineau', 'oli@yahoo.fr', 'I didn\'t', '2019-03-07 17:20:44'),
(199, 'olivia coffineau', 'oli@yahoo.fr', 'another test', '2019-03-07 17:23:19'),
(200, 'olivia coffineau', 'oli@yahoo.fr', 'maybe a clue', '2019-03-07 17:24:39'),
(201, 'olivia coffineau', 'oli@yahoo.fr', 'found it but last try', '2019-03-07 17:26:09'),
(202, 'olivia coffineau', 'oli@yahoo.fr', 'Found it !!! \\o/', '2019-03-07 17:28:11'),
(203, 'olivia coffineau', 'oli@yahoo.fr', 'test du jour bonjour', '2019-03-09 16:43:37'),
(204, 'olivia coffineau', 'oli@yahoo.fr', 'test du jour bonjour', '2019-03-09 16:48:15'),
(205, 'olivia coffineau', 'oli@yahoo.fr', 'test du jour bonjour', '2019-03-09 16:49:47'),
(206, 'olivia coffineau', 'oli@yahoo.fr', 'test du jour bonjour', '2019-03-09 16:51:50'),
(207, 'olivia coffineau', 'oli@yahoo.fr', 'test pour la page remerciement', '2019-03-09 16:52:17'),
(209, 'olivia coffineau', 'oli@yahoo.fr', 'test version iphone', '2019-03-09 19:09:55'),
(215, 'olivia coffineau', 'oli@yahoo.fr', 'j\'ai trop bien bossé', '2019-03-09 20:54:39');

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
  `types` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `name`, `size`, `source`, `href`, `alt`, `types`) VALUES
(1, '1c', 1532, 'img/1c.jpg', 'bigImage.php', 'jeune fille en bleu ecrivant sur un mur', 'couleur'),
(2, '2c', 1944, 'img/2c.jpg', 'bigImage.php', 'vieil homme en Chine', 'couleur'),
(3, '3c', 2995, 'img/3c.jpg', 'bigImage.php', 'vieil homme au Maroc', 'couleur'),
(4, '4c', 1806, 'img/4c.jpg', 'bigImage.php', 'femme voilée marchant dans une ruelle', 'couleur'),
(5, '7c', 1043, 'img/7c.jpg', 'bigImage.php', 'enfants courant dans l\'eau au Sénégal', 'couleur'),
(6, '6c', 2368, 'img/6c.jpg', 'bigImage.php', 'petite fille en Roumanie', 'couleur'),
(7, '5c', 2356, 'img/5c.jpg', 'bigImage.php', 'petite fille en Turquie', 'couleur'),
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
-- Index pour la table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
