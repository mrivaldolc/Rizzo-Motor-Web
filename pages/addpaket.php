<?php
session_start();

require '../config/koneksi.php';

$query = " SELECT * FROM pemesanantoko";
$result = mysqli_query($koneksi, $query);

$query1 = "SELECT * FROM user_log";
$result1 = mysqli_query($koneksi, $query1);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Car | Rivaldo_1202204044</title>
  <link href="../css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../css/addpaket.css'; ?>
    
  </style>
</head>

<body>
  <!-- Background image -->
<div class="bg-image" 
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 130vh">
            

  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="navbar-brand">
            <img src="../photos/rmlogo.png" width="140" height="35" alt="">
          </a>
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">Order</a>
        </div>
      </div>
      <div>     
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Form -->
  <section id='form'>
    <div class="container">
      <h1 class="newcar">RIZZO MOTOR</h1>
      <p class="newcarlist">Silahkan Lengkapi Form Dibawah Ini Untuk Melakukan Pemesanan</p>
      <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Mobil</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Mobil">
        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="pemilik" name="pemilik" placeholder="Masukkan Nama Pemilik">
        <label for="tanggalservice">Tanggal Service</label>
        <input type="date" id="tanggalservice" name="tanggalservice">
        <label for="desc">Deskripsi</label>
        <textarea id="desc" name="desc" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
        <label for="inputGroupFile01">Foto Plat Kendaraan</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="gambar" style="height: 40px;">
        <label for="status">Status Service</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Dirumah" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Dirumah</label>
          <input type="radio" name="status" id="belum" value="Ditoko" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Ditoko</label>
        </span>
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  <!-- Form End -->

  <!-- footer -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					&copy; <a href="https://goo.gl/maps/vPyrzZ1LUWYswsSW6">Toko Rizzo Motor</a> 2022.
					<!-- Don't Remove/Edit this. If you remove this you don't have permission to use this template. -->
					Designed by <a href="https://www.linkedin.com/in/muhammad-rivaldo-3a169a221/">Rivaldo</a>
					<!-- So Please don't remove this -->
				</div>
				<div class="col-md-12">
					Distributed by <a href="https://goo.gl/maps/vPyrzZ1LUWYswsSW6">Rizzo Motor</a>

				</div>
			</div>
		</div>
	</footer>
<!-- end footer -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</div>
<!-- Background image -->
</body>

</html>