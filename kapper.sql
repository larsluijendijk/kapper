-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 02 jul 2017 om 16:14
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `kapper`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `employ_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `been_there` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `agenda`
--

INSERT INTO `agenda` (`id`, `date`, `start_time`, `end_time`, `employ_id`, `customer_id`, `been_there`) VALUES
(1, '2017-06-19', '14:00', '15:00', 1, 2, 'ja'),
(4, '2017-07-14', '16:00', '16:15', 5, 0, 'nee'),
(5, '2017-07-04', '12:00', '12:30', 1, 6, 'nee'),
(6, '2017-07-18', '14:00', '14:30', 5, 2, 'nee'),
(7, '2017-07-12', '12:00', '13:00', 1, 0, 'nee');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `postalcode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `is_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `postalcode`, `city`, `phonenumber`, `is_admin`) VALUES
(1, 'admin', '$2y$10$4YE0EIH/Bdc4pTijV7sQa./3hxprhL3gzf20yWFAlLdctesqUAwq2', 'admin@gmail.com', 'Laan 33', '1234AB', 'Sleeuwijk', '0650554123', 1),
(2, 'boi', '$2y$10$wHRrUmzeN7YQga9leTKR7.1FWdGvx0PHaknt5MpnE0HwRFhpCIdXq', 'boi@gmail.com', 'Boomlaan 50', '1234AB', 'Gorinchem', '0620356542', 0),
(5, 'kapper', '$2y$10$H/Pqt6yYcijKgXTT0TpAouhnFcMJJYFzZCb7X337DONQiICfZmG66', 'kapper@gmail.com', 'Laan 3', '1324 AB', 'Sleeuwijk', '06 12341234', 1),
(6, 'lars', '$2y$10$2EfOLROf6GSpE2WxRzJUzem9U5Svmq67ntRwPJ.KoAwSvd5gfwuNe', 'lars@gmail.com', 'Laan 67', '1234AB', 'Gorinchem', '06 43323425', 0),
(7, 'test', '$2y$10$rUw0iS.HuId3lETZtg/lM.5m/AlJMUOBQ8n2Jf8DS9G2qIxiELmLm', 'test', 'test', 'test', 'test', 'test', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
