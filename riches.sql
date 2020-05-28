/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : riches

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-28 16:12:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_uname` varchar(45) NOT NULL COMMENT '管理员名',
  `ad_upass` varchar(45) NOT NULL COMMENT '管理员密码',
  `create_time` varchar(255) DEFAULT '' COMMENT '创建时间',
  `update_time` varchar(255) DEFAULT '' COMMENT '更新时间',
  `type` int(11) NOT NULL DEFAULT 2 COMMENT '管理员权限',
  PRIMARY KEY (`ad_id`),
  UNIQUE KEY `ad_uname` (`ad_uname`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='管理员登录表';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', null, '1590632026', '1');
INSERT INTO `admin` VALUES ('2', 'yinxiaolong', 'yinxiaolong', null, null, '1');
INSERT INTO `admin` VALUES ('3', 'jiaxuechao', 'jiaxuechao', null, null, '1');
INSERT INTO `admin` VALUES ('4', 'rongqing', 'rongqing', null, null, '1');
INSERT INTO `admin` VALUES ('5', 'dingyixin', 'dingyixin', null, null, '1');
INSERT INTO `admin` VALUES ('6', 'jicanlong', 'jicanlong', null, null, '2');
INSERT INTO `admin` VALUES ('7', 'qingyanrui', 'qiyanrui', null, null, '2');
INSERT INTO `admin` VALUES ('10', 'aaas', '123456', '1590125496', '1590125513', '2');
INSERT INTO `admin` VALUES ('12', '1234567', '123456', '1590584958', '1590585086', '1');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `com_content` varchar(80) NOT NULL COMMENT '评论内容',
  `com_time` timestamp NULL DEFAULT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户评论表';

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '哇，真的是太好看了', null);
INSERT INTO `comment` VALUES ('2', '2', '6666，真漂亮', null);
INSERT INTO `comment` VALUES ('3', '3', '嘿嘿嘿，表格我出来了哦', null);
INSERT INTO `comment` VALUES ('4', '4', '123456', null);

-- ----------------------------
-- Table structure for hot_area
-- ----------------------------
DROP TABLE IF EXISTS `hot_area`;
CREATE TABLE `hot_area` (
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

-- ----------------------------
-- Records of hot_area
-- ----------------------------
INSERT INTO `hot_area` VALUES ('1', '泰国自驾|象岛芭提雅3日', './images/5.png', '摄影采风', '走入藏东林芝，发现西藏柔美及秀丽的另一面——峡谷、森林、小溪、雪山、湖光、田园，画一般的景致，诗一般的意境。', '1944', '一场纯粹的释放，让心灵得到净化...', null, null);
INSERT INTO `hot_area` VALUES ('2', '日本|东京3日游', './images/6.png', '民风民俗', '美丽的富士山、动漫迷的好去处、温泉和红叶、无数的米其林美食，寺庙和神社等等。', '1900', '一场关于街道的狂欢...', null, null);
INSERT INTO `hot_area` VALUES ('3', '巴黎卡|大山7日游', 'images/7.png', '巴黎风采', '走入藏东林芝，发现西藏柔美及秀丽的另一面——峡谷、森林、小溪、雪山、湖光、田园，画一般的景致，诗一般的意境。', '4964', '领略不一样的风土人情...', null, null);
INSERT INTO `hot_area` VALUES ('4', 'test2', '/test/test2', '', '', '2500', '', null, null);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
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

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '小桥流水农家民宿', 'images/min1.jpg', '4', '66条点评·一室一厅两人一床·洛阳', '150', null, null);
INSERT INTO `products` VALUES ('2', '观海景度假民宿', 'images/min2.jpg', '5', '一室一厅两人一床·青岛', '300', null, null);
INSERT INTO `products` VALUES ('3', '九叔公民宿', 'images/min3.jpg', '5', '一室两人一床·香港九龙', '180', '', null);
INSERT INTO `products` VALUES ('4', '「一百分」莫干山乡村小别墅', 'images/min4.jpg', '5', '一室一厅两人一床·莫干山', '221', null, null);
INSERT INTO `products` VALUES ('5', '「一百分」黄山观景度假修养民宿', 'images/min5.jpg', '5', '一室一厅两人一床·黄山', '399', null, null);
INSERT INTO `products` VALUES ('6', '北京隐山小筑民宿', 'images/min6.jpg', '5', '一室一厅两人一床·隐山', '350', null, null);
INSERT INTO `products` VALUES ('7', 'test1', 'images/min6.jpg', '10', 'test1', '182', null, '1590651606');
INSERT INTO `products` VALUES ('10', 'asda', './images/931590651901.png', 'asdsad', 'asasd', '100', '1590651901', '1590651914');

-- ----------------------------
-- Table structure for shopping_cart
-- ----------------------------
DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buy` int(11) NOT NULL DEFAULT 1 COMMENT '1代表未付款2代表已付款',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shopping_cart
-- ----------------------------
INSERT INTO `shopping_cart` VALUES ('13', '3', '1', '2');
INSERT INTO `shopping_cart` VALUES ('9', '1', '4', '2');

-- ----------------------------
-- Table structure for tehui
-- ----------------------------
DROP TABLE IF EXISTS `tehui`;
CREATE TABLE `tehui` (
  `tehui_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(250) NOT NULL COMMENT '今日特惠产品名称',
  `pro_path` varchar(250) NOT NULL COMMENT '今日特惠产品路径',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `commit` varchar(250) DEFAULT NULL COMMENT '简介绍',
  PRIMARY KEY (`tehui_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tehui
-- ----------------------------
INSERT INTO `tehui` VALUES ('3', '舒适恬静海景大房', 'images/8.jpg', '1000', '1.8x2.0米大床&nbsp;免费WiFi&nbsp;丰盛自助');
INSERT INTO `tehui` VALUES ('4', '入梦酒店', 'images/9.jpg', null, null);
INSERT INTO `tehui` VALUES ('5', '寒风酒店', 'images/10.jpg', null, null);
INSERT INTO `tehui` VALUES ('6', '速八酒店', 'images/9.jpg', null, null);
INSERT INTO `tehui` VALUES ('7', '青年酒店', 'images/9.jpg', null, null);
INSERT INTO `tehui` VALUES ('8', '随风酒店', 'images/10.jpg', null, null);
INSERT INTO `tehui` VALUES ('9', '如花酒店', 'images/9.jpg', null, null);

-- ----------------------------
-- Table structure for theme
-- ----------------------------
DROP TABLE IF EXISTS `theme`;
CREATE TABLE `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_path` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `satisfied` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of theme
-- ----------------------------
INSERT INTO `theme` VALUES ('1', 'images/11.jpg', '5181', '94');
INSERT INTO `theme` VALUES ('2', 'images/12.jpg', '10143', '88');
INSERT INTO `theme` VALUES ('3', 'images/13.jpg', '14421', '96');
INSERT INTO `theme` VALUES ('4', 'images/11.jpg', '5181', '94');
INSERT INTO `theme` VALUES ('5', 'images/12.jpg', '10143', '94');
INSERT INTO `theme` VALUES ('6', 'images/13.jpg', '14421', '96');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uname` varchar(45) NOT NULL COMMENT '用户名',
  `telphone` varchar(45) DEFAULT NULL COMMENT '电话 ',
  `upass` varchar(45) NOT NULL COMMENT '用户密码',
  `create_time` varchar(45) DEFAULT NULL COMMENT '创建时间',
  `update_time` varchar(255) DEFAULT '' COMMENT '更新时间',
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=12367 DEFAULT CHARSET=utf8 COMMENT='用户登录表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', 'admin', null, '1590632081', '');
INSERT INTO `user` VALUES ('2', 'yinxiaolong', '13629874324', '123456', '1589978471', '1590116078', '');
INSERT INTO `user` VALUES ('3', '123', null, '123', null, '', null);
INSERT INTO `user` VALUES ('4', '1', '1', '1', null, null, null);
INSERT INTO `user` VALUES ('5', '1234', '1234', '1234', '1590484982', null, null);
INSERT INTO `user` VALUES ('6', '12', '12', '12', '1590485015', null, null);

-- ----------------------------
-- Table structure for you_speak
-- ----------------------------
DROP TABLE IF EXISTS `you_speak`;
CREATE TABLE `you_speak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `commit_title` varchar(255) NOT NULL DEFAULT '',
  `commit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of you_speak
-- ----------------------------
INSERT INTO `you_speak` VALUES ('1', '1', '吃遍杭州26家大店', '在我的印象中，杭州是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定\r\n去杭州一趟我想把我的春天交给杭州...');
INSERT INTO `you_speak` VALUES ('2', '2', '三亚之旅', '在我的印象中，三亚是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定\r\n去杭州一趟我想把我的春天交给杭州...');
INSERT INTO `you_speak` VALUES ('3', '3', '上有天堂下有苏杭', '在我的印象中，苏杭是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定\r\n去杭州一趟我想把我的春天交给杭州...');
