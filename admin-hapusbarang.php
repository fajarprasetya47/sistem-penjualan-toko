<!----------HALAMAN ADMIN UNTUK MENGHAPUS BARANG---------->
<?php
    session_start();
    include 'admin-check.php';//cek login hanya untuk admin
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hapus Barang</title>
        <?php
            include 'template/head-link.php';
        ?>
    </head>

    <body style="background: #fff8dc;">
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
        $list = mysqli_fetch_array($data);
        if(isset($_POST['hapus'])){
            $query = mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id' ");
            if($query){
                $_SESSION["alert"] = "Barang Berhasil Dihapus";
                header("Location: index.php");
            }
        }
        ?>
        <div class="container-fluid">
           <br><br><br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="box shadow" style="padding: 50px;">
                            <h2><center>Hapus Barang</center></h2><br>
                            <div class="col-md-12">
                                <h5>
                                    Barang "<?php echo $list['nama']?>" akan dihapus?
                                </h5>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="index.php" class="btn btn-danger">Tidak</a>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <form action="" method="post">
                                        <input type="submit" class="btn btn-success" name="hapus" value="Hapus">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br><br><br>
        </div>
    </body>
</html>