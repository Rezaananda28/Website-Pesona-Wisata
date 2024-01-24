<?php $halaman = "index"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
  <!--BARIS 1-->
  <div class="quick-actions_homepage">
    <ul class="quick-actions">
      <li class="btn-primary span3"> <a href="index.php"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
      <li class="bg_lg span3"> <a href="kategori.php"> <i class="icon-shopping-cart"></i> Kategori Wisata</a> </li>
      <li class="bg_lo span4"> <a href="cafe.php"> <i class="icon-sitemap"></i> Data Cafe</a> </li>
      <li class="btn-warning span7"> <a href="wisata.php"> <i class="icon-plane"></i> Data Wisata Sumut</a> </li>
      <li class="bg_lb span3"> <a href="logout.php"> <i class="icon-globe"></i>Logout</a> </li>
    </ul>
  </div>
  <!--BARIS 2-->
  <div class="container-fluid">
    <div class="row-fluid">
      <!--DATA PAKET-->
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Wisata Terbaru</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <?php
            $sql = "SELECT * FROM tbwisata ORDER BY kdwisata DESC LIMIT 3";
            $hsl = mysqli_query($con, $sql);
            while ($data=mysqli_fetch_array($hsl)) {
            ?>
            <ul class="recent-posts">
              <li>
                <div class="article-post"><strong>Paket Wisata <?php echo $data['wisata'] ?></strong>
                  <p>
                    <?php echo $data['lokasi'] ?>
                    <br><?php echo "<img src='../../front/images/wisata/$data[image]' />";?>
                    <br><b><?php echo $data['tiket'] ?></b>
                  </p>
                </div>
              </li>
              <?php 
              }
              ?>
              <li>
                <a href="paket.php" class="btn btn-warning btn-mini"> View All</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--END DATA PAKET-->
      
      <!--DATA GUIDE TOUR-->
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>Data Tongkrongan Sumut</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <?php
            $sql = "SELECT * FROM tbtongkrongan ORDER BY kdcafe DESC LIMIT 3";
            $hsl = mysqli_query($con, $sql);
            while ($data=mysqli_fetch_array($hsl)) {
            ?>
            <ul class="recent-posts">
              <li>
                <div class="article-post"><strong><?php echo $data['nama'] ?></strong>
                  <p>
                    <?php echo $data['lokasi'] ?>
                    <br><?php echo "<img src='../../front/images/wisata/$data[cover]' />";?>
                    <br>Jam Buka : <b><?php echo $data['waktu'] ?></b>
                  </p>
                </div>
              </li>
              <?php 
              }
              ?>
              <li>
                <a href="paket.php" class="btn btn-warning btn-mini"> View All</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--END DATA GUIDE TOUR-->
<hr/>
</div>
<!--End-Action boxes--> 

</div>
</div>
<!--end-main-container-part-->

<?php include 'footer.php'; ?>