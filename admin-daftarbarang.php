<?php
    session_start();
    include 'admin-check.php';//cek login hanya untuk admin
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin | Daftar Barang</title>
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
                    <h3>DAFTAR BARANG</h3>
                    <div class="position-static">
                        <a href="admin-tambahbarang.php" class="btn btn-success" style="border-radius: 10px; margin-bottom: 10px;">+ TAMBAH BARANG</a>
                    </div>
                    <table class="table" id="example">
                        <thead>
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Diskon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "koneksi.php";
                            $data = mysqli_query($koneksi, "SELECT * FROM barang");
                            while($list = mysqli_fetch_array($data)) : 
                            ?>
                            <tr>
                                <td><?= $list['id'] ?></td>
                                <td><?= $list['nama'] ?></td>
                                <td><?= $list['kategori'] ?></td>
                                <td><?= $list['harga'] ?></td>
                                <td><?= $list['diskon'] ?></td>
                                <td width="200" align="center">
                                    <a class="btn btn-warning btn-sm" href="admin-ubahbarang.php?page=update&id=<?= $list['id'] ?>;">Ubah</a>
                                    <a class="btn btn-danger btn-sm" href="admin-hapusbarang.php?page=delete&id=<?= $list['id'] ?>;">Hapus</a>
                                </td>
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