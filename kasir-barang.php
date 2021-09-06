<!------HALAMAN DAFTAR BARANG UNTUK KASIR------>
<?php
    session_start();
    include 'kasir-check.php';//cek login hanya untuk kasir
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kasir</title>
        <?php
            include 'template/head-link.php';
        ?>
    </head>

    <body>
        <?php 
            include 'alert.php';
            
            ////HEADER WEB////
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
                    <h3>Daftar Barang</h3><br>
                    <table class="table" id="example">
                        <thead>
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Diskon</th>
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