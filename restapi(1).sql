-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 07:37 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pod_kategori`
--

CREATE TABLE `pod_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pod_kategori`
--

INSERT INTO `pod_kategori` (`id_kategori`, `nama_kategori`, `gambar`) VALUES
(1, 'Top', '/img/top.png'),
(2, 'Comedy', '/img/comedy.png'),
(3, 'Education', '/img/edu.png'),
(4, 'Horror', '/img/crime.png'),
(5, 'Originals & Exclusives', '/img/original.png');

-- --------------------------------------------------------

--
-- Table structure for table `telepon`
--

CREATE TABLE `telepon` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telepon`
--

INSERT INTO `telepon` (`id`, `nama`, `nomor`) VALUES
(1, 'ucup', '08123456789'),
(2, 'ucup', '08123456789'),
(7, 'ucup', '666');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `accToken` varchar(1000) DEFAULT NULL,
  `refreshToken` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `accToken`, `refreshToken`) VALUES
(3, 'Rizky Widiputro', 'BQA6-PGxQKPHeW9QYNw22OVzNc_s9__cqRTH_xxj0U2zJ4iQ7iyb--2b__A5p4IyiyZN9AU8y8xlqqVUqj-5Vg6QQmABKoqa4Ih2bCr7uT0y3WZ7ajnChGJwZR6m1h9kLTBy4G-zoD26LKuu3ngpgLqDbTc6U7NDOx8ITwTdSQIHc4dsjeFWqI6wKA', 'AQB832ie4iNQIV_1DGcKUQpsqm8zDsFqIMXH6CdDnwuY98pKvWuevE6526BS_zePM8uByz7QZZeractTqBbX4ddXiSsp6JTGdHH4c_kN-za9-G4xjJ_4Qg7vOXpLzqpkLGk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pod_kategori`
--
ALTER TABLE `pod_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `telepon`
--
ALTER TABLE `telepon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pod_kategori`
--
ALTER TABLE `pod_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `telepon`
--
ALTER TABLE `telepon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
