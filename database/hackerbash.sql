-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 06:33 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackerbash`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `year` text NOT NULL,
  `branch` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `duration` int(10) NOT NULL,
  `marks` int(5) NOT NULL,
  `medium` varchar(15) NOT NULL,
  `meet_link` varchar(100) NOT NULL,
  `test_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `subject`, `college_name`, `semester`, `year`, `branch`, `date`, `duration`, `marks`, `medium`, `meet_link`, `test_name`, `username`, `time`) VALUES
(5, 'OOSE', 'rait', 6, '3', 'IT', '2020-02-20', 2, 50, 'Google meet', 'abcd', '', 'rait1', '10:00:00'),
(6, 'SM', 'svu', 6, '2', 'IT', '2021-02-19', 2, 50, 'Zoom', 'yhjg', '', 'svu1', '15:48:00'),
(7, 'DS', 'svuv', 4, '2', 'IT', '2021-03-10', 2, 50, 'Zoom', 'j', '', 'svu11', '14:47:00'),
(8, 'ITC', 'svuv', 4, '3', 'IT', '2021-03-12', 2, 50, 'Zoom', 'jukk', '', 'svu11', '14:50:00'),
(9, 'Biology', 'Ryan', 2, '11th', 'pcmb', '2021-03-26', 2, 50, 'Zoom', 'nhjgv', 'Biology ', 'ryan1', '07:30:55'),
(10, 'DSA', 'svuv', 5, '3', 'IT', '2021-03-30', 2, 50, 'Google meet', 'hgmh', '', 'svu11', '10:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `general_exam`
--

CREATE TABLE `general_exam` (
  `id` text NOT NULL,
  `exam_name` text NOT NULL,
  `link` text NOT NULL,
  `similar_exam` text NOT NULL,
  `student_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_exam`
--

INSERT INTO `general_exam` (`id`, `exam_name`, `link`, `similar_exam`, `student_type`) VALUES
('c1', 'GRE', 'https://www.ets.org/gre', 'TOEFL', 'ug'),
('c2', 'CET', 'http://cetcell.mahacet.org/', 'JEE', 'hs'),
('c3', 'GMAT', 'https://www.mba.com/exams/gmat', 'CAT', 'ug'),
('c4', 'NEET', 'http://ntaneet.nic.in/ntaneet/welcome.aspx', 'CET', 'hs');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `college_name`, `location`, `username`) VALUES
(1, 'Kjj', 'Vidyavihar', 'svu'),
(2, 'rait', 'nerul', 'rait1'),
(3, 'svu', 'hjb', 'svu1'),
(4, 'svuv', 'ygvm', 'svu11'),
(5, 'Ryan', 'Nerul', 'ryan1');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `branch` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `student_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`branch`, `name`, `link`, `image`, `student_type`) VALUES
('CS', 'w3schools', 'https://www.w3schools.com/', 'w3.png', 'ug'),
('ETRX', 'Electrical4u', 'https://www.electrical4u.com/', 'e4u.jpg', 'ug'),
('ETRX', 'Tutorials Point', 'https://www.tutorialspoint.com/index.htm', 'tutpoint.png', 'ug'),
('IT', 'geeksforgeeks', 'https://www.geeksforgeeks.org/', 'QNHrwL2q.jpg', 'ug'),
('IT', 'w3schools', 'https://www.w3schools.com/', 'w3.png', 'ug'),
('MECH', 'Coursera', 'https://www.coursera.org/', 'coursera.png', 'ug'),
('MECH', 'Learn Mech', 'https://learnmech.com/', 'learnmech.png', 'ug'),
('pcmb', 'Sarvagyan', 'https://www.sarvgyan.com/articles/mh-cet-preparation-tips', 'sar.png', 'hs');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(20) NOT NULL,
  `student_name` text NOT NULL,
  `roll_no` int(20) NOT NULL,
  `college_name` text NOT NULL,
  `year` text NOT NULL,
  `semester` text NOT NULL,
  `branch` text NOT NULL,
  `e_mail` text NOT NULL,
  `username` text NOT NULL,
  `student_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `roll_no`, `college_name`, `year`, `semester`, `branch`, `e_mail`, `username`, `student_type`) VALUES
(11, 'Malhar', 20, '', 'second', 'three', 'mech', 'malharthakur20@gmail.com', 'malhar20', 'ug'),
(12, 'Elsa', 90, '', 'ele', '', '', 'elsa23@gmail.com', 'elsa23', 'hs'),
(14, 'rhutu', 113, 'Kjj', 'second', 'six', 'cs', 'me.v@somaiya.edu', 'rhutu1', 'ug'),
(15, 'Sukhada Virkar', 118, 'svuv', 'twe', '', 'IT', 'sukhada.v@somaiya.edu', 'sukhu1', 'ug'),
(16, 'Max', 111, 'Ryan', 'ele', '', '', 'max.v@gmail.com', 'max1', 'hs');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `exam_id` varchar(20) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`exam_id`, `student_id`, `college_name`) VALUES
('2', '2', 'kjj'),
('7', '15', 'svuv'),
('9', '16', 'Ryan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `login_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `login_role`) VALUES
('elsa23', '$2y$10$O7/U.rdUIGgk46fNnFBzp.x80Mfb7PWnwwaWzr/h7BaeErX80PXIm', 'student'),
('malhar20', '$2y$10$rLWmW2D03W2z8Q7xuQdrXOBDHWWjhbHqw6f5XiHj2E6pJPw0lQKxG', 'student'),
('max1', '$2y$10$f9s5mWnk02xknwvQuVf.KuyO/flTKMvAETIfzPJTeCr45LIP1YyF.', 'student'),
('rait1', '$2y$10$wc2bVuQmK8g1vneDSrrSiuoypa.zh2lh0kVOAaUU4POS1SpybmVzC', 'organization'),
('rhutu1', '$2y$10$jef5tvJnEMAXJaaZVftxUueHin7eRR0dRYVsUMPh8NkrH/n./5uvm', 'student'),
('ryan1', '$2y$10$GsqL844.jGU2RLNwQHCQcuj9sFQurZVIJ.kBDJSTbvkY1vE8EoL.C', 'organization'),
('sukhu1', '$2y$10$x8MPojBAnSt.9oggppvmk.ZdTWKqS2Xd9YKltu6HHmbeiqMUDxJ6u', 'student'),
('svu1', '$2y$10$r117udWAoJPC8Jdb/JlTk.t87UysX.jhm6q3QLbP3kPXbsAHhqNtS', 'organization'),
('svu11', '$2y$10$/p8iKJQVfJ9wExDG8ujqYODepsDiY66rpqgxPjXxJpfn2hrogvHj.', 'organization');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `general_exam`
--
ALTER TABLE `general_exam`
  ADD PRIMARY KEY (`id`(50));

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`branch`,`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`exam_id`,`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
