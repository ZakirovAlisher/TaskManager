-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 11:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `username`, `content`, `email`, `status`) VALUES
(1, '1', '3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg   3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad asd asd asd asd   fgsfgsfg 3 345cvjghj34xhfghfgh5 fyt dhggawd4t64545awdawdfh    sad dfgfdgdfgdfg  123123      sdfsdfsdf fgjfgj ', '2', 1),
(2, '4', '6 345345 dghgfh  asdas das das   asdasdasd  фывфывфыв', '5', 1),
(3, '7', '9 23423424 435345 sadasdsad 3453 34545', '8', 1),
(4, 'asd', 'as asdasd asasdasd asdasd', 'a', 1),
(5, '1', '<div class=\"card\"> ААААААА</div>  sdfsd', '1', 0),
(6, '123', 'ZZZZZZ  asfasasd sf', 'admin@admin.ru', 0),
(7, 'aaaaa', 'aaaa wad', 'aaa@ad', 0),
(8, 'zz', 'zz  adsasdadasd  asdasdasd sfsdf 123', 'zz@zz', 0),
(9, 'az', 'az', 'az@az', 0),
(10, 'asd', 'asd', 'a123@123', 1),
(11, '<div class=\"card\"> ААААААА</div>', '<div class=\"card\"> ААААААА</div>', 'd.@adwad', 1),
(12, 'f', 'f', 'admin@admin', 0),
(13, 'f', 'fd', '123@mail.ru', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
