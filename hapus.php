<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql= "DELETE FROM tb_pasien WHERE id=$kode";
$query = mysqli_query($koneksi,$sql);

if($query){
    header('location:pasien.php?status=sukses');
}else{
    header('location:pasien.php?status=akses dilarang');
}
?>