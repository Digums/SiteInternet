-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Mai 2017 à 09:52
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `at'hom`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE `action` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `action` text NOT NULL,
  `valeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `action`
--

INSERT INTO `action` (`id`, `date`, `action`, `valeur`) VALUES
(1, '2017-05-12 09:50:00', 'surveillance', 1);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_capteur` text NOT NULL,
  `type_capteur` text NOT NULL,
  `etat` text NOT NULL,
  `donnée` text NOT NULL,
  `id_piece` int(11) NOT NULL,
  `id_action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`id`, `nom_capteur`, `type_capteur`, `etat`, `donnée`, `id_piece`, `id_action`) VALUES
(1, 'OP1', 'ouverture', 'on', 'close', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `donnee`
--

CREATE TABLE `donnee` (
  `id` int(10) UNSIGNED NOT NULL,
  `donné` text NOT NULL,
  `id_capteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id` int(10) UNSIGNED NOT NULL,
  `num` int(5) NOT NULL,
  `rue` tinytext NOT NULL,
  `cp` int(5) NOT NULL,
  `complemet` tinytext NOT NULL,
  `ville` tinytext NOT NULL,
  `pays` tinytext NOT NULL,
  `nbrpiece` tinyint(4) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `maison`
--

INSERT INTO `maison` (`id`, `num`, `rue`, `cp`, `complemet`, `ville`, `pays`, `nbrpiece`, `id_membre`) VALUES
(1, 143, 'rue de la campagne', 99099, '', 'Aufond', 'France', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` tinytext NOT NULL,
  `prenom` tinytext NOT NULL,
  `date` date NOT NULL,
  `email` tinytext NOT NULL,
  `mdp` tinytext NOT NULL,
  `statut` tinyint(4) NOT NULL,
  `adresse` tinytext NOT NULL,
  `nbrapp` tinyint(4) NOT NULL,
  `nomloca` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `date`, `email`, `mdp`, `statut`, `adresse`, `nbrapp`, `nomloca`) VALUES
(1, 'CHAPON', 'Pierre', '1967-03-09', 'chaponpierre@hotmail.fr', 'chapon', 1, '143, rue de la campagne, 99099, Aufond, France', 1, ''),
(2, 'EFROND', 'Jean', '1975-04-23', 'jeanefrond@gmail.com', 'efrond', 2, '23, rue de la Peine, 94200, Ivry sur seine, France', 3, 'Marc, David, Julie');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_piece` text NOT NULL,
  `mesure` int(11) NOT NULL,
  `nbr_capteur` int(11) NOT NULL,
  `id_maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`id`, `nom_piece`, `mesure`, `nbr_capteur`, `id_maison`) VALUES
(1, 'salon', 20, 5, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donnee`
--
ALTER TABLE `donnee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `donnee`
--
ALTER TABLE `donnee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
