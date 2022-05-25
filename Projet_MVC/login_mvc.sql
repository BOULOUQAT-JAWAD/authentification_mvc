-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(10) NOT NULL,
  `cne` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `cne`, `nom`, `prenom`, `adress`, `ville`, `email`, `image`) VALUES
(1, '139022035', 'ABASSI', 'Yasser', 'ENSAT BP1818', 'Tanger', 'yasser.abassi@etu.uae.ac.ma', './photos/ABASSI.png'),
(2, '142034631', 'ALAMI-OUAHABI', 'Louay', 'ENSAT BP1818', 'Tanger', 'louay.alamiouahabi@etu.uae.ac.ma', './photos/ALAMI.png\r\n'),
(3, '185054115', 'AMAATI', 'Zakariae', 'ENSAT BP1818', 'Tanger', 'zakariae.amaati@etu.uae.ac.ma', './photos/AMAATI.png'),
(4, '142034631', 'AMAMI', 'Yassir', 'ENSAT BP1818', 'Tanger', 'yassir.amami@etu.uae.ac.ma', './photos/AMAMI.png'),
(5, '349022035', 'ASSADI', 'Mouad', 'ENSAT BP1818', 'Tanger', 'mouad.assadi@etu.uae.ac.ma', './photos/ASSADI.png'),
(6, '172034631', 'ATYQ', 'Amine', 'ENSAT BP1818', 'Tanger', 'yassine.belafki@etu.uae.ac.ma', './photos/ATYQ.png'),
(7, '185054115', 'BELAFKI', 'Yassine', 'ENSAT BP1818', 'Tanger', 'omar.belkentaoui@etu.uae.ac.ma', './photos/BELAFKI.png'),
(8, '1052568560', 'BENAFITOU', 'Asmae', 'ENSAT BP 1818', 'Tanger', 'asmae.benafitou@etu.uae.ac.ma', './photos/BENAFITOU.png');

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`id`, `login`, `pwd`) VALUES
(1, 'prof1', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loginUnique` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prof`
--
ALTER TABLE `prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
