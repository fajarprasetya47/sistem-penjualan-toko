-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 10:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasweb-toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(9) NOT NULL,
  `diskon` int(9) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `harga`, `diskon`) VALUES
(1, 'T-Shirt Sokinz Red', 'Baju/Kaos', 80000, 0),
(2, 'Jeans Black', 'Celana', 150000, 5000),
(3, 'Topi Sokinz Blue', 'Topi', 20000, 0),
(4, 'Topi Sokinz Hitam', 'Topi', 20000, 0),
(5, 'Hoodie Sokinz Green', 'Jaket/Hoodie', 130000, 0),
(6, 'Hoodie Sokinz White', 'Jaket/Hoodie', 135000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama`, `email`, `username`, `password`) VALUES
(1, 'japrasetya', 'japra@email.com', 'japrasetya', '123'),
(2, 'hafil', 'hafil123@email.com', 'hafil123', '123'),
(3, 'dony', 'dony123@email.com', 'dony123', '123'),
(4, 'udin', 'udin123@email.com', 'udin123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(6) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(6) NOT NULL,
  `total` varchar(10) NOT NULL,
  `kasir` varchar(30) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `nama_barang`, `jumlah`, `total`, `kasir`, `waktu`) VALUES
(1, 'Red-Blood', 2, '160000', 'dony123', '2021-05-30 23:03:51'),
(2, 'Topi Blue', 1, '17000', 'dony123', '2021-05-30 23:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `troli`
--

CREATE TABLE `troli` (
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `jumlah` int(6) NOT NULL,
  `subtotal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`,`username`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
