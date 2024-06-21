-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.32-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk testing_testyii
CREATE DATABASE IF NOT EXISTS `testing_testyii` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `testing_testyii`;

-- membuang struktur untuk table testing_testyii.obat
CREATE TABLE IF NOT EXISTS `obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `harga` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Membuang data untuk tabel testing_testyii.obat: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
INSERT INTO `obat` (`id`, `nama`, `keterangan`, `harga`) VALUES
	(1, 'Postan', 'meredakan nyeri gigi', 40000),
	(2, 'Farsifen', 'mengurangi sakit gigi rendah', 5000),
	(3, 'Cataflam', 'mengurangi sakit gigi rendah', 45000);
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;

-- membuang struktur untuk table testing_testyii.pasien
CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `tindakan` varchar(255) DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Membuang data untuk tabel testing_testyii.pasien: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT INTO `pasien` (`id`, `nama`, `penyakit`, `tindakan`, `harga`) VALUES
	(1, 'Agi', 'sakit gigi', 'Cabut gigi', 2500000),
	(2, 'Dhita', 'gusi berdarah', 'Scaling', 250000),
	(3, 'Naufal', 'Gusi berdarah', NULL, NULL);
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;

-- membuang struktur untuk table testing_testyii.pegawai
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Membuang data untuk tabel testing_testyii.pegawai: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`id`, `nama`, `umur`) VALUES
	(1, 'Maria', 25),
	(2, 'Desi', 24),
	(3, 'Ahmad', 26);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;

-- membuang struktur untuk table testing_testyii.tindakan
CREATE TABLE IF NOT EXISTS `tindakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `penyakit` varchar(255) NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `harga` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Membuang data untuk tabel testing_testyii.tindakan: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `tindakan` DISABLE KEYS */;
INSERT INTO `tindakan` (`id`, `penyakit`, `solusi`, `harga`) VALUES
	(1, 'Gigi berlubang', 'Cabut gigi', 2500000),
	(2, 'Gusi berdarah', 'Scaling', 250000);
/*!40000 ALTER TABLE `tindakan` ENABLE KEYS */;

-- membuang struktur untuk table testing_testyii.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Membuang data untuk tabel testing_testyii.users: ~26 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
	(1, 'test1', 'pass1', 'test1@example.com'),
	(2, 'test2', 'pass2', 'test2@example.com'),
	(3, 'test3', 'pass3', 'test3@example.com'),
	(4, 'test4', 'pass4', 'test4@example.com'),
	(5, 'test5', 'pass5', 'test5@example.com'),
	(6, 'test6', 'pass6', 'test6@example.com'),
	(7, 'test7', 'pass7', 'test7@example.com'),
	(8, 'test8', 'pass8', 'test8@example.com'),
	(9, 'test9', 'pass9', 'test9@example.com'),
	(10, 'test10', 'pass10', 'test10@example.com'),
	(11, 'test11', 'pass11', 'test11@example.com'),
	(12, 'test12', 'pass12', 'test12@example.com'),
	(13, 'test13', 'pass13', 'test13@example.com'),
	(14, 'test14', 'pass14', 'test14@example.com'),
	(15, 'test15', 'pass15', 'test15@example.com'),
	(16, 'test16', 'pass16', 'test16@example.com'),
	(17, 'test17', 'pass17', 'test17@example.com'),
	(18, 'test18', 'pass18', 'test18@example.com'),
	(19, 'test19', 'pass19', 'test19@example.com'),
	(20, 'test20', 'pass20', 'test20@example.com'),
	(21, 'test21', 'pass21', 'test21@example.com'),
	(22, 'rehan', 'rehan', 'rehan@example.com'),
	(24, 'raihan', 'raihan', 'raihan@gmail.com'),
	(29, 'rehan12', 'rehan12', 'rehan12@gmail.com'),
	(32, 'rehan1', 'rehan1', 'rehan1@gmail.com'),
	(33, 'as', 'as', 'as');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- membuang struktur untuk table testing_testyii.wilayah
CREATE TABLE IF NOT EXISTS `wilayah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Membuang data untuk tabel testing_testyii.wilayah: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `wilayah` DISABLE KEYS */;
INSERT INTO `wilayah` (`id`, `nama`, `keterangan`) VALUES
	(1, 'Bandung', 'Dataran rendah'),
	(2, 'Jakarta', 'Dataran rendah (dekat dengan laut)'),
	(5, 'Dieng', 'Dataran tinggi\r\n'),
	(7, 'Yogyakarta', 'Dataran tinggi\r\n');
/*!40000 ALTER TABLE `wilayah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
