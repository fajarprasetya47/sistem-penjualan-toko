<!------BAGIAN UNTUK MENGHAPUS SEMUA ISI DARI TABEL TROLI------>
<?php
    session_start();
    include 'kasir-check.php';//cek login hanya untuk kasir

    include 'koneksi.php';
    $query = mysqli_query($koneksi, "DELETE FROM `troli`");
    if($query){
        header("Location: index.php");
    }
?>