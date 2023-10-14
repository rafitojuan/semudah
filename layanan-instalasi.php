<?php
session_start();

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
  <title>Layanan Instalasi</title>
  <link rel="shortcut icon" href="user/asset/img/SEMUDAH-LOGO.png" type="image/x-icon">
  <link rel="stylesheet" href="user/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="user/asset/css/style.css">

</head>

<body>

  <div class="hero bg-instalasi position-relative" style="height: 50vh;">
    <div class="position-absolute top-0 end-0 bottom-0 start-0" id="main-hero"></div>
    <?php
    if (isset($_SESSION['layanan'])) {
      include 'component/navbar-layanan.php';
    } else {
      include 'component/navbar.php';
    }

    ?>
    <div class="position-absolute top-50 translate-middle-y mw-100 hero-instalasi">
      <div class="px-5">
        <h1 class="text-white fw-bold text-center">Instalasi Windows</h1>
        <small class="text-white text-center d-block opacity-75">Melayani instalasi windows </small>
      </div>
    </div>
  </div>

  <!-- CARA PESAN -->
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
            <!-- <textarea name="layanan" class="form-control border-input" id="" rows="8"></textarea> -->
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <select class="form-select form-select-lg border-input" name="os" id="os">
                    <option selected disabled class="text-muted">Sistem Operasi</option>
                    <option value="windows 7">Windows 7</option>
                    <option value="windows 8">Windows 8</option>
                    <option value="windows 10">Windows 10</option>
                    <option value="windows 11">Windows 11</option>
                  </select>
                </div>
                <small class="text-muted">*instalasi ke windows 7, 8, 10, dan 11</small>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <select class="form-select form-select-lg border-input" name="office" id="office">
                    <option selected disabled class="text-muted">Aktivasi Office</option>
                    <option value="office 2010">Office 2010 Pro-Plus</option>
                    <option value="office 2013">Office 2013 Pro-Plus</option>
                    <option value="office 2016">Office 2016 Pro-Plus</option>
                    <option value="office 2019">Office 2019 Pro-Plus</option>
                    <option value="office 2021">Office 2021 Pro-Plus</option>
                  </select>
                </div>
                <small class="text-muted">*Aktivasi office tahun 2010, 2013, 2016, 2019, 2020, dan 2021</small>
              </div>
            </div>
          </div>
          <h3 class="mb-4">Informasi Pembeli</h3>
          <div class="informasi mb-4">
            <input type="text" class="form-control border-input mb-4" name="alamat" placeholder="Alamat Rumah" required>
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