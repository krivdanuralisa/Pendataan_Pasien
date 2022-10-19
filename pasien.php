<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1>Data Pasien</h1>
<h4> <a href=index.php>Halaman Utama</a</h4>
<table border="1">
    <tr>
        <th>id</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Nomor Telepon</th>
        <th>Agama</th>
        <th>Tanggal Masuk</th>
        <th>Gejala</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No Kamar</th>
    </tr>


    <?php
    include("koneksi.php");
    $sql='SELECT * FROM tb_pasien';
    $query = mysqli_query($koneksi, $sql);

    while($pasien=mysqli_fetch_array($query)){
        echo "<tr>";
                 echo "<td>".$pasien['id']."</td>";
                 echo "<td>".$pasien['nama']."</td>";
                 echo "<td>".$pasien['alamat']."</td>";
                 echo "<td>".$pasien['jenis_kelamin']."</td>";
                 echo "<td>".$pasien['nomor_telepon']."</td>";
                 echo "<td>".$pasien['agama']."</td>";
                 echo "<td>".$pasien['tanggal_masuk']."</td>";
                 echo "<td>".$pasien['gejala']."</td>";
                 echo "<td>".$pasien['tempat_lahir']."</td>";
                 echo "<td>".$pasien['tanggal_lahir']."</td>";
                 echo "<td>".$pasien['no_kamar']."</td>";
                 echo "<td>";
                 echo "<a href='edit-data.php?id=".$pasien['id']."'>Edit</a> |";
                 echo "<a href='hapus.php?id=".$pasien['id']."'>Hapus</a> |";
       echo "</tr>";
    }
?>
 </table>
</body>
</html>
        