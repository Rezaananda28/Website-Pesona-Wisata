<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbdetailwisata (
		kdwisata,
		g1,g2,g3,
		g4
		)
	VALUES (
	'$_POST[kdwisata]',
	'$_POST[g1]',
	'$_POST[g2]',
	'$_POST[g3]',
	'$_POST[g4]')");
header ('location:wisata.php?insert=sukses');
?>