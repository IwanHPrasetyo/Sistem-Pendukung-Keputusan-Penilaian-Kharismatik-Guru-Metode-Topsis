-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kharismatik
CREATE DATABASE IF NOT EXISTS `kharismatik` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `kharismatik`;

-- Dumping structure for table kharismatik.data_admin
CREATE TABLE IF NOT EXISTS `data_admin` (
  `Id` varchar(6) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.data_guru
CREATE TABLE IF NOT EXISTS `data_guru` (
  `NIP` varchar(2) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Mapel` varchar(50) DEFAULT NULL,
  `Kelas` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.data_nilai_guru
CREATE TABLE IF NOT EXISTS `data_nilai_guru` (
  `NIP` varchar(2) NOT NULL,
  `kep_sosial` double DEFAULT NULL,
  `kep_belajar` double DEFAULT NULL,
  `peng_sekolah` double DEFAULT NULL,
  `man_sda` double DEFAULT NULL,
  `kewirausahaan` double DEFAULT NULL,
  `super_belajar` double DEFAULT NULL,
  KEY `FK_tb_guru_data_guru` (`NIP`),
  CONSTRAINT `FK_tb_guru_data_guru` FOREIGN KEY (`NIP`) REFERENCES `data_guru` (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.data_nilai_guru_total
CREATE TABLE IF NOT EXISTS `data_nilai_guru_total` (
  `NIP` varchar(2) DEFAULT NULL,
  `NIS` varchar(50) DEFAULT NULL,
  `kep_sosial` int(12) DEFAULT NULL,
  `kep_belajar` int(12) DEFAULT NULL,
  `peng_sekolah` int(12) DEFAULT NULL,
  `man_sda` int(12) DEFAULT NULL,
  `kewirausahaan` int(12) DEFAULT NULL,
  `super_belajar` int(12) DEFAULT NULL,
  KEY `FK_data_nilai_guru_total_data_guru` (`NIP`),
  KEY `FK_data_nilai_guru_total_data_siswa` (`NIS`),
  CONSTRAINT `FK_data_nilai_guru_total_data_guru` FOREIGN KEY (`NIP`) REFERENCES `data_guru` (`NIP`),
  CONSTRAINT `FK_data_nilai_guru_total_data_siswa` FOREIGN KEY (`NIS`) REFERENCES `data_siswa` (`NIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.data_siswa
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `NIS` varchar(50) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Kelas` varchar(50) DEFAULT NULL,
  `Jurusan` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.kriteria
CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(50) DEFAULT NULL,
  `bobot` double DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.max_min_topsis
CREATE TABLE IF NOT EXISTS `max_min_topsis` (
  `id_kriteria` int(11) NOT NULL,
  `nilai_max_min` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.nilai_topsis
CREATE TABLE IF NOT EXISTS `nilai_topsis` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) DEFAULT NULL,
  `NIP` varchar(2) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=2113 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table kharismatik.rangking
CREATE TABLE IF NOT EXISTS `rangking` (
  `Rangking` int(11) DEFAULT NULL,
  `NIP` varchar(2) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  KEY `FK_rangking_data_guru` (`NIP`),
  CONSTRAINT `FK_rangking_data_guru` FOREIGN KEY (`NIP`) REFERENCES `data_guru` (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
