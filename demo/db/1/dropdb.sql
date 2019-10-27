-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 03:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `filelist`
--

CREATE TABLE `filelist` (
  `Fid` int(11) NOT NULL,
  `File_Mail` varchar(255) NOT NULL,
  `File_name` varchar(255) NOT NULL,
  `File_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filelist`
--

INSERT INTO `filelist` (`Fid`, `File_Mail`, `File_name`, `File_Time`) VALUES
(1, 'emon@gmail.com', 'cover_letter.txt', '2019-10-08 13:45:43'),
(11, 'emon@gmail.com', 'cir1.docx', '2019-10-08 13:45:49'),
(20, 'emon@gmail.com', 'Samsun_Nahar.pdf', '2019-10-08 13:58:09'),
(22, 'emon@gmail.com', 'upload.txt', '2019-10-08 13:58:56'),
(23, 'emon@gmail.com', 'page3.docx', '2019-10-17 14:02:52'),
(24, 'emon@gmail.com', 'Samsun_Nahar.pdf', '2019-10-17 19:47:29'),
(25, 'samon@gmail.com', 'Samsun_Nahar.pdf', '2019-10-25 13:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `folderlist`
--

CREATE TABLE `folderlist` (
  `FoIder_ld` int(11) NOT NULL,
  `Fold_Mail` varchar(255) NOT NULL,
  `Folder_name` varchar(150) NOT NULL,
  `File_folder` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folderlist`
--

INSERT INTO `folderlist` (`FoIder_ld`, `Fold_Mail`, `Folder_name`, `File_folder`, `Time`) VALUES
(1, 'emon@gmail.com', 'xw', '1.txt', '2019-10-08 12:06:03'),
(2, 'emon@gmail.com', 'new', '2.txt', '2019-10-08 13:46:11'),
(6, 'emon@gmail.com', 'new', 'user.sql', '2019-10-08 13:46:06'),
(9, 'emon@gmail.com', 'xw', 'cover_letter (1).txt', '2019-10-08 12:45:39'),
(15, 'emon@gmail.com', 'food', '', '2019-10-08 13:55:46'),
(16, 'emon@gmail.com', 'Potter', '', '2019-10-08 13:56:28'),
(21, 'emon@gmail.com', 'xw', 'page3.docx', '2019-10-17 19:48:57'),
(22, 'emon@gmail.com', 'Hero', '', '2019-10-17 19:49:37'),
(23, 'samon@gmail.com', 'shop', '', '2019-10-25 12:59:53'),
(24, 'samon@gmail.com', 'shop', 'page3.docx', '2019-10-25 13:00:26'),
(25, 'samon@gmail.com', 'shop', 'cover_letter.txt', '2019-10-25 13:01:06'),
(29, 'samon@gmail.com', 'shop', 'add.php', '2019-10-25 13:17:56'),
(30, 'samon@gmail.com', 'shop', 'style.css', '2019-10-25 13:23:51'),
(31, 'samon@gmail.com', 'shop', 'hover.css', '2019-10-25 13:24:43'),
(32, 'samon@gmail.com', 'shop', 'examples.css', '2019-10-25 13:25:10'),
(33, 'samon@gmail.com', 'shop', 'bootstrap.css', '2019-10-25 13:26:07'),
(34, 'samon@gmail.com', 'Kitty', '', '2019-10-25 13:30:48'),
(35, 'samon@gmail.com', 'Kitty', 'geochart.css', '2019-10-25 13:31:06'),
(36, 'samon@gmail.com', 'Cola', '', '2019-10-25 13:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Email` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Msg` text NOT NULL,
  `Ptime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `uemail`, `upassword`) VALUES
('Emon', 'emon@gmail.com', 'b8cc4edba5145d41f9da01d85f459aef'),
('X', 'x@gmail.com', 'xxx'),
('Samon', 'samon@gmail.com', '290742245fd5af2a92c80a0da0899871');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filelist`
--
ALTER TABLE `filelist`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `folderlist`
--
ALTER TABLE `folderlist`
  ADD PRIMARY KEY (`FoIder_ld`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filelist`
--
ALTER TABLE `filelist`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `folderlist`
--
ALTER TABLE `folderlist`
  MODIFY `FoIder_ld` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
