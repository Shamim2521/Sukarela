-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345'),
('admin@sukarela.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `e_name` varchar(30) NOT NULL,
  `dat` date NOT NULL,
  `tim` time(6) NOT NULL,
  `c-name` varchar(20) NOT NULL,
  `e_poster` varchar(100) NOT NULL,
  `n_volunteer` int(4) NOT NULL,
  `description` text NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`e_name`, `dat`, `tim`, `c-name`, `e_poster`, `n_volunteer`, `description`, `id`) VALUES
('Sukarela', '2020-03-31', '16:00:00.000000', 'asda', 'vol1.jpg', 5, 'sdaf asdf aw sadf', 1),
('Jantika', '2020-04-08', '16:00:00.000000', 'fasde', 'vol2.jpg', 6, 'sadf aewr df asfe4a asdfawe adfasf weasdfasdf awedsfas fe asdfawea sefadsfawe', 2),
('Intel ', '2020-03-31', '17:00:00.000000', '', 'vol3.jpg', 3, 'asdf asdfawe sdf ae hghfgh h iysdsfg s dfgsdf gdfg sdfg dfsg sdf gsdf gfd', 3),
('Sdfwaf Sdfer', '2020-03-29', '11:00:00.000000', '', 'vol4.jpg', 3, 'asd fasf we esdf ase asdfsfa er twer sadfsadf asdf sdafasdfsadfweaf sdf asdf s', 4),
('asdf sdfer', '2020-05-05', '10:00:00.000000', 'sdf sdfwera dsaf', 'vol6.jpg', 5, 'dsf awe wer asdfer sdaf', 5),
('Makan Ikan Bekar', '2020-04-05', '10:00:00.000000', 'Ikan Bekar', 'vol5.jpg', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6),
('Makan Ikan Bekar', '2020-04-05', '10:00:00.000000', 'Ikan Bekar', 'vol7.jpg', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 7),
('Mr. Idiot', '2020-12-10', '10:00:00.000000', 'sdaf asdf as', 'vol8.jpg', 5, 'ad fvadfdc', 8),
('Mr. Idiot', '2020-12-10', '10:00:00.000000', 'sdaf asdf as', 'vol9.jpg', 5, 'ad fvadfdc', 9),
('Mr. Idiot', '2020-12-10', '10:00:00.000000', 'sdaf asdf as', 'vol10.jpg', 5, 'ad fvadfdc', 10),
('We Run KL', '2020-04-20', '10:00:00.000000', 'KL Runner', 'vol11.jpg', 20, 'ds fas fawe sdfa sf d', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `filename` varchar(100) NOT NULL,
  `dat` date DEFAULT NULL,
  `time` time(6) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `volunteerno` int(5) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`filename`, `dat`, `time`, `ename`, `volunteerno`, `description`) VALUES
('testuser', NULL, '00:00:00.000000', '0', 0, ''),
('facebook.jpg', NULL, '00:00:00.000000', '0', 0, ''),
('facebook.jpg', NULL, '00:00:00.000000', '0', 0, ''),
('facebook.jpg', NULL, '00:00:00.000000', '0', 0, ''),
('facebook.png', NULL, '00:00:00.000000', '0', 0, ''),
('instagram-1.png', '0000-00-00', '00:00:00.000000', '0', 0, ''),
('instagram-1.png', '2023-04-04', '00:00:00.000000', '0', 0, ''),
('Twitter.png', '2021-06-10', '10:00:00.000000', '0', 0, ''),
('Twitter-Logo.png', '2020-01-04', '01:00:00.000000', '0', 0, ''),
('Twitter.png', '2020-01-02', '05:00:00.000000', '0', 0, ''),
('', NULL, '00:00:00.000000', '', 2, ''),
('facebook.jpg', '2020-03-02', '10:01:00.000000', '', 0, ''),
('facebook.jpg', NULL, '02:00:00.000000', '', 5, ''),
('facebook.png', NULL, '04:00:00.000000', '', 0, 'sdf sdf asfdwe'),
('instagram-1.png', '2020-03-18', '04:04:00.000000', 'asdf asd', 5, 'sdf asdf aewr'),
('1', '2020-02-03', '03:02:00.000000', 'fasdf dsaf', 4, 'hj ggg kjhkj h ');

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`id`, `user_name`, `user_email`, `user_message`) VALUES
(1, 'asif', 'asdf@gmail.com', 'asdflja'),
(2, 'asif', 'clippingpix2020@gmail.com', 'i AM A GOOD BOY'),
(4, 'asif', 'asifmujtoba@gmail.com', 'asdfasdf'),
(8, 'Clipping', 'clippingpix2020@gmail.com', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `email`, `address`, `qualification`, `rate`) VALUES
('Asif Mujtoba Newaz', 'asifmujtoba@gmail.com', 'Mahallah Uthman', '', 0),
('Arian Rahman', 'arianrahman@gmail.com', 'Mahallah Siddik', '', 0),
('Asif Mujtoba Newaz', 'asifmujtoba@gmail.com', 'Mahallah Uthman', 'Web development', 0),
('Shamim', 'shamim@gmail.com', 'Mahallah Uthman', 'sadfasd fsdf asdf sadfwef sadfwerfggfd grhrhr hfhapojre rogpndvd oigheind idogenvj gjg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
