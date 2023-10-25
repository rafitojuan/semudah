<?php
session_start();
require 'function/function.php';
$_SESSION['layanan'] = true;

$id = $_GET['id_lunas'];
if (!isset($_SESSION['login'])) {
    echo "
        <script>
         alert('Harap login terlebih dahulu');
         document.location.href = 'user/login.php';
        </script>
        ";
}

if(isset($_POST['upload'])){
    $gambar = uploadBuktiPembayaranLunas();
    $query = mysqli_query($conn, "UPDATE keluhan_pelanggan SET bukti_pelunasan = '$gambar' WHERE id_keluhan='$id'");
    {
        echo "<script>
               alert('bukti berhasil dikirim')
               document.location.href = 'pembayaran-akhir.php?id_lunas=$id';
               </script>   
            ";
    }
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

    <div class="hero bg-pembayaran position-relative" style="height: 50vh;">
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
                <h1 class="text-white fw-bold text-center">Pembayaran Akhir</h1>
                <small class="text-white text-center d-block opacity-75">Lampirkan bukti pembayaran dibawah</small>
            </div>
        </div>
    </div>

    <!-- CARA PESAN -->
    <div class="container">
        <div class="row">
            <div class="wrapper px-5 mt-5">
                    <div class="pembayaran border border-3 rounded-2 text-center mb-3 p-md-5 ">
                        <div class="container mt-3 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="user/asset/img/bank bri.png" class="img-fluid" alt=""
                                        style="max-height: 100px;">
                                    7632-01-007520-53-0
                                </div>
                                <div class="col-md-6">
                                    <img src="user/asset/img/bni.png" class="img-fluid" alt=""
                                        style="max-height: 100px;">
                                    5173-7600-0012-3456
                                </div>
                            </div>
                            <div class="row mt-md-5">
                                <div class="col-md-6 mt-3">
                                    <img src="user/asset/img/bank mandri.png" class="img-fluid me-3" alt=""
                                        style="max-height: 100px;">
                                    113-00-1523616-4
                                </div>
                                <div class="col-md-6">
                                    <img src="user/asset/img/dana.png" class="img-fluid me-3" alt=""
                                        style="max-height: 100px;">
                                    113-00-1523616-4
                                </div>
                            </div>
                        </div>

                    </div>

                    
                    <div class="informasi mb-4">
                        <form action="" method="post" enctype="multipart/form-data">

                            <label for="bukti" class="file-upload">
                                <input type="file" class="d-none" name="gambar" id="bukti" required>
                                Lampirkan bukti pembayaran
                            </label>
                        </div>
                        <button type="submit" class="btn bg-semudah text-white w-100" name="upload">Konfirmasi</button>
                    </form>
            </div>
        </div>
    </div>
    <?php
    include 'footer/blue-footer.php';
    ?>





    <script src="user/asset/js/bootstrap.min.js"></script>
    <script src="user/asset/js/script.js"></script>
</body>

</html>
