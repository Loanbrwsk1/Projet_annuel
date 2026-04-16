-- phpMyAdmin SQL Dump
-- version 5.2.3-1.fc43
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 16 avr. 2026 à 14:10
-- Version du serveur : 10.11.16-MariaDB
-- Version de PHP : 8.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `NeonQuests`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id_answer` int(255) NOT NULL,
  `theme` int(50) NOT NULL,
  `question` int(50) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `gain` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id_answer`, `theme`, `question`, `answer`, `gain`) VALUES
(1, 1, 1, 'ans2', 2),
(2, 1, 2, 'ans1', 3),
(3, 1, 3, '<a href=\"contact.html\">Contact</a>', 3),
(4, 1, 4, 'ans1', 2),
(5, 1, 5, 'solid 2px black;', 2),
(6, 2, 1, 'ans4', 2),
(7, 2, 2, 'Range(\"B2\").Value = 42', 3),
(8, 2, 3, 'ans2', 2),
(9, 2, 4, '2', 3),
(10, 2, 5, 'Else', 2),
(11, 3, 1, 'ans3', 2),
(12, 3, 2, 'ans1', 2),
(13, 3, 3, 'ans1', 2),
(14, 3, 4, 'double@lf@;', 3),
(15, 3, 5, '%@d@reste', 2),
(16, 4, 1, 'ans4', 2),
(17, 4, 2, 'ans1', 2),
(18, 4, 3, 'ans2', 2),
(19, 4, 4, 'ans3', 2),
(20, 4, 5, 'A@B@Temp', 3),
(21, 5, 1, 'ans2', 2),
(22, 5, 2, 'ans1', 2),
(23, 5, 3, 'ans3', 3),
(24, 5, 4, 'ans2', 2),
(25, 5, 5, 'ans4', 3),
(26, 6, 1, '0b 0101 0000', 2),
(27, 6, 2, '0b 0001 1000', 2),
(28, 6, 3, '0b 0001 0010', 3),
(29, 6, 4, 'ans3', 2),
(30, 6, 5, 'ans2', 2),
(31, 7, 1, 'ans1', 2),
(32, 7, 2, 'ans3', 3),
(33, 7, 3, 'ans3', 3),
(34, 7, 4, 'ans4', 3),
(35, 7, 5, 'ans1', 2),
(36, 8, 1, 'ans2', 2),
(37, 8, 2, 'ans4', 2),
(38, 8, 3, 'ans1', 2),
(39, 8, 4, '3', 2),
(40, 8, 5, '===', 2),
(41, 9, 1, 'SELECT nom, prenom FROM Etudiants;', 2),
(42, 9, 2, 'SELECT * FROM Etudiants WHERE ville = \"Paris\";', 3),
(43, 9, 3, 'SELECT COUNT(*) FROM Etudiants;', 3),
(44, 9, 4, 'JOIN@ON@;', 3),
(45, 9, 5, 'SELECT@AVG@;', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `progress` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_progress`
--

CREATE TABLE `user_progress` (
  `id_user_progress` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `T1` int(11) NOT NULL,
  `T2` int(11) NOT NULL,
  `T3` int(11) NOT NULL,
  `T4` int(11) NOT NULL,
  `T5` int(11) NOT NULL,
  `T6` int(11) NOT NULL,
  `T7` int(11) NOT NULL,
  `T8` int(11) NOT NULL,
  `T9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `user_progress`
--
ALTER TABLE `user_progress`
  ADD PRIMARY KEY (`id_user_progress`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_progress`
--
ALTER TABLE `user_progress`
  MODIFY `id_user_progress` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
