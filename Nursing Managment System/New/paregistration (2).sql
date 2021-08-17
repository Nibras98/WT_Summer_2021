-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 02:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `paregistration`
--

CREATE TABLE `paregistration` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `nid` varchar(17) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paregistration`
--

INSERT INTO `paregistration` (`fname`, `lname`, `contact`, `nid`, `email`, `password`, `gender`, `Address`) VALUES
('Shamit', 'Nibras', '+8801711318734', '2147483647', 'shamitnibras@gmail.com', '123456', 'Male', 'H#08;Bl#L;R#12 south banasree'),
('Nibras', 'Shamit', '+8801552392801', '2147483647', 'xyz@gmail.com', '123456', 'Male', 'dhanmondi'),
('sazim', 'rahman', '01911364209', '8263907480', 'abc@gmail.com', '123456', 'Female', 'Dhanmondi '),
('naymul', 'islam', '+88017********', '**********', 'naymul@gmail.com', '456123789', 'Male', 'pabna'),
('Shamit', 'Nibras', '+8801711318734', '8263907480', 'shamitnibras@gmail.com', '123456', 'Male', 'south banasree'),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', 'Male', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('s', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('nib', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('Shamit', 'Nibras', '01711318734', '123456', 'hmb776@yahoo.com', '123456', 'Male', 'dhaka');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
