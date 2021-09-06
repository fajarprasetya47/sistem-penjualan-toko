<!----VALIDASI HALAMAN ADMIN AGAR BISA DIAKSES OLEH ADMIN SAJA---->
<?php
    if(!empty($_SESSION["login"])){   //jika session login tidak kosong atau sudah login
        if($_SESSION["login"]!="Admin"){  //jika bukan admin
            $_SESSION["alert"] = "Anda Bukan Admin";
            header("Location: index.php"); //direct ke halaman index
        }
    }else{   //jika belum login
        $_SESSION["alert"] = "Anda Harus Login Dulu";
        header("Location: login.php"); //direct ke halaman login
    }
?>