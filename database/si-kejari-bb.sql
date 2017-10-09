-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 07:20 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si-kejari-bb`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal`
--

CREATE TABLE `asal` (
  `id_asal` int(20) NOT NULL,
  `nama_asal` varchar(50) NOT NULL,
  `keterangan_asal` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ba_18`
--

CREATE TABLE `ba_18` (
  `id_ba_18` int(11) NOT NULL,
  `tanggal_ba_18` date NOT NULL,
  `jaksa_ba_18` int(11) NOT NULL,
  `saksi_1_nama_ba_18` varchar(100) NOT NULL,
  `saksi_1_pangkat_ba_18` varchar(100) NOT NULL,
  `saksi_1_jabatan_ba_18` varchar(100) NOT NULL,
  `saksi_2_nama_ba_18` varchar(100) NOT NULL,
  `saksi_2_pangkat_ba_18` varchar(100) NOT NULL,
  `saksi_2_jabatan_ba_18` varchar(100) NOT NULL,
  `jenis_ba_18` int(11) NOT NULL,
  `sp_ba_18` date NOT NULL,
  `terdakwa_ba_18` varchar(100) NOT NULL,
  `pasal_ba_18` varchar(20) NOT NULL,
  `register_ba_18` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `benda`
--

CREATE TABLE `benda` (
  `id_benda` int(11) NOT NULL,
  `jumlah_benda` int(11) NOT NULL,
  `satuan_benda` int(11) NOT NULL,
  `nama_benda` text NOT NULL,
  `ba_18_benda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_pangkat_golongan` varchar(100) NOT NULL,
  `golongan_golongan` varchar(11) NOT NULL,
  `ruang_golongan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `nama_pangkat_golongan`, `golongan_golongan`, `ruang_golongan`) VALUES
(1, 'Juru Muda', 'I', 'A'),
(2, 'Juru Muda Tingkat I', 'I', 'B'),
(3, 'Juru', 'I', 'C'),
(4, 'Juru Tingkat I', 'I', 'D'),
(5, 'Yuana Darma', 'II', 'A'),
(6, 'Muda Darma', 'II', 'B'),
(7, 'Madya Darma', 'II', 'C'),
(8, 'Sena Darma', 'II', 'D'),
(9, 'Ajun Jaksa Madya ', 'III', 'A'),
(10, 'Ajun Jaksa', 'III', 'B'),
(11, 'Jaksa Pratama', 'III', 'C'),
(12, 'Jaksa Muda', 'III', 'D'),
(13, 'Jaksa Madya', 'IV', 'A'),
(14, 'Jaksa Utama Pratama ', 'IV', 'B'),
(15, 'Jaksa Madya', 'IV', 'C'),
(16, 'Jaksa Utama Madya', 'IV', 'D'),
(17, 'Jaksa Utama', 'IV', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `jaksa`
--

CREATE TABLE `jaksa` (
  `id_jaksa` int(11) NOT NULL,
  `nama_jaksa` varchar(100) NOT NULL,
  `NIP_jaksa` varchar(100) NOT NULL,
  `golongan_jaksa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL,
  `keterangan_jenis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `tempat_lahir_pegawai` varchar(50) NOT NULL,
  `tanggal_lahir_pegawai` date NOT NULL,
  `alamat_pegawai` text NOT NULL,
  `golongan_pegawai` int(11) NOT NULL,
  `tmt_golongan_pegawai` date NOT NULL,
  `tmt_cpns_pegawai` date NOT NULL,
  `tmt_pns_pegawai` date NOT NULL,
  `tmt_jabatan_pegawai` date NOT NULL,
  `pendidikan_terakhir_pegawai` varchar(100) NOT NULL,
  `unit_kerja_pegawai` text NOT NULL,
  `instansi_kerja_pegawai` text NOT NULL,
  `kedudukan_hukum_pegawai` enum('aktif','tidak aktif') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_pegawai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `NIP`, `nama_pegawai`, `tempat_lahir_pegawai`, `tanggal_lahir_pegawai`, `alamat_pegawai`, `golongan_pegawai`, `tmt_golongan_pegawai`, `tmt_cpns_pegawai`, `tmt_pns_pegawai`, `tmt_jabatan_pegawai`, `pendidikan_terakhir_pegawai`, `unit_kerja_pegawai`, `instansi_kerja_pegawai`, `kedudukan_hukum_pegawai`, `username`, `password`, `role_pegawai`) VALUES
(1, '198104132005011001', 'Abdurrohim Saifi', 'Boyolalii', '1996-06-20', 'Ngoresan, Jebres, Surakarta', 14, '2017-04-01', '2005-01-01', '2006-02-01', '2016-09-01', 'S-1 Ilmu Komputer', 'Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Sebelas Maret', 'Kementrian Riset, Teknologi, dan Pendidikan Tinggii', 'aktif', 'adminkejari', 'b2c0ca1605f73973252d7467534b1805', 1),
(2, '123321123', 'asd', 'asd', '2017-10-11', 'asd', 6, '2017-10-05', '2017-10-05', '2017-10-05', '2017-10-05', 'asd', 'asd', 'asd', 'aktif', 'asd', 'asd', 2),
(3, '123456789101112131', 'Arinta Saskya', 'Boyolali', '1996-07-31', 'Boyolali', 11, '2017-10-17', '2017-09-26', '2017-10-04', '2017-10-31', 'D3 Teknik Informatika', '-', '-', 'aktif', 'u1507282376', 'ce7f826e9c83fa7a90696cd550f98e59', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(20) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nama_satuan`) VALUES
(1, 'buah'),
(2, 'unit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`id_asal`);

--
-- Indexes for table `ba_18`
--
ALTER TABLE `ba_18`
  ADD PRIMARY KEY (`id_ba_18`),
  ADD KEY `jaksa_ba_18` (`jaksa_ba_18`),
  ADD KEY `jenis_ba_18` (`jenis_ba_18`);

--
-- Indexes for table `benda`
--
ALTER TABLE `benda`
  ADD PRIMARY KEY (`id_benda`),
  ADD KEY `ba_18_benda` (`ba_18_benda`),
  ADD KEY `satuan_benda` (`satuan_benda`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `jaksa`
--
ALTER TABLE `jaksa`
  ADD PRIMARY KEY (`id_jaksa`),
  ADD KEY `golongan_jaksa` (`golongan_jaksa`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_pegawai` (`role_pegawai`),
  ADD KEY `golongan_pegawai` (`golongan_pegawai`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asal`
--
ALTER TABLE `asal`
  MODIFY `id_asal` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ba_18`
--
ALTER TABLE `ba_18`
  MODIFY `id_ba_18` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `benda`
--
ALTER TABLE `benda`
  MODIFY `id_benda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jaksa`
--
ALTER TABLE `jaksa`
  MODIFY `id_jaksa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ba_18`
--
ALTER TABLE `ba_18`
  ADD CONSTRAINT `ba_18_ibfk_1` FOREIGN KEY (`jaksa_ba_18`) REFERENCES `jaksa` (`id_jaksa`),
  ADD CONSTRAINT `ba_18_ibfk_2` FOREIGN KEY (`jenis_ba_18`) REFERENCES `jenis` (`id_jenis`);

--
-- Constraints for table `benda`
--
ALTER TABLE `benda`
  ADD CONSTRAINT `benda_ibfk_1` FOREIGN KEY (`ba_18_benda`) REFERENCES `ba_18` (`id_ba_18`),
  ADD CONSTRAINT `benda_ibfk_2` FOREIGN KEY (`satuan_benda`) REFERENCES `satuan` (`id_satuan`);

--
-- Constraints for table `jaksa`
--
ALTER TABLE `jaksa`
  ADD CONSTRAINT `jaksa_ibfk_1` FOREIGN KEY (`golongan_jaksa`) REFERENCES `golongan` (`id_golongan`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`role_pegawai`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`golongan_pegawai`) REFERENCES `golongan` (`id_golongan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
