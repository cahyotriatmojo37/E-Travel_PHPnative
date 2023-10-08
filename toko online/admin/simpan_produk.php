<?php

include('confiq.php');

    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kondisi = $_POST['kondisi'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $name = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi,"foto produk/".$name);


    if(!$nama || !$harga || !$stok || !$ukuran ||!$warna ) {
        echo "<div align='center'> Masih ada data (Nama, Stok, Ukuran, Warna dan Kondisi) yang kosong! <a href='tambah_produk.php'>Back to Tambah Produk</a>";
    }
    else{
        $data = "INSERT INTO barang (nama, jenis, harga, stok, kondisi, ukuran, warna, foto) VALUES('$nama','$jenis','$harga','$stok','$kondisi','$ukuran','$warna','$name')";
        $simpan = mysqli_query($db, $data);
        if($simpan) {
            header('Location: list_produk.php?status=sukses');
        } 
        else {
            header('Location: tambah_produk.php?status=gagal');
        }
    }

      
?>