-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 03:53 AM
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
(5, 'Aplikasi Pending Task List', 'ALL', 'TAF', 'PERMINTAAN', 'YA', 1, '2019-02-01', '2019-02-15', 'MEDIUM', 50, 80, 'No', 'Tahap Konstruksi', 15, 0, 3),
(6, 'Aplikasi Lembur', 'ALL', 'HYQ', 'Permintaan', 'Yes', 1, '2019-02-01', '2019-02-14', 'Low', 89, 80, 'No', 'yyyyyy', 12, 1, 1);

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
-- Indexes for table `tasklists`
--
ALTER TABLE `tasklists`
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
-- AUTO_INCREMENT for table `tasklists`
--
ALTER TABLE `tasklists`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
