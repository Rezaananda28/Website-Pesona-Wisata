<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Holiday | Pesona Sumut</title>
    <link href="https://i.ibb.co/cFGx5x2/logo-pesona-sumut-RAM.png" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head><!--/head-->
<?php include 'koneksi.php'; ?>
<body>
    <header id="header">      
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <h1><img src="https://i.ibb.co/GHHG6Lf/logo-pesona-sumut-RAM-8.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><h5>Beranda</h5></a></li>
                        <li class="dropdown"><a href="#"><h5>Wisata Alam<i class="fa fa-angle-down"></i></h5></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="wisata_pegunungan.php">Pendakian</a></li>
                                <li><a href="wisata_airterjun.php">Air Terjun</a></li>
                                <li><a href="wisata_goa.php">Danau</a></li>
                                <li><a href="wisata_pemandian.php">Laut</a></li>
                            </ul>
                        </li>                    
                        <li class="active" class="dropdown"><a><h5>Wisata Edukasi <i class="fa fa-angle-down"></i></h5></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="wisata_taman.php">Taman</a></li>
                                <li><a href="wisata_candi.php">Museum</a></li>
                                <li class="active"><a href="wisata_kampung.php">Rumah Adat</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="wisata_tongkrongan.php"><h5>Tongkrongan</h5></a></li>
                        <li><a href="tentang.php"><h5>About</h5></a></li>                    
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
<?php
error_reporting(0);
include("koneksi.php");
echo '
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
';
?>
<?php
$sql = "SELECT * from tbwisata INNER JOIN tbkategori ON(tbwisata.kdkategori = tbkategori.kdkategori) INNER JOIN tbdetailwisata ON(tbwisata.kdwisata = tbdetailwisata.kdwisata) WHERE tbwisata.kdwisata=9";
$hsl = mysqli_query($con, $sql);
while ($data=mysqli_fetch_array($hsl)) {
echo "<tr>";
$id = $data["kdwisata"];
$wisata = $data["wisata"];
$lokasi = $data["lokasi"];
$ket1 = $data["ket1"];
$ket2 = $data["ket2"];
$image = $data["image"];
$akses = $data["akses"];
$waktu = $data["waktu"];
$tiket = $data["tiket"];
$kategori = $data["kategori"];
$g1 = $data["g1"];
$g2 = $data["g2"];
$g3 = $data["g3"];
$g4 = $data["g4"];
?>  
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><b><?php echo "$kategori";  ?></b></h1>
                            <p><?php echo "$wisata";  ?>, Sumatera Utara.</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <a><img src="https://i.ibb.co/kJqbys6/BOLON-1.png" class='img-responsive' alt="BOLON-1"></a>
                </div>
                <div class="col-sm-6">
                    <p><?php echo "$ket1";  ?></p><br>
                    <p><?php echo "$ket2";  ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <h2><b>Lokasi</b></h2>
                        <p><?php echo "$lokasi";?></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h2><b>Akses</b></h2>
                        <p><?php echo "$akses";?></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2><b>Jam & Tiket </b></h2>
                        <p>Buka <?php echo "$waktu";?>, setiap hari.<br>Dan tiket <?php echo "$tiket";?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms"><b>Galeri</b></h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms"> Kumpulan foto dari <?php echo "$wisata";?></p>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                        <a><img src="https://i.ibb.co/x5rtrzc/BOLON-2.png" class='img-responsive' alt="BOLON-2"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                        <a><img src="https://i.ibb.co/VCYRRCn/BOLON-3.png" class='img-responsive' alt="BOLON-3"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                        <img src="https://i.ibb.co/89mhm6n/BOLON-4.png" class='img-responsive' alt="BOLON-4"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                        <a><img src="https://i.ibb.co/PrFgFnB/BOLON-5.png" class='img-responsive' alt="BOLON-5"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#team-->
<?php } ?>
<?php include 'footer.php'; ?>