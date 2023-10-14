<?php
include "../../../function/function.php";
include "../../session/session.php";

$kode = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM keluhan_pelanggan WHERE id_keluhan ='$kode'");

header("location: ../../pelanggan-all.php");