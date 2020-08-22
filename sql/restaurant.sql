-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `rating`, `comment`) VALUES
('Arshi', 'arshi@gmail.com', 5, 'It is an amazing restaurant'),
('Ajaz', 'ajaz@gmail.com', 5, 'Food is very tasty.'),
('Arshi', 'arshi@gmail.com', 5, 'Nice place to dine in!');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodId` int(4) NOT NULL,
  `foodname` varchar(15) NOT NULL,
  `foodPrice` int(11) NOT NULL,
  `imgName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodId`, `foodname`, `foodPrice`, `imgName`) VALUES
(1, 'Veg Biryani', 350, 'veg_biryani'),
(2, 'Malai Kofta', 300, 'malai_kofta'),
(3, 'Matar Paneer', 300, 'matar_paneer'),
(4, 'Rajma', 150, 'rajma'),
(5, 'Teekha Murg', 400, 'Teekha_murg'),
(6, 'Chicken Tikka', 350, 'tikka'),
(7, 'Dosa', 100, 'dosa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `foodname` varchar(15) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `username`, `foodname`, `price`, `quantity`, `date`) VALUES
(2, 'Arshi', 'Malai Kofta', 300, 0, '2020-03-17'),
(2, 'Arshi', 'Malai Kofta', 300, 0, '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `phone`, `address`) VALUES
('admin', 'admin@gmail.com', 'Adm!n123', 8291341278, 'Aisha hai chambers, Sofiya Zuber road'),
('Ajaz', 'ajaz@gmail.com', 'Ajaz!786', 9869132355, 'Aisha hai chambers\r\nSofiya Zuber road'),
('Arshi', 'arshi@gmail.com', 'Arshi!786', 8291341278, 'Aisha hai chambers,Sofiya Zuber road\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
