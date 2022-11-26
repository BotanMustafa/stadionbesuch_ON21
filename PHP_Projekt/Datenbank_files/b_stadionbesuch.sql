-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Erstellungszeit: 26. Nov 2022 um 18:27
-- Server-Version: 8.0.31
-- PHP-Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `datenbank`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `b_stadionbesuch`
--

CREATE TABLE `b_stadionbesuch` (
  `id` int NOT NULL,
  `stadionname` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `begegnung` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ergebnis` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `datum` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `b_stadionbesuch`
--

INSERT INTO `b_stadionbesuch` (`id`, `stadionname`, `begegnung`, `ergebnis`, `datum`) VALUES
(19, 'Old Trafford', 'ManU-Villa', '4-1', '10.11.22'),
(20, 'Mercedes-Benz-Arena', 'VfB-BVB', '8-1', '01.10.22');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `b_stadionbesuch`
--
ALTER TABLE `b_stadionbesuch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `b_stadionbesuch`
--
ALTER TABLE `b_stadionbesuch`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
