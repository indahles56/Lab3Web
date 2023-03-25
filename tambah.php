<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $kategori = $_POST['kategori'];
  $harga_jual = $_POST['harga_jual'];
  $harga_beli = $_POST['harga_beli'];
  $stok = $_POST['stok'];
  $file_gambar = $_FILES['file_gambar'];
  $gambar = null;
  if ($file_gambar['error'] == 0) {
    $filename = str_replace(' ', '_', $file_gambar['name']);
    $destination = dirname(__FILE__) . '/gambar/' . $filename;
    if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
      $gambar = 'gambar/' . $filename;;
    }
  }
  $sql = 'INSERT INTO data_barang (nama, kategori,harga_jual, harga_beli,
stok, gambar) ';
  $sql .= "VALUE ('{$nama}', '{$kategori}','{$harga_jual}',
'{$harga_beli}', '{$stok}', '{$gambar}')";
  $result = mysqli_query($conn, $sql);
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <title>Tambah Barang</title>
  <style>
    .input label {
      display: block;
      margin-bottom: 5px;
      margin-left: 40px;
      font-weight: bold;
    }

    .input input[type="text"],
    .input input[type="file"] {
      width: 50%;
      padding: 10px;
      border: 1px solid #ccc;
      margin-left: 40px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .input select {
      width: 50%;
      padding: 10px;
      border: 1px solid #ccc;
      margin-left: 40px;
      padding-right: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .submit input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      border: none;
      margin-left: 40px;
      border-radius: 4px;
      cursor: pointer;
    }

    .submit input[type="submit"]:hover {
      background-color: #45a049;
    }

    .preview {
      margin-top: 10px;
      width: 50%;
      height: 200px;
      border: 1px solid #ccc;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    h1 {
      font-size: 24px;
      text-align: center;
      width: 50%;
      margin-left: 40px;
    }

    .preview img {
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Tambah Barang</h1>
    <div class="main">

      <form method="post" action="tambah.php" enctype="multipart/form-
data">

        <div class="input">
          <label>Nama Barang</label>
          <input type="text" name="nama" />
        </div>
        <div class="input">
          <label>Kategori</label>
          <select name="kategori">
            <option value="Komputer">Komputer</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Hand Phone">Hand Phone</option>
          </select>
        </div>
        <div class="input">
          <label>Harga Jual</label>
          <input type="text" name="harga_jual" />
        </div>
        <div class="input">
          <label>Harga Beli</label>
          <input type="text" name="harga_beli" />
        </div>
        <div class="input">
          <label>Stok</label>
          <input type="text" name="stok" />
        </div>
        <div class="input">
          <label>File Gambar</label>
          <input type="file" name="file_gambar" />
        </div>
        <div class="submit">
          <input type="submit" name="submit" value="Simpan" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>