-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2025 at 05:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lemari`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `SN` varchar(25) DEFAULT NULL,
  `merk` varchar(25) DEFAULT NULL,
  `computer_name` varchar(30) DEFAULT NULL,
  `ex` varchar(25) DEFAULT NULL,
  `status` enum('keluar','disimpan') NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `dipakai` varchar(25) DEFAULT NULL,
  `kondisi` enum('rusak','baru','ok','kurang_baik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `SN`, `merk`, `computer_name`, `ex`, `status`, `tanggal_masuk`, `tanggal_keluar`, `keterangan`, `dipakai`, `kondisi`) VALUES
(16, 'GBN0CV10C572466', 'ASUS', 'CREFDX07', 'Arum Dinawati', 'disimpan', '2025-05-27', '0000-00-00', 'dilemari , Laptop Lemot', '', 'rusak'),
(17, 'GAN0CV19J443438', 'ASUS', 'CREFDX10', 'Muhammad Ridwan', 'disimpan', '0000-00-00', '0000-00-00', '( rusak tidak bisa charge )\r\nLaptop ada di Lemari', '', 'rusak'),
(18, 'K1N0CV06F320038', 'ASUS', 'RUH-LAPTOP', 'Rudy Hartono', 'disimpan', '0000-00-00', '0000-00-00', 'Laptop dilemari, Battery Tidak bisa charger dan charger rusak', '', 'rusak'),
(19, 'PF0HDRTB', 'Lenovo', 'ITFDX05', 'Martin', 'disimpan', '2023-12-12', '0000-00-00', 'SSD dipakai di PC di meja pak Sugi , Diasposal, Tidak ada Tas', '', 'rusak'),
(20, 'PF00KYCH', 'LENOVO', 'CREFDX15', '', 'disimpan', '2025-06-18', '0000-00-00', 'Laptop Rusak', '', 'rusak'),
(21, 'LR09DCXT', 'Lenovo', 'PCM-LAPTOP', 'Arvan Jacobus', 'disimpan', '2024-01-05', '0000-00-00', 'Dilemari, Tidak ada tas tidak ada charger', '', 'kurang_baik'),
(22, '5CD8113BVK', 'HP', 'ITFDX04', 'Muhammad Ridwan', 'disimpan', '2024-08-06', '0000-00-00', 'Ada dilemari Bad Stock, Tidak Ada Tas, Ada Charger', '', 'kurang_baik'),
(23, 'FCN0CV094946508', 'ASUS', 'PRDFDX14', 'Diptani Lintang', 'disimpan', '2024-09-18', '0000-00-00', 'Laptop Dilemari, Kondisi Lemot, Tidak ada Tas, Tidak ada Charger', '', 'kurang_baik'),
(24, '721V5L2', 'DELL', 'MDSRND13', 'Wakhid Khamdani', 'disimpan', '0000-00-00', '0000-00-00', 'Laptop Rusak Tanpa Charger, Tidak ada tas\r\n', '', 'rusak'),
(25, 'LR09DDS8', 'Lenovo', 'CREFDX01', 'Andika Putra', 'disimpan', '2024-10-28', '0000-00-00', 'Tanpa Charger , Charger dipakai QA MDS', '', 'kurang_baik'),
(26, 'HCN0CV14372751F	', 'ASUS', '  CREFDX13', 'Sulaeman', 'disimpan', '2024-10-28', '0000-00-00', 'Laptop Lemot', '', 'kurang_baik'),
(27, 'GBN0CV209219483', 'ASUS', 'QAFDX09', 'Devi Haryanti', 'disimpan', '0000-00-00', '0000-00-00', 'Laptop Lemot, Tidak ada charger', '', 'kurang_baik'),
(28, 'PC0T7V9K', 'LENOVO', 'SAPMember-11', 'Lany', 'disimpan', '2025-06-13', '0000-00-00', 'Laptop OK', '', 'ok'),
(29, 'G2N0CV02H57605A', 'ASUS', 'FDXTEK04', 'Hartono', 'disimpan', '2025-07-10', '0000-00-00', 'Keyboard Rusak ,Charger rusak , tidak ada tas', '', 'rusak'),
(30, 'LR09DD7A', 'Lenovo', 'CREFDX', 'Raras', 'disimpan', '2024-11-12', '0000-00-00', 'Laptop Lemot, Baut Cover laptop Select ,Adapter tidak ada', '', 'kurang_baik'),
(31, 'PF4L8GLH', 'Lenovo', 'ITFDX06', 'Parulian Sianturi', 'disimpan', '2025-06-30', '0000-00-00', 'User Resign, Laptop OK ,', '', 'ok'),
(32, 'PC0NLGKV', 'Lenovo', 'SAPMember-15', 'Resti', 'disimpan', '2025-06-09', '0000-00-00', 'Laptop OK, Adaptor Baru', '', 'ok'),
(33, 'PC0K2ECL', 'Lenovo', 'MGTFDX02', 'Setio Wibowo', 'disimpan', '2025-05-14', '0000-00-00', 'Laptop OK', '', 'ok'),
(34, 'PC0KE3YB', 'Lenovo', 'ITFDX02', 'Sasmitoh Rahmad Riady', 'disimpan', '0000-00-00', '2025-07-15', 'Tidak ada charger, Tidak ada tas , Laptop OK , only laptop', 'Purwanto (HRGA) Untuk exp', 'ok'),
(35, '5CD82026DH', 'HP', 'FDXPPIC01-IT', 'Supriyanto', 'disimpan', '0000-00-00', '0000-00-00', 'Battery Rusak Harus Cas terus', 'aziz', 'kurang_baik'),
(56, 'PC0KE3ZU', 'Lenovo', 'CREFDX08', 'Veronika Esti Dwi Hapsari', 'disimpan', '2024-08-10', '0000-00-00', 'Laptop Di lemari Tanpa Tas,Tidak ada charger, Rusak', '', 'rusak'),
(58, 'PC0AZFJ5', 'Lenovo', 'CREFDX03', 'Putri Laras Ayu', 'disimpan', '2025-07-11', '0000-00-00', 'wifi error , Charger dipakai Laptop Sasmitoh (WIfi sering matimatian sendiri)', '', 'kurang_baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
