<?php
include '../koneksi.php';

if (isset($_POST['simpan']))
{
	$id_pasien 			= $_POST['id_pasien'];
	$nama				= $_POST['nama'];
	$telp	 		= $_POST['telp'];
	$alamat 			= $_POST['alamat'];
	$suhu_tubuh			= $_POST['suhu_tubuh'];

	$sql =	"UPDATE pasien SET nama='$nama', telp='$telp', alamat='$alamat', suhu_tubuh='$suhu_tubuh' WHERE id_pasien='$id_pasien'";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if ($res>0) {
		echo "
			<script>
				alert('Data Berhasil Diubah');
				document.location.href='daftar_odp.php';
			</script>
		";
	}
}
?>
