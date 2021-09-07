-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2019 at 12:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datagt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` varchar(6) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `tgl_lahir`, `jk`, `no_tlp`, `email`, `alamat`) VALUES
('', '', '0000-00-00', '', '', '', ''),
('AGT001', 'Muhamad Nurafiq', '1998-06-27', 'L', '081259144476', 'smpn35cdr@gmail.com', 'Jln. H Mesir II No.25 RT005/010 Pasar Minggu'),
('AGT002', 'Rahma Ariningsih', '2001-07-14', 'P', '08182109190', 'rahmaari@gmail.com', 'Jln. H Mesir II No.25 RT005/010 Pasar Minggu'),
('AGT003', 'Ayu Ariesta ', '1997-03-03', 'P', '081265317367', 'ayu2716@gmail.com', 'Jln. H Mesir I No.3 RT008/010 Pasar Minggu'),
('AGT004', 'Fikri Ali Santoso', '1998-06-22', 'L', '081216721726', 'fikriali@gmail.com', 'Jln. H Mesir II No. 16 RT005/010'),
('AGT005', 'Yasir', '2015-08-21', 'L', '081278123137', 'yasir@gmail.com', 'Jln. Papaya II'),
('AGT006', 'Nuraini', '2015-06-17', 'P', '081213137183', 'nuraini@gmail.com', 'Jln. Mampang'),
('AGT007', 'Muhamad Yusuf Ardiansyah', '1998-07-23', 'L', '081231763173', 'yusufad23@gmail.com', 'Jln. Mangga VI No.1 Pasar Minggu ');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` varchar(7) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `status` varchar(2) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `checkbox1` varchar(255) NOT NULL,
  `checkbox2` varchar(255) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
