-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 sep. 2023 à 01:49
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--
CREATE DATABASE IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `forum`;

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(20) NOT NULL,
  `id_question` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `id_auteur`, `pseudo_auteur`, `id_question`, `contenu`, `date`, `pp`) VALUES
(53, 2, 'maestro', 10, 'nomff', '2023-08-28 18:21:37', 'nomff64ece5b18622c7.20043373.jpg'),
(54, 2, 'maestro', 10, 'nomff', '2023-08-28 18:21:37', 'nomff64ece5b1be4f94.05476653.jpg'),
(61, 2, 'maestro', 9, 'nom', '2023-08-28 18:27:38', 'nom64ece71a9fc6f6.91915127.jpg'),
(62, 2, 'maestro', 9, 'nom', '2023-08-28 18:27:38', 'nom64ece71ac0a462.85108127.jpg'),
(63, 2, 'maestro', 10, 'rien', '2023-08-28 18:29:29', 'rien64ece78940cf78.82399922.jpg'),
(64, 2, 'maestro', 10, 'rien', '2023-08-28 18:29:29', 'rien64ece789588237.74997567.jpg'),
(65, 2, 'maestro', 8, 'nom', '2023-08-28 18:45:10', 'nom64eceb36619272.59257542.jpg'),
(66, 2, 'maestro', 8, 'nom', '2023-08-28 18:45:10', 'nom64eceb367a9110.22234554.jpg'),
(67, 2, 'maestro', 10, 'nom', '2023-08-29 13:30:47', 'nom64edf307ca2875.67098261.jpg'),
(68, 2, 'maestro', 10, 'nom', '2023-08-29 13:31:38', 'nom64edf33a2319c9.46248265.jpg'),
(69, 2, 'maestro', 10, 'nomff', '2023-08-29 13:32:00', 'nomff64edf35098bd94.83931038.jpg'),
(72, 2, 'maestro', 8, 'maestro', '2023-08-29 13:34:13', 'maestro64edf3d5bd05c1.25080921.jpg'),
(73, 2, 'maestro', 9, 'non pas vraiment', '2023-08-29 14:06:11', 'non pas vraiment64edfb536a5538.32752850.jpg'),
(74, 2, 'maestro', 4, 'maestro', '2023-08-30 15:14:16', 'maestro64ef5cc8df7a09.56406485.jpg'),
(75, 2, 'maestro', 2, 'non pas vraiment', '2023-08-30 15:15:20', 'non pas vraiment64ef5d08e51e13.53650079.jpg'),
(76, 1, 'stephane', 18, 'nom', '2023-08-30 19:48:09', 'nom64ef9cf9ab7a14.70588800.jpg'),
(77, 2, 'maestro', 4, 'non pas vraiment', '2023-08-31 15:24:03', 'non pas vraiment64f0b093e4f2b0.83022307.jpg'),
(78, 2, 'maestro', 4, 'non pas vraiment', '2023-08-31 15:24:49', 'non pas vraiment64f0b0c10a27e6.66977485.jpg'),
(79, 2, 'maestro', 4, 'non pas vraiment', '2023-08-31 15:25:10', 'non pas vraiment64f0b0d6695799.06163635.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `demande` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `demande`, `date`) VALUES
(1, 'développeur web', '2023-08-19 09:54:06'),
(2, 'big data', '2023-08-19 09:54:06'),
(12, 'réseau', '2023-08-19 11:28:36'),
(13, 'sécurité informatique', '2023-08-21 11:33:22'),
(15, 'PMP', '2023-08-24 18:22:48'),
(19, 'systeme', '2023-08-30 15:54:44');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `demande` varchar(225) NOT NULL,
  `priorite` varchar(50) NOT NULL,
  `sujet` text NOT NULL,
  `description` text NOT NULL,
  `message` text NOT NULL,
  `piece_jointe` text NOT NULL DEFAULT 'null',
  `statut` varchar(255) NOT NULL DEFAULT 'En cours',
  `assigner` varchar(225) NOT NULL DEFAULT 'Non assigner',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `id_auteur`, `pseudo_auteur`, `demande`, `priorite`, `sujet`, `description`, `message`, `piece_jointe`, `statut`, `assigner`, `date`) VALUES
(3, 2, 'maestro', 'big data', 'Critique', 'erreur 204rrrrrrrrrr', 'rrrrrrrrrr', 'rrrrrrrrrrrr', 'rrrrrrrrrrr', 'close', 'maestro', '2023-08-23 16:38:19'),
(19, 1, 'stephane', 'développeur web', 'Moyenne', 'erreur 204', 'VGGGG', 'GGGGGGGGG', 'null', 'En cours', 'Non assigner', '2023-08-30 21:01:47'),
(23, 5, 'alex', 'développeur web', 'Moyenne', 'erreur 204', 'rien', 'rien', 'null', 'En cours', 'Non assigner', '2023-08-31 12:12:13');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mdp` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'client',
  `domaine` varchar(255) NOT NULL DEFAULT 'Developpeur',
  `pp` varchar(255) NOT NULL DEFAULT 'user.png',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `mdp`, `type`, `domaine`, `pp`, `date`) VALUES
(1, 'stephane', 'noel', 'maestro', '$2y$10$GhOPIHKtQeopPdCQuTJkPe1q/NUbAA.jjFHJQZ2/UjZb8k.l7qP1C', 'agent', 'developpeur', 'user.png', '2023-08-31 15:28:11'),
(2, 'maestro', 'doungue', 'stephane', '$2y$10$KFH38ahq9ZHVtNZ.p2Xgb.b.sbIXGe2kLX05jKjkbB14xts25WeFG', 'admin', 'web design', 'user.png', '2023-08-31 15:28:11'),
(5, 'alex', 'alex', 'stephane', '$2y$10$gwvEukYG3/muKhWqnAy2qeGi7EWadseYlCnYdHFDS8CvCILkXO5XC', 'client', ' developpeur', 'user.png', '2023-08-31 15:28:11'),
(6, 'sandra', 'sand', 'doungue', 'bv', 'admin', ' developpeur', 'user.png', '2023-08-31 16:03:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
