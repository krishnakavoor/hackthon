-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2025 at 12:35 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `helix`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `card_order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `name`, `tenant_id`, `stage_id`, `card_order`, `active`) VALUES
(1, 'Personal Information', 1, 1, 1, 1),
(2, 'Personal Information', 2, 2, 1, 1),
(3, 'Phone', 1, 1, 2, 1),
(4, 'Email', 1, 1, 2, 1),
(5, 'speciality ', 1, 1, 3, 1),
(6, 'speciality', 2, 1, 2, 1),
(7, 'Education Deatils', 1, 3, 1, 1),
(8, 'Collage', 2, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `type` enum('text','phone','number','date','textarea','radio','checkbox','email','select') NOT NULL,
  `name` varchar(100) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `param` json DEFAULT NULL,
  `min_length` int(11) DEFAULT NULL,
  `max_length` int(11) DEFAULT NULL,
  `is_mandatory` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `title`, `type`, `name`, `tenant_id`, `card_id`, `stage_id`, `param`, `min_length`, `max_length`, `is_mandatory`, `active`) VALUES
(1, 'First Name', 'text', 'firstname', 1, 1, 1, NULL, 3, 20, 1, 1),
(2, 'Last Name', 'text', 'lastname', 1, 1, 1, NULL, NULL, NULL, 1, 1),
(3, 'Owner First Name', 'text', 'firstname', 2, 2, 2, NULL, NULL, NULL, 1, 1),
(4, 'Owner Last Name', 'text', 'lastname', 2, 2, 2, NULL, NULL, NULL, 1, 1),
(5, 'Phone Number', 'phone', 'phonenumber', 1, 3, 1, NULL, NULL, NULL, 1, 1),
(6, 'Email', 'email', 'email', 1, 4, 1, NULL, NULL, NULL, 1, 1),
(7, 'Speciality', 'select', 'speciality', 1, 5, 1, '{\"Doctor\": \"Doctor\", \"Dentist\": \"Dentist\"}', NULL, NULL, 1, 1),
(8, 'Speciality Dental', 'select', 'speciality', 2, 6, 2, '{\"Oral\": \"Oral\", \"Dentist\": \"Dentist\", \"Ortho Dentist\": \"ortho Dentist\"}', NULL, NULL, 1, 1),
(9, 'Collage Name', 'text', 'collagename', 1, 7, 3, NULL, NULL, NULL, 1, 1),
(10, 'University Name', 'text', 'universityname', 2, 8, 5, NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fieldtype`
--

CREATE TABLE `fieldtype` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fieldtype`
--

INSERT INTO `fieldtype` (`id`, `name`, `type`, `active`) VALUES
(1, 'text', 'text box', 1),
(2, 'radio', 'radio button', 1),
(5, 'date', 'date field', 1),
(6, 'phone', 'phone field', 1),
(7, 'textarea', 'text area field', 1),
(8, 'select', 'select field', 1),
(9, 'checkbox', 'checkbox field', 1),
(10, 'toggle', 'toggle true or false', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `stage_order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`id`, `tenant_id`, `name`, `short_name`, `stage_order`, `active`) VALUES
(1, 1, 'General Information', 'general-information', 1, 1),
(2, 2, 'General Information', 'general-information', 1, 1),
(3, 1, 'Education', 'education', 2, 1),
(4, 2, 'Location', 'location', 2, 1),
(5, 2, 'Education', 'education', 3, 1),
(6, 1, 'Location', 'location', 3, 1),
(7, 1, 'Attestation', 'attestation', 4, 1),
(8, 2, 'Disclosure', 'disclosure', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `name`, `title`, `active`) VALUES
(1, 'lacare', 'lacare', 1),
(2, 'ameritas', 'Ameritas', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fieldtype`
--
ALTER TABLE `fieldtype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fieldtype`
--
ALTER TABLE `fieldtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
