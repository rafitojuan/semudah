<?php
session_start();
require 'function/function.php';

$nama = $_SESSION['nama'];
$_SESSION['layanan'] = true;
// $timeline1 = query("SELECT * FROM timeline ORDER BY id_timeline ASC")[1];
$keluhan = query("SELECT * FROM keluhan_pelanggan WHERE nama_pelanggan = '$nama'");
$user = query("SELECT * FROM user WHERE nama = '$nama'")[0];

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
    <link rel="stylesheet" href="user/asset/dist/sweetalert2.min.css">
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
        include 'component/navbar-layanan.php';
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
                <a href="user/asset/img_user/<?= $foto ?>" target="_blank" style="cursor: default;"><img src="user/asset/img_user/<?= $foto ?>" class="img-fluid mx-auto d-block rounded-circle" style="width:10rem; height:10rem"></a>

                <div class="username">
                    <h5 class="text-center fw-bold mt-2"><?= $_SESSION['nama']; ?></h5>
                </div>

            </div>

            <div class="buttons-detail d-flex justify-content-center mb-5">
                <a href="editProfile?u=<?= $user['id_user'] ?>" class="btn bg-semudah text-white me-3">Edit Profile</a>
                <a href="user/logout" class="loggedOut btn btn-danger">Logout</a>
            </div>

            <div class="details-order">
                <p class="fs-5=6 fw-bold">
                    <span style="color:#4fa3c6 !important;">|</span> Pesanan Saya
                </p>
                <div class="row">
                    <?php foreach ($keluhan as $card) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3 text-dark">
                            <a href="detail-pesanan?k=<?= $card['id_keluhan']; ?>" class="kartu-pesanan card shadow text-decoration-none text-dark" id="manusiaotot" style="width: 100%;  transition: transform .2s, background-color .5s; border-radius: 10px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php if ($card['merek'] == NULL) {
                                            echo $card['layanan'];
                                        } else {
                                            echo $card['merek'];
                                        }
                                        ?>
                                    </h5>
                                    <p class="card-text">Layanan dan keluhan : <?= $card['layanan']  ?>, <?= $card['keluhan']  ?></p>
                                </div>
                                <div class="d-flex justify-content-between p-3">
                                    <!-- <button class="badge bg-warning badge-sm border-0" onclick="location.href='pembayaran-awal?id_dp=<?= $card['id_keluhan'] ?>'">Bayar DP</button>
                                    <button class="badge btn-sm bg-success border-0" onclick="location.href='pembayaran-akhir?id_lunas=<?= $card['id_keluhan'] ?>'">Bayar Lunas</button> -->
                                </div>
                            </a>
                        </div>
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
    <script src="user/asset/dist/sweetalert2.all.min.js"></script>
    <script src="user/asset/js/jquery.js"></script>
    <script src="user/asset/js/timeline.min.js"></script>
    <script src="user/asset/js/bootstrap.min.js"></script>
    <script src="user/asset/js/script.js"></script>
    <script src="user/asset/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $('.loggedOut').on('click', function(e) {
            e.preventDefault()
            const outLink = $(this).attr('href')

            Swal.fire({
                icon: 'warning',
                title: 'Apakah anda yakin ingin logout?',
                showDenyButton: true,
                showConfirmButton: false,
                showCancelButton: true,
                denyButtonText: 'Logout'
            }).then((result) => {
                if (result.isDenied) {
                    Swal.fire({
                        title: 'Selamat Tinggal...',
                        showConfirmButton: false,
                        showDenyButton: true,
                        denyButtonText: 'Confirm',
                        timer: '2000',
                        timerProgressBar: true,
                        icon: 'success'
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            document.location.href = 'user/logout'
                        } else if (result.dismiss === Swal.DismissReason.deny) {
                            document.location.href = 'user/logout'
                        } else {
                            document.location.href = 'user/logout'
                        }
                    })
                }
            })
        })
    </script>
</body>

</html>