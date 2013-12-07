-- MySQL dump 10.13  Distrib 5.5.32, for Win32 (x86)
--
-- Host: localhost    Database: sekolah
-- ------------------------------------------------------
-- Server version	5.5.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `absensi`
--

DROP TABLE IF EXISTS `absensi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absensi` (
  `id_absensi` int(4) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `alasan` varchar(20) NOT NULL,
  `id_tahun` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_absensi`),
  KEY `id_siswa` (`nis`),
  CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absensi`
--

LOCK TABLES `absensi` WRITE;
/*!40000 ALTER TABLE `absensi` DISABLE KEYS */;
/*!40000 ALTER TABLE `absensi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (5,'Pembuatan bahan ajar','Pembuatan bahan ajar di SMK Negeri 1 Kota Bekasi','2013-10-12'),(6,'test isi agenda','test isi agenda kegiatan edited','2013-10-01'),(7,'Pemotongan Hewan Qurban','Pemotongan Hewan Qurban diadakan di SMK Negeri 1 Kota Bekasi','2013-10-16');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forward`
--

DROP TABLE IF EXISTS `forward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forward` (
  `no_tlp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forward`
--

LOCK TABLES `forward` WRITE;
/*!40000 ALTER TABLE `forward` DISABLE KEYS */;
INSERT INTO `forward` VALUES ('08988714791'),('085694864180');
/*!40000 ALTER TABLE `forward` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `alamat` text,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `tmt` varchar(10) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nuptk` varchar(30) DEFAULT NULL,
  `pangkat` varchar(25) DEFAULT NULL,
  `gol` varchar(5) DEFAULT NULL,
  `thn_lulus` int(4) DEFAULT NULL,
  `id_kelas` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_guru`),
  KEY `NewIndex1` (`username`),
  KEY `id_kelas` (`id_kelas`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru`
--

LOCK TABLES `guru` WRITE;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` VALUES (1,'Dra. Hj. Nelwati','Bktinggi,','1968-02-06','Bekasi',NULL,NULL,'1835',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Hj. Herlina, S.Pd','Kuningan,','1958-10-21','Bekasi',NULL,NULL,'1237',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Dra. Hj.Renowati','Semarang,','1964-04-08','Bekasi',NULL,NULL,'1412',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Dra. Sri Haryati','Purworejo,','1964-06-08','Bekasi',NULL,NULL,'1675',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Neneng Menara Saidah, M.Pd','Sukabumi,','1966-01-03','Bekasi',NULL,NULL,'1668',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'Mulyana, S.Pd','Bekasi,','1966-03-26','Bekasi',NULL,NULL,'1161',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'Elvi Desilia Fajarina, S.Pd','Jakarta,','1969-07-20','Bekasi',NULL,NULL,'2472',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Endah Sulistiani, S.Pd, M.Si','Kediri,','1968-12-22','Bekasi',NULL,NULL,'1085',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Lia Yuni Amalia, M.Pd','Jakarta,','1965-05-12','Bekasi',NULL,NULL,'1662',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'Muhaimin, S.Ag, M.Pd','Bekasi,','1972-06-04','Bekasi',NULL,NULL,'1833',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'Drs. Boan, M.Pd','Bekasi,','1966-09-11','Bekasi',NULL,NULL,'1689',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'Riadi, M.Pd','Krganting,','1967-08-17','Bekasi',NULL,NULL,'2086',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'Sumarsono Widiaharjo, S.Pd','Pus Negara,','1966-10-07','Bekasi',NULL,NULL,'1534',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'Apra Mitra, S.Pd','Pykumbuh,','1969-05-25','Bekasi',NULL,NULL,'1255',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'Naman, S.Pd','Bekasi,','1969-08-15','Bekasi',NULL,NULL,'1260',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'Eko Winarso, S.Pd','Pekalongan,','1971-06-05','Bekasi',NULL,NULL,'1666',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'Lubby Cahyadi, S.Pd','Aceh,','1971-09-17','Bekasi',NULL,NULL,'2176',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'R. Prawoto Hari W, S.Pd','Bandung,','1973-04-28','Bekasi',NULL,NULL,'1694',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'Umi Ani Faridah, S.Pd','Jombang,','1976-02-06','Bekasi',NULL,NULL,'2434',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'Dra. M. A.  Ingewati Hasjim','Jakarta,','1972-08-15','Bekasi',NULL,NULL,'1716',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'Drs. Dwi Sumantri','Jember,','1960-08-07','Bekasi',NULL,NULL,'1126',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'Drs. Heru Sukamto','Yogya,','1963-07-21','Bekasi',NULL,NULL,'1089',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'Dra. Reny Astuty','Lumajang,','1965-05-20','Bekasi',NULL,NULL,'1758',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'Hj. Akhernawati, M.Pd','Sidempuan,','1968-12-06','Bekasi',NULL,NULL,'1439',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,'Hazrul Edyarta Putra, S.Pd','Curup,','1972-10-28','Bekasi',NULL,NULL,'1387',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'Urip Setiawan, S.Pd','Pemalang,','1973-11-12','Bekasi',NULL,NULL,'1698',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'Muhamad Anas, S.Pd','Jakarta,','1975-12-02','Bekasi',NULL,NULL,'1790',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'Hj. Sjamsiah, S.Pd, M.M','Jakarta,','1978-07-15','Bekasi',NULL,NULL,'1268',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'Dra. Kisyana','Sala,','1966-05-21','Bekasi',NULL,NULL,'2341',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,'Gunardi Sutriyanto, S.Pd','Jakarta,','1964-08-31','Bekasi',NULL,NULL,'1563',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'Eti Haerati, S.Pd','Pandeglang,','1967-02-02','Bekasi',NULL,NULL,'1393',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'Irwadianto, S.Pd','Solok,','1967-11-22','Bekasi',NULL,NULL,'2470',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'Ibnu Majah, S.Pd','Palembang,','1968-08-14','Bekasi',NULL,NULL,'2308',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'Polma P Sinaga, S.Pd','Pasaribu,','1968-12-13','Bekasi',NULL,NULL,'1951',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,'Abdul Salim, S.IP, M.Pd','Bekasi,','1970-10-29','Bekasi',NULL,NULL,'2410',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'Beny Sanata Mesu Mardani, S.Pd','Yogya,','1970-11-03','Bekasi',NULL,NULL,'1017',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,'Siti Hardiah, S.Pd','Bogor,','1971-08-22','Bekasi',NULL,NULL,'1321',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'Dani Alfizan, S.T, M.Pd','Padang,','1971-09-17','Bekasi',NULL,NULL,'1551',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'Siti Muawanah, S.Pd','Magetan,','1976-04-24','Bekasi',NULL,NULL,'1765',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'Zaenal Abidin, S.Pd','Tegal,','1978-08-15','Bekasi',NULL,NULL,'1084',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'Hasnul Kadar Arwasaputra, S.Pd','Subang,','1965-11-25','Bekasi',NULL,NULL,'1181',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,'Ayung Sardi, S.Pd','50Koto,','1966-11-12','Bekasi',NULL,NULL,'1683',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,'Drs. Tuwono','Jakarta,','1967-10-19','Bekasi',NULL,NULL,'2362',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,'Ruspina Hutabalian, S.Pd','Taput,','1967-11-04','Bekasi',NULL,NULL,'2345',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,'Hestiningsih, S.Pd','Jakarta,','1970-08-04','Bekasi',NULL,NULL,'1379',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(46,'Faiqoh Qurrotu Aini, S.Pd','Jakarta,','1970-12-26','Bekasi',NULL,NULL,'2184',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(47,'Suhariyanto, S.Pd','Grobogan,','1973-02-10','Bekasi',NULL,NULL,'2237',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(48,'Imis Hasugian, S.Pd','Medan,','1973-01-30','Bekasi',NULL,NULL,'1048',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(49,'Yuni Sukapti, S.Pd','Jakarta,','1973-02-26','Bekasi',NULL,NULL,'1464',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(50,'Kosim Komarudin, S.Pd','Bekasi,','1973-06-04','Bekasi',NULL,NULL,'1745',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,'Surahmi, S.Pd','Jakarta,','1974-09-06','Bekasi',NULL,NULL,'1565',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(52,'Arman, S.Pd','Bktinggi,','1974-10-14','Bekasi',NULL,NULL,'2538',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(53,'Nikmah Daulae, S.Pd','Sidempuan,','1970-11-27','Bekasi',NULL,NULL,'1425',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,'Rochmad Priyadi, S.Pd','Jakarta,','1975-07-12','Bekasi',NULL,NULL,'1652',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(55,'Samad, S.Pd.I','Jakarta,','1975-09-04','Bekasi',NULL,NULL,'1088',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(56,'Iwan Unwanudin, S.Pd','Bekasi,','1977-03-11','Bekasi',NULL,NULL,'2558',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(57,'Pangat Kusnadi, S.Pd','Purworejo,','1977-03-11','Bekasi',NULL,NULL,'1622',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(58,'Sandi Purba, S.Pd','Palembang,','1978-09-04','Bekasi',NULL,NULL,'1682',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(59,'Achmad Supardi, S.Pd','Jakarta,','1978-04-09','Bekasi',NULL,NULL,'1416',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(60,'Riva Yuliana, S.Pd','Jakarta,','1978-10-02','Bekasi',NULL,NULL,'2543',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(61,'Ponco Wibowo, S.Pd','Jakarta,','1977-07-28','Bekasi',NULL,NULL,'1047',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(62,'Tahiyatul Bariroh, S.Hum','Jakarta,','1978-09-15','Bekasi',NULL,NULL,'2279',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(63,'Anista Bintari, S.Pd','Jakarta,','1981-11-04','Bekasi',NULL,NULL,'1700',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(64,'Yuni Handayani, S.Pd','Jakarta,','1980-07-29','Bekasi',NULL,NULL,'2205',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(65,'Indah Puspitasari, S.Kom','Jakarta,','1983-11-30','Bekasi',NULL,NULL,'2066',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(66,'Vinawati Hervina Ayuningsih, S.Pd','Jakarta,','1978-03-18','Bekasi',NULL,NULL,'2089',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(67,'Mustika Herita, S.Pd','Jakarta,','1982-09-07','Bekasi',NULL,NULL,'2333',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(68,'NURJANAH, S.Pd','Jakarta,','1986-02-20','Bekasi',NULL,NULL,'1855',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(69,'DELA CHAERANI, S.Kom.','Jakarta,','1981-02-07','Bekasi',NULL,NULL,'1068',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(70,'SILVIA JOHN, S.Pd','Jakarta,','1984-08-08','Bekasi',NULL,NULL,'2058',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(71,'Drs. Tito Sulihanto','Bekasi,','1987-06-01','Bekasi',NULL,NULL,'1296',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(72,'Dra. Nining Indrawati','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1722',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(73,'Dra. Yayah Fauziah','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1951',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(74,'Hendri Yeni, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2031',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(75,'Syafrina, S.Ag','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1901',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(76,'Susmiati M. Asih, SE','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1271',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(77,'Aep Surahto, S.T','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2336',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(78,'Mubarok, S.Ag','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1166',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(79,'Imron Sukroni, S. Ag','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1392',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(80,'R. Asep Satari, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2197',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(81,'Lam Marsauli Tobing, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2543',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(82,'Barata Antariksa, S.Si','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2234',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(83,'Nurfaradisil Ummah,S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1225',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(84,'Desiana Sari Dewi, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1397',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(85,'Maman Suparman, SE','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2520',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(86,'Mellyana, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1098',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(87,'Arini Qurrata\'ain, S.Hum','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1895',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(88,'Andri Priyono, S.Kom','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1754',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(89,'Winahyu Endah, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2190',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(90,'Slamet Akhmad S., S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1906',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(91,'Sugiyono, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1262',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(92,'Ir. Subandrio','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1630',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(93,'Ir Nani Sekarningsih','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1342',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(94,'Wahyu Lesmono, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2160',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(95,'Febri Dwi Prasasti','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1997',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(96,'Susanti, S.Pd (English)','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1187',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(97,'Kirani Afrita Pratiwi, S.Si','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1967',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(98,'Alfred Abraham Ndun, S.Th','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1485',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(99,'Catur Sulistyo, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2062',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(100,'Dyah Suryati, S.Kom','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1111',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(101,'Hasnah Akkas, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1821',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(102,'Susanti, S.Pd (B.Ind)','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1681',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(103,'Wulandari, SE','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1716',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(104,'Khairunnisa Handayani, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2113',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(105,'Tati Nurhayati, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1344',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(106,'Liana Asripradipta','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1694',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(107,'Euis Trisna Gumilar, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2168',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(108,'Desri Suryani','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2362',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(109,'Titut Supriyani, S.Pd','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2216',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(110,'Heni Ariyani, S.T','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2151',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(111,'Nur Nugraheni, SE, Ak','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1659',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(112,'Try Handoko, S.Kom','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2528',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(113,'Agus Wibowo, A.Md','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'2115',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(114,'Supriyadi, A.Md','Bekasi,','0000-00-00','Bekasi',NULL,NULL,'1719',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(115,'Dra. Turyani',NULL,NULL,NULL,NULL,NULL,'4390',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(116,'Bambang Prasetyo W, S.Pd. M.Si.',NULL,NULL,NULL,NULL,NULL,'4431',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(117,'Lusi Yusri, S.Pd','Bekasi','1982-12-20','Jl. Bintara Raya','lusi@yusri.co.id','08561185523','4233',NULL,'112232554','22',NULL,NULL,NULL,NULL),(118,'Lam Marsauli Tobing, M.Pd',NULL,NULL,NULL,NULL,NULL,'4082',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(119,'Mellyana, ST.',NULL,NULL,NULL,NULL,NULL,'4257',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(120,'Andri Apriyono, S.Kom',NULL,NULL,NULL,NULL,NULL,'4213',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(121,'Muhammad Fauzi N, S.Pd.',NULL,NULL,NULL,NULL,NULL,'4494',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(122,'Citra Firaidah Noor, S.Pd.',NULL,NULL,NULL,NULL,NULL,'4457',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(123,'Ratna Budhiarti, S.Pd',NULL,NULL,NULL,NULL,NULL,'4481',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(124,'Dwi Nur Raynnie, S.Pd',NULL,NULL,NULL,NULL,NULL,'4419',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(125,'Pratiedina Rachmanti, S.Pd',NULL,NULL,NULL,NULL,NULL,'4031',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(126,'Nurrochman Hamid, S.Pd',NULL,NULL,NULL,NULL,NULL,'4158',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(127,'Ricki Aziz Husein, S.Pd',NULL,NULL,NULL,NULL,NULL,'4366',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(128,'Drs. D A Prihandika',NULL,NULL,NULL,NULL,NULL,'4394',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(129,'Titi Kurniyati, S.Pd.',NULL,NULL,NULL,NULL,NULL,'4131',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(130,'Dra. Teti Herawati',NULL,NULL,NULL,NULL,NULL,'4174',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(131,'Xena Janitra Lathifah, S.Pd.',NULL,NULL,NULL,NULL,NULL,'4381',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(132,'Ligar Nurlailah, S.Pd.',NULL,NULL,NULL,NULL,NULL,'4286',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbox` (
  `no_asal` varchar(15) DEFAULT NULL,
  `isi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbox`
--

LOCK TABLES `inbox` WRITE;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenismapel`
--

DROP TABLE IF EXISTS `jenismapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenismapel` (
  `id_jenismapel` int(10) NOT NULL AUTO_INCREMENT,
  `jenismapel` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jenismapel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenismapel`
--

LOCK TABLES `jenismapel` WRITE;
/*!40000 ALTER TABLE `jenismapel` DISABLE KEYS */;
INSERT INTO `jenismapel` VALUES (1,'Adaptif'),(2,'Normatif'),(3,'Produktif'),(4,'Kelompok A'),(5,'Kelompok B'),(6,'Kelompok C');
/*!40000 ALTER TABLE `jenismapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurusan` (
  `id_jurusan` int(4) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES (1,'MULTIMEDIA'),(2,'Rekayasa Perangkat Lunak'),(3,'Teknik Kendaraan Ringan'),(4,'Teknik Pemesinan'),(5,'Teknik Pengelasan'),(6,'Teknik Komputer Jaringan'),(7,'Busana Butik'),(8,'Akutansi');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kasus`
--

DROP TABLE IF EXISTS `kasus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kasus` (
  `id_kasus` int(10) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `kasus` text,
  `alasan` text,
  `tindakan` text,
  `tgl_penanganan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kasus`),
  KEY `kasus_nis` (`nis`),
  CONSTRAINT `kasus_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kasus`
--

LOCK TABLES `kasus` WRITE;
/*!40000 ALTER TABLE `kasus` DISABLE KEYS */;
/*!40000 ALTER TABLE `kasus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `id_kelas` int(4) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(4) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_jurusan` (`id_jurusan`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (19,4,'XTPA'),(20,4,'XTPB'),(21,3,'XTKRA'),(22,3,'XTKRB'),(23,5,'XTPLA'),(24,1,'XMMA'),(25,1,'XMMB'),(26,6,'XTKJA'),(27,6,'XTKJB'),(28,2,'XRPLA'),(29,2,'XRPLB'),(30,8,'XAKA'),(31,8,'XAKB'),(32,7,'XBB'),(33,5,'XTPLB'),(34,3,'XTKRC'),(35,3,'XTKRD'),(36,8,'XAKC');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapel`
--

DROP TABLE IF EXISTS `mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapel` (
  `id_tahun` int(3) DEFAULT NULL,
  `id_guru` int(10) DEFAULT NULL,
  `id_mapel` int(10) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(100) DEFAULT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `id_jenismapel` int(10) DEFAULT NULL,
  `kkm` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`),
  KEY `guru_index` (`id_guru`),
  KEY `tahun_index` (`id_tahun`),
  KEY `id_jenismapel` (`id_jenismapel`),
  CONSTRAINT `FK_mapel` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_mapel_jenismapel` FOREIGN KEY (`id_jenismapel`) REFERENCES `jenismapel` (`id_jenismapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mapel_tahun` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapel`
--

LOCK TABLES `mapel` WRITE;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` VALUES (5,1,13,'PAI2-13','Agama Islam','',1,70.00);
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapel_ambil`
--

DROP TABLE IF EXISTS `mapel_ambil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapel_ambil` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(10) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nilai_uts` decimal(10,2) DEFAULT NULL,
  `nilai_raport` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mapel_index` (`id_mapel`),
  KEY `nis_index` (`nis`),
  CONSTRAINT `FK_mapel_ambil` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mapel_ambil_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapel_ambil`
--

LOCK TABLES `mapel_ambil` WRITE;
/*!40000 ALTER TABLE `mapel_ambil` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapel_ambil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outbox`
--

DROP TABLE IF EXISTS `outbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outbox` (
  `no_tlp` varchar(15) DEFAULT NULL,
  `isi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outbox`
--

LOCK TABLES `outbox` WRITE;
/*!40000 ALTER TABLE `outbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `outbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengumuman`
--

DROP TABLE IF EXISTS `pengumuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengumuman` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengumuman`
--

LOCK TABLES `pengumuman` WRITE;
/*!40000 ALTER TABLE `pengumuman` DISABLE KEYS */;
INSERT INTO `pengumuman` VALUES (1,'Ujicoba Sistem','Sistem akan diujicoba selama 24 jam, segala prosedur keamanan akan diujikan dan perbaikan sistem akan berjalan seiring digunakannya siste');
/*!40000 ALTER TABLE `pengumuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat_pendidikan`
--

DROP TABLE IF EXISTS `riwayat_pendidikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat_pendidikan` (
  `id_pendidikan` int(20) NOT NULL AUTO_INCREMENT,
  `id_guru` int(10) DEFAULT NULL,
  `tingkat` varchar(30) DEFAULT NULL,
  `thn_masuk` int(4) DEFAULT NULL,
  `thn_lulus` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_pendidikan`),
  KEY `NewIndex1` (`id_guru`),
  CONSTRAINT `FK_riwayat_pendidikan` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_pendidikan`
--

LOCK TABLES `riwayat_pendidikan` WRITE;
/*!40000 ALTER TABLE `riwayat_pendidikan` DISABLE KEYS */;
/*!40000 ALTER TABLE `riwayat_pendidikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `nama_ibu` varchar(200) DEFAULT NULL,
  `nisn` varchar(25) DEFAULT NULL,
  `no_un_smp` varchar(200) DEFAULT NULL,
  `agama` varchar(50) NOT NULL,
  PRIMARY KEY (`nis`),
  KEY `id_kelas` (`id_kelas`),
  KEY `nisIndex` (`nis`),
  CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES ('111210026','NOUVAL ABDILLAH','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('121310013','FUAD ABDULLAH FAQIH','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('121310049','FAHMI ABDUL AZIS','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('121310457','SENIA NURBANIA','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410001','ADE MAULANA YUSUP','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410002','AGIEL YORIDIA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410003','AHMAD KHOIRUL FAJAR SIDIK','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410004','AHMAD MAULANA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410005','ALDYANSYAH MUZAQIN','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410006','ARIEFALDO ALMUQSITUL RICARD','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410007','BOBBY KURNIAWAN','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410008','BRYAN CHANDRA KUSUMA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410009','BUDI ABDURROHMAN','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410010','DASTANTA ADE PRATAMA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410011','DEDI SAPUTRA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410012','DENNIS JULIAN ADITYA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410013','DIAN','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410014','DICKY SETYO WIBOWO','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410015','DIMAS CHARISMA TAMASHI','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410016','ERWIN APRIROSI','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410017','FEDRYAN WAHYU DISYAWAL','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410018','GEARY ANDREZ ALESANDRO P.','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410019','GITA NURSAFITRI','P','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410020','HUSNUL WALIFATHANUDDIN','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410021','ICHSAN MAULANA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410022','KURNIA BUDIHARJO','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410023','MUH. KUDHORI','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410024','MUHAMMAD AZHAR RIDHO SEJATI','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410025','MUS\'AF MA\'ARIF SUPRIYADI','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410026','PRASETYO HANIEF AHMADA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410027','RAKA WIKRAMA WARDANA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410028','RENALDI','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410029','RIZKI NOBI MUBAGJA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410030','SARWO AJI','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410031','SYARIFUDDIN','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410032','TIO SYAHRIVAL','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410033','WAHYU DWI ANDIKA','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410034','YUNI RAHMAWATI','P','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410035','YUSUF ARYANTO','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410036','ZULHAM MUL KHAIR','L','Bekasi',23,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410037','ANDREW MAHARDHIKA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410038','ANDRI NAUFAL RIFPAI','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410039','DHYMAS DWI MAULANA PUTRA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410040','FACHRIE RAFSANJANI','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410041','FAHMI PUTRA HANAFIE','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410042','FAIZ FAZARI','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410043','FAKIH YASKUR FAZ','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410044','FARID SUPRAYOGI','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410045','GALANG ADI PRATAMA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410046','HARIS EKO PRASETYO','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410047','KHOIRUNAS PARDEDE','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410048','LEGITA TAMARA','P','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410049','M. RIBHI AWWAD','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410050','MAHARDIKA SANDY PONCO','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410051','MOCH. AMIRUDIN','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410052','MOEHAMMAD EDWIN PRATAMA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410053','MOHAMAD SIDIQ','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410054','MU\'AMAR FACHDIKHA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410055','MUHAMAD FIKRIANSYAH','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410056','MUHAMAD RIFALDI','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410057','MUHAMMAD FADHIL MAULANA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410058','MUHAMMAD FARHAN DWIANSYAH','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410059','MUHAMMAD ROIN AFWANNAJA A.S','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410060','MUHAMMAD TAUFIQURROHIM','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410061','NASER SUGIHARTO','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410062','PANJI IHZA MAHENDRA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410063','PRAYOGO AQIL HERMAWAN','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410064','RENALDY APRIADI','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410065','REZA RIZKI WAHYUDI','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410066','RIDWAN MARDINTA KRISMAYANA','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410067','SADAM HUSEN','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410068','SITI LESTARI','P','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410069','SULTAN DION ADRYAN','L','Bekasi',33,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410070','ADE CHOLIS APIPUDIN','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410071','ADHY YUDHANTO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410072','AHMAD JAMILUDIN','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410073','ARIE PERMANA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410074','BARA PUTRANTO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410075','BAYU AJI SANTOSO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410076','BAYU KRISTYANTORO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410077','DEVY MIFTAHUL HUDA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410078','DODI SETIAWAN','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410079','DWI BAGASKARA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410080','DZICKRY MUHAMMAD AQSA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410081','EGO KRISTYANTO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410082','FAHRIE HIDAYAT','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410083','FAIZAL ANAS','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410084','FAJAR MUHAMMAD HIDAYAT','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410085','FANDU GYAN PRATAMA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410086','FATUR ROHIM','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410087','GALANG YOGA UTOMO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410088','HAFIZH GUNTUR JABBARULADLI','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410089','HAKIM ZEIN MAHSUN','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410090','ILHAM RAMADHAN','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410091','ILMAN NAFIAN','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410092','IRFAN BISMO PURNOMO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410093','IRVAN KURNIA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410094','KHABIR A','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410095','MOCHAMAD YURI PRADANA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410096','MOHAMMAD YUSRI AZIS','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410097','MUHAMMAD AZIZ NURHASAN','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410098','MUHAMMAD FAUZI','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410099','NDARU AGUNG PAMUNGKAS','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410100','RENALDY DWI SYAHPUTRA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410101','REVA ADI SUARA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410102','RIADHI TIRTA KUSUMA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410103','RIZKI BAGJA MUHAMMAD','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410104','SONI PRIMA','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410105','TRI YULIANTO','L','Bekasi',19,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410106','ABDUH AFIF YUANDANA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410107','ACHMAD YAHYA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410108','ALIF ARROSYIDU','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410109','ANDREYANTO','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410110','AUFA ABDULLOH ASHIDIQI','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410111','AVIN PANGESTU','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410112','BAMBANG SURYO ASMORO','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410113','DEDE RIANTO','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410114','DENI JUSUF FADILLAH','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410115','DWIKKO CAHYO PUTRA SANG FAJAR','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410116','EDWIN AMARTA MAULIDIN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410117','ERICK DARMAWANGSA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410118','FADDILAH MUHAMMAD IKHSAN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410119','FAJAR SARBINI','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410120','FERDIYANSYAH SAPUTRA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410121','HOGA ANDHI WINATA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410122','INDRA LESMANA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410123','INDRIYANTO SEPTIAJI','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410124','IQBAL ALFAREZA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410125','ISMAIL NOTO WIJOYO','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410126','MUHAMAD ADITYA SETIAWAN AZIZ','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410127','MUHAMAD FURQAAN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410128','MUHAMMAD ARIF GIAN FEBRIANTO','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410129','MUHAMMAD ARLIN SETIAWAN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410130','MUHAMMAD FAHRIANSYAH','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410131','MUHAMMAD FIKRI MAULIDIN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410132','MUJAHIDDIN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410133','RAMA DARMAWAN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410134','RESTA LESTIADI','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410135','RIAN KRISNA PERMADY','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410136','RIONALDI AUZAN MARCELINO','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410137','RIZKY MAULANA','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410138','RUSTANDI YANUAR','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410139','SEPTIAN ARIYANTO','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410140','WAHYU SETIAWAN','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410141','WILLY ICHSAN KRISNA AJI','L','Bekasi',20,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410142','ABD. HALIM PULUNGAN','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410143','ACHMAD FEBRIYANTO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410144','ADE ILHAM MULADI','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410145','ANDIKA AHID WIDIANTO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410146','ANDRE SUKARNA PUTRA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410147','ARIF RAMA SATRIA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410148','ARYANTO PRADANA PUTRA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410149','BAGUS RHAMDHANI','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410150','BAGUS RIZQIA ARMEIHANDYA PUTRA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410151','DIKA APRIANTO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410152','FAIZ AUFI','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410153','FARIZ ALFI','','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410154','FAUZIE QADR SALEH','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410155','HALIM DWI NOTO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410156','HASAN BISRI MUSTOFA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410157','HENDRA HIDAYAT','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410158','HIMAWAN AGUS PRASETYO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410159','I GUSTI AGUNG ANGGANATHA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410160','IQBAL GIBRANSYAH','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410161','MARSILINDO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410162','MISBAHUDDIN DHIYAULHAQ','','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410163','MUHAMAD FAUZI FADILA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410164','MUHAMMAD NAUFAL ZAMZAMI','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410165','MUHAMMAD NURFAUZI','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410166','MUHAMMAD WAHIDIL AKBAR','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410167','NANDA FARHAN MARDHATILLAH','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410168','PRASETYO SUSILO NUGROHO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410169','RAHMAN ANDRE WIJANARKO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410170','RAHMAT PANCA SAPUTRA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410171','RAYHAN FAUZAN','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410172','REI MAULANA FIRMANSYAH','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410173','REYNALDI WISNU PRATAMA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410174','RISKI ADI SAPUTRO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410175','RIZKY ASRIYANTO','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410176','RIZKY KURNIADI','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410177','ROBIN ADITYA','L','Bekasi',21,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410178','ABDIEL KRISNA PRASETIYO','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410179','ADAM ISMAIL','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410180','AHMAD BRAMASTRO','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410181','ALDO SURYA BUTAR-BUTAR','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410182','ALWI AMIR PAQIH','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410183','ARIF RAHMAN HAKIM','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410184','ARVIAN NASHAR ALLAM','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410185','ASQO ARASYID','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410186','DEDEN MEDIYANA','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410187','FAISAL IBRAHIM','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410188','FERRY SIDIQ MAULANA','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410189','FUAD ZUYYINA NASRULLAH','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410190','HUDZAEFAH ABDAN FARHAN','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410191','HUTAHAEAN YOHANES ALEXANDER','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410192','JUANDI PRATAMA','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410193','KORANO ALFEROS MAMBRISAUW','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410194','KRISHNA ADE SAPUTRA','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410195','LICKY MAENAKI EFENDI','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410196','MACHMUD TAUFIQ','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410197','MOHAMAD SOBARI','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410198','MUHAMMAD ARPIAN FAJRI','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410199','MUHAMMAD FACHRI AGUSTIAWAN','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410200','MUHAMMAD REVAN IHZA HAMAMI','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410201','MUHAMMAD RIZKY BAGUS SETIYAWAN','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410202','MUHAMMAD YUDHA AKBAR','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410203','MUSTOFA KAMAL','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410204','NAUFAL NIRWANA','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410205','RAHMAN DANY','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410206','RIDHO RIDIYANTO','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410207','RIKI WAHYUDI','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410208','ROFI IBNU HAAFIZH','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410209','SATRIO UTOMO','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410210','SATYA RINO PISSTIANTIO','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410211','TETUKO WAHYU JATMIKO','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410212','VIERY YUSUF RACHMAWAN','L','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410213','ZAENAL ABIDIN','','Bekasi',22,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410214','AHMAD ZAHRONI','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410215','AKBAR KURNIA MAULANA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410216','AKBAR SANGAJI','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410217','ALI AKBAR','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410218','AMRI AMRULLAH','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410219','AMZAH SUNGEB NUR RIZKI','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410220','ANAS BAKARBESSY','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410221','ARI WAHYU ROMADHON','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410222','ARLI MUHAMMAD SUGIATAMA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410223','ASEP SAMSUDIN','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410224','ASNAN PUGUH KURNIA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410225','B. BIMO WIBISONO ISMAIL','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410226','DASRIL ZAIN','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410227','FARDHU SUKMA WANGSA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410228','FARIZ MAULANA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410229','FUAD AL FAYED','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410230','HARDIYANSYAH','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410231','ICHLASSUL AMAL MAULANA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410232','INDRA TRI SEPTIAN','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410233','KHOLIL KHOLIQ SLAMET GIARTONO','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410234','KRISNAMAHARDIKA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410235','MOCH RAYHAN AZWARD','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410236','MUHAMAD AKBAR','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410237','MUHAMAD RIZAL','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410238','MUHAMMAD CAHYADI','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410239','MUHAMMAD FATHUR RAHMAN T. P.','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410240','MUHAMMAD NUR IQBAL','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410241','NOVI ZAELANI AGUNG SAPUTRA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410242','ORLANDO LIMBONG','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410243','RICKY ANDREYASYAH','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410244','RIO ANGGORO WAHYUDI','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410245','SATRIA PRAYUDHA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410246','SYAHRUL FAUZI','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410247','TIMOTIUS DJANUARIANTO','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410248','YOGIE AKHMAD SYAMSUDDIN','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410249','YOVAN PUTRA ANGGARA','','Bekasi',34,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410250','AHMAD FADLI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410251','AHMAD FAHMI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410252','ALDI DEONANDA ALANDI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410253','AMANDA SUKMA DIVAYANTI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410254','ANDI RISMANTO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410255','ANDRI ISMAWAN','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410256','APRIANTO TRI PERMADI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410257','ARDIANSYAH','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410258','ARIEF CAHYA PURNOMO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410259','BAGAS MARULI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410260','BARESY MAGRIBIONO JUNIOR','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410261','BAYU DEWANTORO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410262','BOBY INDRIAWAN','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410263','DONI KRISTIANTO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410264','DWICKY ALFIANSYAH','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410265','DZIKRAN MALIK FADILAH','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410266','FARHAN HIDAYATULOH AGUSTIAN','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410267','FATHURRAHMAN FADEL MUHAMMAD','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410268','FIQHRY ZULFIKAR RISTANTO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410269','IBNU ABDILLAH','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410270','IKHLASUL AMAL','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410271','ILHAM RIKI SAPUTRA','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410272','MAULANA COKRO BINOTO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410273','MUHAMMAD RIHAN FIRDAUS','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410274','OKY KURNIAWAN','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410275','R. ALVIN NOVRANTINO ARI PRATAMA','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410276','RAHMAT BAYU HASTIKHO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410277','RESTU SETIAWAN','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410278','REZA OKTAVIANTO','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410279','RIDWAN SUWANDI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410280','SYAHIDDINA ALI MARDJUKI','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410281','SYAUQY AMANILLAH','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410282','TITO RIZALDI FADILAH','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410283','URWAH','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410284','YOGA ASMARA','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410285','YOGIE IRMAWAN','','Bekasi',35,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410286','ADINDA EKA FEBRIANTI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410287','AGUNG WIDYANTORO','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410288','AKBAR HARIST ALFARITSY','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410289','ALFAN SYAHADA HUTAGALUNG','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410290','ALNINO DIO PUTERA','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410291','ANUGERAH DWI PEKERTI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410292','CHAIRUL UMAM','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410293','CLARA VELITA PRANOLO','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410294','DENIS AHMAD','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410295','DEZAN ANDHIKA','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410296','DINA NATALIA','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410297','DWITA WULANDARI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410298','EKO NUR CAHYO BUDI SANTOSO','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410299','FAISHAL IKHSANUDIN','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410300','FEKA LEGI HERYANA RISKY','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410301','GIELBHA RIZKY PUTRA UTAMA','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410302','HADYAN DWI  MUDIAWAN','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410303','ILHAM ANDIKA SETIAWAN','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410304','IMRON WIGNYOWIYOTO','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410305','INDAH RISKA AZZAHRA','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410306','ISMAIL SOFYAN TANJUNG','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410307','KEVIN NOURISHSADI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410308','LULU ANI ASMA\'UL HUSNA','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410309','MOHAMMAD ABU HASAN','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410310','MUHAMAD ALFIN ADITIAPUTRA','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410311','MUHAMMAD DHAMAS SYAHBANI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410312','MUHAMMAD FAUZI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410313','MUHAMMAD HAZMI ZULWAQAR','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410314','MUHAMMAD IRFAN NURHAKIM','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410315','NAUFAL ZUHAIR','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410316','NOVALDY SETIO WIBISONO','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410317','NUR RAHMAH PRATIWI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410318','SRI UTAMI','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410319','SURYA RAMADHAN','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410320','TITO CAHYO NUGROHO','','Bekasi',28,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410321','ADJIE DWI NUGROHO','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410322','AGUNG PRASETYO SUDARTO','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410323','AMANATU ROMDHON NUZULUL ROCHIM','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410324','AYUDIA FITRI CHAERANI','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410325','CATELLYA FARALISHA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410326','DENDY SESA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410327','FAIZ SULISTYAWAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410328','FAJRI YUSUP KURNIAWAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410329','FAKHRI AMRULLOH','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410330','FATUR RAHMAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410331','GISDA ANDRIANA MALIK','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410332','HARY ROZHA RAMANA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410333','ILHAM PRASETYO','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410334','IRZA LAILATUZAHRA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410335','JIMMY MAULANA CANDRA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410336','M. ZIKRI SEPTIAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410337','MACHMED GUSTI ICAL','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410338','MOHAMMAD RAFLI GILANG TASMARA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410339','MUHAMAD VERI SETIAWAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410340','MUHAMMAD ADAM ZHAFRAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410341','MUHAMMAD HAMZAH ALHAFIZ','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410342','MUHAMMAD SYAHRI RAMADHAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410343','MUKHLIS SOBRI','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410344','NESIH','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410345','NIDAAN KHOVIYAH','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410346','PANJI DWI SETIAWAN','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410347','RAFLY WEDIANTO','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410348','REZI HANDIANTO','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410349','RIYAN EKO SAPUTRO','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410350','RIZKY ADITYA FAHREZA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410351','RIZKY PERMANA PUTRA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410352','SITI ROKHANA','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410353','TOMY SAPUTRA JOHANES','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410354','TRITAMA MUHAMMAD DJAFAR','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410355','WIBOWO BAYU AJI','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410356','WILDAN MUHAMMAD AZFAR','','Bekasi',29,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410357','ALFA FARHAN SYARIEF','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410358','ANDRIAN MULJADI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410359','ARIFATUL A\'IDY','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410360','BILLY DOOHAN OKTAVIAN','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410361','DAMAR WIJATI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410362','DELBERT FEBRIAND LUBIS','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410363','DIVYA NARULITA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410364','EVI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410365','FAKHRI AULIA RAHMAN','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410366','FARHAN SURYA PUTRA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410367','FATURRAHMAN FAJAR NARENDRA PRATAMA PUTRA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410368','FELICIA DWI ANANDA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410369','FIRDA MUSTHOFA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410370','GECHA DWIPUTRA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410371','HENDY RISDYANA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410372','KLEMENS ALDO PAIMAN SIHOMBING','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410373','LIHANA NUR RIZKI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410374','MARTINUS YACOB SIRAMI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410375','MOHAMAD ALAN FADLAN','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410376','MUHAMMAD MUSTAQIM','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410377','NATASHYA RIBKA CHRISTYANI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410378','PRASTIYO ARBI NUGROHO','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410379','RADO JUNIOR','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410380','RENNY SALITA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410381','RESTU PRATAMA SETYA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410382','RETNO WIJI LESTARI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410383','RIAN BUDI HARDIYANTO','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410384','RIFKI SYUHADA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410385','RIZKY PRATAMA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410386','SEPTIAN DWI NUGROHO','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410387','SHINTYA YOLAN PRATICYA','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410388','SHUFFAHAQ GILANG ZHESA ZISAINI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410389','TITIN SUSINAH','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410390','TRISHA ARDIANSYAH','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410391','UNTUNG WAHYUDI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410392','VIVI INDAH SAPUTRI','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410393','ZAINUN KAMAL RAMADHAN','','Bekasi',26,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410394','ADITYA YOAS OKTAVIANUS','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410395','AGIL IBNU PRASETIA','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410396','AHMAD RAMADHAN','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410397','ANDRYANSAH','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410398','ANSHARULLAH WIDIANSYAH','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410399','ARI KURNIADI','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410400','ARIEF RIFKI FADILLA','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410401','BAYU ARGA DHANI','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410402','BINTANG PRATAMA','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410403','BUDIMAN YUSUF','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410404','DENI AFRIANSYAH','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410405','DERRY REVY PRYANA','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410406','DHIMAS NAUFAL DZAKWAN','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410407','EKA AJENG SAFITRI','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410408','FAJAR MUKHAROM','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410409','FERDINAN JULIANTO','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410410','FITRI MAHARANI','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410411','HALIMATUSSA\'DIAH','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410412','HANS WISNU','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410413','HERIYANTO WIBOWO','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410414','IMAN AGUS TRIANTO','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410415','INDRYANI SUKMA RATNA JUWITA','P','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410416','INE SHINTYA DEWI','P','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410417','KUKUH RAHMADI','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410418','KURNIADI ILHAM','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410419','MUHAMAD RIZKI PRASETYO','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410420','MUHAMMAD CAHYO NUGROHO','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410421','MUHAMMAD HANICK NURGROHO','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410422','MUHAMMAD ICHSAN','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410423','MUHAMMAD ROBI','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410424','NIKANUS HALEREHON ','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410425','RENDY SUPRIYANDANA','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410426','RIZKI MAULANA','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410427','RIZKY AMALIA PUTRI','P','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410428','RYANDIKA RAMADHAN AL FARISHI','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410429','SENO WICAKSONO','','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410430','SITA DIVAYANTI','P','Bekasi',27,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410431','ABDUR RAHMAN','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410432','APRIANI DWI RESMIYATI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410433','ASMAUL HUSNA','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410434','AXEL YUDARLIS BAASITH','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410435','B. BIMA GUNAWAN ISMAIL','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410436','BOY MUHAMMAD FAISAL FEBIANTO','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410437','CAHAYA PUTRI MULIA HATI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410438','CHRISTY NAULI NAPITUPULU','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410439','DIMAS DANANG RAMADHAN','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410440','FAHRI RAMADHAN','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410441','FANNY AYUNIAR ISNAINI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410442','HANIF MUHAMMAD NAUFAL','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410443','IBNU FURQONULHAQ','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410444','IBRAHIM FAHRI','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410445','INTAN AYU SAFITRI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410446','KAUTSAR YUSUF MAULANA HASIBUAN','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410447','MUARA ILHAM','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410448','MUHAMAD ARINAL HAQI','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410449','MUHAMMAD ANDIAWAN PINUWUN','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410450','MUHAMMAD FAUZAN FAJRI','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410451','MUHAMMAD IBNU MAULANA','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410452','MUHAMMAD RIZQI AULIA JAFRI','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410453','PRATAMA CHECA','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410454','RABIAH ANNISA PUTRI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410455','RIZKIA PUTRI NANINGSIH','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410456','RIZKY YURIZAL','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410457','RUPITA SINAGA','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410458','SAMUEL GERSOM JUNIOR','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410459','SATRIA MUHAMMAD SAKA','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410460','SEPTIYENI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410461','SHINTIA GULTOM','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410462','SULTHAN NAUFAL LAKSMONOPUTRA','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410463','TATA DWI ANGGRAINI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410464','TIARA DWI OKTAVIANI','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410465','ULFI HASANAH','P','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410466','ZENYT STYAWAN','L','Bekasi',24,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410467','ABDURROSYID ROBBANI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410468','AISYAH HERLINA ARRUM','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410469','ALVIAN GILANG SAGITA','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410470','ANBIYA SHAFAAT','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410471','DEFARIZQ GIBRAN MUHAMMAD','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410472','DETY SUHAETI MUTIARA','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410473','DEVI SUCI INDRIANI MASLAHAH','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410474','DHIMAS NUR RAMADHAN','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410475','DIAZ JASMINE ARIEFTA','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410476','DWI SRI UTAMI RAHAYU','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410477','ERZA FAHRUZZAMAN','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410478','HASNA YUNITA','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410479','KASIH NUR ARISANTI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410480','LOLA AYU','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410481','LUTFIA CATUR  WIDIYANTI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410482','M. ABU DZAR ALFARISI','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410483','MAHARANI AYU PERTIWI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410484','MAIZA  ZAHROTUL JANNAH','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410485','MEGA FADILLA SANI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410486','MUHAMAD IRVAN RIZKI','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410487','MUHAMMAD HAFIIZHUN \'ALIIM','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410488','MUHAMMAD KEVIN PRASETIO RAMADHAN','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410489','MUHAMMAD RIDHO GUSTI','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410490','OKI WIDYAWATI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410491','PRISKA CLAUDIA JONATHANS','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410492','PUTRA HARYO KURNIAWAN','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410493','PUTRA IBRAHIM AHMAD','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410494','RYAN DAWAM FADILLAH','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410495','SITI MAESYAROH','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410496','TOFIK NURHIDAYAT','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410497','TRI PUSPITA SARI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410498','VINSENSIUS ARI SAPUTRA','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410499','WILDA AL-ALUF NUR ISLAMI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410500','YOGA PANGESTU','L','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410501','ZULFANIS HERMARINI','P','Bekasi',25,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410502','ADELIA NOER FARHANAH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410503','ALYA NURJANNAH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410504','ANGGITA PRICILLIA','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410505','CINDY PATRICIA','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410506','DEWI RAHAYU','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410507','DYNA NURFADILLAH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410508','EKA YULIANTI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410509','ELIS MEI SAPUTRI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410510','EMY NOVIANI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410511','FILISITAS ARIANIE WIDYANTARA','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410512','INDRIANI SULISTIA N.','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410513','JOVITA WIDYANTI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410514','MEGA ERLINA YULIANTHINI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410515','NABILAH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410516','NUR HAJIZAH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410517','NUR LAELI RAHMAWATI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410518','OLGA JACINDA RAHMADHANI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410519','PUJI ASTUTI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410520','PUSPA FEBRIYANTI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410521','PUTRI YUDITASARI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410522','RADEN DHAVA DITO PANGESTU','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410523','RINNA NUR ANANDITA','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410524','RIO WIDIANTO','L','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410525','RIZKA AZIDA FITRI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410526','RODHOTUR ROHMAH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410527','SAVIRA ESA RAHMAWATI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410528','SILVIA PERMATASARI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410529','SUSAN ANDRIYANI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410530','SYIFA FAUZIAH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410531','TAQIUDDIN','L','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410532','TRI RAHAYU NINGSIH','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410533','TRISMA FITRIANI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410534','TRISNA PAMUNGKAS','L','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410535','ULFA SUGIARTI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410536','YASHINTA DWI MAIRANI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410537','YUNITA SAFITRI','P','Bekasi',30,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410538','AHMAD BAIHAQI','L','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410539','AMARTYAS ANDIANI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410540','ANISA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410541','ANNISA DIANTINA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410542','ANNISA PUTRI SURYADI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410543','ANNISA SEINDI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410544','CLARA AYU SEKARTAJI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410545','DINA SINDIAMAR','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410546','FARAH SAFITRI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410547','FINI FEBRIANI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410548','HANDHINIE PUTRI SARASSHATI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410549','HANIF FIRDAUS','L','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410550','LAMRIANI KRISTINA SAGALA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410551','LULU NAZIFA RAMADHANTY','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410552','MARIA ULFA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410553','MUTIARA SYAFITRI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410554','NIKEN SRI LESTARI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410555','NUR SYIFA FAUZIAH','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410556','NUR WACHIDAH QUMI LAILA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410557','NURFIDA AULIA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410558','NURVIA ANGGRAENI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410559','PUJA MALAR LAURA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410560','PUJI WIJAYANTI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410561','RATIH NADYA SARI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410562','RENNY CHAERUN NISSA','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410563','RENO SATRIO CAHYONO','L','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410564','RESNA MUSTIKA SARI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410565','RESTA DWI DAYANTI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410566','RIANA LUSIANI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410567','SILFIA RAHMAH','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410568','SOFIA RUHU','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410569','TIN TRISNAYANTI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410570','TRI ANUGRAHENI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410571','TRIANA NATALIA YUSUF','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410572','WIDY JAMIYANTI SAPUTRI','P','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410573','YUSUP RAMSES ANDERSON YAAS','L','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410574','ZULFA YULYANA','L','Bekasi',31,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410575','ADE SUHENDAR','L','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410576','ADITYA RIZKY MAULANA','L','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410577','ANITA PRILYANTIKA','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410578','ARINI DWI HARYONO','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410579','AYU LARASWATI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410580','CHAIRUNNISA OKTAVIANI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410581','CHORI ZATI HULWANI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410582','DEVIANA PUTRI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410583','DIAH WAHYUNINGTIAS','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410584','DIAN SAFITRI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410585','DINDA ANGGUN NOVIANTI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410586','DINDA AYU LESTARI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410587','ELIA APRIYANTI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410588','EVA ARIYANTI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410589','FANNY FADILLA MAULIDA','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410590','FARHAH AULIA','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410591','HARDINI FIRDA YUNIAR','L','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410592','HARINI DWI KURNIASARI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410593','INDAH SETIYANA SARI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410594','INTAN LESTARI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410595','LAMRIANA YOHANA SAGALA','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410596','LUKMAN BIJAKBESTARI','L','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410597','MEGA SUKMA RAHAYU','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410598','MUHAMAD SYAHRUDIN','L','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410599','MUTIARA FITRIANDINI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410600','NATASHA SASTRO','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410601','NINDA ARIZA','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410602','NUR SUGIARTI HANDAYANI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410603','PRISCA DWI RATNA SARI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410604','RESTURANI DIAH UTAMI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410605','RETNO TRI SUSILOWATI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410606','ROSIDA JUNIAZ SANTI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410607','SYAFIRA CHINDY FOLETTA','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410608','SYIFA CHOIRUNNISA QOLBUN MUTIARA INSANI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410609','VANI OKTAVIANY','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410610','YULIANTI ANGGRAENI','P','Bekasi',36,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410611','ADE FEBRIANA','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410612','AMINATUL ISHTIFAIYAH','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410613','ANISA PRASISTO','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410614','ASRIE IRMA DHANTY','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410615','AYU AGUSTIN','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410616','AZKIA SILMI KAAFFAH','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410617','DHEA APRILIA SARI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410618','DYAH AJENG LISTRIANI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410619','ERNA YUPITA SARI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410620','EVI MELINDA','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410621','FADELA WIYATRI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410622','FARADILLAH PILANG DHAMAYANTI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410623','GITA NOVITA ANGELIA','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410624','IMELDA AYU RAMADHANTY','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410625','INTAN PERMATA SARI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410626','JASMINE FALINDA','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410627','KULTSUM NUR KHANIFAH','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410628','LEDY CLAUDIA','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410629','MITA ROSTIKAWATI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410630','NABILAH NADA HERENZHA','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410631','NAZILA UMAR BADJRIE','','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410632','NOVITA INDAH PERMATA SARI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410633','NURUL AIDARANI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410634','RACHEL BERLINA','','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410635','RERE MAULINA PUTRI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410636','RIKA MARTINA','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410637','RINJANI AMANDASARI','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410638','RIZKIAH SAHLAH','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410639','SAADAH','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410640','SISKA SIFA NURRAHMAT','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410641','SITI KHODIDJAH','P','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,''),('131410642','SUFI ISRA NAHYA','','Bekasi',32,NULL,NULL,NULL,NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tahun`
--

DROP TABLE IF EXISTS `tahun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tahun` (
  `id_tahun` int(3) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(4) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tahun`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tahun`
--

LOCK TABLES `tahun` WRITE;
/*!40000 ALTER TABLE `tahun` DISABLE KEYS */;
INSERT INTO `tahun` VALUES (3,'2012','0','ganjil'),(4,'2012','0','genap'),(5,'2013','1','ganjil'),(6,'2013','0','genap'),(7,'2014','0','ganjil'),(8,'2014','0','genap'),(9,'2015','0','ganjil'),(10,'2015','0','genap'),(11,'2016','0','ganjil'),(12,'2016','0','genap');
/*!40000 ALTER TABLE `tahun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level` int(4) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `NewIndex1` (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `v_siswa_l`
--

DROP TABLE IF EXISTS `v_siswa_l`;
/*!50001 DROP VIEW IF EXISTS `v_siswa_l`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_siswa_l` (
  `nis` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `jenkel` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `id_kelas` tinyint NOT NULL,
  `foto` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_siswa_p`
--

DROP TABLE IF EXISTS `v_siswa_p`;
/*!50001 DROP VIEW IF EXISTS `v_siswa_p`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_siswa_p` (
  `nis` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `jenkel` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `id_kelas` tinyint NOT NULL,
  `foto` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vw_guru`
--

DROP TABLE IF EXISTS `vw_guru`;
/*!50001 DROP VIEW IF EXISTS `vw_guru`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vw_guru` (
  `id_guru` tinyint NOT NULL,
  `username` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `walas`
--

DROP TABLE IF EXISTS `walas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walas` (
  `id_walas` int(10) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(4) DEFAULT NULL,
  `id_guru` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_walas`),
  KEY `NewIndex1` (`id_kelas`),
  KEY `NewIndex2` (`id_guru`),
  CONSTRAINT `FK_walas2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `walas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walas`
--

LOCK TABLES `walas` WRITE;
/*!40000 ALTER TABLE `walas` DISABLE KEYS */;
/*!40000 ALTER TABLE `walas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `v_siswa_l`
--

/*!50001 DROP TABLE IF EXISTS `v_siswa_l`*/;
/*!50001 DROP VIEW IF EXISTS `v_siswa_l`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_siswa_l` AS select `siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`siswa`.`jenkel` AS `jenkel`,`siswa`.`alamat` AS `alamat`,`siswa`.`id_kelas` AS `id_kelas`,`siswa`.`foto` AS `foto` from `siswa` where (`siswa`.`jenkel` = 'L') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_siswa_p`
--

/*!50001 DROP TABLE IF EXISTS `v_siswa_p`*/;
/*!50001 DROP VIEW IF EXISTS `v_siswa_p`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_siswa_p` AS select `siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`siswa`.`jenkel` AS `jenkel`,`siswa`.`alamat` AS `alamat`,`siswa`.`id_kelas` AS `id_kelas`,`siswa`.`foto` AS `foto` from `siswa` where (`siswa`.`jenkel` = 'P') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_guru`
--

/*!50001 DROP TABLE IF EXISTS `vw_guru`*/;
/*!50001 DROP VIEW IF EXISTS `vw_guru`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_guru` AS select `guru`.`id_guru` AS `id_guru`,`guru`.`username` AS `username` from (`guru` join `user`) where (`guru`.`username` = `user`.`username`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-28 19:09:21
