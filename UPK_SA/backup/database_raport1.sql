# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------


#
# Delete any existing table `guru`
#

DROP TABLE IF EXISTS `guru`;


#
# Table structure of table `guru`
#

CREATE TABLE `guru` (
  `kode_guru` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `alamat_guru` varchar(100) NOT NULL,
  `telp_guru` varchar(20) NOT NULL,
  PRIMARY KEY  (`kode_guru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table guru (4 records)
#
 
INSERT INTO `guru` VALUES ('GR001', '', '', 'Nuning Minarsih, S.Pd, M.', '196501011989022005', 'Jl. Bukit Cendana No. 116  RT. 04 RW. 09, Sambiroto, Tembalang, Semarang.', '081393659281') ; 
INSERT INTO `guru` VALUES ('GR002', 'KK002', 'K004', 'Ardan Sirodjuddin, S.Pd', '197310082005011004', 'Jl. Pucang Anom IV / 10   RT. 1   RW. 18, Pucang Gading, Mranggen, Semarang.', '085865302080') ; 
INSERT INTO `guru` VALUES ('GR003', '', '', '', '', '', '') ; 
INSERT INTO `guru` VALUES ('GR004', '', '', 'q', '', '', '') ;
#
# End of data contents of table guru
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------


#
# Delete any existing table `hak_akses`
#

DROP TABLE IF EXISTS `hak_akses`;


#
# Table structure of table `hak_akses`
#

CREATE TABLE `hak_akses` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table hak_akses (3 records)
#
 
INSERT INTO `hak_akses` VALUES ('admin', 'admin', 'admin') ; 
INSERT INTO `hak_akses` VALUES ('siswa', 'siswa', 'siswa') ; 
INSERT INTO `hak_akses` VALUES ('guru', 'guru', 'guru') ;
#
# End of data contents of table hak_akses
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------


#
# Delete any existing table `kelas`
#

DROP TABLE IF EXISTS `kelas`;


#
# Table structure of table `kelas`
#

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kode_kk` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kelas_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kelas (12 records)
#
 
INSERT INTO `kelas` VALUES ('K010', 'XII PS 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K009', 'XII TKJ 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K008', 'XII TKJ 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K007', 'XII TKJ 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K006', 'XII MM 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K005', 'XII MM 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K004', 'XII MM 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K003', 'XII RPL 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K002', 'XII RPL 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K001', 'XII RPL 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K011', 'XII PS 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K012', 'XII PS 3', '', '', '') ;
#
# End of data contents of table kelas
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------


#
# Delete any existing table `kompetensi_keahlian`
#

DROP TABLE IF EXISTS `kompetensi_keahlian`;


#
# Table structure of table `kompetensi_keahlian`
#

CREATE TABLE `kompetensi_keahlian` (
  `kode_kk` varchar(5) NOT NULL,
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_kompetensi_keahlian` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kompetensi_keahlian (4 records)
#
 
INSERT INTO `kompetensi_keahlian` VALUES ('KK001', 'MD001', 'Rekayasa Perangkat Lunak') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK002', 'MD001', 'Multimedia') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK003', 'MD001', 'Teknologi Komputer dan Jaringan') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK004', 'MD002', 'Perawatan Sosial') ;
#
# End of data contents of table kompetensi_keahlian
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------


#
# Delete any existing table `mata_diklat`
#

DROP TABLE IF EXISTS `mata_diklat`;


#
# Table structure of table `mata_diklat`
#

CREATE TABLE `mata_diklat` (
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_mata_diklat` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_mata_diklat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

#
# Data contents of table mata_diklat (2 records)
#
 
INSERT INTO `mata_diklat` VALUES ('MD002', 'Sosial') ; 
INSERT INTO `mata_diklat` VALUES ('MD001', 'Teknologi Informasi dan Komunikasi') ;
#
# End of data contents of table mata_diklat
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------


#
# Delete any existing table `mengajar`
#

DROP TABLE IF EXISTS `mengajar`;


#
# Table structure of table `mengajar`
#

CREATE TABLE `mengajar` (
  `id_ajar` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_ajar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table mengajar (0 records)
#

#
# End of data contents of table mengajar
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------


#
# Delete any existing table `nilai`
#

DROP TABLE IF EXISTS `nilai`;


#
# Table structure of table `nilai`
#

CREATE TABLE `nilai` (
  `NISN` varchar(12) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `kode_sk` varchar(5) NOT NULL,
  `nilai_angka` int(2) NOT NULL,
  `nilai_huruf` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table nilai (0 records)
#

#
# End of data contents of table nilai
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------


#
# Delete any existing table `siswa`
#

DROP TABLE IF EXISTS `siswa`;


#
# Table structure of table `siswa`
#

CREATE TABLE `siswa` (
  `NISN` varchar(12) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_siswa` varchar(30) NOT NULL,
  PRIMARY KEY  (`NISN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table siswa (1 records)
#
 
INSERT INTO `siswa` VALUES ('9976172271', 'KK001', 'K002', 'MOH. IQBAL RAFSANJANI', 'Jl. Bukit Watuwila I  G.IV No.10 Rt.03/11 Bringin ', '1997-10-05', 'MOH. IQBAL RAFSANJANI.JPG') ;
#
# End of data contents of table siswa
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------


#
# Delete any existing table `standar_kompetensi`
#

DROP TABLE IF EXISTS `standar_kompetensi`;


#
# Table structure of table `standar_kompetensi`
#

CREATE TABLE `standar_kompetensi` (
  `kode_sk` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `nama_sk` varchar(50) NOT NULL,
  `kelas_sk` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_sk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table standar_kompetensi (1 records)
#
 
INSERT INTO `standar_kompetensi` VALUES ('SK001', 'KK001', 'Membuat Program Basis Data', '10') ;
#
# End of data contents of table standar_kompetensi
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Thursday 5. March 2015 02:28 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `wali_murid`
# --------------------------------------------------------


#
# Delete any existing table `wali_murid`
#

DROP TABLE IF EXISTS `wali_murid`;


#
# Table structure of table `wali_murid`
#

CREATE TABLE `wali_murid` (
  `kode_wali` varchar(5) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `pekerjaan_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(15) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `telp_wali` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_wali`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table wali_murid (1 records)
#
 
INSERT INTO `wali_murid` VALUES ('WM001', '9976172271', 'IDC', 'IDC', 'IDC', 'IDC', 'IDC', '085641852190') ;
#
# End of data contents of table wali_murid
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------


#
# Delete any existing table `guru`
#

DROP TABLE IF EXISTS `guru`;


#
# Table structure of table `guru`
#

CREATE TABLE `guru` (
  `kode_guru` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `alamat_guru` varchar(100) NOT NULL,
  `telp_guru` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`kode_guru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table guru (2 records)
#
 
INSERT INTO `guru` VALUES ('GR001', 'KK001', 'K002', 'Nuning Minarsih, S.Pd, M.', '196501011989022005', 'Jl. Bukit Cendana No. 116  RT. 04 RW. 09, Sambiroto, Tembalang, Semarang.', '081393659281', '196501011989022005') ; 
INSERT INTO `guru` VALUES ('GR002', 'KK002', 'K004', 'Ardan Sirodjuddin, S.Pd', '197310082005011004', 'Jl. Pucang Anom IV / 10   RT. 1   RW. 18, Pucang Gading, Mranggen, Semarang.', '085865302080', '') ;
#
# End of data contents of table guru
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------


#
# Delete any existing table `hak_akses`
#

DROP TABLE IF EXISTS `hak_akses`;


#
# Table structure of table `hak_akses`
#

CREATE TABLE `hak_akses` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table hak_akses (3 records)
#
 
INSERT INTO `hak_akses` VALUES ('admin', 'admin', 'admin') ; 
INSERT INTO `hak_akses` VALUES ('siswa', 'siswa', 'siswa') ; 
INSERT INTO `hak_akses` VALUES ('guru', 'guru', 'guru') ;
#
# End of data contents of table hak_akses
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------


#
# Delete any existing table `kelas`
#

DROP TABLE IF EXISTS `kelas`;


#
# Table structure of table `kelas`
#

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kode_kk` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kelas_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kelas (12 records)
#
 
INSERT INTO `kelas` VALUES ('K010', 'XII PS 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K009', 'XII TKJ 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K008', 'XII TKJ 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K007', 'XII TKJ 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K006', 'XII MM 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K005', 'XII MM 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K004', 'XII MM 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K003', 'XII RPL 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K002', 'XII RPL 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K001', 'XII RPL 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K011', 'XII PS 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K012', 'XII PS 3', '', '', '') ;
#
# End of data contents of table kelas
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------


#
# Delete any existing table `kompetensi_keahlian`
#

DROP TABLE IF EXISTS `kompetensi_keahlian`;


#
# Table structure of table `kompetensi_keahlian`
#

CREATE TABLE `kompetensi_keahlian` (
  `kode_kk` varchar(5) NOT NULL,
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_kompetensi_keahlian` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kompetensi_keahlian (4 records)
#
 
INSERT INTO `kompetensi_keahlian` VALUES ('KK001', 'MD001', 'Rekayasa Perangkat Lunak') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK002', 'MD001', 'Multimedia') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK003', 'MD001', 'Teknologi Komputer dan Jaringan') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK004', 'MD002', 'Perawatan Sosial') ;
#
# End of data contents of table kompetensi_keahlian
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------


#
# Delete any existing table `mata_diklat`
#

DROP TABLE IF EXISTS `mata_diklat`;


#
# Table structure of table `mata_diklat`
#

CREATE TABLE `mata_diklat` (
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_mata_diklat` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_mata_diklat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

#
# Data contents of table mata_diklat (2 records)
#
 
INSERT INTO `mata_diklat` VALUES ('MD002', 'Sosial') ; 
INSERT INTO `mata_diklat` VALUES ('MD001', 'Teknologi Informasi dan Komunikasi') ;
#
# End of data contents of table mata_diklat
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------


#
# Delete any existing table `mengajar`
#

DROP TABLE IF EXISTS `mengajar`;


#
# Table structure of table `mengajar`
#

CREATE TABLE `mengajar` (
  `id_ajar` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_ajar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table mengajar (0 records)
#

#
# End of data contents of table mengajar
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------


#
# Delete any existing table `nilai`
#

DROP TABLE IF EXISTS `nilai`;


#
# Table structure of table `nilai`
#

CREATE TABLE `nilai` (
  `NISN` varchar(12) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `kode_sk` varchar(5) NOT NULL,
  `nilai_angka` int(2) NOT NULL,
  `nilai_huruf` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table nilai (0 records)
#

#
# End of data contents of table nilai
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------


#
# Delete any existing table `siswa`
#

DROP TABLE IF EXISTS `siswa`;


#
# Table structure of table `siswa`
#

CREATE TABLE `siswa` (
  `NISN` varchar(12) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_siswa` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`NISN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table siswa (1 records)
#
 
INSERT INTO `siswa` VALUES ('9976172271', 'KK001', 'K002', 'MOH. IQBAL RAFSANJANI', 'Jl. Bukit Watuwila I  G.IV No.10 Rt.03/11 Bringin ', '1997-10-05', 'MOH. IQBAL RAFSANJANI.JPG', '9976172271') ;
#
# End of data contents of table siswa
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------


#
# Delete any existing table `standar_kompetensi`
#

DROP TABLE IF EXISTS `standar_kompetensi`;


#
# Table structure of table `standar_kompetensi`
#

CREATE TABLE `standar_kompetensi` (
  `kode_sk` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `nama_sk` varchar(50) NOT NULL,
  `kelas_sk` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_sk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table standar_kompetensi (1 records)
#
 
INSERT INTO `standar_kompetensi` VALUES ('SK001', 'KK001', 'Membuat Program Basis Data', '10') ;
#
# End of data contents of table standar_kompetensi
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:01 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `wali_murid`
# --------------------------------------------------------


#
# Delete any existing table `wali_murid`
#

DROP TABLE IF EXISTS `wali_murid`;


#
# Table structure of table `wali_murid`
#

CREATE TABLE `wali_murid` (
  `kode_wali` varchar(5) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `pekerjaan_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(15) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `telp_wali` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_wali`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table wali_murid (1 records)
#
 
INSERT INTO `wali_murid` VALUES ('WM001', '9976172271', 'IDC', 'IDC', 'IDC', 'IDC', 'IDC', '085641852190') ;
#
# End of data contents of table wali_murid
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------


#
# Delete any existing table `guru`
#

DROP TABLE IF EXISTS `guru`;


#
# Table structure of table `guru`
#

CREATE TABLE `guru` (
  `kode_guru` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `alamat_guru` varchar(100) NOT NULL,
  `telp_guru` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`kode_guru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table guru (2 records)
#
 
INSERT INTO `guru` VALUES ('GR001', 'KK001', 'K002', 'Nuning Minarsih, S.Pd, M.', '196501011989022005', 'Jl. Bukit Cendana No. 116  RT. 04 RW. 09, Sambiroto, Tembalang, Semarang.', '081393659281', '196501011989022005') ; 
INSERT INTO `guru` VALUES ('GR002', 'KK002', 'K004', 'Ardan Sirodjuddin, S.Pd', '197310082005011004', 'Jl. Pucang Anom IV / 10   RT. 1   RW. 18, Pucang Gading, Mranggen, Semarang.', '085865302080', '') ;
#
# End of data contents of table guru
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------


#
# Delete any existing table `hak_akses`
#

DROP TABLE IF EXISTS `hak_akses`;


#
# Table structure of table `hak_akses`
#

CREATE TABLE `hak_akses` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table hak_akses (3 records)
#
 
INSERT INTO `hak_akses` VALUES ('admin', 'admin', 'admin') ; 
INSERT INTO `hak_akses` VALUES ('siswa', 'siswa', 'siswa') ; 
INSERT INTO `hak_akses` VALUES ('guru', 'guru', 'guru') ;
#
# End of data contents of table hak_akses
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------


#
# Delete any existing table `kelas`
#

DROP TABLE IF EXISTS `kelas`;


#
# Table structure of table `kelas`
#

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kode_kk` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kelas_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kelas (12 records)
#
 
INSERT INTO `kelas` VALUES ('K010', 'XII PS 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K009', 'XII TKJ 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K008', 'XII TKJ 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K007', 'XII TKJ 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K006', 'XII MM 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K005', 'XII MM 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K004', 'XII MM 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K003', 'XII RPL 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K002', 'XII RPL 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K001', 'XII RPL 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K011', 'XII PS 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K012', 'XII PS 3', '', '', '') ;
#
# End of data contents of table kelas
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------


#
# Delete any existing table `kompetensi_keahlian`
#

DROP TABLE IF EXISTS `kompetensi_keahlian`;


#
# Table structure of table `kompetensi_keahlian`
#

CREATE TABLE `kompetensi_keahlian` (
  `kode_kk` varchar(5) NOT NULL,
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_kompetensi_keahlian` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kompetensi_keahlian (4 records)
#
 
INSERT INTO `kompetensi_keahlian` VALUES ('KK001', 'MD001', 'Rekayasa Perangkat Lunak') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK002', 'MD001', 'Multimedia') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK003', 'MD001', 'Teknologi Komputer dan Jaringan') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK004', 'MD002', 'Perawatan Sosial') ;
#
# End of data contents of table kompetensi_keahlian
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------


#
# Delete any existing table `mata_diklat`
#

DROP TABLE IF EXISTS `mata_diklat`;


#
# Table structure of table `mata_diklat`
#

CREATE TABLE `mata_diklat` (
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_mata_diklat` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_mata_diklat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

#
# Data contents of table mata_diklat (2 records)
#
 
INSERT INTO `mata_diklat` VALUES ('MD002', 'Sosial') ; 
INSERT INTO `mata_diklat` VALUES ('MD001', 'Teknologi Informasi dan Komunikasi') ;
#
# End of data contents of table mata_diklat
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------


#
# Delete any existing table `mengajar`
#

DROP TABLE IF EXISTS `mengajar`;


#
# Table structure of table `mengajar`
#

CREATE TABLE `mengajar` (
  `id_ajar` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_ajar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table mengajar (0 records)
#

#
# End of data contents of table mengajar
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------


#
# Delete any existing table `nilai`
#

DROP TABLE IF EXISTS `nilai`;


#
# Table structure of table `nilai`
#

CREATE TABLE `nilai` (
  `NISN` varchar(12) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `kode_sk` varchar(5) NOT NULL,
  `nilai_angka` int(2) NOT NULL,
  `nilai_huruf` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table nilai (0 records)
#

#
# End of data contents of table nilai
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------


#
# Delete any existing table `siswa`
#

DROP TABLE IF EXISTS `siswa`;


#
# Table structure of table `siswa`
#

CREATE TABLE `siswa` (
  `NISN` varchar(12) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_siswa` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`NISN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table siswa (1 records)
#
 
INSERT INTO `siswa` VALUES ('9976172271', 'KK001', 'K002', 'MOH. IQBAL RAFSANJANI', 'Jl. Bukit Watuwila I  G.IV No.10 Rt.03/11 Bringin ', '1997-10-05', 'MOH. IQBAL RAFSANJANI.JPG', '9976172271') ;
#
# End of data contents of table siswa
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------


#
# Delete any existing table `standar_kompetensi`
#

DROP TABLE IF EXISTS `standar_kompetensi`;


#
# Table structure of table `standar_kompetensi`
#

CREATE TABLE `standar_kompetensi` (
  `kode_sk` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `nama_sk` varchar(50) NOT NULL,
  `kelas_sk` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_sk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table standar_kompetensi (1 records)
#
 
INSERT INTO `standar_kompetensi` VALUES ('SK001', 'KK001', 'Membuat Program Basis Data', '10') ;
#
# End of data contents of table standar_kompetensi
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:02 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `wali_murid`
# --------------------------------------------------------


#
# Delete any existing table `wali_murid`
#

DROP TABLE IF EXISTS `wali_murid`;


#
# Table structure of table `wali_murid`
#

CREATE TABLE `wali_murid` (
  `kode_wali` varchar(5) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `pekerjaan_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(15) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `telp_wali` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_wali`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table wali_murid (1 records)
#
 
INSERT INTO `wali_murid` VALUES ('WM001', '9976172271', 'IDC', 'IDC', 'IDC', 'IDC', 'IDC', '085641852190') ;
#
# End of data contents of table wali_murid
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------


#
# Delete any existing table `guru`
#

DROP TABLE IF EXISTS `guru`;


#
# Table structure of table `guru`
#

CREATE TABLE `guru` (
  `kode_guru` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `alamat_guru` varchar(100) NOT NULL,
  `telp_guru` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`kode_guru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table guru (2 records)
#
 
INSERT INTO `guru` VALUES ('GR001', 'KK001', 'K002', 'Nuning Minarsih, S.Pd, M.', '196501011989022005', 'Jl. Bukit Cendana No. 116  RT. 04 RW. 09, Sambiroto, Tembalang, Semarang.', '081393659281', '196501011989022005') ; 
INSERT INTO `guru` VALUES ('GR002', 'KK002', 'K004', 'Ardan Sirodjuddin, S.Pd', '197310082005011004', 'Jl. Pucang Anom IV / 10   RT. 1   RW. 18, Pucang Gading, Mranggen, Semarang.', '085865302080', '') ;
#
# End of data contents of table guru
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------


#
# Delete any existing table `hak_akses`
#

DROP TABLE IF EXISTS `hak_akses`;


#
# Table structure of table `hak_akses`
#

CREATE TABLE `hak_akses` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table hak_akses (3 records)
#
 
INSERT INTO `hak_akses` VALUES ('admin', 'admin', 'admin') ; 
INSERT INTO `hak_akses` VALUES ('siswa', 'siswa', 'siswa') ; 
INSERT INTO `hak_akses` VALUES ('guru', 'guru', 'guru') ;
#
# End of data contents of table hak_akses
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------


#
# Delete any existing table `kelas`
#

DROP TABLE IF EXISTS `kelas`;


#
# Table structure of table `kelas`
#

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kode_kk` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kelas_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kelas (12 records)
#
 
INSERT INTO `kelas` VALUES ('K010', 'XII PS 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K009', 'XII TKJ 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K008', 'XII TKJ 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K007', 'XII TKJ 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K006', 'XII MM 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K005', 'XII MM 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K004', 'XII MM 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K003', 'XII RPL 3', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K002', 'XII RPL 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K001', 'XII RPL 1', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K011', 'XII PS 2', '', '', '') ; 
INSERT INTO `kelas` VALUES ('K012', 'XII PS 3', '', '', '') ;
#
# End of data contents of table kelas
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------


#
# Delete any existing table `kompetensi_keahlian`
#

DROP TABLE IF EXISTS `kompetensi_keahlian`;


#
# Table structure of table `kompetensi_keahlian`
#

CREATE TABLE `kompetensi_keahlian` (
  `kode_kk` varchar(5) NOT NULL,
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_kompetensi_keahlian` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table kompetensi_keahlian (4 records)
#
 
INSERT INTO `kompetensi_keahlian` VALUES ('KK001', 'MD001', 'Rekayasa Perangkat Lunak') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK002', 'MD001', 'Multimedia') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK003', 'MD001', 'Teknologi Komputer dan Jaringan') ; 
INSERT INTO `kompetensi_keahlian` VALUES ('KK004', 'MD002', 'Perawatan Sosial') ;
#
# End of data contents of table kompetensi_keahlian
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------


#
# Delete any existing table `mata_diklat`
#

DROP TABLE IF EXISTS `mata_diklat`;


#
# Table structure of table `mata_diklat`
#

CREATE TABLE `mata_diklat` (
  `kode_mata_diklat` varchar(5) NOT NULL,
  `nama_mata_diklat` varchar(50) NOT NULL,
  PRIMARY KEY  (`kode_mata_diklat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

#
# Data contents of table mata_diklat (2 records)
#
 
INSERT INTO `mata_diklat` VALUES ('MD002', 'Sosial') ; 
INSERT INTO `mata_diklat` VALUES ('MD001', 'Teknologi Informasi dan Komunikasi') ;
#
# End of data contents of table mata_diklat
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------


#
# Delete any existing table `mengajar`
#

DROP TABLE IF EXISTS `mengajar`;


#
# Table structure of table `mengajar`
#

CREATE TABLE `mengajar` (
  `id_ajar` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_sk` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_ajar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table mengajar (0 records)
#

#
# End of data contents of table mengajar
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------


#
# Delete any existing table `nilai`
#

DROP TABLE IF EXISTS `nilai`;


#
# Table structure of table `nilai`
#

CREATE TABLE `nilai` (
  `NISN` varchar(12) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `kode_sk` varchar(5) NOT NULL,
  `nilai_angka` int(2) NOT NULL,
  `nilai_huruf` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table nilai (0 records)
#

#
# End of data contents of table nilai
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------


#
# Delete any existing table `siswa`
#

DROP TABLE IF EXISTS `siswa`;


#
# Table structure of table `siswa`
#

CREATE TABLE `siswa` (
  `NISN` varchar(12) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_siswa` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`NISN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table siswa (1 records)
#
 
INSERT INTO `siswa` VALUES ('9976172271', 'KK001', 'K002', 'MOH. IQBAL RAFSANJANI', 'Jl. Bukit Watuwila I  G.IV No.10 Rt.03/11 Bringin ', '1997-10-05', 'MOH. IQBAL RAFSANJANI.JPG', '9976172271') ;
#
# End of data contents of table siswa
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------


#
# Delete any existing table `standar_kompetensi`
#

DROP TABLE IF EXISTS `standar_kompetensi`;


#
# Table structure of table `standar_kompetensi`
#

CREATE TABLE `standar_kompetensi` (
  `kode_sk` varchar(5) NOT NULL,
  `kode_kk` varchar(5) NOT NULL,
  `nama_sk` varchar(50) NOT NULL,
  `kelas_sk` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_sk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table standar_kompetensi (1 records)
#
 
INSERT INTO `standar_kompetensi` VALUES ('SK001', 'KK001', 'Membuat Program Basis Data', '10') ;
#
# End of data contents of table standar_kompetensi
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Saturday 30. January 2016 20:05 KRAT
# Hostname: localhost
# Database: `raport1`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `guru`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `hak_akses`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kelas`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `kompetensi_keahlian`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mata_diklat`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `mengajar`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `nilai`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `siswa`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `standar_kompetensi`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `wali_murid`
# --------------------------------------------------------


#
# Delete any existing table `wali_murid`
#

DROP TABLE IF EXISTS `wali_murid`;


#
# Table structure of table `wali_murid`
#

CREATE TABLE `wali_murid` (
  `kode_wali` varchar(5) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `pekerjaan_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(15) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `telp_wali` varchar(15) NOT NULL,
  PRIMARY KEY  (`kode_wali`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

#
# Data contents of table wali_murid (1 records)
#
 
INSERT INTO `wali_murid` VALUES ('WM001', '9976172271', 'IDC', 'IDC', 'IDC', 'IDC', 'IDC', '085641852190') ;
#
# End of data contents of table wali_murid
# --------------------------------------------------------

