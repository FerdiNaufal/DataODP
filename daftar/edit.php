<?php
session_start();
if($_SESSION['nama']=='')
{
    header("location:../login/login.php");
}

include '../koneksi.php';
include '../asset/header.php';
$id_pasien = $_GET["id_pasien"];
$query = mysqli_query($koneksi, ("SELECT * FROM pasien where id_pasien = $id_pasien"));
$pasien = mysqli_fetch_assoc($query);
?>
<style type="text/css">
.card{
  margin-top: 50px;
  margin-right: -50px;
  margin-bottom: 0;
  margin-left: 250px;
}
</style>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
  <center><h1>Selamat Datang Petugas <?php echo $_SESSION['nama']?></h1></center>
	<div class="container justify-content-center">
   <div class="row">
    <div class="col-md-9">
     <div class="card bg-dark mb-3">
      <div class="card-header">
      <h2 class="text-white"><i class="fas fa-edit"></i> Edit Data</h2>
					</div>
					<div class="card-body">
					<form action="edit-proses.php" method="post">
						<input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
							<div class="form-group">
							 <label class="text-white">Nama</label>
							 <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= $pasien['nama']?>" required>
							</div>
							<div class="form-group">
								<label class="text-white">No Telepon</label>
 							 <input type="number" class="form-control" name="telp" placeholder="Masukkan No Telepon" value="<?= $pasien['telp']?>"required>
							</div>
							<div class="form-group">
								<label class="text-white">Alamat</label>
 							 <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?= $pasien['alamat']?>" required>
							</div>
							<div class="form-group">
								<label class="text-white">Suhu Tubuh</label>
 							 <input type="number" class="form-control" name="suhu_tubuh" placeholder="Masukkan Suhu Tubuh" required>
							</div>
							<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
include '../asset/footer.php';
 ?>
