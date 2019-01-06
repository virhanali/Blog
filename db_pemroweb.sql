-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2019 pada 11.07
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemroweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_blog`
--

CREATE TABLE `t_blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_blog`
--

INSERT INTO `t_blog` (`id`, `judul`, `isi`, `waktu`, `tag`) VALUES
(8, 'Mobile Legend masuk list Sea G', ' Kabar Terbaru dari pergelaran sea game 2019, bahwa mobile legend masuk list dalam kategori esport', '2019-01-06 10:04:59', 'Gaming'),
(9, 'Spesifikasi Xiaomi Mi 9: Smart', ' Spesifikasi Xiaomi Mi 9 kini sudah merebak. Bocoran spesifikasinya bermunculan di internet.\r\n\r\nXiaomi Mi 9 nampaknya akan rilis tak lama lagi. Smartphone ini diyakini akan menjadi hape kedua dari Xiaomi yang menggunakan Snapdragon 855 selain Mi Mix 3 Edisi 5G.\r\n\r\nSmartphone Xiaomi Mi 9 juga diyakini sebagai hape yang dipersiapkan oleh Xiaomi untuk menggunakan kamera 48 MP.\r\n\r\nPerlu diketahui, bahwa dari akhir tahun 2018 sudah beredar kabar bahwa Xiaomi akan merilis hape dengan kamera 48 MP.\r\n\r\n', '2019-01-06 10:06:34', 'Xiaomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(4, 'lava', '123', 1),
(7, 'virhan', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_blog`
--
ALTER TABLE `t_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_blog`
--
ALTER TABLE `t_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
