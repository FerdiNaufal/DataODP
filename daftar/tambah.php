<?php
session_start();
if($_SESSION['nama']=='')
{
    header("location:../login/login.php");
}

include '../asset/header.php';
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
	<title>Tambah Anggota</title>
</head>
<body>
  <center><h1>Selamat Datang Petugas <?php echo $_SESSION['nama']?></h1></center>
	<div class="container justify-content-center">
	 <div class="row">
	  <div class="col-md-9">
	   <div class="card bg-dark mb-3">
	    <div class="card-header">
						<h2 class="card-title text-white"><i class="fas fa-edit"></i> Tambah Data</h2>
					</div>
					<div class="card-body ">
			         <form method="post" action="tambah-proses.php">
			                <div class="form-group">
			                 <label class="text-white">Nama</label>
			                 <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
			                </div>

			                <div class="form-group">
			                 <label class="text-white">No. Telepon</label>
			                 <input type="number" class="form-control" name="telp" placeholder="Masukkan No Telpon" required>
			                </div>

			                <div class="form-group">
			                 <label class="text-white">Alamat</label>
			                 <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></input>
			                </div>

			                <div class="form-group">
			                 <label class="text-white">Suhu Tubuh</label>
			                 <input type="number" class="form-control" name="suhu_tubuh" placeholder="Masukkan Suhu Tubuh" required></input>
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
