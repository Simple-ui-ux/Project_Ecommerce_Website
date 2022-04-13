-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 10:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `pro_id` int(11) NOT NULL,
  `pro_img` varchar(200) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_descrip` varchar(200) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`pro_id`, `pro_img`, `pro_name`, `pro_descrip`, `pro_price`, `pro_stock`) VALUES
(2, 'images/16075068701.jpg', 'laptop123', 'abasdas                                                                                                                                                                            ', 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `User_id` int(25) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `User_image` varchar(100) NOT NULL,
  `User_role` varchar(25) NOT NULL,
  `phoneNo` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_id`, `Username`, `Password`, `Email`, `User_image`, `User_role`, `phoneNo`) VALUES
(1, 'm.daniyal2', 'abC345565', 'daniyalnoor@gmail.com', 'images/16074467614.jpg', 'Admin', 2147483647),
(2, 'm.daniyal', '2343', '', 'C:/xampp/htdocs/Project_Ecommerce_Website/images/16074138051.jpg', 'Admin', 2147483647),
(4, 'm.daniyal', 'daniyal', '', 'C:xampp/htdocs/Project_Ecommerce_Website/images/16074152732.jpg', 'User', 2147483647),
(5, 'daniyal', 'Daniyal.485', 'daniyal@gmail.com', 'C:xampp/htdocs/Project_Ecommerce_Website/images/16074304151.jpg', 'Admin', 53243423),
(6, 'daniyal', 'Daniyal23', 'daniyal2@gmail.com', 'images/16074346156.jpg', 'Admin', 32434),
(9, 'saba12', 'Saba1234567', 'saba@gmail.com', 'images/16074491456.jpg', 'User', 32434);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `User_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
