-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 06:47 PM
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
-- Database: `book-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`ID`, `Name`, `Price`, `Description`, `Image`) VALUES
(7, 'Matilda', 60, 'Malta', 'Maltilda.jpeg'),
(8, 'Emma', 60, 'Emma is a novel written by Jane Austen', 'Emma.jpeg'),
(10, 'Nineteen Eighty-Four', 60, 'Nineteen Eighty-Four is a dystopian social science fiction novel and cautionary tale by English writer George Orwell. It was published on 8 June 1949 by Secker & Warburg as Orwell\'s', 'Nineteen Eighty-Four.jpeg'),
(16, 'David Copperfield', 59.99, 'David Copperfield is a novel in the bildungsroman genre by Charles Dickens, narrated by the eponymous David Copperfield, detailing his adventures in his journey from infancy to maturity.', 'David Copperfield.jpeg'),
(17, 'Default', 0, 'Default book cover.', 'default_book_cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Book ID` int(11) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Address Line 1` varchar(255) NOT NULL,
  `Address Line 2` varchar(255) DEFAULT NULL,
  `Country` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Post Code` varchar(255) NOT NULL,
  `Phone Number` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Book ID`, `First Name`, `Last Name`, `Address Line 1`, `Address Line 2`, `Country`, `City`, `State`, `Post Code`, `Phone Number`, `Email`) VALUES
(4, 10, 'Adam', 'Mohammed', 'Address1', '', 'Egypt', 'Egypt', 'volvo', '40404', '01012345678', 'Adam@gmail.com'),
(5, 10, 'aaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', '', 'Egypt', 'Egypt', 'Egypt', '40404', '01012345678', 'aaaaaa@gmail.com'),
(6, 16, 'Ahmad', 'Mohammed', 'Naqib Street', '', 'Egypt', 'Egypt', 'Egypt', '4040440', '01012345678', 'Naqib@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First Name`, `Last Name`, `Email`, `Password`, `is_admin`) VALUES
(1, 'Admin', 'Test', 'admin@test.com', 'admin123', 1),
(2, 'Mostafa', 'Mohammed', 'mostafa@gmail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Book ID` (`Book ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Book ID`) REFERENCES `booktable` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
