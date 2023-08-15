<?php
include '../koneksi.php';

$id = $_GET['id_kegiatan'];

$query="DELETE from kegiatan where id_kegiatan='$id'";
mysqli_query($host, $query);

header("location:dashboard.php");

?>