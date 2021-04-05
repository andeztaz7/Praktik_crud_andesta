<?php
    //memanggil file functions
    require 'function.php';
    //cara menampung data dari db ke array siswa
    $siswa = query("SELECT * FROM datasiswa");
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD andesta</title>
</head>
<body>
    <h1>Daftar Siswa SMK Pesat</h1>
    <table border="1" cellpadding="10"
    cellspacing="0">
    
        
        <?php $nomor = 1;?>
        <?php foreach( $siswa as $baris) : ?> 
            <tr>
             <td><?= $nomor?></th>
             <td><?=$baris["gambar"]?></th>
             <td><?=$baris["nis"]?></th>
             <td><?=$baris["nama"]?></th>
             <td><?=$baris["email"]?></th>
             <td><?=$baris["jurusan"]?></th>
            
            <td>
                <a href="#">Ubah</a>
                <a href="#">Hapus</a>
            </td>
        </tr>
        <?php $nomor++?>
        <?php endforeach;?>
    </table>
    