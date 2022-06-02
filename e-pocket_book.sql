-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 02:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pocket_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `simpan_jwb`
--

CREATE TABLE `simpan_jwb` (
  `time` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `skor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `email`, `password`, `img`) VALUES
(1, 'didik setiawan', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ranking-panel.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuis`
--

CREATE TABLE `tbl_kuis` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `kunci_jawaban` varchar(1) NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `opsi_d` text NOT NULL,
  `opsi_e` text NOT NULL,
  `skor_soal` varchar(3) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kuis`
--

INSERT INTO `tbl_kuis` (`id_soal`, `soal`, `kunci_jawaban`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `skor_soal`, `penjelasan`) VALUES
(12, '<ol>\r\n	<li>Bencana banjir yang melanda beberapa kota tidak hanya disebabkan oleh tingginya curah hujan. Faktor kerusakan hutan di kawasan tangkapan air wilayah hulu sungai diidentifikasi sebagai penyebab utama sering terjadinya banjirDampaknya juga berupa pendangkalan sungai. Kerusakan hutan diebabkan oleh beberapa kegiatan manusia, antara lain pembelakan liar dan penambangan liar.&nbsp; Kerusakan hutan juga banyak terjadi akibat kebakaran hutan, alih fungsi hutan&nbsp; menjadi kebun kelapa sawit, pertambangan batu baru, dan penambangan emas&nbsp; liar. Cara mengatasi permasalahan tersebut adalah....<strong> (Memecahkan C4)</strong></li>\r\n</ol>', 'D', '<p>Membangun tanggul-tanggul di sepanjang aliran sungai</p>', '<p>Merevisi undang-undang tentang pencemaran</p>', '<p>Melarang usaha penambangan atau eksploitasi sumber daya alam</p>', '<p>Mengharuskan pabrik atau proyek melakukan analisa dampak lingkungan</p>', '<p>Memperketat pendidikan terhadap masyarakat dengan sistem</p>', '20', '<p>null</p>'),
(13, '<p>2.&nbsp;Tentukan secara benar Konservasi Lingkungan<em> </em>yang terdapat pada tabel dibawah ini! <strong>(Memilih C4).</strong></p>\r\n\r\n<table class=\"table\" border=\"1px solid #0000000\">\r\n	<thead>\r\n		<tr>\r\n			<td>Konservasi Lingkungan</td>\r\n			<td>Pernyataan</td>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1. Konservasi Tanah.</td>\r\n			<td>Reboisasi, pembuatan sengkedan, dan rotasi tanaman.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2.&nbsp;Konservasi sumber daya alam hayati</td>\r\n			<td>Perlindungan tempat hidup satwa melalui taman nasional.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.&nbsp;Konservasi air</td>\r\n			<td>Pemanfaatan sumber energi alternatif.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4.&nbsp;Konservasi energi</td>\r\n			<td>Pembuatan waduk.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5.&nbsp;Konservasi hutan</td>\r\n			<td>Peraturan penebangan hutan.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Pilihlah jawaban yang tepat sesuai dengan pernyataan...</p>', 'D', '<p>(1)</p>', '<p>(2)</p>', '<p>(3)</p>', '<p>(4)</p>', '<p>(5)</p>', '25', '<p>null</p>'),
(14, '<p>3. Salah satu prinsip etika lingkungan adalah : &quot;Memelihara sumber daya alam terbatas untuk kepentingan manusia dan semua spesies lainnya&quot;. Tindakan kita dalam menerapkan prinsip etika lingkungan tersebut adalah ....<strong> (Menganalisis C4)</strong></p>', 'E', '<p>Pemanfaatan sumber daya alam secara maksimal.</p>', '<p>Pemanfaatan sumber daya alam secara optimal</p>', '<p>Eksploitasi sumber daya alam untuk kepentingan manusia</p>', '<p>Eksploitasi sumber daya alam untuk kepentingan pembangunan</p>', '<p>Melindungi semua spesies untuk kepentingan manusia</p>', '15', '<p>null</p>'),
(15, '<p>4. Jakarta merupakan kota yang mendapatkan julukan kota polusi. Munculnya julukan tersbut bukan tanpa sebab, data dibawah ini bisa memberikan gambaran tentang parahnya polusi udara di kota tersebut.</p>\r\n\r\n<p>Pertama, skala global mendapatkan urutan No. 3 di dunia (setelah kota Mexico dan Thailand). Kedua, kadar partikel debu yang terkandung dalam udara tertinggi nomor 9 yaitu 104 Mikrogram/meter dari 111 survey oleh band dunia tahun 2004. Ketiga, jumlah hari dengan kualitas tidak sehat semakin meningkat tiap tahunnya. Pada tahun 2002 dinyatakan sehat selama 22 hari, tahun 2003 dinyatakan sehat selama 7 hari, berdasarkan penelitian kelompok kerja lingkungan hidup 2003 dan 2006 jumlahnya justru naik di atas 51 hari. Dengan kondisi seperti itu, tidak berlebihan jika di juluki &ldquo;kota polusi&rdquo; karena begitu keluar dari rumah penduduk akan langsung berhadapan dengan pencemaran lingkungan.</p>\r\n\r\n<p>Berdasarkan wacana di atas, permasalahan yang berhubungan dengan pencemaran lingkungan adalah... <strong>(Memecahkan C4)</strong></p>', 'B', '<p>Tingkat kesehatan kurang dari 50 hari</p>', '<p>Polusi udara yang terparah di dunia</p>', '<p>Kota yang berpenduduk banyak</p>', '<p>Memiliki taman kota</p>', '<p>Kota yang macet</p>', '15', '<p>null</p>'),
(16, '<p>5. Berkut adalah tahapan pembuatan daur ulang limbah kertas secara acak:</p>\r\n\r\n<ol>\r\n	<li>Tempelkan pada lidi atau kawat yang kita gunakan, dari ukuran terkecil hingga terbesar.</li>\r\n	<li>Tekuk atau lipat pada ujung kertas tersebut agar kertas terlihat seperti bunga</li>\r\n	<li>Gunting atau potong kertas menjadi 5 ukuran yang berbeda-beda. Buatlah 5 lembar dari masing-masing ukuran, karena untuk membuat bunga membutuhkan 25 potongan kertas.</li>\r\n	<li>Jadilah bunga yang indah dan menarik</li>\r\n	<li>Setelah sudah berbentuk bunga, Bungkuslah tangkai bunga dengan pita berwarna hijau.</li>\r\n</ol>\r\n\r\n<p>Berdasarkan data di atas urutan cara pembuatan proses daur ulang kertas yang sesuai adalah&hellip; <strong>(Memproyeksikan C5)</strong></p>', 'A', '<p>3-2-1-5-4</p>', '<p>1-3-4-2-5</p>', '<p>3-2-1-4-5</p>', '<p>2-5-4-3-1</p>', '<p>1-2-5-4-3</p>', '25', '<p>null</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_kuis`
--
ALTER TABLE `tbl_kuis`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kuis`
--
ALTER TABLE `tbl_kuis`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
