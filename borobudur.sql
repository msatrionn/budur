-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 03, 2022 at 03:15 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borobudur`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(1, 'BUDUR2', '<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit long</p>\r\n<p>&nbsp;</p>', '2022-06-08', '22-07-01:03:07:47borobudur2.jpg'),
(3, 'Anu', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '2022-06-09', 'borobudur1.jpeg'),
(12, 'cek', '<p>e</p>', '0000-00-00', '22-07-02:11:07:24borobudur1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `candi`
--

CREATE TABLE `candi` (
  `id_candi` int(11) NOT NULL,
  `nama_candi` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `sejarah` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_input` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candi`
--

INSERT INTO `candi` (`id_candi`, `nama_candi`, `alamat`, `sejarah`, `gambar`, `tgl_input`) VALUES
(3, 'Candi Borobudur', 'mgl', '<p>Candi</p>', '22-07-02:10:07:35borobudur.jpg', '2022-07-02 17:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `profil_candi`
--

CREATE TABLE `profil_candi` (
  `id_profil` int(11) NOT NULL,
  `profil_candi` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil_candi`
--

INSERT INTO `profil_candi` (`id_profil`, `profil_candi`, `gambar`) VALUES
(1, '<p>Tentang Borobudur Candi Borobudur Candi Borobudur melambangkan alam semesta. Dalam agama Buddha, semesta dibagi menjadi tiga tingkat yaitu kamadhatu (dunia keinginan), rupadhatu (dunia berbentuk) dan arupadhatu (dunia tak terbentuk). Ketiga tingkat ini dibedakan berdasarkan relief-relief candi. Relief ini dibentangkan sepanjang 3 meter. Terdapat 1.460 pigura yang diselingi bidang-bidang pemisah berjumlah sekitar 1.212 buah. Di atas deretan pigura terdapat semacam pelipit yang membujur, memanjang sejauh satu setengah kilometer. Pelipit ini dihias dan membentuk rangkaian bunga teratai. Di bagian tas terdapat hiasan simbar berbentuk segitiga berjumlah 1.476 buah. Tingkat kamadhatu dan rupadhatu terdapat 1.472 stupa dan 432 arca Buddha yang mengitari seluruh penjuru mata angin. Pada tingkat terakhir terdapat 72 buah stupa yang melingkari stupa induk di puncak. Dibutuhkan sekitar dua juta potongan batu untuk membangun monumen ini. Candi Borobudur secara keseluruhan terdiri dari stupa. Stupa adalah salah satu bangunan tanda peringatan agama Buddha. Dalam bahasa Sansekerta, stupa berarti gundukan atau timbunan tanah. Candi ini berada di Borobudur berada di daerah dataran Kedu yang dikelilingi oleh gunung Merapi dan Merbabu di sebelah Timur, Gunung Sindoro dan Sumbing di sebelah utara, dan pegunungan Menoreh di sebelah Selatan.</p>', '22-07-03:02:07:21borobudur1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'adnu', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `deskripsi_wisata` text NOT NULL,
  `lokasi_wisata` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `deskripsi_wisata`, `lokasi_wisata`, `tanggal_input`, `gambar`) VALUES
(1, 'Gubuk Kopi', '<p>Gubuk Kopi merupakan</p>', '<p>Magelang</p>', '2022-06-22', '22-07-02:10:07:17borobudur1.jpeg'),
(2, 'Wisata Gabah', '<p>gabah</p>', 'magelang', '0000-00-00', '22-07-02:10:07:49borobudur2.jpg'),
(3, 'a', '<p>a</p>', 'a', '0000-00-00', '22-07-02:10:07:24borobudur1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `candi`
--
ALTER TABLE `candi`
  ADD PRIMARY KEY (`id_candi`);

--
-- Indexes for table `profil_candi`
--
ALTER TABLE `profil_candi`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `candi`
--
ALTER TABLE `candi`
  MODIFY `id_candi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil_candi`
--
ALTER TABLE `profil_candi`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
