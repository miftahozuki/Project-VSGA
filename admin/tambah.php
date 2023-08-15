<?php
include '../koneksi.php';
$id = $_REQUEST['id_kegiatan'];
$nk = $_REQUEST['nama_kegiatan'];
$dk = $_REQUEST['desc_kegiatan'];
$tgl = $_REQUEST['tgl_kegiatan'];
$foto = $_FILES['foto']['name'];
$hash = md5($foto .$nim);
$images = substr($hash, 0, 15);

	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
$file_tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($file_tmp, '../foto/'.$images .'.' .$ekstensi);
$query="INSERT INTO kegiatan SET id_kegiatan='$id',nama_kegiatan='$nk',desc_kegiatan='$dk',tgl_kegiatan='$tgl', foto_kegiatan='foto/$images.$ekstensi'";
mysqli_query($host, $query);

header("location:dashboard.php?showAlert=true");
?>