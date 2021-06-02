-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 03:49 PM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_pod` varchar(255) NOT NULL,
  `id_episode` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_user`, `id_pod`, `id_episode`, `isi`, `created_at`, `updated_at`) VALUES
(11, '21qxcvg6s7kt7mctevrzxfruq', '1H0iGB2cfkYoTAEKwMcmHr', '61BCNqYVkcrXUpkg1evtF0', 'podkesmas oke', '2021-06-02 08:40:55', '2021-06-02 08:40:55'),
(12, '21qxcvg6s7kt7mctevrzxfruq', '1H0iGB2cfkYoTAEKwMcmHr', '61BCNqYVkcrXUpkg1evtF0', 'podcast', '2021-06-02 08:44:35', '2021-06-02 08:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id_pod` varchar(255) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `name_podcast` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id_pod`, `id_kategori`, `name_podcast`, `url`) VALUES
('0I1Z9MNa7cIjpDuIROmwGf', 2, 'Sruput Nendang', 'https://i.scdn.co/image/f34d4b2dcffb455be921a46bde302c678c3d41ae'),
('1H0iGB2cfkYoTAEKwMcmHr', NULL, 'PODKESMAS (PODCAST KESEHATAN MASYARAKAT)', 'https://i.scdn.co/image/05c4798044262238e5112c7c9d53cdcd798383ea');

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
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `accToken` varchar(1000) DEFAULT NULL,
  `refreshToken` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `accToken`, `refreshToken`) VALUES
('21qxcvg6s7kt7mctevrzxfruq', 'Rizky Widiputro', 'BQDddMjt0oXSzFsJTqhxP7N1Thz01kGcy5fgFgBsNoTERNdqSY9vOQYlRhoYCSo0SMDXGryCtUEIv_2AwpVECjt7G2Fh_ELUN2sGxWqnH7Agz4wm8jbqSlt3KSCKyqF-8qFuvV9WuLuZfEoh1Gt6R-Wce2yfjKdb-Uc5QA1qfNR7hRIPkis_epAHp9HQ', 'AQBDBHxznLEcoOXXjeVsngSGdBv0eVMOTN4S5Lzd4pcOw9Gv5jYTvyr6hYKcpCw8glTaBEYAHkxP_rryqeVFJMWzmGzkPPBcMsEFuZymhRGUCgR2czIkxiNxs_YS2LfpbaI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `comment_ibfk_1` (`id_user`),
  ADD KEY `comment_ibfk_2` (`id_pod`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id_pod`),
  ADD KEY `podcast_ibfk_1` (`id_kategori`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pod_kategori`
--
ALTER TABLE `pod_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `podcast`
--
ALTER TABLE `podcast`
  ADD CONSTRAINT `podcast_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `pod_kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
