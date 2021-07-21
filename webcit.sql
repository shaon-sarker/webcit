-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 08:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcit`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `about_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `description`, `about_pic`) VALUES
(1, 'Web Design', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse', '1.svg'),
(2, 'Our Misson ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.', '2.svg'),
(3, 'Responsive Design ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.', '3.svg');

-- --------------------------------------------------------

--
-- Table structure for table `aboutsright`
--

CREATE TABLE `aboutsright` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `aboutr_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutsright`
--

INSERT INTO `aboutsright` (`id`, `heading`, `description`, `aboutr_pic`) VALUES
(1, 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.', '1.svg'),
(2, 'Creative Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.', '2.svg'),
(3, '24/7 Live Support', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.', '3.svg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin54@gmail.com', '$2y$10$ZMvyJhaZYRX2iXm1sNxJfuogWSbvNbZWs7PHNp4TguGNU.sCUbCGS', 'Admin'),
(2, 'modarator45', 'modarator78@gmail.com', '$2y$10$vaOj0XkegeDowqeeIdA/LepSxJVDGO2iTm0r1xPlTdgjPnENaQLiC', 'Moderator');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_pic` varchar(50) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_pic`, `blog_title`, `blog_date`, `blog_descrip`) VALUES
(1, '1.jpg', 'Responsive Web Design', '2021-07-09', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,'),
(2, '2.jpg', 'Admin Template', '2021-07-10', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,'),
(3, '3.jpg', 'React Form Validation', '2021-07-11', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,'),
(4, '4.jpg', 'Wordpress Website', '2021-07-12', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,'),
(5, '5.jpg', 'App Landing Website', '2021-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`) VALUES
(1, 'Web Design'),
(2, ' Development'),
(3, 'Graphic Design'),
(4, 'Mobile Apps');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Michael S. Martin', 'Michael@gmail.com', 'WEB Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 0),
(2, 'Michael S. Martin', 'admin@gmail.com', 'WEB Dvelopment', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 0),
(3, 'Michael', 'Michael@gmail.com', 'Graphic Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `feedback_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `description`, `title`, `feedback_img`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Smith', '1.svg'),
(2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'Timothy J. Lapp', '2.svg'),
(3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'Rosemary D. Lilly', '3.svg'),
(4, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'Maria T. Jacobs', '4.svg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_pic`) VALUES
(1, '1.png'),
(2, '2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `sub_head` int(11) NOT NULL,
  `plan_title1` varchar(100) NOT NULL,
  `plan_title2` varchar(100) NOT NULL,
  `plan_title3` varchar(100) NOT NULL,
  `plan_title4` varchar(100) NOT NULL,
  `plan_title5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `heading`, `sub_head`, `plan_title1`, `plan_title2`, `plan_title3`, `plan_title4`, `plan_title5`) VALUES
(1, 'STANDARED', 30, '20 GB Disk Space', '200 GB Monthly Bandwith', '30 Email Accounts', 'Unlimited Subdomains', '24/7 Support'),
(2, 'BUSINESS', 60, '30 GB Disk Space', '300 GB Monthly Bandwith', '40 Email Accounts', 'Unlimited Subdomains', '24/7 Support'),
(3, 'PREMIUM', 70, '70 GB Disk Space', '400 GB Monthly Bandwith', '50 Email Accounts', 'Unlimited Subdomains', '24/7 Support'),
(4, 'ULTIMATE', 300, '80 GB Disk Space', '500 GB Monthly Bandwith', '70 Email Accounts', 'Unlimited Subdomains', '24/7 Support');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_pic` varchar(50) NOT NULL,
  `project_no` int(11) NOT NULL,
  `project_head` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_pic`, `project_no`, `project_head`) VALUES
(1, '1.svg', 250, 'Total Employee'),
(2, '2.svg', 300, 'Projects'),
(3, '3.svg', 300, 'Expert Team'),
(4, '4.svg', 150, 'Clients');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_pic` varchar(50) NOT NULL,
  `service_head` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_pic`, `service_head`, `description`) VALUES
(1, '1.svg', 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !'),
(2, '2.svg', 'Web Hosting', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !'),
(3, '3.svg', 'Wordpress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !'),
(4, '4.svg', 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !'),
(5, '5.svg', 'UI/UX Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !'),
(6, '6.svg', 'Graphic Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(50) NOT NULL,
  `percentage` int(11) NOT NULL,
  `skill_title` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `percentage`, `skill_title`) VALUES
(1, 'Web Design', 80, 80),
(2, 'Web Development', 60, 60),
(3, 'Graphic Design', 40, 40),
(4, 'UI/UX Design', 50, 50),
(5, 'Wordpress', 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `button` varchar(50) NOT NULL,
  `slider_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `description`, `button`, `slider_pic`) VALUES
(1, 'We are Creative Web Staff', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', 'Read More', '1.jpg'),
(2, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'More Info', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` int(11) NOT NULL,
  `slide_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `slide_pic`) VALUES
(1, '1.svg'),
(2, '2.svg'),
(3, '3.svg'),
(4, '4.svg'),
(5, '5.svg'),
(6, '6.svg'),
(7, '7.svg'),
(8, '8.svg');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `team_pic` varchar(50) NOT NULL,
  `team_heading` varchar(100) NOT NULL,
  `team_subhead` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_pic`, `team_heading`, `team_subhead`, `description`) VALUES
(1, '1.jpg', 'HERMAN MILLER', 'Web Developer', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.'),
(2, '2.jpg', 'Aaron H. Roloff', 'Web Designer', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.'),
(3, '3.jpg', 'Mary C. Dodson', 'Digital Marketing', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.'),
(4, '4.jpg', 'Sylvia E. Harper', 'Graphic Designer', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.'),
(5, '5.jpg', 'Robert J. Ostrander', 'UI/UX Designer', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.'),
(6, '6.jpg', 'Jhone DOe', 'Web Developer', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_title`) VALUES
(1, '1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `work_title` varchar(100) NOT NULL,
  `work_subtitle` varchar(100) NOT NULL,
  `work_photo` varchar(50) NOT NULL,
  `category_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `work_title`, `work_subtitle`, `work_photo`, `category_no`) VALUES
(1, 'Enter Project Title', 'Web Design', '1.jpg', 1),
(2, 'Enter Project Title', 'Web Design', '2.jpg', 1),
(3, 'Enter Project Tittle', 'Web Development', '3.jpg', 2),
(4, 'Enter Project Title', 'Web Development', '4.jpg', 2),
(5, 'Enter Project Title', 'Graphic Design', '5.jpg', 3),
(6, 'Enter Project Title', 'Mobile Aops', '6.jpg', 4),
(7, 'Wordpress', 'Wordpress Work', '7.jpg', 4),
(8, 'Graphic Design', 'Graphics Design Works', '8.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutsright`
--
ALTER TABLE `aboutsright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutsright`
--
ALTER TABLE `aboutsright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
