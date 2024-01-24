<?php
include("koneksi.php");
$sql = "DELETE FROM tbtongkrongan WHERE kdcafe='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:cafe.php?delete=sukses');
?>