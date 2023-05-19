-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for perpustakaan01
CREATE DATABASE IF NOT EXISTS `perpustakaan01` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `perpustakaan01`;

-- Dumping structure for table perpustakaan01.book
CREATE TABLE IF NOT EXISTS `book` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `publication_year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_publisher` int unsigned NOT NULL,
  `id_category` int unsigned NOT NULL,
  `quantity` int NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_publisher` (`id_publisher`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table perpustakaan01.book: ~7 rows (approximately)
INSERT INTO `book` (`id`, `title`, `author`, `publication_year`, `id_publisher`, `id_category`, `quantity`, `updated_at`, `created_at`, `deleted_at`) VALUES
	(22, 'Jojo Bizzare Adventure', 'Hihoko Araki', '1999', 1, 16, 60, '2023-05-17 10:49:42', '2023-05-17 08:10:34', NULL),
	(23, 'Setelah Hujan Reda', 'Boy Chandra', '2018', 4, 20, 30, '2023-05-17 10:45:40', '2023-05-17 08:15:16', NULL),
	(24, 'One piece ', 'Eichoro Oda', '1999', 1, 22, 106, '2023-05-18 17:49:02', '2023-05-17 08:25:04', NULL),
	(25, 'Classroom Elite', 'unknow', '2019', 4, 17, 22, '2023-05-19 10:54:52', '2023-05-17 08:34:51', NULL),
	(26, '25 Kisah Nabi dan Rasul', 'unknow', '2018', 4, 21, 20, '2023-05-18 14:45:13', '2023-05-18 14:45:13', NULL),
	(27, 'Naruto Shippuden', 'Masashi Kishimoto', '2004', 1, 22, 70, '2023-05-19 08:42:43', '2023-05-18 17:49:49', '2023-05-19 08:42:43'),
	(28, 'anunaki', 'Eichoro Oda', '2000', 2, 20, 40, '2023-05-19 08:39:04', '2023-05-19 08:26:27', '2023-05-19 08:39:04');

-- Dumping structure for table perpustakaan01.borrow
CREATE TABLE IF NOT EXISTS `borrow` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_borrower` int unsigned NOT NULL,
  `id_book` int unsigned NOT NULL,
  `id_staff` int unsigned NOT NULL,
  `release_date` date NOT NULL,
  `due_date` date NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_borrower` (`id_borrower`),
  KEY `id_book` (`id_book`),
  KEY `id_staf` (`id_staff`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table perpustakaan01.borrow: ~17 rows (approximately)
INSERT INTO `borrow` (`id`, `id_borrower`, `id_book`, `id_staff`, `release_date`, `due_date`, `note`, `updated_at`, `created_at`, `deleted_at`) VALUES
	(2, 7, 23, 2, '2023-05-17', '2023-05-20', 'Selesai Pinjam', '2023-05-19 10:32:02', NULL, '2023-05-19 10:32:02'),
	(3, 8, 24, 2, '2023-05-07', '2023-05-19', 'Selesai Pinjam', '2023-05-19 09:37:26', '2023-05-17 10:12:38', NULL),
	(4, 9, 22, 2, '2023-05-18', '2023-05-19', 'Selesai Pinjam', '2023-05-19 09:53:57', '2023-05-17 10:13:33', NULL),
	(5, 8, 22, 2, '2023-05-17', '2023-05-20', 'Selesai Pinjam', '2023-05-19 10:06:01', '2023-05-17 10:14:17', NULL),
	(6, 7, 22, 2, '2023-05-17', '2023-05-19', 'Selesai Pinjam', '2023-05-19 10:27:40', '2023-05-17 10:39:06', NULL),
	(7, 7, 24, 2, '2023-05-19', '2023-05-20', 'Selesai Pinjam', '2023-05-19 10:27:14', '2023-05-17 10:56:34', NULL),
	(8, 9, 24, 2, '2023-05-17', '2023-05-20', 'Pinjam', '2023-05-19 11:22:23', '2023-05-17 11:04:15', NULL),
	(9, 8, 25, 0, '2023-05-17', '2023-05-20', 'Peminjaman Buku', '2023-05-17 11:34:09', '2023-05-17 11:28:52', '2023-05-17 11:34:09'),
	(10, 8, 22, 2, '2023-05-17', '2023-05-20', 'Pinjam', '2023-05-17 12:07:40', '2023-05-17 11:32:25', '2023-05-17 12:07:40'),
	(11, 7, 23, 2, '2023-05-17', '2023-05-20', 'Pinjam', '2023-05-17 11:58:55', '2023-05-17 11:33:52', NULL),
	(12, 7, 22, 2, '2023-05-17', '2023-05-20', 'Pinjam', '2023-05-17 12:06:03', '2023-05-17 12:05:19', NULL),
	(13, 9, 23, 2, '2023-05-18', '2023-05-20', 'Pinjam', '2023-05-19 10:08:50', '2023-05-18 10:12:55', '2023-05-19 10:08:50'),
	(14, 8, 22, 2, '2023-05-18', '2023-05-22', 'Pinjam', '2023-05-19 08:29:29', '2023-05-18 10:13:21', NULL),
	(15, 8, 25, 2, '2023-05-18', '2023-05-24', 'Pinjam', '2023-05-19 08:28:25', '2023-05-18 10:13:45', NULL),
	(16, 8, 23, 2, '2023-05-19', '2023-05-22', 'Pinjam', '2023-05-19 08:27:42', '2023-05-19 08:27:42', NULL),
	(17, 0, 0, 0, '0000-00-00', '0000-00-00', 'Selesai Pinjam', '2023-05-19 09:30:38', '2023-05-19 09:24:43', '2023-05-19 09:30:38'),
	(18, 0, 0, 0, '0000-00-00', '0000-00-00', 'Selesai Pinjam', '2023-05-19 09:30:30', '2023-05-19 09:26:04', '2023-05-19 09:30:30');

-- Dumping structure for table perpustakaan01.borrower
CREATE TABLE IF NOT EXISTS `borrower` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table perpustakaan01.borrower: ~2 rows (approximately)
INSERT INTO `borrower` (`id`, `name`, `birthdate`, `address`, `gender`, `contact`, `email`, `updated_at`, `created_at`, `deleted_at`) VALUES
	(7, 'feriel', '2005-02-06', 'Kp.Biru', 'L', '0898976378364', 'feriel@gmail.com', '2023-05-18 11:16:27', '2023-05-16 12:31:28', NULL),
	(8, 'Gwen', '2003-02-07', 'Runeterra', 'P', '048377368723', 'gwen@gmail.com', '2023-05-18 11:15:56', '2023-05-16 12:38:35', NULL),
	(9, 'Xayah', '2000-02-09', 'Runeterra', 'P', '08735477483', 'xayah@gmail.com', '2023-05-16 12:39:45', '2023-05-16 12:39:45', NULL),
	(10, 'Asep', '2004-06-03', 'Kp.Biru', 'L', '089897348', 'asep@gmail.com', '2023-05-18 10:59:53', '2023-05-18 10:59:53', NULL);

-- Dumping structure for table perpustakaan01.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table perpustakaan01.category: ~6 rows (approximately)
INSERT INTO `category` (`id`, `category`, `updated_at`, `created_at`, `deleted_at`) VALUES
	(16, 'Komik', '2023-05-16 12:29:41', '2023-05-16 12:29:41', NULL),
	(17, 'Action', '2023-05-16 12:29:50', '2023-05-16 12:29:50', NULL),
	(18, 'Romansa', '2023-05-16 12:29:57', '2023-05-16 12:29:57', NULL),
	(19, 'Pelajaran', '2023-05-16 12:30:05', '2023-05-16 12:30:05', NULL),
	(20, 'Cerpen', '2023-05-16 12:30:20', '2023-05-16 12:30:20', NULL),
	(21, 'Novel', '2023-05-18 10:45:51', '2023-05-18 10:45:51', NULL),
	(22, 'Manga', '2023-05-18 17:48:36', '2023-05-18 17:48:36', NULL);

-- Dumping structure for table perpustakaan01.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table perpustakaan01.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1680930617, 1);

-- Dumping structure for table perpustakaan01.publisher
CREATE TABLE IF NOT EXISTS `publisher` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table perpustakaan01.publisher: ~5 rows (approximately)
INSERT INTO `publisher` (`id`, `name`, `address`, `contact`, `updated_at`, `created_at`, `deleted_at`) VALUES
	(1, 'Shonen Jump', 'jepang', '9879398382', '2023-05-18 10:43:19', NULL, NULL),
	(2, 'PT Gramedia', 'Jakarta', '089217387483', '2023-05-18 10:15:42', NULL, NULL),
	(3, 'PT BukuKita', 'Bandung', '081292794733', '2023-05-18 10:15:58', NULL, NULL),
	(4, 'PT Mediakita', 'Ciganjur', '087463826378', '2023-05-18 10:16:09', NULL, NULL),
	(5, 'PT DuniaKita', 'salam binjai', '1212312121212', '2023-05-18 10:16:22', NULL, NULL);

-- Dumping structure for table perpustakaan01.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table perpustakaan01.staff: ~9 rows (approximately)
INSERT INTO `staff` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`, `deleted_at`) VALUES
	(1, 'Gwen', 'gwen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-17 18:01:03', NULL, NULL),
	(2, 'Feriel Syahputra', 'feriel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-17 18:01:31', NULL, NULL),
	(3, 'user1', 'acer1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-18 10:56:23', '2023-05-12 13:03:15', NULL),
	(4, 'user2', 'user2@gmail.com', '74e15d67c3cf3a8acb4658c35cb2e3c0', '2023-05-19 08:41:31', '2023-05-12 21:27:43', '2023-05-19 08:41:31'),
	(5, 'Rushia', 'rushia@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2023-05-18 17:50:24', '2023-05-13 12:22:06', '2023-05-18 17:50:24'),
	(6, 'Jinx', 'jinx@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-18 17:50:14', '2023-05-13 12:42:29', '2023-05-18 17:50:14'),
	(7, 'feriel', 'feriel2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-17 18:01:44', '2023-05-15 09:45:23', '2023-05-17 18:01:44'),
	(8, 'Jhin', 'jhin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-18 17:50:19', '2023-05-15 12:09:11', '2023-05-18 17:50:19'),
	(9, 'user4', 'user4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-19 08:38:52', '2023-05-19 08:25:24', '2023-05-19 08:38:52');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
