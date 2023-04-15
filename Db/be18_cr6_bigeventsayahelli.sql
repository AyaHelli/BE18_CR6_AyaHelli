-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Apr 2023 um 17:29
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be18_cr6_bigeventsayahelli`
--
CREATE DATABASE IF NOT EXISTS `be18_cr6_bigeventsayahelli` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be18_cr6_bigeventsayahelli`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `capacity` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `capacity`, `description`, `type`, `start_date`, `end_date`, `image`, `zip`, `city`, `street_name`, `phone_number`) VALUES
(1, 'wean mondän 150 years of the World', 'usersmjhol@hotmail.com', 50, 'The Vienna Worlds Fair of 1873 was also to influence Viennese music and continue to shape it to this day: Johann Strauss Sohn was appointed music director of', 'musik', '1897-09-10 01:06:00', '1897-09-10 02:06:00', 'https://cdn.pixabay.com/photo/2014/03/26/10/48/microphone-298587__480.jpg', 1150, 'Wien', 'Wagramerstraße', '0975457875'),
(2, 'wean mondän. 150 years of the World Fair', 'teefest@hotmail.com', 50, 'The Vienna World Fair of 1873 was also to influence Viennese music and continue to shape it to this day: Johann Strauss Sohn was appointed music director of', 'sport', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'https://cdn.pixabay.com/photo/2015/03/01/22/27/women-655353__480.jpg', 1150, 'Wien', 'Wagramerstraße', '0974677875'),
(3, 'wean mondän. 150 years of the World', 'tertt@hotmail.com', 50, 'The Vienna World Fair of 1873 was also to influence Viennese music and continue to shape it to this day: Johann Strauss Sohn was appointed music director of', 'theater', '2023-04-15 14:20:20', '2023-04-15 10:22:18', 'https://cdn.pixabay.com/photo/2013/02/26/01/10/auditorium-86197__480.jpg', 1150, 'Wien', 'Wagramerstraße', '065765457875'),
(4, 'wean mondän. 150 years of the World', 'tesjhjt@hotmail.com', 60, 'The Vienna Worl Fair of 1873 was also to influence Viennese music and continue to shape it to this day: Johann Strauss Sohn was appointed music director of', 'musik', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662__480.jpg', 1150, 'Wien', 'Wagramerstraße', '09754574565');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indizes für die Tabelle `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
