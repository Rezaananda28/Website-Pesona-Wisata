<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbtongkrongan (
		nama,
		ket,
		lokasi,
		cover,
		waktu,
		tgl,
		kdkategori
		)
	VALUES (
	'$_POST[nama]',
	'$_POST[ket]',
	'$_POST[lokasi]',
	'$_POST[cover]',
	'$_POST[waktu]',
	'$_POST[tgl]',
	'$_POST[kdkategori]')");
header ('location:cafe.php?insert=sukses');
?>