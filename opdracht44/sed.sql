-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 dec 2015 om 18:39
-- Serverversie: 10.0.17-MariaDB
-- PHP-versie: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sed`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werkzaamheden`
--

CREATE TABLE `werkzaamheden` (
  `status` varchar(10) NOT NULL,
  `nummer` int(11) NOT NULL,
  `begindatum` date NOT NULL,
  `inleverdatum` date NOT NULL,
  `vak` varchar(15) NOT NULL,
  `titel` varchar(15) NOT NULL,
  `beschrijving` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `werkzaamheden`
--
ALTER TABLE `werkzaamheden`
  ADD PRIMARY KEY (`nummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `werkzaamheden`
--
ALTER TABLE `werkzaamheden`
  MODIFY `nummer` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
