<?php
include("koneksi.php");
$sql = "DELETE FROM tbkategori WHERE kdkategori='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:kategori.php?delete=sukses');
?>