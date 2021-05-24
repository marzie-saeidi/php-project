-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 09:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-content`
--

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(20) NOT NULL,
  `coment` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `coment`, `username`) VALUES
(1, 'همچنین پروانه ها با پای خود مزه را احساس میکنند ', 'mehran'),
(2, 'خوردن آب برای کلیه ها بسیار مفید می باشد', 'ali'),
(3, '!!!جالب بود', 'ali'),
(8, '!بسیار عالی بود', 'mehran'),
(9, '!دنیای وب پر از آموختنی هاست', 'mehran'),
(10, '!!!جالب بود', 'mehran');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(50) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `matn` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `firstname`, `lastname`, `title`, `matn`, `time`, `category`, `username`) VALUES
(1, 'ali', 'javadi', 'nutrition', '!!.حدود ۶۰ درصد وزن بدن انسان آب است. آب نقش تعیین کننده ای تقریبا در تمامی واکنش های شیمیایی بدن دارد. بدن انسان نمیتواند آب را در خود محبوس کند پس شما ناچارید آبی را که از طرق مختلف از دست میدهید جبران کنیدهر انسان باید روزی هشت لیوان آب مصرف کند ', '2021-05-20 19:03:26', 'sports', 'ali'),
(2, 'marjan', 'saeedi', 'Islamic medication', 'طب در مجموع به هرچیزی که بتواند در راستای سلامتی انسان مؤثر باشد، چه در درمان جسم و چه در درمان روح، گفته می‎شود که همگی توسط پروردگار تبارک و تعالی در طول قرون گذشته هدایت شده، گرچه به نام دانشمندان متفاوت ثبت باشد. ', '2021-05-20 19:03:26', 'Health', 'marjan'),
(3, 'mehran', 'safdari', 'web', 'اگر در دنیای وب تازه کار باشید و به تازگی وارد دنیای برنامه نویسی شده باشید، حتما واژه‌ی طراحی وب را بارها و بارها شنیده اید. و حتما این سوال برایتان پیش آمده است که طراحی وب چیست . شاید هم هنوز نتوانسته اید تفاوت واژه های طراحی وب را با برنامه نویسی وب ', '2021-05-20 20:18:46', 'software', 'mehran'),
(4, 'sima', 'hamidi', 'Knowledge', 'پروانه‌ها با پای خود مزه را احساس می‌کنند. شتر در هنگام تشنگی می‌تواند ۹۵ لیتر آب را در کمتر از ۳ دقیقه بنوشد. تعداد افرادی که سالانه از نیش زنبور می‌میرند بیشتر از کسانی است که سالانه از نیش مار می‌میرند. وزن اسکلت انسان بالغ ۱۳ تا ۱۵ کیلوگرم است.', '2021-05-23 16:24:19', 'Scientific', 'simaa'),
(5, 'marzie', 'saeidi', 'Skin care', 'نیازی نیست که از آفتاب فرار کنید یا بترسید. سعی کنید که مدت طولانی در معرض آفتاب مستقیم نباشید. به ویژه بین ساعات ۱۰ صبح تا ۳ بعد از ظهر که پرتوهای مضر بیشترند.', '2021-05-23 20:52:02', 'Beauty', 'marzie');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` int(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `username`) VALUES
(1, 'marzie', 'saeidi', 'saeidi_marzie@yahoo.com', 7, 'marzie'),
(2, 'marjan', 'saeedi', 'marjan@yahoo.com', 482, 'marjan'),
(3, 'reza', 'jafari', 'jsdksjds@yahoo.com', 0, 'reza'),
(4, 'ali', 'javadi', 'ali@gmail.com', 31, 'ali'),
(5, 'maryam', 'jalali', 'maryam@gmail.com', 0, 'maryam'),
(6, 'mehran', 'safdari', 'mehran@yahoo.com', 7, 'mehran'),
(7, 'sima', 'hamidi', 'sima@gmail.com', 0, 'simaa'),
(8, 'hamed', 'hamedi', 'hamed@yahoo.com', 7, 'hamed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `category` (`category`),
  ADD UNIQUE KEY `username_3` (`username`),
  ADD UNIQUE KEY `username_4` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
