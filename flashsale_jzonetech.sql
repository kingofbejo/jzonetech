-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2020 pada 16.42
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flashsale_jzonetech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(155) NOT NULL,
  `deskripsi` varchar(400) NOT NULL,
  `fee` varchar(155) NOT NULL,
  `image` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama_event`, `deskripsi`, `fee`, `image`) VALUES
(1, 'Redmi 9A 2/32 GB ', 'Lazada 12 Desember 2020 Pukul 10:00 WIB', 'Rp 40.000', 'flashsale.jpg'),
(2, 'Redmi 9A 3/32 GB ', 'Lazada 12 Desember 2020 Pukul 10:00 WIB', 'Rp 30.000', 'flashsale.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nomor_pesanan` varchar(155) NOT NULL,
  `status` int(11) NOT NULL,
  `resi` varchar(155) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nomor_pesanan`, `status`, `resi`, `id_event`, `id_user`) VALUES
(5, '486523833755923', 1, 'LXAT-0005145846', 1, 13),
(6, '455910082855111', 1, 'LXAT-0003355555', 1, 13),
(7, '441152583755222', 2, 'LXAT-0003888888', 2, 14),
(8, '448634158459999', 2, 'LXAT-0003444444', 2, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pesanan`
--

CREATE TABLE `status_pesanan` (
  `id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_pesanan`
--

INSERT INTO `status_pesanan` (`id`, `status`) VALUES
(1, 'Diproses'),
(2, 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `bank` varchar(155) NOT NULL,
  `norek` varchar(155) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `bank`, `norek`, `alamat`) VALUES
(1, 'Akun Admin', 'akunadmin@jzonetech.com', 'default.png', '$2y$10$d.He0jlbAUxfzYM8x6fZpeLcWlmmNmHWN/PVU2zGrvNH.2B27m/Wa', 1, 1, 1609255015, '', '', ''),
(13, 'Akun Tester 1', 'akunterster1@jzonetech.com', 'default.png', '$2y$10$VCT0/Ud9hhDLihXH9hhWLujkvnwoyFNMBGbEhfYsu37Trz/Pv0r9G', 2, 1, 1609255050, '', '', ''),
(14, 'Akun Tester 2', 'akunterster2@jzonetech.com', 'default.png', '$2y$10$RaD6Zs.NGDEZSMXbR7TKr.53dnbXxLgPp8R08uYpcVJyYVPRXWeMC', 2, 1, 1609255072, 'BCA', '1111111111', 'Prambanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_historyorder`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_historyorder` (
`id` int(11)
,`nomor_pesanan` varchar(155)
,`resi` varchar(155)
,`status` varchar(11)
,`nama_event` varchar(155)
,`fee` varchar(155)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_historyorder`
--
DROP TABLE IF EXISTS `v_historyorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_historyorder`  AS SELECT `pesanan`.`id` AS `id`, `pesanan`.`nomor_pesanan` AS `nomor_pesanan`, `pesanan`.`resi` AS `resi`, `status_pesanan`.`status` AS `status`, `event`.`nama_event` AS `nama_event`, `event`.`fee` AS `fee` FROM ((`pesanan` join `status_pesanan` on(`pesanan`.`status` = `status_pesanan`.`id`)) join `event` on(`pesanan`.`id_event` = `event`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_pemilik` (`id_user`),
  ADD KEY `status` (`status`);

--
-- Indeks untuk tabel `status_pesanan`
--
ALTER TABLE `status_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `status_pesanan`
--
ALTER TABLE `status_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status_pesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
