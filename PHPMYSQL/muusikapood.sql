-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Märts 21, 2024 kell 03:12 PL
-- Serveri versioon: 10.4.27-MariaDB
-- PHP versioon: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `muusikapood`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `albumid`
--

CREATE TABLE `albumid` (
  `id` int(10) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `aasta` year(4) NOT NULL,
  `hind` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `albumid`
--

INSERT INTO `albumid` (`id`, `artist`, `album`, `aasta`, `hind`) VALUES
(1, 'Onu Bella', 'Fiat', 1998, '10.20'),
(2, 'Dunstan', 'Ronstring', 1993, '14.48'),
(3, 'Neil', 'Latlux', 2000, '92.56'),
(4, 'Doug', 'Stim', 1993, '44.87'),
(5, 'Janina', 'Aerified', 1986, '49.83'),
(6, 'Chaddie', 'Flowdesk', 1985, '73.63'),
(7, 'Imogen', 'Matsoft', 2001, '69.06'),
(8, 'Vivyanne', 'Kanlam', 2007, '48.25'),
(9, 'Rhetta', 'Vagram', 1984, '80.09'),
(10, 'Bili', 'Zoolab', 1995, '25.91'),
(11, 'Carmella', 'Subin', 1994, '53.50'),
(12, 'Margaret', 'Overhold', 2007, '65.52'),
(13, 'Cary', 'Wrapsafe', 2001, '92.44'),
(14, 'Darcey', 'Fix San', 1988, '98.84'),
(15, 'Debby', 'Span', 2005, '71.67'),
(16, 'Boyce', 'Fix San', 2010, '49.15'),
(17, 'Gwenny', 'Tres-Zap', 1996, '98.08'),
(18, 'Jessika', 'Voyatouch', 1998, '40.17'),
(19, 'Glenna', 'Zamit', 2003, '39.75'),
(20, 'Karol', 'Zathin', 2003, '33.79'),
(21, 'Domingo', 'Vagram', 1992, '50.66'),
(22, 'Manya', 'Overhold', 1996, '86.15'),
(23, 'Audie', 'Asoka', 1990, '24.02'),
(24, 'Holli', 'Temp', 1990, '60.82'),
(25, 'Dario', 'Ronstring', 2012, '75.08'),
(26, 'Hannie', 'Namfix', 1995, '99.78'),
(27, 'Roma', 'Ronstring', 2012, '75.70'),
(28, 'Axe', 'Toughjoyfax', 1990, '68.69'),
(29, 'Babara', 'Solarbreeze', 1994, '36.20'),
(30, 'Patrice', 'Kanlam', 2006, '16.62'),
(31, 'Arv', 'Y-Solowarm', 2004, '29.06'),
(32, 'Martina', 'Span', 2004, '43.87'),
(33, 'Dugald', 'Konklux', 1998, '15.65'),
(34, 'Leonardo', 'Trippledex', 2000, '26.09'),
(35, 'Theresa', 'Sonair', 1992, '92.22'),
(36, 'Hilly', 'Zontrax', 1995, '11.30'),
(37, 'Jocelin', 'Viva', 2012, '82.30'),
(38, 'Kristien', 'Cardguard', 2002, '89.75'),
(39, 'Leonora', 'Voltsillam', 1989, '5.37'),
(40, 'Vanya', 'Fix San', 1971, '97.66'),
(41, 'Barny', 'Zamit', 2008, '13.02'),
(42, 'Luis', 'Asoka', 2012, '73.40'),
(43, 'Desmund', 'Tresom', 1991, '23.22'),
(44, 'Sidonia', 'Subin', 2000, '17.45'),
(45, 'Jerrie', 'Tres-Zap', 2011, '22.31'),
(46, 'Merrel', 'Stim', 1966, '19.09'),
(47, 'Jock', 'Fintone', 1994, '94.21'),
(48, 'Roxanna', 'Sonair', 2002, '51.18'),
(49, 'Goldy', 'Stringtough', 2008, '81.38'),
(50, 'Celestyna', 'Veribet', 1998, '88.87'),
(51, 'Ermina', 'Trippledex', 1999, '29.08'),
(52, 'Wenda', 'Gembucket', 1998, '95.98'),
(53, 'Raoul', 'Solarbreeze', 2006, '71.27'),
(54, 'Alvina', 'Y-Solowarm', 2006, '44.06'),
(55, 'Harmon', 'Greenlam', 2002, '76.81'),
(56, 'Ashla', 'Voltsillam', 1997, '37.55'),
(57, 'Read', 'Bitwolf', 2004, '45.58'),
(58, 'Harlan', 'Keylex', 2007, '48.05'),
(59, 'Chrissy', 'Job', 2004, '28.01'),
(60, 'Aloysius', 'Stringtough', 1994, '91.97'),
(61, 'Clive', 'Asoka', 1996, '81.54'),
(62, 'King', 'Bamity', 2001, '28.42'),
(63, 'Valerye', 'Lotlux', 2009, '24.33'),
(64, 'Port', 'Latlux', 1998, '49.94'),
(65, 'Patricia', 'Tampflex', 2007, '62.66'),
(66, 'Emalia', 'Ventosanzap', 1986, '67.15'),
(67, 'Laurella', 'Regrant', 1991, '14.95'),
(68, 'Gilbertine', 'Alphazap', 1988, '9.37'),
(69, 'Tonnie', 'Treeflex', 2006, '15.35'),
(70, 'Anatol', 'Wrapsafe', 1999, '11.02'),
(71, 'Theodore', 'Overhold', 1998, '31.63'),
(72, 'Steffane', 'Cardguard', 2009, '30.33'),
(73, 'Kordula', 'Biodex', 1997, '35.04'),
(74, 'Ab', 'Tin', 2003, '76.04'),
(75, 'Chloette', 'Gembucket', 1996, '22.61'),
(76, 'Eugenio', 'Tampflex', 1986, '48.42'),
(77, 'Sigrid', 'Domainer', 2007, '1.26'),
(78, 'Harmon', 'Flowdesk', 1998, '53.56'),
(79, 'Sonny', 'Toughjoyfax', 1999, '24.50'),
(80, 'Shellysheldon', 'Kanlam', 2007, '44.00'),
(81, 'Drusy', 'Transcof', 2011, '59.66'),
(82, 'Chadwick', 'Redhold', 2008, '77.86'),
(83, 'Cletis', 'Flexidy', 2004, '68.19'),
(84, 'Arri', 'Aerified', 2003, '44.49'),
(85, 'Valentin', 'Job', 2009, '14.16'),
(86, 'Sandy', 'Namfix', 2009, '40.71'),
(87, 'Jake', 'Matsoft', 1997, '38.49'),
(88, 'Bryn', 'Domainer', 1994, '82.23'),
(89, 'Collin', 'Gembucket', 2005, '99.07'),
(90, 'Valera', 'Namfix', 2009, '39.14'),
(91, 'Jay', 'Subin', 2003, '97.06'),
(92, 'Rourke', 'Cookley', 1985, '49.55'),
(93, 'Reg', 'Opela', 2006, '27.82'),
(94, 'Avigdor', 'Viva', 2008, '76.48'),
(95, 'Donall', 'Aerified', 2012, '29.07'),
(96, 'Cacilia', 'It', 2008, '14.73'),
(97, 'Lyell', 'Overhold', 2005, '47.36'),
(98, 'Benny', 'Temp', 2008, '66.14'),
(99, 'Antonio', 'Asoka', 1999, '76.61'),
(100, 'Martyn', 'Fixflex', 2003, '50.61'),
(101, 'Dolli', 'Bitchip', 2002, '69.96');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `albumid`
--
ALTER TABLE `albumid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `albumid`
--
ALTER TABLE `albumid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
