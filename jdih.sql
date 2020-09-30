-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 10:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk_jdih`
--

CREATE TABLE `produk_jdih` (
  `id_jdihproduk` int(11) NOT NULL,
  `jdihproduk_terbit` varchar(255) NOT NULL,
  `jdihproduk_jenis` varchar(255) NOT NULL,
  `jdihproduk_noperaturan` varchar(255) NOT NULL,
  `jdihproduk_judul` varchar(255) NOT NULL,
  `jdihproduk_singkatan` varchar(255) NOT NULL,
  `jdihproduk_tempatpenetapan` varchar(255) NOT NULL,
  `jdihproduk_sumberperaturan` varchar(255) NOT NULL,
  `jdihproduk_subjek` varchar(255) NOT NULL,
  `jdihproduk_status` varchar(255) NOT NULL,
  `jdihproduk_file` varchar(255) NOT NULL,
  `abstrak` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_jdih`
--

INSERT INTO `produk_jdih` (`id_jdihproduk`, `jdihproduk_terbit`, `jdihproduk_jenis`, `jdihproduk_noperaturan`, `jdihproduk_judul`, `jdihproduk_singkatan`, `jdihproduk_tempatpenetapan`, `jdihproduk_sumberperaturan`, `jdihproduk_subjek`, `jdihproduk_status`, `jdihproduk_file`, `abstrak`, `tanggal`) VALUES
(18, '2020', 'Peraturan Dprd', '1', 'aasdsssssssssssssssssssssssssssssssssdsad ooooooooo0 00000000000sssssssssss', 'asd', 'dsa', 'Pimpinan', 'asd', 'Aktif', 'Data_Transaksi.pdf', 'asd saddddddddddddddddddddda adddddddddddddddddddddddddddddddddddd', '2020-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '$2y$10$jd.qp./tybhYxslnpDoQxec9FwG0RNNmyzTdivMbiXF6rXWB43iVa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk_jdih`
--
ALTER TABLE `produk_jdih`
  ADD PRIMARY KEY (`id_jdihproduk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk_jdih`
--
ALTER TABLE `produk_jdih`
  MODIFY `id_jdihproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
