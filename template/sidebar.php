<!-----------------SIDEBAR----------------->
<!------INFO USER DAN TOMBOL NAVIGASI------>

                <div class="col-sm-3 kiri bg-gradient">
                    <br>
                    <?php
                    if(!empty($_SESSION["login"])){
                        if($_SESSION["login"]=="Admin"){?>
                            <div class="card bg-transparent" style="border-radius: 20px;">
                                <div class="card-body text-center">
                                    <h5><?php echo $_SESSION["username"] ?></h5>
                                    <p><?php echo $_SESSION["login"] ?></p>
                                    <a href="logout.php" class="btn btn-danger">Logout</a>
                                </div>
                            </div>
                            <br>
                            <hr class="dropdown-divider">
                            <div class="kiri-nav">
                                <center>
                                    <a href="admin-home.php">HOME</a>
                                </center>
                            </div>
                            <div class="kiri-nav">
                                <center>
                                    <a href="admin-daftartransaksi.php">DAFTAR TRANSAKSI</a>
                                </center>
                            </div>
                            <div class="kiri-nav">
                                <center>
                                    <a href="admin-daftarbarang.php">DAFTAR BARANG</a>
                                </center>
                            </div>
                            <div class="kiri-nav">
                                <center>
                                    <a href="admin-daftarkasir.php">DAFTAR KASIR</a>
                                </center>
                            </div>
                        <?php
                        }

                        if($_SESSION["login"]=="Kasir"){?>
                            <div class="card bg-transparent" style="border-radius: 20px;">
                                <div class="card-body text-center">
                                    <h5><?php echo $_SESSION["username"] ?></h5>
                                    <p><?php echo $_SESSION["login"] ?></p>
                                    <a href="kasir-editprofil.php?page=update&id=<?=$_SESSION["id"]?>;" class="btn btn-warning">Edit Profil</a>
                                    <a href="logout.php" class="btn btn-danger">Logout</a>
                                </div>
                            </div>
                            <br>
                            <hr class="dropdown-divider">
                            <div class="kiri-nav">
                                <center>
                                    <a href="kasir.php">KASIR</a>
                                </center>
                            </div>
                            <div class="kiri-nav">
                                <center>
                                    <a href="kasir-barang.php">DAFTAR BARANG</a>
                                </center>
                            </div>
                        <?php
                        }
                    }
                    ?>
                    
                </div>
                <!------AKHIR DARI INFO USER DAN TOMBOL NAVIGASI------>