-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: luckyman
-- ------------------------------------------------------
-- Server version	5.6.21-log

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
-- Table structure for table `signer`
--

DROP TABLE IF EXISTS `signer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `school` varchar(45) DEFAULT NULL,
  `major` varchar(45) DEFAULT NULL,
  `graduation` varchar(45) DEFAULT NULL,
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0',
  `nameen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='签到人员';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signer`
--

LOCK TABLES `signer` WRITE;
/*!40000 ALTER TABLE `signer` DISABLE KEYS */;
INSERT INTO `signer` VALUES (15,'choleece','男','15764236208','15764236208','四川大学','dd','dd','2018-10-24 13:23:41',0,'avatar1'),(16,'郑超力','男','188888888','188888888','四川大学','dd','dd','2018-10-24 13:30:44',0,'avatar1'),(17,'撒地方撒旦','撒地方','188888888','188888888','四川大学','dd','dd','2018-10-24 13:34:47',0,'avatar1'),(18,'撒单调度','撒地方','1888888488','1888888488','四川大学','dd','dd','2018-10-24 13:34:59',0,'avatar1'),(19,'撒单调度44','撒地方','1888888488','1888888488','四川大学','dd','dd','2018-10-24 13:35:11',0,'avatar1'),(20,'ddd','dd','ddd','ddd','d','','','2018-10-24 14:45:59',0,'avatar1'),(21,'aaa','dddd','ffff','ffff','fff','ff','fff','2018-10-24 14:59:03',0,'avatar1'),(22,'ddbbb','d','d','d','','','','2018-10-24 14:59:14',0,'avatar1'),(23,'dccc','d','d','d','','','','2018-10-24 14:59:32',0,'avatar1'),(24,'ddddeee','d','d','d','','','','2018-10-24 15:00:02',0,'avatar1'),(25,'dddffffff','dd','ddd','ddd','','','','2018-10-24 15:00:09',0,'avatar1'),(26,'dsddfsdaf','asdf','','','','','','2018-10-24 15:01:36',0,'avatar1'),(27,'hdhdhhdh','hhdhfhfh','bdhfbhf','bdhfbhf','hfhfh','dhdhh','dhdhbf','2018-10-24 15:02:56',0,'avatar1');
/*!40000 ALTER TABLE `signer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'luckyman'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-25 22:25:25
