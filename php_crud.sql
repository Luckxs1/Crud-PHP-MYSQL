-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 01:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_crud`
--

CREATE TABLE `php_crud` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php_crud`
--

INSERT INTO `php_crud` (`id`, `name`, `email`, `address`) VALUES
(2, 'Lucky', 'yunquelucky@Gmail.com', 'Antipolo City'),
(3, 'Josep', 'Josep@gmail.com', 'Taguig City'),
(5, 'Hobert', 'Hobert@mail.com', 'Quezon City'),
(6, 'Rose Ann Siervo', 'roseann@Gmail.com', 'Antipolo City'),
(7, 'Rod Samuel Moreno', 'RodSam@Email.com', 'Batangas City'),
(8, 'Noel', 'Noel@Gmail.com', 'Taguig City'),
(9, 'Nica Elma Mojal Vasquez', 'NicaElma@Gmail.com', 'Nueva Ecija City'),
(12, 'Kai', 'Kai@Gmail.com', 'Quezon City'),
(13, 'Laura Fernandez', 'Laura@Gmail.com', 'Taguig City'),
(14, 'Princess', 'princess@Gmail.com', 'Batangas City'),
(15, 'Dennise', 'Dennise@Gmail.com', 'Antipolo City'),
(16, 'Nonoy', 'Nonoy@Gmail.com', 'Antipolo City'),
(17, 'Bote', 'Bote@Gmail.com', 'Tarlac City'),
(18, 'Robbi', 'Rob@Gmail.com', 'Taguig City'),
(19, 'Echo', 'Echo@email.com', 'Taguig City'),
(20, 'Mara', 'Mara@email.com', 'Batangas City'),
(21, 'Jam', 'Jam@email.com', 'Tarlac City'),
(22, 'Jp', 'burato@Gmail.com', 'Antipolo City'),
(23, 'Rei', 'Rei@email.com', 'Antipolo City'),
(24, 'anto', 'anto@Gmail.com', 'Taguig City'),
(25, 'Sally', 'Sally@Gmail.com', 'Marikina City'),
(26, 'Pao', 'Plurad@Gmail.com', 'Marikina City'),
(27, 'RR', 'RR@technomed', 'Morong City'),
(28, 'Adel', 'Adel@tech', 'Morong City'),
(29, 'Glex', 'Glx@tech', 'Quezon City'),
(30, 'Zaldy', 'Zaldy@tech', 'Quezon City'),
(31, 'Myra', 'Myra@tech', 'Quezon City'),
(32, 'JSL', 'jsl@tech', 'San Juan City'),
(33, 'AVL', 'avl@tech', 'San Juan City'),
(34, 'DLA', 'DLA@tech', 'San Juan City'),
(35, 'RVL', 'RVL@tech', 'San Juan City'),
(36, 'Mark', 'mark@arm', 'Quezon City'),
(37, 'Roy', 'Roy@arm', 'Taguig City'),
(38, 'Joey', 'Joey@tech', 'Antipolo City'),
(39, 'Mj', 'Mj@arm', 'Tondo City'),
(40, 'John', 'John@tech', 'Morong City'),
(41, 'Ben', 'Ben@ten', 'Taguig City'),
(42, 'Bert', 'Bert@lto', 'Quezon City'),
(43, 'Jocelyn', 'Jiji@Ant', 'Antipolo City'),
(44, 'Balong', 'rj@it', 'Batac City'),
(45, 'Randy', 'Randy@Arm', 'Laguna City'),
(46, 'Marie', 'MarieChan@arm', 'Cavite City'),
(47, 'Bernie', 'bern@pet', 'Cavite City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_crud`
--
ALTER TABLE `php_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_crud`
--
ALTER TABLE `php_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
