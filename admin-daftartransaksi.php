<?php
    session_start();
    include 'admin-check.php';//cek login hanya untuk admin
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin | Daftar Transaksi</title>
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
                    <h3>DAFTAR TRANSAKSI</h3>
                    <table class="table" id="example">
                        <thead>
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Kasir</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "koneksi.php";
                            $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
                            while($list = mysqli_fetch_array($data)) : 
                            ?>
                            <tr>
                                <td><?= $list['idtransaksi'] ?></td>
                                <td><?= $list['nama_barang'] ?></td>
                                <td><?= $list['jumlah'] ?></td>
                                <td><?= $list['total'] ?></td>
                                <td><?= $list['kasir'] ?></td>
                                <td><?= $list['waktu'] ?></td>
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