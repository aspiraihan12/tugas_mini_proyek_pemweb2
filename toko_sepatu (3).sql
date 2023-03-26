-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 07:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'aspiraihan', 'aspi@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(1, 'rehan', 'rehan@gmail.com', 'costumer1', 0),
(3, '123', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0),
(4, 'aan', 'aan@gmail.com', '59c6f802008a2f455463881a9eec338d', 0),
(5, 'najwan@gmail.com', 'najwan@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(6, 'aspi', 'aspi@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(7, 'amat', 'amat@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(8, 'patimah', 'patimah@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(9, 'aspiraihan', 'as@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(10, 'ari', 'ari@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(11, 'akang', 'akang@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(12, 'bandi', 'ba@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(13, 'dum', 'dum@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(14, 'miranda', 'mira@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(15, '1234', '1234@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(16, '43', '43@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(17, '12', '12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(18, 'asdas', 'asdas@gmail.com', '0aa1ea9a5a04b78d4581dd6d17742627', 0),
(19, 'aspiraihan', 'aspiraihannn@gmail.com', '4b1421f74d7f44b9ee76a24ec1806942', 0),
(20, 'bruh@123.com', 'bruh@123.com', '546b7f2342d772f7568a0e8692d6d643', 0),
(21, 'c@123.com', 'c@123.com', 'bd075e55cf3949fe13158ac8b47b91ec', 0),
(22, 'd@123.com', 'd@123.com', 'a5702903fa5966799e9200b36d4ee7cc', 0),
(23, '123@456.co', '123@456.co', 'af05cbc07ef4abef4291aebfe75acd10', 0),
(24, '159159@159.co', '159159@159.co', 'de4989db09c567505ed67ead298ec146', 0),
(25, 'brojx@123.co', 'brojx@123.co', '5cadba34999db7d193fea73957e706a7', 0),
(26, 'xyz@123.123', 'xyz@123.123', 'b34df84cbf374df53e206b2eaf344631', 0),
(27, 'warning@warning.c', 'warning@warning.c', 'c92203856596ac1e8a4f06e7f95ba6be', 0),
(28, 'bsfjud@sdgj.1', 'bsfjud@sdgj.1', '3d95041140bac4f6c4e3511bfe45e28c', 0),
(29, '123@123.cozx', '123@123.cozx', 'b07c63be30d82848f38c5be8b6a3d213', 0),
(30, '123@123.cozxz', '123@123.cozxz', '3e3d5d3909ecf9e26f61a7e125d1595e', 0),
(31, 'anjay', 'anjay123@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(32, 'mantap', 'mantap@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(33, 'mmang', 'mmang@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(34, 'malam', 'malam@gmail.com', 'a4d1246865be651de324ce46b022e755', 0),
(35, 'asd', 'sanah@gmail.com', '5218acc88f079400bdddaf77fcdf5f48', 0),
(36, 'sd', 'sd@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(37, 'sda', 'sanah@gsmail.com', '202cb962ac59075b964b07152d234b70', 0),
(38, 'pedih', 'pedih@gmail.com', '424afddc966b9e446f14acea683cd33e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `distributor_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id`, `nama_barang`, `harga_barang`, `img`, `distributor_id`) VALUES
(1, 'Sepatu Yeezi', 950, 'adidass.jpeg', 1),
(2, 'Puma', 22000, 'puma.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_distributor` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `nama_distributor`, `alamat`, `telepon`) VALUES
(1, 'PT.ADIDASx', 'JAKARTA SELATAN BLOK M', '0852517737'),
(7, 'assss', 'aspi', '0852517737'),
(11, 'CERTIFICATE OF COMPETENCE Junior Web Developer', 'lokasi', '12');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) UNSIGNED NOT NULL,
  `data_barang_id` int(11) UNSIGNED NOT NULL,
  `total_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `data_barang_id`, `total_stok`) VALUES
(1, 1, 11),
(5, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) UNSIGNED NOT NULL,
  `costumer_id` int(11) UNSIGNED NOT NULL,
  `data_barang_id` int(11) UNSIGNED NOT NULL,
  `admin_id` int(11) UNSIGNED NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `costumer_id`, `data_barang_id`, `admin_id`, `jumlah_transaksi`, `tanggal_transaksi`) VALUES
(1, 1, 1, 1, 1, '2023-03-19'),
(7, 1, 1, 1, 0, '2023-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distributor_id` (`distributor_id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_barang_id` (`data_barang_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `costumer_id` (`costumer_id`),
  ADD KEY `data_barang_id` (`data_barang_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`distributor_id`) REFERENCES `distributor` (`id`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`data_barang_id`) REFERENCES `data_barang` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`costumer_id`) REFERENCES `costumer` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`data_barang_id`) REFERENCES `data_barang` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
