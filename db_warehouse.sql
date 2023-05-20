-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 08:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_goods`
--

CREATE TABLE `tb_goods` (
  `id_goods` int(11) NOT NULL,
  `goodsname` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_goods`
--

INSERT INTO `tb_goods` (`id_goods`, `goodsname`, `price`, `amount`, `date`) VALUES
(3, 'น้ำอัดลม', 6, 222, '2023-04-27 13:28:01'),
(4, 'ขนม', 200, 63, '2023-05-05 14:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `username`, `password`, `role`, `date`) VALUES
(1, 'test', '1234', 'user', '2022-12-12 11:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pickup`
--

CREATE TABLE `tb_pickup` (
  `id_PU` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `object` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pickup`
--

INSERT INTO `tb_pickup` (`id_PU`, `name`, `object`, `amount`, `datetime`) VALUES
(1, 'Admin', 'asd', 200, '2023-05-05 14:02:51'),
(2, 'Admin', 'ขนม', 200, '2023-05-05 14:14:38'),
(3, 'Admin', 'ขนม', 20, '2023-05-05 14:17:17'),
(4, 'Admin', '', 20, '2023-05-05 14:20:39'),
(5, 'Admin', 'ขนม', 222, '2023-05-05 14:21:39'),
(6, '', 'ขนม', 0, '2023-05-05 14:22:21'),
(7, 'Admin', 'ขนม', 20, '2023-05-05 14:22:33'),
(8, 'Admin', 'ขนม', 20, '2023-05-05 14:22:57'),
(9, 'Admin', 'ขนม', 20, '2023-05-05 14:24:33'),
(10, 'Admin', 'ขนม', 20, '2023-05-05 14:25:20'),
(11, 'Admin', 'ขนม', 20, '2023-05-05 14:26:25'),
(12, 'Admin', 'ขนม', 20, '2023-05-05 14:28:54'),
(13, 'Admin', 'ขนม', 20, '2023-05-05 14:29:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_goods`
--
ALTER TABLE `tb_goods`
  ADD PRIMARY KEY (`id_goods`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_pickup`
--
ALTER TABLE `tb_pickup`
  ADD PRIMARY KEY (`id_PU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_goods`
--
ALTER TABLE `tb_goods`
  MODIFY `id_goods` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pickup`
--
ALTER TABLE `tb_pickup`
  MODIFY `id_PU` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
