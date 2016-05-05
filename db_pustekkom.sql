-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2016 pada 06.38
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pustekkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE IF NOT EXISTS `beritas` (
`id` int(10) unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `read_more` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `read_more`, `content`, `image`, `id_kategori`, `created_at`, `updated_at`) VALUES
(2, 'Pustekkom Kemdikbud ', 'Pustekkom Kemdikbud adalah Pusat Teknologi Komunikasi Pendidikan dan Kebudayaan yang berada langsung dibawah sekretariat jenderal kementrian pendidikan nasional.', 'Pustekkom Kemdikbud adalah Pusat Teknologi Komunikasi Pendidikan dan Kebudayaan yang berada langsung dibawah sekretariat jenderal kementrian pendidikan nasional.', 'uploads/42493.jpg', 2, '2015-10-20 16:54:55', '2015-10-20 16:54:55'),
(3, 'Wahana Jelajah Luar Angkasa', 'Wahana Jelajah Luar Angkasa adalah suatu bahan belajar yang ada di Pustekkom Kemdikbud. dimana kita dapat melihat atau menjelajah angkasa dan melihat planet-planet diluar angkasa.', 'Wahana Jelajah Luar Angkasa adalah suatu bahan belajar yang ada di Pustekkom Kemdikbud. dimana kita dapat melihat atau menjelajah angkasa dan melihat planet-planet diluar angkasa.', 'uploads/75059.jpg', 3, '2015-10-20 16:55:40', '2015-10-20 16:55:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tentang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peta_situs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aturan_pengguaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kontak_kami` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `contents`
--

INSERT INTO `contents` (`id`, `nama`, `image`, `link`, `tentang`, `peta_situs`, `aturan_pengguaan`, `kontak_kami`, `created_at`, `updated_at`) VALUES
(1, 'Kelas Maya', 'uploads/48117.jpg', 'http://belajar.kemdikbud.go.id/KelasMaya', '', '', '', '', '2015-10-20 02:44:57', '2015-10-20 02:44:57'),
(2, 'Sumber Belajar', 'uploads/86618.jpg', 'http://sumberbelajar.belajar.kemdikbud.go.id/', '', '', '', '', '2015-10-20 02:45:29', '2015-10-20 02:45:29'),
(3, 'Pengembangan Propesi Berkelanjutan', 'uploads/92947.jpg', 'http://belajar.kemdikbud.go.id/PPB', '', '', '', '', '2015-10-20 02:46:00', '2015-10-20 02:46:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE IF NOT EXISTS `kategoris` (
`id_kategori` int(10) unsigned NOT NULL,
  `judul_kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id_kategori`, `judul_kategori`, `created_at`, `updated_at`) VALUES
(1, 'SD', '2015-10-19 16:06:45', '2015-10-19 16:06:45'),
(2, 'SMP', '2015-10-20 02:47:45', '2015-10-20 02:47:45'),
(3, 'SMA/SMK', '2015-10-20 02:48:04', '2015-10-20 02:48:04'),
(4, 'Perguruan Tinggi', '2015-10-20 02:48:17', '2015-10-20 02:48:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laravels`
--

CREATE TABLE IF NOT EXISTS `laravels` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `laravels`
--

INSERT INTO `laravels` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Saya Sedang Di uji oleh pa Rizki', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logos`
--

CREATE TABLE IF NOT EXISTS `logos` (
`id` int(10) unsigned NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'uploads/70396.png', '2015-10-20 02:47:24', '2015-10-20 02:47:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
`id` int(10) unsigned NOT NULL,
  `tentang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peta_situs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aturan_penggunaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kontak_kami` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `tentang`, `peta_situs`, `aturan_penggunaan`, `kontak_kami`, `created_at`, `updated_at`) VALUES
(1, 'Pustekkom Kemdikbud adalah Pusat Teknologi Komunikasi Pendidikan dan Kebudayaan yang berada langsung dibawah sekretariat jenderal pendidikan nasional.', 'Visi dan Misi Perusahaan \r\na.	Visi Perusahaan\r\n Menjadi lembaga unggulan pada bidang teknologi informasi dan komunikasi pendidikan.\r\nb.	Misi Perusahaan\r\nMemecahkan masalah – masalah pendidikan dan meningkatkan kualitas SDM melalui pendayagunaan teknologi ', 'Adapun Fungsi dari Pustekkom adalah :\r\n1.	Penyusunan kebijakan teknis dibidang teknologi informasi dan komunikasi pendidikan.\r\n2.	Pengembangan teknologi pembelajaran berbasis radio, televisi, film, multimedia dan web.', 'Alamat : Jl. RE Martadinata Ciputat Tangerang Selatan', '2015-10-20 16:59:58', '2015-10-20 16:59:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_09_02_072143_createuserstable', 1),
('2015_09_02_072143_createuserstable', 1),
('2015_09_08_171939_tablecontent', 2),
('2015_09_09_170644_table_berita', 2),
('2015_09_10_192617_table_logo', 2),
('2015_09_16_212046_table_slide', 2),
('2015_10_11_134527_create_kategoris_table', 2),
('2015_10_12_050514_create_menus_table', 2),
('2015_10_21_024510_create_laravels_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
`id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `image`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'uploads/23361.png', '', '2015-10-20 02:46:54', '2015-10-20 02:46:54'),
(2, 'uploads/41007.jpg', '', '2015-10-20 02:47:08', '2015-10-20 02:47:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@admin.com', '$2y$10$qKqaHvbeGu65FyMPeOhX5OrS3g8ixqcW96DWqOveB1qqvqwFl9eQ6', 'Xu7jjKDVOCDNFtCb6wkjQXP1LxInmiCSG08Qm0bGbV9RTaXI2TrzYSieEBLD', '2015-09-04 17:04:48', '2016-05-04 21:34:17'),
(4, 'Ahmad Sopian', 'ahmadsopian@gmail.com', '$2y$10$TtRM8o8VZFA6BYROWNqiluFlkZrNDAiU9v6RDDmL3zh13k.R1/rLm', NULL, '2015-10-20 20:20:44', '2015-10-23 16:09:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `laravels`
--
ALTER TABLE `laravels`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
MODIFY `id_kategori` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laravels`
--
ALTER TABLE `laravels`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
