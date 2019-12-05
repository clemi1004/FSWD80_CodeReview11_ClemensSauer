-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Dez 2019 um 10:39
-- Server-Version: 10.4.8-MariaDB
-- PHP-Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_clemens_sauer_travelmatic`
--
CREATE DATABASE IF NOT EXISTS `cr11_clemens_sauer_travelmatic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_clemens_sauer_travelmatic`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `concerts`
--

DROP TABLE IF EXISTS `concerts`;
CREATE TABLE `concerts` (
  `pk_concerts_id` int(11) NOT NULL,
  `fk_location_id` int(11) NOT NULL,
  `concerts_name` varchar(50) NOT NULL,
  `event_date_time` date NOT NULL,
  `event_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `concerts`
--

INSERT INTO `concerts` (`pk_concerts_id`, `fk_location_id`, `concerts_name`, `event_date_time`, `event_time`) VALUES
(1, 7, 'Kris Kristofferson', '2019-12-03', '2019-12-03 20:00:00'),
(2, 8, 'Lenny Kravitz', '2019-12-09', '2019-12-03 19:30:00'),
(3, 11, 'Gautier Capuçon / Yuja Wang', '2020-01-17', '2020-01-17 19:30:00'),
(4, 12, 'LOS FASTIDIOS (ita) + SKASSAPUNKA (ita)', '2019-11-30', '2019-11-30 20:00:00'),
(5, 12, 'LOS FASTIDIOS (ita) + SKASSAPUNKA (ita)', '2019-11-30', '2019-11-30 20:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `pk_location_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `city` varchar(4) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `web` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `location`
--

INSERT INTO `location` (`pk_location_id`, `address`, `zip_code`, `city`, `pic`, `web`) VALUES
(1, 'Schloßgasse 21', 1050, 'Wien', 'https://cdn.pixabay.com/photo/2015/12/08/00/32/steak-1081819_960_720.jpg', 'https://www.gergelys.at/'),
(2, 'Engerthstrasse 104', 1200, 'Wien', 'http://www.gasthaus-kopp.at/wp-content/uploads/2014/07/Kopp-Wiener-Schnitzel-1030x732.jpg', 'http://www.gasthaus-kopp.at/'),
(3, 'Arbeiterstrandbadstraße 122', 1210, 'WIen', 'https://cdn.pixabay.com/photo/2016/07/06/23/09/asia-food-1501588_960_720.jpg', 'http://www.sichuan.at/cms/'),
(4, 'Karlsplatz 1', 1010, 'Wien', 'https://cdn.pixabay.com/photo/2016/07/18/23/26/vienna-1527172_960_720.jpg', 'http://www.karlskirche.at/'),
(5, 'Maxingstraße 13 b', 1130, 'Wien', 'https://cdn.pixabay.com/photo/2017/09/07/06/38/zoo-2723997_960_720.jpg', 'https://www.zoovienna.at/'),
(6, 'Maria-Theresien-Platz', 1010, 'Wien', 'https://www.khm.at/fileadmin/_processed_/csm_eyck_940x361_5af84d5bd6.jpg', 'https://www.khm.at/'),
(7, 'Wiener Stadthalle, Halle F, Roland Rainer Platz 1', 1150, 'Wien', 'https://media.diepresse.com/images/uploads_700/3/2/7/5403431/Kris-Kristofferson_1523367036580505.jpg', 'http://kriskristofferson.com/'),
(8, 'Wiener Stadthalle - Halle D, Roland Rainer Platz 1', 1150, 'Wien', 'https://assets-tt-com.nmo.at/images/2018/10/14898367.18811617.d775f1a6aee76fd20a8e34af9eaa8e99.jpg', 'http://www.lennykravitz.com/'),
(9, 'Margaretenstraße 51', 1050, 'Wien', 'http://www.bamboo5.at/images/11.jpg', 'http://www.bamboo5.at/'),
(10, 'Burgring 7', 1010, 'Wien', 'https://cdn.pixabay.com/photo/2017/07/25/21/29/naturehistorical-museum-2539597_960_720.jpg', 'https://www.nhm-wien.ac.at/'),
(11, 'Lothringerstraße 20', 1030, 'Wien', 'https://upload.wikimedia.org/wikipedia/commons/6/60/Konzerthaus_110606.jpg', 'https://konzerthaus.at/'),
(12, 'Baumgasse 80', 1030, 'Wien', 'https://upload.wikimedia.org/wikipedia/commons/5/56/Arena_wien_01.jpg', 'http://arena.wien/');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE `restaurants` (
  `pk_restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(9) NOT NULL,
  `telephone_number` varchar(20) NOT NULL,
  `restaurant_type` varchar(10) NOT NULL,
  `short_description_rest` varchar(700) NOT NULL,
  `fk_location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `restaurants`
--

INSERT INTO `restaurants` (`pk_restaurant_id`, `restaurant_name`, `telephone_number`, `restaurant_type`, `short_description_rest`, `fk_location_id`) VALUES
(1, 'Gergely\'s', '004315440767', 'Steakhouse', 'Steak, Wein, Edelbrände: Bequem sitzen und entspannt genießen – so lautet die Leitlinie für das Abendlokal Gergely’s . Das markante Gewölbe des Schlossgebäudes aus dem 14. Jahrhundert schafft ein behagliches Umfeld. Erstklassige Steaks sind hier ebenso selbstverständlich wie kompetentes und freundliches Service.', 1),
(2, 'Kopp', '004313304392', 'Austrian', 'Bin beim Kopp!\r\nDer Kopp, so nennen uns die Stammgäste, wird seit den frühen 1960er Jahren als Familienbetrieb geführt. Zuerst Wirtshaus dann Gasthaus aber immer bodenständig, gemütlich und ehrlich. Das ist uns auch in der 3. Generation das wichtigste Anliegen.', 2),
(3, 'Sichuan', '004312633713', 'Chinese', 'Wer Geschäftigkeit liebt\r\nGleicht dem hinter den Wolken zuckenden Blitz\r\nOder der im Wind flackernden Leuchte.\r\nWer Untätigkeit pflegt\r\nGleicht toter Asche\r\nOder einem verdorrten Baum\r\nSei wie der fliegende Falke, der springende Fisch\r\nIn stehenden Wolken, in stillem Wasser:\r\nSo begibst du dich mit Herz und Leib auf ', 3),
(4, 'Bamboo', '004315854061', 'Chinese', 'Das Restaurant Bamboo heißt Ihnen Herzlich Willkommen!\r\nBamboo ist ein Lokal, das sich speziell auf das Buffet fokusiert, daher\r\nkönnen wir uns erlauben Ihnen verschiedenste Produkte aus der ganzen Welt zu präsentieren.\r\nBamboo bietet Ihnen neben den warmen Speisen ebenso rohe Zutaten an, die Sie je nach Belieben selbst zusammenstellen und es sich von unserem Meisterkoch an der Grillplatte zubereiten können.\r\nNatürlich werden unsere Produkte jeden Tag frisch geliefert, damit Sie nur das Beste bekommen!', 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `things`
--

DROP TABLE IF EXISTS `things`;
CREATE TABLE `things` (
  `pk_things_id` int(11) NOT NULL,
  `fk_location_id` int(11) NOT NULL,
  `thingstodo_name` varchar(18) NOT NULL,
  `thingstodo_type` varchar(6) NOT NULL,
  `short_description_things` varchar(586) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `things`
--

INSERT INTO `things` (`pk_things_id`, `fk_location_id`, `thingstodo_name`, `thingstodo_type`, `short_description_things`) VALUES
(1, 4, 'St. Charles Church', 'Church', 'Die Wiener Karlskirche ist eine römisch-katholische Kirche im 4. Wiener Gemeindebezirk Wieden. Die Rektoratskirche hl. Karl Borromäus gehört zum Stadtdekanat 4/5 im Vikariat Wien Stadt der Erzdiözese Wien. Die in der ersten Hälfte des 18. Jahrhunderts erbaute Kirche steht unter Denkmalschutz. Sie liegt an der Südseite des zentrumsnahen Karlsplatzes und ist einer der bedeutendsten barocken Kirchenbauten nördlich der Alpen und eines der Wahrzeichen Wiens.'),
(2, 5, 'Zoo Vienna', 'Zoo', 'Der Tiergarten Schönbrunn ist der älteste Zoo der Welt. Er wurde 1752 von Kaiser Franz I. Stephan von Lothringen, dem Gemahl Maria Theresias, gegründet und ist Teil des UNESCO Weltkulturerbes Schönbrunn. Fünf Mal in Folge (2008, 2010, 2012, 2014 und 2018) wurde er als bester Zoo Europas ausgezeichnet. Auch einzigartige Zuchterfolge wie die Welterstnachzucht der Batagur Flussschildkröte und der Winkerfrösche machten den Tiergarten weit über die Grenzen Österreichs hinaus bekannt. Seit dem Jahr 2006 besuchen den Tiergarten jährlich über 2 Millionen Besucher aus dem In- und Ausland.'),
(3, 6, 'KHM', 'Museum', 'Das Kunsthistorische Museum (KHM) ist ein Kunstmuseum in der österreichischen Hauptstadt Wien. Es zählt zu den größten und bedeutendsten Museen der Welt. Es wurde im Jahr 1891 eröffnet und 2018 von ca. 1,75 Millionen Menschen besucht.'),
(4, 10, 'NHM', 'Museum', 'Das Naturhistorische Museum in Wien (NHM) zählt mit rund 30 Millionen Sammlungsobjekten[2] zu den bedeutendsten Naturmuseen der Welt und ist eines der größten Museen Österreichs. ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `admin` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `admin`) VALUES
(1, 'Clemens', 'clemens.abc@test.net', '6f09b03e38ba9beb0dd6f35093b2498304407c9e774d202d86774ce9f2b4d0f4', b'0'),
(3, 'clemens_admin', 'clemens.admin@gmx.at', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae', b'1'),
(5, 'david', 'test.abc@gmx.at', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae', b'0');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`pk_concerts_id`),
  ADD KEY `fk_location_id` (`fk_location_id`);

--
-- Indizes für die Tabelle `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`pk_location_id`);

--
-- Indizes für die Tabelle `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`pk_restaurant_id`),
  ADD KEY `fk_location_id` (`fk_location_id`);

--
-- Indizes für die Tabelle `things`
--
ALTER TABLE `things`
  ADD PRIMARY KEY (`pk_things_id`),
  ADD KEY `fk_location_id` (`fk_location_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `concerts`
--
ALTER TABLE `concerts`
  ADD CONSTRAINT `concerts_ibfk_1` FOREIGN KEY (`fk_location_id`) REFERENCES `location` (`pk_location_id`);

--
-- Constraints der Tabelle `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`fk_location_id`) REFERENCES `location` (`pk_location_id`);

--
-- Constraints der Tabelle `things`
--
ALTER TABLE `things`
  ADD CONSTRAINT `things_ibfk_1` FOREIGN KEY (`fk_location_id`) REFERENCES `location` (`pk_location_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
