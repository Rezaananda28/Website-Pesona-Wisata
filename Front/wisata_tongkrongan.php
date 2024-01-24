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
                        <li class="dropdown"><a><h5>Wisata Edukasi <i class="fa fa-angle-down"></i></h5></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="wisata_taman.php">Taman</a></li>
                                <li><a href="wisata_candi.php">Museum</a></li>
                                <li><a href="wisata_kampung.php">Rumah Adat</a></li>
                            </ul>
                        </li>
                        <li class="active" class="dropdown"><a href="wisata_tongkrongan.php"><h5>Tongkrongan</h5></a></li>
                        <li><a href="tentang.php"><h5>About</h5></a></li>                    
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
    
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><b>Nongkrong kuy</b></h1>
                            <p>Medan, Sumatera Utara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->  
    <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="timeline-blog overflow padding-top">
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common uppercase">CAFE</a>
                    </div> 
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                            <?php
                            $sql = "SELECT * from tbtongkrongan WHERE kdcafe=1";
                            $hsl = mysqli_query($con, $sql);
                            while ($data=mysqli_fetch_array($hsl)) {
                            $id = $data["kdcafe"];
                            $nama = $data["nama"];
                            $lokasi = $data["lokasi"];
                            $ket = $data["ket"];
                            $cover = $data["cover"];
                            $kdkategori = $data["kdkategori"];
                            $waktu = $data["waktu"];
                            $tgl = $data["tgl"];
                            ?> 
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <a><img src="https://i.ibb.co/Mkg8kV0/cafe-higher-steps-dining.jpg" alt="cafe-higher-steps-dining" border="0"></a>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a><b><?php echo "$nama";  ?></b></a></h2>
                                    <h3 class="post-author"><a href="https://msha.ke/higherstepsdining">Higher Steps Dine & Coffee</a></h3>
                                    <p><?php echo "$ket";  ?></p>
                                    <b>Lokasi : </b><a class="read-more"><?php echo "$lokasi";  ?></a>
                                    <div class="post-bottom overflow">
                                        <span class="comments-number pull-right"><a><?php echo "$tgl";  ?></a></span>
                                    </div>
                                </div>
                            </div> <?php } ?>
                        </div>
                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                    <?php
                                    $sql = "SELECT * from tbtongkrongan WHERE kdcafe=2";
                                    $hsl = mysqli_query($con, $sql);
                                    while ($data=mysqli_fetch_array($hsl)) {
                                    $id = $data["kdcafe"];
                                    $nama = $data["nama"];
                                    $lokasi = $data["lokasi"];
                                    $ket = $data["ket"];
                                    $cover = $data["cover"];
                                    $kdkategori = $data["kdkategori"];
                                    $waktu = $data["waktu"];
                                    $tgl = $data["tgl"];
                                    ?> 
                                        <a><img src="https://i.ibb.co/dc4w8FY/coffe-cabin-budaya-land.jpg" alt="coffe-cabin-budaya-land" border="0"></a>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a><b><?php echo "$nama";  ?></b></a></h2>
                                    <h3 class="post-author"><a href="https://www.instagram.com/budayaland/">Budaya Land</a></h3>
                                    <p><?php echo "$ket";  ?></p>
                                    <b>Lokasi : </b><a class="read-more"><?php echo "$lokasi";  ?></a>
                                    <div class="post-bottom overflow">
                                        <span class="comments-number pull-right"><a><?php echo "$tgl";  ?></a></span>
                                    </div>
                                </div>
                            </div> <?php } ?>
                        </div>
                    </div>
                </div>
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common uppercase">CAFE</a>
                    </div> 
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                            <?php
                            $sql = "SELECT * from tbtongkrongan WHERE kdcafe=3";
                            $hsl = mysqli_query($con, $sql);
                            while ($data=mysqli_fetch_array($hsl)) {
                            $id = $data["kdcafe"];
                            $nama = $data["nama"];
                            $lokasi = $data["lokasi"];
                            $ket = $data["ket"];
                            $cover = $data["cover"];
                            $kdkategori = $data["kdkategori"];
                            $waktu = $data["waktu"];
                            $tgl = $data["tgl"];
                            ?> 
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                    <a><img src="https://i.ibb.co/rQhhVkS/KUHI-CAFE.jpg" alt="KUHI-CAFE" border="0"></a>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a><b><?php echo "$nama";  ?></b></a></h2>
                                    <h3 class="post-author"><a href="">Kuhi Bar</a></h3>
                                    <p><?php echo "$ket";  ?></p>
                                    <b>Lokasi : </b><a class="read-more"><?php echo "$lokasi";  ?></a>
                                    <div class="post-bottom overflow">
                                        <span class="comments-number pull-right"><a><?php echo "$tgl";  ?></a></span>
                                    </div>
                                </div>
                            </div> <?php } ?>
                        </div>
                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                    <?php
                                    $sql = "SELECT * from tbtongkrongan WHERE kdcafe=4";
                                    $hsl = mysqli_query($con, $sql);
                                    while ($data=mysqli_fetch_array($hsl)) {
                                    $id = $data["kdcafe"];
                                    $nama = $data["nama"];
                                    $lokasi = $data["lokasi"];
                                    $ket = $data["ket"];
                                    $cover = $data["cover"];
                                    $kdkategori = $data["kdkategori"];
                                    $waktu = $data["waktu"];
                                    $tgl = $data["tgl"];
                                    ?> 
                                        <a><img src="https://i.ibb.co/4sNzL5k/LIMA-ROOFTOOP.jpg" alt="LIMA-ROOFTOOP" border="0"></a>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a><b><?php echo "$nama";  ?></b></a></h2>
                                    <h3 class="post-author"><a href="https://linktr.ee/lima.rooftop">LIMA Rooftop Bar In Medan</a></h3>
                                    <p><?php echo "$ket";  ?></p>
                                    <b>Lokasi : </b><a class="read-more"><?php echo "$lokasi";  ?></a>
                                    <div class="post-bottom overflow">
                                        <span class="comments-number pull-right"><a><?php echo "$tgl";  ?></a></span>
                                    </div>
                                </div>
                            </div> <?php } ?>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
<?php include 'footer.php'; ?>
