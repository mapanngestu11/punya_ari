-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 11:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledge`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `dokumen` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time_post` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `tittle`, `category`, `dokumen`, `author`, `status`, `time_post`) VALUES
(1, '$tittle', '$category', '$file', '$nama', 'published', '2021-07-26 08:55:45'),
(2, 'halo', 'SOP', '8b42cadb52e7ee5dc83b32915089f5ef.docx', 'ari', 'reject', '2021-07-26 09:04:24'),
(3, 'dokumen', 'SOP', '51e29c317aeaab5d42dcd5f6a2780a9f.doc', 'ari', 'pending', '2021-07-26 09:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `description` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time_post` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `tittle`, `category`, `organizer`, `location`, `image`, `date_start`, `date_end`, `time_start`, `time_end`, `description`, `author`, `status`, `time_post`) VALUES
(3, 'ini hasil edit', 'event', 'EO', 'tangerang', '6a3330e3e941455a8ff1eb11c25cbd9e.jpg', '2021-07-27', '2021-07-27', '20:23:00', '20:24:00', 'halo ini event', 'ari', 'published', '2021-07-27 13:20:50'),
(4, 'event ulang tahun kota tangerang', 'event1', 'EO1', 'tangerang1', '860509b2b452dc960a1bd280050907c9.jpg', '2021-07-28', '2021-07-28', '20:21:00', '23:18:00', 'HALO INI event update\r\n\r\n', 'ari', 'pending', '2021-07-27 14:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `forum` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time_post` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `tittle`, `category`, `image`, `forum`, `author`, `status`, `time_post`) VALUES
(1, 'halo', 'buku tulis', 'bd554b2cc780e3c89e5065ab3277d00d.jpg', 'ini contoh update', 'ari', 'reject', '2021-07-20 08:09:27'),
(3, 'halo', 'buku tulis', 'bd554b2cc780e3c89e5065ab3277d00d.jpg', 'ini contoh update', 'ari', 'published', '2021-07-20 08:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'TI', 'Teknik Informatika'),
(2, 'SI', 'Sistem Informasi'),
(3, 'SK', 'Sistem Komputer'),
(4, 'MI', 'Manajemen Informatika'),
(5, 'SI', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `status`) VALUES
(1, 'penggaris', 'article'),
(2, 'pensil', 'article'),
(4, 'buku tulis', 'forum'),
(6, 'pensil', 'forum'),
(8, 'SOP', 'document'),
(10, 'noted', 'note'),
(11, 'lesson', 'lesson'),
(13, 'event', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `lesson` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time_post` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id_lesson`, `tittle`, `category`, `image`, `lesson`, `author`, `status`, `time_post`) VALUES
(3, 'halo', 'lesson', 'e0f0604cdaf9a8d4d7c53353009e20ef.jpg', 'halo', 'ari', 'pending', '2021-07-27 04:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time_post` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id_note`, `tittle`, `category`, `note`, `author`, `status`, `time_post`) VALUES
(2, 'halo', 'noted', 'b98d4396db3e27f087102e6170562fb0.docx', 'fudin', 'pending', '2021-07-27 03:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pengguna_password` varchar(35) NOT NULL,
  `nip` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `blokir` varchar(1) NOT NULL,
  `register` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `pengguna_password`, `nip`, `email`, `level`, `blokir`, `register`) VALUES
(3, 'ari', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1722496666, 'ari@gmail.com', 'admin', 'N', '0000-00-00 00:00:00'),
(5, 'ari', 'ari', 'e034fb6b66aacc1d48f445ddfb08da98', 12371, 'ari@gmail.com', 'admin', 'Y', '0000-00-00 00:00:00'),
(6, 'fudin', 'fudin', '21232f297a57a5a743894a0e4a801fc3', 1722496666, 'ari@gmail.com', 'admin', 'N', '0000-00-00 00:00:00'),
(7, 'ari', 'staff', '1253208465b1efa876f982d8a9e73eef', 1722496666, 'ari@gmail.com', 'staff', 'N', '0000-00-00 00:00:00'),
(8, 'ari', 'super_admin', 'ed49c3fed75a513a79cb8bd1d4715d57', 1722496666, 'ari@gmail.com', 'super_admin', 'N', '0000-00-00 00:00:00'),
(9, 'ari', 'ari', 'ari', 1, 'ari@gmail.com', 'admin', 'N', '2021-07-29 08:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `id_wiki` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `article` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time_post` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`id_wiki`, `tittle`, `category`, `image`, `article`, `author`, `status`, `time_post`) VALUES
(3, 'admin', 'penggariss', '7d0b9ce3527d7f095e1d053f4e52bcd4.jpg', 'halo ini', 'ari', 'reject', '2021-07-17 20:26:41'),
(4, 'admini', 'pensili', '4d6d1fei9071ba0dcdc5b219c23470713.jpg', 'haloa', 'arii', 'pendingg', '2021-07-17 20:26:41'),
(5, 'jduli', 'penggarisi', 'a3b970f82779b7aaf5e331f457969a90.png', 'Menurut Menteri PAN-RB Azwar Abubakar, untuk menjangkau komunikasi yang lebih baik antara pemerintah dan seluruh PNS, pemerintah menetapkan pemanfaatan email nasional bagi seluruh PNS dengan domain @pnsmail.go.id. \r\n\r\n\r\n\r\n\"Email ini tidak mengesampingkan pemanfaatan email resmi kementerian/lembaga/pemida yang sudah ada, dan dimanfaatkan oleh PNS,\" kata Menteri PAN-RB semberi menyebutkan, PNS tetap dapat memiliki email resmi pemerintah .go.id yang lain sesuai dengan aturan, peran dan peruntukannya.\r\n\r\n', 'ari', 'published', '2021-07-17 20:26:41'),
(6, 'jdul', 'pensil', '33730bc88bcc72759ce0839272d03520.jpeg', 'halo ini artikel', 'fudin', '', '2021-07-17 20:26:41'),
(7, 'ga tau apa', 'pensil', 'db047c369cae854e812e415c161c792f.jpg', 'halo', 'fudin', 'pending', '2021-07-17 20:26:41'),
(9, 'halo', 'penggaris', '58243177efe57e88769dd1bb9317876a.jpg', 'fudin', 'fudin', 'published', '2021-07-18 00:36:20'),
(10, 'event ulang tahun kota tangerang', 'penggaris', '01708bc8a56b1bc18449aaee6427cdd8.jpg', 'halo ini dari staff', 'ari', 'pending', '2021-07-29 16:38:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`id_wiki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id_lesson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `id_wiki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
