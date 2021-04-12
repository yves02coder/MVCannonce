-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 26 mars 2021 à 13:30
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
-- Base de données : `crud_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`admin_id`, `nom_admin`, `email_admin`, `password_admin`) VALUES
(1, 'pierre', 'p@pierre.fr', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categorie_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`categorie_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categorie_id`, `nom_categorie`) VALUES
(1, 'chaussures'),
(2, 'meubles'),
(3, 'Sport'),
(4, 'Maison'),
(5, 'Electro_menager'),
(6, 'vetement');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `commentaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire_nom` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`commentaire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `produit_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) NOT NULL,
  `image_produit` varchar(255) NOT NULL,
  `description_produit` text NOT NULL,
  `prix_produit` float NOT NULL,
  `id_produit_categorie` int(11) NOT NULL,
  PRIMARY KEY (`produit_id`),
  UNIQUE KEY `id_produit` (`id_produit_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`produit_id`, `nom_produit`, `image_produit`, `description_produit`, `prix_produit`, `id_produit_categorie`) VALUES
(1, 'jordan', '../asset/imagenos-offres-1.jpg', 'pipip', 12, 2),
(4, 'khkhkhkhkhk', '../asset/imagenos-offres-1.jpg', 'khkhhkhgkhgk', 1245, 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`id_produit_categorie`) REFERENCES `categories` (`categorie_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
