<?php
session_start();
if($_SESSION['nama']=='')
{
    header("location:../login/login.php");
}

include '../koneksi.php';
include '../asset/header.php';

$sql = "SELECT * FROM pasien ORDER BY nama";

$res = mysqli_query($koneksi, $sql);

$user = array();

while ($data = mysqli_fetch_assoc($res)) {
  $user[] = $data;
}
?>
<title>Daftar ODP</title>
<center><h1>Selamat Datang Petugas <?php echo $_SESSION['nama']?></h1></center>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card bg-dark mb-3">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-book"></i> Data ODP Karantina</h2>
          <a href="tambah.php" class="btn btn-outline-light"><i class="fas fa-plus"></i> Tambah Data</a>
         </div>
        <div class="card-body">
          <table class="table table-hover">
  <thead>
    <tr style="background-color: #4e4e4e;">
      <th scope="col" class="text-white">No</th>
      <th scope="col" class="text-white">Nama</th>
      <th scope="col" class="text-white">No Telepon</th>
      <th scope="col" class="text-white">Alamat</th>
      <th scope="col" class="text-white">Suhu Tubuh</th>
      <th scope="col" class="text-white">Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $no = 1;
 foreach ($user as $u) { ?>

   <tr>
     <th scope="row" class="text-white"><?= $no ?></th>
     <td class="text-white"><?= $u['nama'] ?></td>
     <td class="text-white"><?= $u['telp'] ?></td>
     <td class="text-white"><?= $u['alamat'] ?></td>
     <td class="text-white"><?= $u['suhu_tubuh'] ?>°c</td>
     <td>
     <a href="edit.php?id_pasien=<?= $u["id_pasien"];?>" class="badge badge-success text-white">Edit</a>
     <a href="hapus.php?id_pasien=<?= $u["id_pasien"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
     </td>
   <?php
  $no++;
}
    ?>
</tbody>
</table>
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
