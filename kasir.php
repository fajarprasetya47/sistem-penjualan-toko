<!----------HALAMAN UTAMA UNTUK KASIR---------->
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
                
                <!-------------KONTEN--------------->
                <div class="col-sm-9 kanan" style="padding: 30px;">
                    <!------BAGIAN INPUT BARANG KASIR------>
                    <div class="card row col-md-9" style="margin-bottom: 10px;">
                        <h5>Input Barang</h5>
                        <form action="" method="POST">
                            <div class="mb-2 row">
                                <label for="cari" class="col-sm-3 col-form-label-sm">Id/Nama Barang</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="keyword" id="cari">
                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" class="btn btn-outline-primary" name="cari" value="Cari">
                                </div>
                            </div>
                        </form>
                        <?php
                        include "koneksi.php";
                        if(isset($_POST['cari'])){
                            $keyword = trim(strip_tags($_POST['keyword']));
                            $query = mysqli_query($koneksi, "SELECT id, nama, kategori, harga from barang WHERE id like '%$keyword%' or nama like '%$keyword%' or kategori like '%$keyword%'");
                            while($list = mysqli_fetch_array($query)) :
                            ?>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Jumlah Beli</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="kasir-prosesbarang.php?id=<?= $list['id'] ?>" method="post">
                                            <td><?=  $list['id']?></td>
                                            <td><?=  $list['nama']?></td>
                                            <td><?=  $list['kategori']?></td>
                                            <td><?=  $list['harga']?></td>
                                            <td><input type="number" class="form-control" name="jumlah" placeholder="jumlah beli"></td>
                                            <td>
                                                <input type="submit" class="btn btn-success" value="Proses" name="Proses">                                
                                            </td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                            <?php endwhile;
                        }?>
                    </div>
                    <!------AKHIR DARI BAGIAN INPUT BARANG KASIR------>
                    
                    <!------BAGIAN TROLI PEMBELIAN KASIR------>
                    <div class="card row col-md-12">
                        <h5>Troli Pembelian</h5>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $data = mysqli_query($koneksi, "SELECT * FROM troli");
                                $totalbelanja = 0;
                                while($list = mysqli_fetch_array($data)) : 
                                ?>
                                <tr>
                                    <td><?= $list['nama_barang'] ?></td>
                                    <td><?= $list['harga'] ?></td>
                                    <td><?= $list['jumlah'] ?></td>
                                    <td><?= $list['subtotal'] ?></td>
                                </tr>
                                <?php
                                $totalbelanja += $list['subtotal'];
                                endwhile;?>
                            </tbody>
                        </table>
                        <!------BAGIAN TOTAL BELANJA, BAYAR, DAN KEMBALIAN------>
                        <form action="" method="POST">
                                <div class="mb-3 row">
                                    <label for="total" class="col-md-3 col-form-label">Total</label>
                                    <div class="col-md-9">
                                        <input type="number" name="total" class="form-control" id="total" value="<?php echo $totalbelanja ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="bayar" class="col-md-3 col-form-label">Bayar</label>
                                    <div class="col-md-9">
                                        <input type="number" name="bayar" class="form-control" id="bayar">
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-success" name="proses" value="Proses">
                                </div>
                        </form>
                        <?php
                        if(isset($_POST["proses"])){
                            $bayar = $_POST["bayar"];
                            $kembali = $bayar - $totalbelanja;?>
                            <br><hr class="dropdown-divider">
                            <div class="mb-3 row">
                                <label for="kembali" class="col-md-3 col-form-label">Kembali</label>
                                <div class="col-md-9">
                                    <input type="text" disabled class="form-control" id="kembali" value="<?php echo $kembali?>">
                                </div>
                            </div>
                            <form action="kasir-resettroli.php?page=delete" method="POST">
                                <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-danger" name="reset" value="Reset">
                                </div>
                            </form>
                        <?php   
                        }
                        ?>  
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            ////FOOTER WEB////
            include 'template/footer.php';
        ?>

    </body>
</html>