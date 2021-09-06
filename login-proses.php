<!--------BAGIAN PROSES UNTUK LOGIN -------->
<?php
    session_start();

    include 'koneksi.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username=="admin"){
        $data = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'");
        if($list = mysqli_fetch_array($data)){
            $_SESSION["username"] = $list["username"];
            $_SESSION["login"] = "Admin";
            $_SESSION["id"] = "0";
            $_SESSION["alert"] = "Anda Berhasil Login";
            header("Location: admin-home.php");
        }else{
            $_SESSION["alert"] = "Username atau Password Anda Salah";
            header('Location: login.php');
        }
    }
    
    else{
        $data = mysqli_query($koneksi, "SELECT * FROM `kasir` WHERE `username`='$username' AND `password`='$password'");
        if($list = mysqli_fetch_array($data)){
            $_SESSION["username"] = $list["username"];
            $_SESSION["login"] = "Kasir";
            $_SESSION["id"] = $list["id_kasir"];
            $_SESSION["alert"] = "Anda Berhasil Login";
            header("Location: kasir.php");
        }else{
            $_SESSION["alert"] = "Username atau Password Anda Salah";
            header('Location: login.php');
        }
    }
?>