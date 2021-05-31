-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 09:54 AM
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
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id_pod` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `name_podcast` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id_pod`, `id_kategori`, `name_podcast`, `url`) VALUES
('0I1Z9MNa7cIjpDuIROmwGf', 2, 'Sruput Nendang', 'https://i.scdn.co/image/f34d4b2dcffb455be921a46bde302c678c3d41ae');

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
(3, 'Rizky Widiputro', 'BQChcXcEWyYVWhVdL1spkmsWy011lkmOCnptjYi6jYbkf-Cx-Rw_79R0W715apAsM69iVSp7MRORFrQCi65lSS_6OzqCQxNXGeENL09ufTxG6FErJJMaEonq5r7A95r1h4FbodX_3--tSI_R3cBAOpABtd5U-pVygHVVfVa8cnBo2WndHEK22jSwVQ', 'AQDm7v-riOUneOdbdTrjHdiwQPDj1lnGbBPA8l81culn2fIZlb0PiVbS_uTX1f9L1ZBJdEPdKUFPNosrnKYR9ZZHZxkI2IFg9qfBhBCXE-MTwxqawNgLrnjisFP2aBNO83Y'),
(9, 'Rangkuti', 'BQCGXvK5qWmG8qHU3SYLFP9f7LexPu5u-SM2B54b2eJya9zGsjUewRMDNg-mdJihrvO2hKYOye9TvNrx8Nxxxu7xmaXOICajHB18qVgMYTnngWD3eat9voY-zO0CriElCEgHlwoiXNMZeT0HWc8khulDgiMAySLzj2q-HrHqPRKBimEndpFDlnt0zQ', 'AQDEc0W9DyqxpUT3dl6fkR6AeGGXJz1n0TdpHg02llUc6NgBHvdTqPlzFcDTDeL1kukMJgFMbezMWxpePL3XPPjXUVxTTdM7MuHxMUa8Z56YkoCoHNBpFgwg41_H0YHo7Ys');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id_pod`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `pod_kategori`
--
ALTER TABLE `pod_kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `podcast`
--
ALTER TABLE `podcast`
  ADD CONSTRAINT `podcast_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `pod_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
