<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara kuliner</title>
    <link rel="stylesheet" href="gaya.css">
</head>
<body>
    <header>
        <h2>Masakan Nusantara</h2>
    </header>

    <p>Tanggal Sekarang :  <?=date("d-m-Y")?></p><br>
    
    <div class="form-class">
        <h3>Tambah Masakan</h3>
        <form action="" method="post" enctype="multipart/form-data">

            <label for="">Nama Masakan</label><br>
            <input type="text" name="masakan" class="form-text"><br>
            
            <label for="">Asal Daerah</label><br>
            <input type="text" name="daerah" class="form-text"><br>
            
            <label for="">Resep</label><br>
            <input type="text" name="resep" class="form-text"><br>

            <label for="">Tanggal menambahkan : </label><br>
            <input type="date" name="tambahkan"><br><br>

            <label for="">Foto Masakan</label><br>
            <input type="file" name="gambar"><br><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>
</body>
</html>

<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $masakan = $_POST['masakan'];
    $daerah = $_POST['daerah'];
    $resep = $_POST['resep'];
    $tambahkan = $_POST['tambahkan'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$daerah.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = "INSERT INTO isi (masakan,daerah,resep, tambahkan, gambar) VALUES ('$masakan','$daerah','$resep','$tambahkan','$gambar_baru')";
        $result = $db->query($query);

        if($result){
            header("Location:home.php");
        }else{
            echo "gagal kirim";
        }
    }
}
?> 