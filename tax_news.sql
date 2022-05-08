-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 07:26 PM
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
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `newsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `newsHead` varchar(200) NOT NULL,
  `newsBody` mediumtext NOT NULL,
  `newsCategory` varchar(200) NOT NULL,
  `newsTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `newsHead`, `newsBody`, `newsCategory`, `newsTime`) VALUES
(1, 'Piles of garbage litter valley roads yet again', 'A group of local leaders, who were canvasing door-to-door for the upcoming election at Tinkune area of Kathmandu, were lambasted by irate locals for their failure to take initiative in managing garbage accumulated on the road side.It has been at least 10 days that Kathmandu Metropolitan City has not transported garbage to the landfill site in Nuwakot. Piles of waste accumulated on roadsides inside the core urban areas of Kathmandu have become a common sight.This is the third time in the last three months that the roads in the valley have been littered with garbage.The main reason for obstruction of waste transportation is the blockade of Mudku-Tinpiple road section of Pasang Lhamu Highway on the way to Sisdole.Locals have once again started obstructing vehicles ferrying waste materials.They have been demanding that the damaged road section of the highway be upgraded for the last seven years.The Balaju-Trishuli road segment has been in a dilapidated condition for around eight years now, while the Mudku-Tinpiple road segment is even worse.With rainfall in the area in the last two weeks, the road condition has worsened.\"We trusted the authorities and waited for such a long time.But, we won\'t allow vehicles ferrying waste unless our demand is met,\" Sundar Neupane of the area told The Himalayan Times.The authorities concerned are least bothered about improving roads. Locals have demanded that the government at least start construction work.\"All these years we have received assurances but this time we want action,\" Neupane said.Kathmandu Metropolitan City has the responsibility of ferrying waste products to the Sisdole landfill site.However, it has been saying that road construction falls under the jurisdiction of Department of Roads under the federal government. The road construction project is being undertaken by Sailung Construction, which has often promised the KMC it will upgrade the road section on time, but precious little has happened.Sarkar Raj Shrestha Sisdole l', 'Nepal', '2022-05-04 10:51:19'),
(2, 'Russia says it disables Ukrainian railway stations used to transport Western weapons', 'Russia\'s defence ministry said on Wednesday that it had disabled six railway stations in Ukraine used to supply Ukrainian forces with Western-made weapons in the country\'s east.The ministry said it disabled the railways stations by bombing their power supplies using high-precision air and sea-based weapons. It did not say which Western-made weapons were supplied to Ukrainian forces via those stations.Reuters could not immediately verify the statement and there was no immediate reaction from Kyiv. The ministry also said it had hit 40 Ukrainian military targets, including four depots storing ammunition and artillery weapons.', 'World', '2022-05-04 10:51:58'),
(3, 'Domestic flights at TIA back into service', 'Domestic flights were obstructed for one hour this morning at Tribhuvan International Airport (TIA) here following a hoax that a suspicious object was spotted in the internal terminal building.TIA office said that domestic flights have resumed as no such object was found at the building after a search operation carried out by a bomb disposal squad. The airport which was stalled following the bomb hoax has been opened a while ago, TIA General Manager Prem Nath Thakur said. Passengers inside the domestic terminal building were evacuated after the hoax.', 'Nepal', '2022-05-04 10:52:21'),
(4, 'Tourist arrivals rebounded strongly last month', 'Nepal\'s international tourist arrivals soared by 159.9 per cent year-on-year to 58,348 last month, according to the data unveiled by the Nepal Tourism Board today.The country had welcomed 22,450 tourists in the same month last year. Similarly, 52,663 tourists left the country in the review month.A total of 22,477 Indian tourists entered Nepal last month, which was an increase of 70.3 per cent compared to thenumber of Indian nationals who had visited Nepal in April of 2021.Similarly, the country received 1,537 tourists from Bangladesh, 204 from Pakistan, 244 from Sri Lanka and 86 from Bhutan.Of the total international tourists who entered Nepal last month, 42.7 per cent were from the SAARC countries, as per the NTB.', 'Business', '2022-05-04 10:52:52'),
(5, 'Rahul Gandhi in Nepal to attend wedding of former CNN journo', 'After a video of Rahul Gandhi, former president of Indian National Congress and a member of Parliament, showing him partying at a night club in Kathmandu went viral, the Congress party has clarified that Rahul was in Nepal to attend the wedding of his friend Sumnima Udas.Sumnima, who was a journalist with CNN, is the daughter of Ambassador of Nepal to Myanmar Bhim Udas. She is getting married to Nima Martin Sherpa, a Nepali businessman based in China.The video created a buzz in India after Amit Malviya, the head of the Bharatiya Janata Party\'s information and technology department, put it on Twitter.When asked about Gandhi\'s whereabouts, Congress communication department head Randeep Surjewala told reporters, \"Rahul Gandhi has not gone as an uninvited guest like Prime Minister Modi went to Pakistan to celebrate birthday and cut cakes for the then Pakistan PM Nawaz Sharif. Rahul Gandhi has gone to a friendly country Nepal to participate in a private marriage function of a friend. By chance, the friend also happens to be a journalist. So I think they are also abusing your fraternity.\"', 'Nepal', '2022-05-04 12:40:01'),
(6, 'Heavy rain and floods in Afghanistan kill 22, destroy hundreds of homes', 'Heavy rain and flooding has killed 22 people, destroyed hundreds of homes and damaged crops in Afghanistan, which is already facing a humanitarian crisis, a disaster management official said on Thursday.The Taliban government, struggling to cope with the disaster that has affected more than a third of its provinces, will approach international relief organisations for help, officials said. \"Due to flooding and storms in 12 provinces, 22 people have died and 40 injured,\" said Hassibullah Shekhani, head of communications and information at Afghanistan\'s National Disaster Management Authority.The rain and flooding was particularly severe in the western provinces of Badghis and Faryab and the northern province of Baghlan.Afghanistan has been suffering from drought in recent years, made worse by climate change, with low crop yields raising fears of serious food shortages.The weather has exacerbated problems of poverty caused by decades of war and then a drop in foreign aid and the freezing of assets abroad after the Taliban took over, and U.S.-led forces withdrew, in August.', 'World', '2022-05-05 09:56:43'),
(7, 'Survivor found almost 6 days after China building collapse', 'Rescuers in central China have pulled a woman alive from the rubble of a building that partially collapsed almost six days earlier, state media reported Thursday.The unidentified woman is the 10th survivor of the disaster in the city of Changsha, in which at least five people have died and an unknown number, possibly dozens, are still missing. She was rescued shortly after midnight on Thursday, about 132 hours after the rear of the six-story building suddenly caved in on April 29, the official Xinhua News Agency reported.The woman was conscious and advised rescuers on how to pull her out without causing further injury, Xinhua said. Teams had used dogs and hand tools as well as drones and electronic life detectors in the search.All the survivors were reportedly in good condition after having been treated in a hospital. Intermittent rain showers in recent days may have increased their chances of survival without food or water.At least nine people have been arrested in relation to the collapse of what Xinhua has described as a \"self-built building,\" including its owner, on suspicion of ignoring building codes or committing other violations.', 'World', '2022-05-05 09:57:38'),
(8, 'Audits should be dignified and professional: FinMin', 'Finance Minister Janardan Sharma Prabhakar has stressed the necessity of dignified and professional audits for strengthening the economy.Addressing the first National Accountants\' Conference organised by the Institute of Chartered Accountants of Nepal (ICAN) here, Minister Sharma said that the auditors should be focused on the obligation ofaccurate accounting of all assets. He urged the auditors to pay attention to auditing of any business or property as it impacts the national economy.\"If an auditor miscalculates while auditing, it will not only impact the accounts, but also the national economy. So I request you all to be cautious while auditing.\"He said that the audit business was the backbone as well as the mirror of the economy.The audit sector has played a significant role in all sectors - private, government and non-government, the finance minister said.\"The auditing business requires sincerity and a sense of responsibility.\"He said that the role of auditor would be important in maintaining financial discipline adding that audits should not be limited to the accounts of any organisation but should also be used in valuing the assets of the entire country.He called for an audit of the country\'s economy to eradicate poverty. He said that there should be an audit of all sectors for the improvement of the economy.According to him, it was time to make maximum use of local resources to make the country self-reliant.', 'Business', '2022-05-05 09:58:19'),
(9, 'Gold, silver prices dip slightly', 'The price of precious metals declined in the trading week between April 24 and 29.In the domestic market, gold price fell by Rs 1,700 per tola, while silver price slumped by Rs 40 a tola during the review week. According to the rate list of Federation of Nepal Gold and Silver Dealers Association (FeNeGoSiDA), gold price was fixed at Rs 100,500 per tola when the market opened for trading on Sunday. The price of the precious yellow metal fell by Rs 300 a tola to Rs 100,200 per tola on Monday. The gold price fell to Rs 99,300 a tola on Tuesday and to Rs 99,000 per tola on Wednesday. The precious yellow metal decreased to Rs 98,000 a tola on Thursday.On Friday, however, it recovered some of its earlier losses. The price of yellow metal increased by Rs 1,200 per tola to close the week at Rs 99,200 a tola on the last trading day. Similarly, silver was traded at Rs 1,360 a tola on Sunday.', 'Business', '2022-05-05 10:01:08'),
(10, 'Djokovic stays perfect against Monfils, Raducanu knocked out in Madrid', 'World number one Novak Djokovic began his quest for a fourth Madrid Open title with a 6-3 6-2 victory over Gael Monfils on Tuesday, improving his unbeaten record to 18-0 against the Frenchman.The result ensures Djokovic remains at the top of the rankings while it earned Monfils the ignominy of having the worst record against a single opponent without winning in the Open era. \"I would probably rate it as the best performance of the year,\" Djokovic told reporters. \"I felt very good on the court. (The rain) interruption probably helped me a bit more than him.\"I played one of the most athletic and quickest players that we have in the game, Gael... I know I have to always be ready that another ball will always come back from his part of the court.', 'Sports', '2022-05-05 10:01:54'),
(11, '\'We were asked to leave camp time and again\'', 'A group of 10 footballers who walked off the national team camp on Tuesday accused head coach Abdullah Almutairi of creating an ugly scenario out of nothing.\"It was not a big issue and we just wanted proper accommodation during the national team training,\" said the footballers at a press meet today. \"Rohit Chand was expelled from the camp for raising the voice on our behalf and we wanted to talk to the coach on the issue. But he asked us to leave the camp time and again apart from threatening us with bringing in new players in our place instead of resolving the issue,\" they said.Chand, Sujal Shrestha, Ananta Tamang, Bimal Gharti Magar, Anjan Bista, Bishal Shrestha, Bishal Rai, Dinesh Rajbanshi, Tej Tamang and Suman Lama had left the team hotel on Tuesday night after coach Almutairi issued the order.', 'Sports', '2022-05-05 10:02:17'),
(12, 'Xavi urges Barcelona to find motivation to finish second in LaLiga', 'Barcelona are a team that are used to finishing in first place but now must find the motivation to ensure they end the season second behind arch rivals Real Madrid in LaLiga, manager Xavi said.Barca\'s 1-0 defeat to Rayo Vallecano at the Camp Nou on Sunday marked the first time the club had lost three straight home games and all but sealed the league for rivals Real Madrid.Real Madrid now need only one point from their last five games to secure the title, while Barcelona are second on 63 points, level with Sevilla. Barcelona were also eliminated from the Europa League earlier this month.\"We were all fired up with the great run in the league and the Europa League,\" Xavi told reporters.', 'Sports', '2022-05-05 10:02:45');

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
('', '0', 9500, '2022-05-04');

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
(3, 'Ashim', 'Baral', 'ashim@mail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 502642),
(7, 'Suyogya', 'Gautam', 'suyogya@mail.com', '202cb962ac59075b964b07152d234b70', 11729),
(12, 'Ashim', 'Baral', 'reachashim@gmail.com', '202cb962ac59075b964b07152d234b70', 874286),
(13, 'Suyogya', 'Gautam', 'gsuyogya@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(14, 'Biraj', 'Dulal', 'biraj.dulal@heraldcollege.edu.np', '5d41402abc4b2a76b9719d911017c592', 525994);

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
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`uid`);

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
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
