<?php
session_start();
require 'function/function.php';

$nama = $_SESSION['nama'];
$_SESSION['layanan'] = true;
$idk = $_GET['k'];

$timeline = query("SELECT * FROM timeline ORDER BY id_timeline ASC")[0];
$keluhan = query("SELECT * FROM keluhan_pelanggan WHERE id_keluhan = '$idk'")[0];

if (!isset($_SESSION['login'])) {
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

      <div class="details-order">
        <p class="fs-5=6 fw-bold">
          <span style="color:#4fa3c6 !important;">|</span> Detail Pesanan Saya
        </p>
        <div class="timeline d-flex">
          <div class="img-task me-3">
            <img src="user/asset/img_user/64f2e14276e62.png" class="img-fluid rounded" style="width:20rem; height:34rem">
          </div>
          <div class="line">
            <div class="device-name mt-3 mb-3">
              <h5 class="fw-bold">Pesanan <?= $keluhan['merek']  ?></h5>
            </div>
            <?php if ($keluhan['status'] == 0) {
              echo '<div class="line1 d-flex align-items-center">
              <div class="rounded-circle" style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-darksemudah mb-0">Konfirmasi</p>
                <div class="subtitle">
                  <p class="text-darksemudah mb-0">Pesanan Anda Sedang di Konfirmasi
                  </p>
                </div>
              </div>
            </div>
            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>';
            } elseif ($keluhan['status'] == 1) {
              echo '<div class="line1 d-flex align-items-center">
              <div class="rounded-circle" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Konfirmasi</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Pesanan Anda Sedang di Konfirmasi
                  </p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-darksemudah mb-0">Sedang Dijemput</p>
                <div class="subtitle">
                  <p class="text-darksemudah mb-0">Teknisi Sedang Menuju Lokasi Anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>';
            } elseif ($keluhan['status'] == 2) {
              echo '<div class="line1 d-flex align-items-center">
              <div class="rounded-circle" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Konfirmasi</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Pesanan Anda Sedang di Konfirmasi
                  </p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Dijemput</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Teknisi Sedang Menuju Lokasi Anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-darksemudah mb-0">Sedang Dikerjakan</p>
                <div class="subtitle">
                  <p class="text-darksemudah mb-0 mb-2">Teknisi kami sedang memperbaiki laptop anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>';
            } elseif ($keluhan['status'] == 3) {
              echo '<div class="line1 d-flex align-items-center">
              <div class="rounded-circle" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Konfirmasi</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Pesanan Anda Sedang di Konfirmasi
                  </p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Dijemput</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Teknisi Sedang Menuju Lokasi Anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Dikerjakan</p>
                <div class="subtitle">
                  <p class="text-muted mb-0 mb-2">Teknisi kami sedang memperbaiki laptop anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>
            
            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-darksemudah mb-0">Menunggu Pembayaran</p>
                <div class="subtitle">
                  <p class="text-darksemudah mb-0 mb-2">Lunasi Pembayaran</p>
                  <a href="pembayaran-awal" class="btn border-0 text-white" style="background-color:#003974 !important;">Bayar</a>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>
            ';
            } elseif ($keluhan['status'] == 4) {
              echo '<div class="line1 d-flex align-items-center">
              <div class="rounded-circle" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Konfirmasi</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Pesanan Anda Sedang di Konfirmasi
                  </p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Dijemput</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Teknisi Sedang Menuju Lokasi Anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Dikerjakan</p>
                <div class="subtitle">
                  <p class="text-muted mb-0 mb-2">Teknisi kami sedang memperbaiki laptop anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>
            
            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
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
              <div class="rounded-circle bg-secondary" style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-darksemudah mb-0">Sedang Diantar</p>
                <div class="subtitle">
                  <p class="text-darksemudah mb-0">Teknisi Kami Sedang Menuju Ke Alamat Anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>
            ';
            } elseif ($keluhan['status'] == 5) {
              echo '<div class="line1 d-flex align-items-center">
              <div class="rounded-circle" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Konfirmasi</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Pesanan Anda Sedang di Konfirmasi
                  </p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Dijemput</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Teknisi Sedang Menuju Lokasi Anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Dikerjakan</p>
                <div class="subtitle">
                  <p class="text-muted mb-0 mb-2">Teknisi kami sedang memperbaiki laptop anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>
            
            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
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
              <div class="rounded-circle bg-secondary" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Sedang Diantar</p>
                <div class="subtitle">
                  <p class="text-muted mb-0">Teknisi Kami Sedang Menuju Ke Alamat Anda</p>
                </div>
              </div>
            </div>

            <div class="line ms-2" style="width: 2px; background-color: #ccc; height: 50px;"></div>

            <div class="line2 d-flex align-items-center">
              <div class="rounded-circle bg-secondary" style="background-color:#003974 !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-darksemudah mb-0">Selesai</p>

              </div>
            </div>
            ';
            } else {
              echo '<div class="line1 d-flex align-items-center">
              <div class="rounded-circle" style="background-color:#ccc !important; width:1rem; height:1rem;"></div>
              <div class="task-title ms-3">
                <p class="text-muted mb-0">Memproses Pesanan</p>
              </div>
            </div>';
            } ?>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>


  <br><br>

  <?php
  include 'footer/blue-footer.php.php';
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