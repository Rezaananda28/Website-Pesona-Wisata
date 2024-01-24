<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
  session_start();
  include 'cek.php';
  include 'koneksi.php';
  ?>
<title>Sistem Informasi Travel | Pesona Sumut</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<link href="https://i.ibb.co/GHHG6Lf/logo-pesona-sumut-RAM-8.png" rel="icon">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/datepicker.css" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Sistem Informasi Tour & Travel</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Welcome <?php echo $_SESSION['nama']?>&nbsp</span></a></li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Dashboard</a>
  <ul>
    <li <?php if($halaman == "index") echo "class='active'"; ?>>
      <a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
    <li <?php if($halaman == "kategori") echo "class='active'"; ?>>
      <a href="kategori.php"><i class="icon icon-th-list"></i> <span>Kategori Wisata</span></a> </li>
    <li <?php if($halaman == "wisata") echo "class='active'"; ?>>
      <a href="wisata.php"><i class="icon icon-shopping-cart"></i> <span>Data Wisata</span></a> </li>
    <li <?php if($halaman == "cafe") echo "class='active'"; ?>>
      <a href="cafe.php"><i class="icon icon-coffee"></i> <span>Data Cafe</span></a></li>
      <li><a href="../../front/index.php"><i class="icon icon-user"></i> <span>Website</span></a></li>
    <li><a href="logout.php"><i class="icon icon-remove"></i> <span>Logout</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->