<?php
session_start();
include "../function/function.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION["login"] = true;
            $_SESSION["nama"] = $row['nama'];
            $_SESSION["foto"] = $row['gambar'];

            echo "
            <script>
            document.location.href ='../index.php'
            </script>
            ";
        } else {
            echo "
                <script>
                alert('Password salah');
                document.location.href ='login.php'
                </script>
                ";
        }
    } else {
        echo "
            <script>
            alert('Akun tidak tersedia!');
            document.location.href ='login.php'
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
    <title>Login</title>
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
                    <h3 class="text-center">Selamat Datang!</h3>
                    <p class="text-muted text-center mb-5">Hai selamat datang lagi👋 buruan masuk ke akunmu!</p>
                    <form action="" method="post">
                        <div class="email mb-4">
                            <input type="email" class="form-control border-input m-auto" name="email" id="" placeholder="Email" required>
                        </div>
                        <div class="password mb-4">
                            <input type="password" class="form-control border-input m-auto" name="password" id="" placeholder="Password" required>
                        </div>

                        <button type="submit" name="login" class="btn text-white bg-semudah w-100 mb-2">Masuk</button>
                        <center>
                            <span>Belum punya akun? <a href="register.php" class="text-decoration-none text-semudah">Daftar Sekarang</a></span>
                        </center>
                    </form>

                </div>

            </div>
            <div class="col-xl-6 bg-login d-none d-md-block">
                <div class="bg-login"></div>
            </div>
        </div>
    </div>





    <script src="../asset/js/bootstrap.min.js"></script>
</body>

</html>