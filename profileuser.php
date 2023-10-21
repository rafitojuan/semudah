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
<<<<<<< HEAD

        .kartu-pesanan:hover {
            transform: scale(1.02);
            background-color: #67c1ce4d;
            border-radius: 10px;
        }
    </style>
</head>

=======
    </style>
</head>

>>>>>>> d99ffe03bfbcd40fc867c5fc1a8325da267ca9eb
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
<<<<<<< HEAD
                <img src="user/asset/img_user/<?= $foto ?>" class="img-fluid mx-auto d-block rounded-circle" style="width:10rem; height:10rem">

                <div class="username">
                    <h5 class="text-center fw-bold mt-2"><?= $_SESSION['nama']; ?></h5>
=======
                <img src="user/asset/img_user/<?= $foto ?>" class="img-fluid mx-auto d-block rounded-circle"
                    style="width:10rem; height:10rem">

                <div class="username">
                    <h5 class="text-center fw-bold"><?=$_SESSION['nama'];?></h5>
>>>>>>> d99ffe03bfbcd40fc867c5fc1a8325da267ca9eb
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
<<<<<<< HEAD
                <div class="row">
                    <?php foreach($keluhan as $card): ?>
                    <a class="col-lg-4 col-md-6 col-sm-12 mt-3 text-dark" href="detail-pesanan.php?k=<?=$card['id_keluhan']  ?>" style="text-decoration: none; cursor: default;">
                        <div class="kartu-pesanan card shadow" id="manusiaotot" style="width: 100%; height: 185px; transition: transform .2s, background-color .5s; border-radius: 10px;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $card['merek']  ?></h5>
                                <p class="card-text">Layanan dan keluhan : <?= $card['layanan']  ?>, <?= $card['keluhan']  ?></p>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>

                <!-- <div class="timeline d-flex">
                    <div class="img-task me-3">
                        <img src="user/asset/img_user/64f2e14276e62.png" class="img-fluid rounded" style="width:20rem; height:34rem">
                    </div>
                    <div class="line">
                        <div class="device-name mt-3 mb-3">
                            <h5 class="fw-bold">Pesanan <?= $_SESSION['nama']  ?></h5>
                        </div>
                        <div class="line1 d-flex align-items-center">
                            <div class="rounded-circle" style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
                            <div class="task-title ms-3">
                                <p class="text-darksemudah mb-0"><?= $timeline['judul'] ?></p>
                                <div class="subtitle">
                                    <p class="text-darksemudah mb-0"><?= $timeline['komen']  ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

                        <div class="line2 d-flex align-items-center">
                            <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
=======
                <div class="timeline d-flex">
                    <div class="img-task me-3">
                        <img src="user/asset/img_user/64f2e14276e62.png" class="img-fluid rounded"
                            style="width:20rem; height:34rem">
                    </div>
                    <div class="line">
                        <div class="device-name mt-3 mb-3">
                            <h5 class="fw-bold">Acer Aspire V</h5>
                        </div>
                        <div class="line1 d-flex align-items-center">
                            <div class="rounded-circle"
                                style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
                            <div class="task-title ms-3">
                                <p class="text-darksemudah mb-0">Sedang Dijemput</p>
                                <div class="subtitle">
                                    <p class="text-darksemudah mb-0">Teknisi Kami Sedang Menuju Ke Alamat Anda</p>
                                </div>
                            </div>
                        </div>

                        <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

                        <div class="line2 d-flex align-items-center">
                            <div class="rounded-circle bg-secondary"
                                style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
>>>>>>> d99ffe03bfbcd40fc867c5fc1a8325da267ca9eb
                            <div class="task-title ms-3">
                                <p class="text-muted mb-0">Menunggu Pembayaran</p>
                                <div class="subtitle">
                                    <p class="text-muted mb-0">Teknisi Kami Sedang Memperbaiki Device Anda</p>
                                </div>
                            </div>
                        </div>

                        <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

                        <div class="line2 d-flex align-items-center">
<<<<<<< HEAD
                            <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
=======
                            <div class="rounded-circle bg-secondary"
                                style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
>>>>>>> d99ffe03bfbcd40fc867c5fc1a8325da267ca9eb
                            <div class="task-title ms-3">
                                <p class="text-muted mb-0">Menunggu Pembayaran</p>
                                <div class="subtitle">
                                    <p class="text-muted mb-0 mb-2">Lunasi Pembayaran</p>
                                    <button class="btn border-0 bg-secondary bg-opacity-25" disabled>Bayar</button>
                                </div>
                            </div>
                        </div>

                        <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

                        <div class="line2 d-flex align-items-center">
<<<<<<< HEAD
                            <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
=======
                            <div class="rounded-circle bg-secondary"
                                style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
>>>>>>> d99ffe03bfbcd40fc867c5fc1a8325da267ca9eb
                            <div class="task-title ms-3">
                                <p class="text-muted mb-0">Sedang Diantar</p>
                                <div class="subtitle">
                                    <p class="text-muted mb-0">Teknisi Kami Sedang Menuju Ke Alamat Anda</p>
                                </div>
                            </div>
                        </div>

                        <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

                        <div class="line2 d-flex align-items-center">
<<<<<<< HEAD
                            <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
                            <div class="task-title ms-3">
                                <p class="text-muted mb-0">Selesai</p>

=======
                            <div class="rounded-circle bg-secondary"
                                style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
                            <div class="task-title ms-3">
                                <p class="text-muted mb-0">Selesai</p>
                                
>>>>>>> d99ffe03bfbcd40fc867c5fc1a8325da267ca9eb
                            </div>
                        </div>

                    </div>

<<<<<<< HEAD
                </div> -->
=======
                </div>
>>>>>>> d99ffe03bfbcd40fc867c5fc1a8325da267ca9eb
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
