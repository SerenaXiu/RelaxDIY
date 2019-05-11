-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 11. Mai 2019 um 21:28
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
-- Datenbank: `relaxdiy`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `booked_courses`
--

CREATE TABLE `booked_courses` (
  `customer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `name` char(255) COLLATE latin1_german2_ci NOT NULL,
  `instructor` char(255) COLLATE latin1_german2_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`ID`, `name`, `instructor`, `price`) VALUES
(1, 'Peanut butter rocks!', 'Gaelle', 99),
(2, 'How to kill a demon - the basics', 'Thomas', 99),
(3, 'Folding is fun - helpful things to know before you get started', 'Anna', 99),
(4, 'How to find your own calligraphy style', 'Elisabeth', 99),
(5, 'Zumba for nerds', 'Judyta', 99),
(6, 'How to make the most of instagram filters', 'Serena', 99);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login_data`
--

CREATE TABLE `login_data` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ms_lvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `login_data`
--

INSERT INTO `login_data` (`ID`, `username`, `email`, `password`, `ms_lvl`) VALUES
(6, 'Max', '', '$2y$10$zw4cTm/SBOSz3qIjrBMeSuUjknJdZkfRGg.yJbwdJsYYGCh6VAuC6', 0),
(7, 'Moritz', '', '$2y$10$BmC64OQDy2nrH3PG685eAOY90NgLX/AamdeC.1qpS0VTqABkU1ABe', 0),
(8, 'Wilhelm', '', '$2y$10$dTdE.TAcy33jXBwsAQQzN.otVUvgKU.wGYWYHLhdMIaLqVzfu/PZW', 0),
(9, 'Busch', '', '$2y$10$Wc4CQHFqZ3O/GN177K5S..LVi.R6T9ysLqUtlSghQh5uGwcjtA/yW', 0),
(10, 'Nimmersatt', '', '$2y$10$smulSLO9iqotH3oBhznGEOw81wniiqEyMAqwDfZiRQ7.9bgdI7UsS', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `login_data`
--
ALTER TABLE `login_data`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
