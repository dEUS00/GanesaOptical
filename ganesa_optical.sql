-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 12:19 PM
-- Server version: 10.1.8-MariaDB-log
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ganesa_optical`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_customer`
--

CREATE TABLE `t_customer` (
  `nama_kustomer` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `keterangan_penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_customer`
--

INSERT INTO `t_customer` (`nama_kustomer`, `nomor_hp`, `keterangan_penyakit`) VALUES
('Felix', '08161955341', 'Mines 1'),
('Calvin', '08161955342', 'Mines 8');

-- --------------------------------------------------------

--
-- Table structure for table `t_frame`
--

CREATE TABLE `t_frame` (
  `nama_frame` varchar(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_frame`
--

INSERT INTO `t_frame` (`nama_frame`, `stok`, `harga`) VALUES
('Levis', 10, 1500000),
('Tag Heuer', 100, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `t_lensa`
--

CREATE TABLE `t_lensa` (
  `nama_lensa` varchar(255) NOT NULL,
  `ukuran_lensa` varchar(255) NOT NULL,
  `jenis_lensa` varchar(255) NOT NULL,
  `harga_lensa` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lensa`
--

INSERT INTO `t_lensa` (`nama_lensa`, `ukuran_lensa`, `jenis_lensa`, `harga_lensa`) VALUES
('Carl Zeiss M10', 'Mines 10', 'Progresif', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `t_pemesanan`
--

CREATE TABLE `t_pemesanan` (
  `nama_frame` varchar(255) NOT NULL,
  `nama_lensa` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pemesanan`
--

INSERT INTO `t_pemesanan` (`nama_frame`, `nama_lensa`, `nomor_hp`, `jumlah`, `harga`, `tanggal`) VALUES
('Tag Heuer', 'Carl Zeiss M10', '08161955341', 1, 5000000, '2016-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `t_reparasi`
--

CREATE TABLE `t_reparasi` (
  `id_reparasi` int(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_reparasi`
--

INSERT INTO `t_reparasi` (`id_reparasi`, `nomor_hp`, `harga`, `keterangan`, `tanggal`) VALUES
(1, '08161955342', 50000, 'Kencengin frame', '0000-00-00'),
(2, '08161955341', 100000, 'Benerin lensa', '2016-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`nomor_hp`);

--
-- Indexes for table `t_frame`
--
ALTER TABLE `t_frame`
  ADD PRIMARY KEY (`nama_frame`);

--
-- Indexes for table `t_lensa`
--
ALTER TABLE `t_lensa`
  ADD PRIMARY KEY (`nama_lensa`);

--
-- Indexes for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  ADD PRIMARY KEY (`nama_frame`,`nama_lensa`,`nomor_hp`,`tanggal`),
  ADD KEY `t_pemesanan2` (`nomor_hp`),
  ADD KEY `t_pemesanan3` (`nama_lensa`);

--
-- Indexes for table `t_reparasi`
--
ALTER TABLE `t_reparasi`
  ADD PRIMARY KEY (`id_reparasi`,`tanggal`),
  ADD KEY `nomor_hp` (`nomor_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_reparasi`
--
ALTER TABLE `t_reparasi`
  MODIFY `id_reparasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  ADD CONSTRAINT `t_pemesanan1` FOREIGN KEY (`nama_frame`) REFERENCES `t_frame` (`nama_frame`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pemesanan2` FOREIGN KEY (`nomor_hp`) REFERENCES `t_customer` (`nomor_hp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pemesanan3` FOREIGN KEY (`nama_lensa`) REFERENCES `t_lensa` (`nama_lensa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_reparasi`
--
ALTER TABLE `t_reparasi`
  ADD CONSTRAINT `t_reparasi1` FOREIGN KEY (`nomor_hp`) REFERENCES `t_customer` (`nomor_hp`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
