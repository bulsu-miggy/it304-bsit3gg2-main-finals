-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollees`
--

CREATE TABLE `enrollees` (
  `id` int(10) NOT NULL,
  `u_studnumber` varchar(12) NOT NULL,
  `u_f_name` text NOT NULL,
  `u_l_name` text NOT NULL,
  `u_username` text NOT NULL,
  `u_mobile` varchar(12) NOT NULL,
  `u_birthday` text NOT NULL,
  `u_gender` varchar(6) NOT NULL,
  `u_email` text NOT NULL,
  `u_state` varchar(12) NOT NULL,
  `u_dist` text NOT NULL,
  `u_balance` int(11) NOT NULL,
  `u_scholarship` text NOT NULL,
  `u_pincode` text NOT NULL,
  `file` longblob NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `u_family` text NOT NULL,
  `staff_id` varchar(120) NOT NULL,
  `image` varchar(150) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollees`
--

INSERT INTO `enrollees` (`id`, `u_studnumber`, `u_f_name`, `u_l_name`, `u_username`, `u_mobile`, `u_birthday`, `u_gender`, `u_email`, `u_state`, `u_dist`, `u_balance`, `u_scholarship`, `u_pincode`, `file`, `u_password`, `u_family`, `staff_id`, `image`, `uploaded`) VALUES
(106, '123123123123', 'Nico', 'Cruz', 'nicocruz', '09566235440', '', 'Choose', 'nico.cruz.c@bulsu.edu.ph', 'Santa Maria', '1915 Macaiban St., San Jose Patag, Santa Maria, Bulacan', 8000, 'Yes', '3022', '', 'asasas', '', '', 'Nico Cruz.jpg', '2022-11-27 21:17:19'),
(107, '123123123123', 'Nico', 'Cruz', '', '', '', 'Female', 'nico.cruz.c@bulsu.edu.ph', 'Choose...', 'asdasda', 8000, 'No', '', '', '', '', '', '', '2022-11-28 21:59:58'),
(108, '123123123123', 'Nico', 'Cruz', 'Romeo Cruz', 'asdasda', '', 'Female', 'nico.cruz.c@bulsu.edu.ph', 'Choose...', '1915 Macaiban St., San Jose Patag, Santa Maria, Bulacan', 8000, 'No', '3022', '', '', '', '', '', '2022-11-28 22:01:42'),
(110, '2020107226', 'Nico', 'Cruz', 'Romeo Cruz', '09566235440', '2022-11-13', 'Male', 'nico.cruz.c@bulsu.edu.ph', 'Santa Maria', '1915 Macaiban St., San Jose Patag, Santa Maria, Bulacan', 8000, 'Yes', '3022', '', 'Marites Cruz', '', 'BS Informati', 'Nico Cruz.jpg', '2022-11-29 22:47:46'),
(115, '10152001', 'Nico', 'Cruz', 'Romeo Cruz', '09566235440', '2001-10-15', 'Yes', 'nico.cruz.c@bulsu.edu.ph', 'Santa Maria', '1915 Macaiban St., San Jose Patag, Santa Maria, Bulacan', 8000, 'Yes', '3022', '', 'Marites Cruz', '', 'BS Informati', 'Nico Cruz.jpg', '2022-12-04 16:51:49'),
(116, '', 'Nico', 'Cruz', 'nicocruz', '09566235440', '', 'Male', 'nico.cruz.c@bulsu.edu.ph', 'Santa Maria', '1915 Macaiban St., San Jose Patag, Santa Maria, Bulacan', 8000, 'Yes', '3022', '', 'nicocruz1015', '', 'BS Informati', '', '2022-12-06 10:56:38'),
(118, '123123123123', 'Gian ', 'Hernandez', 'nicocruz', '9271314182', '2022-12-17', 'Male', 'cruz.nico.c.7226@gmail.com', 'Santa Maria', '1915 Macaiban St., San Jose Patag Santa Maria Bulacan', 8000, 'Yes', '3022', '', 'nicocruz1015', '', 'BS Information Technology', '', '2022-12-06 15:32:26'),
(119, '123', 'Cruz', 'Nico C.', 'nicocruz', '09566235440', '', 'Male', 'cruz.nico.c.7226@gmail.com', 'Bustos', '1915 Macaiban St., San Jose Patag Santa Maria Bulacan', 80000, 'Yes', '3022', '', 'nicocruz1015', '', 'BS Information Technology', '', '2022-12-06 15:36:29'),
(120, '10152001', 'Jorge', 'De Guzman', 'jorge', '09751847313', '2022-12-23', 'Male', 'nicocruz10152001@gmail.com', 'Paombong', 'san Jose Patag', 15000, 'Yes', '3526', '', 'nicocruz1015', '', 'BS Computer engineering ', '', '2022-12-06 16:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollees`
--
ALTER TABLE `enrollees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollees`
--
ALTER TABLE `enrollees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
