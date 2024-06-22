-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 01:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nim` varchar(256) NOT NULL,
  `ttl` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `pendidikan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `foto`, `nama`, `nim`, `ttl`, `alamat`, `pendidikan`) VALUES
(6, 'inputImage/foto azmii.jpg', 'Febri Azimi Alfirmansyah', '220602020', 'Malang, 04 Februari 2004', 'Jl.Panglima Sudirman Blk GT No.41 Gresik', 'Universitas Muhammadiyah Gresik'),
(7, 'inputImage/profil wahab.jpg', 'Muhammad Nur Wahab', '220602033', 'Gresik, 7 April 2004', 'Jl.Panglima Sudirman Gang 6 No 29 Gresik', 'Universitas Muhammadiyah Gresik'),
(8, 'inputImage/foto askal.jpg', 'Aksyal Syahputra', '220602044', 'Birmingham,31 Februari 2005', 'Indonesia', 'Universitas Muhammadiyah Gresik'),
(9, 'inputImage/foto sultan.jpg', 'Mochammad Sultan Alfiansyah', '220602041', 'Gresik, 16 oktober 2003', 'JL. Raya Kepatihan Menganti, Gresik', 'Universitas Muhammadiyah Gresik'),
(10, 'inputImage/foto dias.jpg', 'Dias Pradana', '220602022', 'Gresik, 20 Mei 2004', 'Jl. Dr. Wahidin S. H Gresik', 'Universitas Muhammadiyah Gresik'),
(11, 'inputImage/foto iman.jpg', 'Muhammad Iman Arifudin', '220602026', 'Gresik, 05 Juli 2004', 'Jl.Dr.Sutomo', 'Universitas Muhammadiyah Gresik'),
(12, 'inputImage/foto nata.jpg', 'M Javier Asmadinata', '220602010', 'Surabaya, 23 Januari 2004', 'Oma Indah Menganti blok H2 no 07 Gresik', 'Universitas Muhammadiyah Gresik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
