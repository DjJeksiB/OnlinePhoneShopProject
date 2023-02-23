-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 10:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `firstName` varchar(120) NOT NULL,
  `lastName` varchar(120) NOT NULL,
  `Country` varchar(120) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `firstName`, `lastName`, `Country`, `Text`) VALUES
(1, 'Valetnin', 'Valeriev', 'canada', 'Hello from html'),
(2, 'Ivan', 'Ivanov', 'canada', 'Im ivan from html'),
(3, 'Petko', 'Georgiev', 'australia', 'Hi im petko'),
(4, '', '', 'australia', ''),
(5, '', '', 'canada', ''),
(6, '', 'Valeriev', 'australia', ''),
(7, 'Valetnin', 'Ivanov', 'canada', 'Hi'),
(8, 'Ivan', 'Ivanov', 'canada', 'Hi IM mihaelka');

-- --------------------------------------------------------

--
-- Table structure for table `producti`
--

CREATE TABLE `producti` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `producti`
--

INSERT INTO `producti` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Iphone 12 pro', 'iphone', 2500.00, 'src/1.jpg'),
(2, 'Huawei nova 10', 'huaweiN10', 1700.00, 'src/2.jpg'),
(3, 'Xiomi Redmi 6', 'XiomiR6', 890.00, 'src/3.jpg'),
(4, 'Nokia', 'Nokia', 640.00, 'src/4.jpg'),
(5, 'Iphone Se', 'IphoneSE', 1400.00, 'src/5.jpg'),
(6, 'Huawei p40 pro', 'HuaweiP40Pro', 1430.00, 'src/6.jpg'),
(7, 'Samsung a50', 'SamsungA50', 550.00, 'src/7.jpg'),
(8, 'Samsung S12', 'SamsungS12', 1030.00, 'src/8.jpg'),
(9, 'Xiomi Poco Pro', 'XiomiPocoPro', 1750.00, 'src/9.jpg'),
(10, 'Motorola E32', 'MotorolaE32', 790.00, 'src/10.jpg'),
(11, 'Motorola G51', 'MotorolaG51', 1220.00, 'src/11.jpg'),
(12, 'Cat B17', 'CatB17', 980.00, 'src/12.jpg'),
(13, 'Cat B25', 'CatB25', 500.00, 'src/13.jpg'),
(14, 'Lenovo ThinkPhone', 'LenovoThinkPhone', 2400.00, 'src/14.jpg'),
(15, 'Zte V30', 'ZteV30', 450.00, 'src/15.jpg'),
(16, 'Zte Ultra', 'ZteUltra', 900.00, 'src/16.jpg'),
(30, 'Iphone 12 X', 'Iphone12X', 2600.00, 'images/Iphone7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `zaqvki`
--

CREATE TABLE `zaqvki` (
  `Id` int(11) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Location` varchar(300) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zaqvki`
--

INSERT INTO `zaqvki` (`Id`, `firstName`, `LastName`, `Location`, `name`, `Price`) VALUES
(45, 'Валентин', 'Валериев', 'das', 'Xiomi Poco Pro', 1750),
(46, 'Валентин', 'Валериев', 'das', 'Huawei nova 10', 1700),
(47, 'Валентин', 'Валериев', 'das', 'Lenovo ThinkPhone', 2400),
(48, 'Валентин', 'Валериев', 'Оряхово', 'Huawei nova 10', 1700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `producti`
--
ALTER TABLE `producti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `zaqvki`
--
ALTER TABLE `zaqvki`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `producti`
--
ALTER TABLE `producti`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `zaqvki`
--
ALTER TABLE `zaqvki`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
