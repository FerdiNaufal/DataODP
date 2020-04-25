<?php

include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];

$query = mysqli_query($koneksi, "DELETE FROM pasien WHERE pasien.id_pasien='$id_pasien' ");

if($query>0){
    echo "<script> alert('Data Berhasil Dihapus'); document.location.href='daftar_odp.php';
          </script>";
}else{
}

?>
