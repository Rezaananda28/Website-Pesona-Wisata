<?php
$koneksi = mysqli_connect("localhost","root","","wisata");

//cek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
else {
//echo "Koneksi berhasil";
}
//manipulasi koneksi. maafkan shella 
?>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database="wisata";

$con=mysqli_connect($server,$username,$password) or die("Koneksi Gagal");
mysqli_select_db($con,$database) or die ("Database Tidak Bisa Dibuka")
?>
