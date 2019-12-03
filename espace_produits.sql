-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 08 sep. 2019 à 19:10
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espace_produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `informatique`
--

CREATE TABLE `informatique` (
  `id` int(11) NOT NULL,
  `categorie` text NOT NULL,
  `type` text NOT NULL,
  `nom` text NOT NULL,
  `etat` text NOT NULL,
  `disponible` text NOT NULL,
  `processeur` text NOT NULL,
  `systeme` text NOT NULL,
  `memoire` text NOT NULL,
  `disque` text NOT NULL,
  `carte` text NOT NULL,
  `garantie` text NOT NULL,
  `prix` text NOT NULL,
  `solde` text NOT NULL,
  `image` text NOT NULL,
  `panier` text NOT NULL,
  `commander` text NOT NULL,
  `livraison` text NOT NULL,
  `timbre` text NOT NULL,
  `quantite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `informatique`
--

INSERT INTO `informatique` (`id`, `categorie`, `type`, `nom`, `etat`, `disponible`, `processeur`, `systeme`, `memoire`, `disque`, `carte`, `garantie`, `prix`, `solde`, `image`, `panier`, `commander`, `livraison`, `timbre`, `quantite`) VALUES
(2, 'bureautique', 'Sac', 'bureautique', 'nouveau', 'oui', '', '', '', '', '', '', '30', 'non', 'cartable.jpg', 'added', '', 'gratuit', '', ''),
(3, 'bureautique', 'Sac a dos new edition Gemus 41 cm - gris', 'bureautique', 'nouveau', 'oui', '', '', '', '', '', '', '30 TND', 'non', 'cartable.jpg', 'added', '', 'gratuit', '', ''),
(4, 'bureautique', 'Sac pc', 'computer', 'nouveau', 'oui', '', '', '', '', '', '', '45.000 TND', 'non', 'sacoche pc.jpg', ' ', '', 'gratuit', '', ' '),
(5, 'bureautique', 'Sac a dos new edition Gemus 41 cm - gris', 'bureautique', 'nouveau', 'oui', '', '', '', '', '', '', '30 TND', 'non', 'cartable.jpg', 'added', '', 'gratuit', '', ''),
(6, 'bureautique', 'Sac pc', 'computer', 'nouveau', 'oui', '', '', '', '', '', '', '45.000 TND', 'non', 'sacoche pc.jpg', ' ', '', 'gratuit', '', ' '),
(7, 'bureautique', 'Sac pc', 'computer', 'nouveau', 'oui', '', '', '', '', '', '', '45.000 TND', 'non', 'sacoche pc.jpg', ' ', '', 'gratuit', '', ' '),
(8, 'bureautique', 'Sac pc', 'computer', 'nouveau', 'oui', '', '', '', '', '', '', '45.000 TND', 'non', 'sacoche pc.jpg', ' ', '', 'gratuit', '', ' '),
(10, 'electronics', 'hp', 'computer', 'nouveau', 'oui', ' Apple A7', 'IOS', '4 GO', 'interne', 'SD', '6 mois', '300 ', 'non', 'ordinateur.jpg', '', '', '', '', ''),
(11, 'electronics', 'hp', 'computer', 'nouveau', 'oui', ' Apple A7', 'IOS', '4 GO', 'interne', 'SD', '6 mois', '300 ', 'non', 'ordinateur.jpg', '', '', '', '', ''),
(13, 'bureautique', 'php', 'computer', 'nouveau', 'oui', '7', '8', '4', 'hm', 'k', '6', '300', 'hm', 'logo.png', '', '', 'oui', '', ''),
(40, '', '', '', '', '', '', '', '4 GO', '', '', '', '', '', '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `informatique`
--
ALTER TABLE `informatique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `informatique`
--
ALTER TABLE `informatique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
