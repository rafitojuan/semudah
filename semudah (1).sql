-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2023 at 08:34 AM
-- Server version: 11.3.0-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semudah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jns_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_regist` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `telp` varchar(255) NOT NULL,
  `asal_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `nama`, `username`, `password`, `jns_kelamin`, `tgl_lahir`, `tgl_regist`, `telp`, `asal_kota`) VALUES
(2, 'admin@gmail.com', 'admin', 'admin', 'admin', 'pria', '2005-11-26', '2022-08-29 04:19:12', '089627572328', 'bogor'),
(3, 'fiki123@gmail.com', 'fiki', 'fiki', 'fiki', 'wanita', '2005-02-12', '2022-08-30 06:53:34', '0858276187', 'bogor'),
(4, 'firmansangar@gmail.com', 'firman', 'firman', 'firman', 'pria', '2004-11-20', '2022-09-01 06:30:30', '0896172617798', 'tanggerang'),
(5, 'yudhaganteng@gmail.com', 'yudha', 'yudha12', 'yudha12', 'wanita', '2006-09-02', '2022-09-06 23:45:23', '089517863988', ''),
(6, 'g@gmail.com', 'ghgtgfyu', 'gfv', 'yug', 'pria', '0000-00-00', '2022-09-15 04:07:44', '7765576678', ''),
(7, '123123@gmail.com', 'Putra', 'putra', '123', 'pria', '2023-08-30', '2023-08-30 05:06:29', '081290846339', ''),
(8, '1211@gmail.com', 'admin', 'admin', '123', 'pria', '2023-10-14', '2023-10-14 09:51:47', '211212', ''),
(9, 'juan@gmail.com', 'juan', 'juan', '123', 'pria', '0006-01-27', '2023-10-14 09:51:47', '123123', '');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan_pelanggan`
--

CREATE TABLE `keluhan_pelanggan` (
  `id_keluhan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `spesifikasi` text NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `layanan` varchar(255) DEFAULT '-',
  `nota_tambahan` text DEFAULT '-',
  `gambar` varchar(255) NOT NULL DEFAULT '-',
  `waktu_kunjungan` datetime NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `tgl_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_keluar` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `biaya` int(11) NOT NULL,
  `teknisi` varchar(255) NOT NULL,
  `kurir` varchar(255) NOT NULL,
  `bukti_dp` varchar(255) NOT NULL,
  `bukti_pelunasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keluhan_pelanggan`
--

INSERT INTO `keluhan_pelanggan` (`id_keluhan`, `nama_pelanggan`, `merek`, `spesifikasi`, `keluhan`, `layanan`, `nota_tambahan`, `gambar`, `waktu_kunjungan`, `alamat`, `telp`, `tgl_masuk`, `tgl_keluar`, `status`, `biaya`, `teknisi`, `kurir`, `bukti_dp`, `bukti_pelunasan`) VALUES
(14, 'ahmad', 'Acer', '', 'laptop lemot', 'tambah RAM,Aktivasi Windows,', '', '63252394ede7d.jpg', '2022-11-09 12:00:00', 'ja;lan ajaljdal f', '081297512', '2023-10-28 03:26:53', '2023-10-21 00:00:00', 4, 0, 'Rafito Juan Saputra', 'ojan', '632523e9c151d.jpg', '653c7f7ddfd49.jpg'),
(15, 'ahmad', 'asus unj', '', 'keyboard error', 'tambah RAM,', '', '633285034fdff.png', '2022-10-04 12:07:00', 'rawamangun', '08953213', '2023-08-30 05:17:54', '2023-08-24 00:00:00', 1, 0, 'Rafito Juan Saputra', 'bagas', '', ''),
(16, 'acumalaka', 'ASUS', '', 'keyboard error', 'Upgrade SSD,', '', '64eece0981f9d.png', '2023-08-30 12:04:00', 'jl aja', '90890', '2023-08-30 05:05:13', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(17, 'Juan ', 'Asus', 'Ram badag', '', 'Laptop rusak gabisa dipencet', '', '', '2023-10-14 00:00:00', 'jln warakas 7 gg 8 no 56', '', '2023-10-28 03:29:01', '0000-00-00 00:00:00', 3, 0, 'Firman', '', '', '653c7ffda6b07.jpg'),
(18, 'Juan ', 'Asus', 'Ram Badagbanget', '', 'Lpatop ngelag', '', '', '2023-10-14 00:00:00', 'jln warakas 7 gg 8 no 56', '', '2023-10-26 01:18:45', '2023-10-25 00:00:00', 4, 0, 'Firman', 'Dapa Sobek', '', ''),
(19, 'Juan ', 'Asus', 'SAAS', '', 'ASSA', '', '', '2023-10-14 00:00:00', 'jln warakas 7 gg 8 no 56', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(20, 'Juan ', 'dfs', 'dsds', '', 'assa', '', '', '2023-10-14 00:00:00', 'jln warakas 7 gg 8 no 56', '983904', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(22, 'Juan ', 'Asus', 'pito', '', 'Pito serpis', '', '', '2023-10-14 00:00:00', 'jln warakas 7 gg 8 no 56', '983904', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(23, 'Juan ', 'Asus X551BA', 'test', '', 'Windows 7, Office 2016', '', '', '2023-10-28 00:00:00', 'Test', '983904', '2023-10-21 13:06:46', '0000-00-00 00:00:00', 3, 0, 'Firman', '', '', ''),
(24, 'Juan ', 'Asus X551BA', 'test', '', 'test', '', '', '2023-10-19 00:00:00', 'Test', '983904', '2023-10-21 12:28:52', '0000-00-00 00:00:00', 1, 0, '', '', '', ''),
(25, 'Juan ', 'Xiaomi Ada Koh', 'Snapdragon', '', 'Lcd rusak koh', '', '', '2023-10-28 00:00:00', 'JL.MANGGA DUA', '983904', '2023-10-21 09:03:33', '0000-00-00 00:00:00', 5, 0, 'Firman', '', '', ''),
(26, 'Juan ', 'Lenovo Ideapad', 'test', '', 'test', '', '', '2006-02-01 00:00:00', 'test', '983904', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(36, 'Alex Meretz', 'Asus X551BA', 'Ram 8 GB, HDD 1TB, Amd A9 Series', '', 'Windows 11, Office 2019', '', '', '2023-10-30 00:00:00', 'Jalan Mangga', '08121232123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(38, 'Alex Meretz', 'HP 14', 'AMD RYZEN 3 330U RADEON VEGA 3', '', 'Kipas Macet', '', '', '2023-10-28 00:00:00', 'Jl.Mangga Dua', '08121232123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(39, 'Alex Meretz', 'Xiaomi Redmi Note 10s', 'Rosemary M610MKY MIUI 12', '', 'Overheat berlebihan', '', '', '2023-10-31 00:00:00', 'JALAN RAWABINIGUA', '08121232123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(40, 'Alex Meretz', '', 'Bulet Dikit', '', 'Desain Logo', '', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(41, 'Alex Meretz', '', 'Bulet Dikit', '', 'Desain Logo', '', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(44, 'Alex Meretz', '', 'Nezuko Dewasa', '', 'Desain Poster', '', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(46, 'Alex Meretz', '', 'Website Slot', '', 'Website Bisnis', '', '', '0000-00-00 00:00:00', '', '08121232123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', ''),
(47, 'Alex Meretz', 'TEST', 'TEST', '', 'Windows 7, Office 2010', '', '', '2006-01-27 00:00:00', 'test', '08121232123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `kode_teknisi` varchar(100) NOT NULL,
  `nama_teknisi` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`kode_teknisi`, `nama_teknisi`, `sekolah`, `jurusan`, `email`, `telp`, `tgl_lahir`, `jns_kelamin`, `created_at`) VALUES
('TK-01', 'Firman', 'SMKN 12', 'RPL', 'firmansangar@gmail.com', '085812091008', '2005-12-12', 'pria', '2022-09-01 07:40:55'),
('TK-07', 'Rafito Juan Saputra', 'SMKN 12', 'RPL', 'rafitokebab@gmail.com', '081298156771', '2004-09-28', 'pria', '2022-09-01 07:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id_timeline` int(2) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `komen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `judul`, `komen`) VALUES
(1, 'Sedang Dijemput', 'Teknisi Sedang Menuju Lokasi Anda');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `telp`, `gambar`) VALUES
(5, 'ahmad', 'ahmad@gmail.com', '123ahmad', '08581202', '63251ea133b5b.jpg'),
(6, 'acumalaka', 'jamalalkumail835@gmail.com', '123', '081290846339', '64eecd5fc4627.png'),
(7, 'Juan ', '123@gmail.com', '$2y$10$7dw1kdYZ8BKJidRjR2mB.eYhOGVREHlvKMOEhCws02ib9MxgyQsvm', '983904', '64f2ddb73bfd4.png'),
(8, 'Juan', '3333@gmail.com', '$2y$10$y5NevJwiB6b4xdaIGbOQ5uEZaYCCM77nccnoDuSlJtoSUnnZTwIwy', '08963', '64f2e1563f694.png'),
(9, 'Toriq', '399@gmail.com', '$2y$10$Vhox6BXHOuG12GOPWsOZ3.AsIjNJha.98dkd5b854W2zZ64KkCk0C', '0332823', '64f2e5bdb72f9.png'),
(10, 'johan', '321@gmail.com', '$2y$10$UjnyIpjjc5y61M0DGeTtGOLM3uPPM.cWME/HYQrh/ERjrj..nCc9y', '12342424', '64f6821f1c3f4.png'),
(11, 'Alex Meretz', 'laso@gmail.com', '$2y$10$C1PnBmzr84nxK45YUFl/ZOe3UOGdVE/n.Ork4czox9ntG02FcKUO.', '08121232123', '653a04e6488b8.jpg'),
(12, 'rafitojuan', 'rajuan@gmail.com', '$2y$10$MsT1mwXb6VcHbx7NCbPYMOSA8OCR3/mKYqYiFHMmAA1ZaiAb91wvW', '087733100503', '653ba11095731.jpg'),
(13, 'test', 'test@yahoo.com', '$2y$10$xY61JT3lbq9RbeekPDF3Bud4mqdDDagfaAgQPQWjP18yCT8eXw7AK', '081212', '653ba4ba386bb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `keluhan_pelanggan`
--
ALTER TABLE `keluhan_pelanggan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`kode_teknisi`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id_timeline`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keluhan_pelanggan`
--
ALTER TABLE `keluhan_pelanggan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id_timeline` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
