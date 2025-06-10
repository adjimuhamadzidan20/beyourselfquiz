-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2025 pada 17.00
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beyorselfquiz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `jenis_kelamin`, `email`) VALUES
(1, 'admin123', '$2y$10$nXKWLr0JrEl.ckoOHB4t3esdeS7CjeNTH8jCG6wHgNMeQ/K32tbEi', 'Adji Muhamad Zidan', 'Laki-laki', 'adjimuhamadzidan@email.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `created_at`) VALUES
(1, 'Pendididkan Kewarganegaraan', '2025-06-06 09:24:04'),
(3, 'Pengetahuan Komputer', '2025-06-07 02:28:51'),
(4, 'Sejarah Kebudayaan', '2025-06-06 09:42:21'),
(6, 'Ilmu Sains Kimia', '2025-06-09 04:04:03'),
(14, 'Religi', '2025-06-09 07:56:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skor`
--

CREATE TABLE `skor` (
  `id_skor` int(11) NOT NULL,
  `nama_peserta` varchar(40) NOT NULL,
  `jumlah_skor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skor`
--

INSERT INTO `skor` (`id_skor`, `nama_peserta`, `jumlah_skor`, `created_at`) VALUES
(1, 'Beyourselfit', 2, '2025-06-09 14:15:34'),
(2, 'Adji', 4, '2025-06-10 14:57:08'),
(3, 'Adji Muhamad Zidan', 3, '2025-06-10 14:57:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi_1` varchar(255) NOT NULL,
  `opsi_2` varchar(255) NOT NULL,
  `opsi_3` varchar(255) NOT NULL,
  `opsi_4` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `id_kategori`, `pertanyaan`, `opsi_1`, `opsi_2`, `opsi_3`, `opsi_4`, `jawaban`, `id_admin`, `created_at`) VALUES
(3, 1, 'Siapakah presiden pertama indonesia?', 'Soekarno', 'Soeharto', 'BJ Habibie', 'Jokowi', 'A', 1, '2025-06-06 12:12:09'),
(4, 1, 'Apa ibukota indonesia?', 'Kalimantan', 'Jakarta', 'Bandung', 'Palembang', 'B', 1, '2025-06-06 12:13:31'),
(6, 1, 'Tahu sumedang berasal dari kota mana?', 'Garut', 'Tasik', 'Sumedang', 'Padang', 'C', 1, '2025-06-07 02:34:29'),
(7, 1, 'Masakan rendang berasal dari kota mana?', 'Bandung', 'Padang', 'Garut', 'Bogor', 'B', 1, '2025-06-07 02:35:06'),
(8, 3, 'Siapakah pencipta windows?', 'Steve Jobs', 'Brendan Eich', 'Bill Gates', 'Jeff Bezos', 'C', 1, '2025-06-08 09:28:22'),
(9, 3, 'Aplikasi word merupakan produk dari?', 'Microsoft', 'Linux', 'Adobe', 'Google', 'A', 1, '2025-06-08 09:29:50'),
(10, 3, 'Siapakah pemilik CEO daripada META / Facebook?', 'Steve Jobs', 'Brendan Eich', 'Mark Zuckenberg', 'Elon Musk', 'C', 1, '2025-06-09 04:12:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `skor`
--
ALTER TABLE `skor`
  ADD PRIMARY KEY (`id_skor`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_kategori` (`id_kategori`,`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `skor`
--
ALTER TABLE `skor`
  MODIFY `id_skor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soal_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
