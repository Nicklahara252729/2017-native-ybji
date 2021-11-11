/*
Navicat MySQL Data Transfer

Source Server         : bangga
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : bangga

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2016-05-03 18:49:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for duta
-- ----------------------------
DROP TABLE IF EXISTS `duta`;
CREATE TABLE `duta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `duta` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `quote` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of duta
-- ----------------------------
INSERT INTO `duta` VALUES ('1', 'Arbi Mahmuda Harahap', 'Indonesia Youth Icon 2015', 'Medan', '1998-10-18', 'Terkadang lebih senang menyendiri utk memuhasabah diri apa yg sudah diperbuat utk hari ini', 'arbi.jpg');
INSERT INTO `duta` VALUES ('2', 'Inda Nitami Sembiring', 'Runner Up I Indonesia Youth Icon 2015', 'Medan', '1996-09-22', 'anggap dan jadikan semua orang penting\r\nJadikan selalu setiap orang  dalam hidupmu penting\r\nSedikit manja tapi terkadang dewasa, penikmat puisi dan penyayang\r\n', 'inda.jpg');
INSERT INTO `duta` VALUES ('3', 'Fathan Abdillah IskandarMuda', 'Runner Up II Indonesia Youth Icon 2015', 'Bekasi', '1999-04-07', 'Jadilah Nyata!', 'fathan.jpg');
INSERT INTO `duta` VALUES ('4', 'Wiwin Hartini ', 'Kader Bela Negara Bidang Wanita dan Remaja', 'Lumbanjulu', '1997-05-29', 'Be something that matters to others', 'wiwin.jpg');
INSERT INTO `duta` VALUES ('5', 'Nabila Qumairoh Hasibuan', 'Kader bela negara kemanusiaan dan sosial kemasyarakatan', 'Medan', '1999-06-26', 'kemauan, usaha,doa\r\nPercaya diri, mudah bangkit dari sebuah masalah, dan menolong sesama\r\n', 'nabila.jpg');
INSERT INTO `duta` VALUES ('6', 'Rizky Asyura Rangkuti', 'Kader Bela Negara Bidang Ekonomi dan Wirausaha', 'Medan', '1999-04-26', 'Masa depan bukan di tentukan oleh pendidikan, tetapi tekad dan kemauanlah yang menentukan masa depan', 'rizky.jpg');
INSERT INTO `duta` VALUES ('7', 'Chairunisa', 'Kader Bela Negara Bidang Lingkungan Hidup dan Pariwisata', 'Medan ', '1998-06-27', 'ikuti hati, karena cita2 akan sejalan dengan hati', 'icha.jpg');
INSERT INTO `duta` VALUES ('8', 'Qudriani Rahmadianti Ghassani Putri', 'Kader Bela Negara Bidang Pendidikan & Agama', 'Binjai', '1997-12-23', 'Saat kau berhenti menerima tantangan adalah saat dimana hidupmu berakhir', 'qudri.jpg');
INSERT INTO `duta` VALUES ('9', 'Fatahul Farma Jefri Kurnia', 'kader bela negara  bidang politik dan hukum', 'Gaung', '1999-09-01', 'People unpredictable the life, but can do for take an impresif future ', 'fatahul.jpg');
INSERT INTO `duta` VALUES ('10', 'Adrian liasta tarigan', 'Kader Bela Negara Bidang Informasi dan Teknologi', 'medan', '1999-05-03', 'The most important thing is love . Because faith without love is nothing', 'adrian.jpg');
INSERT INTO `duta` VALUES ('11', 'Toby Pradana', 'Kader Bela Negara Bidang Narkoba & Anak Terlantar ', 'Lubuk pakam', '1998-07-17', null, 'toby.jpg');
INSERT INTO `duta` VALUES ('12', 'Theddy Hendrawan Nst', 'Kader Bela Negara Bidang Olahraga & Kesehatan', 'Medan', '1998-10-19', 'make your own story , to get your increadible journey ', 'theddy.jpg');
INSERT INTO `duta` VALUES ('13', 'Adelia Safrita Batubara', 'Kader Bela Negara Bidang Seni & Budaya', 'Medan', '1999-12-22', 'Taklukkan takutmu', 'adelia.jpg');
