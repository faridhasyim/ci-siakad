-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 05:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbakademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Muhammad Farid Hasyim', 'hasyim', '74a686f8fa52d8ac4d19d570ab6711bd');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode_barang` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama`, `harga`) VALUES
('brg0982457634', 'Buku', 2500),
('brg643217723', 'Tempat Pensil', 10000),
('BRG7564', 'Tas Sekolah', 150000),
('jhe862153224', 'Sepatu', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `kode_penjualan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `qty` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`kode_penjualan`,`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nidn` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jnskel` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`nidn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `jnskel`, `telepon`) VALUES
('02020202020', 'Mosses Aidjili, M.Kom', 'Laki-laki', '085640265948'),
('10101010101', 'Widiyono, M.Kom', 'Laki-laki', '085640265948');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `kode_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(20) NOT NULL,
  `kode_makul` varchar(20) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `ruang` varchar(15) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  PRIMARY KEY (`kode_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `nidn`, `kode_makul`, `kelas`, `ruang`, `mulai`, `selesai`) VALUES
(1, '10101010101', 'K10025', '4P42A', 'Lab 7', '07:00:00', '11:00:00'),
(2, '15151515151', 'KD0084', '6P45A', 'Lab 1', '11:00:00', '13:00:00'),
(4, '', '', '5P41A', 'Lab 7', '11:00:00', '15:00:00'),
(5, '', '', '5P41A', 'Lab 7', '11:00:00', '15:00:00'),
(6, '10101010101', 'KD0078', '5P41A', 'Lab 7', '11:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jnskel` varchar(20) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jnskel`, `telepon`) VALUES
('14.240.0165', 'Mursalim', 'Laki-laki', '085649985665'),
('14.240.0251', 'Nissa', 'Perempuan', '085946552614'),
('14.240.0252', 'Muhammad Farid Hasyim', 'Laki-laki', '085870189329'),
('14.240.0282', 'Abdur Rozaq', 'Laki-laki', '085640125659');

-- --------------------------------------------------------

--
-- Table structure for table `makul`
--

CREATE TABLE IF NOT EXISTS `makul` (
  `kode_makul` varchar(10) NOT NULL,
  `makul` varchar(100) NOT NULL,
  `sks` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_makul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makul`
--

INSERT INTO `makul` (`kode_makul`, `makul`, `sks`) VALUES
('K10025', 'Pemrograman Android II', '4'),
('KD0078', 'Pemrograman Robot', '4'),
('KD0084', 'Pemrograman WEB III', '4');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `kode_penjualan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `qty` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`kode_penjualan`,`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kode_penjualan`, `tanggal`, `kode_barang`, `harga`, `qty`, `total`) VALUES
('1499219239', '2017-07-05', 'brg0982457634', 2500, 2, 5000),
('1499219239', '2017-07-05', 'brg643217723', 10000, 2, 20000),
('4523fsaar', '2017-07-01', 'brg0982457634', 2500, 2, 5000),
('kdpjl', '2017-06-07', 'brg643217723', 10000, 1, 10000),
('kode0384', '2017-06-05', 'brg0982457634', 2500, 3, 7500),
('PJL7645', '2017-07-21', 'jhe862153224', 150000, 2, 300000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
