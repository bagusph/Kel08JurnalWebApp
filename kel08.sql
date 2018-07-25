-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 04:53 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kel08`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(20) NOT NULL,
  `judul` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `penulis`, `abstract`, `keyword`, `referensi`, `isbn`, `file`, `kategori`, `foto`) VALUES
(8, 'Pengembangan Politik Indonesia', 'Bagus Pogar', 'JAKARTA, KOMPAS.com — Presiden Joko Widodo mengucapkan terima kasih kepada sejumlah alumni Pergerakan Mahasiswa Islam Indonesia (PMII) yang sudah membantunya di pemerintahan. Hal itu diungkapkan Presiden Jokowi dalam pidatonya di acara Musyawarah Nasional VI Ikatan Alumni PMII di Grand Ballroom Hotel JS Luwansa, Jakarta Selatan, Jumat (20/7/2018). “Saya sebagai Presiden ingin berterima kasih kepada alumni PMII, karena alumni PMII sudah banyak membantu pemerintah,” ujar Jokowi. Nama pertama yang disebutkan Presiden Jokowi adalah Muhaimin Iskandar. Baca juga: Saat Jokowi Sapa Cak Imin hingga Tiga Kali... “Ada Muhaimin Iskandar. Beliau banyak membantu saya. Ada yang kelihatan dan ada yang tidak kelihatan. Terutama dalam kerja politik. Karena sudah banyak mendirikan posko Join,” ujar Jokowi. Pernyataan Jokowi sontak membuat para peserta musyawarah bertepuk tangan dan bersorak riuh. Alumni PMII lainnya yang disebut yakni Menteri Tenaga Kerja Hanif Dakhiri. “Beliau ini menteri yang sangat dekat dengan serikat pekerja sehingga kalau kita lihat selama hampir empat tahun ini demo-demo berkurang,” ujar Jokowi. Baca juga: Jokowi: Nama Cak Imin Sudah di Saku Saya... Terakhir, Presiden Jokowi menyebut nama Menteri Pemuda dan Olahraga Imam Nahrawi. Imam, kata Jokowi, sedang dalam kondisi kurang fit karena kurang tidur. “Sudah enam bulan ini kurang tidur karena sedang mempersiapkan Asian Games,” kata Jokowi. Sebenarnya, Jokowi menyebut seorang alumni PMII lainnya, yakni Nusron Wahid. Namun lantaran Nusron tidak hadir, ia tak melanjutkan ceritanya tentang Nusron. Selain berpidato di depan 1.000-an peserta musyawarah, Presiden Jokowi juga menerima deklarasi antiterorisme dan antiradikalisme oleh Ikatan Alumni PMII.   Artikel ini telah tayang di Kompas.com dengan judul ', 'www.kompas.com', 'www.wikipedia.com', '', '', 1, 'logo5.png'),
(9, 'Artis Indonesia Lagi Weekend', 'Gandha Wicaksono', 'JAKARTA, KOMPAS.com — Presiden Joko Widodo mengucapkan terima kasih kepada sejumlah alumni Pergerakan Mahasiswa Islam Indonesia (PMII) yang sudah membantunya di pemerintahan. Hal itu diungkapkan Presiden Jokowi dalam pidatonya di acara Musyawarah Nasional VI Ikatan Alumni PMII di Grand Ballroom Hotel JS Luwansa, Jakarta Selatan, Jumat (20/7/2018). “Saya sebagai Presiden ingin berterima kasih kepada alumni PMII, karena alumni PMII sudah banyak membantu pemerintah,” ujar Jokowi. Nama pertama yang disebutkan Presiden Jokowi adalah Muhaimin Iskandar. Baca juga: Saat Jokowi Sapa Cak Imin hingga Tiga Kali... “Ada Muhaimin Iskandar. Beliau banyak membantu saya. Ada yang kelihatan dan ada yang tidak kelihatan. Terutama dalam kerja politik. Karena sudah banyak mendirikan posko Join,” ujar Jokowi. Pernyataan Jokowi sontak membuat para peserta musyawarah bertepuk tangan dan bersorak riuh. Alumni PMII lainnya yang disebut yakni Menteri Tenaga Kerja Hanif Dakhiri. “Beliau ini menteri yang sangat dekat dengan serikat pekerja sehingga kalau kita lihat selama hampir empat tahun ini demo-demo berkurang,” ujar Jokowi. Baca juga: Jokowi: Nama Cak Imin Sudah di Saku Saya... Terakhir, Presiden Jokowi menyebut nama Menteri Pemuda dan Olahraga Imam Nahrawi. Imam, kata Jokowi, sedang dalam kondisi kurang fit karena kurang tidur. “Sudah enam bulan ini kurang tidur karena sedang mempersiapkan Asian Games,” kata Jokowi. Sebenarnya, Jokowi menyebut seorang alumni PMII lainnya, yakni Nusron Wahid. Namun lantaran Nusron tidak hadir, ia tak melanjutkan ceritanya tentang Nusron. Selain berpidato di depan 1.000-an peserta musyawarah, Presiden Jokowi juga menerima deklarasi antiterorisme dan antiradikalisme oleh Ikatan Alumni PMII.   Artikel ini telah tayang di Kompas.com dengan judul \"Jokowi: Cak Imin Banyak Membantu Saya, Terutama Kerja Politik\", https://nasional.kompas.com/read/2018/07/20/16532211/jokowi-cak-imin-banyak-membantu-saya-terutama-kerja-politik.  Penulis : Fabian Januarius Kuwado Editor : Sabrina Asril', 'www.kompas.com', 'www.wikipedia.com', '', '', 2, 'images22.png'),
(10, 'sdf', '', 'ert', 'rty', 'fghj', '', '', 1, 'Screenshot_(2).png'),
(11, 'erty', '', 'rtyu', 'rtyu', 'fgh', '', '', 1, 'Screenshot_(2)1.png'),
(12, 'ooooo', '', 'ooo', 'fghj', 'poooo', '', '', 1, 'Screenshot_(22).png'),
(13, 'eesre', 'penulis', 'edrdde', 'dred', 'ff', '', '', 1, 'Screenshot_(1)1.png'),
(14, 'Judulnya Penulis', 'penulis', 'abstrak', 'keyword', 'www.google.com', '', '', 3, 'images110.png'),
(15, 'Judulnya Penulis', 'penulis', 'abstrak', 'keyword', 'www.google.com', '', '', 6, 'images23.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Politik'),
(2, 'Sport'),
(3, 'Biologi'),
(4, 'Sejarah'),
(5, 'Matematika'),
(6, 'Ekonomi'),
(7, 'Fisika'),
(8, 'Kimia'),
(12, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id` int(20) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` int(12) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lulusan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `nama`, `alamat`, `notelp`, `status`, `lulusan`, `gelar`, `foto`) VALUES
(2, 'Bagus Pogar Herlambang', 'Malang', 61274, 'Single', 'Polinema', 'SKOM', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(10) NOT NULL,
  `nama_role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'penulis'),
(3, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_id_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`, `fk_id_role`) VALUES
('admin', 'admin', 1),
('bagus', 'bagus', 3),
('fadli', 'fadli', 1),
('penulis', 'penulis', 2),
('penulis2', 'penulis2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_id_role` (`fk_id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD CONSTRAINT `user_admin_ibfk_1` FOREIGN KEY (`fk_id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
