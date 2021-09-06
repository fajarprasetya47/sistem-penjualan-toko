<!--------HALAMAN ADMIN UNTUK MENAMBAH KASIR BARU-------->
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
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = mysqli_query($koneksi, "INSERT INTO `kasir` (`nama`,`username`,`email`,`password`) 
                     VALUES ('$nama', '$username', '$email', '$password')");
            if($query){
                $_SESSION["alert"] = "Kasir Baru Berhasil Ditambahkan";
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
                            <h2><center>Tambah Kasir</center></h2><br>
                            <form action="" method="POST">
                                <div class="mb-3 row">
                                    <label for="nama" class="col-md-5 col-form-label">Nama Kasir</label>
                                    <div class="col-md-7">
                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Kasir">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="username" class="col-md-5 col-form-label">Username</label>
                                    <div class="col-md-7">
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-5 col-form-label">Email</label>
                                    <div class="col-md-7">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password" class="col-md-5 col-form-label">Password(Default)</label>
                                    <div class="col-md-7">
                                        <input type="text" name="password" class="form-control" id="password" value="123">
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