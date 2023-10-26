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

if (isset($_POST['pesan'])) {
    if (addLayanan($_POST) > 0) {
        $layananInput = '
            <script src="user/asset/dist/sweetalert2.all.min.js"></script>
            <script>
                function dataInputed() {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Permintaan Berhasil di Kirim",
                        icon: "success",
                    }).then(function() {
                        document.location.href="layanan-service";
                    });
                };
            </script>';

        echo $layananInput;
        echo '<p class="d-none text-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #ffffff; z-index: 1000;"></p>';
        echo '<script>dataInputed();</script>';
    } else {
        echo "<script>
                alert('Gagal dikirim');
                document.location.href = 'layanan-service';
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

    <div class="hero bg-layanan-service position-relative opacity-55" style="height: 50vh">
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
                <h1 class="text-center text-white fw-bold mb-3">Service Laptop</h1>
                <small class="text-muted text-center d-block">Melayani aktivasi office</small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="wrapper px-5 mt-5">
                <form action="" method="post">
                    <h3 class="mb-4">Spesifikasi Laptop</h3>
                    <div class="spesifikasi">
                        <input type="text" class="form-control border-input mb-4" name="merk" placeholder="Merek Laptop" required>
                        <textarea name="spesifikasi" id="" class="form-control border-input mb-5" rows="5" placeholder="Spesifikasi Tambahan (operating system,prossesor,ram,dll)"></textarea>
                    </div>
                    <h3 class="mb-4">Layanan</h3>
                    <div class="layanan mb-5">
                        <textarea name="layanan" class="form-control border-input" id="" rows="8"></textarea>
                        <small class="text-muted">*Kendala dari laptop anda</small>
                    </div>
                    <h3 class="mb-4">Informasi Pembeli</h3>
                    <div class="informasi mb-4">
                        <input type="text" class="form-control border-input mb-4" name="alamat" placeholder="Alamat Rumah" required>
                        <label for="" class="form-label">Tanggal Kunjungan</label>
                        <input type="date" class="form-control border-input" name="tgl_kunjungan" required>
                        <small class="text-muted">*Kapan teknisi kami bisa mengambil laptopmu</small>
                    </div>
                    <button type="submit" name="pesan" class="btn bg-semudah w-100 text-white">Pesan</button>
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