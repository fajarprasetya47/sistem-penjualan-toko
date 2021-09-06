<!----VALIDASI HALAMAN KASIR AGAR BISA DIAKSES OLEH KASIR SAJA---->
<?php
    if(!empty($_SESSION["login"])){   //jika session login tidak kosong atau sudah login
        if($_SESSION["login"]!="Kasir"){  //jika bukan kasir
            $_SESSION["alert"] = "Halaman Kasir Tidak Bisa Diakses";
            header("Location: index.php"); //direct ke halaman index
        }
    }
    
    else{   //jika belum login
        $_SESSION["alert"] = "Anda Harus Login Dulu";
        header("Location: login.php"); //direct ke halaman login
    }
?>