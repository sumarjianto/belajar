-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 01:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `create_time` date NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `deskripsi`, `create_time`, `user_id`) VALUES
(1, '6 Caketum PSSI Tarik Diri dari KLB 2019', '2.jpg', 'Sebanyak enam Calon Ketua Umum (Caketum) PSSI keluar dari ballroom Hotel Shangri-La di tengah berlangsungnya Kongres Luar Biasa (KLB). Keenam Caketum itu keluar setelah mendapatkan peringatan dari Sekretaris Jenderal (Sekjen) PSSI, Ratu Tisha Destria.\r\n\r\nPara Caketum yang keluar itu adalah Fary Djemy Francis, Vijaya Fitriyasa, Yesayas Octavianus, Aven Hinelo, Benny Erwin dan Sarman El-Hakim. Menurut Vijaya, kejadian berawal dari Fary yang mengajukan interupsi di tengah kongres.', '2019-11-02', 1),
(3, 'Valverde: Griezmann Wajib Penuhi Harapan jika Ingin Main Reguler', '1.jpg', 'Pelatih Barcelona, Ernesto Valverde, memberi syarat kepada Antoine Griezmann jika ingin bermain secara reguler di tim. Ia menuntut pemain anyarnya tersebut untuk terus memberikan penampilan yang sesuai dengan harapan tim jika ingin bermain secara teratur di Barcelona.\r\n\r\nGriezmann yang direkrut Barcelona pada bursa transfer musim panas 2019 dengan penuh drama itu memang masih kesulitan untuk bermain secara teratur. Sejauh ini, ia tercatat telah tampil di 12 pertandingan bersama Barcelona musim ini dengan membukukan empat gol dan tiga assist.', '2019-11-02', 2),
(7, 'Fresh Graduate- IT Engineer', 'Screenshot_14.jpg', 'dsadad', '2019-11-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `role`) VALUES
(1, 'sumar', 'sumar@gmail.co', 'admin'),
(2, 'marko', 'marko@gmail.co', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
