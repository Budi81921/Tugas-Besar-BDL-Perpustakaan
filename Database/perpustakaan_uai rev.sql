-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2023 pada 15.44
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_dp` int(4) NOT NULL,
  `DDC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_koleksi`
--

CREATE TABLE `jenis_koleksi` (
  `id_jk` int(11) NOT NULL,
  `nama_jk` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `Id_Peminjaman` varchar(10) NOT NULL,
  `Id_User` varchar(10) NOT NULL,
  `Id_Detail_Pinjaman` int(4) NOT NULL,
  `Tanggal_Peminjaman` date NOT NULL,
  `Tanggal_Pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_telp` int(12) NOT NULL,
  `password` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_dp`),
  ADD UNIQUE KEY `id_dp` (`id_dp`),
  ADD KEY `fk_dp_DDC` (`DDC`);

--
-- Indeks untuk tabel `jenis_koleksi`
--
ALTER TABLE `jenis_koleksi`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indeks untuk tabel `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`DDC`),
  ADD UNIQUE KEY `DDC` (`DDC`),
  ADD KEY `fk_jk_idjk` (`id_jk`);
ALTER TABLE `koleksi` ADD FULLTEXT KEY `koleks_search` (`judul`);
ALTER TABLE `koleksi` ADD FULLTEXT KEY `koleksi_search` (`deskripsi_koleksi`,`Penerbit`,`penulis`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`Id_Peminjaman`),
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_Detail_Pinjaman` (`Id_Detail_Pinjaman`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_dp` int(4) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `detail_peminjaman_ibfk_1` FOREIGN KEY (`DDC`) REFERENCES `koleksi` (`DDC`);

--
-- Ketidakleluasaan untuk tabel `koleksi`
--
ALTER TABLE `koleksi`
  ADD CONSTRAINT `fk_jk_idjk` FOREIGN KEY (`id_jk`) REFERENCES `jenis_koleksi` (`id_jk`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`Id_Detail_Pinjaman`) REFERENCES `detail_peminjaman` (`id_dp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
