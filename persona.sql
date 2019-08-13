-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Ago 13, 2019 alle 18:19
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_demomaster1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `idmappa` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `via` varchar(255) NOT NULL,
  `latitudine` varchar(255) NOT NULL,
  `longitudine` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmappa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dump dei dati per la tabella `persona`
--

INSERT INTO `persona` (`idmappa`, `nome`, `cognome`, `info`, `via`, `latitudine`, `longitudine`, `data`) VALUES
(19, 'giacomo', 'leopardi', 'fisioterapista omt specialista in terapia manuale per appuntamenti scrivere a questermocolle@gmail.com oppure telefonare a 0039451839494900', 'Paleocapa', '44.4235409', '8.9270362', '2019-03-05 15:36:16'),
(18, 'Anto', 'Nello', '', 'Via', '44.2991352', '8.4512397', '2019-03-05 10:35:48'),
(17, 'tes', 'test', 'fsf fsdf email@email.it tel 222222rer0404 ', '', '44.3396128', '8.5082277', '2019-03-04 14:59:18'),
(16, 'Filippo', 'Neri', 'Abito a Catania e faccio siti web', 'via rossi', '37.6130942', '15.0192032', '2019-03-03 22:43:35'),
(13, 'giulio', 'cesare', ' sono imperatore di roma', 'Via', '41.9257409', '12.5738986', '2019-03-03 00:05:59'),
(14, 'Mario', 'Rossi', 'abito a Bari', 'via bari', '41.1257843', '16.8620293', '2019-03-03 00:10:20'),
(15, 'Giovanni', 'Verdi', 'Abito a Savona', 'via savona', '44.3080251', '8.4810315', '2019-03-03 00:13:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
