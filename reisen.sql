-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Okt 2015 um 08:31
-- Server Version: 5.5.39
-- PHP-Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `kalkulator`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reisen`
--

CREATE TABLE IF NOT EXISTS `reisen` (
`id` int(11) NOT NULL,
  `titel` varchar(56) NOT NULL,
  `preis` int(11) NOT NULL,
  `kurzbeschreibung` varchar(55) NOT NULL,
  `beschreibung` text NOT NULL,
  `beginn` varchar(11) NOT NULL,
  `ende` varchar(11) NOT NULL,
  `bild` varchar(44) NOT NULL,
  `thumbnail` varchar(44) NOT NULL,
  `region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reisen`
--
ALTER TABLE `reisen`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reisen`
--
ALTER TABLE `reisen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
