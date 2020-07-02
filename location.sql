-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 09:13 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Ville` varchar(15) NOT NULL,
  `Categorie` varchar(15) NOT NULL,
  `Annee` int(4) NOT NULL,
  `Marque` varchar(15) NOT NULL,
  `Couleur` varchar(15) NOT NULL,
  `TCarr` varchar(15) NOT NULL,
  `Carburant` varchar(15) NOT NULL,
  `Description` text NOT NULL,
  `Km` int(6) NOT NULL,
  `Prix` int(4) NOT NULL,
  `Photo` varchar(15) NOT NULL,
  `DateAnnance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`Id`, `Name`, `Email`, `Phone`, `Ville`, `Categorie`, `Annee`, `Marque`, `Couleur`, `TCarr`, `Carburant`, `Description`, `Km`, `Prix`, `Photo`, `DateAnnance`) VALUES
(1, 'med', 'med98totf@gmail.com', 633535256, 'Agadir', 'Mini', 2016, 'Audi', 'Bleu', 'Coupe', 'Diesel', 'salam cava', 100000, 150000, 'a.jpg', '2018-04-14'),
(2, 'simo', 'ayoub@gmail.com', 676266006, 'Tetouan', 'IntermÃ©diaire', 2018, 'Ford', 'Bleu', 'Cabriolets', 'GPL', 'hey salam cava chi jaadid walou ok bye apres je suis ok ok cava', 29000, 95000, 'cr.jpg', '2018-04-14'),
(3, '<strong>M</stro', 'm8.45com', 333333333, 'Rabat', 'RoutiÃ¨re', 2020, 'Honda', 'Jaune', 'Monospace', 'GNV', 'aaaaaaa11111111111122@@@@@@\r\n<strong>blahblah</strong>', 300000, 200000, 'classesImg.png', '2018-04-14'),
(4, 'mohamed', 'khalid@gmailstrong.com', 633535256, 'Agadir', 'Mini', 2017, 'BMW', 'Gris', 'Berline', 'GNV', 'salam 1 cava 2 ok 3', 10000, 85000, 'aa.png', '2018-04-15'),
(5, 'simo', 'sdfsdf@fdsf.com', 678521463, 'Agadir', 'Mini', 2015, 'Audi', 'Rouge', 'Berline', 'Diesel', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 60000, 140000, 'b.jpg', '2018-04-15'),
(6, 'simo', 'sdfsdf@fdsf.com', 678521463, 'Agadir', 'Mini', 2015, 'Audi', 'Rouge', 'Berline', 'Diesel', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 60000, 140000, 'b.jpg', '2018-04-15'),
(7, 'lotf', 'hhhah@gmail.fr', 612369874, 'Oujda', 'SUV', 2011, 'Mercedes', 'Gris', 'Cabriolets', 'Diesel', 'Chrome , mozilla ,VL ,flah player aaa bbbb cccc ddd eee fff', 30000, 85000, 'bg.jpg', '2018-04-15'),
(8, 'aa', 'dd@gm.com', 2147483647, 'Meknes', 'Intermediaire', 1998, 'Audi', 'Noir', 'Berline', 'Essence', 'hhh', 50, 100000, 'email.png', '2018-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
