-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 13 mai 2024 à 10:11
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tai`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fournisseur` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `Date_commande` varchar(100) NOT NULL,
  `Etat_livraison` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fournisseur` (`id_fournisseur`),
  KEY `id_product` (`id_product`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_fournisseur`, `id_product`, `id_user`, `reference`, `Date_commande`, `Etat_livraison`) VALUES
(1, 2, 1, 1, 'OP10A46', '13/05/24', 'En cours'),
(2, 5, 2, 1, 'VICSD48A25', '13/05/24', 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `conformite`
--

DROP TABLE IF EXISTS `conformite`;
CREATE TABLE IF NOT EXISTS `conformite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `eval_long_lame` varchar(100) NOT NULL,
  `eval_mat_lame` varchar(100) NOT NULL,
  `eval_type_lame` varchar(100) NOT NULL,
  `eval_manche` varchar(100) NOT NULL,
  `eval_poids` varchar(100) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_product` (`id_product`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `name`, `contact`, `Adresse`) VALUES
(1, 'Laguiole', 'contact@laguiole.com', '23 allee Amicale 12210 Laguiole '),
(2, 'Opinel', 'contact@opinel.com', '508 Bd Henry Bordeaux, 73000 Chambery'),
(3, 'Fissler', 'contact@fissler.com', 'Harald-Fissler-Strape 10, 55768 Hoppstpdten-Weiersbach, Allemagne'),
(4, 'Couteaux Kai', 'contact@kai-europe.com', 'Kottendorfer Strpe 5\r\n42697 Solingen\r\nAllemagne'),
(5, 'Victorinox', 'contact@victorinox.com', 'Rte de Bale 63, 2800 Delemont, Suisse');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fournisseur` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `Longueur_lame` int(11) NOT NULL,
  `Materiau_lame` varchar(100) NOT NULL,
  `Type_lame` varchar(100) NOT NULL,
  `Manche` varchar(100) NOT NULL,
  `Poids` int(11) NOT NULL,
  `Origine` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `fournisseur`, `prix`, `Longueur_lame`, `Materiau_lame`, `Type_lame`, `Manche`, `Poids`, `Origine`) VALUES
(1, 'N°10 Opinel Tradition', 'Opinel', 15, 10, 'Acier inoxydable ', 'Lame Yatagan', 'Bois hetre', 15, 'Savoie'),
(2, 'Classic SD', 'Victorinox', 25, 5, 'Aluminium', 'Couteau-suisse', 'Plastique ABS', 25, 'Suisse'),
(3, 'Couteau Santoku PROFI', 'Fissler', 30, 13, 'Acier inoxydable', 'Alvéolé', 'Plastique ABS', 160, 'Allemande');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='Example of user table for login info';

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `login`, `password`, `statut`) VALUES
(1, 'Admin', 'admin.Gesticom', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Controleur', 'ctrl.Gesticom', '519b2f2d0d0c048c6a5d085f79d6012c', 2),
(3, 'Commercial', 'commerce.Gesticom', '172924aadec293666b805437b84c18d7', 3),
(4, 'Commercial2', 'commercial2.Gesticom', 'f61f2e52cef0031f01f332033298f9e9', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
