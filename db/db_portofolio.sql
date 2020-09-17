-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 04:22 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bahasa`
--

CREATE TABLE IF NOT EXISTS `tb_bahasa` (
  `id_bahasa` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bahasa`
--

INSERT INTO `tb_bahasa` (`id_bahasa`, `jumlah`, `label`) VALUES
(6, 30, 'Inggris'),
(7, 80, 'Indonesia'),
(8, 35, 'Mandarin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE IF NOT EXISTS `tb_biodata` (
  `id_biodata` int(10) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `ttl` date NOT NULL,
  `address` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `cv` text NOT NULL,
  `foto` text NOT NULL,
  `profesi` varchar(200) NOT NULL,
  `moto` text NOT NULL,
  `id_login` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id_biodata`, `nama`, `ttl`, `address`, `email`, `phone`, `cv`, `foto`, `profesi`, `moto`, `id_login`) VALUES
(1, 'Usep Gunawan', '1997-07-09', 'Kp. Sukamaju Kec. Cipatat Kab. Bandung Barat', 'usepgnwan@gmail.com', '+6283820765775', 'cv.pdf', 'usep.JPG', 'Web Developer ', 'test lorem ipsum cek cek 123 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id_login` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `konfirmasi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `konfirmasi`) VALUES
(1, 'usepgnwan', 'a8862a3118685cde50f0748160190427', 199700);

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE IF NOT EXISTS `tb_project` (
  `id_project` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_blog` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_project`
--

INSERT INTO `tb_project` (`id_project`, `jumlah`, `alamat`, `alamat_blog`) VALUES
(1, 3, '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sendemail`
--

CREATE TABLE IF NOT EXISTS `tb_sendemail` (
  `id_send` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` text NOT NULL,
  `pesan` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sendemail`
--

INSERT INTO `tb_sendemail` (`id_send`, `nama`, `email`, `subjek`, `pesan`, `date`) VALUES
(6, 'Usep Gunawan', 'kuskusprogram@gmail.com', 'vb', 'j', '2020-04-02 01:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skill`
--

CREATE TABLE IF NOT EXISTS `tb_skill` (
  `id_skill` int(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skill`
--

INSERT INTO `tb_skill` (`id_skill`, `jumlah`, `label`) VALUES
(2, 80, 'Microsoft Office'),
(9, 70, 'Photoshop'),
(14, 65, 'Bootstrap'),
(15, 60, 'CodeIgniter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bahasa`
--
ALTER TABLE `tb_bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `tb_sendemail`
--
ALTER TABLE `tb_sendemail`
  ADD PRIMARY KEY (`id_send`);

--
-- Indexes for table `tb_skill`
--
ALTER TABLE `tb_skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bahasa`
--
ALTER TABLE `tb_bahasa`
  MODIFY `id_bahasa` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id_biodata` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id_project` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_sendemail`
--
ALTER TABLE `tb_sendemail`
  MODIFY `id_send` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_skill`
--
ALTER TABLE `tb_skill`
  MODIFY `id_skill` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
