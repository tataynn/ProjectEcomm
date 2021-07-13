-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 04:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `foto_produk`, `nama_produk`, `harga`, `deskripsi`) VALUES
(1, 'produk1.jpg', 'Skin Goals Brightness', 20000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aspernatur ipsam sed, illum quasi illo a odio natus ipsa ex odit. Harum culpa labore sint dolore. Dicta, ipsa! Obcaecati, autem!\r\n'),
(2, 'produk2.jpg', 'Mugwortella Charcoal', 30000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aspernatur ipsam sed, illum quasi illo a odio natus ipsa ex odit. Harum culpa labore sint dolore. Dicta, ipsa! Obcaecati, autem!\r\n'),
(3, 'produk3.jpg', 'Barrier Serum', 15000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aspernatur ipsam sed, illum quasi illo a odio natus ipsa ex odit. Harum culpa labore sint dolore. Dicta, ipsa! Obcaecati, autem!\r\n'),
(4, 'produk4.jpg', 'Low Ph Gentle Jelly Cleanser', 20000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aspernatur ipsam sed, illum quasi illo a odio natus ipsa ex odit. Harum culpa labore sint dolore. Dicta, ipsa! Obcaecati, autem!\r\n'),
(5, 'produk5.jpg', 'Ceramic Skin', 15000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aspernatur ipsam sed, illum quasi illo a odio natus ipsa ex odit. Harum culpa labore sint dolore. Dicta, ipsa! Obcaecati, autem!\r\n'),
(6, 'produk6.jpg', 'Copy Paste Breathable', 15000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aspernatur ipsam sed, illum quasi illo a odio natus ipsa ex odit. Harum culpa labore sint dolore. Dicta, ipsa! Obcaecati, autem!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis` enum('user','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `jenis`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
