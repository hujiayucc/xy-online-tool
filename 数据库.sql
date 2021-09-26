-- MySQL dump 10.13  Distrib 5.7.34, for Linux (x86_64)
--
-- Host: localhost    Database: tool
-- ------------------------------------------------------
-- Server version	5.7.34-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `id` int(255) NOT NULL,
  `admin` varchar(255) NOT NULL COMMENT '用户名',
  `pwd` varchar(255) NOT NULL COMMENT '用户密码',
  `title` varchar(255) NOT NULL COMMENT '网站标题',
  `title2` varchar(255) NOT NULL COMMENT '网站副标题',
  `weburl` varchar(255) NOT NULL COMMENT '网站地址',
  `ico` varchar(255) NOT NULL COMMENT '网站ICO图标',
  `home` varchar(255) NOT NULL COMMENT '首页图片链接',
  `webdes` varchar(255) NOT NULL COMMENT '网站描述',
  `icpurl` varchar(255) NOT NULL COMMENT 'ICP备案查询接口',
  `ewmurl` varchar(255) NOT NULL COMMENT '二维码生成接口',
  `audiourl` varchar(255) NOT NULL COMMENT '文字转音频接口',
  `zzqq` varchar(255) NOT NULL COMMENT '站长QQ',
  `qqqun` varchar(255) NOT NULL COMMENT 'QQ群链接',
  `webgg` varchar(255) NOT NULL COMMENT '网站公告',
  `tcgg` varchar(255) NOT NULL COMMENT '弹窗公告',
  `app` varchar(255) NOT NULL COMMENT 'APP下载地址',
  `header` varchar(255) NOT NULL COMMENT '头部代码',
  `footer` varchar(255) NOT NULL COMMENT '底部版权',
  `webkey` varchar(255) NOT NULL COMMENT '网站关键词',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','在线工具箱','小宇','https://www.hujiayucc.cn','https://www.hujiayucc.cn/favicon.ico','https://api.vvhan.com/api/ip','在线工具箱，无需下载','https://api.vvhan.com/api/icp?url=','https://api.vvhan.com/api/qr?text=','https://api.vvhan.com/api/song?txt=','2792607647','#','网站所有功能和接口免费，请勿滥用，造成的所有后果自负！','网站所有功能和接口免费，请勿滥用，造成的所有后果自负！','#','','小宇','hujiayucc');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'tool'
--

--
-- Dumping routines for database 'tool'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-21 16:52:23
