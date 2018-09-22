-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2018 年 09 月 07 日 09:20
-- 伺服器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `lb_table`
--
CREATE DATABASE IF NOT EXISTS `lb_table` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lb_table`;

-- --------------------------------------------------------

--
-- 表的結構 `book_data`
--

CREATE TABLE IF NOT EXISTS `book_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) NOT NULL,
  `book_isbn` varchar(255) NOT NULL,
  `book_writer` varchar(255) NOT NULL,
  `book_Introduce` varchar(255) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `book_addid` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 轉存資料表中的資料 `book_data`
--

INSERT INTO `book_data` (`id`, `book_name`, `book_isbn`, `book_writer`, `book_Introduce`, `book_id`, `book_addid`) VALUES
(3, '白雪公主', '1231564', '林', '4564891', '1234488979', '2018-08-22 13:08:48'),
(4, '白爛公主', '4569489', '兒', '15132', '8979489489', '2018-08-22 13:08:48'),
(5, '白癡公主', '1', '1', '1', '546161566', '2018-08-27 15:40:31'),
(6, '白白公主', '2', '2', '2', '28745834', '2018-08-27 15:41:06'),
(7, '白目公主', '5', '5', '5', '6456456', '2018-08-27 15:41:33'),
(8, '白削公主', '9', '9', '999', '456', '2018-08-27 15:42:42'),
(9, 'werwe', 'werwer', 'rwer', 'er', 'werwerw', '2018-08-27 15:43:06'),
(11, 'ergerg', 'rg', 'erge', 'gergreger', 'ergeger', '2018-08-27 15:43:32'),
(12, '小公主', '23225 65 65 ', '巴巴', '0123131', '77897', '2018-08-27 15:47:10'),
(13, '', '', '', '', '', '2018-08-27 15:48:11'),
(14, '123', '123', '123', '123', '123', '2018-08-29 12:50:12'),
(15, 'a', 'a', 'a', 'a', 'a', '2018-08-29 13:52:17');

-- --------------------------------------------------------

--
-- 表的結構 `lend_data`
--

CREATE TABLE IF NOT EXISTS `lend_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_rfid` varchar(255) NOT NULL,
  `lendtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '借閱時間',
  `endtime` datetime NOT NULL COMMENT '預計歸還日',
  `book_id` varchar(255) NOT NULL,
  `remandtime` datetime NOT NULL COMMENT '實際歸還日',
  `status` int(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `lend_data`
--

INSERT INTO `lend_data` (`id`, `user_rfid`, `lendtime`, `endtime`, `book_id`, `remandtime`, `status`) VALUES
(3, 'SDFSDF', '2018-08-01 10:25:06', '0000-00-00 00:00:00', 'sdfokjpokop', '2018-08-21 00:00:00', 1);

-- --------------------------------------------------------

--
-- 表的結構 `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_number` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_call` varchar(255) NOT NULL,
  `user_position` varchar(255) NOT NULL COMMENT '職稱',
  `user_department` varchar(255) NOT NULL COMMENT '科系/單位',
  `user_program` varchar(255) NOT NULL COMMENT '年制',
  `user_credit` int(255) NOT NULL COMMENT '信用值',
  `user_rfid` varchar(255) NOT NULL,
  `user_addtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT 'out',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 轉存資料表中的資料 `user_data`
--

INSERT INTO `user_data` (`id`, `user_name`, `user_number`, `user_pwd`, `user_email`, `user_call`, `user_position`, `user_department`, `user_program`, `user_credit`, `user_rfid`, `user_addtime`, `status`) VALUES
(1, '張小塞', '156489', '1123', '@@', '0945646545', '職員', '金融系', '', 80, '1805793803', '2018-07-20 10:22:08', 'in'),
(2, '王曉明', '1410202004', '', '', '0971542539', '學生', '金融系', '四技', 60, '1814233339', '2018-08-21 10:24:04', 'out'),
(4, '買惡', 'sdf4123s', 'dfsd123', '@@@', '09888887', '教師', '15', '五專', 60, '1811397995', '2018-08-22 13:24:14', 'out'),
(6, '賈柏ㄖ', '123456', '123456', '123456', '123456', '學生', '123456', '四技', 80, '2580858651', '2018-08-29 10:48:37', 'out'),
(7, '林曉', '1234567', '11', '11', '11', '校友', '11', '五專', 0, '5', '2018-08-29 10:49:05', 'out'),
(8, '亨', '', '', '', '', 'null', '', 'null', 80, '6', '2018-08-29 10:55:10', 'out'),
(10, '41', '41', '41', '41', '41', '職員', '41', '二技', 80, '7', '2018-08-29 11:33:34', 'out'),
(11, '123', '123', '123', '123@123.com', '123', '學生', '123', '四技', 80, '8', '2018-08-29 11:42:33', 'out'),
(12, '12', '12', '12', '12@12', '12', '學生', '12', '四技', 80, '9', '2018-08-29 12:33:44', 'out'),
(13, 'a', 'a', 'a', 'a@a', 'a', '學生', 'a', '四技', 80, 'a', '2018-08-29 13:52:07', 'out');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
