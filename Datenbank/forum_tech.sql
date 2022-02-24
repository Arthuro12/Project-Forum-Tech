-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 24 fév. 2022 à 02:28
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum_tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `publication_date` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `publication_id` int(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `publication_description` text NOT NULL,
  `publication_date` date NOT NULL,
  `deletion_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`publication_id`, `title`, `publication_description`, `publication_date`, `deletion_date`) VALUES
(1, 'Alles was ihr über Bildformate wissen sollt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-02-17', '2022-02-27'),
(2, 'Referat erstellen über das internet', 'Rhoncus dolor purus non enim praesent elementum facilisis leo vel. Scelerisque eu ultrices vitae auctor eu augue ut lectus. In mollis nunc sed id semper risus. Donec ultrices tincidunt arcu non sodales neque sodales. Netus et malesuada fames ac turpis egestas. Vitae nunc sed velit dignissim sodales ut eu sem integer. Imperdiet sed euismod nisi porta lorem. Tincidunt dui ut ornare lectus sit amet est. Posuere ac ut consequat semper viverra nam libero justo. Vitae turpis massa sed elementum tempus egestas sed. Ante in nibh mauris cursus. Rhoncus dolor purus non enim praesent elementum facilisis leo vel. Scelerisque eu ultrices vitae auctor eu augue ut lectus. In mollis nunc sed id semper risus. Donec ultrices tincidunt arcu non sodales neque sodales. Netus et malesuada fames ac turpis egestas. Vitae nunc sed velit dignissim sodales ut eu sem integer. Imperdiet sed euismod nisi porta lorem. Tincidunt dui ut ornare lectus sit amet est. Posuere ac ut consequat semper viverra nam libero justo. Vitae turpis massa sed elementum tempus egestas sed. Ante in nibh mauris cursus.', '2022-02-18', '2022-02-28'),
(3, 'Tipps für Iphone 11', 'Sed aliquet ipsum at nibh scelerisque, et bibendum metus tempus. Duis ac nulla purus. Aliquam ullamcorper tempus augue in consequat. Ut ut augue nulla. Donec volutpat augue lectus, non pulvinar eros interdum at. Nunc in metus et mauris porta eleifend. Sed consequat ullamcorper tortor, vel volutpat felis efficitur et. Ut tincidunt eros vitae ipsum placerat imperdiet. Suspendisse viverra vehicula dapibus. Curabitur congue turpis vitae ultrices pretium. Donec ac pretium mi, vel gravida est. Vivamus in est eget velit facilisis iaculis ut vehicula tellus. Nullam nunc purus, faucibus quis lacus ut, consequat porta diam. Maecenas quis ex rhoncus metus rutrum vehicula. Nullam vitae facilisis nisl, vitae posuere lectus. Sed sit amet tortor sit amet ipsum condimentum tempus.\r\nSed aliquet ipsum at nibh scelerisque, et bibendum metus tempus. Duis ac nulla purus. Aliquam ullamcorper tempus augue in consequat. Ut ut augue nulla. Donec volutpat augue lectus, non pulvinar eros interdum at. Nunc in metus et mauris porta eleifend. Sed consequat ullamcorper tortor, vel volutpat felis efficitur et. Ut tincidunt eros vitae ipsum placerat imperdiet. Suspendisse viverra vehicula dapibus. Curabitur congue turpis vitae ultrices pretium. Donec ac pretium mi, vel gravida est. Vivamus in est eget velit facilisis iaculis ut vehicula tellus. Nullam nunc purus, faucibus quis lacus ut, consequat porta diam. Maecenas quis ex rhoncus metus rutrum vehicula. Nullam vitae facilisis nisl, vitae posuere lectus. Sed sit amet tortor sit amet ipsum condimentum tempus.', '2022-02-19', '2022-02-19');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `e_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `user_password`, `e_mail`) VALUES
(1, 'Müller', 'Flora', '$2y$10$UNgzflfVmd7yHMZguuSnT.GxVM08WF3y0VgSN6PsFVcN.rXRh6dqK', 'floramuller@gmail.de'),
(2, 'Fotso', 'Franck', '$2y$10$Em0X.1zdII5Tv9Prusg3s.4sZaVklyvRbPtpebnqYZDVplqzt/IO2', 'fotsof@yahoo.de'),
(3, 'Musternachname', 'marco', '$2y$10$Z7VuL.4NRqC/COJ5vx5y/.r9CkOYdihE5hHyp7N0uaTKqbtLbTyv6', 'marcom@gmail.com'),
(4, 'eee', 'eeee', '$2y$10$Mh11VdDggAt8wZuOnIsVL.8HZS4CYCgiPkkTgjPkAM3dcuBj4Dzj.', 'ee@yahoo.com'),
(5, 'Michel', 'jean', '$2y$10$ftt.sju1w47Y1OXxey3ijuXekLuMgIS/hHo9n8ClsfFggFeSgO8Lu', 'michel@yahoo.com'),
(6, 'Wieber', 'flore', '$2y$10$klRKynsIwWy4CiMLgteysOj1EaXTZsNMLL7m1/GvdZH/QDR5rxiuS', 'wieber@gmail.com'),
(7, 'Momo', 'Peter', '$2y$10$tENiAAKxCjfeDDVP59bLvu1vPmD99C1e6gmsKZ9qCzQ1aLWRd7qa.', 'momo@yahoo.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`publication_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `publication_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
