-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 09.16
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `comment`
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
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_comment`, `id_user`, `id_pod`, `id_episode`, `isi`, `created_at`, `updated_at`) VALUES
(85, '21qxcvg6s7kt7mctevrzxfruq', '2I78rFyOmxY0dXU1ya8vrx', '3G7yP54JSs6RIP8VGGGElw', 'aaa', '2021-06-03 02:08:18', '2021-06-03 02:08:18'),
(86, '21qxcvg6s7kt7mctevrzxfruq', '46c6jp3KnodkalGewKPFBm', '6nGGHPk2p1XTjR1F1ZzG2M', '3', '2021-06-03 02:09:37', '2021-06-03 02:09:37'),
(87, '21qxcvg6s7kt7mctevrzxfruq', '0vFfPAk7zgDLnv3utpZ8ww', '6T0A3djksHzwDrLJetXqxf', '4', '2021-06-03 02:10:02', '2021-06-03 02:10:02'),
(88, '21qxcvg6s7kt7mctevrzxfruq', '01wwgw8itR7HN2qjcyiI1I', '6tAIA9KclMYNbB14gVK3I0', '5', '2021-06-03 02:10:20', '2021-06-03 02:10:20'),
(89, '21qxcvg6s7kt7mctevrzxfruq', '1EYmQLqYuhzaBEvGlhtqEZ', '3MRq4zaYCcC3y3Nt2Xdsc7', '5', '2021-06-03 02:10:40', '2021-06-03 02:10:40'),
(90, '21qxcvg6s7kt7mctevrzxfruq', '7prgp80n4pd49sZ3j9per6', '4ps8CdwJAKo22zKBnv30vT', '7', '2021-06-03 02:11:29', '2021-06-03 02:11:29'),
(91, '21qxcvg6s7kt7mctevrzxfruq', '1PGN4ilb4aoWKkB7FNSLsx', '5HYUY0BOsW7kq7M8NQTEZZ', '8', '2021-06-03 02:11:59', '2021-06-03 02:11:59'),
(92, '21qxcvg6s7kt7mctevrzxfruq', '1hUrLTyWl3XzOFYjMcYYgU', '1Fuv6fdcsIzXYGiQj32z8p', '9', '2021-06-03 02:12:17', '2021-06-03 02:12:17'),
(93, '21qxcvg6s7kt7mctevrzxfruq', '47Cf5Ck29wc04OOeIrYE14', '6gSfWIsgCQibNUbQnfJ361', '10', '2021-06-03 02:12:30', '2021-06-03 02:12:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `podcast`
--

CREATE TABLE `podcast` (
  `id_pod` varchar(255) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `name_podcast` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `podcast`
--

INSERT INTO `podcast` (`id_pod`, `id_kategori`, `name_podcast`, `url`) VALUES
('01wwgw8itR7HN2qjcyiI1I', 5, 'CERITAACA Natasha Rizky Podcast', 'https://i.scdn.co/image/7829006204c19ec75dcaa821690e3505857abb42'),
('08OoufgDXbghIZdJsM5dtm', 1, 'Deep Sleep Sounds', 'https://i.scdn.co/image/f0ad74920d8184635b624ccf710fdcf9b06ca777'),
('0GuUgFSxMcAEJ1iHjErzRM', 2, 'SULPOD (SULE PODCAST)', 'https://i.scdn.co/image/4190c4c21e027400ef2f137a735cb1eb0bc8e5ca'),
('0hffz6OtCgcwoBzGC3RO6N', 5, 'Suara Puan', 'https://i.scdn.co/image/ab67656300005f1fa0f45e1d1f4e93331a6a8040'),
('0I1Z9MNa7cIjpDuIROmwGf', 2, 'Sruput Nendang', 'https://i.scdn.co/image/f34d4b2dcffb455be921a46bde302c678c3d41ae'),
('0JXOf1JMa4UVqFCXw2ZCgF', 2, 'Rapot', 'https://i.scdn.co/image/44ba2e9e175c805c1bba657a8ecf6b9c26b3dbf5'),
('0vFfPAk7zgDLnv3utpZ8ww', 5, 'Thirty Days Of Lunch Podcast', 'https://i.scdn.co/image/1217e05c1fa51e829823a81549f024382efeb01a'),
('1EYmQLqYuhzaBEvGlhtqEZ', 5, 'MENDOAN', 'https://i.scdn.co/image/bf70816654fc829e007bc0e2f9abf789406c8c8f'),
('1H0iGB2cfkYoTAEKwMcmHr', 2, 'PODKESMAS (PODCAST KESEHATAN MASYARAKAT)', 'https://i.scdn.co/image/05c4798044262238e5112c7c9d53cdcd798383ea'),
('1hUrLTyWl3XzOFYjMcYYgU', 5, 'Box2Box Football Podcast', 'https://i.scdn.co/image/3b6d2f488c04dcb3133e332f9f04b7426f75ad4f'),
('1mAcrNI1cFDlF7apoLTPKk', 2, 'UNFAEDAH PODCAST', 'https://i.scdn.co/image/ef5d492dcde03cb01841a80b97bae20c57349bd2'),
('1PGN4ilb4aoWKkB7FNSLsx', 5, 'Makna Talks', 'https://i.scdn.co/image/b6088579763ea9ab5f8d0b6d5dc7bc332d559953'),
('1UvmWHLiRH9IeTYfWC2zvc', 1, 'Ramalan Zodiak Hari Ini', 'https://i.scdn.co/image/ab67656300005f1f85f36aafa2363a43f32b27f5'),
('1VXcH8QHkjRcTCEd88U3ti', 3, 'TED Talks Daily', 'https://i.scdn.co/image/e048b26a93dc026381ab0107e6c01e4e3417b14a'),
('1zyOm0UDyjwWnE7ZwNykBt', 2, 'PODCAST GJLS', 'https://i.scdn.co/image/ab67656300005f1f82b1b391071222dedbcbd363'),
('23bKiXxQhr1xKS9fjHx6Gx', 1, 'AGAK LAEN!', 'https://i.scdn.co/image/ab67656300005f1f78d5d7ec2993a2eb9c2f9b35'),
('2b4JRmROa3ZPOE4og6aFIE', 3, 'Tech&Co', 'https://i.scdn.co/image/27e5fe89231be70d2884499266f448754130624f'),
('2czkc27sQGLZd9ErHbUSe8', 3, 'Podcast Sejarah Indonesia (POSEIDON)', 'https://i.scdn.co/image/c5112a5e53dd531daf6cfe770b1004f1cc8ae5ca'),
('2czqw81OacHH84G0myBQAn', 3, 'Kampung Inggris LC', 'https://i.scdn.co/image/f94e6521a6feaf7b1c05a4db31968b498a519ec5'),
('2I78rFyOmxY0dXU1ya8vrx', 5, 'Podcast Fitrop', 'https://i.scdn.co/image/bb84cecb7de823db37e3368c8f4cf5931a57fdd0'),
('2RXY5kEKWQobky1Y2dSUyF', 1, 'Podcast Seminggu', 'https://i.scdn.co/image/ab67656300005f1fff96c93a3417474d446fd7d4'),
('2Shpxw7dPoxRJCdfFXTWLE', 3, 'Philosophize This!', 'https://i.scdn.co/image/b01d89d740d3275d16082b5c5e597b12881bec26'),
('3czvHT8ALg4yRSSTmZvPOe', 1, 'Menjadi Manusia', 'https://i.scdn.co/image/ab67656300005f1fdc62e53793292e5ecd29b6bc'),
('3DgfoleqaW61T2amZQKINx', 4, 'Crime Junkie', 'https://i.scdn.co/image/ab67656300005f1fcdd7528c2e60fd939ebda2ea'),
('3w5zKrbQ6kgB0RKI7lt1d4', 3, 'Podcast Buku Kutu', 'https://i.scdn.co/image/29eecbfad0d8d849bfbc07359e3d11151bd290c8'),
('43ILnAhQzZjw9Mhdy225jg', 1, 'Psikologid', 'https://i.scdn.co/image/205b5a2ee41e3d325ab4b7fdee2edd13bed73253'),
('46c6jp3KnodkalGewKPFBm', 5, 'KinosGina', 'https://i.scdn.co/image/5296bc972c4aa4062efcc01731501e829f2771e3'),
('47Cf5Ck29wc04OOeIrYE14', 5, 'Repod Aaahhh (Rachel Goddard Podcast) ', 'https://i.scdn.co/image/32079da20495c82bc71dffa92101a1670fe15400'),
('4E5VGEwd50dO2lJpxxG5yb', 4, '1000 Mystery', 'https://i.scdn.co/image/475b42f39f4ac41e2ed18b722f1666127faa3068'),
('4gLJ97Smr64Z7xIa5v65gC', 2, 'DESTAnya Siapa?', 'https://i.scdn.co/image/79b5d9062ccf1c28ae80a1d159ab5c0c582263b0'),
('4LO0Q3WVbAOfACRncWnvEG', 3, 'BELAJAR BAHASA INGGRIS ', 'https://i.scdn.co/image/e8559746c0a4e05653f2d082c00182f094df1a81'),
('4ruq7mH0jg1sFi8KQhnGb8', 4, 'Serial Killers', 'https://i.scdn.co/image/ab67656300005f1f984507abaa31f2d82f8a7333'),
('4uI2QsiFOwEecgUX8b1yg2', 2, 'BKR Brothers', 'https://i.scdn.co/image/9c1b630b53d2592c9b76d7dd802d555c95deaa7d'),
('4uvQzNCRcxyOCl4nPnotsh', 4, 'Kisah Tanah Jawa', 'https://i.scdn.co/image/0d4c469822b27b64b47629699187f387d96c7e92'),
('4YteeJfK5Bgr6oHH9oJduO', 4, 'Kisah Horor The Sacred Riana', 'https://i.scdn.co/image/ab67656300005f1f7058594370294c304414f000'),
('5r9jbxc5egWHSsbA9lNb0I', 4, 'LEWAT TENGAH MALAM', 'https://i.scdn.co/image/ab67656300005f1f0890ded46c9604430fca1a1e'),
('5RdShpOtxKO3ZWohR2M6Sv', 4, 'Conspiracy Theories', 'https://i.scdn.co/image/ab67656300005f1f35064d2229bb0a17bfb94a45'),
('5tHfkp8qnF2B1GtzJSSV9e', 4, 'LENYAP', 'https://i.scdn.co/image/ab67656300005f1f4e2e131c6a22961cdc620588'),
('5VeSdOgrj3170z8DQ1YhB0', 4, 'Pembunuh Berantai', 'https://i.scdn.co/image/ab67656300005f1f7075276300cd5b532214e0b1'),
('5vHokTsTmdlLBs1uPgDGN6', 1, 'Rintik Sedu', 'https://i.scdn.co/image/ab67656300005f1fc2b0862f6b12340651dd89e0'),
('5Y4JTcUmxTcHYaYiqxsKtz', 2, 'PODCAST ANCUR ', 'https://i.scdn.co/image/ab67656300005f1f2a2cde63bc0f92df1f1e059e'),
('5yrdpRPrqiEcjrptBwIUYL', 1, 'Kita dan Waktu', 'https://i.scdn.co/image/9af1e7ded73770c79e302d12ca97e23bb9948acc'),
('5ZTBmqEveEr1XkCepNWeUr', 5, 'Dear Dearest', 'https://i.scdn.co/image/ab67656300005f1f07c823d0013073d1354a20cb'),
('6EmSBAixLaU1CwSu6gyujz', 2, 'Podcast Raditya Dika', 'https://i.scdn.co/image/9faf4edabeafbd742b199b6317cc12126971b321'),
('6KjdNWVqAzKwXv9IgO2SMs', 4, 'Do You See What I See?', 'https://i.scdn.co/image/67f15dc84750d60a62c798236aed1b5790b318d4'),
('6rDe63cP5fc0n8Jjv7ThTu', 1, 'Podcastery Jurnalrisa', 'https://i.scdn.co/image/ab67656300005f1fdb94e58660cf8cc95281ea1e'),
('6Sn7blbxc6c1dHQ4XLQyN1', 3, 'ParenTALKING', 'https://i.scdn.co/image/d03270cf112c526c7a68e0e27b6e24301724f93f'),
('71jARxgs0KxOwArI0K4C7T', 1, 'Close The Door', 'https://i.scdn.co/image/4ba68a9a1cf6e663953b48f0e1249ed5b3bd2017'),
('7fY99FB3bNyn7nEdXCoBeB', 3, 'The Daily Stoic', 'https://i.scdn.co/image/ab67656300005f1f3701948a2cda7ddc6cfed1e8'),
('7m1GD0e7cZwsUzgU8lUnZD', 3, 'dakwah.me - Ustadz Adi Hidayat', 'https://i.scdn.co/image/e672fb5b581ebc82291f2d1fb863cf7c427b383d'),
('7prgp80n4pd49sZ3j9per6', 5, 'Teman Tidur', 'https://i.scdn.co/image/2e1307fe27ad78870e74a55a581111605222c004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pod_kategori`
--

CREATE TABLE `pod_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pod_kategori`
--

INSERT INTO `pod_kategori` (`id_kategori`, `nama_kategori`, `gambar`) VALUES
(1, 'Top', '/img/top.png'),
(2, 'Comedy', '/img/comedy.png'),
(3, 'Education', '/img/edu.png'),
(4, 'Horror', '/img/crime.png'),
(5, 'Originals & Exclusives', '/img/original.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `accToken` varchar(1000) DEFAULT NULL,
  `refreshToken` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `accToken`, `refreshToken`) VALUES
('21qxcvg6s7kt7mctevrzxfruq', 'Rizky Widiputro', 'BQA6U76M3IlCc_LMrmSCwXvrVpnm5KzIoNYCLbTGq4FtRol4hSg0jYsVs6kIcC-vYVCIC-NZq9plEfi6FgUMqd6bgitoachXNo2oiEKlDfXpZlLO_T6t5x2gTQ3mMlTkwmFyQ4KjjO37HnmdZMzFIr612FjSimfBNVG566bYcTfCBLYLMu1k8iMLqTLC', 'AQBDBHxznLEcoOXXjeVsngSGdBv0eVMOTN4S5Lzd4pcOw9Gv5jYTvyr6hYKcpCw8glTaBEYAHkxP_rryqeVFJMWzmGzkPPBcMsEFuZymhRGUCgR2czIkxiNxs_YS2LfpbaI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `comment_ibfk_1` (`id_user`),
  ADD KEY `comment_ibfk_2` (`id_pod`);

--
-- Indeks untuk tabel `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id_pod`),
  ADD KEY `podcast_ibfk_1` (`id_kategori`);

--
-- Indeks untuk tabel `pod_kategori`
--
ALTER TABLE `pod_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `pod_kategori`
--
ALTER TABLE `pod_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `podcast`
--
ALTER TABLE `podcast`
  ADD CONSTRAINT `podcast_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `pod_kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
