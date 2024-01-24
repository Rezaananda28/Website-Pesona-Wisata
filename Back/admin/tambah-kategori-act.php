<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbkategori (
		kategori,
		ket
		)
	VALUES (
	'$_POST[kategori]',
	'$_POST[ket]')");
header ('location:kategori.php?insert_kategori=sukses');
?>