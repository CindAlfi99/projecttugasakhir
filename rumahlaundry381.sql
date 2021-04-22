-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 08:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahlaundry381`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry_karpet`
--

CREATE TABLE `laundry_karpet` (
  `id` int(11) NOT NULL,
  `item` varchar(70) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundry_karpet`
--

INSERT INTO `laundry_karpet` (`id`, `item`, `harga`) VALUES
(1, 'Karpet Bulu (M2)', '25000'),
(2, 'Karpet Tebal (M2)', '17000'),
(3, 'Karpet Tebal Super > 1 cm', '30000'),
(4, 'Karpet Tipis', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_kiloan`
--

CREATE TABLE `laundry_kiloan` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundry_kiloan`
--

INSERT INTO `laundry_kiloan` (`id`, `item`, `harga`, `gambar`) VALUES
(1, 'Etimasi_selesai:48Jam', '6000', ''),
(2, 'Etimasi_selesai:24Jam', '10000', ''),
(3, 'Etimasi_selesai:12Jam', '15000', ''),
(4, 'Etimasi selesai: 6 Jam', '17000', ''),
(5, 'Cuci Kering', '5000', ''),
(6, 'Setrika', '5000', ''),
(7, 'Laundry Express (5 Jam)', '20000', '');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_satuan`
--

CREATE TABLE `laundry_satuan` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundry_satuan`
--

INSERT INTO `laundry_satuan` (`id`, `item`, `harga`, `gambar`) VALUES
(1, 'Atasan(Pria/Wanita)', '15000', 'scale.png'),
(2, 'Baju_Muslim', '15000', 'tshirt.png'),
(3, 'Bantal_Kecil', '12000', 'carpet.png'),
(4, 'Bantal_Besar', '20000', 'running.png'),
(5, 'Baju_1set_(BahanKaos)', '25000', 'cover.png'),
(6, 'Baju_Safari(Atasan)', '25000', ''),
(7, 'Baju_Safari(1set)', '35000', ''),
(8, 'Boneka_Size_20cm', '12000', ''),
(9, 'Boneka_Size_25cm-40cm', '18000', ''),
(10, 'Boneka(Uk_45cm-60cm)', '30000', ''),
(11, 'Celana_Pendek', '15000', ''),
(12, 'Celana_Panjang(No_jeans)', '20000', ''),
(13, 'Celana_Panjang(Jeans&Denim)', '23000', ''),
(14, 'Daster', '20000', ''),
(15, 'Dress', '35000', ''),
(16, 'Gaun_Pendek', '25000', ''),
(17, 'Gaun_Panjang\r\n', '35000', ''),
(18, 'Gaun_Pengantin', '100000', ''),
(19, 'Jaket_Tipis', '23000', ''),
(20, 'Jaket_Tebal', '28000', ''),
(21, 'Jaket_Kulit', '45000', ''),
(22, 'Jas_atasan(Pria/Wanita)', '35000', ''),
(23, 'Jas_Setelan(Pria/Wanita)', '45000', ''),
(24, 'Kebaya_Setelan', '50000', ''),
(25, 'Kemeja(Lengan_Pendek)', '15000', ''),
(26, 'Kemeja(Lengan_Panjang)', '20000', ''),
(27, 'Kemeja_Batik ', '22000', ''),
(28, 'Koper_kecil(size_18Liter-20Liter)', '35000', ''),
(29, 'Koper_Sedang(size_22Liter-27Liter)', '50000', ''),
(30, 'Koper_Besar(size>30Liter)', '65000', ''),
(31, 'Mantel(Uk_Sedang)', '25000', ''),
(32, 'Mantel_(Uk_Tebal)', '35000', ''),
(33, 'Mukenah(1set)', '25000', ''),
(34, 'Pakaian_Renang(All_size)', '25000', ''),
(35, 'Pakaian_Dalam_Wanita(Lingerie)', '25000', ''),
(36, 'Piyama(1set)', '25000', ''),
(37, 'Rok_Biasa', '15000', ''),
(38, 'Rok_Plisket', '20000', ''),
(39, 'Rompi_Kulit', '35000', ''),
(40, 'Sajadah', '15000', ''),
(41, 'Sweater/hoodie', '25000', ''),
(42, 'Tas_Wanita(Non_Kulit)', '25000', ''),
(43, 'Tas_Ransel(Uk_Kecil)', '35000', ''),
(44, 'Tas_Ransel(Uk_Besar)', '50000', ''),
(45, 'Tas_Kulit', '50000', ''),
(46, 'Tas_Carrier(size_30Liter-45Liter)', '50000', ''),
(47, 'Tas_Carrier(size_50Liter-65Liter)', '60000', ''),
(48, 'Tas_Carrier_(size>65 Liter)', '70000', ''),
(49, 'Bed_Cover(Uk_S)', '25000', ''),
(50, 'Bed_Cover(Uk_M)', '35000', ''),
(51, 'Bed_Cover_(Uk_L)', '40000', '');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_sepatu`
--

CREATE TABLE `laundry_sepatu` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundry_sepatu`
--

INSERT INTO `laundry_sepatu` (`id`, `item`, `harga`, `gambar`) VALUES
(1, 'Fast_Clean', '25000', ''),
(2, 'Deep_Clean', '35000', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_masuk`
--

CREATE TABLE `order_masuk` (
  `id` int(11) NOT NULL,
  `no_resi` int(20) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_wa` int(15) NOT NULL,
  `alamat_jemput` varchar(50) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `jenis_item` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `proses` varchar(25) NOT NULL,
  `tanggal_pesan` datetime NOT NULL DEFAULT current_timestamp(),
  `tanggal_selesai` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_masuk`
--

INSERT INTO `order_masuk` (`id`, `no_resi`, `nama_pemesan`, `email`, `no_wa`, `alamat_jemput`, `layanan`, `jenis_item`, `jumlah`, `harga`, `proses`, `tanggal_pesan`, `tanggal_selesai`) VALUES
(1, 2, 'ani', 'acindi38@gmail.com', 484, 'jl.', 'kiloan', 'd', 1, 0, 'jemput', '2021-04-20 14:33:23', '2021-04-22 08:37:43'),
(2, 0, 'santi', 'ghiyog12@gmail.com', 0, 'jl.Ahmad yani no.05', 'satuan', '', 1, 0, 'jemput', '2021-04-20 14:34:29', '2021-04-22 08:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password`) VALUES
(1, 'admin@laundry.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry_karpet`
--
ALTER TABLE `laundry_karpet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry_kiloan`
--
ALTER TABLE `laundry_kiloan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry_satuan`
--
ALTER TABLE `laundry_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry_sepatu`
--
ALTER TABLE `laundry_sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_masuk`
--
ALTER TABLE `order_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry_karpet`
--
ALTER TABLE `laundry_karpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laundry_kiloan`
--
ALTER TABLE `laundry_kiloan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laundry_satuan`
--
ALTER TABLE `laundry_satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `laundry_sepatu`
--
ALTER TABLE `laundry_sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_masuk`
--
ALTER TABLE `order_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
