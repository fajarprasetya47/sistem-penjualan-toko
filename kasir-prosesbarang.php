<!------BAGIAN UNTUK MEMPROSES BARANG UNTUK DIMASUKKAN KE TABEL TROLI DAN TABEL TRANSAKSI------>
<?php
session_start();
include 'kasir-check.php';//cek login hanya untuk kasir

include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
$list = mysqli_fetch_array($data);
$nama = $list['nama'];
$harga = $list['harga'];
$diskon = $list['diskon'];
$jumlah = $_POST["jumlah"];
$total = $jumlah * ($harga-$diskon);
$kasir = $_SESSION["username"];

$query1 = mysqli_query($koneksi, "INSERT INTO `troli` (`nama_barang`,`harga`,`jumlah`,`subtotal`) VALUES ('$nama', '$harga', '$jumlah', '$total')");
$query2 = mysqli_query($koneksi, "INSERT INTO `transaksi` (`nama_barang`,`jumlah`,`total`,`kasir`) VALUES ('$nama', '$jumlah', '$total', '$kasir')");
if($query1 && $query2){
    header("Location: kasir.php");
}
 
?>