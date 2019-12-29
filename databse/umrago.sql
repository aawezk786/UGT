-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 02:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umrago`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_contact` varchar(255) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`, `agent_name`, `agent_contact`, `agent_email`, `agent_password`) VALUES
(1, 'Aawez Khan', '8108481831', 'aawezk456@gmail.com', 'a7aceb9480c5cb1ab2d76c7b8a9c3468'),
(2, 'Junaid', '9867270324', 'junaidfkhan786@gmail.com', 'd2bf9130317bba494fc4b5b28837b525');

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `airlines_id` int(11) NOT NULL,
  `organizer_id` varchar(255) NOT NULL,
  `airlines_name` varchar(255) NOT NULL,
  `duo_price` varchar(255) NOT NULL,
  `trio_price` varchar(255) NOT NULL,
  `quad_price` varchar(255) NOT NULL,
  `quint_price` varchar(255) NOT NULL,
  `0_2year_child` varchar(255) NOT NULL,
  `2_6year_child` varchar(255) NOT NULL,
  `6_12year_child` varchar(255) NOT NULL,
  `return_ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airlines_id`, `organizer_id`, `airlines_name`, `duo_price`, `trio_price`, `quad_price`, `quint_price`, `0_2year_child`, `2_6year_child`, `6_12year_child`, `return_ticket`) VALUES
(1, 'sam@gmail.com', 'Saudia (SVA)', '70000', '50000', '40000', '20000', '10000', '15000', '20000', '1'),
(3, 'sam@gmail.com', 'Saudigulf (6s)', '12233', '232333', '32323', '1232323', '54546', '64566', '4564565', '2'),
(4, 'aawezk786@gmail.com', 'Saudigulf (6s)', '121211', '21212', '121212', '1212233', '1111', '34234', '433434', '1');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `organizer_id` int(11) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `organizer_contact` varchar(255) NOT NULL,
  `organizer_email` varchar(255) NOT NULL,
  `organizer_companyname` varchar(255) NOT NULL,
  `organizer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`organizer_id`, `organizer_name`, `organizer_contact`, `organizer_email`, `organizer_companyname`, `organizer_password`) VALUES
(1, 'Aawez', '8108481831', 'aawezk456@gmail.com', 'UGT', 'd91f93791be1df2d505ed819f6ce2c0e'),
(2, 'Zewaa', '9152457013', 'aawezk786@gmail.com', 'UGT', '4297f44b13955235245b2497399d7a93'),
(3, 'Sameer Khan', '9980675464', 'sam@gmail.com', 'ITUS', '4297f44b13955235245b2497399d7a93'),
(4, 'kshiraj', '9004879919', 'khjgfkhjgf@gm.cp', 'khjgkjhg', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` int(11) NOT NULL,
  `organizer_id` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `no_of_days` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `travel_date` date NOT NULL,
  `return_date` date NOT NULL,
  `last_date` date NOT NULL,
  `hotel_makkah` varchar(255) NOT NULL,
  `hotel_makkah_dist` varchar(255) NOT NULL,
  `hotel_madina` varchar(255) NOT NULL,
  `hotel_madina_dist` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `include_taxes` varchar(255) NOT NULL,
  `miscellaneous` varchar(255) NOT NULL,
  `luggage` varchar(255) NOT NULL,
  `routes` varchar(255) NOT NULL,
  `transportation` varchar(255) NOT NULL,
  `breakfast` varchar(255) NOT NULL,
  `lunch` varchar(255) NOT NULL,
  `dinner` varchar(255) NOT NULL,
  `hotel_pics` varchar(255) NOT NULL,
  `food_pics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `organizer_id`, `package_name`, `source`, `destination`, `no_of_days`, `category`, `total_seats`, `available_seats`, `travel_date`, `return_date`, `last_date`, `hotel_makkah`, `hotel_makkah_dist`, `hotel_madina`, `hotel_madina_dist`, `package_price`, `include_taxes`, `miscellaneous`, `luggage`, `routes`, `transportation`, `breakfast`, `lunch`, `dinner`, `hotel_pics`, `food_pics`) VALUES
(1, 'aawezk456@gmail.com', 'November Budget Package', 'Mumbai', 'Jeddah', '14 Days', 'Budget', 50, 45, '2019-12-27', '2020-01-04', '2019-12-17', 'Hotel Palistine', '600m', 'Hotel Madina', '1km', '60000', '', 'Laundary,Zam_zaam,Wifi', '', 'Direct', 'Bus', 'Butter,Jam', 'Kheema_Gurda,Bread_roti', 'Bread_roti,Omlet,Water', 'hotel.jpg', 'khema.jpg'),
(2, 'aawezk456@gmail.com', 'December Delux Package', 'Mumbai', 'Jeddah', '14 Days', 'Budget', 50, 45, '2019-12-27', '2020-01-04', '2019-12-17', 'Hotel Pullman Zamzam', '2km', 'Hotel Dallah Taibah', '2km', '60000', '', 'Laundary,Zam_zaam,Wifi', '', 'Direct', 'Bus', 'Butter,Jam', 'Kheema_Gurda,Bread_roti', 'Bread_roti,Omlet,Water', 'hotel.jpg', 'khema.jpg'),
(3, 'sam@gmail.com', 'January Delux Package', 'Delhi', 'Jeddah', '15 days', 'Delux', 40, 20, '2020-01-01', '2020-01-03', '2020-01-04', 'Hotel makkah', '1.5km', 'hotel madina', '1.5km', '70000', 'include all taxes', 'Laundary,Zam_zaam,Wifi', '20 KG', 'Direct', 'Cab', 'Butter,Honey,tea', 'Kheema_Gurda', 'Bread_roti,Omlet,Water', 'cap.jpg', 'under.jpg'),
(4, 'sam@gmail.com', 'February Economic Package', 'Banglore', 'Jeddah', '16 days', 'Economic', 30, 15, '2020-01-02', '2020-01-15', '2019-11-25', 'makkah', '600m', 'madina', '600m', '45000', 'include all taxes', 'Laundary,Zam_zaam,Wifi', '15 KG', 'Via', 'Bus', 'Bread_roti,Jam', 'Bread_roti,Omlet,Water', 'Kheema_Gurda,Bread_roti,Omlet,Zaitoon,Water', 'pexels-photo-271639.jpeg', 'pastaveg_640x480.jpg'),
(5, 'khjgfkhjgf@gm.cp', 'March Delux Package', 'Delhi', 'Jeddah', '14 Days', 'Delux', 24, 12, '2019-12-06', '2019-12-18', '2019-12-02', 'Hotel Raffles Makkah Palace', '200m', 'The Oberoi,Madina', '1 km', '60000', 'include all taxes', 'Laundary,Zam_zaam,Wifi', '211', 'Via', 'Bus', 'Kheema_Gurda', 'Kheema_Gurda', 'Kheema_Gurda', 'img1.jpeg', 'img3.jpg'),
(6, 'aawezk786@gmail.com', 'September Economic Package', 'Banglore', 'Jeddah', '15 days', 'Economic', 30, 10, '2019-12-17', '2019-12-25', '2020-01-01', 'Hotel Pullman Zamzam', '100m', 'Hotel Dallah Taibah', '10.2 km', '30000', 'include all taxes', 'Laundary,Zam_zaam,Wifi', '15 KG', 'Direct', 'Bus', 'Jam', 'Kheema_Gurda', 'Kheema_Gurda', 'hotel12.webp', 'snake.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `waitlist_agent`
--

CREATE TABLE `waitlist_agent` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_contact` varchar(255) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waitlist_organizer`
--

CREATE TABLE `waitlist_organizer` (
  `organizer_id` int(11) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `organizer_contact` varchar(255) NOT NULL,
  `organizer_email` varchar(255) NOT NULL,
  `organizer_companyname` varchar(255) NOT NULL,
  `organizer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`airlines_id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`organizer_id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waitlist_agent`
--
ALTER TABLE `waitlist_agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `waitlist_organizer`
--
ALTER TABLE `waitlist_organizer`
  ADD PRIMARY KEY (`organizer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `airlines_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `organizer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `waitlist_agent`
--
ALTER TABLE `waitlist_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waitlist_organizer`
--
ALTER TABLE `waitlist_organizer`
  MODIFY `organizer_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
