<!------BAGIAN UNTUK LOGOUT------>
<?php
session_start();

unset($_SESSION["username"]);
unset($_SESSION["login"]);
unset($_SESSION["id"]);
$_SESSION["alert"] = "Anda Berhasil Logout";

header("Location: login.php");
?>