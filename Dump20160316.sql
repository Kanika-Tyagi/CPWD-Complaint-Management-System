CREATE DATABASE  IF NOT EXISTS `complain_system` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `complain_system`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: complain_system
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `book_complain`
--

DROP TABLE IF EXISTS `book_complain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_complain` (
  `complain_id` int(3) NOT NULL AUTO_INCREMENT,
  `complain_type` varchar(45) NOT NULL,
  `description` longtext,
  `book_date` date NOT NULL,
  `preferred_date` date NOT NULL,
  `start_time` int(2) NOT NULL,
  `end_time` int(2) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `feedback` varchar(45) DEFAULT NULL,
  `feedback_description` longtext,
  `mail_id` varchar(45) NOT NULL,
  `Worker` varchar(45) NOT NULL,
  `pin` int(6) NOT NULL,
  PRIMARY KEY (`complain_id`),
  KEY `mailid_idx` (`mail_id`),
  CONSTRAINT `mailid` FOREIGN KEY (`mail_id`) REFERENCES `customer_data` (`mail_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_complain`
--

LOCK TABLES `book_complain` WRITE;
/*!40000 ALTER TABLE `book_complain` DISABLE KEYS */;
INSERT INTO `book_complain` VALUES (19,'Renovation','Paint on walls is shedding and fading.','2016-03-15','2016-03-18',11,NULL,NULL,'Not-Satisfied','                              Work properly not done.. ','pnavnidhi@outlook.com','Sohan',110001),(20,'Water','','2016-03-15','2016-03-17',11,NULL,NULL,NULL,NULL,'pnavnidhi@outlook.com','Rohan',110001);
/*!40000 ALTER TABLE `book_complain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpwd_areas`
--

DROP TABLE IF EXISTS `cpwd_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpwd_areas` (
  `office_id` int(11) NOT NULL,
  `area` varchar(45) NOT NULL,
  `divisions` varchar(45) NOT NULL,
  PRIMARY KEY (`area`,`divisions`),
  KEY `cpwd_id_idx` (`office_id`),
  CONSTRAINT `cpwd_id` FOREIGN KEY (`office_id`) REFERENCES `cpwd_office` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpwd_areas`
--

LOCK TABLES `cpwd_areas` WRITE;
/*!40000 ALTER TABLE `cpwd_areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `cpwd_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpwd_office`
--

DROP TABLE IF EXISTS `cpwd_office`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpwd_office` (
  `office_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`office_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpwd_office`
--

LOCK TABLES `cpwd_office` WRITE;
/*!40000 ALTER TABLE `cpwd_office` DISABLE KEYS */;
/*!40000 ALTER TABLE `cpwd_office` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_data`
--

DROP TABLE IF EXISTS `customer_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_data` (
  `mail_id` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `gender` varchar(30) NOT NULL,
  `DOB` date NOT NULL DEFAULT '2000-09-09',
  `designation` varchar(45) NOT NULL,
  `organisation` varchar(100) NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_retirement` date NOT NULL,
  `hno` varchar(45) NOT NULL,
  `sector` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `pin` int(6) NOT NULL,
  `contact` bigint(12) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_data`
--

LOCK TABLES `customer_data` WRITE;
/*!40000 ALTER TABLE `customer_data` DISABLE KEYS */;
INSERT INTO `customer_data` VALUES ('pnavnidhi@outlook.com','pass','Nav Nidhi','Pal','Female','1995-03-12','Manager','HackEarth','2016-03-01','2040-03-31','340','K','Kalkaji','New Delhi',110001,9876543210);
/*!40000 ALTER TABLE `customer_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `Name` varchar(45) NOT NULL,
  `Contact` bigint(12) NOT NULL,
  `pin` int(6) NOT NULL,
  `Category` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` VALUES ('Sohan',9000000001,110001,'Renovation','tech.pirates2015@gmail.com'),('Rohan',9000000002,110001,'Water','tech.pirates2015@gmail.com'),('Mohan',9000000003,110001,'Electrical','tech.pirates2015@gmail.com'),('Mohit',9000000004,110001,'Sewage','tech.pirates2015@gmail.com');
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'complain_system'
--

--
-- Dumping routines for database 'complain_system'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-16  0:34:01
