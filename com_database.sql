-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 06:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `com_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `heading1` varchar(250) NOT NULL,
  `description1` longtext NOT NULL,
  `vision_description` longtext NOT NULL,
  `order_heading` varchar(250) NOT NULL,
  `order_description` longtext NOT NULL,
  `rates_heading` varchar(255) NOT NULL,
  `rates_description` longtext NOT NULL,
  `cancelation_cost_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`heading1`, `description1`, `vision_description`, `order_heading`, `order_description`, `rates_heading`, `rates_description`, `cancelation_cost_text`) VALUES
('Network Sign Language Interpreting', 'The pain itself is the love of the pain, the main ecological problems, but I give this kind of time to fall down, so that some great pain and pain. But if not the lake but the fun. Now the arrows, but the lake is the cartoon of life. For the choice of the thermal yeast to decorate the throat of the people. The nets and the Vikings were hungry and ugly. Now the throat of the kids is the pain of the disease You should always be monitored for the free therapy. Nor do I have any entrance to the sickness of the smooth running of laughter at the vengeful mi. To the allies, and to the home and to the great gods. Real estate now but not free. There is no quiver in the backyard to raise a lot of fans. Augue No bed at the weekend Love the earth tomorrow Elit kids dwell in the sad old age and netus and sickness. For the poisoned pot of course needs to be loved. The arrows are pure, but it is a lot of problems to achieve goals now. The life of the author of the game is to be selected from the bow. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Facilisis sed odio morbi quis commodo odio aenean sed adipiscing.', 'We give deaf people access to communication, information and networks, thereby contributing to their empowerment and inclusion in society.', 'order form', 'You can send us your request here. We will reply as soon as possible. Alternatively, you can send us an email to thiemeyer@netzwerk-gsd.ch or wuethrich@netzwerk-gsd.ch.', 'Our Tarrif', 'For more information and a quote, please contact the interpreter of your choice. You will receive an answer to your inquiry within 24 hours whenever possible.', '100% of the ordered interpreting time for cancellations under 24 hours, also applies to cuts on site.\r\n\r\n100% of the ordered interpreting time and travel time in the event of on-site cancellation.\r\n\r\n75% of the ordered interpreting time for cancellations of less than five working days.');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `heading`, `description`, `price`) VALUES
(1, 'Dolmetschleistung für öffentliche Institutionen und Kulturhäuser', 'Es wird mindestens eine Stunde verrechnet.\r\nFür Einsätze mit hohem Vorbereitungsaufwand wird nach Absprache eine Vorbereitungspauschale verrechnet.', '120');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading`, `description`) VALUES
(1, 'Öffentliche Institutionen', 'Wir dolmetschen in Schulen, Ämtern (z.B. RAV, IV), in öffentlichen\r\n            Spitälern, Landeskirchen, Polizei etc.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
