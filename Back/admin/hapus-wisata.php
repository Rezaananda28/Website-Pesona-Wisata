<?php
include("koneksi.php");
$sql = "DELETE FROM tbwisata WHERE kdwisata='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:wisata.php?delete=sukses');
?>