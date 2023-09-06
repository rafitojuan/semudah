<?php
require '../config/config.php';
function tambahUser($data)
{
    global $conn;

    $nama = $data['nama'];
    $email = $data['email'];
    $password = $data['password'];
    $telp = $data['telp'];
    $gambar = uploadGambarUser();

    $validasiEmail = mysqli_query($conn,"SELECT email FROM user WHERE email ='$email'");
    if(mysqli_fetch_assoc($validasiEmail)){
        echo"
        <script>
         alert('Email sudah terdaftar');
        </script>
        ";
        return false;
    }

    $password = password_hash($password,PASSWORD_DEFAULT);

    if (!$gambar) {
        return false;
    }



    $query = mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$email', '$password', '$telp', '$gambar')");

    return mysqli_affected_rows($conn);
}

function uploadGambarUser()
{
    $namaFile = $_FILES['foto']['name'];
    $error = $_FILES['foto']['error'];
    $tmp_name = $_FILES['foto']['tmp_name'];

    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));

    if (!in_array($ekstensiFile, $ekstensiValid)) {
        echo "<script>
                    alert('Ekstensi file tidak didukung');
                  </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmp_name, "../user/asset/img_user/" . $namaFileBaru);

    return $namaFileBaru;
}

?>