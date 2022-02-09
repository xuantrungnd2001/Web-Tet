-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 04:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `message_content`
--

CREATE TABLE `message_content` (
  `id_content` int(11) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `sender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_content`
--

INSERT INTO `message_content` (`id_content`, `content`, `sender`) VALUES
(2, 'onion', 'chingchongdingdong '),
(18, 'i òiíđìýydsdù  ýdfýdfsdfýtfyuzu  dsftsdfí dsdfý ỳdsdfídfy sdfýdtf sdfkjsdkfsdfyúdf ýdftsdf stdft sdyu s', 'noone'),
(19, 'i òiíđìýydsdù  ýdfýdfsdfýtfyuzu  dsftsdfí dsdfý ỳdsdfídfy sdfýdtf sdfkjsdkfsdfyúdf ýdftsdf stdft sdyu s', 'noone'),
(22, 'dsfsdf\r\ns\r\ndf\r\nsdfs\r\ndf\r\nsd\r\nfs\r\ndf\r\ns\r\nfds', 'green'),
(23, 'dfsdsd\r\nsd\r\nf\r\nsdf\r\ns\r\ndf\r\nsd\r\nfs\r\ndf\r\nsd', 'green');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_content`
--
ALTER TABLE `message_content`
  ADD PRIMARY KEY (`id_content`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_content`
--
ALTER TABLE `message_content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
