-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Feb 2019 pada 02.29
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id_deskripsi` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `deskripsi`
--

INSERT INTO `deskripsi` (`id_deskripsi`, `image`, `deskripsi`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lacus augue, vehicula vel finibus non, fringilla quis nunc. Phasellus egestas vel velit vitae semper. Suspendisse a ipsum purus. Duis non sapien neque. In dolor neque, sagittis vel euismod a', 'images/download (2).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_status` int(20) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bank` varchar(30) NOT NULL,
  `upload_bukti` varchar(255) NOT NULL,
  `validasi_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_status`, `id_ticket`, `tanggal_pembayaran`, `bank`, `upload_bukti`, `validasi_admin`) VALUES
(122, 122, '2019-02-14 15:05:42', 'BCA', 'images/devsite-indigo.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(20) NOT NULL,
  `path_image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `path_image`, `judul`, `deskripsi`, `isi`, `tanggal_post`) VALUES
(1, 'images/1.jpeg', 'pagelaran pembukaan fashion warehouse project', 'mantap', 'adkjahsd dddddddhjnjavbdjhvasjhddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsajhvjahsdj', '2019-02-14 02:04:44'),
(2, 'images/download (2).jpg', 'rekure', 'adasdasdasd', 'asdadsadadasd', '2019-02-14 17:44:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `quantity` int(3) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `nama_pembeli`, `no_ktp`, `quantity`, `tanggal`, `id_status`) VALUES
(1, 'didin nur yahya', '131231', 1, '2019-02-14 08:26:09', 1),
(2, 'ahmad', '1313122', 1, '2019-02-14 08:41:35', 2),
(5, 'didin', '345345', 1, '2019-02-14 09:00:01', 5),
(8, 'hh', '123233', 1, '2019-02-14 09:09:10', 8),
(15, 'rizki prananta', '1233', 1, '2019-02-14 09:09:23', 15),
(20, 'firman', '12343', 1, '2019-02-14 09:11:28', 20),
(26, 'subhan', '123456', 1, '2019-02-14 09:23:37', 26),
(74, 'asda', '13123', 1, '2019-02-14 09:59:12', 74),
(76, 'firman', '123456', 1, '2019-02-14 09:47:12', 76),
(80, 'subhanallah', '123332', 1, '2019-02-14 09:40:14', 80),
(86, 'hsh', '12334', 1, '2019-02-14 14:28:39', 86),
(90, 'firman', '12345678', 1, '2019-02-14 09:17:58', 90),
(122, 'dahd', '1233', 1, '2019-02-14 14:55:57', 122),
(123, 'dd', '123123', 1, '2019-02-14 10:03:30', 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `email`, `username`, `password`) VALUES
(2, 'didin nur yahya', 'didinnuryahya@gmail,com', 'didin', '$2y$10$/A0ksO8pWRGz86UfATOHJekTtFWPCJVQAtfQptpC9h9X3thlzkMv6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
