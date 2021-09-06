<?php
    session_start();
    include 'admin-check.php';//cek login hanya untuk admin
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin | Daftar Kasir</title>
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

                <!----KONTEN----->
                <div class="col-sm-9 kanan" style="padding: 30px;">
                    <h3>DAFTAR KASIR</h3>
                    <div class="position-static">
                        <a href="admin-tambahkasir.php" class="btn btn-success" style="border-radius: 10px; margin-bottom: 10px;">+ KASIR BARU</a>
                    </div>
                    <table class="table" id="example">
                        <thead>
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "koneksi.php";
                            $data = mysqli_query($koneksi, "SELECT * FROM kasir");
                            while($list = mysqli_fetch_array($data)) : 
                            ?>
                            <tr>
                                <td><?= $list['id_kasir'] ?></td>
                                <td><?= $list['nama'] ?></td>
                                <td><?= $list['username'] ?></td>
                                <td><?= $list['email'] ?></td>
                            </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php
            ////FOOTER WEB////
            include 'template/footer.php';
        ?>

    </body>
</html>