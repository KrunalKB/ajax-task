-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2022 at 05:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `firstname`, `lastname`, `email`, `password`, `cpassword`, `address`, `gender`, `city`, `hobby`, `img_name`) VALUES
(181, 'Krunal', 'Bhimajiyani', 'krunalkb265@gmail.com', '$2y$10$u.BDv8AAVl4viriA.xPA.euRB8Ce7hLToAV030s9GR4C1tg8dyfVe', '$2y$10$Gf3lihtN20Fury2bJnHvu.WUMxsR.VEK42.hdiiNaCarjDLC9rR/u', 'street no-4,', 'male', 'Ahmedabad', 'dancing,singing', 'thor.jpg'),
(182, 'Krunal', 'Bhimajiyani', 'krunalkb265@gmail.com', '$2y$10$hwhUYI2xUr4TLbP92hdEuOBiaVv29t8dqHAH33JJgOYjJ30ZTTrxK', '$2y$10$YrVY33uIC9WRjUPWJQJNieIAANO6EAdusw1VQLbf.f702aXbxFPwC', 'dcdc', 'male', 'Surat', 'dancing,singing', 'krishna.jpg'),
(183, 'Krunal', 'Bhimajiyani', 'krunalkb265@gmail.com', '$2y$10$kfgYpRAwYFdUwmScOC3ZFuOFJ/Huz/Nsx.oVIv9Qjq3LpveI/N3L2', '$2y$10$EtoC82Q835ZdtyTs7uzHKuIyoIMKOs5i1924iKKDA8LHznk3IF41O', 'ccdc', 'male', 'Ahmedabad', 'dancing,singing', 'marvel-924.jpg'),
(184, 'Krunal', 'Bhimajiyani', 'krunalkb265@gmail.com', '$2y$10$CsaCXBU2QvEDjLGoNornjOzo1XgcF0LUilTx3Pk9VWb9w5oG.6z12', '$2y$10$zoUPCFrhZRmSlM7unyfm2eiHwsxaEF3MrEZcG3VIRMgHBMIDaM.G6', 'xcxc', 'male', 'Ahmedabad', 'dancing,singing', 'sunset-823.jpg'),
(185, 'Krunal', 'Bhimajiyani', 'krunalkb265@gmail.com', '$2y$10$AW5SreXqwE8ernpubS9C6.vBOD2rFMXgtkOMitDFPMQlSE1Sz1cbi', '$2y$10$DtSxdeecI79jo0lMRoJD5OV6tNYrprckFErkdEW0pCGXWPhSdsLhi', 'ccc,', 'male', 'Gandhinagar', 'dancing,reading', 'marvel-591.jpg'),
(186, 'qq', 'ww', 'krunalkb265@gmail.com', '$2y$10$PNZhcgO9FCU9Slh.86JUKu33zyjkJTjq1bQ/AuIs5.TSN7j/zO3.O', '$2y$10$GWvXszz3ObalR1g87tkE0evqwpOG5727htBUD2vJ6jCK.ldsMct8e', 'adsd,', 'male', 'Ahmedabad', 'dancing,singing', 'thor-827.jpg'),
(187, 'done', 'Bhimajiyani', 'krunalkb265@gmail.com', '$2y$10$JFOw7LtX16ju3/aEX7WkL.EO6QT77kzVPh/dYkHZKuuhaNdPWV2Om', '$2y$10$ytT7FweSi2RewB/r1W.7/Oj0m2gvUIFOpvIkQfCSeMnG7dVhoscAi', 'chital road,cxvv', 'male', 'Ahmedabad', 'dancing,singing', 'F2-834.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
