-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 01:36 PM
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
  `dokumen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `forum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'pensil', 'article');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `lesson` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `email` varchar(255) NOT NULL,
  `level` enum('staff','admin','super_admin') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `register` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `pengguna_password`, `nip`, `email`, `level`, `blokir`, `register`) VALUES
(3, 'ari', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1722496666, 'ari@gmail.com', 'admin', 'N', '0000-00-00 00:00:00'),
(5, '', 'ari', 'admin', 17, 'ari@gmail.com', 'admin', 'N', '0000-00-00 00:00:00'),
(6, 'fudin', 'fudin', '21232f297a57a5a743894a0e4a801fc3', 1722496666, 'ari@gmail.com', 'admin', 'N', '0000-00-00 00:00:00');

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
(3, 'admin', 'penggaris', '2a82b7a3d219b244e4074a56ace63cd2.jpg', 'halo', 'ari', 'pending', '2021-07-17 20:26:41'),
(4, 'admin', 'pensil', '4d6d1fe9071ba0dcdc5b219c23470713.jpg', 'halo', 'ari', 'pending', '2021-07-17 20:26:41'),
(5, 'jdul', 'penggaris', 'a3b970f82779b7aaf5e331f457969a90.png', 'Menurut Menteri PAN-RB Azwar Abubakar, untuk menjangkau komunikasi yang lebih baik antara pemerintah dan seluruh PNS, pemerintah menetapkan pemanfaatan email nasional bagi seluruh PNS dengan domain @pnsmail.go.id. \r\n\r\n\r\n\r\n\"Email ini tidak mengesampingkan pemanfaatan email resmi kementerian/lembaga/pemda yang sudah ada, dan dimanfaatkan oleh PNS,\" kata Menteri PAN-RB semberi menyebutkan, PNS tetap dapat memiliki email resmi pemerintah .go.id yang lain sesuai dengan aturan, peran dan peruntukannya.\r\n\r\n', 'ari', 'published', '2021-07-17 20:26:41'),
(6, 'jdul', 'pensil', '33730bc88bcc72759ce0839272d03520.jpeg', 'halo ini artikel', 'fudin', '', '2021-07-17 20:26:41'),
(7, 'ga tau apa', 'pensil', 'db047c369cae854e812e415c161c792f.jpg', 'halo', 'fudin', 'pending', '2021-07-17 20:26:41'),
(9, 'halo', 'penggaris', '58243177efe57e88769dd1bb9317876a.jpg', 'fudin', 'fudin', 'published', '2021-07-18 00:36:20');

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
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id_lesson` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `id_wiki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
