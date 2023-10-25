<?php 
session_start();
require 'function/function.php';
$_SESSION['layanan'] = true;
if(!isset($_SESSION['login'])){
    echo"<script>
        alert('Harap login terlebih dahulu');
        document.location.href = 'user/login.php';
        </script>";
        
}


if(isset($_POST['kirim'])){
    if(addWebsite($_POST)>0){
        echo "  <script> 
                alert('berhasil terkirim, silahkan hubungi nomor 0890192911 untuk informasi lebih lanjut')
                document.location.href = 'jasa-website.php';
                </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link rel="shortcut icon" href="user/asset/img/SEMUDAH-LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="user/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/asset/css/style.css">
</head>
<body>

    <div class="hero bg-jasa-website position-relative opacity-55" style="height: 50vh">
        <div class="position-absolute top-0 end-0 bottom-0 start-0" id="main-hero"></div>
        <?php
            if (isset($_SESSION['layanan'])) {
                include 'component/navbar-layanan.php';
              } else {
                include 'component/navbar.php';
              }
        ?>
        <div class="position-absolute top-50 translate-middle-y mw-100 hero-service">
            <div class="px-5">
                <h1 class="text-center text-white fw-bold mb-3">Pembuatan Website</h1>
                <small class="text-white text-center d-block">Melayani pembuatan website bisnis, portofolio</small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="wrapper px-5 mt-5">
                <form action="" method="post">
                    <h3 class="mb-4">Informasi Website</h3>
                    <div class="website mb-5">
                        <select name="website" class="form-select border-input mb-5" id="">
                            <option  value="" selected disabled >Jasa Pembuatan Website</option>
                            <option value="Website Bisnis" >Website Bisnis</option>
                            <option value="Website Portofolio" >Website Portofolio</option>
                            <option value="Website E-commerce" >Website E-commerce</option>
                            
                        </select>

                        <textarea name="informasi_website" class="form-control border-input" id="" cols="30" rows="7" placeholder="Informasi Desain"></textarea>
                    </div>
                    
                    <button type="submit" class="btn bg-semudah w-100 text-white" name="kirim">Pesan</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        include "footer/blue-footer.php";
    ?>

            




    <script src="user/asset/js/bootstrap.min.js"></script>
    <script src="user/asset/js/script.js"></script>
</body>
</html>