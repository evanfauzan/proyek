-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 02:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gambar`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_berita`
--

CREATE TABLE `db_berita` (
  `id` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `teks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

--
-- Dumping data for table `db_berita`
--

INSERT INTO `db_berita` (`id`, `foto`, `judul`, `tanggal`, `teks`) VALUES
(1, 'mtq.jpg', 'Pondok Darul Quran Mengikuti MTQ tingkat Kabupaten oki', '26 Febuari 2024', 'Yayasan Pesantren Darul Qur\'an berpartisipasi dalam lomba MTQ Tingkat Ogan Komering Ilir. Kegiatan ini bertujuan untuk meningkatkan kemampuan siswa dalam menghafal dan memahami Al-Qur\'an serta untuk meningkatkan rasa berlomba-lomba dalam kebaikan. '),
(2, 'pengurus.jpg', 'Pelantikan Pengurus Baru', '25 September 2024', 'Pada tanggal 25 September 2024, Yayasan Pesantren Darul Qur\'an mengadakan pelantikan pengurus baru. Kegiatan ini bertujuan untuk mengukuhkan posisi pengurus yang baru dan meningkatkan semangat serta kerja sama dalam mengembangkan yayasan. '),
(3, 'ziarah.jpg', 'Kegiatan Ziarah Tahun 2023', '29 Oktober 2023', 'Yayasan Pesantren Darul Qur\'an mengadakan kegiatan ziarah pada tanggal 29 Oktober 2023. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan keimanan siswa terhadap agama Islam serta untuk mempereratkan silaturahmi antar siswa dan guru. ');

-- --------------------------------------------------------

--
-- Table structure for table `db_gambar`
--

CREATE TABLE `db_gambar` (
  `id` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

--
-- Dumping data for table `db_gambar`
--

INSERT INTO `db_gambar` (`id`, `foto`) VALUES
(1, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_gambar_ma`
--

CREATE TABLE `db_gambar_ma` (
  `id` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

--
-- Dumping data for table `db_gambar_ma`
--

INSERT INTO `db_gambar_ma` (`id`, `foto`) VALUES
(1, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_gambar_mi`
--

CREATE TABLE `db_gambar_mi` (
  `id` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

--
-- Dumping data for table `db_gambar_mi`
--

INSERT INTO `db_gambar_mi` (`id`, `foto`) VALUES
(1, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_gambar_mts`
--

CREATE TABLE `db_gambar_mts` (
  `id` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

--
-- Dumping data for table `db_gambar_mts`
--

INSERT INTO `db_gambar_mts` (`id`, `foto`) VALUES
(1, '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_berita`
--
ALTER TABLE `db_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_gambar`
--
ALTER TABLE `db_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_gambar_ma`
--
ALTER TABLE `db_gambar_ma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_gambar_mi`
--
ALTER TABLE `db_gambar_mi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_gambar_mts`
--
ALTER TABLE `db_gambar_mts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_berita`
--
ALTER TABLE `db_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_gambar`
--
ALTER TABLE `db_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db_gambar_ma`
--
ALTER TABLE `db_gambar_ma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_gambar_mi`
--
ALTER TABLE `db_gambar_mi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_gambar_mts`
--
ALTER TABLE `db_gambar_mts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
