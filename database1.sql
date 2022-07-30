-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 10:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";














CREATE TABLE `offence` (
  `id` int(11) NOT NULL,
  `offence` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;







CREATE TABLE `reported_offence` (
  `id` int(11) NOT NULL,
  `offence_id` varchar(200) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `driver_license` varchar(300) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `officer_reporting` varchar(500) NOT NULL,
  `offence` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `reported_offence` (`id`, `offence_id`, `vehicle_no`, `driver_license`, `name`, `address`, `gender`, `officer_reporting`, `offence`, `date`) VALUES
(4, 'b99998', 'KA02E51234', '', 'Ashish', 'Jayanagar', 'Male', 'admin1', 'Speed Limit violation', '2018-11-14'),
(5, '5aa83b', '', '', 'raj', 'Channasandra,Bangalore', 'Male', 'rak', 'No seatbelt', '2018-11-14'),
(6, '49283e', 'efvefb', 'rrgtbgrb', 'brgebrbr', 'vijaynagar', 'Male', 'rak', 'Making calls while driving', '2018-11-14'),
(7, '3e622a', 'fghtrhj', 'ww', 'eefdf', 'cambodia', 'Male', 'rak', 'Speed Limit violation', '2018-11-14'),
(8, '626399', 'dfdsf', 'dfdsf', 'gdggfd', 'north pole', 'Male', 'rak', 'Riding Motorcycle without crash helmet', '2018-11-14'),
(9, 'e982b4', '45435353', '45345wf', 'sdfdsfds', 'iceland', 'Male', 'rak', 'Riding Motorcycle without crash helmet', '2018-11-14'),
(10, '2522a1', 'dfwe', 'fsf', 'pri', 'poland', 'Male', 'rak', 'Under age driving', '2018-11-14');






CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(300) NOT NULL,
  `site_desc` varchar(2000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `site_settings` (`id`, `site_name`, `site_desc`, `email`, `phone`, `address`, `city`, `country`) VALUES
(1, 'Traffic Offenses', 'Easy and efficient way to organize traffic offenses', 'admin@trafficdb.co.in', '9483963180', 'Channasandra,Bangalore', 'Bengaluru', 'India');







CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `position` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `user` (`id`, `user_id`, `name`, `username`, `pass`, `email`, `address`, `position`) VALUES
(1, '101c', 'Priyanka', 'admin1', 'pass', 'priyanka99@gmail.com', 'Uttarahalli,Bangalore,India', 'admin'),
(2, '102d', 'Rakshith', 'rak', 'pass', 'rak@gmail.com', 'Nagarbhavi,Bangalore,India', 'admin'),
(11, '404d', 'Tejas', 'tejas', 'pass', 'tejas@gmail.com', 'Bhopal,MP,India', 'officer'),
(23, '378y', 'Natasha', 'nat', 'pass', 'nat@gmail.com', 'Frazer Town,Bangalore,India', 'officer');







ALTER TABLE `reported_offence`
  ADD PRIMARY KEY (`id`,`offence_id`);




ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);






ALTER TABLE `reported_offence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;




ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;




ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

