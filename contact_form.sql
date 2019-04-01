-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 01. Apr 2019 um 21:19
-- Server-Version: 10.1.38-MariaDB
-- PHP-Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `contact_form`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customerqueries`
--

CREATE TABLE `customerqueries` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_german2_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `message` text COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `customerqueries`
--

INSERT INTO `customerqueries` (`ID`, `fname`, `lname`, `email`, `country`, `message`) VALUES
(1, 'fname', 'lname', 'email', 'country', 'message'),
(2, 'fname', 'lname', 'email', 'country', 'message'),
(3, 'fname', 'lname', 'email', 'country', 'message'),
(4, 'fname', 'lname', 'email', 'country', 'message'),
(5, 'G', 'K', 'gk@gmx.at', 'austria', 'Hi'),
(6, 'G', 'K', 'gk@gmx.at', 'austria', 'Hi again!');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `customerqueries`
--
ALTER TABLE `customerqueries`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `customerqueries`
--
ALTER TABLE `customerqueries`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
