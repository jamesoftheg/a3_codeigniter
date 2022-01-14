-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2021 at 04:32 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab3`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(140) NOT NULL,
  `answer_a` varchar(50) NOT NULL,
  `answer_b` varchar(50) NOT NULL,
  `answer_c` varchar(50) NOT NULL,
  `answer_d` varchar(50) NOT NULL,
  `correct_answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `correct_answer`) VALUES
(1, 'What is the capital of Australia', 'Sydney', 'Melbourne', 'Canberra', 'Brisbane', 'Canberra'),
(2, 'What is the largest island in the world', 'Iceland', 'Borneo', 'Australia', 'Greenland', 'Greenland'),
(3, 'What is the largest city in the world by population', 'Shanghai', 'Tokyo', 'Sao Paulo', 'Delhi', 'Tokyo'),
(4, 'What is the deepest lake in the world', 'Lake Baikal', 'Crater Lake', 'Lake Superior', 'Lake Tanganyika', 'Lake Baikal'),
(5, 'What is the capital of Croatia', 'Rijeka', 'Zagreb', 'Dubrovnik', 'Trieste', 'Zagreb'),
(6, 'Who is the greatest actor in the world', 'Steve Buscemi', 'Steve Buscemi', 'Steve Buscemi', 'Steve Buscemi', 'Steve Buscemi'),
(7, 'What is the closest planet to all others', 'Mercury', 'Mars', 'Earth', 'Venus', 'Mercury'),
(8, 'What country won the very first FIFA World Cup in 1930', 'Uruguay', 'Italy', 'Spain', 'Brazil', 'Uruguay'),
(9, 'What year was the very first model of the iPhone released', '2005', '2006', '2007', '2008', '2007'),
(10, 'What is the name of the person who launched eBay', 'Pierre Omidyar', 'Elon Musk', 'Bill Gates', 'Jeff Bezos', 'Pierre Omidyar'),
(11, 'Who was the first woman to win a Nobel Prize', 'Hedy Lamarr', 'Marie Curie', 'Ada Lovelace', 'Selma Ottilia Lovisa Lagerlof', 'Marie Curie'),
(12, 'What American state is largest by area', 'Texas', 'California', 'Alaska', 'New York', 'Alaska'),
(13, 'How many films did Sean Connery play James Bond in', 'Five', 'Six', 'Seven', 'Eight', 'Seven'),
(14, 'Which mammal has no vocal cords', 'Giraffe', 'Orca', 'Cheetah', 'Horse', 'Giraffe'),
(15, 'What name is used to refer to a group of frogs', 'A squadron', 'An army', 'A unit', 'A fleet', 'An army');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
