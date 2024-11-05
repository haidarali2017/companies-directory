-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 07:22 AM
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
-- Table structure for table `upload_projects`
--

CREATE TABLE `upload_projects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
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

INSERT INTO `upload_projects` (`id`, `user_id`, `user_type`, `title`, `category`, `keywords`, `my_file_name`, `short_description`, `brief_description`, `date`, `created_at`, `updated_at`) VALUES
(33, NULL, '', 'Full-Stack Developer for Interactive Frontend', 'cse', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-23', '2024-10-23 17:22:56', '2024-10-24 19:00:50'),
(34, NULL, '', 'Full-Stack Developer for Interactive Frontend', 'Information technology', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-23', '2024-10-23 17:27:41', '2024-10-24 19:19:27'),
(35, NULL, '', 'Full-Stack Developer for Interactive Frontend', 'software engineer', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-24', '2024-10-23 18:38:17', '2024-10-24 19:30:08'),
(38, 69, 'open project', 'Full-Stack Developer for Interactive Frontend', 'Information technology Keywords:', 'HTML, CSS, React, Node.js, and PHP. short Description:', 'Full-Stack Developer for Interactive Frontend & Backend Made some Changes_fc57fd70-80c8-45ef-ad6f-6a11da13befa.docx', 'I\'m looking for a skilled full-stack developer with extensive experience in HTML, CSS, React, Node.js, and PHP. Brief description: Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dyn', 'Key Responsibilities : - Develop a responsive frontend using HTML, CSS, and React - Implement interactive forms - Ensure dynamic content updates in real-time Backend Expectations: - Build a robust backend server using Node.js and PHP Ideal Skills: - Prove', '2024-10-25', '2024-10-25 04:58:11', '2024-10-25 04:58:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_projects`
--
ALTER TABLE `upload_projects`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_projects`
--
ALTER TABLE `upload_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
