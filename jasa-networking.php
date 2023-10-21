<?php 
session_start();

if(!isset($_SESSION['login'])){
    echo"<script>
        alert('Harap login terlebih dahulu');
        document.location.href = 'user/login.php';
        </script>";
        
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

    <div class="hero bg-layanan-networking position-relative opacity-55" style="height: 50vh">
        <div class="position-absolute top-0 end-0 bottom-0 start-0" id="main-hero"></div>
        <?php
            if (isset($_SESSION['login'])) {
                include 'component/navbar-login.php';
            } else {
                include 'component/navbar.php';
            }
        ?>
        <div class="position-absolute top-50 translate-middle-y mw-100 hero-service">
            <div class="px-5">
                <h1 class="text-center text-white fw-bold mb-3">Networking</h1>
                <small class="text-white text-center d-block">Melayani Instalasi jaringan lab, rumah</small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="wrapper px-5 mt-5">
                <form action="" method="post">
                    <h3 class="mb-4">Informasi Networking</h3>
                    <div class="networking mb-5">
                        <select name="networking" class="form-select border-input mb-5" id="">
                            <option  value="" selected disabled >Jasa Networking</option>
                            <option value="Instalasi jaringan lab" >Instalasi jaringan lab</option>
                            <option value="Instalasi jaringan rumah" >Instalasi jaringan rumah</option>
                        
                        </select>

                        <textarea name="informasi_networking" class="form-control border-input" id="" cols="30" rows="7" placeholder="Informasi Desain"></textarea>
                    </div>

                    <h3 class="mb-4">Informasi Pembeli</h3>
                    <div class="informasi mb-4">
                        <input type="text" class="form-control border-input mb-4" name="alamat" placeholder ="Alamat Rumah" required>
                        <label for="" class="form-label">Tanggal Kunjungan</label>
                        <input type="date" class="form-control border-input" name="tgl_kunjungan" required>
                        <small class="text-muted">*Kapan teknisi kami bisa mengambil laptopmu</small>
                    </div>
                    
                    <button type="submit" class="btn bg-semudah w-100 text-white">Pesan</button>
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
</html><?php 
session_start();

if(!isset($_SESSION['login'])){
    echo"<script>
        alert('Harap login terlebih dahulu');
        document.location.href = 'user/login.php';
        </script>";
        
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

    <div class="hero bg-layanan-networking position-relative opacity-55" style="height: 50vh">
        <div class="position-absolute top-0 end-0 bottom-0 start-0" id="main-hero"></div>
        <?php
            if (isset($_SESSION['login'])) {
                include 'component/navbar-login.php';
            } else {
                include 'component/navbar.php';
            }
        ?>
        <div class="position-absolute top-50 translate-middle-y mw-100 hero-service">
            <div class="px-5">
                <h1 class="text-center text-white fw-bold mb-3">Networking</h1>
                <small class="text-white text-center d-block">Melayani Instalasi jaringan lab, rumah</small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="wrapper px-5 mt-5">
                <form action="" method="post">
                    <h3 class="mb-4">Informasi Networking</h3>
                    <div class="networking mb-5">
                        <select name="networking" class="form-select border-input mb-5" id="">
                            <option  value="" selected disabled >Jasa Networking</option>
                            <option value="Instalasi jaringan lab" >Instalasi jaringan lab</option>
                            <option value="Instalasi jaringan rumah" >Instalasi jaringan rumah</option>
                        
                        </select>

                        <textarea name="informasi_networking" class="form-control border-input" id="" cols="30" rows="7" placeholder="Informasi Desain"></textarea>
                    </div>

                    <h3 class="mb-4">Informasi Pembeli</h3>
                    <div class="informasi mb-4">
                        <input type="text" class="form-control border-input mb-4" name="alamat" placeholder ="Alamat Rumah" required>
                        <label for="" class="form-label">Tanggal Kunjungan</label>
                        <input type="date" class="form-control border-input" name="tgl_kunjungan" required>
                        <small class="text-muted">*Kapan teknisi kami bisa mengambil laptopmu</small>
                    </div>
                    
                    <button type="submit" class="btn bg-semudah w-100 text-white">Pesan</button>
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