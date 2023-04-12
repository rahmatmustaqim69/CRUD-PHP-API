========Create DB=========
CREATE DATABASE dbrest;
USE dbrest;
======Create TABLE=======
CREATE TABLE `produk` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(30) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `tipe_produk` varchar(30) DEFAULT NULL,
  `stok` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
======Insert TABLE=======
INSERT INTO `produk`(`nama_produk`, `harga`, `tipe_produk`, `stok`) VALUES ('SUZUKI R3',30000,'MOBIL',10);
INSERT INTO `produk`(`nama_produk`, `harga`, `tipe_produk`, `stok`) VALUES ('TOYOTA AFANZA',40000,'MOBIL',10);
INSERT INTO `produk`(`nama_produk`, `harga`, `tipe_produk`, `stok`) VALUES ('DAIHATSU SENIA',50000,'MOBIL',10);
INSERT INTO `produk`(`nama_produk`, `harga`, `tipe_produk`, `stok`) VALUES ('AUDI TT',60000,'MOBIL',10);
INSERT INTO `produk`(`nama_produk`, `harga`, `tipe_produk`, `stok`) VALUES ('SUPRA Z 125',6000,'MOTOR',10);
INSERT INTO `produk`(`nama_produk`, `harga`, `tipe_produk`, `stok`) VALUES ('KAWASAKI NINJA R600',6000,'MOBIL',10);

commit;