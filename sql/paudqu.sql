-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 01:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paudqu`
--
CREATE DATABASE IF NOT EXISTS `paudqu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `paudqu`;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

DROP TABLE IF EXISTS `pendaftar`;
CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `Nama_Lengkap` varchar(255) NOT NULL,
  `NIK` varchar(20) DEFAULT NULL,
  `Tempat_Lahir` varchar(100) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Agama` varchar(20) DEFAULT NULL,
  `Anak_ke` int(11) DEFAULT NULL,
  `Alamat_Peserta_Didik` varchar(255) DEFAULT NULL,
  `Ayah` varchar(100) DEFAULT NULL,
  `Ibu` varchar(100) DEFAULT NULL,
  `Alamat_Orang_Tua` varchar(255) DEFAULT NULL,
  `Pekerjaan_Ayah` varchar(50) DEFAULT NULL,
  `Pekerjaan_Ibu` varchar(50) DEFAULT NULL,
  `File_KK` longtext NOT NULL,
  `File_KTP` longtext NOT NULL,
  `File_Foto` longtext NOT NULL,
  `noHP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `Nama_Lengkap`, `NIK`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Agama`, `Anak_ke`, `Alamat_Peserta_Didik`, `Ayah`, `Ibu`, `Alamat_Orang_Tua`, `Pekerjaan_Ayah`, `Pekerjaan_Ibu`, `File_KK`, `File_KTP`, `File_Foto`, `noHP`) VALUES
(1, 'Adi Setiawan', '3512345678901234', 'Jakarta', '2017-05-15', 'Laki-laki', 'Islam', 2, 'Jl. Merdeka No. 123', 'Budi Hartono', 'Siti Rahayu', 'Jl. Merdeka No. 123', 'Wiraswasta', 'Ibu Rumah Tangga', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567890'),
(2, 'Siti Rahayu', '3512345678901235', 'Bandung', '2018-08-21', 'Perempuan', 'Hindu', 1, 'Jl. Raya No. 456', 'Dewa Putra', 'Ni Made Ayu', 'Jl. Raya No. 456', 'PNS', 'Guru', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567891'),
(3, 'Ahmad Yani', '3512345678901236', 'Surabaya', '2017-03-10', 'Laki-laki', 'Kristen', 3, 'Jl. Sudirman No. 789', 'Budi Santoso', 'Nurul Hidayah', 'Jl. Sudirman No. 789', 'Dokter', 'Ibu Rumah Tangga', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567892'),
(4, 'Dewi Lestari', '3512345678901237', 'Yogyakarta', '2018-12-05', 'Perempuan', 'Buddha', 2, 'Jl. Pahlawan No. 234', 'Agus Prabowo', 'Siti Aminah', 'Jl. Pahlawan No. 234', 'Pengusaha', 'Ibu Rumah Tangga', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567893'),
(5, 'Rudi Hartono', '3512345678901238', 'Semarang', '2017-07-17', 'Laki-laki', 'Islam', 1, 'Jl. Veteran No. 345', 'Joko Susilo', 'Sri Wulandari', 'Jl. Veteran No. 345', 'Guru', 'PNS', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567894'),
(6, 'Citra Dewi', '3512345678901239', 'Malang', '2018-04-20', 'Perempuan', 'Hindu', 3, 'Jl. Diponegoro No. 456', 'I Wayan Sudarsana', 'Ni Made Ari', 'Jl. Diponegoro No. 456', 'Wiraswasta', 'Ibu Rumah Tangga', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567895'),
(7, 'Fahmi Susanto', '3512345678901240', 'Medan', '2017-11-30', 'Laki-laki', 'Kristen', 2, 'Jl. A. Yani No. 567', 'Hendro Saputra', 'Dewi Anggraeni', 'Jl. A. Yani No. 567', 'Dokter', 'Ibu Rumah Tangga', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567896'),
(8, 'Diana Kusuma', '3512345678901241', 'Makassar', '2018-09-25', 'Perempuan', 'Islam', 1, 'Jl. Gatot Subroto No. 678', 'Andi Wijaya', 'Siti Fatimah', 'Jl. Gatot Subroto No. 678', 'Wiraswasta', 'Ibu Rumah Tangga', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567897'),
(9, 'Hendro Prasetyo', '3512345678901242', 'Pontianak', '2017-02-12', 'Laki-laki', 'Buddha', 4, 'Jl. Imam Bonjol No. 789', 'Arief Sutanto', 'Ni Luh Putu', 'Jl. Imam Bonjol No. 789', 'Pengusaha', 'Ibu Rumah Tangga', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567898'),
(10, 'Sari Indah', '3512345678901243', 'Balikpapan', '2018-06-08', 'Perempuan', 'Kristen', 2, 'Jl. Sudirman No. 890', 'Hendra Wijaya', 'Dewi Sartika', 'Jl. Sudirman No. 890', 'PNS', 'Guru', 'uploaded_files/KK - unnamed.jpg', 'uploaded_files/KTP - unnamed.jpg', 'uploaded_files/FOTO - unnamed.jpg', '081234567899');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `Nama_Lengkap` varchar(255) NOT NULL,
  `NIK` varchar(20) DEFAULT NULL,
  `Tempat_Lahir` varchar(100) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Agama` varchar(20) DEFAULT NULL,
  `Anak_ke` int(11) DEFAULT NULL,
  `Alamat_Peserta_Didik` varchar(255) DEFAULT NULL,
  `Ayah` varchar(100) DEFAULT NULL,
  `Ibu` varchar(100) DEFAULT NULL,
  `Alamat_Orang_Tua` varchar(255) DEFAULT NULL,
  `Pekerjaan_Ayah` varchar(50) DEFAULT NULL,
  `Pekerjaan_Ibu` varchar(50) DEFAULT NULL,
  `NIS` varchar(20) DEFAULT NULL,
  `NISN` varchar(20) DEFAULT NULL,
  `Tingkat_Rombel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `Nama_Lengkap`, `NIK`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Agama`, `Anak_ke`, `Alamat_Peserta_Didik`, `Ayah`, `Ibu`, `Alamat_Orang_Tua`, `Pekerjaan_Ayah`, `Pekerjaan_Ibu`, `NIS`, `NISN`, `Tingkat_Rombel`) VALUES
(3, 'Al Zaidan Faeyza', '3201010208170002', 'Bogor', '2017-08-02', 'Laki-Laki', 'Islam', 2, 'Lingkungan 03 Citatah RT 002/009', 'Herdi', 'Miftahul Janah', 'Lingkungan 03 Citatah RT 002/009', 'Wiraswasta', 'IRT', '402232010704230011', '123123', 'Kelompok B-UMAR BIN KHATTAB'),
(4, 'Anaya Putri Arrazzaq', '3201015609170002', 'Bogor', '2017-09-16', 'Perempuan', 'Islam', 1, 'Lingkungan 03 Citatah RT 003/009', 'Indra', 'Fina Triutami', 'Lingkungan 03 Citatah RT 003/009', 'Pegawai Swasta', 'IRT', '402232010704220001', '3179432326', 'Kelompok B-UMAR BIN KHATTAB'),
(5, 'Andini Wijayanti', '3301115001180002', 'Cilacap', '2018-01-10', 'Perempuan', 'Islam', 1, 'Dusun Wanadadi Rt. 005/001 Kel. Karanggedang Kec. Sidareja Kab. Cilacap, Jawa Tengah', 'Wagito', 'Artini', 'Dusun Wanadadi Rt. 005/001 Kel. Karanggedang Kec. Sidareja Kab. Cilacap, Jawa Tengah', 'Petani/Pekebun', 'IRT', '402232010704230012', NULL, 'Kelompok B-UMAR BIN KHATTAB'),
(6, 'Athallah Rifqi Pratama', '3326172703150005', 'Bogor', '2018-03-27', 'Laki-laki', 'Islam', 1, 'Lingkungan 03 Citatah RT 002/009', 'Mohammad Asbi', 'Bella Malphira Novriyanti', 'Lingkungan 03 Citatah RT 002/009', 'Pedagang', 'IRT', '402232010704220002', '3182701724', 'Kelompok B-UMAR BIN KHATTAB'),
(7, 'Cinta Nur Hasanah', '3201014507170002', 'Bogor', '2017-07-05', 'Perempuan', 'Islam', 2, 'Lingkungan 03 Citatah RT 002/009', 'Pepen Ependi', 'Indah Hayati', 'Lingkungan 03 Citatah RT 002/009', 'Karyawan Swasta', 'IRT', '402232010704230013', '3178963788', 'Kelompok B-UMAR BIN KHATTAB'),
(8, 'Hafidz Rizki Ramadhan', '3201010806170005', 'Bogor', '2017-06-08', 'Laki-laki', 'Islam', 2, 'Lingkungan 02 Citatah RT 001/005', 'Ayub Maulana', 'Dewi Purwati', 'Lingkungan 02 Citatah RT 001/005', 'Pegawai Swasta', 'IRT', '402232010704220005', '3176316505', 'Kelompok B-UMAR BIN KHATTAB'),
(9, 'Hasna Almira Arrayya', '3201016812170003', 'Bogor', '2017-12-28', 'Perempuan', 'Islam', 1, 'Lingkungan 03 Citatah RT 002/009', 'Abbizaid Munaris', 'Wiriyani Hesti', 'Lingkungan 03 Citatah RT 002/009', 'Wiraswasta', 'IRT', '402232010704220006', '3175695592', 'Kelompok B-UMAR BIN KHATTAB'),
(10, 'Kenzo Ghaisan Andaru', '3201010411170004', 'Bogor', '2017-11-04', 'Laki-laki', 'Islam', 2, 'Lingkungan 03 Citatah RT 002/009', 'Puji Hartono', 'Nuryanti', 'Lingkungan 03 Citatah RT 002/009', 'Pegawai Swasta', 'Sudah Meninggal', '402232010704220007', '3179862520', 'Kelompok B-UMAR BIN KHATTAB'),
(11, 'Muhammad Arkan Syauqi Hibatullah', '3202182909170001', 'Sukabumi', '2017-09-24', 'Laki-laki', 'Islam', 1, 'Kp. Bojonggintung Rt. 022/008 Kel. Pulosari Kec. Kalapa Nunggal, Kab. Sukabumi', 'Ahmad Rifai', 'Leni', 'Kp. Bojonggintung Rt. 022/008 Kel. Pulosari Kec. Kalapa Nunggal, Kab. Sukabumi', 'Guru', 'IRT', '402232010704230014', NULL, 'Kelompok B-UMAR BIN KHATTAB'),
(12, 'Muhammad Azka Fauzan Rasyha', '3201012508170011', 'Bogor', '2017-08-25', 'Laki-laki', 'Islam', 3, 'Lingkungan 03 Citatah RT 002/009', 'Undang Gunawan', 'Eti Nurbaeti', 'Lingkungan 03 Citatah RT 002/009', 'Pedagang', 'IRT', '402232010704230015', NULL, 'Kelompok B-UMAR BIN KHATTAB'),
(13, 'Muhammad Azka Rafassya', '3201011502180002', NULL, '2018-02-15', 'Laki-laki', 'Islam', 1, 'Lingkungan 03 Citatah RT 002/009', 'Muhammad Soleh', 'Hanifa', 'Lingkungan 03 Citatah RT 002/009', 'Wiraswasta', 'Wiraswasta', '402232010704220008', '3187943810', 'Kelompok B-UMAR BIN KHATTAB'),
(14, 'Muhammad Faisal', '3201010902110004', 'Bogor', '2018-02-26', 'Laki-laki', 'Islam', 3, 'Lingkungan 03 Citatah RT 003/009', 'Mohamad Amin', 'Rusianti', 'Lingkungan 03 Citatah RT 003/009', 'Karyawan Swasta', 'IRT', '402232010704230016', '3186954507', 'Kelompok B-UMAR BIN KHATTAB'),
(15, 'Muhammad Khadafi Haidar', '3201011307170008', 'Bogor', '2017-07-13', 'Laki-laki', 'Islam', 2, 'Lingkungan 03 Citatah RT 003/009', 'Asep Sukatma', 'Nuryanti', 'Lingkungan 03 Citatah RT 003/009', 'Karyawan Swasta', 'IRT', '402232010704230017', NULL, 'Kelompok B-UMAR BIN KHATTAB'),
(16, 'Nur Inayah Nadhifah', '3201014905170001', NULL, '2017-05-09', 'Perempuan', 'Islam', 2, 'Lingkungan 03 Citatah RT 003/009', 'Muhlis', 'Tia Sutia Ningsih', 'Lingkungan 03 Citatah RT 003/009', 'Pegawai Swasta', 'IRT', '402232010704220009', '3179707098', 'Kelompok B-UMAR BIN KHATTAB'),
(17, 'Nurull Syifa Agustina', '3201014308170003', 'Depok', '2017-08-03', 'Perempuan', 'Islam', 5, 'Lingkungan 03 Citatah RT 004/009', 'Sukiman', 'Sukiyem', 'Lingkungan 03 Citatah RT 004/009', 'Wiraswasta', 'IRT', '402232010704230018', NULL, 'Kelompok B-UMAR BIN KHATTAB'),
(18, 'Raffa Septiansyah', '3201011809170005', 'Bekasi', '2017-09-18', 'Laki-laki', 'Islam', 1, 'Lingkungan 02 Citatah RT 001/005', 'Prasetiyo Andriansyah', 'Desi Ratnasari', 'Lingkungan 02 Citatah RT 001/005', 'Karyawan Swasta', 'Karyawan Honorer', '402232010704230019', NULL, 'Kelompok B-UMAR BIN KHATTAB'),
(19, 'Rajiyyah Liwalidayha', '3201015008190008', NULL, '2017-11-27', 'Perempuan', 'Islam', 1, 'Lingkungan 03 Citatah RT 002/009', 'Muhamad Condro', 'Tiyana', 'Lingkungan 03 Citatah RT 002/009', 'Wiraswasta', 'IRT', '402232010704220010', '3172290428', 'Kelompok B-UMAR BIN KHATTAB'),
(20, 'Salsabila Az-Zahra', '3201016505170006', 'Bogor', '2017-05-25', 'Perempuan', 'Islam', 2, 'Lingkungan 03 Citatah RT 003/009', 'Wahyudin', 'Fitri Ariyanita', 'Lingkungan 03 Citatah RT 003/009', 'Karyawan Swasta', 'IRT', '402232010704230020', NULL, 'Kelompok B-UMAR BIN KHATTAB'),
(21, 'Savira Adelia Putri', '3201014101180002', 'Bogor', '2018-01-01', 'Perempuan', 'Islam', 1, 'Lingkungan 02 Citatah RT 001/005', 'Ramdhan Priyadi', 'Devi Lutfiyani', 'Lingkungan 02 Citatah RT 001/005', 'Karyawan Swasta', 'Karyawan Swasta', '402232010704230021', NULL, 'Kelompok B-UMAR BIN KHATTAB');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '$2y$10$bk.9yZFokQIql0FlLCmraOyDZERDleaz2bdMxUeRr2e9FTMM0Sixi'),
(2, 'Ummu Athiya', 'ummu', '$2y$10$fnn0zRGNMGNyBfppziU5lOa.rpU0GKEXu2BmwPkZfowHj/dw2kDBy'),
(3, 'Hilmiyatul Asna', 'hilmi', '$2y$10$n/NqnchKoK69aDEBoFr2cuXDTfq0IAd47L//2sKaFark72soZR3m6'),
(4, 'Rayhan Safar', 'rayhan', '$2y$10$r.Qg6kbKIDrjDfvpLkhIOuJHjmGwyzXUdclkYRVQ2VdQ5Qv3ywf9a'),
(5, 'admin1', 'admin1', '$2y$10$rn2AzQq2Ik6lkIMte3n5UeB4TQhn8g.JMXBOIka97fNXGs21l.iJK'),
(6, 'admin2', 'admin2', '$2y$10$L50XLfEJAb6E7FuTg5gSquRm87gTiOd8rOq.wy4tEVsy7wSzzUpei'),
(7, 'admin3', 'admin3', '$2y$10$BtC9nHkZrher3O3gac0kP.EaHn8Sbw8qCM7xulXZHjUaxXLE6RqXq'),
(8, 'admin4', 'admin4', '$2y$10$sX8bZ5pmBLNWhjbeR6GHreQ8qdORMGFA9PVRr/kwuyo3t/.wHiDLS'),
(9, 'admin5', 'admin5', '$2y$10$eL99OzcqvaG1ZDAA/zdHF.w6b2NtgynYdHazqifufmcLq2rsdpS6i'),
(10, 'admin6', 'admin6', '$2y$10$oXvK82jquJfEKDjIerJRzetyaAv1uS4ddI/oYaCMpnDx0Ln7SvnhG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
