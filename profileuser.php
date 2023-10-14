<?php
session_start();

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
</head>

<style>
    .cardprofile {
        filter: brightness(50%);
    }
    .h3-card {
        position: absolute;
        margin-left: 65px;
        margin-top: 70px;
        color:white;
    }
    .h3-card2 {
        position: absolute;
        margin-left: 40px;
        margin-top: -115px;
        color:white;
    }
    .h3-card3 {
        position: absolute;
        margin-left: 110px;
        margin-top: -115px;
        color:white;
    }
</style>

<body>

    <div class="hero position-relative" data-aos="fade" data-aos-duration="2000">
        <div class="position-absolute top-0 end-0 bottom-0 start-0" id="main-hero"></div>
        <?php
            include 'component/navbar-login.php';
        ?>
      
        </div>
    </div>

    <br><br>

    <div class="div text-center mt-5">

        <img class="rounded-circle" width="300vh" src="user/asset/img/login.png" alt="">
        <h2 class="mt-3"><b>nameeeeeeeeee</b></h2>
        <br>

        <a class="btn btn-primary btn-lg" href="#" role="button">Edit Profile</a>

    </div>

    <br><br>

    <!-- CARD -->
    <div class="container">

        <div class="row mt-2">

            <div class="col mx-3">
                    <div class="card rounded" style="width: 20rem; height: 11rem">
                        <img src="user/asset/img/service-laptopuser.png" height="190px" class="card-img-top cardprofile" alt="...">
                        <h3 class="h3-card"><b>Service-Laptop</b></h3>
                    </div>
            </div>

            <div class="col">
                    <div class="card rounded" style="width: 20rem;">
                        <img src="user/asset/img/service-handphoneuser.png" height="190px" class="card-img-top cardprofile" alt="...">
                    </div>
                    <h3 class="h3-card2"><b>Service-Handphone</b></h3>
            </div>

            <div class="col">
                    <div class="card rounded" style="width: 20rem;">
                        <img src="user/asset/img/desain.png" height="190px" class="card-img-top cardprofile" alt="...">
                    </div>
                    <h3 class="h3-card3"><b>Desain</b></h3>
            </div>

        </div>

    </div>



    <br><br>

    <?php
    include "footer/blue-footer.php";
    ?>
    <script src="user/asset/js/bootstrap.min.js"></script>
    <script src="user/asset/js/script.js"></script>
    <script src="user/asset/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>