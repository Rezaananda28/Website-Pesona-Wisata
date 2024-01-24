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

<!--main-container-part-->
<div id="content">
	<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="cafe.php" title="Go to Cafe" class="tip-bottom"><i class="icon-coffee"></i>Tongkrongan (Cafe)</a>
		<a class="current"><i class="icon-pencil"></i>Edit</a>
	</div>
    <h1>Cafe - Edit!</h1>
</div>

<div class="container-fluid">
<hr>
  <div class="widget-box">
    <div class="widget-content nopadding">
	<form action="edit-cafe-act.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		    <div class="control-group">
          <label class="control-label">Nama Cafe  :</label>
          <div class="controls">
            <input type="text" class="span5" name="nama" value="<?php echo $nama;?>" placeholder="Edit Kategori Wisata" />
          </div>
        </div>
        <div class="control-group">
          		<label class="control-label">Lokasi  :</label>
          			<div class="controls">
            		<textarea class="span5" name="lokasi"><?php echo $lokasi;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Keterangan :</label>
          			<div class="controls">
            		<textarea class="span5" name="ket"><?php echo $ket;?></textarea>
          			</div>
        		</div>
        		<div class="control-group">
          		<label class="control-label">Jam Buka  :</label>
          			<div class="controls">
            		<input type="text" class="span5" name="waktu" value="<?php echo $waktu;?>" />
            		<input type="hidden" class="span5" name="tgl" value="<?php echo date('Y-m-d') ?>"/>
          			</div>
        		</div>
        <div class="form-actions">
        	<div class="controls">
	          <a href="cafe.php" class="btn btn-danger col-md-2"> Kembali</a>
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