-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 10:40 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultanalysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `stud_id`, `sub_id`, `mark`) VALUES
(9, 6, 3, 32),
(10, 6, 4, 23),
(11, 6, 5, 23),
(12, 6, 6, 45),
(13, 10, 3, 43),
(14, 10, 4, 34),
(15, 10, 5, 23),
(16, 10, 6, 23),
(75, 14, 3, 44),
(76, 14, 4, 56),
(77, 14, 5, 67),
(78, 14, 6, 89),
(79, 14, 7, 66),
(80, 14, 8, 90),
(81, 14, 9, 34),
(82, 8, 3, 32),
(83, 8, 4, 23),
(84, 8, 5, 88),
(85, 8, 6, 34),
(86, 8, 7, 34),
(87, 8, 8, 45),
(88, 8, 9, 55),
(120, 7, 3, 45),
(121, 7, 4, 54),
(122, 7, 5, 65),
(123, 7, 6, 76),
(124, 7, 7, 87),
(125, 7, 12, 98),
(126, 7, 13, 89),
(141, 5, 3, 88),
(142, 5, 4, 56),
(143, 5, 5, 65),
(144, 5, 6, 65),
(145, 5, 7, 45),
(146, 5, 12, 45),
(147, 5, 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `name` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `image`, `name`, `city`) VALUES
(5, 'upload/39878897_1140828442731055_3253720352747945984_n.jpg', 'pankaj ghodke', 'gargoti'),
(7, 'upload/', 'parshuram', 'kop'),
(8, '', 'akshay', 'hupri'),
(9, '', 'sdass', 'sad'),
(10, '', 'aniket', 'Kolhapur'),
(11, '', 'pratik', 'sdwqe'),
(12, 'upload/', 'milind', 'ffrtg5t'),
(13, 'upload/', 'dawd', 'qwed'),
(14, 'upload/', 'shubham', 'sdad'),
(15, 'upload/', 'aaaa', 'ghjg'),
(17, 'upload/', 'zczxasd', 'zxc vnbn');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` int(11) NOT NULL,
  `min_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `marks`, `min_marks`) VALUES
(3, 'java', 95, 40),
(4, 'php', 0, 0),
(5, 'Python', 0, 0),
(6, 'angular', 0, 0),
(7, 'bio', 0, 0),
(12, 'c#', 0, 0),
(13, 'swift', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
