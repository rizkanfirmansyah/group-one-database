-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for akademik
CREATE DATABASE IF NOT EXISTS `akademik` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `akademik`;

-- Dumping structure for table akademik.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table akademik.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
	(1, 'admin', 'admin123', '');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table akademik.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `kdDosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` varchar(50) NOT NULL,
  PRIMARY KEY (`kdDosen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table akademik.dosen: ~3 rows (approximately)
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` (`kdDosen`, `nama`, `email`, `noHp`) VALUES
	(1, 'Rudi Kurniawan', 'parudi@gmail.com', '0812345674'),
	(2, 'riezkan', 'riezkan23@gmail.com', '0812345632'),
	(3, 'faisal', 'faisalrizkiramdani@gmail.com', '0812345678');
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;

-- Dumping structure for table akademik.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `kd_mk` int(11) NOT NULL AUTO_INCREMENT,
  `npm` char(50) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`npm`),
  KEY `kd_mk` (`kd_mk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table akademik.mahasiswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`kd_mk`, `npm`, `nama`, `alamat`) VALUES
	(1, '2142442', 'Muhammad Sumbul', 'Soreang'),
	(1, '62452', 'Ich bin selamat', 'Soreang');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table akademik.matakuliah
CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kd_mk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mk` varchar(50) NOT NULL,
  `sks` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_mk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table akademik.matakuliah: ~3 rows (approximately)
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` (`kd_mk`, `nama_mk`, `sks`) VALUES
	(1, 'Distributted Computing', '3'),
	(2, 'Practical Operating System', '4'),
	(3, 'Database SQL', '3');
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;

-- Dumping structure for table akademik.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `npm` char(50) NOT NULL DEFAULT '',
  `kd_dosen` int(11) NOT NULL,
  `kd_mk` int(11) NOT NULL,
  `nHadir` varchar(50) NOT NULL,
  `nTugas` varchar(50) NOT NULL,
  `uts` varchar(50) NOT NULL,
  `uas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table akademik.nilai: ~3 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`npm`, `kd_dosen`, `kd_mk`, `nHadir`, `nTugas`, `uts`, `uas`) VALUES
	('2142442', 1, 1, '8', '8', '8', '8'),
	('2142443', 2, 2, '9', '9', '9', '9'),
	('2142444', 3, 3, '10', '10', '10', '10');
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
