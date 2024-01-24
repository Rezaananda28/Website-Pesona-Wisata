<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbwisata (
		wisata,
		kdkategori,
		lokasi,
		ket1,
		ket2,
		image,
		akses,
		waktu,
		tiket
		)
	VALUES (
	'$_POST[wisata]',
	'$_POST[kdkategori]',
	'$_POST[lokasi]',
	'$_POST[ket1]',
	'$_POST[ket2]',
	'$_POST[image]',
	'$_POST[akses]',
	'$_POST[waktu]',
	'$_POST[tiket]')");
header ('location:tambah-detailwisata.php?insert=sukses');
?>