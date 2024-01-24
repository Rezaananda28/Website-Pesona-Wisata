<?php
include ("koneksi.php");
$sql = "UPDATE tbwisata SET 
			wisata = '$_POST[wisata]',
			lokasi = '$_POST[lokasi]',
			akses = '$_POST[akses]',
			waktu = '$_POST[waktu]',
			tiket = '$_POST[tiket]'

		WHERE kdwisata='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header ('location:wisata.php?edit_wisata=sukses');
?>