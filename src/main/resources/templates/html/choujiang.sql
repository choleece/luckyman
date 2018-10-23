-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: choujiang
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1-log

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
-- Table structure for table `list`
--

DROP TABLE IF EXISTS `list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `num` varchar(10) NOT NULL,
  `name` varchar(12) NOT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list`
--

LOCK TABLES `list` WRITE;
/*!40000 ALTER TABLE `list` DISABLE KEYS */;
/*!40000 ALTER TABLE `list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (38,'101-袁多慧','2018-10-17 15:16:51'),(39,'143-李雷雷','2018-10-17 15:17:30'),(40,'068-李昌哲','2018-10-17 15:18:27'),(41,'095-谢洋','2018-10-17 15:41:39'),(42,'131-陆再玉','2018-10-17 15:42:36'),(43,'007-罗璇网炼','2018-10-17 15:43:20'),(44,'050-杨明胜','2018-10-17 16:05:25'),(45,'137-冯春明','2018-10-17 16:06:10'),(46,'045-杨思梅','2018-10-17 16:06:50'),(47,'075-张腾','2018-10-17 16:07:22'),(48,'76-李顺开','2018-10-17 16:07:50'),(49,'093-杨宸毅','2018-10-17 16:08:14'),(50,'040-李江河','2018-10-17 16:08:54'),(51,'144-兰佳旺','2018-10-17 20:32:34'),(52,'NO.028-叶力','2018-10-18 09:29:17'),(53,'083-何林东','2018-10-19 09:16:43'),(54,'066-刘婷','2018-10-19 09:17:58'),(55,'067-王应东','2018-10-19 09:18:00'),(56,'082-翟培兴','2018-10-19 09:18:01'),(57,'115-安柳亲','2018-10-19 09:29:23'),(58,'111-郑博乐','2018-10-19 15:27:26');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p_list`
--

DROP TABLE IF EXISTS `p_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `p_list` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `list1` varchar(20) DEFAULT NULL,
  `list2` varchar(20) DEFAULT NULL,
  `list3` varchar(20) DEFAULT NULL,
  `list4` varchar(20) DEFAULT NULL,
  `list5` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p_list`
--

LOCK TABLES `p_list` WRITE;
/*!40000 ALTER TABLE `p_list` DISABLE KEYS */;
INSERT INTO `p_list` VALUES (1,'兑奖号','姓名','手机号',NULL,NULL);
/*!40000 ALTER TABLE `p_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-22 17:40:24
