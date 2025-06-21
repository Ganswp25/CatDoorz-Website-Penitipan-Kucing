-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 09:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catdoorz`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kandang`
--

CREATE TABLE `data_kandang` (
  `kodetransaksi` varchar(10) NOT NULL,
  `kodekandang` varchar(6) NOT NULL,
  `jumlahhewan` int(11) NOT NULL,
  `namahewan` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `paket` varchar(10) NOT NULL,
  `lamawaktu` varchar(15) NOT NULL,
  `waktu` int(11) NOT NULL,
  `tambahan` varchar(60) DEFAULT NULL,
  `tglmasuk` varchar(15) NOT NULL,
  `tglkeluar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kandang`
--

INSERT INTO `data_kandang` (`kodetransaksi`, `kodekandang`, `jumlahhewan`, `namahewan`, `kondisi`, `paket`, `lamawaktu`, `waktu`, `tambahan`, `tglmasuk`, `tglkeluar`) VALUES
('T003', 'B003', 3, 'coki,koko,kiki', 'Sehat', 'A', 'Harian', 5, 'Treats', '2023-08-11', '2023-09-15'),
('T004', 'B004', 3, 'coki,koko,kiki', 'Sehat', 'A', 'Harian', 5, 'Treats', '2023-08-11', '2023-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `data_reservasi`
--

CREATE TABLE `data_reservasi` (
  `kodetransaksi` varchar(6) NOT NULL,
  `namalengkap` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tglmasuk` varchar(15) NOT NULL,
  `tglkeluar` varchar(15) NOT NULL,
  `bayar` varchar(20) NOT NULL,
  `tambahan` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_reservasi`
--

INSERT INTO `data_reservasi` (`kodetransaksi`, `namalengkap`, `alamat`, `nohp`, `email`, `tglmasuk`, `tglkeluar`, `bayar`, `tambahan`, `total`) VALUES
('T003', 'Gani Satyawirawan Putra', 'hhshhs', '21231', '', '2023-08-11', '2023-09-15', '225000', '4000', '229000'),
('T004', 'Gani Satyawirawan Putra', 'hhshhs', '21231', '', '2023-08-11', '2023-09-15', '225000', '4000', '229000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kandang`
--
ALTER TABLE `data_kandang`
  ADD PRIMARY KEY (`kodetransaksi`);

--
-- Indexes for table `data_reservasi`
--
ALTER TABLE `data_reservasi`
  ADD PRIMARY KEY (`kodetransaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
