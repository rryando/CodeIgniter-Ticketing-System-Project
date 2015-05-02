-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2015 at 03:03 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rploot`
--
CREATE DATABASE IF NOT EXISTS `rploot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rploot`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('10f9ce8a7a7e6d9c2966144411bddca5', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430552582, ''),
('369b1e8826a04ff70b0d974bf39861d8', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430541071, ''),
('3779add517a4e171f974dc7795031228', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430571202, ''),
('76585860e97465e1988a8118e919d870', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430543041, ''),
('d7898b130fec583a44fd74d1c4014beb', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430549383, ''),
('f18a4f3232e8ffc4eca0ca768fd051e6', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430563596, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_identitas`, `hp`, `alamat`, `email`, `jumlah`, `date_in`, `date_out`, `gambar`, `biaya`, `id_kamar`) VALUES
(1, '0', 0, 0, '', '', 0, '0000-00-00', '0000-00-00', '', 0, 0),
(2, '0', 0, 0, '', '', 0, '0000-00-00', '0000-00-00', '', 0, 0),
(3, '0', 0, 0, '', '', 0, '0000-00-00', '0000-00-00', '', 0, 0),
(4, 'sdfsdf', 0, 324, '', '', 0, '0000-00-00', '0000-00-00', '', 0, 0),
(5, 'sdfsdf', 0, 234234, '', 'sdf@dslkfj.com', 0, '0000-00-00', '0000-00-00', '', 0, 0),
(6, 'sdfsdf', 0, 234234, '', 'sdf@dslkfj.com', 0, '0000-00-00', '0000-00-00', '', 0, 0),
(7, 'sdgddf', 0, 345345, '', 'sdfsdf@sdf.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(8, 'sdfsdf', 0, 234234, '', 'sdfsdf@sdf.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(9, '0', 0, 0, '', '0', 0, '0000-00-00', '0000-00-00', '', 0, 0),
(10, 'adam', 0, 8234, '', 'asd@sd.com', 3, '0000-00-00', '0000-00-00', '', 0, 0),
(11, 'svdsd', 0, 234234, '', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(12, 'adam', 0, 2147483647, '', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(13, 'asdsdf', 0, 234234, '', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(14, 'sdfsdf', 0, 234234, '', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(15, 'sdfsdf', 0, 123123, '', 'sdf@dslkfj.com', 4, '2015-02-04', '0000-00-00', '', 0, 0),
(16, 'skfsdf', 0, 234, '', 'asd@sd.com', 3, '2015-10-04', '0000-00-00', '', 0, 0),
(17, 'budi', 0, 123123, '', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(18, 'budi', 0, 23, '', 'sdfsdf@sdf.com', 4, '2015-05-04', '0000-00-00', '', 0, 0),
(19, 'sfsjdflksjdflkj', 0, 234, '', 'sdf@dslkfj.com', 4, '2015-04-04', '0000-00-00', '', 0, 0),
(20, 'asfdxfvsdf', 0, 0, '', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(21, 'ooooo', 0, 999999, '', 'oo@iii.com', 4, '2015-04-29', '0000-00-00', '', 0, 0),
(22, 'sdgsdg', 0, 234234, '', 'sdfsdf@sdf.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(23, 'xdfsd', 0, 234, '', 'sd@sd.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(24, 'hhhh', 0, 564564, '', 'sdf@dslkfj.com', 4, '2015-02-05', '0000-00-00', '', 0, 0),
(25, 'tedy', 0, 32235234, '', 'asd@sd.com', 4, '2015-05-09', '0000-00-00', '', 0, 0),
(26, 'ioooio', 0, 23234, '', 'sd@sd.com', 4, '2015-01-05', '0000-00-00', '', 0, 0),
(27, 'modal', 0, 5353253, '', 'sdfsdf@sdf.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(28, 'gggg', 0, 0, '', 'sdfsdf@sdf.com', 4, '2015-02-05', '0000-00-00', '', 0, 0),
(29, 'ffff', 0, 33333, '', 'sdfsdf@sdf.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(30, 'ffff', 0, 33333, '', 'dfd@dfg.vi', 3, '2015-02-05', '0000-00-00', '', 0, 0),
(31, 'hhhhh', 0, 445, '', 'dfd@dfg.vi', 4, '2015-02-05', '0000-00-00', '', 0, 0),
(32, 'jkljklljkljkl', 0, 234234, '', 'sdf@dslkfj.com', 4, '2015-04-05', '0000-00-00', '', 0, 0),
(33, 'ytryytytyuytu', 2147483647, 324234, 'dfdfgdfgdfg', 'sdf@dslkfj.com', 4, '2015-09-05', '0000-00-00', '', 0, 0),
(34, 'hjghjghj', 567567567, 747456456, 'vvnmghm', 'sdf@dslkfj.com', 4, '0000-00-00', '0000-00-00', '', 0, 0),
(35, 'dfgdfg', 345345, 68678, 'dfdfgdfgdfg', 'sdfsdf@sdf.com', 4, '2015-09-05', '2015-10-05', '', 0, 0),
(36, 'fghgfgh', 5636456, 34534, 'fghfgh', 'sdffds@df.com', 4, '2015-03-05', '2015-04-05', '', 0, 0),
(37, 'fghfgh', 4534543, 213432, 'dfgdfg', 'sdf@dslkfj.com', 3, '2015-04-05', '2015-05-05', '', 225000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `harga` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `privileges` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
