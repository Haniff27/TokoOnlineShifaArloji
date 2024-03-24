-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2023 pada 00.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shifaarloji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(3) NOT NULL,
  `nm_admin` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nm_admin`, `username`, `email`, `password`) VALUES
(1, 'administrator', 'admin', 'admin@gmail.com', 'admin'),
(2, 'shifa arloji', 'shifa', 'shifaarloji27@gmail.com', 'shifaarloji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(3) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_kategori`, `judul`, `isi`, `gambar`, `tgl`) VALUES
(43, 15, '5 Rekomendasi Jam Tangan Pria Trendy untuk Berbagai Acara! (2023)', '<p>Jam tangan bukan hanya untuk menunjukkan waktu, tapi juga bisa menjadi aksesoris untuk menambah gaya fashionmu. Dengan memilih jam tangan pria trendy, kamu bisa tampil lebih modern dan stylish. Berbagai model jam tangan pria trendy kini banyak tersedia di pasaran.</p>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/sJJj0Htznm.jpg\" width=\"200\" height=\"200\" /></p>\r\n<ul>\r\n<li>Berbicara masalah jam tangan untuk pria maka mustahil untuk tidak memasukan Daniel Wellington. Brand yang juga dikenal dengan nama DW ini secara konsisten terus menghasilkan beragam jam tangan dengan desain yang khas. Bahkan desain tersebut seolah menjadi karakter dari brand ini.</li>\r\n</ul>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/GC8fn9zNNe.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<ul>\r\n<li>Merk jam tangan pria trendy lainnya adalah Rolex. Mungkin bisa dikatakan jika Rolex adalah brand jam tangan yang paling populer untuk laki-laki. Salah satu daya tarik dari jam tangan ini adalah bisa menunjukan prestise dan selera yang tinggi dari pengguna.</li>\r\n</ul>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/uD09gVB4mz.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<ul>\r\n<li>Untuk Anda yang ingin tampil gaya dan selalu mengikuti teknologi, maka jam tangan dari Fossil merupakan salah satu pilihan yang tepat. Brand ini sendiri memiliki keunikan dari desainnya yang mendukung karakter para pengguna. Mulai dari segi desain misalnya, Fossil memiliki beberapa pilihan mulai dari jam tangan kulit untuk Anda yang ingin tampil elegan, ada juga stainless steel untuk Anda yang ingin tampil maskulin.</li>\r\n</ul>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/b4tNGs8qPQ.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<ul>\r\n<li>Salah satu merk jam tangan pria populer lainnya yang juga banyak digunakan di Indonesia adalah Casio. Salah satu keunikan dari jam tangan ini adalah desain yang bervariasi. Desain dari Casio sendiri mulai dari yang klasik, modern, bahkan tersedia untuk anak-anak.</li>\r\n</ul>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/eH2oFAVy6p.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<ul>\r\n<li>Sempat populer beberapa tahun lalu, saat ini brand jam tangan satu ini masih menjadi pilihan banyak orang. G-Shock sendiri merupakan salah satu brand yang desainnya terus berkembang. Salah satu keunggulan dari jam tangan ini adalah tampilannya yang sporty.</li>\r\n</ul>', 'jam tangan pria.jpg', '2023-07-26'),
(44, 16, '5 Rekomendasi Jam Tangan Alexandre Christie untuk Pria dan Wanita yang Ingin Tampil Penuh Gaya (2023', '<p>Mau tampil keren dengan jam tangan? Kamu bisa memilih untuk mengenakan jam tangan dari Alexandre Christie. Ada banyak kelebihan dari jam tangan merek yang satu ini, loh. Simak deretan kelebihannya dan juga jangan lewatkan untuk mengoleksi produk jam tangan Alexandre Christie untuk pria dan wanita di bawah ini!</p>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/PM0nXiPQQK.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<p>1. Alexandre Christie ACF6574 MCBSSBA merupakan pilihan pertama kami. Jam tangan pria ini hadir dengan desain yang berkesan kokoh dan tangguh. Jam memiliki case dan strap berbahan stainless steel yang anti karat dan tampak mewah. Case berukuran 44mm dengan ketebalan 12 mm.</p>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/FSob2HayAY.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<p>2. Alexandre Christie ACF6608 MCRGABA merupakan rekomendasi kami selanjutnya. Jam tangan ini lebih cocok untuk kamu yang gemar beraktivitas outdoor, namun tetap keren juga dipakai saat beraktivitas indoor.</p>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/MoVa6TCiiQ.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<p>3. Alexandre Christie ACF6570 MFBIPBA bisa jadi koleksi kamu selanjutnya. Jam keren ini hadir dengan desain keseluruhan berwarna hitam kecuali bagian dial yang berwarna putih. Jam dengan case bundar ini tergolong analog. Casenya memiliki diameter 42mm dengan ketablan 12 mm.</p>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/ypPhSTHdZu.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<p>4. Alexandre Christie ACF8662 MDBSSSL hadir dengan case unik berbentuk kotak. Ini bikin tampilan makin modis. Diameter case jam tangan adalah 33 mm dengan ketebalan 7 mm. Jam tangan pria ini hadir dengan case dan strap berbahan stainless steel yang kokoh dan anti karat.</p>\r\n<p style=\"padding-left: 210px;\"><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/uvLqDMOq8z.jpg\" alt=\"\" width=\"200\" height=\"200\" /></p>\r\n<p>5. Alexandre Christie ACF9376 MHRIPBAYL adalah pilihan jam tangan pria lainnya untuk kamu. Jam yang satu ini modelnya digital. Nyaman dikenakan dengan strap silikon dan case stainless steel. Desainnya cocok untuk kamu yang gemar beraktivitas outdoor.</p>', 'wxlJDubSQv.jpg', '2023-07-26'),
(45, 17, '5 Rekomendasi Jam Tangan Sport yang Bikin Gayamu Makin Stylish Kala Berolahraga (2023)', '<p>Jam tangan memang menjadi aksesori yang wajib kenakan. Bukan hanya sebagai penunjuk waktu, jam tangan juga bisa dikenakan saat berolahraga. Tujuannya adalah untuk membantu kita mengecek kondisi tubuh atau bisa juga digunakan untuk membantu olahraga yang kita lakukan. Jam tangan sport bisa juga bikin gaya kamu makin keren. Nah, intip rekomendasi jam tangan sport dari kami!</p>\r\n<div id=\"article_element_541670\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">Garmin Enduro, Silver</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/KJrdJp6Gc4.jpg\" alt=\"Garmin Enduro, Silver \" /></div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Garmin Enduro, Silver hadir dengan lensa yang bisa diisi tenaga surya. Ini bisa memperpanjang masa pakai baterai. Masa pakai jamnya hingga 80 jam dalam model GPS dan 300 jam dalam mode baterai maksimal. Jam ini bisa tahan 65 hari dalam mode jam tangan pintar dengan pengisian daya matahari.<br /><br />Kamu yang ingin berolahraga lebih maksimal bisa memakai jam tangan sport yang satu ini. Layarnya berukuran 1, 4 inci sehingga mudah dilihat bahkan meski sedang di luar ruangan sekalipun. Jam ini mendukung untuk lari, mendaki, bersepeda, dan lain sebagainya. Jam juga bisa memberikan panduan latihan agar lebih bugar.<br /><br />Desainnya kokoh dan bisa tahan cuaca sehingga cocok untuk aneka aktivitas olahraga. Case jam memakai bahan titanium berlapis DLC yang ringan dan tahan gores. Strap jamnya super ringan dan elastis sehingga tahan lama digunakan.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"541670\">&nbsp;</div>\r\n<div id=\"article_element_541671\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">Jam Tangan Sport Suunto 5 Graphite Steel</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/RjG6NMBe1S.jpg\" alt=\"Jam Tangan Sport Suunto 5 Graphite Steel\" /></div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Jam Tangan Sport Suunto 5 Graphite Steel ini dirancang agar kamu bisa menemukan ritme olahraga yang pas. Baterainya tahan lama sehingga kamu tak perlu berkali-kali mengisi ulang. Ada fitur GPS yang membantu kamu menentukan arah saat berlari atau bersepeda. Produk ini juga hadir dengan fitur pelacak aktivitas 24 jam. Dengan demikian, setiap langkah, kalori, tingkat stres, hingga kualitas tidur bisa terlacak dengan baik. Kamu jadi bisa lebih bugar dan lebih maksimal dalam berolahraga.<br /><br />Desainnya keren dengan bahan kaca dari kristal, bahan ring dari stainless steel, dan bahan case jam dari serat fiber yang kokoh. Strap jam tangan dari rubber silikon yang nyaman dipakai seharian. Dalam pembelian sudah lengkap berisi jam tangan, loop, dan juga USB kabel untuk isi ulang. Ada juga buku manual dan garansi yang disertakan.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"541671\">&nbsp;</div>\r\n<div id=\"article_element_541672\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">Smartwatch Garmin Forerunner 245</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/i6wZgrjMxJ.jpg\" alt=\"Smartwatch Garmin Forerunner 245 \" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Smartwatch Garmin Forerunner 245 ini juga bisa jadi pilihan kamu. Jam tangan pintar ini bisa memberi notifikasi agar kamu tetap aman saat berolahraga meski kamu tidak sedang didampingi oleh coach yang profesional. Masa pakai baterai adalah 7 hari dalam mode smartwatch dan 24 jam dalam mode GPS. Kamu bisa mengisi ulang baterainya dengan mudah.<br /><br />Nikmati musik dari Spotify sembari kamu berolahraga. Kamu bisa menyimpan dan memutar lagu favorit dengan jam tangan keren ini. Desain jamnya menarik karena tampilan jam, widget, dan aplikasi bisa diubah sesuai selera. Jam ini sudah kompatibel dengan Android dan iOS. Aman dipakai berenang karena water resistant hingga 5 ATM. Jam ini memiliki berat 38, 5 gram.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"541672\">&nbsp;</div>\r\n<div id=\"article_element_541673\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">NORTH EDGE Laker</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/wQAGPdARUJ.jpg\" alt=\"NORTH EDGE Laker\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>NORTH EDGE Laker adalah rekomendasi berikutnya untuk kamu. Jam tangan ini memiliki kemampuan tahan air hingga kedalaman 50 meter. Bahan kacanya memakai mineral yang kokoh dan tak mudah pecah. Strap jam tangan dari silikon yang nyaman dan fleksibel. Bahan casing-nya dari logam yang tahan lama.</p>\r\n<div id=\"article_element_541674\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">Solar Power GX-56BB-1DR Casio</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/bKbo3n5pdo.jpg\" alt=\"Solar Power GX-56BB-1DR Casio\" /></div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Solar Power GX-56BB-1DR Casio merupakan produk lain yang bisa kamu coba. Jam tangan keren ini memakai tenaga surya untuk pengisian dayanya sehingga kamu tak perlu bolak balik isi ulang. Desain jamnya kokoh dan keren. Bahan case dan strap dari resin yang kuat. Jam sudah shock proof dan waterproof. Produk ini juga tahan lumpur sehingga cocok untuk aneka aktivitas.</p>\r\n</div>\r\n</div>', 'LMjn1kicDR.jpg', '2023-07-26'),
(46, 18, '5 Rekomendasi Jam Tangan Pria Terbaru dari G-Shock yang Menarik dari Pakar Fashion (2023)', '<p>Siapa, sih yang tak tahu jam tangan G-Shock? Jam tangan keluaran Casio ini bahkan menjadi salah satu koleksi paling populer di industri jam tangan. Popularitasnya tentu membuat banyak orang tertarik untuk memilikinya. Berikut adalah 10 jam tangan pria terbaru keluaran G-Shock yang patut untuk dimiliki.</p>\r\n<div id=\"article_element_626739\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">1. G-Shock Midnight Fog Series, Warna Ungunya Bikin Menarik</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/Teuur9Bnym.jpg\" alt=\"1. G-Shock Midnight Fog Series, Warna Ungunya Bikin Menarik\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Jajaran produk seri Midnight Fog Series G-SHOCK yang dirilis pada 2022 sebagai barang terbatas. Sebagai salah satu produk terbaru, jam tangan ini masih sangat sulit ditemukan di Indonesia. Hasil akhir gradien ungu yang cantik, gelang resin ini disempurnakan dengan warna yang berkilauan.<br /><br />Perpaduan warna dan desain yang simpel namun ikonik memberikan kesan canggih. Tidak mencolok, tapi jam tangan ini bisa memamerkan gaya dan glamor Anda. Jika Anda ingin tampil chic dan menawan tanpa khawatir dengan penampilan, jam tangan ini cocok untuk Anda.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">\r\n<div class=\"articleInner clearfix\">\r\n<div class=\"articleDetail\">\r\n<div class=\"price\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"626739\">&nbsp;</div>\r\n<div id=\"article_element_535784\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">2. G-Shock GW-B5600-2DR, Dengan Lampu LED Otomatis Penuh</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/OBwgUwy4zC.jpg\" alt=\"2. G-Shock GW-B5600-2DR, Dengan Lampu LED Otomatis Penuh\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Rekomendasi jam tangan G-Shock yang pertama adalah G-Shock GW-B5600-2DR. Jam tangan keluaran Casio ini memiliki diameter 42,8 mm dengan ketebalan 13,4 mm. Casing-nya terbuat dari bahan plastik dengan tali berbahan resin.<br /><br />Jam tangan pria ini memiliki ketahanan terhadap air hingga 200 meter. G-Shock GW-B5600-2DR juga dibekali dengan sejumlah fitur fungsional, seperti lima alarm harian, peringatan daya baterai rendah, penghemat daya, serta sinyal waktu hitungan jam. Produk dari Casio ini juga hadir dengan lampu LED otomatis penuh yang dapat diatur durasi iluminasinya.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"535784\">&nbsp;</div>\r\n<div id=\"article_element_626707\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">3. G-Shock 5600, Desain Simpel untuk Penampilan Sehari-hari</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/lpCSKlRzRv.jpg\" alt=\"3. G-Shock 5600, Desain Simpel untuk Penampilan Sehari-hari\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>G-SHOCK 5600 direkomendasikan bagi mereka yang mencari jam tangan untuk dipakai sehari-hari. Produk ini hanya memiliki satu desain warna. Tampilan bodi dan gelang yang benar-benar matte memberikan tampilan yang anggun dan minimalis.<br /><br />Desain ini memungkinkan jam tangan G-Shock terlaris ini dipasangkan dengan semua jenis dan warna pakaian. Anda dapat mencocokkannya dengan koordinasi polos serta denim biru. Penampilanmu tetap elegan. Harganya juga terjangkau, jadi tidak perlu menyiapkan budget yang besar.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div id=\"article_element_626484\" class=\"articleElement article-element-title\">\r\n<h2 class=\"article-element-title__orange-border\">Gravitymaster Series</h2>\r\n</div>\r\n<div id=\"article_element_535787\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">4. G-Shock GR-B200-1A2, Casing Terbuat dari Resin dan Serat Karbo</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/0ahOMRBgP1.jpg\" alt=\"4. G-Shock GR-B200-1A2, Casing Terbuat dari Resin dan Serat Karbo\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Bosan dan jam tangan berbahan plastik dan juga stainless steel? Anda bisa beralih pada jam tangan karbon, seperti G-Shock GR-B200-1A2. Jam tangan ini memiliki casing resin dengan serat karbon. Sementara bagian bezel terdiri dari tiga lapis resin halus yang disisipi serat karbon.<br /><br />Jam tangan ini menggunakan kaca mineral sebagai penutup dial-nya. G-Shock GR-B200-1A2 dibekali dengan sejumlah fitur, seperti lampu LED ganda, kompas digital, altimeter, barometer, dan termometer. Produk ini juga tahan guncangan dan tahan air hingga 200 meter.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"535787\">&nbsp;</div>\r\n<div id=\"article_element_535785\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">5. G-Shock GR-B100GB-1ADR, Tahan Banting dan Tahan Air Hingga 200 Meter</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/zJZp413R4K.jpg\" alt=\"5. G-Shock GR-B100GB-1ADR, Tahan Banting dan Tahan Air Hingga 200 Meter\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Apakah Anda menyukai jam tangan bermerek dengan desain trendy? G-Shock GR-B100GB-1ADR dari Casio bisa menjadi pilihan. Produk ini merupakan jam tangan digital analog yang didesain trendy dengan index arabic dan juga numeral.<br /><br />Jam tangan ini memadukan material stainless steel pada casing dan rubber pada bagian strap. Sejumlah fitur menarik juga melengkapi produk ini, misalnya saja stopwatch, LED light, countdown timer, dan daily alarm. Produk ini juga tahan banting dan tahan air hingga kedalaman 200 meter.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"articleElement articleElementImage  mb0\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>&nbsp;</p>\r\n</div>', '3duKsxZjN5.jpg', '2023-07-26'),
(47, 15, 'Rekomendasi Jam Tangan Pria untuk Dikoleksi Sekaligus Dipakai Sendiri', '<div id=\"article_element_533551\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">1. Jam Tangan NAVIFORCE NF9068</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/hYRM04HLOk.jpg\" alt=\"1. Jam Tangan NAVIFORCE NF9068\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Jam Tangan NAVIFORCE NF9068 adalah jam tangan keren untuk kamu koleksi. Produk yang satu ini desainnya elegan dan bikin tampilan makin percaya diri. Dengan mesin Quartz Jepang, akurasi waktunya bisa terjamin. Jam analog ini memiliki diameter 4,8 cm dan fitur water resistant hingga 3 ATM.<br /><br />Dilengkapi dengan tali kulit asli, jam tangan ini terkesan vintage tapi mengesankan. Produk ini hadir dengan detail tanggal, chronograph, dan hari. Pembelian sudah dilengkapi garansi mesin 1 tahun. Ada kotak jam tangan, baterai cadangan, dan juga kartu garansi saat pembelian.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"533551\">&nbsp;</div>\r\n<div id=\"article_element_533552\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">2. Jam Tangan Pria Casio G-Shock Original GA-700-4A</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/z2wWcpBqXS.jpg\" alt=\"2. Jam Tangan Pria Casio G-Shock Original GA-700-4A\" /></div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Jam Tangan Pria Casio G-Shock Original GA-700-4A cocok untuk kamu koleksi. Produk yang satu ini hadir dengan diameter 5,3 cm. Ukuran casing jam tangan ini adalah 57 x 5,3 x 1,8 cm. Jam dengan berat 69 gram ini nyaman digunakan dalam berbagai aktivitas.<br /><br />Kesan jamnya sporty dan cocok untuk dipakai beraktivitas di luar ruangan maupun di dalam ruangan. Jam tangan keren tersebut dilengkapi resin untuk strapnya. Jam ini tahan goncangan dan juga tahan air hingga kedalaman 200 meter. Bagian kacanya berbahan mineral. Ada lampu LED dengan durasi iluminasi yang bisa disesuaikan.<br /><br />Ada 31 zona waktu yang tersedia pada jam ini. Fitur lainnya adalah stopwatch, alarm, penghitung waktu mundur, chronograph, dan lain sebagainya.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"533552\">&nbsp;</div>\r\n<div id=\"article_element_533553\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">3. Jam Tangan SEIKO Chronograph SKS629P1</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/7t5lrSUnG3.jpg\" alt=\"3. Jam Tangan SEIKO Chronograph SKS629P1\" /></div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Jam Tangan SEIKO Chronograph SKS629P1 tentu tidak bisa kamu lewatkan. Produk yang satu ini memiliki case dari stainless steel dengan case 44,9 mm. Bagian kacanya dari kristal dengan ketahanan air 10 bar. Fiturnya meliputi chronograph, tanggal, jam, menit, dan detik.<br /><br />Jam tangan keren ini memiliki ketebalan case 12 mm. Produk ini memiliki strap dari bahan stainless steel sehingga terkesan kokoh dan elegan. Dengan mesin Quartz, akurasi jamnya terjamin. Dalam pembelian ada kartu garansi, buku manual, strap cadangan, dan kotak jam.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"533553\">&nbsp;</div>\r\n<div id=\"article_element_533554\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">4. Fossil GRANT CHRONOGRAPH FS5068</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/UMyEPDCFXt.jpg\" alt=\"4. Fossil GRANT CHRONOGRAPH FS5068\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Fossil GRANT CHRONOGRAPH FS5068 merupakan rekomendasi selanjutnya. Produk yang satu ini bergaransi 2 tahun. Jam tangan keren ini memakai mesin Quartz. Dengan ukuran case 44mm, produk ini keren dipakainya. Bahan strapnya dari kulit asli sehingga kesannya lebih vintage. Jam ini antiair hingga kedalaman 5 ATM.<br /><br />Dalam pembelian sudah ada buku manual dan juga kotak jam. Produk keren ini dijamin cocok kamu kenakan dalam berbagai acara.</p>\r\n</div>\r\n<div class=\"articleElement articleElementProductItemForAsia\">&nbsp;</div>\r\n<div class=\"rankingSection articleElement\" data-resource-type=\"product_element\" data-resource-id=\"533554\">&nbsp;</div>\r\n<div id=\"article_element_533555\" class=\"articleElement article-element-title\">\r\n<h3 class=\"article-element-title__orange-background\">5. Police - PL.15924JPCL/48P - Jam Tangan Pria</h3>\r\n</div>\r\n<div class=\"articleElement articleElementImage  mb0\">\r\n<div><img src=\"https://ds393qgzrxwzn.cloudfront.net/resize/m320x450/cat1/img/images/0/r8MOs6B9jm.jpg\" alt=\"5. Police - PL.15924JPCL/48P - Jam Tangan Pria\" /></div>\r\n<div class=\"imageVia sourceUrlMediumImage\">&nbsp;</div>\r\n</div>\r\n<div class=\"rankingSection articleElement articleElementText article-styled\">\r\n<p>Police - PL.15924JPCL/48P - Jam Tangan Pria tentu bisa jadi pilihan untuk dikoleksi. Jam keren ini memakai automatic movement. Bahan case-nya dari plastik dengan dial berwarna putih. Untuk strap-nya dari plastik dengan warna transparan. Produk ini tahan air hingga 3 ATM. Dengan closure tipe buckle, jam ini dijamin kuat dan tidak mudah lepas. Kaca jamnya dari bahan mineral. Produk ini memiliki garansi 2 tahun.</p>\r\n</div>', 'BHt3ZMuwCN.jpg', '2023-07-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(3) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `berat` int(2) NOT NULL,
  `harga` int(7) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_kategori`, `nm_barang`, `berat`, `harga`, `stok`, `gambar`, `deskripsi`) VALUES
(60, 27, 'Fosil 8140', 1, 165000, 88, 'jam.jpeg', '<p>Fosil 8140 Paket<br />Mesin digital<br />Diameter 3.6cm<br />Include box + tali karet cadangan</p>'),
(61, 28, 'Jam Tangan Digitec 5078', 1, 150000, 99, 'ooo.jpeg', '<p>Digitec 5078 Original<br />Diameter 5cm<br />Mesin digital<br />Harga 150k<br />Include box + kartu garansi 1tahun</p>'),
(62, 27, 'Jam Tangan Wanita Mido', 1, 150000, 43, 'mido (2).jpeg', '<p>Detail Produk : <br />?? merk: mido<br />?? Real Pict, 100% Barang yang dikirim sama dengan foto<br />?? Gender :unisex<br />?? Display :analog tgl hari</p>\r\n<p>?? Mesin :baterai <br />?? Tali : rantai pasir<br />?? Diameter :3.7cm</p>\r\n<p>?? kualitas : water resistant</p>'),
(63, 27, 'Jam Tangan Fashion Jonas Jasmin 2250 ', 1, 130000, 99, 'jonas.jpeg', '<p>Jonas Jasmin 2250 Original <br />Diameter 4cm<br />Mesin tanggal<br />Detik bawah<br />Include box + kartu garansi</p>'),
(64, 29, 'Fossil Rantai Karet 8140 ORI', 1, 165000, 98, 'fossil (2).jpeg', '<p>Fosil 8140 Paket<br />Mesin digital<br />Diameter 3.6cm<br />Include box + tali karet cadangan</p>'),
(65, 33, 'Jam Tangan Rantai Pacific 83150 Ori', 1, 165000, 100, 'PASIFIC.jpeg', '<p>Pacific 83150 Original <br />Diameter 3.5cm<br />Water resistant 3Atm<br />Mesin tanggal vx82e (jepang)<br />Include Box + Kartu Garansi 1th</p>'),
(66, 31, 'Jam tangan Casio Gshock GWG-1000 Gravity / Casio G', 1, 112000, 49, 'arloji (2).jpg', '<p>MERK : CASIO GSHOCK</p>\r\n<p>- DIAMETER : 5cm - STRAP : RUBBER</p>\r\n<p>- TAMPILAN : DUALTIME ( ANALOG + DIGITAL )</p>\r\n<p>- FITUR : ALARM, STOPWATCH, TANGGAL, HARI, &amp; BULAN</p>\r\n<p>- KWALITAS : SUPER</p>\r\n<p>- WATER RESISTANCE</p>\r\n<p>- FREE BATRAI</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(3) NOT NULL,
  `id_order` int(3) NOT NULL,
  `id_barang` int(3) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `harga` int(7) NOT NULL,
  `jml_order` int(3) NOT NULL,
  `berat` int(2) NOT NULL,
  `subberat` int(2) NOT NULL,
  `subharga` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_detail_order`, `id_order`, `id_barang`, `nm_barang`, `harga`, `jml_order`, `berat`, `subberat`, `subharga`) VALUES
(69, 106, 61, 'Jam Tangan Digitec 5078', 150000, 1, 1, 1, 150000),
(70, 106, 60, 'Fosil 8140', 165000, 2, 1, 2, 330000),
(71, 107, 60, 'Fosil 8140', 165000, 6, 1, 6, 990000),
(72, 108, 62, 'Jam Tangan Wanita Mido', 150000, 7, 1, 7, 1050000),
(73, 109, 60, 'Fosil 8140', 165000, 1, 1, 1, 165000),
(74, 110, 64, 'Fossil Rantai Karet 8140 ORI', 165000, 1, 1, 1, 165000),
(75, 111, 60, 'Fosil 8140', 165000, 3, 1, 3, 495000),
(76, 111, 63, 'Jam Tangan Fashion Jonas Jasmin 2250 ', 130000, 1, 1, 1, 130000),
(77, 111, 66, 'Jam tangan Casio Gshock GWG-1000 Gravity / Casio G', 112000, 1, 1, 1, 112000),
(78, 111, 64, 'Fossil Rantai Karet 8140 ORI', 165000, 1, 1, 1, 165000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_service`
--

CREATE TABLE `tbl_detail_service` (
  `id_detail_service` int(10) NOT NULL,
  `id_orderservice` int(10) NOT NULL,
  `id_service` int(10) NOT NULL,
  `nm_service` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga` int(7) NOT NULL,
  `jml_order` int(3) NOT NULL,
  `subharga` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_detail_service`
--

INSERT INTO `tbl_detail_service` (`id_detail_service`, `id_orderservice`, `id_service`, `nm_service`, `harga`, `jml_order`, `subharga`) VALUES
(34, 32, 17, 'Baterai Kancing Battery Batre Sony 626 Batre Jam T', 10000, 1, 10000),
(35, 33, 16, 'BATERAI SONY SR626SW SONY 377 BATERAI SONY 626 ', 15000, 1, 15000),
(36, 33, 18, 'Baterai Jam Tangan 315 SR716SW Murata Original Set', 25000, 1, 25000),
(37, 34, 16, 'BATERAI SONY SR626SW SONY 377 BATERAI SONY 626 ', 15000, 2, 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kat_artikel`
--

CREATE TABLE `tbl_kat_artikel` (
  `id_kategori` int(3) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_kat_artikel`
--

INSERT INTO `tbl_kat_artikel` (`id_kategori`, `nm_kategori`) VALUES
(15, 'Jam Tangan Pria'),
(16, 'Jam Tangan Alexandre Christie'),
(17, 'Jam Tangan Sport'),
(18, 'G-Shock'),
(19, 'Jam Tangan Unik'),
(20, 'Jam Tangan Wanita'),
(21, 'Jam Fashion');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kat_barang`
--

CREATE TABLE `tbl_kat_barang` (
  `id_kategori` int(3) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_kat_barang`
--

INSERT INTO `tbl_kat_barang` (`id_kategori`, `nm_kategori`) VALUES
(26, 'Jam Tangan Anak'),
(27, 'Jam Tangan Wanita'),
(28, 'Jam Tangan Pria'),
(29, 'Jam Tangan Fashion'),
(30, 'Jam Tangan Terbaru'),
(31, 'Jam Tangan G-Shock'),
(32, 'Jam Tangan Fossil'),
(33, 'Jam Tangan Rantai'),
(35, 'Jam Tangan Kulit'),
(36, 'Jam Tangan Karet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(3) NOT NULL,
  `id_pelanggan` int(3) NOT NULL,
  `nm_penerima` varchar(30) NOT NULL DEFAULT '',
  `telp` varchar(13) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kode_pos` int(7) NOT NULL,
  `alamat_pengiriman` varchar(50) NOT NULL,
  `tgl_order` date NOT NULL,
  `ongkir` int(6) NOT NULL,
  `total_order` int(7) NOT NULL,
  `status` varchar(30) DEFAULT 'Belum Dibayar',
  `no_resi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_pelanggan`, `nm_penerima`, `telp`, `provinsi`, `kota`, `kode_pos`, `alamat_pengiriman`, `tgl_order`, `ongkir`, `total_order`, `status`, `no_resi`) VALUES
(106, 10, 'Muhammad Hanif', '08019019', '9', '79', 87878, 'jln babakan asem', '2023-07-27', 18000, 498000, 'Barang Diterima', ''),
(107, 10, 'Muhammad Hanif', '02802902', '9', '103', 2929, 'ciamis lakbok', '2023-07-27', 15000, 1005000, 'Menyiapkan Barang', ''),
(108, 10, 'lola', '27872872', '32', '321', 72872, 'tanah hitam', '2023-07-27', 50000, 1100000, 'Barang Diterima', ''),
(109, 10, 'viqri mauladi', '0920909209', '9', '79', 87827, 'ciapus', '2023-07-27', 18000, 183000, 'Sudah Dibayar', NULL),
(110, 10, 'daplong', '87878782', '9', '78', 82782, 'cileungsi', '2023-07-27', 18000, 183000, 'Belum Dibayar', NULL),
(111, 10, 'Muhammad Hanif', '028028', '9', '79', 16146, 'jln. riau babakan asem bogor timur', '2023-07-27', 18000, 920000, 'Belum Dibayar', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_service`
--

CREATE TABLE `tbl_order_service` (
  `id_orderservice` int(3) NOT NULL,
  `id_pelanggan` int(3) NOT NULL,
  `nm_pelanggan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` int(30) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `catatan` text NOT NULL,
  `tgl_order` date NOT NULL,
  `waktu_pengantaran` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `jenis_antar` text NOT NULL,
  `ongkir` int(6) NOT NULL,
  `total_order` text NOT NULL,
  `status` text NOT NULL DEFAULT 'Belum Dibayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_order_service`
--

INSERT INTO `tbl_order_service` (`id_orderservice`, `id_pelanggan`, `nm_pelanggan`, `telp`, `provinsi`, `kota`, `kode_pos`, `alamat`, `catatan`, `tgl_order`, `waktu_pengantaran`, `deadline`, `jenis_antar`, `ongkir`, `total_order`, `status`) VALUES
(32, 10, 'Muhammad Hanif', '7787878', '9', 79, 89888, 'Babakan Asem RT 02 RW 04 NO. 33 Bogor Timur Kota B', 'Ganti Batrai', '2023-07-26', '2023-07-27 00:31:00', '2023-07-29 00:31:00', 'Antar Sendiri', 18000, '28000', 'Sedang Dikerjakan'),
(33, 10, 'Muhammad Hanif', '0829928', '9', 79, 77287, 'jln riau', 'ganti batrai', '2023-07-27', '2023-07-27 10:39:00', '2023-07-29 10:41:00', 'Antar Sendiri', 18000, '58000', 'Selesai'),
(34, 10, 'Muhammad Hanif', '989898', '9', 79, 16146, 'bogor kotaaa', 'ganti batre jam tangan', '2023-07-27', '2023-07-27 18:34:00', '2023-07-28 18:35:00', 'Lewat Kurir GoSend', 18000, '48000', 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(3) NOT NULL,
  `nm_pelanggan` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nm_pelanggan`, `username`, `email`, `password`) VALUES
(10, 'Muhammad Hanif', 'hanif', 'hanifganteng1@gmail.com', '12345'),
(11, 'lola', 'lola', 'lola@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(3) NOT NULL,
  `id_order` int(3) NOT NULL,
  `nm_pembayar` varchar(30) NOT NULL,
  `nm_bank` varchar(10) NOT NULL,
  `jml_pembayaran` int(7) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bukti_transfer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `id_order`, `nm_pembayar`, `nm_bank`, `jml_pembayaran`, `tgl_bayar`, `bukti_transfer`) VALUES
(25, 106, 'Muhammad Hanif', 'BCA', 498000, '2023-07-27', 'images.jpg'),
(26, 107, 'hanif', 'bri', 1005000, '2023-07-27', 'download (3).jpg'),
(27, 108, 'lola', 'BCA', 1100000, '2023-07-27', 'fossil.jpeg'),
(28, 109, 'viqri', 'mandiri', 183000, '2023-07-27', 'download (3).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran_service`
--

CREATE TABLE `tbl_pembayaran_service` (
  `id_pembayaranservice` int(3) NOT NULL,
  `id_orderservice` int(3) NOT NULL,
  `nm_pembayar` text NOT NULL,
  `nm_bank` text NOT NULL,
  `jml_pembayaran` text NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bukti_transfer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pembayaran_service`
--

INSERT INTO `tbl_pembayaran_service` (`id_pembayaranservice`, `id_orderservice`, `nm_pembayar`, `nm_bank`, `jml_pembayaran`, `tgl_bayar`, `bukti_transfer`) VALUES
(20, 32, 'Muhammad Hanif', 'bca', '28000', '2023-07-26', 'wallpeper.jpg'),
(21, 33, 'Muhammad Hanif', 'BCA', '58000', '2023-07-27', 'fossil.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id_service` int(3) NOT NULL,
  `nm_service` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga` int(3) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_service`
--

INSERT INTO `tbl_service` (`id_service`, `nm_service`, `harga`, `stok`, `gambar`, `deskripsi`) VALUES
(16, 'BATERAI SONY SR626SW SONY 377 BATERAI SONY 626 ', 15000, 97, 'biru.jpg', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2o4j.pdp_revamp.0.i0.1bcf28aeEEFxB3\">Detail produk dari Baterai Jam Tangan Sony 626 377 Biru</h2>\r\n<div class=\"pdp-product-detail\" data-spm=\"product_detail\">\r\n<div class=\"pdp-product-desc \">\r\n<div class=\"html-content pdp-product-highlights\">\r\n<ul class=\"\">\r\n<li class=\"\">BAterai Jam Tangan Sony SR 626 / 377 Murah Biru</li>\r\n<li class=\"\">Baterai untuk jam Tangan</li>\r\n<li class=\"\">Bukan original</li>\r\n<li class=\"\">Harga per 1 biji sudah termasuk ongkos perbaikan</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>'),
(17, 'Baterai Battery Batre Sony 626 Batre Jam Tangan', 10000, 99, 'sony 626 biasa.jpg', '<p>Baterai Sony SR-626 cocok untuk berbagai macam jam tangan AnalogVoltage: 1.55vSize: 2.6mm x 6.8mmType:- Silver OxideThe SR626SW Battery is also a replacement for equivalent batteries:SR626SW, SR66, SR626, SB-AW, 280-39, BA, V377, D377, 606, S626E, GP377, AG4, AG-4, 377, L626, SG4, LR626, LR66, SR628SW, E377, E377CA, LR626SW, 377A, SR262SW, 377X, 377S, GP177, SR6265W, 377/376, E377A, SR66SW, SR625SW, 377BA, CR626SW, AG4/377, AG04</p>\r\n<p>Catatan:harga diatas adalah harga untuk 1 biji sudah termasuk jasa service</p>\r\n<p>BELUM TERMASUK ONGKIR SILAHKAN KONFIRMASI MELALUI WA JIKA INGIN MENGAMBIL SENDIRI ATAU LEWAT KURIR</p>'),
(18, 'Baterai Jam Tangan 315 SR716SW Murata Original Set', 25000, 99, 'download (2).jpg', '<p>Murata 315 SR716SW Original</p>\r\n<p>Baterai Murata merupakan brand pengganti baterai sony . Kualitas, kemasan serta paten sama persis</p>\r\n<p>Spec :<br />&ndash; 100% Original , baterai jam tangan kualitas terbaik, lengkap dengan kode unik pada bagian bodi baterai<br />&ndash; Voltase stabil tidak merusak alat elektronik serta baterai tahan lama<br />&ndash; 1.55 V<br />&ndash; Peruntukkan : Jam Tangan dan alat elektronik yang sesuai<br />&ndash; Harga untuk 1 butir jam tangan</p>'),
(19, 'Baterai Maxel 626 Original Per Butir', 25000, 100, 'cf52afc5-b026-46c4-ad70-964b2fc6ce81.jpg', '<p>Baterai Maxell 626&nbsp;</p>\r\n<p>Jaminan 100% Original</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Voltase 1.55 V</li>\r\n<li>Best Quality, tahan lama tidak merusak mesin</li>\r\n<li>Bahan alkaline cell</li>\r\n<li>Harga per 1 butir</li>\r\n</ul>'),
(20, 'Maxell SR41 LR41 AG3 Batrai Batre Battery AG3', 10000, 100, 'images.jpg', '<p>Baterai LR41 sering dipakai pada jam tangan anak, jam led, thermometer, alarm, mainan, laser, lampu hias, alat bantu dengar, kalkulator, dll<br /><br />Equivalents dengan : LR41, SR41, AG3, G3</p>'),
(21, 'Tali Jam Casio Karet Resin Rubber 16 18 20 22 24 2', 35000, 100, 'download (3).jpg', '<p>Tali Jam Casio Karet Resin Rubber 16 18 20 22 24 26 Ori Kuat Elastis Tahan Lama<br /><br />cocok utk jam gshock tag hauer, gshock, casio, swiss army dll.<br /><br />warna strap: Black</p>'),
(22, 'Tali jam tangan Rubber karet Watch strap Rubber 22', 25000, 100, 'download (4).jpg', '<p>Material : Rubber Size: 22mm Buckle:</p>\r\n<p>stainless steel Warna:</p>\r\n<p>- Hitam List Putih&nbsp; Type: B-111</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kat_pos` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_produk` (`id_barang`);

--
-- Indeks untuk tabel `tbl_detail_service`
--
ALTER TABLE `tbl_detail_service`
  ADD PRIMARY KEY (`id_detail_service`);

--
-- Indeks untuk tabel `tbl_kat_artikel`
--
ALTER TABLE `tbl_kat_artikel`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_kat_barang`
--
ALTER TABLE `tbl_kat_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `tbl_order_service`
--
ALTER TABLE `tbl_order_service`
  ADD PRIMARY KEY (`id_orderservice`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_order2` (`id_order`);

--
-- Indeks untuk tabel `tbl_pembayaran_service`
--
ALTER TABLE `tbl_pembayaran_service`
  ADD PRIMARY KEY (`id_pembayaranservice`);

--
-- Indeks untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `tbl_detail_service`
--
ALTER TABLE `tbl_detail_service`
  MODIFY `id_detail_service` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tbl_kat_artikel`
--
ALTER TABLE `tbl_kat_artikel`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_kat_barang`
--
ALTER TABLE `tbl_kat_barang`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `tbl_order_service`
--
ALTER TABLE `tbl_order_service`
  MODIFY `id_orderservice` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran_service`
--
ALTER TABLE `tbl_pembayaran_service`
  MODIFY `id_pembayaranservice` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id_service` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `id_kat_pos` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kat_artikel` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kat_barang` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `id_order` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_produk` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `id_order2` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
