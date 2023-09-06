<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami</title>
    <link rel="shortcut icon" href="user/asset/img/SEMUDAH-LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="user/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/asset/css/style.css">
</head>

<body>

    <!-- SERVICE -->
    <div class="bg-service-content pt-5" style="height: 600px">
        <div class="container">
            <?php
            if (isset($_SESSION['login'])) {
                include 'component/navbar-login.php';
            } else {
                include 'component/navbar.php';
            }
            ?>
            <div class="text-center text-white mb-5 mt-5">
                <h1 class="fw-bold">Pilih layanan yang anda butuhkan</h1>
                <small class="opacity-75">Kami menyediakan beberapa layanan yang bisa kamu pesan.</small>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-1 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute pe-4" style="bottom: 30px">
                            <h5>Instalasi dan Aktivasi</h5>
                            <p>Melayani instalasi windows dan aktivasi office original.</p>
                            <a href="" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-2 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute" style="bottom: 30px">
                            <h5>Service Laptop dan Komputer</h5>
                            <p>Melayani service laptop, komputer dan perbaikan hardware lainnya.</p>
                            <a href="layanan-service.php" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-3 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute" style="bottom: 30px">
                            <h5>Service Handphone</h5>
                            <p>Melayani service handphone seperti pemasangan lcd dll.</p>
                            <a href="" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white tutor">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-1 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute pe-4" style="bottom: 30px">
                            <h5>Desain</h5>
                            <p>Melayani jasa desain grafis, poster, banner, dll.</p>
                            <a href="" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-2 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute" style="bottom: 30px">
                            <h5>Networking</h5>
                            <p>Melayani instalasi jaringan.</p>
                            <a href="" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-3 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute" style="bottom: 30px">
                            <h5>Pembuatan Website</h5>
                            <p>Melayani pembuatan website portofolio, bisnis, dll.</p>
                            <a href="" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
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