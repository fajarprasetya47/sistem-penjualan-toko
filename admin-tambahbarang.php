<!--------HALAMAN ADMIN UNTUK MENAMBAH BARANG-------->
<?php
    session_start();
    include 'admin-check.php';//cek login hanya untuk admin
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Barang</title>
        <?php
            include 'template/head-link.php';
        ?>
    </head>

    <body style="background: #fff8dc;">
        <?php
        include 'koneksi.php';
        if(isset($_POST['input'])){
            $nama = $_POST['nama'];
            $kategori = $_POST['kategori'];
            $harga = $_POST['harga'];
            $diskon = $_POST['diskon'];
            $query = mysqli_query($koneksi, "INSERT INTO `barang` (`nama`,`kategori`,`harga`,`diskon`) 
                     VALUES ('$nama', '$kategori', '$harga', '$diskon')");
            if($query){
                $_SESSION["alert"] = "Barang Berhasil Ditambahkan";
                header("Location: index.php");
            }
        }
        ?>
        <div class="container-fluid">
           <br><br><br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card shadow-lg">
                        <div class="box shadow" style="padding: 50px;">
                            <a href="index.php" class="btn btn-outline-warning">Kembali</a>
                            <h2><center>Tambah Barang</center></h2><br>
                            <form action="" method="POST">
                                <div class="mb-3 row">
                                    <label for="nama" class="col-md-3 col-form-label">Nama Barang</label>
                                    <div class="col-md-9">
                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="kategori" class="col-md-3 col-form-label">Kategori Barang</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="kategori">
                                            <option value="Baju/Kaos">Baju/Kaos</option>
                                            <option value="Celana">Celana</option>
                                            <option value="Jaket/Hoodie">Jaket/Hoodie</option>
                                            <option value="Topi">Topi</option>
                                            <option value="Sepatu">Sepatu</option>
                                            <option value="Aksesoris">Aksesoris</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="harga" class="col-md-3 col-form-label">Harga Barang Per Satuan</label>
                                    <div class="col-md-9">
                                        <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga Barang">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="diskon" class="col-md-3 col-form-label">Diskon Barang</label>
                                    <div class="col-md-9">
                                        <input type="number" name="diskon" class="form-control" id="diskon" placeholder="Diskon Barang">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success" name="input" value="Input">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <br><br><br>
        </div>
    </body>
</html>