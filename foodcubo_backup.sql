-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: foodcubo
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_detail`
--

DROP TABLE IF EXISTS `food_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_detail` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` int(10) NOT NULL,
  `food_name` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img_link` varchar(200) NOT NULL,
  PRIMARY KEY (`food_id`),
  KEY `res_id` (`res_id`),
  CONSTRAINT `food_detail_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `res_reg` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_detail`
--

LOCK TABLES `food_detail` WRITE;
/*!40000 ALTER TABLE `food_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_app`
--

DROP TABLE IF EXISTS `job_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_app` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `link_to_resume` varchar(200) NOT NULL,
  `tell_us_something` varchar(700) NOT NULL,
  `contact_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_app`
--

LOCK TABLES `job_app` WRITE;
/*!40000 ALTER TABLE `job_app` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_contact`
--

DROP TABLE IF EXISTS `res_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_contact` (
  `res_id` int(10) DEFAULT NULL,
  `res_email` varchar(200) NOT NULL,
  `res_contact` varchar(12) NOT NULL,
  KEY `res_id` (`res_id`),
  CONSTRAINT `res_contact_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `res_reg` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_contact`
--

LOCK TABLES `res_contact` WRITE;
/*!40000 ALTER TABLE `res_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_cred`
--

DROP TABLE IF EXISTS `res_cred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_cred` (
  `res_id` int(10) DEFAULT NULL,
  `res_password` varchar(200) NOT NULL,
  KEY `res_id` (`res_id`),
  CONSTRAINT `res_cred_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `res_reg` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_cred`
--

LOCK TABLES `res_cred` WRITE;
/*!40000 ALTER TABLE `res_cred` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_cred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_reg`
--

DROP TABLE IF EXISTS `res_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_reg` (
  `res_id` int(10) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(100) NOT NULL,
  `res_loc` varchar(300) NOT NULL,
  `res_type` varchar(100) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_reg`
--

LOCK TABLES `res_reg` WRITE;
/*!40000 ALTER TABLE `res_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_reg` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `user_contact` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_reg`
--

LOCK TABLES `user_reg` WRITE;
/*!40000 ALTER TABLE `user_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_reg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-11 15:28:44
