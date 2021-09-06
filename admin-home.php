<!----------HALAMAN UTAMA UNTUK ADMIN---------->
<?php
    session_start();
    include 'admin-check.php';//cek login hanya untuk admin
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin | Home</title>
        <?php
            include 'template/head-link.php';
        ?>
    </head>

    <body>
        <?php 
        include 'alert.php';//untuk menampilkan alert
        
        /////HEADER WEB/////
        include 'template/header.php';
        ?>
            
        <div class="container-fluid">            
            <div class="row">
                <?php
                    /////////SIDEBAR///////
                    include 'template/sidebar.php';
                ?>

                <!------KONTEN------->
                <div class="col-sm-9 kanan" style="padding: 50px;">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">DAFTAR TRANSAKSI</div>
                                <div class="card-body">
                                    <?php
                                    include 'koneksi.php';
                                    $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
                                    $hasil = mysqli_num_rows($data);
                                    echo $hasil;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">DAFTAR BARANG</div>
                                <div class="card-body">
                                    <?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM barang");
                                    $hasil = mysqli_num_rows($data);
                                    echo $hasil;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">DAFTAR KASIR</div>
                                <div class="card-body">
                                    <?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM kasir");
                                    $hasil = mysqli_num_rows($data);
                                    echo $hasil;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------AKHIR DARI KONTEN------>
            </div>
        </div>

        <?php
            ////FOOTER WEB////
            include 'template/footer.php';
        ?>

    </body>
</html>