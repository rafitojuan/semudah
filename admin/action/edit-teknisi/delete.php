<?php
include "../../../function/function.php";
include "../../session/session.php";

$kode = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM teknisi WHERE kode_teknisi='$kode'");

header("location: ../teknisi.php");
