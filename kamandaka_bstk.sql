-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 06, 2023 at 08:15 AM
-- Server version: 5.7.22
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamandaka_bstk`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_registration_car`
--

CREATE TABLE `detail_registration_car` (
  `id` int(11) NOT NULL,
  `owner_no_registration` varchar(50) NOT NULL,
  `tipe_kendaraan` varchar(50) NOT NULL,
  `no_polisi_kendaraan` varchar(50) NOT NULL,
  `tahun_kendaraan` varchar(50) NOT NULL,
  `no_rangka_kendaraan` varchar(100) NOT NULL,
  `no_mesin_kendaraan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_registration_car`
--

INSERT INTO `detail_registration_car` (`id`, `owner_no_registration`, `tipe_kendaraan`, `no_polisi_kendaraan`, `tahun_kendaraan`, `no_rangka_kendaraan`, `no_mesin_kendaraan`) VALUES
(18, 'KNM-000001', 'Innova 2.4 G Diesel', 'B 2444 SRQ', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(19, 'KNM-000002', 'Innova 2.4 G Diesel', 'B 2444 SRR', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(20, 'KNM-000003', 'Innova 2.4 G Diesel', 'B 2444 SRR', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(21, 'KNM-000004', 'Innova 2.4 G Diesel', 'B 2444 SRQ', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(22, 'KNM-000005', 'Innova 2.4 G Diesel', 'B 2444 SRR', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(23, 'KNM-000006', 'Innova 2.4 G Diesel', 'B 2444 SRR', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(24, 'KNM-000007', 'Innova 2.4 G Diesel', 'B 2444 SRR', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(25, 'KNM-000008', 'Innova 2.4 G Diesel', 'B 2444 SRR', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(26, 'KNM-000009', 'Innova 2.4 G Diesel', 'B 2444 SRR', '2022/Hitam Metalik', 'MHHSGGHWIIBDL2121K', 'Azzarnuji Nur Ukhrowi'),
(27, 'KNM-000010', 'Innova', 'B 2444 SRR', '2022 Hitam', 'jMMHAJJSA', 'MHHSHJJAS123'),
(28, 'KNM-000011', 'Innova', 'B 2444 SRR', '2022 Hitam', 'jMMHAJJSA', 'MHHHSAIHU443');

-- --------------------------------------------------------

--
-- Table structure for table `detail_registration_date`
--

CREATE TABLE `detail_registration_date` (
  `id` int(11) NOT NULL,
  `owner_no_registration` varchar(50) NOT NULL,
  `tanggal_sewa` varchar(50) NOT NULL,
  `akhir_tanggal_sewa` varchar(50) NOT NULL,
  `jumlah_hari_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_registration_date`
--

INSERT INTO `detail_registration_date` (`id`, `owner_no_registration`, `tanggal_sewa`, `akhir_tanggal_sewa`, `jumlah_hari_sewa`) VALUES
(18, 'KNM-000001', '10-11-2023', '13-11-2023', '3'),
(19, 'KNM-000002', '10-11-2023', '13-11-2023', '3'),
(20, 'KNM-000003', '10-11-2023', '13-11-2023', '3'),
(21, 'KNM-000004', '18-12-2023', '13-11-2023', '3'),
(22, 'KNM-000005', '10-11-2023', '21-12-2023', '3'),
(23, 'KNM-000006', '10-11-2023', '13-11-2023', '4'),
(24, 'KNM-000007', '10-11-2023', '13-11-2023', '3'),
(25, 'KNM-000008', '10-11-2023', '13-11-2023', '3'),
(26, 'KNM-000009', '10-11-2023', '13-11-2023', '3'),
(27, 'KNM-000010', '07-04-2023', '10-04-2023', '3'),
(28, 'KNM-000011', '07-04-2023', '10-04-2023', '3');

-- --------------------------------------------------------

--
-- Table structure for table `detail_registration_image_car`
--

CREATE TABLE `detail_registration_image_car` (
  `id` int(11) NOT NULL,
  `owner_no_registration` varchar(50) NOT NULL,
  `img_depan_kendaraan` varchar(100) NOT NULL,
  `img_belakang_kendaraan` varchar(100) NOT NULL,
  `img_samping_kanan_kendaraan` varchar(100) NOT NULL,
  `img_samping_kiri_kendaraan` varchar(100) NOT NULL,
  `img_bukti_terima_kendaraan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_registration_image_car`
--

INSERT INTO `detail_registration_image_car` (`id`, `owner_no_registration`, `img_depan_kendaraan`, `img_belakang_kendaraan`, `img_samping_kanan_kendaraan`, `img_samping_kiri_kendaraan`, `img_bukti_terima_kendaraan`) VALUES
(18, 'KNM-000001', 'Table 2_8.png', 'Table 1_8.png', 'Sigma 1_6.png', 'Screenshot from 2023-05-10 11-31-02_7.png', 'img1557402397_6.jpg'),
(19, 'KNM-000002', 'img1557402397_7.jpg', 'img1557402397_8.jpg', 'img1557402397_9.jpg', 'img1557402397_10.jpg', 'img1557402397_11.jpg'),
(20, 'KNM-000003', 'Screenshot from 2023-05-10 11-31-02_8.png', 'Sigma 1_7.png', 'img1557402397_12.jpg', 'Sigma 1_8.png', 'Table 2_9.png'),
(21, 'KNM-000004', 'Sigma 1_9.png', 'Table 1_9.png', 'Table 1_10.png', 'Table 1_11.png', 'Table 1_12.png'),
(22, 'KNM-000005', 'Sigma 1_10.png', 'Table 1_13.png', 'Table 2_10.png', 'Screenshot from 2023-05-10 11-31-02_9.png', 'Screenshot from 2023-05-10 11-31-02_10.png'),
(23, 'KNM-000006', 'Table 1_14.png', 'Sigma 1_11.png', 'Table 1_15.png', 'Table 2_11.png', 'Screenshot from 2023-05-10 11-31-02_11.png'),
(24, 'KNM-000007', 'Sigma 1_12.png', 'Table 1_16.png', 'Table 2_12.png', 'Screenshot from 2023-05-10 11-31-02_12.png', 'img1557402397_13.jpg'),
(25, 'KNM-000008', 'Table 2.png', 'Table 1.png', 'Screenshot from 2023-05-10 11-31-02.png', 'img1557402397.jpg', 'Screenshot from 2023-05-10 11-31-02_1.png'),
(26, 'KNM-000009', 'Table 2_1.png', 'Table 1_1.png', 'Sigma 1.png', 'Screenshot from 2023-05-10 11-31-02_2.png', 'img1557402397_1.jpg'),
(27, 'KNM-000010', 'toyota-innova-zenix-color-553484_1.png', 'toyota-innova-zenix-color-553484_2.png', 'toyota-innova-zenix-color-553484_3.png', 'toyota-innova-zenix-color-553484_4.png', 'toyota-innova-zenix-color-553484_5.png'),
(28, 'KNM-000011', 'Driver.png', 'Login.png', 'Driver_1.png', 'Driver_2.png', 'Driver_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_registration_user`
--

CREATE TABLE `detail_registration_user` (
  `id` int(11) NOT NULL,
  `owner_no_registration` varchar(50) NOT NULL,
  `user_perusahaan` varchar(50) NOT NULL,
  `user_penanggung_jawab` varchar(50) NOT NULL,
  `user_penerima` varchar(50) NOT NULL,
  `user_telepon` varchar(50) NOT NULL,
  `user_alamat` text NOT NULL,
  `user_no_ktp` varchar(50) NOT NULL,
  `user_ktp_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_registration_user`
--

INSERT INTO `detail_registration_user` (`id`, `owner_no_registration`, `user_perusahaan`, `user_penanggung_jawab`, `user_penerima`, `user_telepon`, `user_alamat`, `user_no_ktp`, `user_ktp_img`) VALUES
(18, 'KNM-000001', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'img1557402397_5.jpg'),
(19, 'KNM-000002', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Screenshot from 2023-05-10 11-31-02.png'),
(20, 'KNM-000003', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Table 1.png'),
(21, 'KNM-000004', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Table 1_1.png'),
(22, 'KNM-000005', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Screenshot from 2023-05-10 11-31-02_1.png'),
(23, 'KNM-000006', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Screenshot from 2023-05-10 11-31-02_2.png'),
(24, 'KNM-000007', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Screenshot from 2023-05-10 11-31-02_3.png'),
(25, 'KNM-000008', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Sigma 1.png'),
(26, 'KNM-000009', 'kAMANDAKA', 'AJAY', 'Azzarnuji Nur Ukhrowi', '085883260823', 'Kp.cakung\r\nRumah', '0121281983913113', 'Table 2.png'),
(27, 'KNM-000010', 'Kamandaka Premium Car', 'AZZAR', 'Azzaarnuji Nur Ukhrowi', '+6285883260823', 'Kp.Cakung', '12121212121221', 'Screenshot 2023-02-22 133404.png'),
(28, 'KNM-000011', 'Kamandaka Premium Car', 'AZZAR', 'Azzaarnuji Nur Ukhrowi', '+6285883260823', 'Kp.Cakung', '12121212121221', 'Dashboard.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration_bstk`
--

CREATE TABLE `registration_bstk` (
  `id` int(11) NOT NULL,
  `no_registration` varchar(50) NOT NULL,
  `owner_penyewa` varchar(100) NOT NULL,
  `owner_no_ktp_user` varchar(50) NOT NULL,
  `di_daftari_oleh` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration_bstk`
--

INSERT INTO `registration_bstk` (`id`, `no_registration`, `owner_penyewa`, `owner_no_ktp_user`, `di_daftari_oleh`, `status`, `created_at`) VALUES
(20, 'KNM-000001', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(21, 'KNM-000002', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(22, 'KNM-000003', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(23, 'KNM-000004', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '18-12-2023'),
(24, 'KNM-000005', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(25, 'KNM-000006', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(26, 'KNM-000007', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(27, 'KNM-000008', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(28, 'KNM-000009', 'Azzarnuji Nur Ukhrowi', '0121281983913113', 'Azzarnuji', 'Selesai', '10-11-2023'),
(29, 'KNM-000010', 'Azzaarnuji Nur Ukhrowi', '12121212121221', 'Azzarnuji', 'Pending', '07-04-2023'),
(30, 'KNM-000011', 'Azzaarnuji Nur Ukhrowi', '12121212121221', 'Azzarnuji', 'Disewa', '07-04-2023');

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `email`, `password`, `full_name`, `image`, `role`) VALUES
(2, 'azzar@kamandaka.com', '$2y$10$lrJ8W2ci0n3MSnZVY4oDWeKJA941DjB32k/.Xmp.D8KB.rqdFk/AC', 'Azzarnuji', NULL, 'admin'),
(23, 'azzarnuji@kamandaka.com', '$2y$10$.UH7SXfqtZU4CTf6Y082LO3XGswmOh3v.15i4q05ichziOc10PG7a', 'Azzar Nuji', 'Screenshot from 2023-05-10 11-31-02_1.png', 'driver'),
(25, 'caca@kamandaka.com', '$2y$10$z0CWCrbtmZJpsYUXTPgNuujSxZTlunX3JhDcu4FnIdxlAd2ZbZ6TW', 'Caca', 'Sigma 1_2.png', 'driver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_registration_car`
--
ALTER TABLE `detail_registration_car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_no_registration` (`owner_no_registration`);

--
-- Indexes for table `detail_registration_date`
--
ALTER TABLE `detail_registration_date`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_no_registration` (`owner_no_registration`);

--
-- Indexes for table `detail_registration_image_car`
--
ALTER TABLE `detail_registration_image_car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_no_registration` (`owner_no_registration`);

--
-- Indexes for table `detail_registration_user`
--
ALTER TABLE `detail_registration_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_no_registration` (`owner_no_registration`);

--
-- Indexes for table `registration_bstk`
--
ALTER TABLE `registration_bstk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_registration` (`no_registration`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_registration_car`
--
ALTER TABLE `detail_registration_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_registration_date`
--
ALTER TABLE `detail_registration_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_registration_image_car`
--
ALTER TABLE `detail_registration_image_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_registration_user`
--
ALTER TABLE `detail_registration_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `registration_bstk`
--
ALTER TABLE `registration_bstk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_registration_car`
--
ALTER TABLE `detail_registration_car`
  ADD CONSTRAINT `fk_detail_registration_car` FOREIGN KEY (`owner_no_registration`) REFERENCES `registration_bstk` (`no_registration`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_registration_date`
--
ALTER TABLE `detail_registration_date`
  ADD CONSTRAINT `fk_detail_registration_date` FOREIGN KEY (`owner_no_registration`) REFERENCES `registration_bstk` (`no_registration`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_registration_image_car`
--
ALTER TABLE `detail_registration_image_car`
  ADD CONSTRAINT `fk_detail_registration_image_car` FOREIGN KEY (`owner_no_registration`) REFERENCES `registration_bstk` (`no_registration`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_registration_user`
--
ALTER TABLE `detail_registration_user`
  ADD CONSTRAINT `fk_detail_registration_user` FOREIGN KEY (`owner_no_registration`) REFERENCES `registration_bstk` (`no_registration`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
