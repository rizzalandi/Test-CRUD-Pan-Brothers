-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 08:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('P','W') NOT NULL,
  `alamat` text NOT NULL,
  `tanggalinput` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userinput` varchar(11) NOT NULL,
  `tanggalupdate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `userupdate` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `jenis_kelamin`, `alamat`, `tanggalinput`, `userinput`, `tanggalupdate`, `userupdate`) VALUES
(1, 1133, 'Susi', 'W', 'Surakarta', '2021-01-07 00:00:00', 'Susi01', '2021-01-08 01:53:55', 'Susi02'),
(8, 1123, 'Bunga', 'W', 'sragen', '2021-01-07 23:18:59', 'bunga23', '2021-01-08 01:53:31', 'bunga23'),
(9, 1211, 'Riko', 'P', 'sragen', '2021-01-07 23:31:28', 'Rizal01', '2021-01-08 01:54:22', 'Riko22'),
(11, 1131, 'Leo', 'P', 'Semarang', '2021-01-08 01:56:12', 'Leo10', '2021-01-08 02:03:53', 'Leo10'),
(13, 1146, 'Bayu', 'P', 'Sragen', '2021-01-08 01:57:28', 'Bayu21', '2021-01-08 02:13:40', 'Bayu22'),
(14, 1143, 'Rangga', 'P', 'Bandung', '2021-01-08 02:15:03', 'Joko21', '2021-01-08 02:17:48', ''),
(15, 1132, 'Indra', 'P', 'Semarang', '2021-01-08 02:15:39', 'Indra09', NULL, ''),
(16, 1129, 'Gigih', 'P', 'Surakarta', '2021-01-08 02:16:26', 'Kiki22', '2021-01-08 02:18:36', 'Gigih22'),
(17, 1145, 'Putra', 'P', 'Malang', '2021-01-08 02:17:00', 'Putra27', NULL, ''),
(18, 1111, 'Dewi', 'W', 'Bekasi', '2021-01-08 02:17:25', 'Dewi', '2021-01-08 02:19:02', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
