-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 14. Mai 2019 um 22:54
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

--
-- Daten für Tabelle `booked_courses`
--

INSERT INTO `booked_courses` (`customer_id`, `course_id`) VALUES
(6, 4),
(6, 4),
(6, 3),
(6, 1),
(6, 1),
(6, 6),
(11, 1),
(6, 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `name` char(255) COLLATE latin1_german2_ci NOT NULL,
  `instructor` char(255) COLLATE latin1_german2_ci NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `url` char(255) COLLATE latin1_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`ID`, `name`, `instructor`, `price`, `url`) VALUES
(1, 'Yearly membership', 'All', '389.99', '_prices.php'),
(2, 'How to kill a demon - the basics', 'Thomas', '6.99', 'demon.php'),
(3, 'Basic Package', 'All', '34.99', '_prices.php'),
(4, 'Monthly membership', 'All', '59.99', '_prices.php'),
(5, 'Zumba for nerds', 'Judyta', '6.99', 'zumba.php'),
(6, 'How to make the most of instagram filters', 'Serena', '6.99', 'photography.php'),
(7, 'Folding is fun - helpful things to know before you get started', 'Anna', '6.99', 'origami.php'),
(8, 'How to find your own calligraphy style', 'Elisabeth', '6.99', 'calligraphy.php'),
(9, 'Peanut butter rocks!', 'Gaelle', '6.99', 'cooking.php');

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
(10, 'Nimmersatt', '', '$2y$10$smulSLO9iqotH3oBhznGEOw81wniiqEyMAqwDfZiRQ7.9bgdI7UsS', 0),
(11, 'Judyta', '', '$2y$10$osHSVjvFyn8.X9ISdBQLrut1Snfy.hwASOnU1qe2aLeaQzRsERRQe', 0);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `login_data`
--
ALTER TABLE `login_data`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
