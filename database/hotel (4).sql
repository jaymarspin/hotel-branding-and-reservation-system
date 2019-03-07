-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2013 at 05:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `username`, `password`) VALUES
(6, '123', 'jaymar');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `cons` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `cons`) VALUES
(7, 'Mobile No: 09109280535'),
(8, 'Email: jaydaligdig123@gmail.com'),
(9, 'facebook accout: jaydaligdig123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `covered`
--

CREATE TABLE `covered` (
  `id` int(11) NOT NULL,
  `monthval` int(11) NOT NULL,
  `yearval` int(11) NOT NULL,
  `prevv` int(11) NOT NULL,
  `nextt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covered`
--

INSERT INTO `covered` (`id`, `monthval`, `yearval`, `prevv`, `nextt`) VALUES
(1, 11, 2017, 4, 5),
(2, 10, 2017, 4, 4),
(3, 12, 2017, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `description`, `name`) VALUES
(0, 0, '58f6cf546661d9.72848506.png');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `description`, `title`, `name`, `category`) VALUES
(19, 'awdawdawd', 'awdawdawd', '59045d0b016a84.40978767.jpg', 'slidey'),
(20, 'We will ensure your safetiness here i promise', 'Welcome To Columbus Plaza Hotel', '59045d0b3f3ac6.47601766.jpg', 'slidey'),
(24, 'We will ensure your 2323omise', 'Welcome To Columbus Plaza Hotel', '59047023ab1615.88483633.jpg', 'slidey'),
(54, '5345345', '35434', '59055038ecb612.54519007.jpg', ''),
(55, '35643576457', '345345', '59055046e96058.56936810.jpg', 'slidey'),
(57, 'Located at the 4th floor of the Hotel. Spacious enough to give you complete comfort, the single room of the Columbus Plaza Hotel boast the following amenities:', 'Single Room', '5908cba2e5f536.97827547.jpg', 'rooms'),
(58, 'dawdawd', 'Welcome to Columbus plaza hotel', '5908f64b09e181.01256176.jpg', 'slidey'),
(59, 'Located at the 4th floor of the Hotel. Spacious enough to give you complete comfort, the single room of the Columbus Plaza Hotel boast the following amenities:', 'Family Room', '5909071438f292.98960329.jpg', 'rooms'),
(60, 'theres you and me', 'i  here without you baby i  here without you baby', '59091858bd7a26.18238691.jpg', ''),
(61, '', '', '5909185de8c329.67316257.jpg', ''),
(62, 'a title this', 'awdawd', '59091861dc5dc8.75409409.jpg', ''),
(63, '', 'how are you', '590918648c14c4.29838137.jpg', ''),
(64, 'awawd', 'oh yeah', '5909186853bcc2.13998662.jpg', ''),
(65, 'awdawdawd', 'allright', '5909186d3f4c59.74823083.jpg', ''),
(66, 'awdawdawd', 'single room sir', '59091870155873.72868078.jpg', ''),
(67, 'Located at the 4th floor of the Hotel. Spacious enough to give you complete comfort, the single room of the Columbus Plaza Hotel boast the following amenities:', 'standard Room', '590a48dda3efe2.69279397.jpg', 'rooms'),
(68, 'how can i change it? ', 'special offer', '591130fdcebfa7.19404031.jpg', 'promo'),
(69, 'you may wanna get high sometimes you may wanna get high sometimes you may wanna get high sometimes you may wanna get high sometimes', 'bring her here', '591135c4ea1508.48527986.jpg', 'promo'),
(70, 'We Will make ensure your satisfaction oh yeah', 'Special Offer', '591136fab6fcf3.97194415.jpg', 'promo');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `pick` varchar(500) NOT NULL,
  `time_pick` varchar(500) NOT NULL,
  `guest` bigint(20) NOT NULL,
  `romnum` bigint(20) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `fname`, `lname`, `email`, `number`, `type`, `pick`, `time_pick`, `guest`, `romnum`, `arrival`, `departure`) VALUES
(5, 'First Name', 'Last Name', 'Email', 'Mobile No.', 'Single Room', 'Yes Please! Pick me up on arrival', '13:01', 1, 1, '2017-05-09', '2017-05-18'),
(6, 'First Name', 'Last Name', 'Email', 'Mobile No.', 'Single Room', 'Yes Please! Pick me up on arrival', '13:01', 1, 1, '2017-05-09', '2017-05-19'),
(8, 'jaymar', 'daligdig', 'jaydaligdig123@gmail.com', '09109280535', 'Family Room', 'Yes Please! Pick me up on arrival', '13:02', 1, 2, '2017-05-16', '2017-05-18'),
(9, 'First Name', 'Last Name', 'Email', 'Mobile No.', 'Single Room', 'Yes Please! Pick me up on arrival', '14:02', 1, 2, '2017-05-12', '2017-05-17'),
(10, 'First Name', 'Last Name', 'Email', 'Mobile No.', 'Single Room', 'Yes Please! Pick me up on arrival', '14:22', 1, 1, '2017-05-10', '2017-05-13'),
(11, 'jonas', 'daligdig', 'jaydaligdig123@gmail.com', '09109280535', 'Single Room', 'Yes Please! Pick me up on arrival', '23:11', 1, 1, '2017-05-10', '2017-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `list` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `picture` int(11) NOT NULL,
  `o_price` varchar(500) NOT NULL,
  `c_price` varchar(500) NOT NULL,
  `list` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `picture`, `o_price`, `c_price`, `list`) VALUES
(1, 0, '24', '54646', ''),
(2, 0, '123123', '45345', ''),
(3, 0, '', '', ''),
(4, 0, '123123', '45345', ''),
(5, 0, '', '', ''),
(6, 0, '123123', '45345', ''),
(7, 0, '', '', ''),
(8, 0, '123123', '45345', ''),
(9, 0, '', '', '34524!@#45647!@#67576!@#'),
(10, 0, '123123', '45345234', ''),
(11, 0, '', '', '34524!@#45647!@#67576!@#'),
(12, 49, '123123', '45345234', ''),
(13, 49, '123123', '45345234', ''),
(14, 49, '123123', '45345234', ''),
(15, 49, '', '', '546!@#456456!@#456!@#576567!@#'),
(16, 47, '234234', '56456', ''),
(17, 49, '242', '345', ''),
(18, 49, '', '', '546!@#456456!@#456!@#576567!@#245!@#45656!@#65756!@#74675!@#'),
(19, 50, '34', '34', ''),
(20, 49, '43', '354', ''),
(21, 49, '43', '35455', ''),
(22, 50, '34', '34', ''),
(23, 50, '', '', '5435!@#456456!@#674576!@#'),
(24, 47, '234234', '56456', ''),
(25, 47, '', '', '56465!@#sefsef!@#fyjydtjdtj!@#'),
(26, 47, '34', '54', ''),
(27, 47, '', '', '56465!@#sefsef!@#fyjydtjdtj!@#!@#'),
(28, 50, '456', '324', ''),
(29, 50, '', '', '5435!@#456456!@#674576!@#!@#'),
(30, 50, '34', '34', ''),
(31, 50, '', '', '5435!@#456456!@#674576!@#!@#!@#'),
(32, 49, '43', '35455', ''),
(33, 49, '', '', '546!@#456456!@#456!@#576567!@#245!@#45656!@#65756!@#74675!@#!@#'),
(34, 49, '', '', '546!@#456456!@#456!@#576567!@#245!@#45656!@#65756!@#74675!@#!@#!@#'),
(35, 51, '', '', '!@#'),
(36, 51, '34', '34', ''),
(37, 51, '', '', '234234!@#23424234!@#'),
(38, 51, '45', '45', ''),
(39, 51, '', '', '234234!@#23424234!@#!@#'),
(40, 51, '234', '43', ''),
(41, 51, '', '', '234234!@#23424234!@#!@#!@#'),
(42, 51, '234', '43342', ''),
(43, 51, '', '', '234234!@#23424234!@#!@#!@#'),
(44, 51, '2', '2', ''),
(45, 51, '', '', '234234!@#23424234!@#!@#!@#!@#'),
(46, 51, '2', '2', ''),
(47, 51, '', '', '234234!@#23424234!@#!@#!@#!@#!@#'),
(48, 51, '2', '2', ''),
(49, 51, '', '', '234234!@#23424234!@#!@#!@#!@#!@#'),
(50, 51, '2', '2', ''),
(51, 51, '', '', '234234!@#23424234!@#345!@#5675678!@#678678!@#!@#!@#'),
(52, 51, '2', '2', ''),
(53, 51, '', '', '234234!@#23424234!@#345!@#5675678!@#678678!@#234234!@#!@#!@#'),
(54, 51, '2', '2', ''),
(55, 51, '', '', '234234!@#23424234!@#345!@#5675678!@#678678!@#234234!@#345345!@#!@#!@#'),
(56, 51, '2', '2', ''),
(57, 51, '', '', '234234!@#23424234!@#345!@#5675678!@#678678!@#234234!@#345345!@#!@#!@#!@#'),
(58, 51, '2', '2', ''),
(59, 51, '', '', '234234!@#23424234!@#345!@#5675678!@#678678!@#234234!@#345345!@#!@#!@#!@#!@#'),
(60, 51, '2', '2', ''),
(61, 51, '', '', '234234!@#23424234!@#345!@#5675678!@#678678!@#234234!@#345345!@#!@#!@#!@#!@#!@#'),
(62, 51, '2', '2', ''),
(63, 51, '', '', '234234!@#23424234!@#3454343!@#5675678!@#678678!@#234234!@#345345!@#'),
(64, 51, '2', '2', ''),
(65, 51, '', '', '234234!@#23424234!@#3454343!@#5675678!@#678678!@#234234!@#345345!@#5345!@#567567!@#678969!@#'),
(66, 52, '1000', '999', ''),
(67, 52, '', '', 'hagwgjhg!@#fjeioufoi!@#usoiuefoiuseoifu!@#'),
(68, 52, '1000', '999', ''),
(69, 52, '', '', 'ha2323!@#fjeioufoi!@#usoiuefoiuseoifu!@#'),
(70, 52, '1000', '999', ''),
(71, 52, '', '', 'ha2323!!!!!@#fjeioufoi!@#usoiuefoiuseoifu!@#'),
(72, 52, '1033', '999', ''),
(73, 52, '', '', 'ha2323!!!!!@#fjeioufoi!@#usoiuefoiuseoifu!@#'),
(74, 56, '344', '3434', ''),
(75, 56, '344', '3434', ''),
(76, 56, '', '', '234234!@#fgdhdjh!@#tujtdyjrj!@#'),
(77, 53, '234234', '054665', ''),
(78, 53, '', '', 'w34!@#345345!@#'),
(79, 57, '45', '456776', ''),
(80, 57, '45', '456776', ''),
(81, 57, '', '', '4545!@#567567!@#75878678!@#'),
(82, 57, '45', '456776', ''),
(83, 57, '', '', '4545!@#567567!@#75878678!@#3453!@#456456!@#'),
(84, 57, '45', '456776', ''),
(85, 57, '', '', '4545!@#567567!@#75878678!@#3453!@#456456!@#4564!@#67!@#!@#'),
(86, 57, '45', '456776', ''),
(87, 57, '', '', '4545!@#567567!@#75878678!@#3453!@#456456!@#4564!@#67!@#'),
(88, 53, '234234', '054665', ''),
(89, 53, '', '', 'w34!@#345345!@#'),
(90, 57, '45', '456776', ''),
(91, 57, '', '', '4545!@#567567!@#75878678!@#3453!@#456456!@#4564!@#67!@#'),
(92, 57, '45', '456776', ''),
(93, 57, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(94, 57, '45', '456776', ''),
(95, 57, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(96, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(97, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(98, 57, '45', '456776', ''),
(99, 57, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(100, 67, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(101, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(102, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(103, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(104, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(105, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#'),
(106, 59, '', '', 'Air conditioning!@#1 complimentary Breakfast - Plated!@#One single bed with fresh linen!@#Drinking Glass Pitcher!@#Complimentary Wi-fi Internet Service!@#Telephone!@#Electronic Guestroom locks!@#Hot and Cold Rain Shower!@#LCD colour TV with cable channels!@#Closet with Hanger!@#Console Table!@#Bidet!@#');

-- --------------------------------------------------------

--
-- Table structure for table `room_available`
--

CREATE TABLE `room_available` (
  `id` int(11) NOT NULL,
  `pictures` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_available`
--

INSERT INTO `room_available` (`id`, `pictures`, `number`) VALUES
(1, 34, 57),
(2, 59, 13),
(3, 57, 1),
(4, 67, 10),
(5, 59, 13),
(6, 59, 13),
(7, 59, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covered`
--
ALTER TABLE `covered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_available`
--
ALTER TABLE `room_available`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `covered`
--
ALTER TABLE `covered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `room_available`
--
ALTER TABLE `room_available`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
