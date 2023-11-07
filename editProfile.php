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
                        document.location.href="user/login.php";
                    });
                };
            </script>';

  echo $loginFirst;
  echo '<p class="text-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #ffffff; z-index: 1000;"></p>';
  echo '<script>loginAlert();</script>';
}

if (isset($_POST["update"])) {
  if (updateProfile($_POST) > 0) {
    $updateProfile = '
            <script src="user/asset/dist/sweetalert2.all.min.js"></script>
            <script>
                function uptProfile() {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Data berhasil diperbarui!",
                        icon: "success",
                    }).then(function() {
                        document.location.href="user/logout.php";
                    });
                };
            </script>';

    echo $updateProfile;
    echo '<p class="text-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #ffffff; z-index: 1000;"></p>';
    echo '<script>uptProfile();</script>';
  } else {
    echo "<script>
    alert('data gagal diedit')  
    document.location.href = 'editProfile.php';
    </script>";
  }
}

if(isset($_POST['updatePass'])){
  if(updatePassword($_POST)>0){
    $updatePass = '
    <script src="user/asset/dist/sweetalert2.all.min.js"></script>
    <script>
        function uptProfile() {
            Swal.fire({
                title: "Berhasil!",
                text: "Password berhasil diperbarui!",
                icon: "success",
            }).then(function() {
                document.location.href="profileuser";
            });
        };
    </script>';

echo $updatePass;
echo '<p class="text-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #ffffff; z-index: 1000;"></p>';
echo '<script>uptProfile();</script>';
  }else{
    $updatePass = '
    <script src="user/asset/dist/sweetalert2.all.min.js"></script>
    <script>
        function uptProfile() {
            Swal.fire({
                title: "Gagal",
                text: "Konfirmasi password tidak sesuai!",
                icon: "error",
            }).then(function() {
                document.location.href="editProfile.php";
            });
        };
    </script>';

echo $updatePass;
echo '<p class="text-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #ffffff; z-index: 1000;"></p>';
echo '<script>uptProfile();</script>';
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
  <link rel="stylesheet" href="user/asset/dist/sweetalert2.min.css">
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
      <div class="col-md-6">
        <div class="profile-photo mb-3">
          <?php
          $foto = isset($_SESSION['foto']) ? $_SESSION['foto'] : 'dummy-profile.jpg';
          ?>
          <a href="user/asset/img_user/<?= $foto ?>" target="_blank" style="cursor: default;"><img src="user/asset/img_user/<?= $foto ?>" class="img-fluid mx-auto d-block rounded-circle" style="width:10rem; height:10rem"></a>

          <div class="username">
            <h5 class="text-center fw-bold mt-2"><?= $_SESSION['nama']; ?></h5>
          </div>
        </div>

      </div>
      <div class="col-md-6">
        <h5 class="">Profil Saya</h5>
        <div style=" border: 2px solid #003974;"></div>
        <form action="" method="post" id="form1">
          <input type="hidden" name="id" id="" value="<?= $user['id_user'] ?>">
          <div class="row mb-3">
            <div class="col-md-6 mt-3">
              <label for="" class="form-label">Nama</label>
              <input type="text" class="form-control border border-1 border-dark" name="nama" value="<?= $user['nama'] ?>">
            </div>
            <div class="col-md-6 mt-3">
              <label for="" class="form-label">Email</label>
              <input type="text" class="form-control border border-1 border-dark" name="email" value="<?= $user['email'] ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="" class="form-label">No. telp</label>
              <input type="number" class="form-control border border-1 border-dark" name="telp" value="<?= $user['telp'] ?>">
            </div>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-semudah mt-3" name="update" id="uptUsr" onclick="return confirm('Anda akan login ulang!');">Simpan</button>
          </div>
        </form>
        <h5 class="mt-3">Password Saya</h5>
        <div style=" border: 2px solid #003974;"></div>
        <form action="" method="post">
          <div class="row mt-3">
            <input type="hidden" name="id" value="<?=$user['id_user']?>">
            <div class="col-md-12">
              <label for="" class="form-label">Password</label>
              <input type="password" name="password" class="form-control border border-1 border-dark">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <label for="" class="form-label">Konfirmasi Password</label>
              <input type="password" name="konfir" class="form-control border border-1 border-dark">
            </div>
            <div class="text-end mt-3">
              <button type="submit" name="updatePass" class="btn btn-semudah">Ganti Password</button>
            </div>
        </form>
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
              document.location.href = 'user/logout.php'
            } else if (result.dismiss === Swal.DismissReason.deny) {
              document.location.href = 'user/logout.php'
            } else {
              document.location.href = 'user/logout.php'
            }
          })
        }
      })
    })
  </script>
</body>

</html>