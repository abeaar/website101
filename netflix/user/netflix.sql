-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2023 pada 02.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `linkfoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`nomor`, `nama`, `genre`, `linkfoto`) VALUES
(17, 'Eternal', 'Adventure/Action', '../img/eternals.jpg\r\n'),
(18, 'transformer', 'mecha, actions', '../img/transformers.jpg\r\n'),
(21, 'Red Notice', 'Action/Comedy', '../img/red-notice.jpg'),
(22, '1917', 'War/Drama', '../img/1917.jpg'),
(26, 'lucifer', 'drama/action', '../img/lucifer.jpg'),
(27, 'Captain Marvel', 'super hero/action', '../img/captain-marvel.jpg'),
(28, 'Captain america', 'action', '../img/captainamerika.jpg'),
(29, 'demonslayer', 'Anime/action', '../img/demonslayer.jpg'),
(30, 'elite', 'highschool', '../img/elite.jpg'),
(31, 'Dune', 'Post apocalyptic', '../img/dune.jpg'),
(32, 'Dark Knight', 'super hero/action', '../img/dark-knight.jpg'),
(33, 'endgame', 'super hero/action', '../img/endgame.jpg'),
(34, 'interstaller', 'supranatural/space', '../img/interstaller.jpg'),
(35, 'spider-man', 'super', '../img/spider-men.jpg'),
(36, '\"Lord of The Ring\"', 'fantasy/adventure', '../img/lotr.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 'jovano', 'jovano@gmail.com', '1234', ''),
(4, 'dion', 'dion@gmail.com', '1234', 'user'),
(5, 'Abraar', 'abraarjh@gmail.com', '1234', 'admin'),
(7, 'faiz', 'faiz@gmail', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
