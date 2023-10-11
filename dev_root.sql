-- phpMyAdmin SQL Dump
-- version 5.2.1-1.fc38
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2023 at 05:18 AM
-- Server version: 10.5.21-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_root`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `icon2` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `status`, `link`, `icon`, `icon2`, `class`) VALUES
(1, 'Dashboard', 'active', NULL, 'ti ti-cube', 'nav-icon fa-solid fa-gauge', NULL),
(2, 'Print', 'active', 'printkasir', 'ti ti-printer', 'nav-icon fa-solid fa-print', NULL),
(3, 'Services', 'active', 'service', 'ti ti-server-cog', 'nav-icon fa-solid fa-wrench', 'nav-link active'),
(4, 'Produk', 'active', 'produk', 'ti ti-building-store', 'nav-icon fa-solid fa-shop', NULL),
(5, 'Script Field', NULL, 'test', 'ti ti-code-dots', NULL, NULL),
(100, 'Sources', 'active', 'assets', 'ti ti-code', 'nav-icon fa-solid fa-code', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(100) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `printkasir`
--

CREATE TABLE `printkasir` (
  `id_print` int(50) NOT NULL,
  `invoice_print` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `jenis_print` varchar(100) NOT NULL,
  `harga_lembar` int(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `tgl_print` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `printkasir`
--

INSERT INTO `printkasir` (`id_print`, `invoice_print`, `nama_pelanggan`, `jenis_print`, `harga_lembar`, `qty`, `tgl_print`) VALUES
(0, 'YQP87613', 'Tunai', 'A4-Hitam', 1000, 42, '2023-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `printkasir_dumb`
--

CREATE TABLE `printkasir_dumb` (
  `id_print` int(50) NOT NULL,
  `invoice_print` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `jenis_print` varchar(100) NOT NULL,
  `harga_lembar` int(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `tgl_print` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `printkasir_dumb`
--

INSERT INTO `printkasir_dumb` (`id_print`, `invoice_print`, `nama_pelanggan`, `jenis_print`, `harga_lembar`, `qty`, `tgl_print`) VALUES
(0, '', 'Cash', 'A3-Hitam', 3000, 5, '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(50) NOT NULL,
  `kode_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `varian` varchar(100) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `diskon` tinyint(4) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT 1,
  `tgl_stok` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `merk`, `varian`, `harga_beli`, `diskon`, `harga_jual`, `stok`, `tgl_stok`) VALUES
(1, '619659069193', 'Cruzer Blade USB 2.0 Flash Drive 32GB', 'Sandisk', NULL, 50000, 0, 75000, 8, NULL),
(2, '4713218461162', 'SSD 2.5\" Sata 240GB', 'ADATA', NULL, 250000, 0, 375000, 2, NULL),
(4, '6971548136428', 'Acome Mousepad AMP01', 'Acome', 'Black', 11091, NULL, 35000, 5, NULL),
(6, '105', 'Unitech Wireless Silent Mouse Black', 'Unitech', 'Wireless\r\nBlack', 52000, NULL, 100000, 1, NULL),
(7, '106', 'Unitech Wireless + Bluetooh Silent Mouse Pink', 'Unitech', NULL, 57300, NULL, 135000, 0, NULL),
(8, '6935364085469', '5-Port Gigabit Desktop Switch LS1005G', 'Tp-link', NULL, 165000, NULL, 250000, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produkdummy`
--

CREATE TABLE `produkdummy` (
  `id_produk` int(50) NOT NULL,
  `kode_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `diskon` tinyint(4) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT 1,
  `tgl_stok` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produkdummy`
--

INSERT INTO `produkdummy` (`id_produk`, `kode_produk`, `nama_produk`, `merk`, `harga_beli`, `diskon`, `harga_jual`, `stok`, `tgl_stok`) VALUES
(1, '456', 'Sampel Nama Produk', 'Sampel Merk', 10000, 20, 140000, 10, '03-08-2023');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(50) NOT NULL,
  `no_invoice` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nama_pelanggan` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nama_device` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `no_seri` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `kelengkapan` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `perbaikan` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `catatan` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tgl_masuk` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `jam_masuk` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tgl_proses` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `jam_proses` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tgl_konfirmasi` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `jam_konfirmasi` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `solusi` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tgl_keluar` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `jam_keluar` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `biaya` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `no_invoice`, `nama_pelanggan`, `no_hp`, `nama_device`, `no_seri`, `kelengkapan`, `perbaikan`, `catatan`, `tgl_masuk`, `jam_masuk`, `tgl_proses`, `jam_proses`, `tgl_konfirmasi`, `jam_konfirmasi`, `solusi`, `tgl_keluar`, `jam_keluar`, `status`, `biaya`) VALUES
(1, 'HMA41735', 'Ody Oktavian', '082254085402', 'Thinkpad x120e', 'LR-2E070', 'Charger\r\nMouse', 'Service', 'Cek HDD Health\r\nInstall Linux\r\nRecover Windows 7', '13-08-2022', '14:16', NULL, NULL, NULL, NULL, 'HDD health 80%\r\nInstall Linux Manjaro i3\r\nWindows 7 Recovered', '21-02-2023', '12:26', 'Selesai', '80000'),
(20, 'GJR08215', 'Adit', '08115656689', 'Thinkpad x260', 'pcohjje3', 'Charger\r\nTas\r\nbattery ex - bn7xr', 'Install Ulang', 'Bitlocker Recovery Key \r\nBios Lock', '28-08-2022', '17:38', NULL, NULL, NULL, NULL, '* Install Ulang Windows 10 Pro', '29-08-2022', '18:41', 'Selesai', '50000'),
(21, 'IZW95078', 'Bang Yan', '081256657999', 'Asus X445LAB', 'F5N0WU035637194', 'Charger', 'Install Ulang', 'Windows 10\r\nOffice 2019\r\nAutoCAD 2020\r\nSketchup 2019', '29-08-2022', '18:18', NULL, NULL, NULL, NULL, 'Install ulang Windows 10 Pro\r\nOffice 2019\r\nAutoCAD 2020\r\nSketchup 2019', '29-08-2022', '22:09', 'Selesai', '50000'),
(31, 'DHV13756', 'Bangman', '087707658856', 'Asus X45AB', '6000030303001', 'Tas\r\nCharger\r\n', 'Service', 'Water Damage', '16-02-2023', '01:52', NULL, NULL, NULL, NULL, 'Mainboard Hangus', '23-06-2023', '13:26', 'Return', ''),
(32, 'XWC73046', 'Dedek', '00', 'Acer Aspire 4738', '', 'Charger', 'Upgrade', 'Ganti SSD Sandisk 250GB\r\n', '02-04-2023', '10:09', NULL, NULL, NULL, NULL, 'Ganti SSD + Install Ulang Windows 10\r\n(Termin)', '12-05-2023', '22:49', 'Selesai', '550000'),
(33, 'PIL35928', 'Adit', '08115656689', 'Thinkpad X270', 'LCIDJK10093', 'Tas', 'Install Ulang', 'Install Ulang\r\nBackup Data', '12-05-2023', '22:43', NULL, NULL, NULL, NULL, 'Install Ulang Windows 10\r\nRestore Data', '17-05-2023', '13:42', 'Selesai', ''),
(34, 'VJC09568', 'Bang Yan', '089676422997', 'Dell Inspiron 15 5584', '88gvpt2', '-', 'Service', 'Engsel Pecah', '28-05-2023', '20:21', NULL, NULL, NULL, NULL, 'Ganti LCD\r\nPerbaikan Frame LCD', '09-06-2023', '15:01', 'Selesai', '1800000'),
(35, 'KGM76538', 'Ida / Dedek', '085386321000', 'Acer E1-471', 'NXM0QSN00223118c067600', 'Baterai s/n: BT00607136C2202ABB BQ02', 'Service', 'Layar Goyang', '08-06-2023', '14:56', NULL, NULL, NULL, NULL, 'Reseat Soket Layar', '08-06-2023', '15:10', 'Selesai', '30000'),
(47, 'YTS20389', 'Abunk', '089694016946', 'Asus Zenbook UX482E', '', 'Charger', 'Install OS', 'Backup Data', '06-07-2023', '11:23', NULL, NULL, NULL, NULL, 'Install OS\r\nOfice 365 Subscriptions', '10-07-2023', '07:55', 'Selesai', '120000'),
(48, 'NKF15903', 'Adit', '089694217282', 'Epson L120', 'TP2K298501', '', 'Service', 'Tidak Narik Kertas', '18-07-2023', '15:48', NULL, NULL, NULL, NULL, 'Service Paper Feed - Roller\r\nAdj Reset', '19-07-2023', '10:26', 'Selesai', '50000'),
(56, 'UVR84091', 'Aming Coffee', '086654545454', 'Bubuk Aming Coffee', '80065656', 'Bungkus Plastik 1Kg', 'Lain-lain', 'Cek kematangan', '31-07-2023', '11:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Proses', NULL),
(61, 'JRF62481', 'Samson Gunawan', '081345263939', 'Epson L3110', 'EPS-PR30000', 'Kabel Power\r\nKabel USB', 'Service', 'Error 500', '03-08-2023', '14:36', NULL, NULL, NULL, NULL, 'Reset Printer', NULL, NULL, 'Konfirmasi', '800000'),
(62, 'NBJ42693', 'Cek Redirect', '081345263939', 'Epson L3110', '8000000', 'Kabel USB', 'Service', 'Tidak detect', '03-08-2023', '14:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Antri', NULL),
(63, 'FQL52143', 'pelanggan', '08838383838', 'Device', 'EPS-PR30000', 'tew', 'Service', 'tetew', '04-08-2023', '16:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Antri', NULL),
(64, 'VGM16540', 'asdasd', '123123123', 'asdasdasd', 'asd', 'asdasd', 'Service', 'asdasdasd', '09-08-2023', '11:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Proses', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `theme` varchar(50) NOT NULL DEFAULT 'primary',
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `alamat_perusahaan` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(50) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `sosial_media` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `last_login`, `nama_lengkap`, `theme`, `nama_perusahaan`, `alamat_perusahaan`, `no_telepon`, `catatan`, `sosial_media`) VALUES
('1', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', 'admin@admin.com', '2023-09-30 03:32:03', 'Administrator', 'primary', 'ROOT IT', 'Jl Tani Makmur Kota Baru Pontianak', '0822-5408-5402', 'Computer Laptop Printer Repair Specialist', 'rootcompfix'),
('1000', 'ody', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', 'ody@oktavian.com', '2023-08-21 02:28:06', 'Ody Oktavian', 'pink', 'ROOT COMP', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD UNIQUE KEY `id` (`id_pembelian`),
  ADD UNIQUE KEY `id_pembelian` (`id_pembelian`);

--
-- Indexes for table `printkasir`
--
ALTER TABLE `printkasir`
  ADD PRIMARY KEY (`id_print`);

--
-- Indexes for table `printkasir_dumb`
--
ALTER TABLE `printkasir_dumb`
  ADD PRIMARY KEY (`id_print`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD UNIQUE KEY `id_produk_2` (`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produkdummy`
--
ALTER TABLE `produkdummy`
  ADD UNIQUE KEY `id_produk_2` (`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD UNIQUE KEY `iddevice` (`id_service`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produkdummy`
--
ALTER TABLE `produkdummy`
  MODIFY `id_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
