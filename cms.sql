-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2023 pada 06.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(15, 'spiderman', '20231203090601.jpg'),
(17, 'Gosling', '20231203132900.jpg'),
(18, 'ken', '20231203133658.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `judul`, `foto`, `tanggal`) VALUES
(5, 'nolan', '20231204051801.jpg', '2023-12-04'),
(6, 'Gacha M5 Pass', '20231204051823.jpg', '2023-12-04'),
(7, 'YuZhong M5', '20231204051833.jpg', '2023-12-04'),
(8, 'Fu Xuan', '20231204054136.jpg', '2023-12-04'),
(9, 'Light Cone Fu Xuan', '20231204054158.jpg', '2023-12-04'),
(10, 'Legendary', '20231204054210.jpg', '2023-12-04'),
(11, 'Selee', '20231204054221.jpg', '2023-12-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Agama'),
(4, 'Sejarah'),
(5, 'Basa Jawa'),
(6, 'Olah Raga'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Athur CMS', '<p>Hello, everyone! My name is Fathurrahman Biruni Rafie, born on January 20, 2007. I\'m thrilled to take a moment to introduce myself. I am a dynamic individual with a genuine passion for both football and gaming.</p>', 'instagram.com/athurrrr_', 'facebook.com/fathurrahman.rafie', 'birunijanuari@gmail.com', 'jiringan wetan', '+62 857 8662 6989');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(11, 'Pukis', '<p>Opo sih Pukis Iku? Lan saking ngendi asale?</p>\r\n<p>Pukis ya iku jajanan tradisional khas Indonesia. &nbsp;Didamel saking gandum. Ing proses damel kue pukis, ragi dibetahake supaya adonan saget ngembang kanthi sampurna.</p>\r\n<p>Kue pukis ngadahi warno sing khas, yaiku kuning ing sisih ndhuwur lan coklat ing sisih ngisor. Kue pukis niki ngadahi rasa manis lan gurih. Kangge nambahi rasa manis lan gurih, nginggil pukis biasane disiram ngangge kismis, keju, coklat, sukade, kacang utawa meses.</p>\r\n<p>Crita iki diwiwiti nalika jaman kolonial, masyarakat Sampang, Kebumen, diculik dening penjajah nalika jaman semono. Penjajah ngewajibake tiang sing diculik nyambut damel gawe kue pukis.</p>\r\n<p>Rikolo jaman semono, resep kue pukis mboten nate dicritakake marang sapa wae. Nanging, amargo wonten tiang ing antarane tiang sanes e angssl pitunjuk babagan bahan nopo kemawon sing dibetahake kangge ndamel pukis lan carane damel. Pungkasane, ana sing ngerti kabeh babagan nggawe pukis.</p>\r\n<p>Amarga bosen dijajah, tiang sing mangertos ndame pukis banjur mlayu saking papan penculikan lan bisa lolos. &nbsp;Mboten dangu sawise mlayu, banjur dheweke langsung latihan ndamel pukis dhewe. Akibate, jajan pukis iki dadi favorit lan misuwur ing saindhenging Indonesia.</p>', '20231205014312.jpg', 'Pukis', '5', '2023-12-05', 'uzan'),
(12, 'Peristiwa Rengasdengklok', '<p><strong>Peristiwa Rengasdengklok</strong>&nbsp;adalah peristiwa penculikan yang dilakukan oleh sejumlah pemuda antara lain&nbsp;<a title=\"Soekarni\" href=\"https://id.wikipedia.org/wiki/Soekarni\">Soekarni</a>,&nbsp;<a title=\"Wikana\" href=\"https://id.wikipedia.org/wiki/Wikana\">Wikana</a>,&nbsp;<a title=\"D.N. Aidit\" href=\"https://id.wikipedia.org/wiki/D.N._Aidit\">Aidit</a>, dan&nbsp;<a title=\"Chaerul Saleh\" href=\"https://id.wikipedia.org/wiki/Chaerul_Saleh\">Chaerul Saleh</a>&nbsp;dari perkumpulan \"<em><a title=\"Menteng 31\" href=\"https://id.wikipedia.org/wiki/Menteng_31\">Menteng 31</a></em>\" terhadap&nbsp;<a title=\"Soekarno\" href=\"https://id.wikipedia.org/wiki/Soekarno\">Soekarno</a>&nbsp;dan&nbsp;<a class=\"mw-redirect\" title=\"Hatta\" href=\"https://id.wikipedia.org/wiki/Hatta\">Hatta</a></p>\r\n<p>Peristiwa ini terjadi pada tanggal 16 Agustus 1945 pukul 03.00 WIB, Soekarno dan Hatta dibawa ke&nbsp;<a class=\"mw-redirect\" title=\"Rengasdengklok\" href=\"https://id.wikipedia.org/wiki/Rengasdengklok\">Rengasdengklok</a>,&nbsp;<a class=\"mw-redirect\" title=\"Karawang\" href=\"https://id.wikipedia.org/wiki/Karawang\">Karawang</a>, untuk kemudian didesak agar mempercepat proklamasi kemerdekaan&nbsp;<a class=\"mw-redirect\" title=\"Republik Indonesia\" href=\"https://id.wikipedia.org/wiki/Republik_Indonesia\">Republik Indonesia</a>, sampai dengan terjadinya kesepakatan antara golongan tua yang diwakili Soekarno dan Hatta serta Mr.&nbsp;<a class=\"mw-redirect\" title=\"Achmad Subardjo\" href=\"https://id.wikipedia.org/wiki/Achmad_Subardjo\">Achmad Subardjo</a>&nbsp;dengan golongan muda tentang kapan proklamasi akan dilaksanakan terutama setelah&nbsp;<a title=\"Jepang\" href=\"https://id.wikipedia.org/wiki/Jepang\">Jepang</a>&nbsp;mengalami kekalahan dalam&nbsp;<a title=\"Perang Pasifik\" href=\"https://id.wikipedia.org/wiki/Perang_Pasifik\">Perang Pasifik</a>.<sup id=\"cite_ref-2\" class=\"reference\"></sup></p>\r\n<p>Menghadapi desakan tersebut, Soekarno dan Hatta tetap tidak berubah pendirian. Sementara itu di Jakarta, Chaerul dan kawan-kawan telah menyusun rencana untuk merebut kekuasaan. Tetapi apa yang telah direncanakan tidak berhasil dijalankan karena tidak semua anggota&nbsp;<a class=\"mw-redirect\" title=\"PETA\" href=\"https://id.wikipedia.org/wiki/PETA\">PETA</a> mendukung rencana tersebut.</p>\r\n<p>Proklamasi kemerdekaan Republik Indonesia rencananya akan dibacakan oleh Bung Karno dan Bung Hatta pada hari Jumat,&nbsp;<a title=\"17 Agustus\" href=\"https://id.wikipedia.org/wiki/17_Agustus\">17 Agustus</a>&nbsp;<a title=\"1945\" href=\"https://id.wikipedia.org/wiki/1945\">1945</a>. Ada dua lokasi pilihan untuk pembacaan teks proklamasi, yaitu Lapangan IKADA (yang sekarang telah menjadi Lapangan Monas) atau rumah Bung Karno di Jl. Pegangsaan Timur No. 56. Rumah Bung Karno akhirnya dipilih untuk menghindari kericuhan antara penduduk dan tentara Jepang karena tentara-tentara Jepang sudah berjaga-jaga di Lapangan IKADA setelah mendapat informasi ada sebuah acara yang akan diselenggarakan di lokasi tersebut. Teks Proklamasi disusun di Rengasdengklok. Awalnya, Bung Karno dan Bung Hatta ditempatkan di sebuah gubuk tua, pinggir kali dekat sawah yang tak layak kondisinya. Atas usulan KH. Darip pejuang dari Klender kepada Soekarni dan kawan-kawan, agar Bung Karno dan Bung Hatta ditempatkan di tempat yang layak, maka dipilih lah rumah saudagar Tionghoa bernama&nbsp;<a title=\"Djiaw Kie Siong\" href=\"https://id.wikipedia.org/wiki/Djiaw_Kie_Siong\">Djiaw Kie Siong</a>.&nbsp;<a class=\"mw-redirect\" title=\"Bendera Merah Putih\" href=\"https://id.wikipedia.org/wiki/Bendera_Merah_Putih\">Bendera Merah Putih</a>&nbsp;sudah dikibarkan para pejuang di Rengasdengklok pada Kamis tanggal&nbsp;<a title=\"16 Agustus\" href=\"https://id.wikipedia.org/wiki/16_Agustus\">16 Agustus</a>, sebagai persiapan untuk proklamasi kemerdekaan Indonesia.</p>\r\n<p>Karena tidak mendapat berita dari&nbsp;<a class=\"mw-redirect\" title=\"Jakarta\" href=\"https://id.wikipedia.org/wiki/Jakarta\">Jakarta</a>, maka&nbsp;<a class=\"new\" title=\"Jusuf Kunto (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Jusuf_Kunto&amp;action=edit&amp;redlink=1\">Jusuf Kunto</a>&nbsp;dikirim untuk berunding dengan pemuda-pemuda yang ada di Jakarta. Namun sesampainya di Jakarta, Kunto hanya menemui&nbsp;<a title=\"Wikana\" href=\"https://id.wikipedia.org/wiki/Wikana\">Wikana</a>&nbsp;dan Mr.&nbsp;<a title=\"Achmad Soebardjo\" href=\"https://id.wikipedia.org/wiki/Achmad_Soebardjo\">Achmad Soebardjo</a>, kemudian Kunto dan Subardjo ke Rengasdengklok untuk menjemput Soekarno, Hatta,&nbsp;<a title=\"Fatmawati\" href=\"https://id.wikipedia.org/wiki/Fatmawati\">Fatmawati</a>&nbsp;dan&nbsp;<a title=\"Guntur Soekarnoputra\" href=\"https://id.wikipedia.org/wiki/Guntur_Soekarnoputra\">Guntur</a>. Achmad Soebardjo mengundang Bung Karno dan Hatta berangkat ke Jakarta untuk membacakan proklamasi di Jalan Pegangsaan Timur No. 56, rumah Bung Karno. Pada tanggal&nbsp;<a title=\"16 Agustus\" href=\"https://id.wikipedia.org/wiki/16_Agustus\">16 Agustus</a> tengah malam rombongan tersebut sampai di Jakarta.</p>\r\n<p>Keesokan harinya, tepatnya tanggal&nbsp;<a title=\"17 Agustus\" href=\"https://id.wikipedia.org/wiki/17_Agustus\">17 Agustus</a>&nbsp;<a title=\"1945\" href=\"https://id.wikipedia.org/wiki/1945\">1945</a>&nbsp;pernyataan proklamasi dikumandangkan dengan&nbsp;<a class=\"mw-redirect\" title=\"Teks proklamasi Kemerdekaan Indonesia\" href=\"https://id.wikipedia.org/wiki/Teks_proklamasi_Kemerdekaan_Indonesia\">teks proklamasi Kemerdekaan Indonesia</a>&nbsp;yang diketik oleh&nbsp;<a title=\"Sayuti Melik\" href=\"https://id.wikipedia.org/wiki/Sayuti_Melik\">Sayuti Melik</a>&nbsp;menggunakan mesin ketik yang \"<em>dipinjam</em>\" (sebetulnya diambil) dari kantor Kepala Perwakilan&nbsp;<a title=\"Kriegsmarine\" href=\"https://id.wikipedia.org/wiki/Kriegsmarine\">Kriegsmarine</a>, Mayor (Laut) Dr. Hermann Kandeler</p>\r\n<p>Sumber : Wikipedia</p>', '20231205014904.jpg', 'Peristiwa-Rengasdengklok', '4', '2023-12-05', 'uzan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `isi_saran`, `tanggal`, `nama`) VALUES
(2, 'Keren', '2023-12-05', 'uzan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(17, 'uzan', 'uzan', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
(18, 'nafi', 'nafi', '81dc9bdb52d04dc20036dbd8313ed055', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
