-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: proxada
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230317220940','2023-03-17 23:10:06',28),('DoctrineMigrations\\Version20230318150850','2023-03-18 16:09:15',14),('DoctrineMigrations\\Version20230320175239','2023-03-20 18:53:33',15),('DoctrineMigrations\\Version20230321222532','2023-03-21 23:25:46',16),('DoctrineMigrations\\Version20230321222841','2023-03-21 23:28:45',12),('DoctrineMigrations\\Version20230321224622','2023-03-21 23:46:29',46),('DoctrineMigrations\\Version20230322000800','2023-03-22 01:08:08',30),('DoctrineMigrations\\Version20230322003740','2023-03-22 01:37:46',20),('DoctrineMigrations\\Version20230322012444','2023-03-22 02:24:53',48),('DoctrineMigrations\\Version20230322012745','2023-03-22 02:27:47',20),('DoctrineMigrations\\Version20230322013334','2023-03-22 02:33:36',18),('DoctrineMigrations\\Version20230322014509','2023-03-22 02:45:11',24),('DoctrineMigrations\\Version20230322145151','2023-03-22 15:51:57',34),('DoctrineMigrations\\Version20230405172637','2023-04-05 17:27:05',68),('DoctrineMigrations\\Version20230406022240','2023-04-06 02:22:46',17),('DoctrineMigrations\\Version20230406022342','2023-04-06 02:25:45',17),('DoctrineMigrations\\Version20230407144414','2023-04-07 14:44:54',34),('DoctrineMigrations\\Version20230407150346','2023-04-07 15:04:12',35),('DoctrineMigrations\\Version20230412183045','2023-04-12 20:30:53',72),('DoctrineMigrations\\Version20230412194453','2023-04-12 21:44:59',25);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_creation`
--

DROP TABLE IF EXISTS `job_creation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_creation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_post_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_creation`
--

LOCK TABLES `job_creation` WRITE;
/*!40000 ALTER TABLE `job_creation` DISABLE KEYS */;
INSERT INTO `job_creation` VALUES (56,298,2,'2023-04-15 14:05:59','iga swiatek','ig@wp.pl','48632634331'),(57,298,2,'2023-04-15 14:07:38','iga swiatek','ig@wp.pl','48632634331'),(58,300,2,'2023-04-15 14:08:28','weq@wp.pl','wqeqew@wp.pl','43243242234'),(59,301,2,'2023-04-15 14:25:27','marek belka','mk@wp.pl','4856673242'),(60,302,2,'2023-04-15 15:00:17','rwerwe3112','wreqwr@wp.pl','324324342'),(61,302,2,'2023-04-15 15:01:44','rwerwe311222','wreqwr@wp.pl','324324342');
/*!40000 ALTER TABLE `job_creation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_detail`
--

DROP TABLE IF EXISTS `job_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_post_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `difficulty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_detail`
--

LOCK TABLES `job_detail` WRITE;
/*!40000 ALTER TABLE `job_detail` DISABLE KEYS */;
INSERT INTO `job_detail` VALUES (62,300,'Opis<br />\r\nAplikacja ma służyć do przyjmowania i wydawania materiałów z magazynu. Aplikacja powinna wymagać zalogowania się przez użytkownika. Po zalogowaniu, użytkownik widzi tylko przypisane do niego magazyny oraz artykuły na nich. Użytkownik może przyjąć towar jak i go wydać. Podczas przyjęcia wymagane jest podanie kodu artykułu, ilości, jednostki miary, VAT oraz ceny jednostkowej bez podatku. Opcjonalne jest dołączenie pliku zawierającego fakturę (xml, pdf). Przy wydaniu wystarczy podać kod artykułu oraz ilość wydaną.<br />\r\n<br />\r\nAdministrator ma podgląd na wszystkie magazyny w panelu administratora, może również przyjmować i wydawać towary w sposób identyczny do użytkownika. Może również tworzyć nowe magazyny i przypisywać do nich użytkowników i odwrotnie - może tworzyć użytkowników i przypisywać ich do odpowiednich magazynów. Administrator może również utworzyć artykuły, aby były one widoczne podczas przyjęcia lub wydania materiału<br />\r\n<br />\r\nWymagania<br />\r\n    • Aplikacja webowa<br />\r\n    • Wykorzystanie frameworka Symfony<br />\r\n    • Wykorzystanie systemu kontroli wersji GIT<br />\r\n    • Zastosowanie bazy danych MySQL lub MariaDB<br />\r\n    • Im mniej JS tym lepiej ( ͡° ͜ʖ ͡°)<br />\r\n    • Gwiazdka przy opisie oznacza poziom skomplikowania. Nie wszystko jest obowiązkowe, natomiast ma wpływ na decyzję o umiejętnościach<br />\r\n<br />\r\nCo należy zrobić<br />\r\nPanel użytkownika:<br />\r\n    • Logowanie dla użytkownika<br />\r\n        ◦ * korzystając z bazy danych bez FOS<br />\r\n        ◦ ** Korzystając z bazy danych oraz adapterów<br />\r\n    • Przyjęcie artykułu<br />\r\n        ◦ Nazwa artykułu<br />\r\n            ▪ *Z listy artykułów wprowadzonych przez administratora<br />\r\n        ◦ Ilość przyjęta<br />\r\n        ◦ Jednostka miary<br />\r\n            ▪ *Zaciągnięta z definicji wprowadzonej przez administratora<br />\r\n        ◦ VAT<br />\r\n        ◦ Cena jednostkowa<br />\r\n        ◦ *Plik<br />\r\n            ▪ **Ograniczenie do maksymalnie 4 plików z rozszerzeniem PDF lub XML<br />\r\n    • Wydanie artykułu<br />\r\n        ◦ Nazwa artykułu<br />\r\n            ▪ *Z listy artykułów wprowadzonych przez administratora<br />\r\n        ◦ Ilość wydana<br />\r\nPanel Administratora:<br />\r\n    • Logowanie dla administratora<br />\r\n        ◦ * korzystając z bazy danych bez FOS<br />\r\n        ◦ ** Korzystając z bazy danych oraz adapterów<br />\r\n    • Przyjęcie oraz wydanie artykułu jak w przypadku panelu użytkownika<br />\r\n    • Tworzenie użytkownika<br />\r\n        ◦ Login<br />\r\n        ◦ Hasło bcrypt<br />\r\n        ◦ Przypisanie magazynów<br />\r\n    • Tworzenie magazynu<br />\r\n        ◦ Nazwa magazynu<br />\r\n        ◦ Przypisanie osoby do magazynu<br />\r\n    • Tworzenie artykułu<br />\r\n        ◦ Nazwa<br />\r\n        ◦ Jednostka miary',2),(63,301,'lejalt',2),(64,302,'fwerrf',2),(65,302,'fwerrf',2);
/*!40000 ALTER TABLE `job_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_post`
--

DROP TABLE IF EXISTS `job_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `execution_time` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `scope` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `reservation` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_post`
--

LOCK TABLES `job_post` WRITE;
/*!40000 ALTER TABLE `job_post` DISABLE KEYS */;
INSERT INTO `job_post` VALUES (300,'programowanie','php',0,0,'kmkm','kmkmweq',1,'kmkw'),(301,'grafika','photoshop',200,700,'layout','figma',0,'poznan'),(302,'programowanie','java',100,200,'eqweqw','3wqwq',0,'rwerwe'),(303,'programowanie','java',100,200,'eqweqw','3wqwq',0,'rwerwe');
/*!40000 ALTER TABLE `job_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_subscription`
--

DROP TABLE IF EXISTS `job_subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_post_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_subscription`
--

LOCK TABLES `job_subscription` WRITE;
/*!40000 ALTER TABLE `job_subscription` DISABLE KEYS */;
INSERT INTO `job_subscription` VALUES (36,300,2,'2023-04-15 15:06:20','eqwwer2','ewrwr@wp.pl','4324234222');
/*!40000 ALTER TABLE `job_subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-15 17:26:25
