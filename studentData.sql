-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2022 at 01:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `studentData`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `studentID` int(10) NOT NULL,
  `comp7001Grades` int(3) NOT NULL,
  `comp7001Credits` int(2) NOT NULL,
  `comp7001Mark` char(1) NOT NULL,
  `comp7002Grades` int(3) NOT NULL,
  `comp7002Credits` int(2) NOT NULL,
  `comp7002Mark` char(1) NOT NULL,
  `tech7005Grades` int(3) NOT NULL,
  `tech7005Credits` int(2) NOT NULL,
  `tech7005Mark` char(1) NOT NULL,
  `dalt7002Grades` int(3) NOT NULL,
  `dalt7002Credits` int(2) NOT NULL,
  `dalt7002Mark` char(1) NOT NULL,
  `dalt7011Grades` int(3) NOT NULL,
  `dalt7011Credits` int(2) NOT NULL,
  `dalt7011Mark` char(1) NOT NULL,
  `soft7003Grades` int(3) NOT NULL,
  `soft7003Credits` int(2) NOT NULL,
  `soft7003Mark` char(1) NOT NULL,
  `tech7004Grades` int(3) NOT NULL,
  `tech7004Credits` int(2) NOT NULL,
  `tech7004Mark` char(1) NOT NULL,
  `tech7009Grades` int(3) NOT NULL,
  `tech7009Credits` int(2) NOT NULL,
  `tech7009Mark` char(1) NOT NULL,
  `totalCredits` int(11) NOT NULL,
  `averageGrade` int(11) NOT NULL,
  `numAMark` int(1) NOT NULL,
  `numBMark` int(1) NOT NULL,
  `numCMark` int(1) NOT NULL,
  `numFMark` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`studentID`, `comp7001Grades`, `comp7001Credits`, `comp7001Mark`, `comp7002Grades`, `comp7002Credits`, `comp7002Mark`, `tech7005Grades`, `tech7005Credits`, `tech7005Mark`, `dalt7002Grades`, `dalt7002Credits`, `dalt7002Mark`, `dalt7011Grades`, `dalt7011Credits`, `dalt7011Mark`, `soft7003Grades`, `soft7003Credits`, `soft7003Mark`, `tech7004Grades`, `tech7004Credits`, `tech7004Mark`, `tech7009Grades`, `tech7009Credits`, `tech7009Mark`, `totalCredits`, `averageGrade`, `numAMark`, `numBMark`, `numCMark`, `numFMark`) VALUES
(16052796, 80, 90, 'A', 80, 80, 'A', 80, 80, 'A', 80, 80, 'A', 80, 80, 'A', 80, 80, 'A', 80, 80, 'A', 80, 80, 'A', 650, 80, 8, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `studentID` int(10) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`studentID`, `firstName`, `lastName`, `pwd`) VALUES
(16052796, 'Ben', 'Lapidge', '$2y$10$beCQ66nv6gkvIM0RryT9e.jgECHJ2Wozd9fOWl3t9XQ.5aQY/VO7K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`studentID`);
COMMIT;
