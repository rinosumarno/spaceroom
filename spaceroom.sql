-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 05:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaceroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'CO admin', 'admin2', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id` int(11) NOT NULL,
  `id_booking` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id`, `id_booking`, `id_user`, `gambar`) VALUES
(8, 'SP005', 'US001', 'gambar1614089416.jpg'),
(9, 'SP005', 'US001', 'gambar1614089440.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `aktif` enum('aktif','-') NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_galery`, `id_ruangan`, `aktif`, `gambar`) VALUES
(3, 1, '-', 'gambar1573024287.jpg'),
(5, 1, '-', 'gambar1573030655.jpg'),
(6, 1, 'aktif', 'gambar1573030695.png'),
(7, 1, '-', 'gambar1573030758.jpg'),
(21, 1, '-', 'gambar1589525593.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_booking`
--

CREATE TABLE `jadwal_booking` (
  `id` int(11) NOT NULL,
  `id_booking` varchar(255) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `title` varchar(126) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `color` varchar(24) DEFAULT NULL,
  `start_date` date NOT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_booking`
--

INSERT INTO `jadwal_booking` (`id`, `id_booking`, `id_user`, `title`, `description`, `color`, `start_date`, `create_at`) VALUES
(134, 'SP004', 'US006', 'rinos1', 'Sudah di booking jam 12:30:00', '#008000', '2020-05-30', '2020-05-16 16:34:02'),
(135, 'SP005', 'US001', 'RinoS', 'Sudah di booking jam 21:05:00', '#008000', '2021-02-23', '2021-02-23 21:05:16'),
(136, 'SP006', 'US001', 'RinoS', 'Sudah di booking jam 21:18:00', '#008000', '2021-02-23', '2021-02-23 21:16:50'),
(137, 'SP006', 'US001', 'RinoS', 'Sudah di booking jam 21:18:00', '#008000', '2021-02-23', '2021-02-23 21:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembatalan`
--

CREATE TABLE `konfirmasi_pembatalan` (
  `id` int(15) NOT NULL,
  `id_booking` varchar(255) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pembatalan`
--

INSERT INTO `konfirmasi_pembatalan` (`id`, `id_booking`, `id_user`) VALUES
(4, 'SP001', 'US005');

-- --------------------------------------------------------

--
-- Table structure for table `kontenhome1`
--

CREATE TABLE `kontenhome1` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontenhome1`
--

INSERT INTO `kontenhome1` (`id_konten`, `judul`, `deskripsi`) VALUES
(1, 'TENTANG RUANGAN INI ', 'Dinas Komunikasi dan Informatika (Diskominfo) Kota Depok melalui kreativitasnya membuat sebuah ruangan unik dengan tema futuristik yang diberi nama Smart Space.  Ruangan yang didesain dengan sangat nyaman bagi pengunjungnya ini terletak di lantai 1, Gedung Perpustakaan Umum Kota Depok. Kepala Diskominfo Kota Depok, Mohammad Fitriawan, menyebutkan bahwa Ruang Smart Space ini sebagai sarana aktivitas pertemuan dari berbagai komunitas yang ada di Kota Depok. Smart Space ini diperuntukkan bagi seluruh komunitas yang ada di Kota Depok untuk bisa berkumpul dalam menuangkan berbagai ide-idenya, ruangan yang dominan dengan warna putih dan orange ini diberi nama Smart Space, yakni satu ruang cerdas bagaimana membangun Kota Depok agar lebih baik lagi dan lebih cerdas lagi ke depannya. Smart Space For Public Aspiration And Colaboration of Excellence ini dapat menjadi sebuah sarana dalam menciptakan karya-karya produktif dan inspiratif yang bisa saja dijadikan sebagai jalan keluar dari permasalahan-permasalahan yang ada di Depok, Dilengkapi dengan peralatan canggih untuk teleconference, ruangan ini nantinya bisa menampung pertemuan-pertemuan produktif hingga 20 orang, serta sudah tersedia media pembelajaran berupa informasi mengenai Kota Depok dan tentunya, Ruangan cerdas ini dapat berfungsi sebagai menampung aspirasi publik. Seluruh publik boleh datang untuk menyampaikan aspirasinya agar bisa menjadi individu-individu excellence pembawa kemajuan Kota Depok.\r\n \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jam_operasi` varchar(255) NOT NULL,
  `kapasitas` int(15) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama`, `jam_operasi`, `kapasitas`, `harga`) VALUES
(1, 'meeting', 'Senin - Minggu : 09:00 - 21:00', 10, 'Booking disini Gratis!');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `judul_slide` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `judul_slide`, `gambar`) VALUES
(5, 'Welcome To', 'gambar1571585275.jpg'),
(6, 'Space Room', 'gambar1571585305.png'),
(7, 'Walikota Depok', 'gambar1571585330.png'),
(8, 'Jawa Barat', 'gambar1571585348.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_booking` varchar(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `id_ruangan` varchar(15) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email_pemesan` varchar(30) NOT NULL,
  `jam` time NOT NULL,
  `tgl` date NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `almt` varchar(123) NOT NULL,
  `status` enum('Pending','Diterima','Ditolak','Dibatalkan') NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_booking`, `id_user`, `id_ruangan`, `nama`, `email_pemesan`, `jam`, `tgl`, `notelp`, `almt`, `status`, `gambar`) VALUES
('SP001', 'US005', '1', 'fadhil subari', 'nurfadhilsubari@gmail.com', '01:00:00', '2020-05-16', '08123123123', 'Depok								', 'Dibatalkan', 'gambar1589575612.png'),
('SP002', 'US005', '1', 'fadhil subari', 'nurfadhilsubari@gmail.com', '01:00:00', '2020-05-16', '08123123123', '			Depok									', 'Ditolak', 'gambar1589576072.png'),
('SP003', 'US005', '1', 'fadhil subari', 'nurfadhilsubari@gmail.com', '01:00:00', '2020-05-17', '08123123123', '			Depok									', 'Dibatalkan', 'gambar1589576107.jpg'),
('SP004', 'US006', '1', 'rinos1', 'rinos14119@gmail.com', '12:30:00', '2020-05-30', '08123123123', 'depok						', 'Diterima', 'gambar1589621408.jpg'),
('SP005', 'US001', '1', 'RinoS', 'rinosumarno@gmail.com', '21:05:00', '2021-02-23', '081286920700', 'Jl. Depok raya 20 blok.b Jawa Barat\r\n												', 'Diterima', 'gambar1614089060.jpg'),
('SP006', 'US001', '1', 'RinoS', 'rinosumarno@gmail.com', '21:18:00', '2021-02-23', '081286920700', 'jl. depok no \r\n21												', 'Diterima', 'gambar1614089782.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(6) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `gender`, `no_telp`, `alamat`, `email`, `password`) VALUES
('US001', 'rino', 'RinoS', 'Laki-Laki', '081286920700', 'Depok', 'rinosumarno@gmail.com', '202cb962ac59075b964b07152d234b70'),
('US002', 'upi', 'Luthfi', 'Laki-Laki', '087874050008', 'Bogor', 'luthfifachruzy14@gmail.com', '202cb962ac59075b964b07152d234b70'),
('US003', 'oji', 'Ahmad Fauzi', 'Laki-Laki', '0878734056789', 'Depok', 'ahmadfauzi1090@gmail.com', '202cb962ac59075b964b07152d234b70'),
('US004', 'irfan', 'irfanra', 'Laki-Laki', '0823641273', 'depok', 'irfan@gmail.com', '202cb962ac59075b964b07152d234b70'),
('US005', 'fadhilsubari', 'fadhil subari', 'Laki-Laki', '08123123123', 'depok', 'nurfadhilsubari@gmail.com', '5dc329b902a980c8b0df951f45a9bf13'),
('US006', 'rinos1', 'rinos1', 'Laki-Laki', '08123123123', 'Kampung Banjaran pucung Rt.2 Rw.5 No.rmh 120', 'rinos14119@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `jadwal_booking`
--
ALTER TABLE `jadwal_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_pembatalan`
--
ALTER TABLE `konfirmasi_pembatalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontenhome1`
--
ALTER TABLE `kontenhome1`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jadwal_booking`
--
ALTER TABLE `jadwal_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `konfirmasi_pembatalan`
--
ALTER TABLE `konfirmasi_pembatalan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontenhome1`
--
ALTER TABLE `kontenhome1`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
