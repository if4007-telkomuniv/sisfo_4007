-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 02:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_4007`
--

-- --------------------------------------------------------

--
-- Table structure for table `historyinventoryin`
--

CREATE TABLE `historyinventoryin` (
  `idBarang` varchar(9) NOT NULL,
  `stockBarang` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyinventoryin`
--

INSERT INTO `historyinventoryin` (`idBarang`, `stockBarang`, `keterangan`, `tanggal`) VALUES
('INV00001', 12, 'kabel fiber optic', '2019-04-26 20:29:10'),
('INV00001', 10, 'kabel fiber optic', '2019-04-26 20:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `historyinventoryout`
--

CREATE TABLE `historyinventoryout` (
  `idBarang` varchar(9) NOT NULL,
  `stockBarang` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyinventoryout`
--

INSERT INTO `historyinventoryout` (`idBarang`, `stockBarang`, `keterangan`, `tanggal`) VALUES
('INV00001', 12, 'Digunakan untuk pemasangan jaringan area 01', '2019-04-26 20:31:31'),
('INV00001', 12, 'Digunakan untuk pemasangan jaringan area 01', '2019-04-26 20:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `idBarang` varchar(9) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `stockBarang` int(11) NOT NULL,
  `idSupplier` varchar(9) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`idBarang`, `namaBarang`, `stockBarang`, `idSupplier`, `keterangan`, `tanggal`) VALUES
('INV00001', 'Ribbon Boots FO Cable', 234, 'SP0001', 'kabel fiber optic', '2019-04-26 20:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` varchar(9) NOT NULL,
  `namaKategori` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`, `keterangan`) VALUES
('KT0000001', 'Router', ''),
('KT0000002', 'LAN Cable', ''),
('KT0000003', 'Fiber Optic', 'Kabel-kabel fiber optic\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` varchar(10) NOT NULL,
  `namaSupplier` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `idKategori` varchar(9) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `namaSupplier`, `deskripsi`, `idKategori`, `status`) VALUES
('SP0001', 'Shnihoo', 'Supplier kabel fiber optic indonesia', 'KT0000003', 1),
('SP0002', 'Shnihooo', 'Supplier kabel fiber optic indonesia	', 'KT0000003', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`),
  ADD KEY `idKategori` (`idKategori`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
