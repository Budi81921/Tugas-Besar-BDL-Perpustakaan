-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 01:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_uai`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `DDC` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi_koleksi` tinytext NOT NULL DEFAULT '',
  `jumlah_eksemplar` mediumint(9) NOT NULL DEFAULT 0,
  `Penerbit` varchar(200) DEFAULT NULL,
  `penulis` varchar(200) NOT NULL,
  `status_koleksi` enum('Tersedia','Tidak Tersedia','Tersedia tetapi tidak bisa dipinjam') NOT NULL,
  `id_jk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`DDC`),
  ADD UNIQUE KEY `DDC` (`DDC`),
  ADD KEY `fk_jk_idjk` (`id_jk`);
ALTER TABLE `koleksi` ADD FULLTEXT KEY `koleks_search` (`judul`);
ALTER TABLE `koleksi` ADD FULLTEXT KEY `koleksi_search` (`deskripsi_koleksi`,`Penerbit`,`penulis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD CONSTRAINT `fk_jk_idjk` FOREIGN KEY (`id_jk`) REFERENCES `jenis_koleksi` (`id_jk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
