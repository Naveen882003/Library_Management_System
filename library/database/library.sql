-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 05:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_count` int(11) NOT NULL,
  `book_reserved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`book_id`, `book_name`, `book_author`, `book_count`, `book_reserved`) VALUES
(1, 'Data Structures and algorithm in C Volume 2', 'Boopesh', 8, 0),
(2, 'Object Orieneted Programming in Java ', 'Harshavardhan ', 13, 0),
(3, 'Computer Networks', 'Jaisurya', 7, 0),
(4, 'Theory of Computation', 'Selvi', 5, 0),
(5, 'Compiler Design', 'Kowshik', 7, 1),
(6, 'Discrete Mathematics', 'Naveen', 12, 0),
(7, 'Wireless Communication Networks', 'Dhivya', 8, 0),
(8, 'cryptography', 'kumar', 11, 0),
(10, 'naveen kumar biography', 'naveen kumar', 18, 0),
(52, 'hello world', 'hell0', 7, 0),
(53, 'hello world', 'hell0', 7, 0),
(54, 'OOP', 'Balagurusamy', 4, 1),
(55, 'C++', 'David', 5, 1),
(56, 'Java', 'Herbeit', 6, 1),
(57, 'Python', 'Andrew', 2, 1),
(58, 'Php', 'Holland', 4, 1),
(59, 'OOP', 'Balagurusamy', 4, 1),
(60, 'C++', 'David', 5, 1),
(61, 'Java', 'Herbeit', 6, 1),
(62, 'Python', 'Andrew', 2, 1),
(63, 'Php', 'Holland', 4, 1),
(64, 'OOP', 'Balagurusamy', 4, 1),
(65, 'C++', 'David', 5, 1),
(66, 'Java', 'Herbeit', 6, 1),
(67, 'Python', 'Andrew', 2, 1),
(68, 'Php', 'Holland', 4, 1),
(69, 'OOP', 'Balagurusamy', 4, 1),
(70, 'C++', 'David', 5, 1),
(71, 'Java', 'Herbeit', 6, 1),
(72, 'Python', 'Andrew', 2, 1),
(73, 'Php', 'Holland', 4, 1),
(74, 'OOP', 'Balagurusamy', 4, 1),
(75, 'C++', 'David', 5, 1),
(76, 'Java', 'Herbeit', 6, 1),
(77, 'Python', 'Andrew', 2, 1),
(78, 'Php', 'Holland', 4, 1),
(79, 'OOP', 'Balagurusamy', 4, 1),
(80, 'C++', 'David', 5, 1),
(81, 'Java', 'Herbeit', 6, 1),
(82, 'Python', 'Andrew', 2, 1),
(83, 'Php', 'Holland', 4, 1),
(84, 'DataStructures and Algorithm using Python', 'Sivasamy', 5, 0),
(85, 'OOP', 'Balagurusamy', 4, 1),
(86, 'C++', 'David', 5, 1),
(87, 'Java', 'Herbeit', 6, 1),
(88, 'Python', 'Andrew', 2, 1),
(89, 'Php', 'Holland', 4, 1),
(90, 'OOP', 'Balagurusamy', 4, 1),
(91, 'C++', 'David', 5, 1),
(92, 'Java', 'Herbeit', 6, 1),
(93, 'Python', 'Andrew', 2, 1),
(94, 'Php', 'Holland', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_id` text NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `user_password` text NOT NULL,
  `role` int(11) NOT NULL COMMENT '0- Librariyan 1- Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `email_id`, `phone_no`, `user_password`, `role`) VALUES
(1, 'naveen', 'nskiller6688@gmail.com', '9629271203', 'ce2038f74beb83d987834ebb385c5bb9', 1),
(2, 'boopesh', 'boopesh@gmail.com', '9876543210', '015024dba5d0bf44cb7c82a2713b3e16', 1),
(3, 'harsha', 'harsha@gmail.com', '6754321898', '1ed898f606e45758aec56e8ed6213ce9', 1),
(4, 'karthi', 'karthi@gmail.com', '9087876543', 'ce2038f74beb83d987834ebb385c5bb9', 0),
(5, 'siva', 'siva@gmail.com', '9879745678', '104827e490dbbdbd83866776079d2cd0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_books`
--

CREATE TABLE `user_books` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `taken_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `due_date` datetime NOT NULL,
  `book_status` int(11) NOT NULL COMMENT '0-Request, 1-Approved,2-Cancelled',
  `Fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_books`
--

INSERT INTO `user_books` (`book_id`, `user_id`, `book_name`, `book_author`, `taken_date`, `due_date`, `book_status`, `Fine`) VALUES
(1, 1, 'Data Structures and algorithm in C Volume 2', 'Boopesh', '2023-07-14 07:14:33', '2023-08-12 00:00:00', 3, 0),
(2, 1, 'Object Orieneted Programming in Java ', 'Harshavardhan ', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(5, 1, 'Compiler Design', 'Kowshik', '2023-07-14 06:26:23', '2023-08-12 00:00:00', 1, 0),
(10, 1, 'naveen kumar biography', 'naveen kumar', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(8, 1, 'cryptography', 'kumar', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(84, 1, 'DataStructures and Algorithm using Python', 'Sivasamy', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(1, 2, 'Data Structures and algorithm in C Volume 2', 'Boopesh', '2023-07-14 06:26:04', '2023-08-12 00:00:00', 2, 0),
(3, 2, 'Computer Networks', 'Jaisurya', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(6, 2, 'Discrete Mathematics', 'Naveen', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(4, 2, 'Theory of Computation', 'Selvi', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(10, 2, 'naveen kumar biography', 'naveen kumar', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(4, 3, 'Theory of Computation', 'Selvi', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(8, 3, 'cryptography', 'kumar', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(7, 3, 'Wireless Communication Networks', 'Dhivya', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(10, 3, 'naveen kumar biography', 'naveen kumar', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(6, 3, 'Discrete Mathematics', 'Naveen', '2023-07-14 06:25:31', '2023-08-12 00:00:00', 0, 0),
(1, 1, 'Data Structures and algorithm in C Volume 2', 'Boopesh', '2023-07-14 07:14:33', '2023-08-12 00:00:00', 3, 0),
(7, 2, 'Wireless Communication Networks', 'Dhivya', '2023-07-14 06:25:31', '2023-08-14 00:00:00', 0, 0),
(3, 1, 'Computer Networks', 'Jaisurya', '2023-07-14 07:23:24', '2023-08-14 00:00:00', 2, 0),
(52, 1, 'hello world', 'hell0', '2023-07-14 06:39:20', '2023-08-14 00:00:00', 1, 0),
(1, 1, 'Data Structures and algorithm in C Volume 2', 'Boopesh', '2023-07-14 07:14:33', '2023-08-14 00:00:00', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
