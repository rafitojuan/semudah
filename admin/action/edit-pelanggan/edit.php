<?php
include "../../function/function.php";
include "../../session/session.php";

$kode = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM teknisi WHERE kode_teknisi='$kode'");

if (isset($_POST['edit'])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/template-sidebar.css">

    <title>Edit Teknisi</title>
</head>

<body>
    <div class="container">
        <h2>Edit Teknisi</h2>
        <hr>
        <br>
        <a href="../teknisi.php">Back</a>
        <br><br>
        <form action="" method="post">
            <?php
            foreach ($query as $d) :
            ?>
                <label for="KodeTeknisi">Kode Teknisi:</label>
                <input type="text" name="kode_teknisi" id="KodeTeknisi" value="<?= $d['kode_teknisi'] ?>">
                <br>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?= $d['nama_teknisi'] ?>">
                <br>
                <label for="sekolah">sekolah:</label>
                <input type="text" name="sekolah" id="sekolah" value="<?= $d['sekolah'] ?>">
                <br>
                <label for="jurusan">jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $d['jurusan'] ?>">
                <br>
                <label for="email">email:</label>
                <input type="email" name="email" id="email" value="<?= $d['email'] ?>">
                <br>
                <label for="telp">telp:</label>
                <input type="number" name="telp" id="telp" value="<?= $d['telp'] ?>">
                <br>
                <label for="tgl_lahir">tanggal lahir:</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $d['tgl_lahir'] ?>">
                <br>
            <?php
            endforeach;
            ?>

            <button type="submit" name="edit">Edit</button>

        </form>
    </div>
</body>

</html>