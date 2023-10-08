<?php

include('confiq.php');

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
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

    // buat query update
    $sql = "UPDATE barang SET nama='$nama', jenis='$jenis',harga='$harga', stok='$stok', kondisi='$kondisi', ukuran='$ukuran', warna='$warna', foto='$name' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_produk.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>