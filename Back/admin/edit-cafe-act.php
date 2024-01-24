<?php
include ("koneksi.php");
$sql = "UPDATE tbtongkrongan SET 
			nama = '$_POST[nama]',
			lokasi = '$_POST[lokasi]',
			waktu = '$_POST[waktu]',
			tgl = '$_POST[tgl]',
			ket = '$_POST[ket]'

		WHERE kdcafe='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header ('location:cafe.php?edit_cafe=sukses');
?>