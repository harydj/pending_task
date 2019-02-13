-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 01:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pending_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_task`
--

CREATE TABLE `jenis_task` (
  `jns_task_id` int(11) NOT NULL,
  `ket_task` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_task`
--

INSERT INTO `jenis_task` (`jns_task_id`, `ket_task`) VALUES
(1, 'Task Bulan Ini'),
(2, 'Task Carry Over'),
(3, 'Task Di luar Tiket');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `id_task` int(11) NOT NULL,
  `task` text NOT NULL,
  `aplikasi` varchar(15) NOT NULL,
  `pj` varchar(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `mandays` varchar(5) NOT NULL,
  `frekuensi` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `prioritas` varchar(20) NOT NULL,
  `status_sekarang` float NOT NULL,
  `status_liniear` float NOT NULL,
  `done` varchar(5) NOT NULL,
  `keterangan` text NOT NULL,
  `jml_mandays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_tasklist`
--

CREATE TABLE `t_tasklist` (
  `task_id` int(11) NOT NULL,
  `task_name` int(255) NOT NULL,
  `aplikasi` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `kategori` enum('PERMINTAAN','GANGGUAN') NOT NULL,
  `mandays` enum('Y','T') NOT NULL,
  `frekuensi` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `prioritas` enum('High','Mediun','Low') NOT NULL,
  `status_sekarang` float NOT NULL,
  `status_liniear` float NOT NULL,
  `done` enum('Yes','No') NOT NULL,
  `keterangan` text,
  `jml_mandays` int(11) DEFAULT NULL,
  `jns_task_id` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`nik`, `nama`, `username`, `password`, `level`) VALUES
('1981', 'Tresnaning Arifiyah', 'TAF', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_task`
--
ALTER TABLE `jenis_task`
  ADD PRIMARY KEY (`jns_task_id`),
  ADD KEY `jns_task_id` (`jns_task_id`);

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id_task`);

--
-- Indexes for table `t_tasklist`
--
ALTER TABLE `t_tasklist`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
