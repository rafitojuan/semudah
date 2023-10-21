<?php
session_start();
require 'function/function.php';

$nama = $_SESSION['nama'];
$_SESSION['layanan'] = true;
$timeline = query("SELECT * FROM timeline ORDER BY id_timeline ASC")[0];
// $timeline1 = query("SELECT * FROM timeline ORDER BY id_timeline ASC")[1];
$keluhan = query("SELECT * FROM keluhan_pelanggan WHERE nama_pelanggan = '$nama'");

if (!isset($_SESSION['login'])) {
    echo "
        <script>
         alert('Harap login terlebih dahulu');
         document.location.href = 'user/login.php';
        </script>
        ";
}

$_SESSION['layanan'] = true;

if (!isset($_SESSION['login'])) {
    echo "
        <script>
         alert('Harap login terlebih dahulu');
         document.location.href = 'user/login.php';
        </script>
        ";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semudah</title>
    <link rel="shortcut icon" href="user/asset/img/SEMUDAH-LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="user/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/asset/css/style.css">
    <!-- <link rel="stylesheet" href="user/asset/css/timeline.min.css"> -->
    <link href="user/asset/aos/aos.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #003974 !important;
        }

        .kartu-pesanan:hover {
            transform: scale(1.02);
            background-color: #67c1ce4d;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="hero position-relative" data-aos="fade" data-aos-duration="2000">
        <div class="position-absolute top-0 end-0 bottom-0 start-0" id="main-hero"></div>
        <?php
        include 'component/navbar-login.php';
        ?>

    </div>
    </div>

    <br><br>

    <div class="container mb-5">
        <div class="row mt-5">
            <div class="profile-photo mb-3">
                <?php
                $foto = isset($_SESSION['foto']) ? $_SESSION['foto'] : 'dummy-profile.jpg';
                ?>
                <img src="user/asset/img_user/<?= $foto ?>" class="img-fluid mx-auto d-block rounded-circle" style="width:10rem; height:10rem">

                <div class="username">
                    <h5 class="text-center fw-bold mt-2"><?= $_SESSION['nama']; ?></h5>
                </div>

            </div>

            <div class="buttons-detail d-flex justify-content-center mb-5">
                <button class="btn bg-semudah text-white me-3">Edit Profile</button>
                <a href="user/logout.php" class="btn btn-danger">Logout</a>
            </div>

            <div class="details-order">
                <p class="fs-5=6 fw-bold">
                    <span style="color:#4fa3c6 !important;">|</span> Pesanan Saya
                </p>
                <div class="row">
                    <?php foreach ($keluhan as $card) : ?>
                        <a class="col-lg-4 col-md-6 col-sm-12 mt-3 text-dark" href="detail-pesanan.php?k=<?= $card['id_keluhan']  ?>" style="text-decoration: none; cursor: default;">
                            <div class="kartu-pesanan card shadow" id="manusiaotot" style="width: 100%; height: 185px; transition: transform .2s, background-color .5s; border-radius: 10px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $card['merek']  ?></h5>
                                    <p class="card-text">Layanan dan keluhan : <?= $card['layanan']  ?>, <?= $card['keluhan']  ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </div>


    <br><br>

    <?php
    include 'footer/blue-footer.php';
    ?>
    <script src="user/asset/js/jquery.js"></script>
    <script src="user/asset/js/timeline.min.js"></script>
    <script src="user/asset/js/bootstrap.min.js"></script>
    <script src="user/asset/js/script.js"></script>
    <script src="user/asset/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>