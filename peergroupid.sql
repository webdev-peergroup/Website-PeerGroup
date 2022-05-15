-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2021 pada 07.49
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
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
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `kategori`, `penulis`, `deskripsi`, `text`, `cover`, `sumber_cover`, `created_at`) VALUES
(1, 'Yuk, Belajar Memulai Karir di Dunia Startup', 'yuk-belajar-memulai-karir-di-dunia-startup', 'karir', 'Muhammad Perwira Hutama A.', 'Halo captainers! buat kamu yang mau kerja di dunia startup, simak tips berkarir di dunia startup biar kamu lebih berpeluang diterima.', '<p class=\\\"paragraph\\\">Perusahaan startup (perusahaan rintisan) sedang populer belakangan ini. Karena, perusahaan rintisan berbasis tekonologi dan digital ini menyediakan ragam aplikasi dan layanan yang memudahkan kehidupan masyarakat. </p>\\r\\n                    <p class=\\\"paragraph\\\">Dari sisi lain, perusahaan startup  juga merupakan tempat generasi muda berkumpul dengan lingkungan kerja menyenangkan, jam kerja fleksibel, serta prospek kerja menjanjikan. </p>\\r\\n                    <p class=\\\"paragraph\\\">Dengan berbagai kelebihan seperti itu, tak heran banyak orang bermimpi menjadi bagian dari perusahaan startup. Mimpi tidak akan terjadi tanpa persiapan sehingga orang-orang mulai berlomba-lomba mengembangkan potensi diri mereka. Captainers, pasti salah satunya, kan? </p>\\r\\n                    <p class=\\\"paragraph\\\">Nah, karena itu, kita akan membagikan beberapa hal yang harus kamu siapkan untuk meniti karir di tempat impian banyak orang. Yuk, langsung saja kita lihat apa yang perlu dipersiapkan untuk menjadi bagian dari stratup. Check this out! </p>\\r\\n                    <h5>1.	Harus Bisa Beradaptasi</h5>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Captainers perlu tahu, nih, kalau lingkungan kerja di startup berbeda dengan perusahaan lainnya. Seperti yang dikatakan sebelumnya, perusahaan stratup biasanya didominasi oleh para generasi muda sehingga lingkungan kerja lebih menyenangkan, jam kerja fleksibel, dan arus kerjanya lebih cepat mengalami perubahan. </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Lebih lanjut, dilansir dari The Balance Careers, perusahaan biasanya mencari orang-orang yang termotivasi dan dapat mempelajari berbagai hal secara mandiri. Dengan demikian, kamu harus memiliki inisiatif untuk mengerjakan sesuatu tanpa perintah atasan atau orang lain. </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Jadi, sebelum memutuskan bergabung dengan perusahaan startup, kamu harus bisa beradaptasi dengan lingkungan kerja yang tidak seperti biasanya. Bisa, kan, Capt? Pasti bisa! </p>\\r\\n                    <h5>2.	Tingkatkan Kemampuan</h5>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Sebelum kamu melamar pekerjaan ke perusahaan seperti ini, kamu harus memahami dulu, nih, seperti apa posisi yang kamu tuju tersebut. Setelah itu, kamu bisa buat strategi untuk meningkatkan kemampuan dan pengetahuan yang bisa mendorong kamu mencapai tujuan itu. </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Gunakan teknologi yang sudah semakin berkembang sekarang ini untuk mengembangkan kemampuan kamu. Sudah banyak startup gratis yang menyediakan berbagai pelatihan secara daring seperti Udemy, Coursera, dan Hacktiv8. </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Yuk, mulai gunakan kemajuan teknologi untuk kembangkan kemampuan kamu. Semakin meyakinkan kemampuan yang kamu miliki, maka semakin besar juga peluang meraih karir yang diimpikan. Semangat, Captainers! </p>\\r\\n                    <h5>3.	Perluas Relasi</h5>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Di zaman sekarang, relasi merupakan salah satu hal penting yang dapat mendorong kita meniti karir, termasuk di bidang startup. Dengan memperbanyak relasi, kita juga memperluas jangkauan karir yang kita inginkan.</p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Ada banyak cara memperluas relasi, salah satunya memanfaatkan LinkedIn, sebuah platform profesional bagi pencari kerja dan recruiter. LinkedIn menyediakan banyak informasi yang berhubungan dengan karir atau pekerjaan. Mulai dari berbagai tip dan trik, cerita pengalaman kerja, sampai lowongan pekerjaan.</p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Lewat LinkedIn kamu bisa mempelajari perusahaan tujuanmu dan mencari relasi dengan orang-orang didalamnya. Sebelum pergi ke suatu tujuan, Captainers tentu harus mengenal bagaimana keadaan lingkungan dan orang-orang di sekitarnya, kan? </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Mulai sekarang, Captainers bisa langsung buat akun LinkedIn-nya dan terus kembangkan relasi didalamnya, ya! </p>\\r\\n                    <h5>4.	Mulailah Dengan Curriculum Vitae (CV) yang Menarik</h5>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Yap, setelah Captainers yakin ingin berkarir di dunia startup, langkah selanjutnya yang tidak kalah penting harus kamu lakukan adalah membuat atau memperbaharui CV. CV merupakan informasi data seseorang seperti identitas diri, pendidikan, pengalaman, dan kemampuan yang dimiliki. </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Hal pertama yang akan dilirik recuiter adalah CV. Semakin menarik CV yang kamu lampirkan, maka semakin terbuka kesempatan menjadi bagian dari mereka. Seorang Profesional Human Resources and Senior Employer Branding Lazada Indonesia, Samuel Ray, mengungkapkan CV yang baik tidak perlu panjang dan bertele-tele. Hal yang paling penting adalah kamu dapat menjelaskan seluruh pengalaman kamu dengan kalimat yang singkat dan jelas, serta bahasa yang baik. </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Selain itu, pastikan CV kamu sudah berbasis Applicant Tracking System (ATS), ya! Agar CV-mu tidak terlewat ketika proses penyaringan oleh sistem yang digunakan perusahaan. </p>\\r\\n                    <p class=\\\"paragraph text-list-paragraph\\\">Nah, itu dia keempat hal yang harus Captainers siapkan sebelum melanjutkan langkah menuju perusahaan startup impian. Jangan lama-lama, segera siapkan dirimu. Nantikan berbagai tip menarik dari Peer Group ID lainnya, ya!</p>', 'header artikel.jpg', 'Pixabay.com', '2021-11-27 10:02:30'),
(2, 'Pilih Jurusan Kuliahmu Dengan 5 Tips Ini!', 'pilih-jurusan-kuliahmu-dengan-5-tips-ini!', 'jurusan', 'Rima Anhar Roospita', '', '<h5>Hai Captainers! </h5><p class=\"paragraph open\">Ketika mendengar kata “kuliah”, hal yang seringkali muncul dalam pikiran kita adalah jurusan. Jurusan menjadi sangat penting untuk dipertimbangkan, mengingat durasi waktu kuliah pada umumnya adalah empat tahun, dan itu bukanlah waktu yang sebentar untuk menuntut ilmu dan menginvestasikan, waktu, tenaga, dan finansial kita. Oleh karena itu, Captainers perlu banget, nih, untuk tahu tip memilih jurusan yang tepat. Yuk, kita pelajari bersama! </p> <h5>1.   Kenali Dirimu Sendiri</h5><p class=\"paragraph text-list-paragraph\">Kalimat tersebut mungkin sering didengar oleh Captainers dan terkesan klise, yah. Tapi jangan salah, lho, ini adalah aspek terpenting sebagai langkah awal dalam proses menemukan minat dan bakatmu. Hal ini dikarenakan, dalam perjalanan mengenali diri sendiri, kamu akan mengetahui kepribadian dan kemampuanmu sehingga memudahkan kamu untuk menemukan jati dirimu yang sesungguhnya. </p><h5>2.   Temukan Minat dan Passionmu</h5><p class=\"paragraph text-list-paragraph\">Dalam proses menemukan minat dan passionmu, kamu perlu mengetahui bidang apa yang kamu sukai dan ingin ditekuni. Perlu digarisbawahi bahwa kamu bukan hanya menyukai, tetapi juga menikmati kegiatan dengan bidang yang bersangkutan. Hal ini akan mengarahkan kamu untuk menemukan kemampuan yang kamu miliki. Oleh karena itu, poin ini sangat penting untuk kamu lakukan. </p><h5>3.   Kenali dan Pahami Perguruan Tinggi dan Jurusan</h5> <p class=\"paragraph text-list-paragraph\">Untuk menambah pengetahuan dan wawasan mengenai pilihan jurusan, Captainers perlu banget, nih, untuk memeriksa kanal perguruan tinggi untuk mempelajari lebih lanjut tentang penawaran program yang tersedia. Dengan kamu banyak membaca dan mempelajari berbagai jurusan dan perguruan tinggi, kamu akan semakin mengenali ketertarikanmu pada suatu bidang tertentu, lho. Poin ini juga bisa kamu lakukan dengan bertanya kepada orang tua, guru, kakak kelas, maupun konselor pendidikan. </p><h5>4.   Renungkan Jalur Karir yang Kamu Impikan</h5><p class=\"paragraph text-list-paragraph\">Kamu perlu merenungkan karir seperti apa yang diimpikan. Poin ini akan membawa kamu untuk memahami lebih jauh hubungan antara jurusan yang kamu minati dengan jenis pekerjaannya. Kamu juga dapat mengetahui keahlian lain apa saja yang dibutuhkan dalam jurusan yang kamu minati. Merenungkan jalur karir akan membantu kamu memantapkan hati untuk memilih jurusan. Tetapi, Captainers juga perlu ingat bahwa pekerjaan di era modern ini sudah sangat beragam sehingga banyak sarjana diluar sana yang bekerja tidak sesuai dengan jurusannya. So, yang paling penting adalah kamu memiliki minat yang besar pada jurusan tersebut. </p><h5>5.   Believe in Yourself</h5><p class=\"paragraph text-list-paragraph\">Ketika kamu sudah memantapkan hati memilih jurusan, seringkali kamu merasa goyah karena berbagai saran dan masukan dari orang-orang sekitarmu. Entah itu berkaitan dengan prospek pekerjaan, passing grade, predikat jurusan favorit, dan lain sebagainya, yang membuatmu kembali merasa ragu dan bingung. Jika ini terjadi, coba tenangkan diri sejenak dan ajak dirimu sendiri untuk kembali merefleksikan poin-poin yang telah kamu lalui di atas untuk kembali menemukan alasan dan motivasimu yang kuat mengapa memilih jurusan tersebut. Captainers perlu ingat bahwa “this is your life, you own it, and you are the one who will go through what you decide” (Ini hidupmu, kamu memilikinya, dan kamulah yang akan melalui apa yang kamu putuskan). So, always believe in yourself, yah! </p><p class=\"paragraph close\">Nah, gimana dengan tipnya Captainers? Relatable banget kan dengan kebingungan yang mungkin sedang Captainers rasakan. 	But, it’s okay guys, memilih jurusan adalah salah satu keputusan besar dalam hidup. Jadi sangat wajar kalau kita merasakan kebingungan yang teramat besar dan seringkali keputusannya berubah-ubah. Proses ini justru akan membantu kita untuk lebih kritis dalam memahami diri sendiri dan menemukan tempat yang paling cocok untuk diri kita sendiri. Lalu, jika Captainers sudah yakin dengan keputusan yang diambil, just do it and make it happens! </p>', '', '', '2021-11-27 10:03:13'),
(3, 'uji coba', 'uji-coba', 'karir', 'eko', 'sasasasasas', 'asas', 'default.svg', '', '2021-11-27 10:03:28'),
(14, 'Tes', '', 'self development', 'I Made Eko Satria Wiguna', 'fgfgdgdfg', 'fgdgfdgdfgdfgdg', 'default.svg', '', '2021-11-27 12:15:10'),
(17, 'I Made Eko Satria Wiguna', 'i-made-eko-satria-wiguna', 'self development', 'I Made Eko Satria Wiguna', 'asdasdasdasd', 'sadasdasdasdasd', 'default.svg', 'sadsdasd', '2021-11-27 13:07:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `sumber_cover` varchar(255) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `gender`, `foto`) VALUES
(1, 'usertes2', '12345678', 'Myoi Mina', 'wanita', 'latar-belakang-keluarga-mina-twice-ramai-dibicarakan-ini-alasannya_170.jpeg'),
(2, 'imadeeko', '1234', 'I Made Eko Satria Wiguna', 'pria', 'profile.jpg'),
(3, 'afifah', 'afifah123', 'Afifah Lania Sihotang', '', 'female.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
