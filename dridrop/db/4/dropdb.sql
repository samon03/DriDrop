-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 04:17 PM
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
(20, 'emon@gmail.com', 'Samsun_Nahar.pdf', '2019-10-08 13:58:09'),
(22, 'emon@gmail.com', 'upload.txt', '2019-10-08 13:58:56'),
(23, 'emon@gmail.com', 'page3.docx', '2019-10-17 14:02:52'),
(25, 'samon@gmail.com', 'Samsun_Nahar.pdf', '2019-10-25 13:00:45'),
(26, 'emon@gmail.com', 'add.php', '2019-10-26 12:51:26'),
(27, 'shiliya@gmail.com', 'harry_potter_scatch.png', '2019-10-27 15:11:38');

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
(21, 'emon@gmail.com', 'xw', 'page3.docx', '2019-10-17 19:48:57'),
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
(36, 'samon@gmail.com', 'Cola', '', '2019-10-25 13:34:10'),
(37, 'samon@gmail.com', 'Cola', '12.jpg', '2019-10-25 13:46:36'),
(38, 'emon@gmail.com', 'Dream', '', '2019-10-26 12:51:39'),
(39, 'emon@gmail.com', 'Dream', 'w3layouts-License.txt', '2019-10-26 12:55:16'),
(40, 'emon@gmail.com', 'new', 'signup.html', '2019-10-26 12:59:03'),
(41, 'emon@gmail.com', 'new', 'upload_file.php', '2019-10-26 12:59:38'),
(42, 'emon@gmail.com', 'Dream', 'Daily Planning.xlsx', '2019-10-27 15:09:30'),
(43, 'shiliya@gmail.com', 'Sort', '', '2019-10-27 15:11:23'),
(44, 'shiliya@gmail.com', 'Sort', 'Daily Planning.xlsx', '2019-10-27 15:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Pid` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Msg` text NOT NULL,
  `Ptime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Pid`, `Email`, `Title`, `Msg`, `Ptime`) VALUES
(1, 'samon@gmail.com', 'Is there anyone who have a upload php file?   ', 'Uploading in \"uplaods\" folder\r\nmove_uploaded_file($file[\"tmp_name\"], \"uploads/\" . $fname);', '2019-10-25 14:10:39'),
(2, 'emon@gmail.com', 'Images Rotating', 'On my website there is a file field that will allow the users to upload their profile picture.\r\nIt gets uploaded using JQuery and it gets saved using PHP.\r\nThe rotation is not even consistent, it could be 90% 180% or 270%, this happens when taking a image or selecting from the Gallery.\r\n\r\nWhy would this happen? and is there a possible fix?', '2019-10-25 14:55:40'),
(3, 'emon@gmail.com', 'How to open (View) a file in PHP', 'I want it to automatically open, so that the user can view it. Is that possible in PHP? If so, then How? Below is the part that opens the file and writes to it. I am missing the file view part. Thank you.', '2019-10-25 15:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `Pid` int(11) NOT NULL,
  `Uemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`Pid`, `Uemail`) VALUES
(1, 'emon@gmail.com'),
(2, 'samon@gmail.com'),
(3, 'shiliya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sharewith`
--

CREATE TABLE `sharewith` (
  `Id` int(11) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sharewith`
--

INSERT INTO `sharewith` (`Id`, `Sender`, `link`, `Receiver`, `Pid`, `Date`, `Status`) VALUES
(2, 'emon@gmail.com', 'ho.doc', 'samon@gmail.com', 2, '2019-10-26 12:38:59', 0),
(3, 'emon@gmail.com', 'so.doc', 'samon@gmail.com', 1, '2019-10-26 12:40:03', 0),
(4, 'emon@gmail.com', 'llo.doc', 'samon@gmail.com', 2, '2019-10-26 12:40:03', 0),
(6, 'samon@gmail.com', 'page3.docx', 'emon@gmail.com', 3, '2019-10-27 15:02:06', 1),
(8, 'shiliya@gmail.com', 'harry_potter_scatch.png', 'emon@gmail.com', 3, '2019-10-27 15:12:50', 1);

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
('Samon', 'samon@gmail.com', '290742245fd5af2a92c80a0da0899871'),
('Shiliya Samon', 'shiliya@gmail.com', '318fdf2e8629478551220e83d11038fd');

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
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `sharewith`
--
ALTER TABLE `sharewith`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filelist`
--
ALTER TABLE `filelist`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `folderlist`
--
ALTER TABLE `folderlist`
  MODIFY `FoIder_ld` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sharewith`
--
ALTER TABLE `sharewith`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
