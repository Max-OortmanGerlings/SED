-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 14 dec 2015 om 01:16
-- Serverversie: 5.6.26
-- PHP-versie: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastenboek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gastenboek`
--

CREATE TABLE IF NOT EXISTS `gastenboek` (
  `gastnummer` int(11) NOT NULL,
  `naam` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `woonplaats` varchar(40) NOT NULL,
  `bericht` varchar(140) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gastenboek`
--

INSERT INTO `gastenboek` (`gastnummer`, `naam`, `email`, `woonplaats`, `bericht`, `datum`) VALUES
(1, 'mike', 'mike@mail.nl', 'zwolle', 'goedemiddag', '0000-00-00'),
(2, 'max', 'max@mail.nl', 'zeist', 'goedenacht', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
