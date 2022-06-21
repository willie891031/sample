-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cs_data`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `Name` text NOT NULL,
  `Cid` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` text NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `E-mail` text NOT NULL,
  `Birthday` date NOT NULL,
  `frequency` int(11) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `customer`
--

INSERT INTO `customer` (`Name`, `Cid`, `Password`, `Phone`, `E-mail`, `Birthday`, `frequency`, `Address`) VALUES
('AA', 'AA', '11', '', '', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- 資料表結構 `employee`
--

CREATE TABLE `employee` (
  `Name` text NOT NULL,
  `Eid` int(10) NOT NULL,
  `Password` text NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `E-mail` text NOT NULL,
  `Birthday` date NOT NULL,
  `Position` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `Cid` text NOT NULL,
  `Eid` text NOT NULL,
  `C_m` varchar(500) NOT NULL,
  `E_m` varchar(500) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `problem`
--

CREATE TABLE `problem` (
  `Title` text NOT NULL,
  `Type` text NOT NULL,
  `Text` text NOT NULL,
  `Satisfaction` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
