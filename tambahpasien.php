<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Pendaftaran Pasien Baru</h3>
        <form action="prosestambah.php" method="POST">
    <form>
        <fieldset>
        <p>
            <label for="nama"> Nama Lengkap : </label>
            <input type="text" name="nama" />
        </p>
        <p>
            <label for = "alamat"> Alamat : </label>
            <textarea name="alamat" row="5"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <label><input type ="radio" name="jenis_kelamin" value="laki-laki"/> laki-laki </label>
            <label><input type ="radio" name="jenis_kelamin" value="perempuan"/> perempuan </label>
        </p>
            <label for = "nomor_telepon"> No Telepon : </label>
            <input type="text" name="nomor_telepon">
        <p>
<label for="agama">Agama :</label>
<select name="agama"> 
<option value="islam">islam</option>
<option value="kristen">kristen</option>
<option value="katolik">katolik</option>
<option value="budha">budha</option>
<option value="hindhu">hindhu</option>
<option value="konghucu">konghucu</option>
</select> 
</p>
<p>
        <label for="tanggal_masuk"> Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk"/>
</p>
<p>
        <label for="gejala"> Gejala:</label>
        <input type="text" name="gejala"/>
</p>
<p>
        <label for="tempat_lahir"> Tempat Lahir:</label>
        <input type="text" name="tempat_lahir"/>
</p>
<p>
        <label for="tanggal_lahir"> Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir"/>
</p>
<p>
        <label for="no_Kamar"> No Kamar:</label>
        <input type="number" name="no_kamar"/>
</p>
<p>
        <input type="submit" value="Tambah Pasien" name="tambah"/> 
</fieldset>
</form>
</body>
</html>