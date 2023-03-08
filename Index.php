<?php
require'functions.php';
//ambil data dari tabel mahasiswa/query data mahasiswa
$mahasiswa=query("SELECT * FROM mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1> data mahasiswa</h1>
<a href="tambah.php"> tambah data mahasiswa</a>
<br><br>

<table border="1"  cellpadding="10" cellspacing="0">
    <tr>
        <th>no.</th>
        <th> aksi</th>
        <th>gambar</th>
        <th>nrp</th>
        <th>nama</th>
        <th>email</th>
        <th>jurusan</th>

    </tr>
    <?php $i=1; ?>
<?php foreach($mahasiswa as $row):?>
    <tr>
        <td><?=$i; ?></td>
        <td>
           <a href="">ubah</a>
           <a href="">hapus</a>
        </td>
        <td>gambar</td>
        <td><?=$row["nrp"]; ?></td>
        <td><?=$row["nama"]; ?></td>
        <td><?=$row["email"]; ?></td>
        <td><?=$row["jurusan"]; ?></td>
    </tr>
    <?=$i++; ?>
<?php endforeach;?>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>



 
</body>
</html>