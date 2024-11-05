-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 05:17 PM
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
-- Database: `project-match-design`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_projects`
--

CREATE TABLE `upload_projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `my_file_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `brief_description` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `upload_projects`
--

INSERT INTO `upload_projects` (`id`, `title`, `category`, `keywords`, `my_file_name`, `short_description`, `brief_description`, `date`, `created_at`, `updated_at`) VALUES
(33, 'Full-Stack Developer for Interactive Frontend', 'Information technology Keywords:', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-23', '2024-10-23 17:22:56', '2024-10-23 17:22:56'),
(34, 'Full-Stack Developer for Interactive Frontend', 'Information technology Keywords:', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-23', '2024-10-23 17:27:41', '2024-10-23 17:27:41'),
(35, 'Full-Stack Developer for Interactive Frontend', 'Information technology Keywords:', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-24', '2024-10-23 18:38:17', '2024-10-23 18:38:17'),
(36, 'Full-Stack Developer for Interactive Frontend', 'Information technology Keywords:', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-24', '2024-10-23 19:36:08', '2024-10-23 19:36:08'),
(37, 'Full-Stack Developer for Interactive Frontend', 'Information technology Keywords:', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-24', '2024-10-24 13:04:47', '2024-10-24 13:04:47');

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
(50, 's@gmail.com', 's@gmail.com', 'SL&4hYsnWWKY', 's', 's', '', 'Infromation Technology ', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 12:45:36', '2024-10-24 15:09:53'),
(51, 's@gmail.com', 's@gmail.com', '^<],8MX7CvqG', 's', 's', '', '', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 12:45:51', '2024-10-22 12:45:51'),
(52, 'a@gmail.com', 'a@gmail.com', 'DuO3.?MNTPRZ', 's', 's', '', '', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 12:47:04', '2024-10-22 12:47:04'),
(53, 'f@gmail.com', 'f@gmail.com', '1b]DUXs_}?I*', 'g', 'g', '', '', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 17:31:23', '2024-10-22 17:31:23'),
(54, 'f@gmail.com', 'f@gmail.com', '.0R5J#+Ij$uG', 'g', 'g', '', '', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 17:31:38', '2024-10-22 17:31:38'),
(55, 'f@gmail.com', 'f@gmail.com', 'c7A_0x_)<!PN', 'g', 'g', '', '', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 17:34:17', '2024-10-22 17:34:17'),
(56, 'haisam@gmail.com', 'haisam@gmail.com', 'zkZL&k@9?E7l', 'g', 'g', '', 'Infromation Technology ', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-22 17:34:27', '2024-10-24 13:41:52'),
(58, 's@gmail.com', 's@gmail.com', '])r16g_E_VpV', 's', 'd', '', '', '', '', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-24 15:01:35', '2024-10-24 15:01:35'),
(59, 's@gmail.com', 's@gmail.com', 'eLbF*5S^mKUM', 's', 'd', '', '', '', '', 'open project', '', '', '', '', '', '', '', '', '', '', '2024-10-24 15:02:10', '2024-10-24 15:16:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_projects`
--
ALTER TABLE `upload_projects`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_projects`
--
ALTER TABLE `upload_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
