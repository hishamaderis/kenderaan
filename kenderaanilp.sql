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


-- Dumping database structure for kenderaanilp
CREATE DATABASE IF NOT EXISTS `kenderaanilp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `kenderaanilp`;

-- Dumping structure for table kenderaanilp.kenderaan
CREATE TABLE IF NOT EXISTS `kenderaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jeniskenderaan` varchar(255) NOT NULL,
  `pemandu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `noplatkenderaan` varchar(255) NOT NULL,
  `catatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kenderaanilp.kenderaan: ~4 rows (approximately)
INSERT INTO `kenderaan` (`id`, `jeniskenderaan`, `pemandu`, `noplatkenderaan`, `catatan`) VALUES
	(1, 'Coaster Bus', 'En. Ariif Bin Sulaiman Thani', 'WVS 6424', 'Lawatan Sambil Belajar Ke Universiti Teknologi Malaysia Skudai Johor'),
	(2, 'Van', 'En. Kamal Hassan Bin Kamarulzaman', 'VWG 9961', 'Lawatan Sambil Belajar'),
	(3, 'Coaster Bus', 'En. Ariif Bin Sulaiman Thani', 'WVS 6424', 'Lawatan Sambil Belajar'),
	(4, 'Coaster Bus', 'En. Ching Ah Leong', 'VQR 5652', 'Lawatan Sambil Belajar');

-- Dumping structure for table kenderaanilp.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `no_ndp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kenderaanilp.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `kelas`, `no_ndp`) VALUES
	(1, 'admin', '$2y$10$z4TDUoZE0EvYPhmZ5ZYGf.fwb6100QAmEFVT2HArIUu9ewObk8paG', 'TPP', '23223190');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
