<?php
session_start();
require 'function/function.php';

if (!isset($_SESSION['login'])) {
    $loginFirst = '
            <script src="user/asset/dist/sweetalert2.all.min.js"></script>
            <script>
                function loginAlert() {
                    Swal.fire({
                        title: "Anda Belum Login!",
                        text: "Harap login terlebih dahulu!",
                        icon: "error",
                    }).then(function() {
                        document.location.href="user/login";
                    });
                };
            </script>';

    echo $loginFirst;
    echo '<p class="text-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #ffffff; z-index: 1000;"></p>';
    echo '<script>loginAlert();</script>';
}


if (isset($_POST['kirim'])) {
    if (addWebsite($_POST) > 0) {
        $jasaNetwork = '
            <script src="user/asset/dist/sweetalert2.all.min.js"></script>
            <script>
                function dataInputed() {
                    Swal.fire({
                        title: "Berhasil!",
                        html: "Silahkan hubungi nomor <b>0890192911</b> untuk informasi lebih lanjut",
                        icon: "success",
                    }).then(function() {
                        document.location.href="jasa-website";
                    });
                };
            </script>';

        echo $jasaNetwork;
        echo '<p class="d-none text-center"></p>';
        echo '<script>dataInputed();</script>';
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
                            <option value="" selected disabled>Jasa Pembuatan Website</option>
                            <option value="Website Bisnis">Website Bisnis</option>
                            <option value="Website Portofolio">Website Portofolio</option>
                            <option value="Website E-commerce">Website E-commerce</option>

                        </select>

                        <textarea name="informasi_website" class="form-control border-input" id="" cols="30" rows="7" placeholder="Informasi Website"></textarea>
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