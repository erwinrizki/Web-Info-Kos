-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2014 at 01:02 PM
-- Server version: 5.5.33
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '4632fb8c6d4386e809759f8ae58e7a00');

-- --------------------------------------------------------

--
-- Table structure for table `data_kos`
--

CREATE TABLE IF NOT EXISTS `data_kos` (
  `id_kos` int(11) NOT NULL AUTO_INCREMENT,
  `untuk` varchar(10) NOT NULL,
  `namakos` varchar(50) NOT NULL,
  `alamatkos` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlahkamar` int(11) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `km` varchar(10) NOT NULL,
  `kasur` varchar(50) NOT NULL,
  `tv` varchar(10) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `gambar_kos` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `data_kos`
--

INSERT INTO `data_kos` (`id_kos`, `untuk`, `namakos`, `alamatkos`, `harga`, `jumlahkamar`, `luas`, `km`, `kasur`, `tv`, `ac`, `gambar_kos`, `username`) VALUES
(8, 'Laki-Laki', 'Kos Oplosan', 'Jalan Bima 1 no 45', '300000', 8, '3x3', 'Luar', 'Ono Tinggine', 'Tidak', 'Tidak', 'gambarkos/kos1.jpg', 'Erwin24'),
(9, 'Laki-Laki', 'Kos Keep Smile', 'Jalan Nakula no 5', '300000', 5, '3x3', 'Luar', 'Ono Tinggine', 'Tidak', 'Tidak', 'gambarkos/kos2.jpg', 'Erwin24'),
(10, 'Perempuan', 'Kos Idola', 'Jalan Nakula no 6', '400000', 6, '3x3', 'Luar', 'Springbed', 'Tidak', 'Tidak', 'gambarkos/kos3.jpg', 'AgungCemungut'),
(11, 'Perempuan', 'Kos Mantap', 'Jalan Arjuna no 40', '400000', 4, '3x3', 'Luar', 'Ono Tinggine', 'Tidak', 'Tidak', 'gambarkos/kos4.jpg', 'Sofia'),
(12, 'Laki-Laki', 'Kos Larang', 'Jalan Sadewa no 3', '400000', 12, '3x3', 'Luar', 'Ambrol', 'Tidak', 'Tidak', 'gambarkos/kos5.jpg', 'Erga'),
(13, 'Laki-Laki', 'Oplosan Versi Baru', 'Jalan Nakula Raya no 46', '400000', 5, '3x3', 'Dalam', 'Springbed', 'Ada', 'Tidak', 'gambarkos/3-1.jpg', 'Erwin24'),
(14, 'Perempuan', 'Kos Bang Jali', 'Jalan Arjuna no 23', '800000', 20, '4x3', 'Dalam', 'Ono Tinggine', 'Ada', 'Ada', 'gambarkos/kamar-kos.jpg', 'fadhelunyu');

-- --------------------------------------------------------

--
-- Table structure for table `data_order`
--

CREATE TABLE IF NOT EXISTS `data_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_kos` int(11) NOT NULL,
  `namapemesan` varchar(50) NOT NULL,
  `alamatpemesan` varchar(50) NOT NULL,
  `telppemesan` varchar(12) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `data_order`
--

INSERT INTO `data_order` (`id_order`, `id_kos`, `namapemesan`, `alamatpemesan`, `telppemesan`, `comment`, `waktu`) VALUES
(6, 8, 'Paiman', 'Semarang', '08995212356', 'aku pesen yang ini bos', '2014-01-01 17:17:16'),
(7, 8, 'Fadhel', 'Semarang', '08995212334', 'aku sing iki wae yo bro, tutupen botolmu tutupen oplosanmu', '2014-01-02 13:03:51'),
(8, 8, 'agung', 'puspogiwang', '079868547', 'pak, saya pesan yang ini... terimakasih', '2014-01-02 13:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempatl` varchar(50) NOT NULL,
  `tanggall` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `username`, `password`, `tempatl`, `tanggall`, `alamat`, `notelp`, `email`) VALUES
(1, 'Agung Rachmatullah', 'AgungCemungut', 'agung', 'Semarang', '2003-12-16', 'Jalan Nakulo Semarang', '085740123456', 'agung@yahoo.com'),
(4, 'Erwin Rizki', 'Erwin24', 'erwin', 'Rembang', '2013-07-24', 'Lasem Rembang', '085740123456', 'erwinrizki24@gmail.com'),
(5, 'Erga Aprina Sari', 'Erga', 'erga', 'Semarang', '1993-12-18', 'Jalan Nakulo', '085724222333', 'erga@gmail.com'),
(6, 'Sofia Listyaningrum', 'Sofia', 'oplosan', 'Semarang', '1993-10-12', 'Jalan Arjuna no 41', '089922345123', 'sofia@gmail.com'),
(8, 'niam', 'iam', '123', 'jepara', '2014-01-06', 'jepara', '085675764758', 'niam@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
