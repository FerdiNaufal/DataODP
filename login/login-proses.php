<?php
include '../koneksi.php';

$username   = $_POST['username'];
$password       = md5($_POST['password']);
$user = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($user);
if($cek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['nama'] = $row['nama'];
		echo "
			<script>
				alert('Berhasil Login');
				document.location.href='../daftar/daftar_odp.php';
			</script>
		  ";
}else
{
	echo "
		<script>
			alert('Username / Password Salah');
			document.location.href='login.php';
		</script>
	  ";
}
?>
