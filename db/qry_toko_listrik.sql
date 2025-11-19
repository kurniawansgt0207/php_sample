CREATE TABLE `barang`( 
	`kode_produk` VARCHAR(15) NOT NULL, 
	`nama_produk` VARCHAR(30), 
	`harga_produk` DOUBLE(10,2), 
	`merk_produk` VARCHAR(20), 
	`status_produk` VARCHAR(15), 
	PRIMARY KEY (`kode_produk`) 
) ENGINE=MYISAM; 
