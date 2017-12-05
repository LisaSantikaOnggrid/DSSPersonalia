-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 09:16 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalia_dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama`) VALUES
(18214001, 'Edria'),
(18214002, 'Lisa'),
(18214003, 'Nove'),
(18214004, 'Budi'),
(18214005, 'Ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `skor`
--

CREATE TABLE `skor` (
  `id_skor` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `s_karakter` int(11) NOT NULL,
  `s_kemampuan` int(11) NOT NULL,
  `s_pendidikan` int(11) NOT NULL,
  `s_pengalaman` int(11) NOT NULL,
  `s_lainlain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skor`
--

INSERT INTO `skor` (`id_skor`, `id_kandidat`, `s_karakter`, `s_kemampuan`, `s_pendidikan`, `s_pengalaman`, `s_lainlain`) VALUES
(1, 18214001, 5, 5, 4, 3, 4),
(2, 18214002, 3, 3, 2, 4, 4),
(3, 18214003, 1, 2, 2, 2, 1),
(4, 18214004, 1, 2, 2, 1, 2),
(5, 18214005, 3, 4, 3, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
