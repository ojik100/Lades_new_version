-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 16, 2021 at 03:14 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapak-desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_bumi`
--

CREATE TABLE `hasil_bumi` (
  `id` int(11) NOT NULL,
  `kd_provinsi` varchar(2) NOT NULL,
  `kd_kota` varchar(2) NOT NULL,
  `nam_desa` varchar(30) NOT NULL,
  `nama_petani` varchar(30) NOT NULL,
  `swadaya` varchar(1) NOT NULL,
  `alamat_petani` varchar(50) NOT NULL,
  `hp_pic` varchar(15) NOT NULL,
  `email_pic` varchar(50) NOT NULL,
  `luas_lahan` int(4) NOT NULL,
  `kd_komoditas` varchar(2) NOT NULL,
  `kd_subkomoditas` varchar(4) NOT NULL,
  `tgl_tanam` datetime NOT NULL,
  `estimasi_tgl_panen` datetime NOT NULL,
  `estimasi_hasil_panen` int(10) NOT NULL,
  `hasil_produksi` varchar(50) NOT NULL,
  `durasi` int(3) NOT NULL,
  `perusahaan_binaan` varchar(30) NOT NULL,
  `alamat_perusahaan_binaan` varchar(50) NOT NULL,
  `hp_pic_perusahaan` varchar(15) NOT NULL,
  `email_pic_perusahaan` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_changed` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_bumi`
--

INSERT INTO `hasil_bumi` (`id`, `kd_provinsi`, `kd_kota`, `nam_desa`, `nama_petani`, `swadaya`, `alamat_petani`, `hp_pic`, `email_pic`, `luas_lahan`, `kd_komoditas`, `kd_subkomoditas`, `tgl_tanam`, `estimasi_tgl_panen`, `estimasi_hasil_panen`, `hasil_produksi`, `durasi`, `perusahaan_binaan`, `alamat_perusahaan_binaan`, `hp_pic_perusahaan`, `email_pic_perusahaan`, `created_date`, `last_changed`, `status`) VALUES
(1, '', '', '', 'ojik', '', '', '', '', 12, '', '', '2021-04-16 13:34:03', '2021-04-16 13:34:03', 3, '', 3, '', '', '', '', '2021-04-16 13:34:03', '2021-04-16 13:34:03', ''),
(2, '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, '', '', 'WAKAN', 'raden', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(4, '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `kode_sektor`
--

CREATE TABLE `kode_sektor` (
  `kd_sektor` varchar(2) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_sektor`
--

INSERT INTO `kode_sektor` (`kd_sektor`, `nama`) VALUES
('01', 'Pertanian'),
('02', 'Perkebunan'),
('03', 'Perternakan'),
('04', 'Perikanan');

-- --------------------------------------------------------

--
-- Table structure for table `komoditas`
--

CREATE TABLE `komoditas` (
  `kd_komoditas` varchar(3) NOT NULL,
  `kode_sektor` varchar(2) NOT NULL,
  `nama_sektor` varchar(50) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `kode_sub_komoditas` varchar(4) NOT NULL,
  `name_sub_komoditas` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_changed` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komoditas`
--

INSERT INTO `komoditas` (`kd_komoditas`, `kode_sektor`, `nama_sektor`, `nama_komoditas`, `kode_sub_komoditas`, `name_sub_komoditas`, `created_date`, `last_changed`, `status`) VALUES
('OK0', '', 'ok', 'ok', '', 'ok', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kd_provinsi` int(2) NOT NULL,
  `kd_kota` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp_pic` varchar(15) NOT NULL,
  `email_pic` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_changed` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kd_provinsi`, `kd_kota`, `alamat`, `hp_pic`, `email_pic`, `pic`, `created_date`, `last_changed`, `status`) VALUES
(2, 2, 'dsd', 'iji', 'j@gmail.com', '0', '2021-04-06 01:03:58', '2021-04-21 01:03:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemerintah_desa`
--

CREATE TABLE `pemerintah_desa` (
  `id_desa` int(11) NOT NULL,
  `kd_provinsi` varchar(2) NOT NULL,
  `kd_kota` varchar(2) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `hp_pic` varchar(15) NOT NULL,
  `email_pic` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_changed` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemerintah_desa`
--

INSERT INTO `pemerintah_desa` (`id_desa`, `kd_provinsi`, `kd_kota`, `desa`, `hp_pic`, `email_pic`, `pic`, `created_date`, `last_changed`, `status`) VALUES
(1, '', '', '1ij', 'ijij', 'ijii', 'j', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `perusahan_binaan`
--

CREATE TABLE `perusahan_binaan` (
  `id_perusahaan_binaan` varchar(2) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahan` text NOT NULL,
  `no_hp_perusahaan` varchar(18) NOT NULL,
  `email_perusahaan` varchar(50) NOT NULL,
  `created_date` varchar(8) NOT NULL,
  `last_change` varchar(8) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id` int(11) NOT NULL,
  `kd_komoditas` int(2) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `usia` int(2) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `durasi` varchar(15) NOT NULL,
  `created_date` datetime NOT NULL,
  `lest_changed` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id`, `kd_komoditas`, `nama_komoditas`, `usia`, `hasil`, `durasi`, `created_date`, `lest_changed`, `status`) VALUES
(1, 0, 'ok', 0, 'ok', 'o', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_bumi`
--
ALTER TABLE `hasil_bumi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`kd_komoditas`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kd_provinsi`);

--
-- Indexes for table `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `perusahan_binaan`
--
ALTER TABLE `perusahan_binaan`
  ADD PRIMARY KEY (`id_perusahaan_binaan`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_bumi`
--
ALTER TABLE `hasil_bumi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
