-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: relatorios
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `vendas`
--

DROP TABLE IF EXISTS `vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int NOT NULL,
  `preco` double NOT NULL,
  `data_venda` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas`
--

LOCK TABLES `vendas` WRITE;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` VALUES (1,'Tênis Nike Air Max',10,499.9,'2024-07-01',NULL,NULL),(2,'Smartphone Samsung Galaxy S23',5,2999.99,'2024-07-02',NULL,NULL),(3,'Fone de Ouvido Bluetooth JBL',15,149.9,'2024-07-03',NULL,NULL),(4,'Notebook Dell Inspiron 15',20,3499,'2024-07-04',NULL,NULL),(5,'Televisão 4K LG 55\"',8,2499,'2024-07-05',NULL,NULL),(6,'Geladeira Brastemp Frost Free',12,1999,'2024-07-06',NULL,NULL),(7,'Micro-ondas Panasonic 30L',6,699.9,'2024-07-07',NULL,NULL),(8,'Cadeira Gamer Corsair',9,899.9,'2024-07-08',NULL,NULL),(9,'Câmera Canon EOS Rebel T7',7,1999,'2024-07-09',NULL,NULL),(10,'Roteador Wi-Fi TP-Link AC1200',14,299.9,'2024-07-10',NULL,NULL),(11,'Relógio Apple Watch Series 8',11,3999,'2024-07-11',NULL,NULL),(12,'Colchão Ortobom Queen Size',13,1799,'2024-07-12',NULL,NULL),(13,'Ar Condicionado Split Samsung',18,2599,'2024-07-13',NULL,NULL),(14,'Aspirador de Pó Electrolux',4,499.9,'2024-07-14',NULL,NULL),(15,'Máquina de Lavar LG 11kg',17,1499,'2024-07-15',NULL,NULL),(16,'Cafeteira Nespresso Essenza',21,699.9,'2024-07-16',NULL,NULL),(17,'Aquecedor de Água Lorenzetti',25,899.9,'2024-07-17',NULL,NULL),(18,'Tablet Apple iPad Air',30,2499,'2024-07-18',NULL,NULL),(19,'Impressora HP OfficeJet Pro',22,499.9,'2024-07-19',NULL,NULL),(20,'Panela de Pressão Elétrica',28,349.9,'2024-07-20',NULL,NULL),(21,'Smartwatch Garmin Forerunner',16,1499,'2024-07-21',NULL,NULL),(22,'Projetor Epson Full HD',19,1599,'2024-07-22',NULL,NULL),(23,'Secadora de Roupas Electrolux',27,1899,'2024-07-23',NULL,NULL),(24,'Fritadeira Sem Óleo Philips',23,499.9,'2024-07-24',NULL,NULL),(25,'Ventilador Arno Turbo',26,299.9,'2024-07-25',NULL,NULL),(26,'Liquidificador Oster 700W',20,349.9,'2024-07-26',NULL,NULL),(27,'Máquina de Costura Singer',15,799,'2024-07-27',NULL,NULL),(28,'Despertador Inteligente Philips',24,199.9,'2024-07-28',NULL,NULL),(29,'Troninho Infantil Fisher-Price',29,149.9,'2024-07-29',NULL,NULL),(30,'Escova Alisadora Mondial',32,299.9,'2024-07-30',NULL,NULL),(31,'Secador de Cabelos Taiff',33,179.9,'2024-07-31',NULL,NULL),(32,'Cesta de Café da Manhã Gourmet',34,149.9,'2024-08-01',NULL,NULL),(33,'Chaleira Elétrica Cadence',35,149.9,'2024-08-02',NULL,NULL),(34,'Mochila Laptop Samsonite',36,399.9,'2024-08-03',NULL,NULL),(35,'Relógio de Parede Analógico',37,99.9,'2024-08-04',NULL,NULL),(36,'Cadeira de Escritório DXRacer',38,799.9,'2024-08-05',NULL,NULL),(37,'Travesseiro de Latex',39,299.9,'2024-08-06',NULL,NULL),(38,'Tênis Adidas Ultraboost',40,549.9,'2024-08-07',NULL,NULL),(39,'Camisa Polo Lacoste',41,249.9,'2024-08-08',NULL,NULL),(40,'Blender Profissional Oster',42,499.9,'2024-08-09',NULL,NULL),(41,'Garmin GPS para Carro',43,349.9,'2024-08-10',NULL,NULL),(42,'Assadeira de Alumínio Tramontina',44,129.9,'2024-08-11',NULL,NULL),(43,'Cafeteira Italiana Bialetti',45,149.9,'2024-08-12',NULL,NULL),(44,'Eletrodoméstico 4 em 1 Multifunções',46,599.9,'2024-08-13',NULL,NULL),(45,'Cesta de Frutas Premium',47,179.9,'2024-08-14',NULL,NULL),(46,'Espremedor de Laranja Elétrico',48,199.9,'2024-08-15',NULL,NULL),(47,'Massageador Elétrico Relax',49,299.9,'2024-08-16',NULL,NULL),(48,'Soprador de Folhas Black+Decker',50,499.9,'2024-08-17',NULL,NULL);
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-24 16:22:33
