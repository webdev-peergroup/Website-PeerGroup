-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2022 at 06:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peergroupid`
--
CREATE DATABASE IF NOT EXISTS `peergroupid` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_general_ci;
USE `peergroupid`;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` enum('self development','karir','jurusan') NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `sumber_cover` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `kategori`, `penulis`, `deskripsi`, `text`, `cover`, `sumber_cover`, `created_at`, `updated_at`) VALUES
(2, 'Pilih Jurusan Kuliahmu Dengan 5 Tips Ini!', 'pilih-jurusan-kuliahmu-dengan-5-tips-ini!', 'jurusan', 'Rima Anhar Roospita', '', '<h2>Hai Captainers! </h2><p class=\"paragraph open\">Ketika mendengar kata “kuliah”, hal yang seringkali muncul dalam pikiran kita adalah jurusan. Jurusan menjadi sangat penting untuk dipertimbangkan, mengingat durasi waktu kuliah pada umumnya adalah empat tahun, dan itu bukanlah waktu yang sebentar untuk menuntut ilmu dan menginvestasikan, waktu, tenaga, dan finansial kita. Oleh karena itu, Captainers perlu banget, nih, untuk tahu tip memilih jurusan yang tepat. Yuk, kita pelajari bersama! </p> <h2>1.   Kenali Dirimu Sendiri</h2><p class=\"paragraph text-list-paragraph\">Kalimat tersebut mungkin sering didengar oleh Captainers dan terkesan klise, yah. Tapi jangan salah, lho, ini adalah aspek terpenting sebagai langkah awal dalam proses menemukan minat dan bakatmu. Hal ini dikarenakan, dalam perjalanan mengenali diri sendiri, kamu akan mengetahui kepribadian dan kemampuanmu sehingga memudahkan kamu untuk menemukan jati dirimu yang sesungguhnya. </p><h2>2.   Temukan Minat dan Passionmu</h2><p class=\"paragraph text-list-paragraph\">Dalam proses menemukan minat dan passionmu, kamu perlu mengetahui bidang apa yang kamu sukai dan ingin ditekuni. Perlu digarisbawahi bahwa kamu bukan hanya menyukai, tetapi juga menikmati kegiatan dengan bidang yang bersangkutan. Hal ini akan mengarahkan kamu untuk menemukan kemampuan yang kamu miliki. Oleh karena itu, poin ini sangat penting untuk kamu lakukan. </p><h2>3.   Kenali dan Pahami Perguruan Tinggi dan Jurusan</h2> <p class=\"paragraph text-list-paragraph\">Untuk menambah pengetahuan dan wawasan mengenai pilihan jurusan, Captainers perlu banget, nih, untuk memeriksa kanal perguruan tinggi untuk mempelajari lebih lanjut tentang penawaran program yang tersedia. Dengan kamu banyak membaca dan mempelajari berbagai jurusan dan perguruan tinggi, kamu akan semakin mengenali ketertarikanmu pada suatu bidang tertentu, lho. Poin ini juga bisa kamu lakukan dengan bertanya kepada orang tua, guru, kakak kelas, maupun konselor pendidikan. </p><h2>4.   Renungkan Jalur Karir yang Kamu Impikan</h2><p class=\"paragraph text-list-paragraph\">Kamu perlu merenungkan karir seperti apa yang diimpikan. Poin ini akan membawa kamu untuk memahami lebih jauh hubungan antara jurusan yang kamu minati dengan jenis pekerjaannya. Kamu juga dapat mengetahui keahlian lain apa saja yang dibutuhkan dalam jurusan yang kamu minati. Merenungkan jalur karir akan membantu kamu memantapkan hati untuk memilih jurusan. Tetapi, Captainers juga perlu ingat bahwa pekerjaan di era modern ini sudah sangat beragam sehingga banyak sarjana diluar sana yang bekerja tidak sesuai dengan jurusannya. So, yang paling penting adalah kamu memiliki minat yang besar pada jurusan tersebut. </p><h2>5.   Believe in Yourself</h2><p class=\"paragraph text-list-paragraph\">Ketika kamu sudah memantapkan hati memilih jurusan, seringkali kamu merasa goyah karena berbagai saran dan masukan dari orang-orang sekitarmu. Entah itu berkaitan dengan prospek pekerjaan, passing grade, predikat jurusan favorit, dan lain sebagainya, yang membuatmu kembali merasa ragu dan bingung. Jika ini terjadi, coba tenangkan diri sejenak dan ajak dirimu sendiri untuk kembali merefleksikan poin-poin yang telah kamu lalui di atas untuk kembali menemukan alasan dan motivasimu yang kuat mengapa memilih jurusan tersebut. Captainers perlu ingat bahwa “this is your life, you own it, and you are the one who will go through what you decide” (Ini hidupmu, kamu memilikinya, dan kamulah yang akan melalui apa yang kamu putuskan). So, always believe in yourself, yah! </p><p class=\"paragraph close\">Nah, gimana dengan tipnya Captainers? Relatable banget kan dengan kebingungan yang mungkin sedang Captainers rasakan. 	But, it’s okay guys, memilih jurusan adalah salah satu keputusan besar dalam hidup. Jadi sangat wajar kalau kita merasakan kebingungan yang teramat besar dan seringkali keputusannya berubah-ubah. Proses ini justru akan membantu kita untuk lebih kritis dalam memahami diri sendiri dan menemukan tempat yang paling cocok untuk diri kita sendiri. Lalu, jika Captainers sudah yakin dengan keputusan yang diambil, just do it and make it happens! </p>', 'default.svg', '', '2021-12-04 23:02:03', '2021-12-05 23:24:21'),
(14, 'Tes', '', 'self development', 'I Made Eko Satria Wiguna', 'fgfgdgdfg', 'fgdgfdgdfgdfgdg', 'default.svg', '', '2021-11-27 12:15:10', '2021-12-05 23:22:14'),
(17, 'I Made Eko Satria Wiguna', 'i-made-eko-satria-wiguna', 'self development', 'I Made Eko Satria Wiguna', 'asdasdasdasd', 'sadasdasdasdasd', 'default.svg', 'sadsdasd', '2021-11-27 13:07:43', '2021-12-05 23:22:14'),
(19, 'Sate Kambing Ala Kudus', 'sate-kambing-ala-kudus', 'karir', 'I Made Eko Satria Wiguna', 'sasasa', 'lllksksksks', 'Screenshot_20211108-134317817.jpg', 'peergroup ID', '2022-01-12 21:06:47', '2022-01-12 21:06:47'),
(22, 'coba editSate Kambing Ala Kudus', 'coba-editsate-kambing-ala-kudus', 'karir', 'sasasa', 'sasasa', 'lllksksksks', 'Jurusan Kuliah.svg', 'peergroup ID', '2022-01-13 10:23:54', '2022-01-13 11:27:19'),
(23, 'I Made Eko Satria Wiguna edit 2x', 'i-made-eko-satria-wiguna-edit', 'self development', 'asdasdasdasd', 'asdasdasdasd', 'sadasdasdasdasd', 'default.svg', 'sadsdasd', '2022-01-13 10:24:40', '2022-02-02 20:57:08'),
(24, 'tambah baru 2x', 'tambah-baru', 'self development', 'Myoi Mina', 'sjsjsjsj', 'sjsjsj', 'default.svg', 'peergroup ID', '2022-02-02 21:08:33', '2022-02-02 21:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_quiz` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` varchar(15) NOT NULL DEFAULT 'kegiatan ',
  `deskripsi` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `sumber_cover` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `slug`, `kategori`, `deskripsi`, `penulis`, `text`, `cover`, `sumber_cover`, `created_at`, `updated_at`) VALUES
(5, 'coba kegiatan', 'coba-kegiatan', 'kegiatan ', 'Sate Kambing Ala Kudus', 'I Made Eko Satria Wiguna', '', 'Screenshot_20211108-134337713.jpg', 'peergroup ID', '2022-01-13 10:44:21', '2022-01-13 10:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id_title` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `soal` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id_title` int(11) NOT NULL,
  `title` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `panggilan` varchar(15) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `panggilan`, `gender`, `foto`) VALUES
(1, 'usertes2', '12345678', 'Myoi Mina', 'Mina', 'wanita', 'default.png'),
(2, 'imadeeko', '1234', 'I Made Eko Satria Wiguna', 'Eko', 'pria', 'profile.jpg'),
(3, 'afifah', 'afifah123', 'Afifah Lania Sihotang', 'Afifah', 'wanita', 'female.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_quiz` (`id_quiz`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`),
  ADD KEY `id_title` (`id_title`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id_title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`id_title`) REFERENCES `title` (`id_title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
