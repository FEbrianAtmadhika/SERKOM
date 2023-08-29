-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2023 pada 05.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_organazer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`) VALUES
(4, '1831929869_carausel 1.jpg'),
(5, '383972579_carausel 2.jpg'),
(6, '718320782_photo 1.jpg'),
(7, '1515262550_about.jpeg'),
(8, '1637656317_home.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nikah`
--

CREATE TABLE `nikah` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `mempelai_pria` varchar(255) NOT NULL,
  `mempelai_wanita` varchar(255) NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nikah`
--

INSERT INTO `nikah` (`id`, `id_user`, `Gambar`, `mempelai_pria`, `mempelai_wanita`, `id_paket`) VALUES
(7, 1, '759653981_carausel 1.jpg', 'ainun', 'bodo', 2),
(9, 1, '840311317_carausel 2.jpg', 'mundi', 'ria', 1),
(10, 1, '1166131607_photo 1.jpg', 'Muhaddin', 'nurul', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `deskripsi`, `harga`) VALUES
(1, 'sederhana', 'Paket Hemat Nikahan denagn 1 set Tenda Sederhana, Makanan 200 porsi, dll', '10.000.000'),
(2, 'Mewah', 'Paket Hemat Nikahan denagn 5 set Tenda Sederhana, Makanan 1000 porsi, dll', '16.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_company`
--

CREATE TABLE `profile_company` (
  `id` int(11) NOT NULL,
  `nama_company` varchar(50) NOT NULL,
  `about_us` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profile_company`
--

INSERT INTO `profile_company` (`id`, `nama_company`, `about_us`, `gambar`, `no_telp`, `email`) VALUES
(10, 'NIKAH', 'Kami adalah sebuah company yang dimana sangat berambisi untuk menyatukan ke dua insan agar dapat saling mencintai selama hidupnya. tujuan kami disini ialah membuat client kami merasa sangat puas dengan pelayanan dan produk kami dimana produk kami menyediakan paket pernikahan lengkap dan paling murah. serta kami bertujuan untuk memudahkan pada muda mudi untuk dapat melakukan pernikahan tanpa ribet.', 'about.jpeg', '12345678', 'NIKAH@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Samsudin', 'samsudian@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile_company`
--
ALTER TABLE `profile_company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `nikah`
--
ALTER TABLE `nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile_company`
--
ALTER TABLE `profile_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nikah`
--
ALTER TABLE `nikah`
  ADD CONSTRAINT `nikah_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nikah_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
