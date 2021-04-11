-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2014 at 07:46 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayah`
--

CREATE TABLE IF NOT EXISTS `ayah` (
  `no_daftar` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(125) NOT NULL,
  `penghasilan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE IF NOT EXISTS `ibu` (
  `no_daftar` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(125) NOT NULL,
  `penghasilan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_un`
--

CREATE TABLE IF NOT EXISTS `nilai_un` (
  `no_daftar` varchar(10) DEFAULT NULL,
  `bing` float NOT NULL,
  `bind` float NOT NULL,
  `mat` float NOT NULL,
  `sains` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `no_daftar` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `jenis_kel` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `alamat_sekolah` varchar(150) NOT NULL,
  `jlh_saudara` int(4) NOT NULL,
  `anak_ke` int(4) NOT NULL,
  `tanggungan_org_tua` int(3) NOT NULL,
  PRIMARY KEY (`no_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
