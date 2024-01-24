<?php $halaman = "wisata"; ?>
<?php include 'header.php'; ?>
<?php
include("koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM tbwisata WHERE kdwisata=$id";
$rpelanggan = mysqli_query($con,$sql);
$df = mysqli_fetch_array($rpelanggan);                                     
$wisata = $df["wisata"];
$lokasi = $df["lokasi"];
$akses = $df["akses"];
$waktu = $df["waktu"];
$tiket = $df["tiket"];
$ket1 = $df["ket1"];
$ket2 = $df["ket2"];
echo '';
?>

<!--main-container-part-->
<div id="content">
	<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="kategori.php" title="Back to Kategori" class="tip-bottom"><i class="icon-group"></i> Wisata</a>
		<a class="current">Edit</a>
	</div>
    <h1>Wisata - Edit!</h1>
</div>

<div class="container-fluid">
<hr>
  <div class="widget-box">
    <div class="widget-content nopadding">
	<form action="edit-wisata-act.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		    <div class="control-group">
          <label class="control-label">Judul  :</label>
          <div class="controls">
            <input type="text" class="span5" name="wisata" value="<?php echo $wisata;?>" placeholder="Edit Kategori Wisata" />
          </div>
        </div>
        <div class="control-group">
          		<label class="control-label">Lokasi  :</label>
          			<div class="controls">
            		<textarea class="span5" name="lokasi"><?php echo $lokasi;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Akses Lokasi :</label>
          			<div class="controls">
            		<textarea class="span5" name="akses"><?php echo $akses;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Jam Buka  :</label>
          			<div class="controls">
            		<input type="text" class="span5" name="waktu" value="<?php echo $waktu;?>" />
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Info Tiket  :</label>
          			<div class="controls">
            		<input type="text" class="span5" name="tiket" value="<?php echo $tiket;?>" />
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Artikel Pembuka :</label>
          			<div class="controls">
            		<textarea class="span5" name="ket1"><?php echo $ket1;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Artikel Penutup :</label>
          			<div class="controls">
            		<textarea class="span5" name="ket2"><?php echo $ket2;?></textarea>
          			</div>
        		</div>
        <div class="form-actions">
        	<div class="controls">
	          <a href="wisata.php" class="btn btn-danger col-md-2"> Kembali</a>
            <input type="submit" class="btn btn-primary" value="Simpan Edit">
      		</div>
        </div>
	</form>
</div>
</div>
</div>
<!--End-breadcrumbs-->
</div>
<!--end-main-container-part-->
<?php include 'footer.php'; ?>