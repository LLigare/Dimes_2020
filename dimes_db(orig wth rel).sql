-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 09:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `cont_id` int(5) NOT NULL,
  `cont_date` date NOT NULL,
  `Amount` int(6) NOT NULL,
  `mem_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dividends`
--

CREATE TABLE `dividends` (
  `div_id` int(5) NOT NULL,
  `amount` int(6) NOT NULL,
  `cont_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guarantors`
--

CREATE TABLE `guarantors` (
  `grnt-id` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `loan_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan_application`
--

CREATE TABLE `loan_application` (
  `loan_id` int(5) NOT NULL,
  `loan_eligibility` varchar(30) NOT NULL,
  `loan_status` varchar(30) NOT NULL,
  `loan_amount` int(6) NOT NULL,
  `cont_id` int(5) NOT NULL,
  `grnt_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan_repayment`
--

CREATE TABLE `loan_repayment` (
  `rep_id` int(5) NOT NULL,
  `repayable_amount` int(6) NOT NULL,
  `amount repaid` int(6) NOT NULL,
  `balance` int(6) NOT NULL,
  `loan_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `join_date` date NOT NULL,
  `phone` varchar(13) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `region` varchar(30) NOT NULL,
  `cont_id` int(5) NOT NULL,
  `role_id` int(5) NOT NULL,
  `min_id` int(5) NOT NULL,
  `news_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `minutes`
--

CREATE TABLE `minutes` (
  `min_id` int(5) NOT NULL,
  `meeting_date` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(5) NOT NULL,
  `news_date` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(5) NOT NULL,
  `role_name` varchar(12) NOT NULL,
  `mem_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`cont_id`),
  ADD KEY `mem_id` (`mem_id`);

--
-- Indexes for table `dividends`
--
ALTER TABLE `dividends`
  ADD PRIMARY KEY (`div_id`),
  ADD KEY `cont_id` (`cont_id`);

--
-- Indexes for table `guarantors`
--
ALTER TABLE `guarantors`
  ADD PRIMARY KEY (`grnt-id`),
  ADD KEY `loan_id` (`loan_id`);

--
-- Indexes for table `loan_application`
--
ALTER TABLE `loan_application`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `cont_id` (`cont_id`),
  ADD KEY `grnt_id` (`grnt_id`);

--
-- Indexes for table `loan_repayment`
--
ALTER TABLE `loan_repayment`
  ADD PRIMARY KEY (`rep_id`),
  ADD KEY `loan_id` (`loan_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`),
  ADD KEY `cont_id` (`cont_id`,`role_id`,`min_id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `min_id` (`min_id`);

--
-- Indexes for table `minutes`
--
ALTER TABLE `minutes`
  ADD PRIMARY KEY (`min_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `mem_id` (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `cont_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dividends`
--
ALTER TABLE `dividends`
  MODIFY `div_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guarantors`
--
ALTER TABLE `guarantors`
  MODIFY `grnt-id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_application`
--
ALTER TABLE `loan_application`
  MODIFY `loan_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_repayment`
--
ALTER TABLE `loan_repayment`
  MODIFY `rep_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `minutes`
--
ALTER TABLE `minutes`
  MODIFY `min_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contribution`
--
ALTER TABLE `contribution`
  ADD CONSTRAINT `contribution_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `members` (`mem_id`);

--
-- Constraints for table `dividends`
--
ALTER TABLE `dividends`
  ADD CONSTRAINT `dividends_ibfk_1` FOREIGN KEY (`cont_id`) REFERENCES `contribution` (`cont_id`);

--
-- Constraints for table `guarantors`
--
ALTER TABLE `guarantors`
  ADD CONSTRAINT `guarantors_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `loan_application` (`loan_id`);

--
-- Constraints for table `loan_application`
--
ALTER TABLE `loan_application`
  ADD CONSTRAINT `loan_application_ibfk_1` FOREIGN KEY (`cont_id`) REFERENCES `contribution` (`cont_id`);

--
-- Constraints for table `loan_repayment`
--
ALTER TABLE `loan_repayment`
  ADD CONSTRAINT `loan_repayment_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `loan_application` (`loan_id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`),
  ADD CONSTRAINT `members_ibfk_3` FOREIGN KEY (`min_id`) REFERENCES `minutes` (`min_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
