<?php

$conn = mysqli_connect('localhost', 'root', '', 'semudah');

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahUser($data)
{
    global $conn;

    $nama = $data['nama'];
    $email = $data['email'];
    $password = $data['password'];
    $telp = $data['telp'];
    $gambar = uploadGambarUser();

    $validasiEmail = mysqli_query($conn, "SELECT email FROM user WHERE email ='$email'");
    if (mysqli_fetch_assoc($validasiEmail)) {
        echo "
        <script>
         alert('Email sudah terdaftar');
        </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

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

function addLayanan($data)
{
    global $conn;
    $nama = $_SESSION['nama'];
    $telp = $_SESSION['telp'];
    $merk = $data['merk'];
    $spek = $data['spesifikasi'];
    $layanan = $data['layanan'];
    $alamat = $data['alamat'];
    $tgl_kunjungan = $data['tgl_kunjungan'];

    mysqli_query($conn, "INSERT INTO keluhan_pelanggan VALUES('','$nama','$merk','$spek','','$layanan' ,'','','$tgl_kunjungan','$alamat','$telp','','','','','','','','')");
    return mysqli_affected_rows($conn);
}

function addInstalasi($data)
{
    global $conn;

    $nama = ucwords($_SESSION['nama']);
    $telp = $_SESSION['telp'];
    $merk = htmlspecialchars($data['merk']);
    $spek = htmlspecialchars($data['spesifikasi']);
    $os = ucwords(htmlspecialchars($data['os']));
    $office = ucwords(htmlspecialchars($data['office']));
    $alamat = htmlspecialchars($data['alamat']);
    $kunjungan = htmlspecialchars($data['tgl_kunjungan']);

    $query = "INSERT INTO keluhan_pelanggan VALUES('','$nama','$merk','$spek','','$os, $office','','','$kunjungan','$alamat','$telp','','','','','','','','')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function addHP($data)
{
    global $conn;

    $nama = ucwords($_SESSION['nama']);
    $telp = $_SESSION['telp'];
    $merk = htmlspecialchars(ucwords($data['merkhp']));
    $spek = htmlspecialchars(ucwords($data['spesifikasi']));
    $layanan = htmlspecialchars(ucfirst($data['layananhp']));
    $alamat = htmlspecialchars(strtoupper($data['alamat']));
    $kunjungan = $data['tgl_kunjungan'];

    $query = "INSERT INTO keluhan_pelanggan VALUES(NULL,'$nama','$merk','$spek','','$layanan','','','$kunjungan','$alamat','$telp','','','','','','','','')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function addDesain($data){
    global $conn;

    $nama = ucwords($_SESSION['nama']);
    $telp = $_SESSION['telp'];
    $inf = htmlspecialchars(ucwords($data['informasi_desain']));
    $desain = htmlspecialchars(ucfirst($data['desain']));

    mysqli_query($conn,"INSERT INTO keluhan_pelanggan VALUES('','$nama','','$inf','','$desain','','','','','','$telp','','','','','','','')");
    return mysqli_affected_rows($conn);
}

function addWebsite($data){
    global $conn;

    $nama = ucwords($_SESSION['nama']);
    $telp = $_SESSION['telp'];
    $inf = htmlspecialchars(ucwords($data['informasi_website']));
    $website = htmlspecialchars(ucfirst($data['website']));

    mysqli_query($conn,"INSERT INTO keluhan_pelanggan VALUES('','$nama','','$inf','','$website','','','','','','$telp','','','','','','','')");
    return mysqli_affected_rows($conn);
}


function addNetwork($data){
    global $conn;

    $nama = ucwords($_SESSION['nama']);
    $telp = $_SESSION['telp'];
    $inf = htmlspecialchars(ucwords($data['informasi_networking']));
    $website = htmlspecialchars(ucfirst($data['networking']));
    $alamat = htmlspecialchars(strtoupper($data['alamat']));
    $kunjungan = $data['tgl_kunjungan'];


    mysqli_query($conn,"INSERT INTO keluhan_pelanggan VALUES('','$nama','','$inf','','$website','','','','$kunjungan','$alamat','$telp','','','','','','','')");
    return mysqli_affected_rows($conn);
}


function tambahAdmin($data)
{
    global $conn;

    $email = $data['email'];
    $nama = $data['nama'];
    $username = $data['username'];
    $password = $data['password'];
    $jns_kelamin = $data['jns_kelamin'];
    $tgl_lahir = $data['tgl_lahir'];
    $telp = $data['telp'];
    // $asal_kota = $data['asal_kota'];

    $query = mysqli_query($conn, "INSERT INTO admin VALUES('', '$email', '$nama', '$username', '$password', '$jns_kelamin','$tgl_lahir', now(), '$telp', '')");

    return mysqli_affected_rows($conn);
}

function uploadBuktiPembayaranDP()
{
    global $conn;

    $namaFile = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

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
    move_uploaded_file($tmp_name, "user/asset/bukti-transaksi/dp/" . $namaFileBaru);

    return $namaFileBaru;
}
function uploadBuktiPembayaranLunas()
{
    global $conn;

    $namaFile = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

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
    move_uploaded_file($tmp_name, "user/asset/bukti-transaksi/lunas/" . $namaFileBaru);

    return $namaFileBaru;
}
