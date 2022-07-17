-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 17, 2022 at 02:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sam`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `qty` int(20) NOT NULL,
  `totalprice` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `name`, `price`, `img`, `qty`, `totalprice`, `id`) VALUES
('neha@gmail.com', 'Gucci perfumes', 5000, 'imgs/1491651409.jpg', 1, 5000, 102),
('neha@gmail.com', 'YardleySoap', 100, 'imgs/1491499503.jpg', 1, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `contact`, `password`) VALUES
('neha', 'neha@gmail.com', 1234567899, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `email` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `qty` int(20) NOT NULL,
  `totalprice` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `img`, `qty`) VALUES
('1', 'YardleySoap', 100, 'Best in quality soaps', '1491499503.jpg', 10),
('1', 'YardleySoap', 100, 'Best in quality soaps', '1491499503.jpg', 10),
('2', 'vera wang perfumes', 100, 'Best in quality ', '1491850298.jpg', 10),
('12', 'Girls Watch', 5000, 'Best in quality', '1491705548.jpg', 10),
('102', 'Gucci perfumes', 5000, 'Best in quality', '1491651409.jpg', 10),
('112', 'Girls footwear', 800, 'Best in quality', '1491498980.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Name`, `Email`, `rate`, `review`) VALUES
('neha', 'neha@gmail.com', 4, 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia commodi fugit ipsam excepturi enim nesciunt, tenetur ducimus alias quisquam quis sed? Eveniet asperiores deleniti ab nam architecto laborum quis reprehenderit quo, praesentium dicta quas.\r\n     ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
