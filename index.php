<?php
session_start();
unset($_SESSION['layanan']);

if (!isset($_SESSION['login'])) {
    echo '
    <script>
    localStorage.setItem("notificationShown", "true")
    </script>
    ';
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
    <link href="user/asset/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="user/asset/dist/toastr.min.css">
</head>

<body>

    <div class="hero bg-landing vh-100 position-relative">
        <div class="position-absolute top-0 end-0 bottom-0 start-0" id="main-hero"></div>
        <?php
        if (isset($_SESSION['login'])) {
            include 'component/navbar-login.php';
        } else {
            include 'component/navbar.php';
        }

        ?>
        <div class="position-absolute top-50 translate-middle-y mw-100 hero-content">
            <div class="px-5">
                <h1 class="text-white fw-bold" style="letter-spacing: 5px;" data-aos="fade-right" data-aos-duration="1000">Dengan <span class="text-info">Semudah</span> Semua Jadi Lebih Mudah</h1>
            </div>
        </div>
    </div>

    <!-- SERVICE -->
    <div class="bg-service-content pt-5" style="height: 600px">
        <div class="container">
            <div class="text-center text-white mb-3">
                <h1 class="fw-bold" id="layanan">Layanan Kami</h1>
                <small class="opacity-75">Kami menyediakan beberapa layanan yang bisa kamu pesan.</small>
            </div>
            <div class="text-center mb-5">
                <a href="layanan" class="btn text-white fw-lighter lihatsemua" style="background-color: #4FA3C6;">Lihat Semua</a>
            </div>
        </div>

        <!-- CARD -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-1 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute pe-4" style="bottom: 30px">
                            <h5>Instalasi dan Aktivasi</h5>
                            <p>Melayani instalasi windows dan aktivasi office original.</p>
                            <a href="layanan-instalasi" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-2 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute" style="bottom: 30px">
                            <h5>Service Laptop dan Komputer</h5>
                            <p>Melayani service laptop, komputer dan perbaikan hardware lainnya.</p>
                            <a href="layanan-service" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-service bg-service-3 p-4 text-light rounded-4">
                        <div class="card-overlay rounded-4"></div>
                        <div class="position-absolute" style="bottom: 30px">
                            <h5>Service Handphone</h5>
                            <p>Melayani service handphone seperti pemasangan lcd dll.</p>
                            <a href="layanan-servicehp" class="btn btn-sm btn-outline-light px-4">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CARA PESAN -->
    <div class="bg-white tutor">
        <div class="container">
            <div class="row">
                <div class="text-center mb-5">
                    <h1 class="fw-bold" id="carapesan">Cara Pesan</h1>
                    <small class="opacity-75">Ikuti panduannya untuk mengetahui cara pesannya</small>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="card caralogin">
                                <img src="user/asset/img/vector-login.png" class="vecpesan" alt="user login" data-aos="zoom-in">
                                <h4 class="text-center text-white mt-5 mb-5">Login atau Register
                                    sebelum memesan</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-5">
                    <div class="card caralayanan">
                        <img src="user/asset/img/vector-pilih.png" class="vecpesan" alt="user milih" data-aos="zoom-in">
                        <h4 class="text-white text-center mt-5 mb-5">Pilih Layanan yang
                            kamu butuhkan</h4>

                    </div>
                </div>
                <div class="col-md mt-5">
                    <div class="card carapesan">
                        <img src="user/asset/img/vector-form.png" class="vecpesan" alt="user pesan" data-aos="zoom-in">
                        <h4 class="text-white text-center mt-4 mb-5">Isi form pemesanan
                            sesuai dengan
                            kebutuhan </h4>
                    </div>
                </div>
                <div class="col-md mt-5">
                    <div class="card carabayar">
                        <img src="user/asset/img/vector-pembayaran.png" class="vecpesan" alt="user bayar" data-aos="zoom-in">
                        <h4 class="text-white text-center mt-4 mb-5">Pilih metode
                            pembayaran tunai
                            atau non-tunai</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MENGAPA SEMUDAHH?? -->
    <div class="bg-why-content pt-5">
        <div class="container">
            <div class="text-center text-white mb-3">
                <h1 class="fw-bold">Mengapa Harus Semudah?</h1>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border border-0" style="background-color: transparent; ">
                        <img src="user/asset/img/vector-konsultasi.png" alt="konsultasi">
                        <h3 class="text-center text-white">Gratis konsultasi</h3>
                        <p class="text-center text-white mt-3">Jika Anda tidak mengetahui tentang
                            laptop, Anda selalu bisa meminta
                            bantuan kami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border border-0" style="background-color: transparent; ">
                        <img src="user/asset/img/vector-profesional.png" alt="profesional">
                        <h3 class="text-center text-white">Cepat dan Profesional</h3>
                        <p class="text-center text-white mt-3">Proses service cepat dan
                            profesional. Anda cukup menunggu
                            beberapa hari dan selesai.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border border-0" style="background-color: transparent; ">
                        <img src="user/asset/img/vector-murah.png" alt="murah dan berkualitas">
                        <h3 class="text-center text-white">Murah dan Berkualitas</h3>
                        <p class="text-center text-white mt-3">Anda bisa mendapatkan service yang
                            profesional dan berkualitas dengan
                            harga yang murah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer/white-footer.php";
    ?>
    <script src="user/asset/js/bootstrap.min.js"></script>
    <script src="user/asset/js/script.js"></script>
    <script src="user/asset/js/jquery.js"></script>
    <script src="user/asset/aos/aos.js"></script>
    <script src="user/asset/dist/toastr.min.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        if (!localStorage.getItem("notificationShown")) {

            toastr.info('Login berhasil, selamat datang.');
            localStorage.setItem("notificationShown", "true");
        };
    </script>
    <script>
    </script>
</body>

</html>