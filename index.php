<!------BAGIAN INDEX WEB------>
<?php
    session_start();
    
    //JIKA SESSION LOGIN TIDAK KOSONG (USER SUDAH LOGIN)
    if(!empty($_SESSION["login"])){
        //MEMILAH USER (ADMIN ATAU KASIR)
        if($_SESSION["login"]=="Admin"){      //JIKA LOGIN SEBAGAI ADMIN, AKAN DIARAHKAN KE HALAMAN ADMIN
            header("Location: admin-home.php");
        }
        if($_SESSION["login"]=="Kasir"){      //JIKA LOGIN SEBAGAI KASIR, AKAN DIARAHKAN KE HALAMAN KASIR
            header("Location: kasir.php");
        }
    
    //JIKA BELUM LOGIN, AKAN DIARAHKAN KE HALAMAN LOGIN
    }else{
        $_SESSION["alert"] = "Anda Harus Login Dulu";
        header("Location: login.php");
    }
?>