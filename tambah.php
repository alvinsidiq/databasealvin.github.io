<?php

  //if(isset($_POST["submit"])){
  //  var_dump($_POST);
  //}

  //koneksi dbms
  $coon=mysqli_connect("localhost","root","","phpdasar");
  if(isset($_POST["submit"])){
    //ambil data
    $nrp=$_POST["nrp"];
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $jurusan=$_POST["jurusan"];
    $gambar=$_POST["gambar"];

    //query insert data
    $query="INSERT INTO mahasiswa
    VALUES ('','$nrp','$nama','$email','$jurusan','$gambar')
    ";
    mysqli_query($coon,$query);
    //cek data berhasil di tambah atau tidak 
    //var_dump(mysqli_affected_rows($coon));
    if(mysqli_affected_rows($coon)>0){
        echo"berhasil";
    } else{
        echo"gagal;";
        echo"<br>";
        echo mysqli_error($coon);
    }
  }
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
    <h1>tambah data mahasiswa </h1>
    <form action="" method="post">
        <ul>
            <li><label for="nrp">nrp:</label>
            <input type="text" name="nrp" id="nrp"> 
          </li>

          <li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama"> 
          </li>

          <li>
            <label for="email">email:</label>
            <input type="text" name="email" id="email"> 
          </li>
          <li>
            <label for="nrp">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan"> 
          </li>
          <li>
            <label for="gambar">gambar:</label>
            <input type="text" name="gambar" id="gambar"> 
          </li>
          <li>
            <button type="submit" name="submit">tambah data</button>
          </li>




        </ul>

    </form>
</body>
</html>