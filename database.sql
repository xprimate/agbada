-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 02:32 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agbada`
--

-- --------------------------------------------------------

--
-- Table structure for table `commodity`
--

CREATE TABLE IF NOT EXISTS `commodity` (
  `name` varchar(30) NOT NULL,
  `specie` varchar(50) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `description` text,
  `img_name` varchar(30) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `price` decimal(50,2) NOT NULL,
  `location` varchar(50) NOT NULL COMMENT 'for state',
  `lga` varchar(20) NOT NULL COMMENT 'local government',
  `aggregate` char(5) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `sn` int(40) NOT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `active` int(3) NOT NULL DEFAULT '1',
  `action` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_first_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COMMENT='posted commodity';

--
-- Dumping data for table `commodity`
--

INSERT INTO `commodity` (`name`, `specie`, `quantity`, `description`, `img_name`, `user_email`, `price`, `location`, `lga`, `aggregate`, `payment`, `sn`, `user_id`, `active`, `action`, `time`, `user_first_name`) VALUES
('water melon', 'red', '100 big balls', 'Machine processed commodity, planted with pure organic\n manue under strick supervision. Moisture content 3%, \ninpurity 1%, contaminant 0.\n\n', 'test', 'agama@lizard.com', '40000.00', 'Bauchi', 'toro', 'no', 'escrow', 0, '16', 1, 'Buy', '2017-12-10 10:39:32', 'Agama'),
('soyabeans', 'yellow', '2 tonnes', 'Machine processed commodity, planted with pure organic\n manue under strick supervision. Moisture content 3%, \ninpurity 1%, contaminant 0.\n\n', 'test', 'agama@lizard.com', '300000.00', 'Plateau', 'Joe-east', 'yes', 'escrow', 1, '16', 1, 'Buy', '2017-12-10 10:39:32', 'Agama'),
('corn', 'brown', '10 tonnes', 'Machine processed commodity, planted with pure organic\n manue under strick supervision. Moisture content 3%, \ninpurity 1%, contaminant 0.\n\n', '10', 'ogb@yahoomail.com', '300000.00', 'Plateau', '', 'no', 'escrow', 3, '10', 1, 'Bargain', '2017-12-10 10:39:32', 'James'),
('debug', 'debug', 'debug', 'Machine processed commodity, planted with pure organic\n manue under strick supervision. Moisture content 3%, \ninpurity 1%, contaminant 0.\n\n', NULL, ' 	magento@gmail.com', '500.00', 'lagos', '', 'yes', 'escrow', 5, '12', 1, 'Buy', '2017-12-10 10:39:32', 'Jude'),
('test2', 'test2', 'test2', 'Machine processed commodity, planted with pure organic\n manue under strick supervision. Moisture content 3%, \ninpurity 1%, contaminant 0.\n\n', NULL, ' 	agama@lizard.com', '10000.00', 'test2', '', 'No', 'escrow', 6, '16', 1, 'Bargain', '2017-12-10 10:39:32', 'Agama'),
('yam', 'Ogoja', '200', 'Machine processed commodity, planted with pure organic\n manue under strick supervision. Moisture content 3%, \ninpurity 1%, contaminant 0.\n\n', NULL, 'kjjh@gmail.com', '2000.00', 'Akwa-Ibom', '', 'No', 'escrow', 9, '13', 1, 'Buy', '2017-12-10 10:39:32', 'James'),
('ttt', 'hgg', '1000', 'Machine processed commodity, planted with pure organic\n manue under strick supervision. Moisture content 3%, \ninpurity 1%, contaminant 0.\n\n', NULL, 'maduka@yahoo.com', '43332.00', 'anambara', 'gfgt', 'No', 'escrow', 11, '9', 1, 'Buy', '2018-01-17 13:50:03', 'Muka'),
('rice', 'white', '2000kg', 'test and test', NULL, 'bukas@gmail.com', '5000.00', 'borno', 'kama', 'No', 'escrow', 17, '14', 1, 'Buy', '2018-01-27 05:39:30', 'jude'),
('carbbage', 'white', '3000kg', 'Very sweat white carbbage', '10carbbage.jpg', 'ogb@yahoomail.com', '5000.00', 'abuja', 'FCT', 'No', 'escrow', 22, '10', 1, 'Buy', '2018-01-27 14:01:21', 'James'),
('Garrri', 'Ijebu', '200kg', 'Very tasty and span-key Ijebu Garri', '10Garrri.jpg', 'ogb@yahoomail.com', '50000.00', 'ogun', 'Ijebu-ode', 'Yes', 'escrow', 23, '10', 1, 'Buy', '2018-01-28 03:35:05', 'James'),
('Yam', 'Ogoja', '500 big tubers', 'New yam from Ogoja, Big tubers', '10Yam.jpg', 'ogb@yahoomail.com', '200000.00', 'cross-river', 'Ogoja', 'Yes', 'escrow', 24, '10', 1, 'bargain', '2018-01-28 03:38:00', 'James'),
('Palm Oil', 'Enugu', '200 litters', 'Very thick well cooked oil from Enugu', '10Palm Oil.jpg', 'ogb@yahoomail.com', '120000.00', 'enugu', 'Nkanu-West', 'No', 'escrow', 25, '10', 1, 'bargain', '2018-01-28 03:40:52', 'James');

-- --------------------------------------------------------

--
-- Table structure for table `convers`
--

CREATE TABLE IF NOT EXISTS `convers` (
  `convers_id` int(20) NOT NULL,
  `message_id` int(30) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `convers_body` varchar(50000) NOT NULL,
  `sender_first_name` varchar(30) DEFAULT NULL COMMENT 'initial sender of the mesage',
  `receiver_first_name` varchar(30) NOT NULL COMMENT 'initial receiver of the message',
  `sender_email` varchar(30) DEFAULT NULL,
  `receiver_email` varchar(30) NOT NULL,
  `viewed` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COMMENT='conversation between users';

--
-- Dumping data for table `convers`
--

INSERT INTO `convers` (`convers_id`, `message_id`, `send_date`, `convers_body`, `sender_first_name`, `receiver_first_name`, `sender_email`, `receiver_email`, `viewed`) VALUES
(0, 79, '2018-04-01 22:10:59', '\r\nThanks a lot for you interest in the commodity.', NULL, 'James', 'bukas@gmail.com', 'ogb@yahoomail.com', 0),
(1, 79, '2018-04-01 22:50:49', '\r\nhffyhfhhff', NULL, 'James', 'bukas@gmail.com', 'ogb@yahoomail.com', 0),
(3, 79, '2018-04-01 22:54:48', '\r\ntest ting again', NULL, 'James', 'bukas@gmail.com', 'ogb@yahoomail.com', 0),
(4, 79, '2018-04-01 22:55:30', '\r\ntest ting again', NULL, 'James', 'bukas@gmail.com', 'ogb@yahoomail.com', 0),
(5, 79, '2018-04-04 05:06:50', '\r\nHow much are you paying and when.', NULL, 'James', 'bukas@gmail.com', 'ogb@yahoomail.com', 0),
(6, 79, '2018-04-04 05:32:28', '\r\nI willing to offer 200,000 naira for ten tonnes', NULL, 'James', 'bukas@gmail.com', 'ogb@yahoomail.com', 0),
(12, 0, '2018-04-04 05:47:25', '\r\nanother test', NULL, 'James', NULL, 'ogb@yahoomail.com', 0),
(13, 0, '2018-04-04 05:47:37', '\r\nI willing to offer 200,000 naira for ten tonnes', NULL, 'James', NULL, 'ogb@yahoomail.com', 0),
(14, 0, '2018-04-04 05:49:10', '\r\nI willing to offer 200,000 naira for ten tonnes', NULL, 'James', NULL, 'ogb@yahoomail.com', 0),
(15, 0, '2018-04-04 05:49:30', '\r\nI willing to offer 200,000 naira for ten tonnes', NULL, 'James', NULL, 'ogb@yahoomail.com', 0),
(16, 0, '2018-04-04 05:49:55', '\r\nTest another one', NULL, 'James', NULL, 'ogb@yahoomail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE IF NOT EXISTS `market` (
  `id` int(20) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Introduction to Agro-commodity Trading in Nigeria', 'introduction', 'Nigeria is blessed with abundant Agricultural resources, with excellent climate and soil for the cultivation her resources.\r\n Among the most predominant cultivated plants in Nigeria include: Rice Sorghum, Millet, Soybean, Cassava, Beans, Potatoes, Yam Corn, guinea-corn etc. These plants have various planting and harvesting season. The periods determine the availability, price and distribution of a particular commodity.'),
(2, 'Market Dynamics', 'dynamics', 'The agro commodity market in Nigeria does not stand alone. It is influenced by so many variables that changes periodically. Government policies for a major part of this dynamics followed by climatic changes  and plant diseases. '),
(3, 'Effect of FGs policies on Agriculture market', 'effect-of-fgs-policies-on-agriculture-market', 'The federal government of Nigeria through the ministry of Agriculture, in her media briefing said that Nigeria and Mexico has concluded a bilateral agreement on yam exportation. This development will give the country much needed foreign exchange and boost our farmers confidence to spread their market across the globe. ');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(50) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `msg_title` varchar(20) NOT NULL,
  `msg_body` varchar(300) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `msg_title`, `msg_body`, `user_email`, `time`) VALUES
(3, '10', 'When is the date com', 'we are good to go', 'ogb@yahoomail.com', '2018-02-04 23:29:05'),
(4, '10', 'how many Kiliogram p', 'Hello, I want to know how many kg of garri you can deliver per month', 'ogb@yahoomail.com', '2018-02-10 07:17:30'),
(5, '10', 'from where', 'Please I want to know where the commodity is coming from', 'ogb@yahoomail.com', '2018-02-10 07:19:47'),
(6, '10', 'test', 'testing againg', 'ogb@yahoomail.com', '2018-02-10 07:20:25'),
(7, '10', 'another test', 'how did it go', 'ogb@yahoomail.com', '2018-02-10 07:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `pm_inbox`
--

CREATE TABLE IF NOT EXISTS `pm_inbox` (
  `message_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `from_user_email` varchar(30) NOT NULL,
  `from_user_id` int(30) NOT NULL,
  `from_user_first_name` varchar(30) NOT NULL,
  `msg_title` varchar(150) NOT NULL,
  `msg_body` text NOT NULL,
  `viewed` tinyint(1) NOT NULL,
  `recieve_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_inbox`
--

INSERT INTO `pm_inbox` (`message_id`, `user_id`, `from_user_email`, `from_user_id`, `from_user_first_name`, `msg_title`, `msg_body`, `viewed`, `recieve_date`) VALUES
(77, 10, 'ogbonnajay@gmail.com', 6, 'Jude', 'When is the date', 'Please when is this commodity coming to me', 0, '2018-03-02 09:11:37'),
(78, 10, 'ogbonnajay@gmail.com', 6, 'Jude', 'Please what the last price', 'Please what is the last last price', 0, '2018-03-02 09:12:12'),
(79, 10, 'ogbonnajay@gmail.com', 6, 'Jude', 'Ok I am ready', 'Ok am ready for this, are you ready', 0, '2018-03-02 09:14:12'),
(80, 10, 'ogbonnajay@gmail.com', 6, 'Jude', 'Date of Planting', 'Please what is the date you planted the crop', 0, '2018-03-02 09:18:30'),
(81, 10, 'ogbonnajay@gmail.com', 6, 'Jude', 'What is your last price', '\r\nIs this working', 0, '2018-03-02 09:19:19'),
(82, 14, 'ogbonnajay@gmail.com', 6, 'Jude', 'How can you ship to outside Nigeria', '\r\nIs this working', 0, '2018-03-02 09:24:15'),
(83, 14, 'ogbonnajay@gmail.com', 6, 'Jude', 'What is the Price', 'How many are you buying', 0, '2018-03-02 09:24:57'),
(85, 0, '', 0, '', '', 'is it working\r\n', 0, '2018-05-15 15:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `pm_outbox`
--

CREATE TABLE IF NOT EXISTS `pm_outbox` (
  `message_id` int(11) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `to_user_first_name` varchar(50) NOT NULL,
  `to_user_id` int(20) NOT NULL,
  `to_user_email` varchar(50) NOT NULL,
  `msg_title` varchar(123) NOT NULL,
  `msg_body` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_outbox`
--

INSERT INTO `pm_outbox` (`message_id`, `user_id`, `to_user_first_name`, `to_user_id`, `to_user_email`, `msg_title`, `msg_body`, `send_date`) VALUES
(70, 6, 'James', 10, 'ogb@yahoomail.com', 'When is the date', 'Please what date are you suppose to send the commodity', '2018-03-02 09:11:37'),
(71, 6, 'James', 10, 'ogb@yahoomail.com', 'Please what the last price', 'Please whats the last price for 12 tone of corn', '2018-03-02 09:12:12'),
(72, 6, 'James', 10, 'ogb@yahoomail.com', 'Ok I am ready', 'Ok I am ready for the payment.', '2018-03-02 09:14:12'),
(73, 6, 'James', 10, 'ogb@yahoomail.com', 'Date of Planting', 'Please when was the planting date of  your yam', '2018-03-02 09:18:30'),
(74, 6, 'James', 10, 'ogb@yahoomail.com', 'What is your last price', 'Ok what is the last price you are willing to offer. I am buying 20 tonnes', '2018-03-02 09:19:19'),
(75, 6, 'jude', 14, 'bukas@gmail.com', 'How can you ship to outside Nigeria', 'Please my client is based in Ghana, I wan the commodity delivered to Ghana', '2018-03-02 09:24:14'),
(76, 6, 'jude', 14, 'bukas@gmail.com', 'What is the Price', 'What is the price of sending 10 tonnes to Ghana', '2018-03-02 09:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_state` varchar(10) NOT NULL,
  `user_surename` varchar(20) NOT NULL,
  `user_bank` varchar(30) DEFAULT NULL,
  `user_bank_accountNo` int(15) DEFAULT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_email`, `user_password`, `user_phone`, `user_type`, `user_address`, `user_state`, `user_surename`, `user_bank`, `user_bank_accountNo`, `reg_time`) VALUES
(1, 'Ehtesham', 'ehtesham@gmail.com', '123', '334443333', '', '', '', 'Look', NULL, NULL, '2017-12-20 21:39:28'),
(2, 'Ehtesham', 'ehtesham@gmail.com', '123', '2147483647', '', '', '', 'Asum', NULL, NULL, '2017-12-20 21:39:28'),
(3, 'farrukh', 'farrukh@gmail.com', '123', '232342343', '', '', '', 'Mary', NULL, NULL, '2017-12-20 21:39:28'),
(4, 'zaid', 'zaid@gmail.com', '202cb962ac59075b964b07152d234b70', '324234234', '', '', '', 'John', NULL, NULL, '2017-12-20 21:39:28'),
(6, 'Jude', 'ogbonnajay@gmail.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '2147483647', 'Buys and S', '', '', 'Moses', NULL, NULL, '2017-12-20 21:39:28'),
(9, 'Muka', 'maduka@yahoo.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '2147483647', 'buy', 'no 15 ring road Aba', 'nassarawa', 'OsisiOma', 'Select Your Bank', 0, '2018-01-07 21:19:44'),
(10, 'James', 'ogb@yahoomail.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '2147483647', 'buy', '123 hhgh house tent', 'adamawa', 'jane', 'Select Your Bank', 0, '2018-01-07 21:25:52'),
(12, 'Jude', 'magento@gmail.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '2147483647', 'buy', '123 hulumbu street', 'taraba', 'okolo', 'Select Your Bank', 0, '2018-01-07 21:39:55'),
(13, 'James', 'kjjh@gmail.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '08066013434', 'buy', '123 hulumbu street', 'borno', 'jane', 'Select Your Bank', 0, '2018-01-07 21:43:48'),
(14, 'jude', 'bukas@gmail.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '09087654354', 'Buys and S', '123 hhgh house tent', 'edo', 'bukas', 'SunTrust Bank Nigeria', 2147483647, '2018-01-09 09:47:09'),
(15, 'jud', 'nhgx@fm.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '08066013434', 'Buys and S', '123 hhgh house tent', 'abuja', 'ogbc', 'Stanbic IBTC Bank Ltd', 1234567892, '2018-01-09 10:46:22'),
(16, 'Agama', 'agama@lizard.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '08066013434', 'Buy and Se', '123 hhgh house tent', 'edo', 'Lizard', 'Standard Chartered Bank Nigeri', 2147483647, '2018-01-14 17:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `convers`
--
ALTER TABLE `convers`
  ADD PRIMARY KEY (`convers_id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_inbox`
--
ALTER TABLE `pm_inbox`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `pm_outbox`
--
ALTER TABLE `pm_outbox`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commodity`
--
ALTER TABLE `commodity`
  MODIFY `sn` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `convers`
--
ALTER TABLE `convers`
  MODIFY `convers_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pm_inbox`
--
ALTER TABLE `pm_inbox`
  MODIFY `message_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `pm_outbox`
--
ALTER TABLE `pm_outbox`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
