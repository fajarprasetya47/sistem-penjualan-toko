<!--------HALAMAN LOGIN UNTUK ADMIN DAN USER-------->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php
            include 'template/head-link.php';
        ?>
    </head>

    <body style="background: #fff8dc;">
        <div class="container-fluid">
           <?php
           include 'alert.php';
           ?>
            <br><br><br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="login">
                            <center>
                                <img src="asset/sokin-logo2.png" class="shadow-lg" alt="logo" width="200px">
                            </center>
                            <br><h2>Login</h2>
                            <form action="login-proses.php" method="POST">
                                <div class="mb-3">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label">Password</label>
                                  <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <input type="submit" class="btn btn-dark" name="login" value="Login" style="border-radius: 10px;">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br><br><br>
        </div>
    </body>
</html>