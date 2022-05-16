-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 05:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zada`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', '$2y$10$x58iJgc7BIwzL5ZrHbc/LuUoIUaC4cvOOWBcIVgt8HDYl5BY0Ft7K'),
(2, 'admin1', '$2y$10$aaCp0uX/LqQJQ/mSZm5uhOnK4sWLu4D4R8DWViRq2qoFrKGystLei'),
(3, 'admin2', '$2y$10$mos7sXtE.sHLr9SAag5sZejf9kVNxp2kqq3/4vaTCmQqJxHkjaoDq');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`no`, `name`, `content`) VALUES
(1, 'jumbotron', 'ITS TIME FOR SHOPPING'),
(2, 'keunggulan', 'M Batik Memberikan Baju Dengan Motif Batik Dengan Bahan Yang Berkualitas . M Batik Dapat Didapatkan Melalui Online Shop Sehingga Anda Dapat Order Produk Dari M Batik Dengan Praktis . Dengan Harga Yang Terjangkau Anda Bisa Mendapatkan Baju Batik Dengan Kualitas.'),
(3, 'tentang_kami', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `link_facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `alamat`, `email`, `whatsapp`, `link_facebook`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer_backup`
--

CREATE TABLE `footer_backup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_backup`
--

INSERT INTO `footer_backup` (`id`, `name`, `content`) VALUES
(1, 'alamat', 'Jl.Nitikan No 255 Yogyakarta Indonesia'),
(2, 'email', 'zadaxofficial@gmail.com'),
(3, 'whatsapp', '0895379132634');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`) VALUES
(1, 'gallery1', '3_yaa2.PNG'),
(2, 'gallery2', '3_yaa.PNG'),
(3, 'gallery3', '1_yaa5.PNG'),
(4, 'gallery4', 'kjsbcjks ');

-- --------------------------------------------------------

--
-- Table structure for table `jumbotron`
--

CREATE TABLE `jumbotron` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jumbotron_top` varchar(255) NOT NULL,
  `jumbotron_bottom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumbotron`
--

INSERT INTO `jumbotron` (`id`, `name`, `jumbotron_top`, `jumbotron_bottom`, `logo`) VALUES
(1, 'jumbotron', 'Pick The Best Clothesssss', 'ITS TIME FOR SHOPPING', 'Mbatik-removebg-preview2.png');

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan`
--

CREATE TABLE `keunggulan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keunggulan`
--

INSERT INTO `keunggulan` (`id`, `name`, `content`) VALUES
(2, 'keunggulan', 'kkkkkkkkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `name`, `logo`) VALUES
(1, 'logo', 'Mbatik-removebg-preview3.png');

-- --------------------------------------------------------

--
-- Table structure for table `top_produk`
--

CREATE TABLE `top_produk` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_produk`
--

INSERT INTO `top_produk` (`id`, `title`, `description`, `img`) VALUES
(1, '', 'jhguhg', '5_yaa2.PNG'),
(2, 'produk2', 'loremmmmm', '4_yaa.PNG'),
(3, 'produk3', 'loremmmmmmmm ipsumm', '4_yaa1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_backup`
--
ALTER TABLE `footer_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumbotron`
--
ALTER TABLE `jumbotron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keunggulan`
--
ALTER TABLE `keunggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_produk`
--
ALTER TABLE `top_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_backup`
--
ALTER TABLE `footer_backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jumbotron`
--
ALTER TABLE `jumbotron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keunggulan`
--
ALTER TABLE `keunggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `top_produk`
--
ALTER TABLE `top_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
