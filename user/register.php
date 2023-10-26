<?php

include "../function/function.php";
if (isset($_POST['register'])) {
    if (tambahUser($_POST)) {
        echo "<script>
                alert('Daftar berhasil');
                document.location.href = 'login';
              </script>";
    } else {
        echo "<script>
                alert('Gagal Daftar');
              </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Registrasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="shortcut icon" href="asset/img/SEMUDAH-LOGO.png" type="image/x-icon">

</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-xl-6 d-flex justify-content-center align-items-center">
                <div class="wrapper">
                    <center>
                        <img src="asset/img/SEMUDAH-LOGO.png" alt="" class="mb-2">
                    </center>
                    <h3 class="text-center">Daftar Sekarang!</h3>
                    <p class="text-muted text-center mb-5">Buruan daftar sekarang untuk pesan jasa kami</p>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="nama mb-4">
                            <input type="text" name="nama" id="" class="form-control border-input  m-auto" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="email mb-4">
                            <input type="email" name="email" id="" class="form-control border-input  m-auto" placeholder="Email" required>
                        </div>
                        <div class="noTelp mb-4">
                            <input type="number" name="telp" id="" class="form-control border-input  m-auto" placeholder="No Handphone" required>
                        </div>
                        <div class="Password mb-4">
                            <input type="password" name="password" id="" class="form-control border-input  m-auto" placeholder="Password" required>
                        </div>
                        <div class="foto">
                            <label for="" class="form-label">Masukkan Foto anda</label>
                            <input type="file" name="foto" class="form-control border-input mb-4" id="" required>
                        </div>
                        <button type="submit" name="register" class="btn bg-semudah text-white w-100 mb-2">Daftar</button>
                        <center>
                            <span>Sudah punya akun? <a href="login" class="text-decoration-none text-semudah">Login disini</a></span>
                        </center>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 bg-login d-none d-md-block">
                <div class="bg-login"></div>
            </div>
        </div>
    </div>



    <script src="asset/js/bootstrap.min.js"></script>
</body>

</html>