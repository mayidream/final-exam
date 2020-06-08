-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2020-06-08 01:20:57
-- 服务器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `riches`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_uname` varchar(45) NOT NULL COMMENT '管理员名',
  `ad_upass` varchar(45) NOT NULL COMMENT '管理员密码',
  `create_time` varchar(255) DEFAULT '' COMMENT '创建时间',
  `update_time` varchar(255) DEFAULT '' COMMENT '更新时间',
  `type` int(11) NOT NULL DEFAULT 2 COMMENT '管理员权限',
  PRIMARY KEY (`ad_id`),
  UNIQUE KEY `ad_uname` (`ad_uname`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='管理员登录表';

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_uname`, `ad_upass`, `create_time`, `update_time`, `type`) VALUES
(1, 'admin', 'admin', NULL, '1590632026', 1),
(2, 'yinxiaolong', 'yinxiaolong', NULL, NULL, 1),
(3, 'jiaxuechao', 'jiaxuechao', NULL, NULL, 1),
(4, 'rongqing', 'rongqing', NULL, NULL, 1),
(5, 'dingyixin', 'dingyixin', NULL, NULL, 1),
(6, 'jicanlong', 'jicanlong', NULL, NULL, 2),
(7, 'qingyanrui', 'qiyanrui', NULL, NULL, 2),
(10, 'aaas', '123456', '1590125496', '1590125513', 2),
(12, '1234567', '123456', '1590584958', '1590585086', 1);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `com_content` varchar(80) NOT NULL COMMENT '评论内容',
  `com_time` timestamp NULL DEFAULT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户评论表';

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `com_content`, `com_time`) VALUES
(1, 1, '哇，真的是太好看了', NULL),
(2, 2, '6666，真漂亮', NULL),
(3, 3, '嘿嘿嘿，表格我出来了哦', NULL),
(4, 4, '123456', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `hot_area`
--

DROP TABLE IF EXISTS `hot_area`;
CREATE TABLE IF NOT EXISTS `hot_area` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(45) NOT NULL COMMENT '产品名称',
  `pro_path` varchar(80) NOT NULL COMMENT '产品路径',
  `themo` varchar(255) NOT NULL,
  `tese` varchar(255) NOT NULL,
  `price` int(11) NOT NULL COMMENT '价格',
  `commit` varchar(250) NOT NULL COMMENT '产品描述',
  `pro_create_time` timestamp NULL DEFAULT NULL COMMENT '产品创建时间',
  `pro_update_time` timestamp NULL DEFAULT NULL COMMENT '产品更新时间',
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='产品信息表';

--
-- 转存表中的数据 `hot_area`
--

INSERT INTO `hot_area` (`pro_id`, `pro_name`, `pro_path`, `themo`, `tese`, `price`, `commit`, `pro_create_time`, `pro_update_time`) VALUES
(1, '泰国自驾|象岛芭提雅3日', './images/5.png', '摄影采风', '走入藏东林芝，发现西藏柔美及秀丽的另一面——峡谷、森林、小溪、雪山、湖光、田园，画一般的景致，诗一般的意境。', 1944, '一场纯粹的释放，让心灵得到净化...', NULL, NULL),
(2, '日本|东京3日游', './images/6.png', '民风民俗', '美丽的富士山、动漫迷的好去处、温泉和红叶、无数的米其林美食，寺庙和神社等等。', 1900, '一场关于街道的狂欢...', NULL, NULL),
(3, '巴黎卡|大山7日游', 'images/7.png', '巴黎风采', '走入藏东林芝，发现西藏柔美及秀丽的另一面——峡谷、森林、小溪、雪山、湖光、田园，画一般的景致，诗一般的意境。', 4964, '领略不一样的风土人情...', NULL, NULL),
(4, 'test2', '/test/test2', '', '', 2500, '', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) NOT NULL,
  `pro_path` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `pro_introduction` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_path`, `grade`, `pro_introduction`, `price`, `create_time`, `update_time`) VALUES
(1, '小桥流水农家民宿', 'images/min1.jpg', '4', '66条点评·一室一厅两人一床·洛阳', '150', NULL, NULL),
(2, '观海景度假民宿', 'images/min2.jpg', '5', '一室一厅两人一床·青岛', '300', NULL, NULL),
(3, '九叔公民宿', 'images/min3.jpg', '5', '一室两人一床·香港九龙', '180', '', NULL),
(4, '「一百分」莫干山乡村小别墅', 'images/min4.jpg', '5', '一室一厅两人一床·莫干山', '221', NULL, NULL),
(5, '「一百分」黄山观景度假修养民宿', 'images/min5.jpg', '5', '一室一厅两人一床·黄山', '399', NULL, NULL),
(6, '北京隐山小筑民宿', 'images/min6.jpg', '5', '一室一厅两人一床·隐山', '350', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buy` int(11) NOT NULL DEFAULT 1 COMMENT '1代表未付款2代表已付款',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `pro_id`, `user_id`, `buy`) VALUES
(13, 3, 1, 2),
(9, 1, 4, 2),
(17, 3, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `tehui`
--

DROP TABLE IF EXISTS `tehui`;
CREATE TABLE IF NOT EXISTS `tehui` (
  `tehui_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(250) NOT NULL COMMENT '今日特惠产品名称',
  `pro_path` varchar(250) NOT NULL COMMENT '今日特惠产品路径',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `commit` varchar(250) DEFAULT NULL COMMENT '简介绍',
  PRIMARY KEY (`tehui_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tehui`
--

INSERT INTO `tehui` (`tehui_id`, `pro_name`, `pro_path`, `price`, `commit`) VALUES
(3, '舒适恬静海景大房', 'images/8.jpg', 1000, '1.8x2.0米大床&nbsp;免费WiFi&nbsp;丰盛自助'),
(4, '入梦酒店', 'images/9.jpg', NULL, NULL),
(5, '寒风酒店', 'images/10.jpg', NULL, NULL),
(6, '速八酒店', 'images/9.jpg', NULL, NULL),
(7, '青年酒店', 'images/9.jpg', NULL, NULL),
(8, '随风酒店', 'images/10.jpg', NULL, NULL),
(9, '如花酒店', 'images/9.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_path` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `satisfied` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `theme`
--

INSERT INTO `theme` (`id`, `pro_path`, `price`, `satisfied`) VALUES
(1, 'images/11.jpg', 5181, 94),
(2, 'images/12.jpg', 10143, 88),
(3, 'images/13.jpg', 14421, 96),
(4, 'images/11.jpg', 5181, 94),
(5, 'images/12.jpg', 10143, 94),
(6, 'images/13.jpg', 14421, 96);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uname` varchar(45) NOT NULL COMMENT '用户名',
  `telphone` varchar(45) DEFAULT NULL COMMENT '电话 ',
  `sex` varchar(2) DEFAULT '男',
  `email` varchar(255) DEFAULT NULL,
  `upass` varchar(45) NOT NULL COMMENT '用户密码',
  `create_time` varchar(45) DEFAULT NULL COMMENT '创建时间',
  `update_time` varchar(255) DEFAULT '' COMMENT '更新时间',
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=12369 DEFAULT CHARSET=utf8 COMMENT='用户登录表';

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `uname`, `telphone`, `sex`, `email`, `upass`, `create_time`, `update_time`, `address`) VALUES
(1, 'admin', '13629874324', '男', '2514839607@qq.com', 'admin', NULL, '1591246818', '河南郑州'),
(2, 'yinxiaolong', '13629874324', '男', NULL, '123456', '1589978471', '1590116078', ''),
(3, '123', NULL, '男', NULL, '123', NULL, '', NULL),
(4, '1', '1', '男', NULL, '1', NULL, NULL, NULL),
(5, '1234', '1234', '男', NULL, '1234', '1590484982', NULL, NULL),
(6, '12', '12', '男', NULL, '12', '1590485015', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `you_speak`
--

DROP TABLE IF EXISTS `you_speak`;
CREATE TABLE IF NOT EXISTS `you_speak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `commit_title` varchar(255) NOT NULL DEFAULT '',
  `commit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `you_speak`
--

INSERT INTO `you_speak` (`id`, `user_id`, `commit_title`, `commit`) VALUES
(1, '1', '吃遍杭州26家大店', '在我的印象中，杭州是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定\r\n去杭州一趟我想把我的春天交给杭州...'),
(2, '2', '三亚之旅', '在我的印象中，三亚是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定\r\n去杭州一趟我想把我的春天交给杭州...'),
(3, '3', '上有天堂下有苏杭', '在我的印象中，苏杭是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定\r\n去杭州一趟我想把我的春天交给杭州...');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
