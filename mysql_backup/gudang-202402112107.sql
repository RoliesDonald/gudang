-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: mysql    Database: gudang
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'Tools',1,9,9,'2024-02-09 09:49:10','2024-02-09 09:53:21'),(3,'Filters',1,9,NULL,'2024-02-10 03:06:09',NULL),(4,'Oils',1,9,NULL,'2024-02-10 03:06:16',NULL),(5,'Cement',1,9,NULL,'2024-02-10 03:14:19',NULL),(6,'LED TV',1,9,NULL,'2024-02-10 03:14:27',NULL),(7,'Smart Phone',1,9,NULL,'2024-02-10 03:14:37',NULL),(8,'Steel',1,9,NULL,'2024-02-10 03:16:23',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'hasan','upload/customer_img/1790349685609443.jpg','08127427423','hasan@gmai.com','Jl. Hasan Jalan-Jalan',1,9,NULL,'2024-02-08 16:41:52','2024-02-08 20:51:00',NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2014_10_12_100000_create_password_reset_tokens_table',2),(6,'2024_02_05_091728_create_suppliers_table',3),(7,'2024_02_06_142506_create_customers_table',4),(8,'2024_02_08_165143_add_username_to_customers_table',5),(9,'2024_02_08_220532_create_units_table',6),(10,'2024_02_09_081003_create_categories_table',7),(11,'2024_02_09_100040_create_products_table',8),(12,'2024_02_10_090557_create_purchases_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
INSERT INTO `password_reset_tokens` VALUES ('donald@gmail.com','$2y$12$wDeXDHYjg1jYjf66MMqZLe5Yry.E3wAJbJalvnpJKegZp8.B.xpyu','2024-02-03 08:11:49');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` int NOT NULL,
  `unit_id` int NOT NULL,
  `category_id` int NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (3,4,3,2,'Obeng',0,1,9,9,'2024-02-09 18:49:08','2024-02-10 03:00:27'),(4,7,3,8,'Bosundora Square Tube Steel',12,1,9,NULL,'2024-02-10 03:17:04','2024-02-11 20:41:29'),(5,8,5,8,'KSRM Rod Steel',12,1,9,NULL,'2024-02-10 03:17:55','2024-02-11 20:42:42'),(6,11,3,5,'Semen Putih Holcim',0,1,9,9,'2024-02-10 03:18:29','2024-02-10 03:18:45'),(7,13,3,5,'Madina Cement',0,1,9,NULL,'2024-02-10 03:20:30',NULL),(8,9,4,7,'Walton Mobile',0,1,9,9,'2024-02-10 03:21:34','2024-02-10 03:22:20'),(9,9,4,7,'Walton Hub',40,1,9,NULL,'2024-02-10 03:22:12','2024-02-11 20:17:37'),(10,13,3,5,'Cemen Mandina 2',0,1,9,NULL,'2024-02-11 13:35:46',NULL),(11,13,4,8,'Besi Madina',0,1,9,NULL,'2024-02-11 13:36:14',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` int NOT NULL,
  `category_id` int NOT NULL,
  `product_id` int NOT NULL,
  `purchase_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_qty` double NOT NULL,
  `unit_price` double NOT NULL,
  `buying_price` double NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=Pending, 1=Approved',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchases`
--

LOCK TABLES `purchases` WRITE;
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
INSERT INTO `purchases` VALUES (1,8,8,5,'aaa-111','2024-02-11','buy',22,10,220,0,9,NULL,'2024-02-11 15:36:46','2024-02-11 15:36:46'),(2,7,5,6,'aaa-222','2024-02-12','besi holow',12,500,6000,0,9,NULL,'2024-02-11 17:32:54','2024-02-11 17:32:54'),(3,11,8,4,'aaa-333','2024-02-12','holcim putih',12,400,4800,1,9,NULL,'2024-02-11 17:57:52','2024-02-11 20:41:29'),(4,9,7,9,'aaa-444','2024-02-12','HP1',40,4000,160000,1,9,NULL,'2024-02-11 18:06:47','2024-02-11 20:17:37'),(5,11,8,5,'aaa-555','2024-02-12','semen putih holcim',12,1000,12000,1,9,NULL,'2024-02-11 18:11:09','2024-02-11 20:42:42');
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suppliers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (4,'Madju Lancar Selalu','08218765767','madju@gmail.com','jalan sentosa raya, selatan jakarta',1,9,9,'2024-02-06 13:52:25','2024-02-08 20:46:20'),(6,'Persada Land','0812839485','persada@gmail.com','Jl. Supplier Persada No. 1',1,9,NULL,'2024-02-09 16:22:40',NULL),(7,'Bosundora','0928394849','bosu@gmail.com','Jl Bosu, jawa timur',1,9,NULL,'2024-02-10 03:11:18',NULL),(8,'KSRM','082873638373','ksrm@gmail.com','jl. KSRM Raya',1,9,NULL,'2024-02-10 03:11:53',NULL),(9,'Walton','0982737384','walton@gmail.com','Jl. Walton Utara 1',1,9,NULL,'2024-02-10 03:12:27',NULL),(10,'Vision','09739287382','vision@mail.cc','Jl. Mata Raya Utama',1,9,NULL,'2024-02-10 03:12:58',NULL),(11,'Holcim','09827392384','holcim@gmail.com','Jl. Semen Kokoh',1,9,NULL,'2024-02-10 03:13:26',NULL),(12,'Samsung','08237837489','samsung@gmail.com','Jl. Handphone',1,9,NULL,'2024-02-10 03:13:57',NULL),(13,'Madina','08283847383','madina@gmail.com','Jl. Raya Semen Madina',1,9,NULL,'2024-02-10 03:19:54',NULL);
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `unitname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (3,'kgs',1,9,9,'2024-02-09 07:57:09','2024-02-10 03:08:31'),(4,'pcs',1,9,9,'2024-02-09 16:21:25','2024-02-10 03:08:26'),(5,'pkg',1,9,NULL,'2024-02-10 03:08:18',NULL),(6,'gr',1,9,NULL,'2024-02-10 03:09:31',NULL);
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User','user@gmail.com','2022-03-09 17:16:01','$2y$12$LUjm5qUnT9Rz5nPU51HVvOqNlK0xoHOLht9ZXAwn.5HKeqiOFlKIK','user','202203112055download.jpg','3fSd3VewrQplZJ4YbHS7uJysph5ThZth1G2bNLds4ERq1izeFlL2yr98kbiL','2022-03-09 16:27:03','2024-01-11 17:28:37'),(2,'Kazi1','kazi@gmail.com','2022-03-09 17:14:32','$2y$10$cdhHGJTOuPvl5jIlTKInWuk57U0fOnWuTpX8S4IU47H1jOYiMTa4C','kazi1','202402042028auth-bg.jpg',NULL,'2022-03-09 17:12:44','2024-02-04 20:28:12'),(4,'Demo','demo@gmail.com','2022-03-09 17:54:03','$2y$10$Ne1R842eJJw7VpVZ.jv31ulN12pHgAVKvx9JiB1nNfABYU/EwbvVy','demo',NULL,NULL,'2022-03-09 17:53:48','2022-03-09 17:54:03'),(5,'TEST','test@gmail.com','2022-03-10 14:14:10','$2y$10$6pvyEf0zI1lnLrZLA8f2sO36IaTsRJizUrpT9Tp1IrZKRlZlCAYEO','test',NULL,NULL,'2022-03-10 13:52:07','2022-03-10 14:14:10'),(6,'Rolies Donald','donald@gmail.com','2024-01-11 17:37:53','$2y$12$zzvOJHebvsb67sSiJPw3A.NkePaU3BdNw7tBG3t365gTwDjCEKXau',NULL,NULL,NULL,'2024-01-11 17:37:00','2024-01-11 17:37:53'),(8,'Donald Rolies','donaldrolies@gmail.com','2024-01-11 18:20:41','$2y$12$ps1om4dXzme45saStK8Pw.JlP0g40VXyeRPP.KDne1nOtdy16yTp2','donaldrolies',NULL,NULL,'2024-01-11 18:20:26','2024-01-11 18:20:41'),(9,'Arkana Manaf Rajendra','arkana@gmail.com','2024-01-17 06:38:42','$2y$12$D7htcXbsKq3Byhp8M4j6MeOWHxm88Mu1rGRNh..7G/yvvnPTFoXsC','arkana','202402042053avatar_replace.jpg',NULL,'2024-01-17 06:37:54','2024-02-05 03:40:05');
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

-- Dump completed on 2024-02-11 21:07:06
