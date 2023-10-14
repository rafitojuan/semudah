<?php
include "../function/function.php";
include "session/session.php";

$query = mysqli_query($conn, "SELECT * FROM keluhan_pelanggan WHERE status = 3");
$queryAll = mysqli_query($conn, "SELECT * FROM keluhan_pelanggan");
$query3 = mysqli_query($conn, "SELECT * FROM keluhan_pelanggan WHERE status = 1");
$query4 = mysqli_query($conn, "SELECT * FROM keluhan_pelanggan WHERE status = 0");
$query2 = mysqli_query($conn, "SELECT * FROM keluhan_pelanggan WHERE status = 2");
$query6 = mysqli_query($conn, "SELECT * FROM keluhan_pelanggan WHERE status = 4");

$rowAll = mysqli_num_rows($queryAll);
$row0 = mysqli_num_rows($query4);
$row1 = mysqli_num_rows($query3);
$row2 = mysqli_num_rows($query2);
$row3 = mysqli_num_rows($query);
$row4 = mysqli_num_rows($query6);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pelanggan - Sedang Dikerjakan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li>
                                <a href="teknisi.php">Teknisi</a>
                            </li>
                            <li>
                                <a href="user.php">User</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true">Pelanggan</a>
                                <ul class="collapse">
                                    <li><a href="pelanggan-all.php">Semua Pelanggan <span class="badge badge-light"><?= $rowAll ?></span></a></li>
                                    <li><a href="pelanggan-0.php">Menunggu Konfirmasi <span class="badge badge-light"><?= $row0 ?></span></a></li>
                                    <li><a href="pelanggan-1.php">Bayar DP <span class="badge badge-light"><?= $row1 ?></span></a></li>
                                    <li><a href="pelanggan-2.php">Sedang Dijemput <span class="badge badge-light"><?= $row2 ?></span></a></li>
                                    <li class="active"><a href="pelanggan-3.php">Sedang Dikerjakan <span class="badge badge-light"><?= $row3 ?></span></a></li>
                                    <li><a href="pelanggan-4.php">Selesai Dikerjakan <span class="badge badge-light"><?= $row4 ?></span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="riwayat.php">Riwayat Pelanggan</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <?php

                                //menghitung jumlah pesan dari tabel pesan
                                $q1 = mysqli_query($conn, "SELECT COUNT(id_keluhan) as jumlah FROM keluhan_pelanggan WHERE status = 0");

                                //menampilkan data
                                $hasil = mysqli_fetch_array($q1);

                                //membuat data json
                                // echo json_encode(array('jumlah' => $hasil['jumlah']));
                                ?>

                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span id="notif"><?= $hasil['jumlah'] ?></span>
                                </i>
                                <div id="pesan" class="dropdown-menu bell-notify-box notify-box">

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Pelanggan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Pelanggan</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['username']; ?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="session/logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- table primary start -->
                <div class="mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Sedang dalam pengerjaan</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase bg-primary">
                                            <tr class="text-white">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Keluhan</th>
                                                <th scope="col">Layanan</th>
                                                <th scope="col">Nota Tambahan</th>
                                                <th scope="col">Foto Laptop</th>
                                                <th scope="col">Waktu Kunjungan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">telp</th>
                                                <th scope="col">Tanggal Masuk</th>
                                                <th scope="col">Tanggal Keluar</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($query as $d) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $d['nama_pelanggan'] ?></td>
                                                    <td><?= $d['keluhan'] ?></td>
                                                    <td><?= $d['layanan'] ?></td>
                                                    <td><?= $d['nota_tambahan'] ?></td>
                                                    <td><img src="assets/images/img_laptop/<?= $d['gambar'] ?>" alt="" width="100px"></td>
                                                    <td><?= $d['waktu_kunjungan'] ?></td>
                                                    <td><?= $d['alamat'] ?></td>
                                                    <td><?= $d['telp'] ?></td>
                                                    <td><?= $d['tgl_masuk'] ?></td>
                                                    <td><?= $d['tgl_keluar'] ?></td>
                                                    <td><?= $d['status'] ?></td>
                                                    <td>
                                                        <a href="action/edit-keluhan/edit.php?id=<?= $d['id_keluhan'] ?>"><i class="ti-pencil"></i></a>
                                                        <a href="action/edit-keluhan/delete.php?id=<?= $d['id_keluhan'] ?>" onclick="return confirm('Yakin ingin menghapus?')"><i class="ti-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table primary end -->
                </div>
            </div>
            <!-- main content area end -->
            <!-- footer area start-->
            <footer>
                <div class="footer-area">
                    <p>© Copyright 2022. All right reserved.</p>
                </div>
            </footer>
            <!-- footer area end-->
        </div>
        <!-- page container area end -->

        <!-- jquery latest version -->
        <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/js/jquery.slicknav.min.js"></script>

        <!-- others plugins -->
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>

</html>