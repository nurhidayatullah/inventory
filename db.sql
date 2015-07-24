/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.36 : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `inventory`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `id_kemasan` int(11) DEFAULT NULL,
  `id_produsen` int(11) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `kategori_barang` (`id_kategori`),
  KEY `kemasan_barang` (`id_kemasan`),
  KEY `produsen_barang` (`id_produsen`),
  CONSTRAINT `kategori_barang` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kemasan_barang` FOREIGN KEY (`id_kemasan`) REFERENCES `kemasan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `produsen_barang` FOREIGN KEY (`id_produsen`) REFERENCES `produsen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id`,`nama_barang`,`id_kategori`,`stock`,`id_kemasan`,`id_produsen`,`description`) values (4,'Mie Sedap',1,0,1,1,'tes description'),(5,'Ciptadent',1,0,1,2,'tes');

/*Table structure for table `barang_masuk` */

DROP TABLE IF EXISTS `barang_masuk`;

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `masuk_supplier` (`id_supplier`),
  CONSTRAINT `masuk_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `barang_masuk` */

insert  into `barang_masuk`(`id`,`tanggal`,`id_supplier`,`total`) values (1,'1998-01-17 12:12:00',1,0);

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_cust` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cust_kota` (`id_kota`),
  CONSTRAINT `cust_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

/*Table structure for table `detail_barang_masuk` */

DROP TABLE IF EXISTS `detail_barang_masuk`;

CREATE TABLE `detail_barang_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang_masuk` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `masuk_detail` (`id_barang_masuk`),
  KEY `masuk_barang` (`id_barang`),
  CONSTRAINT `masuk_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `masuk_detail` FOREIGN KEY (`id_barang_masuk`) REFERENCES `barang_masuk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_barang_masuk` */

/*Table structure for table `detail_transaksi` */

DROP TABLE IF EXISTS `detail_transaksi`;

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_transaksi` (`id_transaksi`),
  KEY `detail_barang` (`id_barang`),
  CONSTRAINT `detail_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detail_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_transaksi` */

/*Table structure for table `harga` */

DROP TABLE IF EXISTS `harga`;

CREATE TABLE `harga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nominal` int(11) DEFAULT NULL,
  `kurs` varchar(20) DEFAULT NULL,
  `description` text,
  `id_barang` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `harga_barang` (`id_barang`),
  CONSTRAINT `harga_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `harga` */

insert  into `harga`(`id`,`nominal`,`kurs`,`description`,`id_barang`,`active`) values (3,1000,'Rp','tes description',4,1);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`nama_kategori`,`keterangan`) values (1,'Sembako',''),(2,'Alat Mandi',''),(3,'Minuman','');

/*Table structure for table `kemasan` */

DROP TABLE IF EXISTS `kemasan`;

CREATE TABLE `kemasan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kemasan` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kemasan` */

insert  into `kemasan`(`id`,`nama_kemasan`,`description`) values (1,'Sachet',''),(2,'Botol 500 ml',''),(3,'Karung 20 KG','');

/*Table structure for table `kota` */

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(50) DEFAULT NULL,
  `id_propinsi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kota_propinsi` (`id_propinsi`),
  CONSTRAINT `kota_propinsi` FOREIGN KEY (`id_propinsi`) REFERENCES `propinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kota` */

insert  into `kota`(`id`,`nama_kota`,`id_propinsi`) values (1,'Gresik',1),(2,'Surabaya',1);

/*Table structure for table `link_barang_rak` */

DROP TABLE IF EXISTS `link_barang_rak`;

CREATE TABLE `link_barang_rak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) DEFAULT NULL,
  `id_rak` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `barang_link` (`id_barang`),
  KEY `link_rak` (`id_rak`),
  CONSTRAINT `barang_link` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `link_rak` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `link_barang_rak` */

/*Table structure for table `log_barang` */

DROP TABLE IF EXISTS `log_barang`;

CREATE TABLE `log_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `in` int(11) DEFAULT NULL,
  `out` int(11) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`),
  KEY `log` (`id_barang`),
  CONSTRAINT `log` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `log_barang` */

/*Table structure for table `negara` */

DROP TABLE IF EXISTS `negara`;

CREATE TABLE `negara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_negara` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `negara` */

insert  into `negara`(`id`,`nama_negara`) values (1,'Indonesia');

/*Table structure for table `produsen` */

DROP TABLE IF EXISTS `produsen`;

CREATE TABLE `produsen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produsen` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produsen_kota` (`id_kota`),
  CONSTRAINT `produsen_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `produsen` */

insert  into `produsen`(`id`,`nama_produsen`,`alamat`,`id_kota`,`telp`) values (1,'PT Karunia Alam Segar','Jl Manyar',1,'031827262552'),(2,'PT Unilever Tbk.','Jl Rungkut Industri',2,'2537125372635');

/*Table structure for table `propinsi` */

DROP TABLE IF EXISTS `propinsi`;

CREATE TABLE `propinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_propinsi` varchar(50) DEFAULT NULL,
  `id_negara` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `negara_propinsi` (`id_negara`),
  CONSTRAINT `negara_propinsi` FOREIGN KEY (`id_negara`) REFERENCES `negara` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `propinsi` */

insert  into `propinsi`(`id`,`nama_propinsi`,`id_negara`) values (1,'Jawa Timur',1),(2,'jawa Tengah',1);

/*Table structure for table `rak` */

DROP TABLE IF EXISTS `rak`;

CREATE TABLE `rak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_rak` varchar(3) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rak` */

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `suppl_kota` (`id_kota`),
  CONSTRAINT `suppl_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`id`,`nama_supplier`,`alamat`,`id_kota`,`telp`) values (1,'PT Abal Abal','Jl Ngawur',1,'0008888888');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `id_customers` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tr_cust` (`id_customers`),
  CONSTRAINT `tr_cust` FOREIGN KEY (`id_customers`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
