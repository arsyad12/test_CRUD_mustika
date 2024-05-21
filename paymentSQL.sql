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

-- Dumping data for table payment.mean_salary: ~3 rows (approximately)
INSERT INTO `mean_salary` (`pembayaran`, `percent_1`, `percent_2`, `gaji_karyawan_1`, `gaji_karyawan_2`, `gaji_karyawan_3`, `karyawan_1`, `karyawan_2`, `karyawan_3`, `percent_3`, `id`) VALUES
	(8000000, 30, 30, 2400000, 2400000, 3200000, 'arsyad', 'dodi', 'bobi', 40, 1),
	(1000000, 45, 15, 450000, 150000, 400000, 'Arsyad', 'dodi', 'bobi', 40, 2),
	(6000000, 50, 40, 3000000, 2400000, 600000, 'Son', 'Hung', 'Min', 10, 7);

-- Dumping data for table payment.users: ~1 rows (approximately)
INSERT INTO `users` (`nama`, `email`, `password`, `id`) VALUES
	('arsyad', 'arsyadbasofilamrii@gmail.com', 'asoloe29', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
