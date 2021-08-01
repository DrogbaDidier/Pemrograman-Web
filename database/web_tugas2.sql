-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2021 pada 10.15
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tugas2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya`
--

CREATE TABLE `karya` (
  `idkarya` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karya`
--

INSERT INTO `karya` (`idkarya`, `judul`, `tahun`, `gambar`) VALUES
(1, 'Seblak 1', '2018', 'img/karya1.jpg'),
(2, 'Seblak 2', '2019', 'img/karya2.jpg'),
(3, 'Seblak 3', '2020', 'img/karya3.jpg'),
(4, 'Seblak 4', '2021', 'img/karya4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `idkontak` int(11) NOT NULL,
  `sosmed` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`idkontak`, `sosmed`, `nama`, `link`) VALUES
(1, 'Email', 'kevinnaufalf@gmail.com', NULL),
(2, 'Instagram', '@kevinnaufalf', 'https://www.instagram.com/kevinnaufalf/'),
(3, 'Facebook', 'Kevin Naufal F', 'https://www.facebook.com/kevinaufalf/'),
(4, 'Youtube', 'Kevin Naufal F', 'https://www.youtube.com/'),
(5, 'Linkedin', 'Kevin Naufal F', 'https://id.linkedin.com/in/kevinnaufalf/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `nama_menu` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idmenu`, `nama_menu`, `alamat`) VALUES
(1, 'Home', 'home.php'),
(2, 'Kontak', 'kontak.php'),
(3, 'Karya', 'karya.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `idpostingan` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`idpostingan`, `judul`, `tanggal`, `gambar`, `isi`) VALUES
(16, 'Brian May ', '1974-07-19', 'go.png', 'Brian Harold May adalah seorang musisi, penyanyi, penulis lagu, dan astrofisika Inggris. Dia adalah gitaris utama dari band rock Queen. Lagu-lagunya termasuk "We Will Rock You", "Tie Your Mother Down", "I Want It All", "Fat Bottomed Girls", "Flash", "Hammer to Fall", "Save Me", "I Want It All", dan "The Show Must Go On". May adalah salah satu pendiri Queen dengan vokalis Freddie Mercury dan drummer Roger Taylor, yang sebelumnya tampil dengan Taylor di band Smile, yang telah ia ikuti ketika masih di universitas. Dalam lima tahun pembentukan mereka pada tahun 1970 dan perekrutan pemain bass John Deacon menyelesaikan lineup. '),
(17, 'Freddie Mercury', '1946-09-05', 'online.jpg', 'Frederick "Freddie" Mercury adalah seorang penyanyi-penulis lagu dan produser rekaman dan vokalis utama dari band rock Queen berkebangsaan Inggris. Dia dianggap sebagai salah satu dari penyanyi terbaik dalam sejarah musik populer, dan dikenal atas kepribadian flamboyan di panggung dan jangkauan vokal empat-oktafnya. Mercury lahir di Zanzibar dari orang tua Parsi yang berasal dari India. Setelah tumbuh di Zanzibar dan kemudian India, keluarganya pindah ke Middlesex, Inggris.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `nama_lengkap` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `nama_lengkap`, `password`, `email`) VALUES
(1, 'kevin', 'kevinnaufalf', '123456', 'kevinnaufalf@gmail.com'),
(2, 'naufal', 'naufalf', '123', 'naufalf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`idkarya`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idkontak`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`idpostingan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karya`
--
ALTER TABLE `karya`
  MODIFY `idkarya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idkontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `idpostingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
