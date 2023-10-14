<?php
include "../../../function/function.php";
include "../../session/session.php";

$id = $_GET['id'];

if(isset($_POST['update'])){
    $status = $_POST['status'];
    $tek = $_POST['teknisi'];
    $kurir = $_POST['kurir'];
    $tgl_keluar = $_POST['tgl_keluar'];

    mysqli_query($conn, "UPDATE keluhan_pelanggan SET status = '$status', teknisi = '$tek', kurir = '$kurir', tgl_keluar = '$tgl_keluar' WHERE id_keluhan = '$id'");
    echo "<script>alert('berhasil'); document.location.href = '../../pelanggan-all.php';</script>";
}

$qSelect = mysqli_query($conn, "SELECT * FROM keluhan_pelanggan WHERE id_keluhan = '$id'");
$row = mysqli_fetch_assoc($qSelect);

$teknisi = mysqli_query($conn, "SELECT * FROM teknisi");
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Pelanggan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all">
    <link rel="stylesheet" href="../../assets/css/typography.css">
    <link rel="stylesheet" href="../../assets/css/default-css.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <!-- main content area start -->
    <a href="../../pelanggan-all.php">Kembali</a>
    <div class="main-content">
        <div class="col-6">
            <div class="main-content-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h2>Status</h2>
                            <ul>
                                <li>0 = Menunggu Konfirmasi</li>
                                <li>1 = Pembayaran DP</li>
                                <li>2 = Sedang Dijemput</li>
                                <li>3 = Sedang Dikerjakan</li>
                                <li>4 = Selesai - Menunggu Pelunasan</li>
                                <li>5 = Servis Selesai</li>
                            </ul>

                            <br><br><br>

                            <form action="" method="post">
                                <!-- <select name="status" id="" class="form-control" required>
                                    <option value=""></option>
                                    <option class="dropdown-item" value="Menunggu konfirmasi">0 - Menunggu konfirmasi</option>
                                    <option class="dropdown-item" value="pembayaran uang muka">1 - pembayaran uang muka</option>
                                    <option class="dropdown-item" value="Barang sedang dijemput">2 - Barang sedang dijemput</option>
                                    <option class="dropdown-item" value="sedang dikerjakan">3 - sedang dikerjakan</option>
                                    <option class="dropdown-item" value="Selesai - menunggu pelunasan">4 - Selesai - menunggu pelunasan</option>
                                    <option class="dropdown-item" value="Servis selesai">5 - Servis Selesai</option>
                                </select> -->

                                <label for="status">Status:</label><br>
                                <input type="number" name="status" id="status" value="<?= $row['status']?>">

                                <br><br>

                                <label for="teknisi">Teknisi:</label><br>
                                <!-- <input type="number" name="status" id="status" value="<?= $row['status']?>" max="5"> -->
                                <select name="teknisi" id="teknisi">
                                    <?php 
                                    foreach($teknisi as $t):
                                    ?>
                                    <option value="<?= $t['nama_teknisi']?>"><?= $t['nama_teknisi']?></option>
                                    <?php 
                                    endforeach;
                                    ?>
                                </select>
                                
                                <br><br>

                                <label for="kurir">Kurir:</label><br>
                                <input type="text" id="kurir" name="kurir" value="<?= $row['kurir']?>">

                                <br><br>
                                
                                <label for="tgl_keluar">Tanggal Kembali:</label><br>
                                <input type="date" id="tgl_keluar" name="tgl_keluar" value="<?= $row['tgl_keluar']?>">

                                <br><br>

                                <button type="submit" class="btn btn-primary" name="update">Update status</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- overview area start -->

        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/metisMenu.min.js"></script>
    <script src="../../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="../../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../../assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/tampil.js"></script>
</body>

</html>