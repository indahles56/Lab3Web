# Penjelasan dari setiap langkah Praktikum Projek CRUD


## Persiapan :
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server
menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

![image](https://user-images.githubusercontent.com/127643042/227705305-3311d200-4690-4a5c-8b93-b5bcbe88be6e.png)


## Menjalankan MySQL Server
Untuk menjalankan MySQL Server dari menu XAMPP Control.


## Mengakses MySQL Client menggunakan PHP MyAdmin
Pastikan webserver Apache dan MySQL server sudah dijalankan. Kemudian buka melalui browser:
http://localhost/phpmyadmin/


## Membuat Database: Studi Kasus Data Barang

### Membuat Database
CREATE DATABASE latihan1;

### Membuat Tabel
CREATE TABLE data_barang (
id_barang int(10) auto_increment Primary Key,
kategori varchar(30),
nama varchar(30),
gambar varchar(100),
harga_beli decimal(10,0),
harga_jual decimal(10,0),
stok int(4)
);

### Menambahkan Data
INSERT INTO data_barang
(kategori, nama, gambar, harga_beli, harga_jual,
stok)

VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000,
2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);


## Membuat Program CRUD
Buat folder lab3_php_database pada root directory web server (d:\xampp\htdocs)

![image](https://user-images.githubusercontent.com/127643042/227705973-4f96d6e0-6592-4389-9044-e224b2d8608f.png)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab3_php_database/


## Membuat file koneksi database
Buat file baru dengan nama koneksi.php

Buka melalui browser untuk menguji koneksi database (untuk menyampilkan pesan koneksi berhasil,
uncomment pada perintah echo “koneksi berhasil”;

![image](https://user-images.githubusercontent.com/127643042/227706056-15381cb5-2a94-42be-8935-960bdc488e3f.png)


## Membuat file index untuk menampilkan data (Read)
Buat file baru dengan nama index.php

![image](https://user-images.githubusercontent.com/127643042/227706140-90375f23-54e6-43fd-8852-369047975aac.png)


## Menambah Data (Create)
Buat file baru dengan nama tambah.php

![image](https://user-images.githubusercontent.com/127643042/227706163-e77d2443-7051-4966-8117-e977d336233d.png)


## Mengubah Data (Update)
Buat file baru dengan nama ubah.php

![image](https://user-images.githubusercontent.com/127643042/227706215-f59de0d1-8871-49e6-b30f-1ea7e828c6af.png)


## Menghapus Data (Delete)
Buat file baru dengan nama hapus.php
