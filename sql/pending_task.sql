-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 08:54 AM
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
-- Table structure for table `costsaving`
--

CREATE TABLE `costsaving` (
  `costsaving_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `sum_mandays` int(11) NOT NULL,
  `cost_saving` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leveltask`
--

CREATE TABLE `leveltask` (
  `leveltask_id` int(11) NOT NULL,
  `detail_level` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leveltask`
--

INSERT INTO `leveltask` (`leveltask_id`, `detail_level`) VALUES
(1, 'Target tanggal baru'),
(2, 'Revisi Tanggal ke 1'),
(3, 'Revisi tanggal ke 2'),
(4, 'Revisi tanggal ke 3');

-- --------------------------------------------------------

--
-- Table structure for table `tasklists`
--

CREATE TABLE `tasklists` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(150) NOT NULL,
  `application` varchar(15) NOT NULL,
  `pj` varchar(10) NOT NULL,
  `category` varchar(15) NOT NULL,
  `mandays` varchar(5) NOT NULL,
  `frekuensi` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `priority` varchar(10) NOT NULL,
  `stat_now` int(11) NOT NULL,
  `stat_lin` int(11) NOT NULL,
  `done` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `sum_mandays` int(11) NOT NULL,
  `level_task` int(11) NOT NULL,
  `type_task` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasklists`
--

INSERT INTO `tasklists` (`task_id`, `task_name`, `application`, `pj`, `category`, `mandays`, `frekuensi`, `start_date`, `end_date`, `priority`, `stat_now`, `stat_lin`, `done`, `description`, `sum_mandays`, `level_task`, `type_task`) VALUES
(7, 'Penambahan modul FPP pajak !!!', 'AFIS', 'TAF', 'Permintaan', 'Yes', 2, '2019-02-01', '2019-02-15', 'Medium', 50, 80, 'No', 'Kontruksi Aplikasi', 20, 1, 2),
(10, 'Perbaikan modul FPT', 'ISDS', 'RKA', 'Permintaan', 'Yes', 1, '2018-03-07', '2018-03-16', 'Medium', 100, 100, 'Yes', '', 9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `typetask`
--

CREATE TABLE `typetask` (
  `typetask_id` int(11) NOT NULL,
  `detail_type` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typetask`
--

INSERT INTO `typetask` (`typetask_id`, `detail_type`) VALUES
(1, 'Task baru '),
(2, 'Task carry over'),
(3, 'Task di luar tiket');

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
-- Indexes for table `costsaving`
--
ALTER TABLE `costsaving`
  ADD PRIMARY KEY (`costsaving_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `leveltask`
--
ALTER TABLE `leveltask`
  ADD PRIMARY KEY (`leveltask_id`);

--
-- Indexes for table `tasklists`
--
ALTER TABLE `tasklists`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `type_task` (`type_task`),
  ADD KEY `level_task` (`level_task`);

--
-- Indexes for table `typetask`
--
ALTER TABLE `typetask`
  ADD PRIMARY KEY (`typetask_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costsaving`
--
ALTER TABLE `costsaving`
  MODIFY `costsaving_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasklists`
--
ALTER TABLE `tasklists`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `costsaving`
--
ALTER TABLE `costsaving`
  ADD CONSTRAINT `costsaving_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasklists` (`task_id`);

--
-- Constraints for table `tasklists`
--
ALTER TABLE `tasklists`
  ADD CONSTRAINT `tasklists_ibfk_1` FOREIGN KEY (`type_task`) REFERENCES `typetask` (`typetask_id`),
  ADD CONSTRAINT `tasklists_ibfk_2` FOREIGN KEY (`level_task`) REFERENCES `leveltask` (`leveltask_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
