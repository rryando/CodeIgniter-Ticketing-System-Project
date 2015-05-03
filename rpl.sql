-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 03 Mei 2015 pada 04.00
-- Versi Server: 5.5.40
-- PHP Version: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('141a20633c03c80cb0a21e64377ce699', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1430647963, 'a:5:{s:9:"user_data";s:0:"";s:8:"username";s:5:"admin";s:6:"userid";s:2:"21";s:12:"is_logged_in";b:1;s:10:"privileges";s:5:"admin";}'),
('f5028c7c7e3e6d0ad8dc80400dd4656c', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1430650731, 'a:5:{s:9:"user_data";s:0:"";s:8:"username";s:5:"admin";s:6:"userid";s:2:"21";s:12:"is_logged_in";b:1;s:10:"privileges";s:5:"admin";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id_customer` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_identitas` int(25) NOT NULL,
  `hp` int(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `biaya` bigint(10) NOT NULL,
  `id_kamar` int(25) NOT NULL,
  `status` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_identitas`, `hp`, `alamat`, `email`, `jumlah`, `date_in`, `date_out`, `gambar`, `biaya`, `id_kamar`, `status`) VALUES
(34, 'hjghjghj', 567567567, 747456456, 'vvnmghm', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0, ''),
(35, 'dfgdfg', 345345, 68678, 'dfdfgdfgdfg', 'sdfsdf@sdf.com', 4, '2015-09-05', '2015-10-05', '', 0, 0, ''),
(36, 'fghgfgh', 5636456, 34534, 'fghfgh', 'sdffds@df.com', 4, '2015-03-05', '2015-04-05', '', 950000, 0, 'Lunas'),
(37, 'fghfgh', 4534543, 213432, 'dfgdfg', 'sdf@dslkfj.com', 3, '2015-04-05', '2015-05-05', '', 225000, 0, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
`id_kamar` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `email` varchar(23) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nomor`, `kapasitas`, `harga`, `email`, `status`) VALUES
(1, 1, 4, '2', '0', '3'),
(13, 13, 2, 'MOGOK NGODING', 'admin', ''),
(14, 1, 2, '3', '', '4'),
(15, 132, 4, '23', '', '21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(9) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `privileges` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `privileges`) VALUES
(21, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
