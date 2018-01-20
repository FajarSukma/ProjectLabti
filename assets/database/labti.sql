-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 08:35 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labti`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutleo`
--

CREATE TABLE `aboutleo` (
  `id` int(2) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutleo`
--

INSERT INTO `aboutleo` (`id`, `isi`) VALUES
(1, 'Lionel Andrés "Leo" Messi adalah seorang pemain sepak bola Argentina yang saat ini bermain untuk FC Barcelona dan merupakan kapten tim nasional sepak bola Argentina, bermain sebagai penyerang. Ia adalah pencetak gol terbanyak Barcelona sepanjang sejarah. Di usia 21 tahun, Messi telah dinominasikan untuk Ballon d''Or dan Pemain Terbaik Dunia FIFA. Pada 2009, ia memenangi Ballon d''Ordan Pemain Terbaik Dunia FIFA dan penghargaan pertama FIFA Ballon d`Or pada 2010 dan 2011.');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`) VALUES
(1, 'Parahhh! Messi Pecahkan Rekor 39 Tahun Legenda Jerman', '<p>Lionel Messi sukses memecahkan rekor Gerd Muller yang sudah bertahan selama kurang lebih 39 tahun, sebagai pencetak gol terbanyak di sebuah liga untuk klub yang sama di lima liga top Eropa. Pemain Barcelona, yang menyamai rekor Muller kala membuat penampilan ke-400 dirinya di La Liga kala tim Catalan melawan Levante pekan lalu, mencetak gol ke-366 di Divisi Primera kala tim menang 4-2 atas Real Sociedad semalam. Tendangan bebas kaki kiri Messi membuatnya melewati rekor 365 gol Muller di Bundesliga bersama Bayern Munchen.</p>\r\n\r\n<p>Legenda Jerman itu sukses mencatat rekor tersebut kala membela Bayern antara 1964 hingga 1979, di mana ia mencetak 365 gol dalam 427 pertandingan di Bundesliga. Messi sendiri memang tampil dahsyat musim ini di Barca, mencetak 16 gol dan melepas delapan assist di La Liga dan membantu klubnya memuncaki klasemen. Kemenangan Barca atas Sociedad membuat mereka kini unggul sembilan angka dari Atletico Madrid dan 19 dari rival abadi, Real Madrid. Messi dan rekan-rekannya belum pernah menelan satu pun kekalahan di La Liga musim ini.</p>\r\n'),
(2, 'Pertemuan Pertama, Mina Langsung Terkesan Dengan Messi', '<p>Bek anyar Barcelona Yerri Mina mengaku pertemuan pertamanya dengan Lionel Messi adalah momen spesial dan ia langsung terkesan dengan kerendahan hati La Pulga. Mina resmi menjadi bagian dari skuat Barca sejak hari Kamis (11/01) lalu. Ia kemudian menjalani sesi latihan perdananya dengan skuat Blaugrana pada hari Sabtu (13/01) kemarin. Saa itulah ia bertemu dengan semua penggawa Barca, termasuk Messi.</p>\r\n\r\n<p>Dari situ, Mina mengaku pertemuannya dengan La Pulga meninggalkan kesan mendalam. &quot;Pertemuan dengan Leo sangat spesial. Saya suka dirinya,&quot; akunya pada situs resmi Blaugrana. &quot;Saya mengagumi kerendahan hatinya. Itu adalah saat yang sangat spesial saat ia datang untuk menyapa,&quot; ungkap bek 23 tahun ini. Dalam kesempatan tersebut, Mina juga ditanya bagaimana kesannya dengan skuat Barca. Ia mengaku senang karena mendapat sambutan sangat hangat dari semua orang. &quot;Cara setiap orang menerima saya spektakuler, semua pada hari yang sama dengan kemenangan besar melawan Celta,&quot; tutur bek asal Kolombia ini.</p>\r\n'),
(3, 'Alba: Bermain dengan Messi Adalah Kemewahan', '<p>Bek sayap Barcelona, Jordi Alba, mengatakan bahwa memiliki Lionel Messi sebagai rekan setim merupakan sebuah kemewahan, usai laga melawan Celta Vigo semalam. Messi mendapat assist dari Alba untuk dua gol pembuka kala Barca menang 5-0 di laga Copa del Rey di Camp Nou, sebelum pemain Argentina ganti memberi umpan matang bagi pemain Spanyol untuk mencetak gol ketiga tuan rumah.</p>\r\n\r\n<p>Luis Suarez dan Ivan Rakitic juga mencetak gol untuk raksasa La Liga, yang lolos ke perempat final dengan agregat 6-1. Alba lantas memuji Messi, yang kini mencatat rekor 24 gol dalam 14 laga di Copa del Rey. &quot;Sebuah kemewahan memiliki Leo di tim ini, dia pemain terbaik sepanjang masa,&quot; tuturnya di GolTV. &quot;Kami selalu melihat posisi satu sama lain untuk mencetak gol dan hari ini kami melakukannya dua kali.&quot; &quot;Saya berharap Leo akan terus bertahan bersama kami, dia sudah amat spektakuler di level ini selama 12 tahun. Semoga dia terus bersama kami dan fans bisa terus menikmati permainannya.&quot;</p>\r\n'),
(4, 'Xavi: Messi Mengerti Segalanya', '<p>Xavi Hernandez kembali memberikan pujian kepada mantan rekannya di Barcelona; Lionel Messi. Menurut Xavi, Messi adalah sosok pemain yang sudah bisa memahami semuanya dalam sepakbola. Xavi menuturkan bahwa Messi memahami semua aspek dalam permainan sepakbola. Messi tahu benar cara mengatur permainan, kapan harus menguasai dan manahan bola dan kapan harus mengumpannya kepada rekan setim. Seiring bertambahnya usia, permainan Messi dinilai semakin berkembang.</p>\r\n\r\n<p>Sebelumnya ia berusaha menghancurkan lawan dengan kemampuannya dalam menggiring bola melewati penjagaan banyak lawan. Kini ia lebih sering menghemat tenaga dan justru &#39;mengundang&#39; lawan untuk mendekatinya. &quot;Messi mengerti semuanya. Sayangnya masih saja ada orang yang membandingkannya dengan pemain lain. Messi menguasai semuanya dalam sepakbola; ruang, waktu dan ia juga tahu di mana posisi kawan dan lawannya. Sebelumnya dia membuat permainan lawan tak berimbang dengan kemampuan dan kekuatannya. Kini ia melakukannya secara lebih natural; dengan menarik pemain lawan kepadanya,&quot; cetus Xavi kepada El Pais. Xavi menyamakan gaya main Messi itu seperti lebron James. Messi menguasai bola, membuat lawan mendatanginya dan pada saat yang tepat, mengirim bola kepada rekan yang berada dalam posisi lebih baik. &quot;Saat Messi melihat lawan yang membayanginya, dia tahu benar apa yang ditakutkan lawan. Dia akan menunggu rekannya datang dan kemudian mengirim bola pada momen yang tepat. Saya melihat hal yang sama dilakukan LeBron James. Dia akan membuat anda mendatanginya sebelum mengirim bola kepada rekan yang lebih bebas.&quot;</p>\r\n'),
(10, 'Messi: Saya Tidak Sempurna, Butuh Latihan Penalti', '<p>Lionel Messi menyebut bahwa ia merasa bukan sebagai pemain yang sempurna. Messi mengaku masih ada beberapa aspek yang masih bisa diperbaiki dalam permainannya. Messi kerap dianggap sebagai pemain terbaik sepanjang masa. Ia juga sering disebut sebagai salah satu pemain terbaik sepanjang masa. Messi dinilai memiliki kemampuan yang luar biasa hebat, baik secara fisik maupun mental. Namun Messi sendiri merasa bahwa permainannya belum sempurna. Salah satu aspek yang ingin ditingkatkan Messi adalah kemampuannya dalam mengeksekusi penalti. &quot;Saya masih ingin berusaha menjadi sempurna.</p>\r\n\r\n<p>Ada beberapa bagian dalam permainan saya yang masih bisa ditingkatkan lagi ke level maksimum. Saya ingin meningkatkan kemampuan penalti saya,&quot; terang Messi kepada Blic. Messi menambahkan bahwa ia tak punya niat untuk bertahan di sepakbola saat kariernya berakhir. Ia tak ingin melanjutkan kariernya sebagai pelatih. Saat berada di rumah pun, ia jarang membicarakan sepakbola. &quot;Saya kemungkinan besar mungkin tidak akan menjadi pelatih setelah pensiun sebagai pemain. Tapi masih ada waktu, mungkin pikiran saya akan berubah. Di rumah, kami jarang membicarakan sepakbola. kalau ada sesuatu yang luar biasa di timnas Argentina atau di Barcelona saja kami akan membicarakan sepakbola.&quot;</p>\r\n'),
(11, 'Bos Barca: Messi Pemain Terhebat Sejagat', '<p>Lionel Messi adalah pemain terbaik di seluruh dunia, menurut manajer Barcelona, Ernesto Valverde. Pria yang baru menangani kubu Camp Nou musim ini tersebut belum lama ini diminta memberikan penilaian soal performa para pemain yang ada di bawah asuhannya, termasuk di antaranya Messi. Pemain Argentina melewatkan beberapa penghargaan individu prestisius di 2017, namun banyak orang masih menganggapnya sebagai salah satu pemain terhebat di muka bumi - termasuk Valverde.</p>\r\n\r\n<p>Valverde mengatakan di Barca TV: &quot;Messi adalah pemain terbaik di seluruh dunia.&quot; &quot;Dia melakukan sesuatu yang luar biasa lewat tiap bola yang dia sentuh. Kami sangat beruntung bisa memilikinya di klub.&quot; &quot;Saya bisa melihat bagaimana ia menghadapi persaingan di depannya dan komitmennya begitu besar untuk tim dan klub. Terkait posisinya, bermain di tengah akan bagus untuknya dan untuk kami. Namun demikian, dia sanggup bermain bagus di posisi apapun.&quot; Barcelona kini tengah bersiap menghadapi Celta Vigo di ajang Copa del Rey.</p>\r\n'),
(12, 'Akmal Jelekkk', '<p><strong>Akmal </strong>kriboooooo bau<em> caammm</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Fajarrr Uhuiiii</em></p>\r\n'),
(13, 'Fajar Sukmaaa', '<h1>Halo Guysss</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Apa kabar guyss</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(5) NOT NULL,
  `gol` int(255) NOT NULL,
  `assist` int(255) NOT NULL,
  `trofi` int(100) NOT NULL,
  `penghargaan` int(100) NOT NULL,
  `rasiogol` double(10,2) NOT NULL,
  `kakikiri` int(255) NOT NULL,
  `kakikanan` int(255) NOT NULL,
  `pinalti` int(255) NOT NULL,
  `pertandingan` int(255) NOT NULL,
  `menang` int(255) NOT NULL,
  `seri` int(255) NOT NULL,
  `kalah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `gol`, `assist`, `trofi`, `penghargaan`, `rasiogol`, `kakikiri`, `kakikanan`, `pinalti`, `pertandingan`, `menang`, `seri`, `kalah`) VALUES
(1, 12, 0, 123, 31, 0.00, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutleo`
--
ALTER TABLE `aboutleo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutleo`
--
ALTER TABLE `aboutleo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
