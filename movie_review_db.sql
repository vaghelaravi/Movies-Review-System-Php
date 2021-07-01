-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 10:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_review_copy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cate_id` int(10) NOT NULL,
  `cate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cate_id`, `cate_name`) VALUES
(1, 'Action'),
(2, 'Romance'),
(3, 'Comedy'),
(4, 'Sports'),
(5, 'War'),
(6, 'Biopic'),
(7, 'Family');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movie_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `story_line` text NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `cate_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movie_id`, `name`, `story_line`, `release_date`, `image`, `cate_id`) VALUES
(1, 'Suryavanshi', 'Akshay Kumar Polish to save peeople', '2020-10-01', '1.jpg', 1),
(2, 'Dil Bechara', 'While struggling to survive, Manny and Kizie, who each have a terminal illness, fall in love with each other. Thereafter, the two try to spend the rest of their days being happy and staying positive.', '2020-10-08', 'Dil_Bechara_film_poster.jpg', 2),
(3, 'Housefull 4', 'Three brothers are set to marry three sisters. However, a peek into the distant past reveals to one of the brothers that their brides have been mixed up in their current reincarnation.', '2019-10-25', 'Housefull4.jpg', 3),
(4, 'M.S. Dhoni', 'M S Dhoni, a boy from Ranchi, aspires to play cricket for India. Though he initially tries to please his father by working for the Indian Railways, he ultimately decides to chase his dreams.', '2016-09-30', 'dhoni.jpg', 4),
(5, 'War', 'Kabir, a secret agent, goes rogue after a mission to catch a terrorist goes awry. However, his boss sends Khalid, another agent and his student, to track him down.', '2019-10-13', 'war.jpg', 5),
(6, 'Shakuntala Devi', 'Shakuntala Devi is a 2020 Indian Hindi-language biographical comedy-drama film written and directed by Anu Menon and produced by Sony Pictures Networks India and Vikram Malhotra under his banner Abundantia Entertainment', '2020-10-06', 'Shakuntala Devi.jpg', 6),
(7, 'Laxmmi Bomb', 'Laxmmi Bomb is an Indian Hindi-language comedy horror film written and directed by Raghava Lawrence in his Hindi directorial debut. It is a remake of the Tamil movie Muni 2: Kanchana and stars Akshay Kumar and Kiara Advani. Akshay Kumar plays the role of a transgender in the film', '2020-11-13', 'Laxmmi Bomb.jpg', 3),
(8, 'Hindi Medium', 'Raj and Mita yearn to get Pia, their daughter, educated from a reputed school. When they learn that their background is holding her back, they do everything to ensure that she gets into the school.', '2017-10-05', 'Hindi Medium.jpg', 7),
(9, 'Drive', 'Sushant Singh Rajput, Jacqueline Fernandez, Vikramjeet Virk and Sapna Pabbi star in this action film.', '2019-10-13', 'Drive.jpg', 1),
(10, 'Bhuj: The Pride of India', 'Bhuj: The Pride of India is an  Indian Hindi-language war action film directed, co-produced and written by Abhishek Dudhaiya', '2020-11-10', '123.jpg', 1),
(11, 'Kabir Singh', 'Kabir, a genius yet hostile medical student, falls in love with Preeti from his college. When Preeti\'s father spots the couple kissing, he opposes their relationship and decides to marry her off.', '2019-06-10', 'Kabir Singh.jpg', 2),
(12, 'Luka Chuppi', 'Guddu, a reporter, falls in love with Rashmi and they begin a live-in relationship. However, their life turns chaotic when their families assume that they have eloped.', '2019-03-01', 'Luka Chuppi.jpg', 2),
(13, '3 Idiots', 'Two friends are searching for their long lost companion. They revisit their college days and recall the memories of their friend who inspired them to think differently, even as the rest of the world called them \"idiots\".', '2009-10-05', '3 Idiots.jpg', 3),
(14, 'Dhamaal', 'Four lazy slacker conmen buddies who are jobless, homeless and broke learn about the secret of a hidden treasure from a dying thief and later embark on a race against time to find the mobster\'s buried treasure and claim it while being pursued by a determined police inspector who is hellbent to get the treasure all by himself.', '2007-10-13', 'Dhamaal.jpg', 3),
(15, 'Taare Zameen Par', 'An eight-year-old boy is thought to be a lazy trouble-maker, until the new art teacher has the patience and compassion to discover the real problem behind his struggles in school. ', '2007-05-03', 'Taare Zameen Par.jpg', 7),
(16, 'Shaadi Mein Zaroor Aana', 'Satyendra Mishra \"Rajkumar Rao\" and Aarti Shukla \"Kriti Kharbanda\" agree to get married arranged by their parents, after Satyendra Mishra get government job. Aarti Shukla, run away from their marriage. What life waits for them ahead?', '2018-10-14', 'Shaadi Mein Zaroor Aana.jpg', 7),
(17, 'Shuddh Desi Romance', 'A romantic comedy which tells the journey of three restless young people who junk society\'s syllabus for finding love and decide to follow their heart.', '2012-10-13', 'Shuddh Desi Romance.jpg', 2),
(18, 'Aashiqui 2 ', 'Rahul loses his fans and fame due to alcoholism. But he then decides to turn a small time singer into a rising star.', '2012-10-07', 'Aashiqui 2.jpg', 2),
(19, 'Dangal', 'Former wrestler Mahavir Singh Phogat and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression.', '2016-10-28', 'Dangal.jpg', 4),
(20, ' Lagaan:', 'The people of a small village in Victorian India stake their future on a game of cricket against their ruthless British rulers.', '2001-10-07', 'Lagaan Once Upon a Time in India.jpg', 4),
(21, 'GOLD ', 'The journey of a man who was instrumental in making India win its first Olympic gold medal as a free nation.', '2018-10-14', 'GOLD.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie_comments`
--

CREATE TABLE `tbl_movie_comments` (
  `id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movie_comments`
--

INSERT INTO `tbl_movie_comments` (`id`, `movie_id`, `user_name`, `comment`, `date`) VALUES
(1, 1, 'Ravi', 'gazab movie ho', '0000-00-00'),
(2, 8, 'Rav Vaghela', 'Out Standing Movie Must Watch ', '0000-00-00'),
(3, 13, 'Ravi Vaghela', 'Fully comedy drama movie\r\nmust watch', '0000-00-00'),
(4, 13, 'Jagat', '12345', '0000-00-00'),
(5, 4, 'Ravi ', 'ms dhoni great Movie', '0000-00-00'),
(6, 2, 'Ravi', 'niceee', '0000-00-00'),
(7, 1, 'DUMMY', 'hiiiiiiiiiiiiii', '0000-00-00'),
(8, 2, 'Ravi Vaghela', 'roktgiopritgpkrtg', '0000-00-00'),
(9, 1, 'Ravi Vaghela', 'fgfgfg', '2021-06-17'),
(11, 6, 'Ravi Vaghela', 'must watch this movie', '2021-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `Foreign Key` (`cate_id`);

--
-- Indexes for table `tbl_movie_comments`
--
ALTER TABLE `tbl_movie_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_movie_comments`
--
ALTER TABLE `tbl_movie_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`cate_id`) REFERENCES `tbl_category` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
