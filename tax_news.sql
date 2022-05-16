-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 10:39 AM
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
-- Database: `tax_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `adminid` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`adminid`, `fname`, `lname`, `email`, `pass`) VALUES
(1, 'Suyogya', 'Gautam', 'suyogya@mail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Ashim', 'Baral', 'ashim@mail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Ashim', 'Baral', 'ashim@taxmandu.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `cmts`
--

CREATE TABLE `cmts` (
  `fname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` varchar(50) DEFAULT NULL,
  `newsID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmts`
--

INSERT INTO `cmts` (`fname`, `email`, `comment`, `newsID`) VALUES
('Alex Thapa', 'alex@gmail.com', 'Good to see Xavi back at work!', 12),
('Jordan Smith', 'jordi@outlook.com', 'Barcelona are BACK!!!', 12),
('Bimal Gharti', 'bimal@hotmail.com', 'So sad :(', 11),
('Hari Shrestha', 'hari@gmail.com', 'Getting Scary!', 0),
('Adarsh Ghimire', 'adarsh@gmail.com', 'Oh no so sad for Leeds!', 26),
('Suyogya Gautam', 'suyogya@mail.com', 'GREAT JOB', 69);

-- --------------------------------------------------------

--
-- Table structure for table `income_rate`
--

CREATE TABLE `income_rate` (
  `id` int(11) DEFAULT NULL,
  `rate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income_rate`
--

INSERT INTO `income_rate` (`id`, `rate`) VALUES
(1, '0.01'),
(2, '0.10');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(11) NOT NULL,
  `newsHead` longtext NOT NULL,
  `newsBody` longtext NOT NULL,
  `newsCategory` varchar(200) NOT NULL,
  `newsTime` datetime NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `newsHead`, `newsBody`, `newsCategory`, `newsTime`, `photo`) VALUES
(59, 'Indian PM Modi arriving in Lumbini today', 'Prime Minister of India Narendra Modi issued departure statement a day before landing in Lumbini, the birth place of Gautam Budhha saying India\'s ties with Nepal are \'unparalleled.\' The Indian PM is visiting Lumbini on the occasion of Buddha Purnima at the invitation of Nepal\'s Prime Minister Sher Bahadur Deuba.Modi said in his statement that he was looking forward to meeting his Nepali counterpart Deuba again after their \'productive\' discussions during Deuba\'s visit to India last month. He stated, \"We will continue to build on the shared understanding to expand cooperation in multiple areas, including in hydropower, development and connectivity.\" He said India-Nepal ties were unparalleled. \"The civilisational and people-to-people contacts between India and Nepal form the enduring edifice of our close relationship,\" Modi said in his statement. \"My visit is intended to celebrate and further deepen these time-honoured linkages that have been fostered through centuries and recorded in our long history of intermingling,\" he said. He added that he was looking forward to offering prayers at the Mayadevi temple on the auspicious occasion of Buddha Jayanti.\"I am honoured to follow in the footsteps of millions of Indians to pay reverence at the sacred site of Lord Buddha\'s birth,\" Modi said.PM Modi and PM Deuba will hold talks in Lumbini on further expanding cooperation in multi-ple areas including hydropower and connectivity.\"We will continue to build on our shared understanding to expand cooperation in multiple areas, including in hydropower, development and connectivity,\" he added.Modi will also participate in the foundation laying ceremony for the construction of a centre for Buddhist culture and heritage in Lumbini.Modi said he would also attend celebrations to mark the occasion of Buddha Jayanti, organised by the government of Nepal.', 'Nepal', '2022-05-16 09:29:26', 'tax_modi.jpg'),
(60, 'Don\'t argue over minor human error while vote counting: EC', 'The Election Commission has urged the bodies concerned not to make a minor human error during the counting of votes an issue of dispute.The Election Commission has said its attention has been drawn towards incidents of halting the counting process, mobbing, shouting and causing delay in the entire counting process over unnecessary disputes. The latest untoward scenario during the counting process has its impact on the plan of the Election Commission to complete the process before May 19, according to the Election Commission. In a press statement today, EC Spokesperson Shaligram Sharma Poudel has sought to speed up the counting process with the management of required human resources by coordinating with the district-based Human Resources Management Coordination Committee.It has sought the mobilisation of government, including the province government employees, in counting with priority on the basis of their availability and to ensure more and more counting teams on the ground of availability of space in the counting venues.', 'Nepal', '2022-05-16 09:30:20', 'tax_ec.jpg'),
(61, 'India open to exporting wheat to needy nations despite ban', 'India on Sunday said it would keep a window open to export wheat to food-deficit countries at the government level despite restrictions announced two days earlier.India\'s Commerce Secretary B.V.R. Subrahmanyam told reporters the government will also allow private companies to meet previous commitments to export nearly 4.3 million tons of wheat until July. India exported 1 million tons of wheat in April. India mainly exports wheat to neighboring countries like Bangladesh, Nepal and Sri Lanka.A notice in the government gazette by the Directorate of Foreign Trade on Friday said a spike in global prices for wheat was threatening the food security of India and neighboring and vulnerable countries.A key aim of restrictions on exports is to control rising domestic prices. Global wheat prices have risen by more than 40% since the beginning of the year.Before the war, Ukraine and Russia accounted for a third of global wheat and barley exports. Since Russia\'s Feb. 24 invasion, Ukraine\'s ports have been blocked and civilian infrastructure and grain silos have been destroyed.', 'World', '2022-05-16 09:30:46', 'tax_indiaban.jpg'),
(62, 'Sweden\'s ruling party poised to back NATO bid', 'Sweden\'s ruling Social Democrats were poised on Sunday to come out in favour of the country joining NATO, paving the way for an application soon after and abandoning decades of military non-alignment in the wake of Russia\'s invasion of Ukraine.A distant prospect only months ago, Russia\'s attack on its smaller neighbour has seen both Sweden and Finland rethink their security needs and move to seek out safety in the alliance they stood apart from throughout the long years of the Cold War. The war in Ukraine, which Moscow calls a special military operation but which has already killed thousands and displaced millions, shattered long-standing security policies and fuelled a wave of public support for NATO membership in both countries.Prime Minister Magdalena Andersson\'s Social Democrats, the biggest party in every election for the past century, has held internal debates over the past week over dropping a long-standing opposition to NATO membership.', 'World', '2022-05-16 09:31:09', 'tax_swed.jpg'),
(63, 'Nepse index surges nearly 5pc', 'The Nepal Stock Exchange (Nepse) index recuperated the nearly five per cent loss of previous week by advancing 4.99 per cent or 111.80 points over the trading period between May 8 and 12.The sensitive index, which measures performance of class \'A\' stocks, increased by 4.95 per cent or 21.41 points to 453.96 points. Similarly, the float index that gauges performances of shares actually traded also rose by 5.12 per cent to 160.69 points. Altogether 20.55 million shares were traded duringthe trading week through 160,262 transactions that amounted to Rs 8.56 billion.The weekly turnover was more than 97 per cent higher than the preceding week when 12.25 million shares had changed hands through 93,229 transactions that totalled Rs 4.34 billion.However, it is to be noted that the share market had remained closed for two days due to public holidays in the previous week against the normal five days in the review week.Nevertheless, the average daily turnover also rose by over 18 per cent during the review period.The average daily turnover in the past week was Rs 1.44 billion and it increased to Rs 1.71 billion this week.', 'Business', '2022-05-16 09:32:00', 'tax_npse.jpg'),
(64, 'Samsung in talks to hike chipmaking prices by up to 20%: Bloomberg', 'Samsung Electronics 005930.KS is in talks with clients about hiking prices for chip contract manufacturing by up to 20% this year, Bloomberg reported on Friday.The move is part of an industry-wide push to raise prices to cover rising materials and logistics costs, Bloomberg said, citing people familiar with the matter. Samsung did not have an immediate comment.Samsung Electronics is the world\'s second-largest chip contract manufacturer, after Taiwan Semiconductor Manufacturing Co (TSMC) 2330.TW.TSMC has forecast an up to 37% jump in current-quarter sales, saying it expects chip capacity to remain very tight this year amid a global chip crunch that has kept order books full and allowed chipmakers to charge premium prices.Samsung said in an earnings call in late April that major customers\' demand for its chip contract manufacturing was greater than its available capacity, and it expected the supply shortage to continue.', 'World', '2022-05-16 09:32:52', 'tax_samsu.jpg'),
(65, 'Kane penalty sends Spurs into top four with win over Burnley', 'A contested Harry Kane penalty gave Tottenham Hotspur a 1-0 Premier League win over relegation-threatened Burnley on Sunday, moving Antonio Conte\'s team into a Champions League qualification place.Spurs climbed above North London rivals Arsenal into fourth on 68 points from 37 games -- the Gunners are on 66 from 36 matches and can return to the top four if they win at Newcastle United on Monday. Burnley, under caretaker manager Mike Jackson, went into the game in 17th place and will slip back into the bottom three if Leeds United avoid defeat at home to Brighton & Hove Albion.', 'World', '2022-05-16 09:33:14', 'tax_kane.jpg'),
(66, 'Man City fight back to draw at West Ham', 'Manchester City fought back from 2-0 down to draw 2-2 with West Ham United on Sunday but the Premier League leaders dropped two points in the title race.With Liverpool playing at Southampton on Tuesday, City had the chance to open a six-point lead at the top but the draw at the London Stadium meant they moved four points above Liverpool, with one game left. West Ham\'s Jarrod Bowen struck twice in the first half but Jack Grealish pulled one back for City early in the second half before Vladimir Coufal scored an own goal. Riyad Mahrez missed a golden chance to seal a City win after he missed a late penalty.After City defender Oleksandr Zinchenko lost track of Bowen, the West Ham forward raced on to Pablo Fornals\' pass over the top and took it round goalkeeper Ederson for a clinical finish in the 24th minute.Bowen added another in the 45th minute when Michail Antonio sent him through with a clever pass and the English forward\'s low strike from the edge of the box found the bottom corner.', 'Sports', '2022-05-16 09:34:03', 'tax_city.jpg'),
(69, 'Balen leads right now', 'Balen is winning witj 2 votes.', 'Nepal', '2022-05-16 10:20:54', 'tax_Sport small.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `newsHead` varchar(2000) NOT NULL,
  `newsBody` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `user_email`, `newsHead`, `newsBody`, `status`, `category`) VALUES
(8, 'ram@gmail.com', 'UML losing', 'UML LOSING', 0, 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `tax_history`
--

CREATE TABLE `tax_history` (
  `email` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `income` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_history`
--

INSERT INTO `tax_history` (`email`, `vehicle`, `income`, `date`) VALUES
('suyogya@mail.com', '0', 6500, '2022-04-18'),
('suyogya@mail.com', 'Rs 20000', 0, '2022-04-18'),
('biraj.dulal@heraldcollege.edu.np', '0', 12300, '2022-04-18'),
('biraj.dulal@heraldcollege.edu.np', 'Rs 11000', 0, '2022-04-18'),
('', '0', 0, '2022-05-01'),
('', '0', 0, '2022-05-01'),
('', '0', 4000, '2022-05-01'),
('', '0', 0, '2022-05-01'),
('', '0', 48, '2022-05-04'),
('', '0', 9500, '2022-05-04'),
('', '0', 9500, '2022-05-04'),
('', '0', 9500, '2022-05-04'),
('', '0', 9500, '2022-05-04'),
('', '0', 9500, '2022-05-04'),
('', 'Rs 8000', 0, '2022-05-15'),
('', 'Rs 11000', 0, '2022-05-15'),
('', 'Rs 8000', 0, '2022-05-15'),
('', 'Rs 8000', 0, '2022-05-15'),
('b3khanal@gmail.com', 'Rs 2800', 0, '2022-05-15'),
('b3khanal@gmail.com', 'Rs 2800', 0, '2022-05-15'),
('b3khanal@gmail.com', 'Rs 5500', 0, '2022-05-15'),
('b3khanal@gmail.com', 'Rs 4500', 0, '2022-05-15'),
('b3khanal@gmail.com', 'Rs 2800', 0, '2022-05-15'),
('b3khanal@gmail.com', 'Rs 2800', 0, '2022-05-15'),
('b3khanal@gmail.com', 'Rs 2800', 0, '2022-05-16'),
('b3khanal@gmail.com', 'Rs 2800', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('basnetraymonn@gmail.com', '0', 0, '2022-05-16'),
('ram@gmail.com', '0', 8500, '2022-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `uid` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`uid`, `fname`, `lname`, `email`, `pass`, `otp`) VALUES
(14, 'Biraj', 'Dulal', 'biraj.dulal@heraldcollege.edu.np', '5d41402abc4b2a76b9719d911017c592', 525994),
(18, 'Ashim', 'Baral', 'reachashim@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(19, 'Suyogya', 'Gautam', 'gsuyogya@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(22, 'adarsh', 'ghimire', 'b3khanal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(23, 'Raymon', 'Basnet', 'basnetraymonn@gmail.com', '144b200f48a8a96f8adb1546ff3b8931', 0),
(24, '', '', 'suyogya@mail.com', '202cb962ac59075b964b07152d234b70', 0),
(25, 'Ram', 'Thapa', 'abc', '202cb962ac59075b964b07152d234b70', 0),
(26, 'ram', 'thapa', 'ram@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_tax`
--

CREATE TABLE `vehicle_tax` (
  `vehicle_id` int(11) NOT NULL,
  `province` varchar(200) NOT NULL,
  `range_cc` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `moto_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_tax`
--

INSERT INTO `vehicle_tax` (`vehicle_id`, `province`, `range_cc`, `price`, `moto_type`) VALUES
(20, 'Province 1', '0-125', '2000', 'BIKE'),
(22, 'Bagmati', '0-150', '100', 'BIKE'),
(23, 'Province 1', '151-250', '8000', 'BIKE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vehicle_tax`
--
ALTER TABLE `vehicle_tax`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vehicle_tax`
--
ALTER TABLE `vehicle_tax`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
