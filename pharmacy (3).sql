-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2022 at 04:53 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `card_name` varchar(15) NOT NULL,
  `card_number` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `firstname`, `email`, `address`, `city`, `district`, `postal_code`, `card_name`, `card_number`, `date`) VALUES
(37, 'mayumi', 'mayumi@gmail.com', 'karapitiya', 'galle', 'galle', 8080, 'credit', 'mayni', '2021-09-04'),
(91, 'sato', 'satoru@gmail', 'gggg', 'galle', '2323', 3434, 'bbb', '3333333333', '2022-01-24'),
(93, 'sato', 'satoru@gmail', 'gggg', 'galle', 'GALLE', 3434, 'ttt', '5555555555', '2022-01-24'),
(48, 'mayumi', 'mayumi@gmail.com', 'karapitiya', 'galle', 'galle', 8080, 'credit', '23446758', '2021-10-20'),
(62, 'Malsha Bopage', 'malsha7bopage@gmail.com', 'Waddurabmge ,Watta ,Narawala Poddala', 'Galle', 'Galle', 8080, 'credit', '3049578936', '2021-10-20'),
(70, 'Malsha Bopage', 'mal@gmail.com', 'Waddurabmge ,Watta ,Narawala Poddala', 'Galle', 'Galle', 8080, 'credit', '56779905', '2021-10-23'),
(71, 'Malsha Bopage', 'mal@gmail.com', 'Waddurabmge ,Watta ,Narawala Poddala', 'Galle', 'Galle', 8080, 'credit', '56779905', '2021-10-23'),
(72, 'Malsha Bopage', 'mal@gmail.com', 'Waddurabmge ,Watta ,Narawala Poddala', 'Galle', 'Galle', 8080, 'credit', '56779905', '2021-10-23'),
(73, 'Malsha Bopage', 'mal@gmail.com', 'Waddurabmge ,Watta ,Narawala Poddala', 'Galle', 'Galle', 8080, 'credit', '56779905', '2021-10-23'),
(78, 'jayani senarathne', 'jaya@gmail.com', 'kalegana', 'galle', 'galle', 8080, 'credit', '203948134', '2021-10-23'),
(83, 'Malsha Bopage', 'nilu@gmail.com', 'Waddurabmge ,Watta ,Narawala Poddala', 'Galle', 'Galle', 8080, 'debit', '34676', '2021-11-03'),
(84, 'Malsha Bopage', 'nilu@gmail.com', 'Waddurabmge ,Watta ,Narawala Poddala', 'Galle', 'Galle', 8080, 'debit', '34676', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `com_id` varchar(50) NOT NULL,
  `com_name` varchar(70) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_name`) VALUES
('L0023456W', 'Astrosenecha'),
('L0023678BW', 'GlaxioSmithKline Plc'),
('L0023623RW', 'Pfizer'),
('L0023678SW', 'Sanofi'),
('L0023679MW', 'Cipla'),
('L00209876JW', 'Jhonson & Jhonson'),
('L00256789SEW', 'Kioxi'),
('L00256789SEZ', 'Zixio'),
('L00256789SEQ', 'Axioz'),
('L00656789SEZ', 'Zixiod'),
('L00656489SEZ', 'Zixiode');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_position` varchar(50) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_position`) VALUES
(1, 'Kasun gamage', 'Pharmacist'),
(21, 'Sadunika herath', 'Pharmacist'),
(24, 'Dinuka Subasinghe', 'Deliveryman'),
(34, 'Nadun  Pathirana', 'Deliveryman'),
(91, 'Hasaranga gamage', 'Pharmacist'),
(13, 'Dilruka Gamage', 'Pharamacist'),
(92, 'Vidu Gamage', 'Deliveryman'),
(93, 'Niduk', 'Deliveryman'),
(94, 'Dilru Gamage', 'Pharamacist');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `total` double(10,2) NOT NULL,
  `notes` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `tel`, `total`, `notes`) VALUES
(5, 'sato', 'satoru@gmail', '1234454545', 70.00, 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `prescript`
--

DROP TABLE IF EXISTS `prescript`;
CREATE TABLE IF NOT EXISTS `prescript` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `deliver` varchar(50) NOT NULL,
  `patient` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `item_image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `allergy` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescript`
--

INSERT INTO `prescript` (`id`, `name`, `contact`, `address`, `deliver`, `patient`, `age`, `item_image`, `gender`, `allergy`, `date`, `status`) VALUES
(1, 'mayumi', '', '', 'Galle', 'jayani', 24, '124776_102_1160_MTQ3NzM2NDMwMTE0ODAwNzYwMjk.jpg', 'f', 'yes', '2022-01-12', 'done'),
(2, 'Malsha ', '', '', 'Matara', 'Jayani', 30, 'Blooming-Magic.jpg', 'f', 'No', '2021-12-21', 'pending'),
(3, 'mayumi', '0772343545', 'No5,wakwella road', 'Galle', 'Jaya', 25, '1305565467375.jpg', 'f', 'No', '2021-12-31', 'pending'),
(4, 'dulmi', '0772343544', 'poddala', 'Galle', 'malsha', 23, 'class digrm.png', 'f', 'No', '2022-01-01', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(225) DEFAULT NULL,
  `item_image` varchar(225) DEFAULT NULL,
  `item_price` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item_id`, `item_name`, `item_image`, `item_price`) VALUES
(1, 12, 'Nexium 20mg', 'i-m-2292-nexium-esomeprazole-20mg-tablets.jpeg', 50.00),
(2, 11, 'Fexet 180mg', 'fexet 180mg.jfif', 150.00),
(3, 10, 'Atorem 20mg', 'atorem 20mg.jfif', 47.00),
(4, 9, 'Atrova 10mg - 30 tablets', 'atorva-10-mg-30-tablets-.jpg', 100.00),
(5, 8, 'Nexium 40mg', 'i-m-2293-nexium-esomeprazole-40mg-tablets.jpeg', 100.00),
(6, 7, 'Eclar 60ml', 'eclar.jfif', 80.00),
(7, 6, 'Ezium 20mg', 'ezium 20mg.jfif', 75.00),
(8, 5, 'Ezium 40mg', 'ezium 40mg.jpg', 150.00),
(9, 4, 'Zaart 50mg', 'zaart tb.jfif', 149.75),
(10, 3, 'Lorax 10mg', 'lorax 10mg.png', 75.50),
(11, 2, 'Lomac 20mg', 'lomac 20mg.jfif', 67.50),
(23, 28, 'kioxiq', 'c4df04127fd45368e89008b4f65a47f6 new3.jpg', 70.00);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(50) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `Password`, `Age`, `Contact`, `Email`, `Address`, `Gender`, `City`) VALUES
('malsha', 'qwettyu', '21', 91234556, 'malsha7bopage@gmail.com', 'poddala', 'F', 'Galle'),
('jayani', 'asdfhjk', '22', 91456987, 'jayani@gmail.com', 'kalegana', 'F', 'Galle'),
('lakshani', '1234qwer', '23', 78987654, 'lakshani@gmail.com', 'karapitiya', 'F', 'Galle'),
('kavi', 'kavi123', '21', 91234567, 'kavi@gmail.com', 'kalegana', 'F', 'Galle'),
('user1', 'user1', '23', 789986569, 'aam@gmail.com', 'ko;hio;gyu;ihigtyfyu', 'M', 'Galle'),
('admin', 'admin123', '21', 78123445, 'mij@gmail.com', 'galle', 'F', 'Galle'),
('Nilushi', 'nilu', '23', 77126544, 'nilu@gmail.com', 'Karagoda', 'F', 'Galle'),
('u', 'weiukfj', '25', 2123445653, 'um@gmail.com', 'rntkgntt', 'M', 'Galle'),
('dilmi', 'whjgkxcv', '21', 1233454657, 'dilmi1@gmail.com', 'glffg', 'F', 'Matara'),
('dimuthu', 'dliu123', '24', 772369201, 'dil@gmail.com', 'karagoda', 'f', 'Galle'),
('rithu', 'rithu67', '23', 782347651, 'rith@gmail.com', 'karagoda', 'f', 'Matara'),
('NETHMA', 'NETH456', '24', 913457848, 'neth@gmail.com', 'wakwella', 'f', 'Galle'),
('niroshi', 'niro567', '34', 912348753, 'niro@gmail.com', 'wakwellq', 'm', 'Galle'),
('rty', 'rtyu67', '23', 978452341, 'rty@gmail.com', 'akuressa', 'm', 'Matara'),
('HIRU', 'hiruuu45', '23', 772345673, 'hiru@gmail.com', 'wadurabma', 'f', 'Galle'),
('methma', 'meth567', '26', 781236521, 'methu@gmail.com', 'karapitiya', 'f', 'Galle'),
('malmi', 'mal123', '23', 771235432, 'mal12@gmail.com', 'karapitiya', 'f', 'Galle'),
('dil', 'dil123', '24', 771222223, 'dil@gmail.com', 'baddegama', 'f', 'Baddegama');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `usertype`) VALUES
('admin', 'add123', 'admin'),
('user', 'user1', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
