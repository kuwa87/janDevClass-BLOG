-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2019 at 09:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catID` int(11) NOT NULL,
  `catName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catID`, `catName`) VALUES
(2, 'test2'),
(3, 'catname3'),
(4, 'catname4'),
(5, 'catname5'),
(6, 'catname6'),
(7, 'catname7'),
(8, 'catname8'),
(9, 'catname9'),
(10, 'catname10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginID`, `email`, `password`) VALUES
(11, 'SNOOPY', 'SNOOPY'),
(13, 'Kitty', 'Kitty'),
(14, 'snowman', 'snowman'),
(18, 'Woodstock', 'Woodstock'),
(19, 'BLOWN', 'BLOWN'),
(20, 'LUCY', 'LUCY'),
(26, 'LINUS', 'LINUS'),
(31, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(20) NOT NULL,
  `postDate` date NOT NULL,
  `postDetails` varchar(100) NOT NULL,
  `catID` int(11) NOT NULL,
  `loginID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `postTitle`, `postDate`, `postDetails`, `catID`, `loginID`) VALUES
(3, 'Post3', '2019-01-22', 'testaaaaa7878jjj', 3, 14),
(4, 'Post4', '2019-01-22', 'detailsdetails', 4, 14),
(5, 'Post5', '2019-01-22', 'detailsdetails', 5, 14),
(6, 'Post6', '2019-01-22', 'detailsdetails', 6, 14),
(7, 'Post7', '2019-01-22', 'detailsdetails', 7, 13),
(8, 'ssssssss', '2019-01-24', 'wwwww', 2, 11),
(9, 'SNOOPY TEST', '2019-01-24', 'SNOOPY TEST', 2, 11),
(10, 'TEST POST', '2019-01-24', 'TEST POST', 3, 11),
(11, 'SNOOPY\'s TEST', '2019-01-24', 'SNOOPY\'s TEST', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `loginID` int(11) NOT NULL,
  `dateReg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `bio`, `loginID`, `dateReg`) VALUES
(1, 'SNOOPY', 'SNOOPY', 11, '2019-01-21'),
(3, 'Kitty', 'Kitty', 13, '2019-01-21'),
(4, 'snowman', 'snowman', 14, '2019-01-21'),
(8, 'Woodstock', 'Woodstock', 18, '2019-01-24'),
(9, 'BLOWN', 'BLOWN', 19, '2019-01-25'),
(10, 'LUCY', 'LUCY', 20, '2019-01-25'),
(16, 'LINUS', 'LINUS', 26, '2019-01-25'),
(21, '', '', 31, '2019-01-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
