-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: momento
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.24-MariaDB

use `momento`;

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
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,1,'2016-04-05 12:00:00','Мой первый блог, который находится в базе данных, представляете, как же это здорово, иметь свой блог, просто\n         супер, вы можете постить что угодно, это просто топ, нонстоп отдых, пляж 2016 лето лучшие треки на ваш\n          мобильный только сегодня универ новые серии как починить сломанный телефон, как собрать лучший в мире онлайн\n           симулятор эрекция продлевается на 100% больше мускулов как у качков типа обамки - обезьянки, который не\n            умеет слушать Максим онлайн без регистрации и смс.','Первый пост!','Мой первый блог, который находится в базе данных, представляете, как же это здорово, иметь свой блог, просто\n         супер, вы можете постить что угодно, это просто топ, нонстоп отдых, пляж 2016 лето лучшие треки на ваш\n          мобильный только сегодня!',1),(2,1,'2016-04-05 10:00:00','We are experience troubles with encoding on that page! HELP! What we\'ve should do to make this question marks\n         real characters of cyrilliza?! I\'m tried all ways and they didn\'t help!','Troubles with encoding on this site.','We are experience troubles with encoding on that page! HELP! What we\'ve should do to make this question marks\n         real characters of cyrilliza?! I\'m tried all ways and they didn\'t help!',1),(3,3,'2016-04-05 10:00:00','Я люблю аниме! А вы любите аниме?!','Почему я люблю аниме','Я люблю аниме. Почему? Потому что 3д тян не нужны.',3);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Development',2),(2,'Miscellaneous',0),(3,'Anime',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Георгий','Попов','ambulance','M','Администратор, разработчик этого сайта.',20,'2019-02-20 17:00:00','2019-02-20 17:00:00',1,'default_avatar_m.png'),(2,'Артём','Попов','deviling42','M','Администратор, модератор, верстальщик',21,'2019-02-20 20:00:00','2017-02-20 17:00:00',1,'default_avatar_m.png'),(3,'Александр ','Плосков','merhalak','M','Администратор, модератор, верстальщик',21,'2019-02-20 20:00:00','2019-02-20 20:00:00',1,'default_avatar_f.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-25 23:18:31
