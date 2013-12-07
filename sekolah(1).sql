-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2013 at 06:47 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.6-1ubuntu1.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id_absensi` int(4) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `alasan` varchar(20) NOT NULL,
  `id_tahun` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_absensi`),
  KEY `id_siswa` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `nis`, `tanggal`, `alasan`, `id_tahun`) VALUES
(24, '040151660', '2013-08-29', 'TANPA KETERANGAN', 5),
(27, '040151660', '2013-08-31', 'TANPA KETERANGAN', 5);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `tempat`, `tgl_lahir`, `alamat`, `email`, `no_telp`, `username`, `tmt`, `nip`, `nuptk`, `pangkat`, `gol`, `thn_lulus`, `id_kelas`) VALUES
(9, 'bowonieh', NULL, NULL, NULL, NULL, NULL, 'bowonieh', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 'Asep Satari,S.Pd', NULL, NULL, NULL, NULL, NULL, 'satari', NULL, NULL, NULL, NULL, NULL, NULL, 15),
(11, 'Dra. Hj. Nelwati', NULL, NULL, NULL, NULL, NULL, 'nelwati', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 'Hj. Herlina, S.Pd', NULL, NULL, NULL, NULL, NULL, 'herlina', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 'Dra. Hj. Renowati', NULL, NULL, NULL, NULL, NULL, 'renowati', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenismapel`
--

CREATE TABLE IF NOT EXISTS `jenismapel` (
  `id_jenismapel` int(10) NOT NULL AUTO_INCREMENT,
  `jenismapel` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jenismapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jenismapel`
--

INSERT INTO `jenismapel` (`id_jenismapel`, `jenismapel`) VALUES
(1, 'Adaptif'),
(2, 'Normatif'),
(3, 'Produktif');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(4) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'MULTIMEDIA'),
(2, 'Rekayasa Perangkat Lunak'),
(3, 'Teknik Kendaraan Ringan'),
(4, 'Teknik Pemesinan'),
(5, 'Teknik Pengelasan'),
(6, 'Teknik Komputer Jaringan'),
(7, 'Busana Butik'),
(8, 'Akutansi');

-- --------------------------------------------------------

--
-- Table structure for table `kasus`
--

CREATE TABLE IF NOT EXISTS `kasus` (
  `id_kasus` int(10) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `kasus` text,
  `alasan` text,
  `tindakan` text,
  `tgl_penanganan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kasus`),
  KEY `kasus_nis` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(4) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(4) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_jurusan` (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `nama_kelas`) VALUES
(15, 1, 'X MM A'),
(16, 1, 'XI MM B'),
(17, 2, 'XIRPLA'),
(18, 2, 'XIRPLB');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
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
  KEY `id_jenismapel` (`id_jenismapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_tahun`, `id_guru`, `id_mapel`, `kode_mapel`, `mapel`, `deskripsi`, `id_jenismapel`, `kkm`) VALUES
(3, 9, 7, 'DB-WEB', 'DATABASE WEB', 'Database Web untuk kelas XI RPL A', 3, NULL),
(5, 11, 9, NULL, 'Agama Islam', 'Agama Islam untuk Kelas\r\nXI RPL A\r\nXI RPL B \r\nXI RPL C', 2, NULL),
(5, 9, 10, 'RPL-PAMXIIRPL', 'Pemrogramman Antar Muka', 'Pemrogramman Java Server Pages\r\n', 3, 75.00);

-- --------------------------------------------------------

--
-- Table structure for table `mapel_ambil`
--

CREATE TABLE IF NOT EXISTS `mapel_ambil` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(10) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nilai_uts` decimal(10,2) DEFAULT NULL,
  `nilai_raport` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mapel_index` (`id_mapel`),
  KEY `nis_index` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mapel_ambil`
--

INSERT INTO `mapel_ambil` (`id`, `id_mapel`, `nis`, `nilai_uts`, `nilai_raport`) VALUES
(8, 7, '040151659', 98.70, 87.98),
(9, 7, '040151601', 98.70, 88.00),
(10, 9, '040151659', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`) VALUES
(1, 'Ujicoba Sistem', 'Sistem akan diujicoba selama 24 jam, segala prosedur keamanan akan diujikan dan perbaikan sistem akan berjalan seiring digunakannya siste');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE IF NOT EXISTS `riwayat_pendidikan` (
  `id_pendidikan` int(20) NOT NULL AUTO_INCREMENT,
  `id_guru` int(10) DEFAULT NULL,
  `tingkat` varchar(30) DEFAULT NULL,
  `thn_masuk` int(4) DEFAULT NULL,
  `thn_lulus` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_pendidikan`),
  KEY `NewIndex1` (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `id_kelas` (`id_kelas`),
  KEY `nisIndex` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenkel`, `alamat`, `id_kelas`, `foto`) VALUES
('040151601', 'Dewita', 'P', 'JL. Raya Setu', 16, NULL),
('040151602', 'Dyandra Ameli', 'P', 'Jl. Bintara IX RT 10', 16, NULL),
('040151659', 'Agus Wibowo', 'L', 'Jl. Bintara IX a RT 01 RW 05', 15, NULL),
('040151660', 'Ahmad Firdaus', 'L', 'Jl. Kepodang Raya', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
  `id_tahun` int(3) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(4) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tahun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`, `status`, `semester`) VALUES
(3, '2012', '0', 'ganjil'),
(4, '2012', '0', 'genap'),
(5, '2013', '1', 'ganjil'),
(6, '2013', '0', 'genap'),
(7, '2014', '0', 'ganjil'),
(8, '2014', '0', 'genap'),
(9, '2015', '0', 'ganjil'),
(10, '2015', '0', 'genap'),
(11, '2016', '0', 'ganjil'),
(12, '2016', '0', 'genap');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level` int(4) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `NewIndex1` (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(17, '040151659', 'c2ab59deddb949a83e98cccf74c43152', 7),
(18, 'bowonieh', '0f8d928a23f1573c4b5341a19e98547b', 2),
(19, '040151660', 'cc842ae2e2a79b3003b2c8df8991cc84', 7),
(20, '040151601', 'ce459b12e61fd8c091bc6ec3311d3e42', 7),
(21, '040151602', '68ac7210d7bd726b159362140e1e9d19', 7),
(23, 'satari', 'fc25dce54dc8a293397a7ae3c54980c9', 2),
(24, 'nelwati', '2dc1244bb4c3f71534d090b0de3c272c', 2),
(25, 'herlina', '4e196a6c133a04f8a81d742b04e7ffe7', 2),
(26, 'renowati', 'cbd1b9891ab43d0a9a06f63c2a6ff7fc', 2),
(27, 'piket1', '9ed6f8a348b14d66c9a602516124125a', 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_guru`
--
CREATE TABLE IF NOT EXISTS `vw_guru` (
`id_guru` int(10)
,`username` varchar(200)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa_l`
--
CREATE TABLE IF NOT EXISTS `v_siswa_l` (
`nis` varchar(20)
,`nama` varchar(200)
,`jenkel` enum('L','P')
,`alamat` text
,`id_kelas` int(4)
,`foto` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa_p`
--
CREATE TABLE IF NOT EXISTS `v_siswa_p` (
`nis` varchar(20)
,`nama` varchar(200)
,`jenkel` enum('L','P')
,`alamat` text
,`id_kelas` int(4)
,`foto` varchar(255)
);
-- --------------------------------------------------------

--
-- Table structure for table `walas`
--

CREATE TABLE IF NOT EXISTS `walas` (
  `id_walas` int(10) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(4) DEFAULT NULL,
  `id_guru` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_walas`),
  KEY `NewIndex1` (`id_kelas`),
  KEY `NewIndex2` (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure for view `vw_guru`
--
DROP TABLE IF EXISTS `vw_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_guru` AS select `guru`.`id_guru` AS `id_guru`,`guru`.`username` AS `username` from (`guru` join `user`) where (`guru`.`username` = `user`.`username`);

-- --------------------------------------------------------

--
-- Structure for view `v_siswa_l`
--
DROP TABLE IF EXISTS `v_siswa_l`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa_l` AS select `siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`siswa`.`jenkel` AS `jenkel`,`siswa`.`alamat` AS `alamat`,`siswa`.`id_kelas` AS `id_kelas`,`siswa`.`foto` AS `foto` from `siswa` where (`siswa`.`jenkel` = 'L');

-- --------------------------------------------------------

--
-- Structure for view `v_siswa_p`
--
DROP TABLE IF EXISTS `v_siswa_p`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa_p` AS select `siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`siswa`.`jenkel` AS `jenkel`,`siswa`.`alamat` AS `alamat`,`siswa`.`id_kelas` AS `id_kelas`,`siswa`.`foto` AS `foto` from `siswa` where (`siswa`.`jenkel` = 'P');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kasus`
--
ALTER TABLE `kasus`
  ADD CONSTRAINT `kasus_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `FK_mapel` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mapel_jenismapel` FOREIGN KEY (`id_jenismapel`) REFERENCES `jenismapel` (`id_jenismapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mapel_tahun` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapel_ambil`
--
ALTER TABLE `mapel_ambil`
  ADD CONSTRAINT `FK_mapel_ambil` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mapel_ambil_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD CONSTRAINT `FK_riwayat_pendidikan` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `walas`
--
ALTER TABLE `walas`
  ADD CONSTRAINT `FK_walas2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `walas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
