-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 04:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `Admin_Number` bigint(11) NOT NULL,
  `Admin_Password` varchar(30) NOT NULL,
  `Admin_Address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Admin_Name`, `Admin_Email`, `Admin_Number`, `Admin_Password`, `Admin_Address`) VALUES
(1, 'Awad Deepak Fulchand', 'awaddeepak3@gmail.com', 8459467448, 'Deepak@123#', 'shree nagar latur');

-- --------------------------------------------------------

--
-- Table structure for table `adminnews`
--

CREATE TABLE `adminnews` (
  `ANews_Id` int(225) NOT NULL,
  `ANews_Dept` varchar(50) NOT NULL,
  `ANews_Date` date NOT NULL,
  `ANews_Short` varchar(50) NOT NULL,
  `ANews_Long` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminnews`
--

INSERT INTO `adminnews` (`ANews_Id`, `ANews_Dept`, `ANews_Date`, `ANews_Short`, `ANews_Long`) VALUES
(2, 'ComputerEngineering', '2022-06-03', 'Sclorship', 'Check all student sclorship completed.'),
(4, 'ComputerEngineering', '2022-06-08', 'sdjwhujerhf', 'niowrhgiohrg3g43g3'),
(11, 'ElectricalEngineering.php', '2022-06-12', 'sdjwhujerhf', 'Check all student sclorship completed.'),
(12, 'MechanicalEngineering.php', '2022-06-12', 'Sclorship', 'Check all student sclorship completed.');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `eid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ans` bigint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`eid`, `id`, `ans`) VALUES
(5924, 584, 3199),
(8268, 676, 9453);

-- --------------------------------------------------------

--
-- Table structure for table `examlink`
--

CREATE TABLE `examlink` (
  `Exam_Id` int(255) NOT NULL,
  `Exam_CreateN` varchar(50) NOT NULL,
  `Exam_Class` varchar(20) NOT NULL,
  `Exam_Semester` int(2) NOT NULL,
  `Exam_Dept` varchar(50) NOT NULL,
  `Exam_Date` date NOT NULL,
  `Exam_Link` longtext NOT NULL,
  `Exam_LinkD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examlink`
--

INSERT INTO `examlink` (`Exam_Id`, `Exam_CreateN`, `Exam_Class`, `Exam_Semester`, `Exam_Dept`, `Exam_Date`, `Exam_Link`, `Exam_LinkD`) VALUES
(3, 'Janabai Fulchand Awad', 'FirstYear', 1, 'ComputerEngineering', '2022-05-21', 'https://forms.gle/vEQEThrwUCChZ5km6', 'Cao and Dld'),
(7, 'Janabai Fulchand Awad', 'ThirdYear', 5, 'ComputerEngineering', '2022-05-26', 'https://forms.gle/vEQEThrwUCChZ5km6', 'SoftwareTesting Exam'),
(8, 'Radhika Sawant ', 'SecondYear', 3, 'ComputerEngineering', '2022-06-14', 'https://forms.gle/vEQEThrwUCChZ5km6', 'SoftwareTesting'),
(9, 'Radhika Sawant ', 'SecondYear', 3, 'ComputerEngineering', '2022-06-14', 'https://forms.gle/vEQEThrwUCChZ5km6', 'SoftwareTesting Exam');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` text NOT NULL,
  `eid` bigint(20) NOT NULL,
  `totals` bigint(5) NOT NULL,
  `correct` bigint(5) NOT NULL,
  `wrong` bigint(5) NOT NULL,
  `score` bigint(5) NOT NULL,
  `date` date NOT NULL,
  `Student_Class` varchar(100) NOT NULL,
  `Student_Dept` varchar(100) NOT NULL,
  `Test_Teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `email`, `number`, `eid`, `totals`, `correct`, `wrong`, `score`, `date`, `Student_Class`, `Student_Dept`, `Test_Teacher`) VALUES
(26, 'kiran datir ', 'kirandatir7578@gmail.com', '9145612119', 5924, 1, 1, 0, 1, '2022-05-28', 'FirstYear', 'ComputerEngineering', 'Janabai Fulchand Awad'),
(27, 'Tukuram surywanshi', 'tukuramsuryawanshi123@gmail.com', '8668247463', 5924, 1, 1, 0, 1, '2022-05-28', 'FirstYear', 'ComputerEngineering', 'Janabai Fulchand Awad'),
(28, 'Fulchand Dadarao Awad', 'fulchandawad@gmail.com', '9422940299', 7245, 1, 1, 0, 1, '2022-06-05', 'FinalYear', 'ComputerEngineering', 'Janabai Fulchand Awad'),
(29, 'Waghmare Navnath ', 'navnathwaghmare357@gmail.com', '9373566202', 8268, 1, 1, 0, 1, '2022-06-14', 'SecondYear', 'ComputerEngineering', 'Radhika Sawant');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_Id` int(11) NOT NULL,
  `News_Name` varchar(100) NOT NULL,
  `News_Class` varchar(100) NOT NULL,
  `News_Semester` bigint(10) NOT NULL,
  `News_Dept` varchar(50) NOT NULL,
  `News_Date` date NOT NULL,
  `News_Content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_Id`, `News_Name`, `News_Class`, `News_Semester`, `News_Dept`, `News_Date`, `News_Content`) VALUES
(16, 'Ashwini Fulchand Awad', 'FinalYear', 7, 'MechanicalEngineering', '2022-04-18', ' dnclkdewc'),
(18, 'Ashwini Fulchand Awad', 'SecondYear', 3, 'MechanicalEngineering', '2022-05-06', ' jngjkebjgkheg'),
(19, 'Ashwini Fulchand Awad', 'ThirdYear', 5, 'MechanicalEngineering', '2022-05-06', ' '),
(20, 'Ashwini Fulchand Awad', 'ThirdYear', 5, 'MechanicalEngineering', '2022-05-06', ' .nfkljengileihg'),
(25, 'Janabai Fulchand Awad', 'SecondYear', 3, 'ComputerEngineering', '2022-05-21', ' kgijeihjith35yu'),
(26, 'Janabai Fulchand Awad', 'FirstYear', 1, 'ComputerEngineering', '2022-05-21', ' unit test conduct from 2002'),
(27, 'Janabai Fulchand Awad', 'FinalYear', 7, 'ComputerEngineering', '2022-05-26', 'bjbhjjb'),
(28, 'Radhika Sawant ', 'SecondYear', 3, 'ComputerEngineering', '2022-06-15', ' buweuicewv');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `eid` int(11) NOT NULL,
  `optionid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `options` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`eid`, `optionid`, `id`, `options`) VALUES
(5924, 5389, 584, '5'),
(5924, 9324, 584, '1'),
(5924, 6086, 584, '3'),
(5924, 3199, 584, '6'),
(8268, 2283, 676, 'ok'),
(8268, 9712, 676, 'ok2'),
(8268, 5622, 676, 'ok3'),
(8268, 9453, 676, 'hyper text markup language ');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `Query_Id` int(11) NOT NULL,
  `Query_Name` varchar(200) NOT NULL,
  `Query_Number` bigint(11) NOT NULL,
  `Query_Email` varchar(100) NOT NULL,
  `Query_SName` varchar(200) NOT NULL,
  `Query_Description` varchar(500) NOT NULL,
  `Query_Year` varchar(12) NOT NULL,
  `Query_Class` text NOT NULL,
  `Query_HeldName` varchar(50) NOT NULL,
  `Query_Dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`Query_Id`, `Query_Name`, `Query_Number`, `Query_Email`, `Query_SName`, `Query_Description`, `Query_Year`, `Query_Class`, `Query_HeldName`, `Query_Dept`) VALUES
(8, 'Html', 9373566202, 'navnathwaghmare357@gmail.com', 'Waghmare Navnath ', 'check it authority ', 'SecondYear', '3', 'Radhika Sawant ', 'ComputerEngineering'),
(9, 'Html', 9373566202, 'navnathwaghmare357@gmail.com', 'Waghmare Navnath ', ' akfyasidyjgcjy\r\n', 'SecondYear', '3', 'Radhika Sawant ', 'ComputerEngineering'),
(10, 'Html', 9373566202, 'navnathwaghmare357@gmail.com', 'Waghmare Navnath ', ' schdsg', 'SecondYear', '3', 'Radhika Sawant ', 'ComputerEngineering');

-- --------------------------------------------------------

--
-- Table structure for table `quizquestion`
--

CREATE TABLE `quizquestion` (
  `eid` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `qns` varchar(1000) NOT NULL,
  `QU_CORRECT` text NOT NULL,
  `QU_WRONG` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizquestion`
--

INSERT INTO `quizquestion` (`eid`, `id`, `qns`, `QU_CORRECT`, `QU_WRONG`) VALUES
(5924, 584, '\r\nHow many sizes of headers are available in HTML by default?', '1', '1'),
(8268, 676, 'What is Html', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `replyquery`
--

CREATE TABLE `replyquery` (
  `Reply_Id` int(11) NOT NULL,
  `Reply_Name` varchar(50) NOT NULL,
  `Reply_Number` bigint(11) NOT NULL,
  `Reply_Email` varchar(100) NOT NULL,
  `Reply_SName` varchar(100) NOT NULL,
  `Reply_Description` varchar(10000) NOT NULL,
  `Reply_Year` varchar(12) NOT NULL,
  `Reply_Class` bigint(4) NOT NULL,
  `Reply_HeldName` varchar(100) NOT NULL,
  `Reply_Dept` varchar(100) NOT NULL,
  `Reply_Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replyquery`
--

INSERT INTO `replyquery` (`Reply_Id`, `Reply_Name`, `Reply_Number`, `Reply_Email`, `Reply_SName`, `Reply_Description`, `Reply_Year`, `Reply_Class`, `Reply_HeldName`, `Reply_Dept`, `Reply_Message`) VALUES
(8, 'Html', 9422940299, 'fulchandawad@gmail.com', 'Fulchand Dadarao Awad', ' rgergrg', 'FinalYear', 7, 'Janabai Fulchand Awad', 'ComputerEngineering', 'Your Query Has Been Sorted Check It....'),
(9, 'Html', 9373566202, 'navnathwaghmare357@gmail.com', 'Waghmare Navnath ', 'check it authority ', 'SecondYear', 3, 'Radhika Sawant ', 'ComputerEngineering', 'Your Query Has Been Sorted Check It....'),
(10, 'Html', 9373566202, 'navnathwaghmare357@gmail.com', 'Waghmare Navnath ', ' schdsg', 'SecondYear', 3, 'Radhika Sawant ', 'ComputerEngineering', 'Your Query Has Been Sorted Check It....');

-- --------------------------------------------------------

--
-- Table structure for table `replyteacher`
--

CREATE TABLE `replyteacher` (
  `Reply_Id1` int(255) NOT NULL,
  `Reply_Name1` varchar(50) NOT NULL,
  `Reply_Number1` bigint(11) NOT NULL,
  `Reply_Dept1` varchar(50) NOT NULL,
  `Reply_Sub1` varchar(50) NOT NULL,
  `Reply_Content1` varchar(1000) NOT NULL,
  `Reply_msg1` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replyteacher`
--

INSERT INTO `replyteacher` (`Reply_Id1`, `Reply_Name1`, `Reply_Number1`, `Reply_Dept1`, `Reply_Sub1`, `Reply_Content1`, `Reply_msg1`) VALUES
(2, 'Janabai Fulchand Awad', 9130513428, 'ComputerEngineering', 'bhjhbjhb', ' jjbjbijbhb', 'Your Query Has Been Sorted Check It....'),
(3, 'Janabai Fulchand Awad', 9130513428, 'ComputerEngineering', 'bhjhbjhb', ' jjbjbijbhb', 'Your Query Has Been Sorted Check It....');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` int(11) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Student_Email` varchar(50) NOT NULL,
  `Student_Number` bigint(10) NOT NULL,
  `Student_Password` varchar(20) NOT NULL,
  `Student_Class` varchar(10) NOT NULL,
  `Student_Semester` int(2) NOT NULL,
  `Student_Gender` varchar(8) NOT NULL,
  `Student_Dob` date NOT NULL,
  `Student_Image` text NOT NULL,
  `Student_Address` varchar(50) NOT NULL,
  `Student_Dept` varchar(30) NOT NULL,
  `Student_Teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `Student_Name`, `Student_Email`, `Student_Number`, `Student_Password`, `Student_Class`, `Student_Semester`, `Student_Gender`, `Student_Dob`, `Student_Image`, `Student_Address`, `Student_Dept`, `Student_Teacher`) VALUES
(8, 'Kiran Datir ', 'kirandatir7578@gmail.com', 8308029953, 'Kiran@123#', 'FinalYear', 7, 'Male', '2000-09-16', '28591.jpg', 'panchgalli latur', 'MechanicalEngineering', 'Ashwini Fulchand Awad'),
(10, 'vaishnavi deskmhukh', 'awaddeepak3@gmail.com', 8805900596, 'yash@123#', 'SecondYear', 3, 'FeMale', '2002-09-22', '25814.jpg', 'majalgao', 'MechanicalEngineering', 'Ashwini Fulchand Awad'),
(15, 'Waghmare Navnath ', 'navnathwaghmare357@gmail.com', 9373566202, 'Tanu@123#', 'SecondYear', 3, 'Male', '2000-04-07', 'IMG-20220614-WA0015.jpg', 'VDF College Latur', 'ComputerEngineering', 'Awad Deepak Fulchand');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_Id` int(100) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Teacher_Mother` varchar(20) NOT NULL,
  `Teacher_Email` varchar(50) NOT NULL,
  `Teacher_Number` bigint(11) NOT NULL,
  `Teacher_Gender` varchar(9) NOT NULL,
  `Teacher_Dob` date NOT NULL,
  `Teacher_Adhr` bigint(12) NOT NULL,
  `Teacher_Dept` varchar(60) NOT NULL,
  `Teacher_Password` varchar(50) NOT NULL,
  `Teacher_Address` varchar(200) NOT NULL,
  `Teacher_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_Id`, `Teacher_Name`, `Teacher_Mother`, `Teacher_Email`, `Teacher_Number`, `Teacher_Gender`, `Teacher_Dob`, `Teacher_Adhr`, `Teacher_Dept`, `Teacher_Password`, `Teacher_Address`, `Teacher_Image`) VALUES
(8, 'Ashwini Fulchand Awad', 'Janabai', 'ashwini@123#', 9284929141, 'FeMale', '2002-09-10', 712111300693, 'MechanicalEngineering', 'Ashwini@123#', 'Near Vidhya Vikas school, Shrffgee Nagar, Latur', '25784.jpg'),
(11, 'pankaj Jadhav', 'Janabai', 'awaddeepak3@gmail.com', 9284929141, 'Male', '2002-09-10', 8459467448, 'ElectronicsandTeleComEngineering', 'Deepak@123#', 'nvklfngklrg', 'IMG_20200904_094331.jpg'),
(12, 'pankaj Jadhav', 'Janabai', 'awaddeepak3@gmail.com', 9130513428, 'Male', '0202-09-10', 8459467448, 'ElectricalEngineering', 'Deepak@123#', 'gtegrthet5h', '25815.jpg'),
(13, 'Ashwini Fulchand Awad', 'Janabai', 'awaddeepak3@gmail.com', 9284929141, 'Male', '2002-09-10', 8459467448, 'CivilEngineering', 'Deepak@123#', 'Near Vidhya Vikas school, Shrffgee Nagar, Latur', '25815.jpg'),
(14, 'Radhika Sawant ', 'Test', 'Test@gmail.com', 8805643293, 'FeMale', '2002-09-10', 8805643293, 'ComputerEngineering', 'Radhika@123#', 'latur', 'Screenshot_20220614_111047.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testquestion`
--

CREATE TABLE `testquestion` (
  `Test_Id` int(11) NOT NULL,
  `Test_Class` varchar(20) NOT NULL,
  `Test_Semester` varchar(10) NOT NULL,
  `Test_Title` varchar(100) NOT NULL,
  `Test_Questions` int(100) NOT NULL,
  `Test_Marks` int(10) NOT NULL,
  `Test_Wrong` bigint(10) NOT NULL,
  `Test_Date` date NOT NULL,
  `Test_Dept` varchar(50) NOT NULL,
  `Test_Teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testquestion`
--

INSERT INTO `testquestion` (`Test_Id`, `Test_Class`, `Test_Semester`, `Test_Title`, `Test_Questions`, `Test_Marks`, `Test_Wrong`, `Test_Date`, `Test_Dept`, `Test_Teacher`) VALUES
(5030, 'SecondYear', '3', 'java', 1, 1, 0, '2022-06-14', '', ''),
(5924, 'FirstYear', '1', 'html', 1, 1, 1, '2022-05-28', 'ComputerEngineering', 'Janabai Fulchand Awad'),
(8268, 'SecondYear', '3', 'Html', 1, 1, 0, '2022-06-14', 'ComputerEngineering', 'Radhika Sawant ');

-- --------------------------------------------------------

--
-- Table structure for table `tquery`
--

CREATE TABLE `tquery` (
  `TQuery_Id` int(255) NOT NULL,
  `TQuery_Name` varchar(50) NOT NULL,
  `TQuery_Number` bigint(11) NOT NULL,
  `TQuery_Dept` varchar(50) NOT NULL,
  `TQuery_Sub` varchar(100) NOT NULL,
  `TQuery_Content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tquery`
--

INSERT INTO `tquery` (`TQuery_Id`, `TQuery_Name`, `TQuery_Number`, `TQuery_Dept`, `TQuery_Sub`, `TQuery_Content`) VALUES
(1, 'Ashwini Fulchand Awad', 9284929141, 'MechanicalEngineering', 'question Marks ', ' it check for genertating the question marks\r\n'),
(3, 'Janabai Fulchand Awad', 9130513428, 'ComputerEngineering', 'bhjhbjhb', ' jjbjbijbhb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `adminnews`
--
ALTER TABLE `adminnews`
  ADD PRIMARY KEY (`ANews_Id`);

--
-- Indexes for table `examlink`
--
ALTER TABLE `examlink`
  ADD PRIMARY KEY (`Exam_Id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_Id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`Query_Id`);

--
-- Indexes for table `replyquery`
--
ALTER TABLE `replyquery`
  ADD PRIMARY KEY (`Reply_Id`);

--
-- Indexes for table `replyteacher`
--
ALTER TABLE `replyteacher`
  ADD PRIMARY KEY (`Reply_Id1`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_Id`);

--
-- Indexes for table `testquestion`
--
ALTER TABLE `testquestion`
  ADD PRIMARY KEY (`Test_Id`);

--
-- Indexes for table `tquery`
--
ALTER TABLE `tquery`
  ADD PRIMARY KEY (`TQuery_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminnews`
--
ALTER TABLE `adminnews`
  MODIFY `ANews_Id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `examlink`
--
ALTER TABLE `examlink`
  MODIFY `Exam_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `Query_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replyquery`
--
ALTER TABLE `replyquery`
  MODIFY `Reply_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replyteacher`
--
ALTER TABLE `replyteacher`
  MODIFY `Reply_Id1` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tquery`
--
ALTER TABLE `tquery`
  MODIFY `TQuery_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
