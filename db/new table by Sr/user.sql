-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 07:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `open-project-match-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `confirmemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `brief_description` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `housenumber` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cellphone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `confirmemail`, `password`, `firstname`, `surname`, `mobile`, `category`, `short_description`, `brief_description`, `userType`, `companyname`, `title`, `street`, `housenumber`, `zipcode`, `city`, `country`, `telephone`, `cellphone`, `fax`, `created_at`, `updated_at`) VALUES
(48, 'haidarcse2017@gmail.com', 'haidarcse2017@gmail.com', '@BcWv7O[Jxn,', '', '', '', '', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 10:48:35', '2024-10-22 12:28:43'),
(68, 'saddam@gmail.com', 'saddam@gmail.com', 'V%mW)1yH9!r8', 'saddam', 'khan', '', 'Information technology', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-24 17:07:15', '2024-10-24 19:19:17'),
(69, 'jannat@gmail.com', 'jannat@gmail.com', '_6d*$0sQ*Cq#', 'jannat', 'ara', '', '', '', '', 'open project', 'sss', 'Ms.', '11', '124', '1212', 'rangpur', 'bangladesh', '0125444444', '0125444444', '12', '2024-10-24 17:09:12', '2024-10-24 17:09:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
