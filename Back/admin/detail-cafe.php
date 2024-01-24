<?php $halaman = "cafe"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbtongkrongan  WHERE kdcafe=$id";
$rpaket = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpaket);                                     
$nama = $df["nama"];
$lokasi = $df["lokasi"];
$waktu = $df["waktu"];
$tgl = $df["tgl"];
$ket = $df["ket"];
$cover = $df["cover"];
echo '';
?>
<div id="content">
<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="cafe.php" title="Go to Wisata" class="tip-bottom"><i class="icon-coffee"></i>Tongkrongan (Cafe)</a>
		<a class="current"><i class="icon-book"></i>Detail</a>
	</div>
    <h1> </h1>
    <a style="margin-left:25px" href="cafe.php" class="btn btn-success"><i class="icon-home"></i>&nbsp Kembali</a>
</div>

<!--Action boxes-->
<div class="container-fluid">
  <div class="row-fluid">
      <!--PERTAMA-->
      	<div class="widget-box">
      	  	<div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            	<h5>Detail Cafe "<?php echo $nama;?>"</h5>
          	</div>
       		<div class="widget-content nopadding">
			<form method="post" class="form-horizontal">
		    	<div class="control-group">
          		<label class="control-label">Nama Cafe  :</label>
          			<div class="controls">
            		<input type="text" readonly class="span10" value="<?php echo $nama;?>" />
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Lokasi  :</label>
          			<div class="controls">
            		<textarea class="span10" readonly=""><?php echo $lokasi;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Gambar  :</label>
          			<div class="controls">
            		<?php echo "<img src='../../front/images/wisata/$cover' />";?>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Keterangan :</label>
          			<div class="controls">
            		<textarea class="span10" readonly=""><?php echo $ket;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Jam Buka  :</label>
          			<div class="controls">
            		<input type="text" readonly class="span10" value="<?php echo $waktu;?>" />
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Tanggal Input  :</label>
          			<div class="controls">
            		<input type="text" readonly class="span10" value="<?php echo $tgl;?>" />
          			</div>
        		</div>
			</form>
			</div>
      	</div>
      <!--END PERTAMA-->
  </div>
</div>
<!--End Action boxes-->

</div>
<!--end-main-container-part-->
<?php include 'footer.php'; ?>