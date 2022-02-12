-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 fév. 2022 à 11:29
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensat`
--

-- --------------------------------------------------------

--
-- Structure de la table `te`
--

CREATE TABLE `te` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cod` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `te`
--

INSERT INTO `te` (`id`, `nom`, `prenom`, `email`, `cod`, `pass`) VALUES
(1, 'dkhissi', 'zakaria', 'zakaria@gmail.com', '1600456', 'zakaria12345'),
(3, 'arif', 'nada', 'nada@gmail.com', '120056', 'nada1234'),
(4, 'arif', 'nisrin', 'arif@gmail.com', '120056', 'nisrin1234'),
(5, 'dkhissi', 'driss', 'driss@gmail.com', '1400476', 'driss1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `te`
--
ALTER TABLE `te`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `te`
--
ALTER TABLE `te`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
