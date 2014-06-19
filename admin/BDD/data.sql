-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 19 Juin 2014 à 13:27
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `abonnesblog`
--

--
-- Contenu de la table `tblarticles`
--

INSERT INTO `tblarticles` (`id_article`, `auteurdelarticle`, `title`, `text`, `date`) VALUES
(1, 1, 'mon premier article', 'mon premier article modifiÃ©', '2014-06-18 14:37:58'),
(4, 1, 'mon second article', 'ceci est mon second article, il est a peine mieux que le premier. faut dire il est un peu plus long alors forcement il dechire plus.', '2014-06-19 14:44:07'),
(5, 1, 'trrwgsf', 'httwhnthhnws  thhs h thj t ts th tywtyy ', '2014-06-19 14:52:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
