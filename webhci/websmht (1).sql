-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 07:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websmht`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id` int(11) NOT NULL,
  `id_favorit` int(11) NOT NULL,
  `katafavorit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id`, `id_favorit`, `katafavorit`) VALUES
(3, 1, 'DarkJoke');

-- --------------------------------------------------------

--
-- Table structure for table `kontributor`
--

CREATE TABLE `kontributor` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `new_term` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontributor`
--

INSERT INTO `kontributor` (`id`, `email`, `new_term`) VALUES
(1, 'andiraazzahra19@gmail.com', 'hau'),
(2, 'andiraazzahra19@gmail.com', 'hayusemangatt'),
(3, 'marvel_nich@yahoo.co.id', 'TES'),
(4, 'andiraazzahra19@gmail.com', 'hayusemangatt');

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id` int(11) NOT NULL,
  `kritiksaran` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kritiksaran`
--

INSERT INTO `kritiksaran` (`id`, `kritiksaran`) VALUES
(1, 'ini contoh ajasih hehe'),
(2, 'kedua kali nyoba'),
(3, 'ayoo semangatt!! fighting!!'),
(4, 'halo mau nyoba lagi'),
(5, 'ini yang login'),
(6, 'cobalagi'),
(7, 'yeyy bisa');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(11) NOT NULL,
  `kesatu` varchar(100) NOT NULL,
  `kedua` varchar(100) NOT NULL,
  `ketiga` varchar(100) NOT NULL,
  `keempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `kesatu`, `kedua`, `ketiga`, `keempat`) VALUES
(1, 'SP', 'TD', 'TP1', 'SS'),
(2, 'CP', 'TD', 'CP1', 'TS'),
(3, 'P', 'MD', 'SP1', 'TS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `image`, `role_id`, `date_created`) VALUES
(1, 'andiraazzahra19@gmail.com', '$2y$10$pgVE9fGxKNkkxgRg1CMjOOkCfWNrwNytyhRhDKxCIoai7nvWPH6xq', 'default.jpg', 2, 1608650609),
(2, 'azzahra.andira25@yahoo.com', '$2y$10$rymanY366a7/.MLSlHJ2CeqoRoNGL87rkUz6ssONbpcJKxkSZgm46', 'default.jpg', 2, 1608651055),
(3, 'marvel_nich@yahoo.co.id', '$2y$10$ptSgd0Kzqry3vMngNiKTl.PaGH1oKeg/kOUGQW2oJFhgtLhODXxLm', 'default.jpg', 2, 1608651232),
(4, 'azzahra.andira20@yahoo.com', '$2y$10$buFll7fAWwOa1iK6n/gYM.AtlzYmbFfRAPda.58xpgb1vtQgAkYNO', 'default.jpg', 2, 1608651296),
(5, 'halo', '$2y$10$1T5P1m0GoPai//z1eAylg.LE9T5oDH8W8fO/PeIamZpEAqrZ8mBIK', 'default.jpg', 2, 1608710363),
(6, 'ndajnd', '$2y$10$dEjH7TGZn0i5u.g8LASnJu.TZmaz6uPCYalrIdyawK7hJrVYYKWvi', 'default.jpg', 2, 1608710631),
(7, 'sisil', '$2y$10$ffaB5MQXLGJcaC1QtPS0KeA7qRBGEHTXEZr6jgN8Ayrl2CcHVUoV.', 'default.jpg', 2, 1608723865),
(8, 'azzahra.andira25@yahoo.co.id', '$2y$10$MQL/qBuX0ST0FpgVN2uKkOyqdpgRLFutVQEc48s2izXnHxog1TigC', 'default.jpg', 2, 1609133579);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id_favorit`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kontributor`
--
ALTER TABLE `kontributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id_favorit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontributor`
--
ALTER TABLE `kontributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
