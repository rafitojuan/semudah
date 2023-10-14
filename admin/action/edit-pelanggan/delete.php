<?php
include "../../../function/function.php";
include "../../session/session.php";

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM keluhan_pelanggan WHERE id_keluhan='$id'");

header("location: ../../pelanggan.php");
