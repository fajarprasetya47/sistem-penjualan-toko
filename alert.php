<!------BAGIAN UNTUK MENAMPILKAN PESAN ALERT PADA SISTEM WEB------>
<?php
if(isset($_SESSION["alert"])){?>
    <div class="alert alert-warning alert-dismissible fade show position-absolute top-0 start-0 end-0" role="alert">
        <?php echo $_SESSION["alert"]?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION["alert"]);
}?>