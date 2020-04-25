<?php
include '../koneksi.php';

if (isset($_POST['simpan']))
{
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$suhu_tubuh = $_POST['suhu_tubuh'];

	$sql = "INSERT INTO pasien (nama, telp, alamat, suhu_tubuh)
			VALUES ('$nama', '$telp', '$alamat', '$suhu_tubuh')";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

	if ($count == 1)
	{
		echo "
			<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href='daftar_odp.php';
			</script>
		";
	}
	else
	{
		header("Location: tambah.php");
	}
}
else
{
	header("Location: tambah.php");
}
?>
