<?php $halaman = "wisata"; ?>
<?php include 'header.php'; ?>
<?php
$sql = "SELECT * FROM tbwisata ORDER BY kdwisata DESC LIMIT 1";
$rpaket = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpaket);                                     
$kdwisata = $df["kdwisata"];
$wisata = $df["wisata"];
$lokasi = $df["lokasi"];
$tiket = $df["tiket"];
$akses = $df["akses"];
$waktu = $df["waktu"];
$image = $df["image"];
echo '';
?>
<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="order.php" title="Back to Order" class="tip-bottom"><i class="icon-th-list"></i> Wisata</a>
    <a class="current">Tambah</a> </div>
   </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
  <!--BARIS 2-->
  <div class="container-fluid">
    <div class="row-fluid">
      <!--DATA PAKET-->
      <div class="span7">
        <div class="widget-box">
          <div class="widget-title bg_ly"><span class="icon"><i class="icon-chevron-down"></i></span><h5><b>"<?php echo $wisata;?>"</b></h5>
          </div>
        <div class="widget-content nopadding">
        <form action="tambah-detail-act.php" method="post" class="form-horizontal">
        
        <div class="control-group">
          <label class="control-label">Galeri Gambar 1 :</label>
            <div class="controls">
            <input type="hidden" name="kdwisata" value="<?php echo $kdwisata; ?>"/>
            <input type="file" class="span5" name="g1" />
            </div>
        </div>
        <div class="control-group">
          <label class="control-label">Galeri Gambar 2 :</label>
            <div class="controls">
            <input type="file" class="span5" name="g2" />
            </div>
        </div>
        <div class="control-group">
          <label class="control-label">Galeri Gambar 3 :</label>
            <div class="controls">
            <input type="file" class="span5" name="g3" />
            </div>
        </div>
        <div class="control-group">
          <label class="control-label">Galeri Gambar 4 :</label>
            <div class="controls">
            <input type="file" class="span5" name="g4" />
            </div>
        </div>
        
        <div class="form-actions">
          <button type="submit" class="btn btn-info">Next</button>
        </div>
        </form>
        </div>
        </div>
      </div>
      <!--END DATA PAKET-->
      <!--PAKET POPULER-->
      <div class="span5">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>Keterangan Wisata</h5>
          </div>
          <div class="widget-content nopadding collapse in">
            <ul class="recent-posts">
              <li>

                <div class="article-post"><strong><?php echo $wisata;?></strong>
                  <p>
                    <?php
                    $sql = "SELECT * FROM tbwisata ORDER BY kdwisata DESC LIMIT 1";
                    $hsl = mysqli_query($con, $sql);
                    while ($data=mysqli_fetch_array($hsl)) {
                    ?>
                    Lokasi : <?php echo $data['lokasi'] ?>
                    <br><?php echo "<img src='../../front/images/wisata/$data[image]' />";?>
                    <br>Jam : <b><?php echo $data['waktu'] ?>
                    <br>Tiket : <b><?php echo $data['tiket'] ?></b>
                    <?php 
              }
              ?>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--END PAKET POPULER-->
    </div>
  </div>
    </div>
  </div>
<hr/>
</div>
<!--End-Action boxes--> 

</div>
<!--end-main-container-part-->
<script src="jquery-2.1.4.min.js"></script>
<script src="select2-master/dist/js/select2.min.js"></script>

<?php include 'footer.php'; ?>