<!------HALAMAN UNTUK MENGEDIT PROFIL KASIR------>
<?php
    session_start();
    include 'kasir-check.php';//cek login hanya untuk kasir
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profil Kasir</title>
        <?php
            include 'template/head-link.php';
        ?>
    </head>

    <body style="background: #fff8dc;">
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM kasir WHERE id_kasir='$id'");
        $list = mysqli_fetch_array($data);
        if(isset($_POST['ubah'])){
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = mysqli_query($koneksi, "UPDATE `kasir` SET `nama`='$nama', `username`='$username', `email`='$email', `password`='$password' WHERE id_kasir='$id' ");
            if($query){
                $_SESSION["alert"] = "Profil Berhasil Diubah";
                $_SESSION["username"] = $list["username"];
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
                            <h2><center>Edit Profil Kasir</center></h2><br>
                            <form action="" method="POST">
                                <div class="mb-3 row">
                                    <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                    <div class="col-md-9">
                                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $list['nama'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="username" class="col-md-3 col-form-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" name="username" class="form-control" id="username" value="<?php echo $list['username'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $list['email'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password" class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="text" name="password" class="form-control" id="password" value="<?php echo $list['password'] ?>">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-warning" name="ubah" value="Ubah">
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