-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 30, 2017 at 08:31 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `rmsolution`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `academic`
-- 

CREATE TABLE `academic` (
  `userid` int(255) NOT NULL auto_increment,
  `university` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cpi` float NOT NULL,
  `semester` int(8) NOT NULL,
  `experience` int(30) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `academic`
-- 

INSERT INTO `academic` (`userid`, `university`, `institute`, `branch`, `degree`, `status`, `cpi`, `semester`, `experience`) VALUES 
(3, 'GTU', 'IIT Bombay', 'Informantion Technology', 'M.E/M.Tech', 'pursuing', 4.06, 2, 0),
(5, 'GTU', 'Silver Oak', 'Informantion Technology', 'B.E/B.Tech', 'pursuing', 6.8, 5, 0),
(6, 'kkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkk', 'Computer science', 'M.E/M.Tech', 'pursuing', 4.05, 6, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `account`
-- 

CREATE TABLE `account` (
  `username` varchar(20) collate latin1_general_ci NOT NULL,
  `firstname` varchar(25) collate latin1_general_ci NOT NULL,
  `lastname` varchar(25) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(30) collate latin1_general_ci NOT NULL,
  `MobileNo` varchar(11) collate latin1_general_ci NOT NULL,
  `userid` varchar(15) collate latin1_general_ci NOT NULL,
  `s/n` int(11) NOT NULL auto_increment,
  `last_login` date NOT NULL,
  PRIMARY KEY  (`s/n`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `account`
-- 

INSERT INTO `account` (`username`, `firstname`, `lastname`, `email`, `password`, `MobileNo`, `userid`, `s/n`, `last_login`) VALUES 
('Rain', 'Admin', 'Boss', 'admin@me.com', '123456', '08012345678', 'Admin01', 1, '2017-05-23'),
('', '', '', '', '', '', '', 3, '2023-05-17'),
('', '', '', '', '', '', '', 4, '2023-05-17'),
('', '', '', '', '', '', '', 5, '2023-05-17'),
('', '', '', '', '', '', '', 6, '2023-05-17');

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `adminid` int(255) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`adminid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`adminid`, `email`, `password`) VALUES 
(3, 'ashish@yahoo.in', '123123123'),
(9, 'krupal@gmail.com', '10101010'),
(11, 'krupal1010@gmail.com', '1010101010');

-- --------------------------------------------------------

-- 
-- Table structure for table `personal`
-- 

CREATE TABLE `personal` (
  `userid` int(255) NOT NULL auto_increment,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `state` varchar(255) NOT NULL,
  `statespecify` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `cityspecify` varchar(255) NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `personal`
-- 

INSERT INTO `personal` (`userid`, `firstname`, `middlename`, `lastname`, `gender`, `birthdate`, `state`, `statespecify`, `city`, `cityspecify`, `last_login`) VALUES 
(3, 'jainam', 'hsbhai', 'shah', 'male', '2014-03-31', 'Goa', '', 'Agra', '', '0000-00-00'),
(5, 'krupal', 'harshadbhai', 'shah', 'male', '1994-01-26', 'Gujarat', '', 'Ahmedabad', '', '0000-00-00'),
(6, 'krupal', 'kkkkkkkkkkk', 'kkkkkkk', 'male', '2014-05-20', 'Chandigarh', '', 'Mumbai', '', '0000-00-00'),
(7, 'krupal', 'kkkkkkkkkkk', 'kkkkkkkkkk', 'male', '2014-05-13', 'Gujarat', '', 'Alleppey', '', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Table structure for table `requirement`
-- 

CREATE TABLE `requirement` (
  `postname` varchar(255) NOT NULL,
  `vacancies` int(255) NOT NULL,
  `reqexperience` int(255) NOT NULL,
  `minsalary` int(255) NOT NULL,
  `maxsalary` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `requirement`
-- 

INSERT INTO `requirement` (`postname`, `vacancies`, `reqexperience`, `minsalary`, `maxsalary`) VALUES 
('Web Developer', 20, 2, 26000, 28000),
('Mobile App Developer', 7, 5, 4000, 6000),
('DataBase Administrator', 2, 5, 21500, 24500),
('Search Engine Optimizer', 5, 4, 3000, 6000),
('Product Manager', 4, 7, 13000, 15000),
('HR Manager', 3, 0, 3000, 6000);
