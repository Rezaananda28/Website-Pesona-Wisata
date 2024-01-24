<?php $halaman = "kategori"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a class="current"><i class="icon-group"></i>Kategori</a> 
	</div> 
    <h1>Data Kategori Wisata</h1>
    <a style="margin-left:25px" data-toggle="modal" data-target="#myModal" class="btn btn-info"><i class="icon-plus"></i>&nbsp Kategori Baru</a>

</div>

<div class="container-fluid">
<hr>
	<div class="widget-box">
		<div class="widget-content nopadding">
            <table class="table table-bordered data-table" width="100%">
              <thead>
                <tr>
                	<th width="5%">No.</th>
					<th width="35%">Kategori</th>
					<th width="35%">Wisata</th>
					<th width="11%">Opsi</th>
                </tr>
              </thead>
              <tbody>
<?php
$sql = "SELECT * FROM tbkategori ORDER BY kdkategori DESC";
$hsl = mysqli_query($con, $sql);
$nomor = 1;
while ($data=mysqli_fetch_array($hsl)) {
echo "<tr>";
echo "<td>$nomor</td>";
$id = $data["kdkategori"];
$kategori = $data["kategori"];
$ket = $data["ket"];
echo "<td>$kategori</td>";
echo "<td>$ket</td>";
echo "<td><a class='btn btn-success' href='edit-kategori.php?id=$id'>Edit</a> "; 
echo"<a class='btn btn-danger' href='hapus-kategori.php?id=$id' onclick=\"return confirm('Yakin Mau Dihapus?');\">Hapus</a></td>";
echo "</tr>";
	$nomor++;
}
?>
            </tbody>
          	</table>
      	</div>
	</div>
</div>
<!--End-breadcrumbs-->

</div>
<!--end-main-container-part-->

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Kategori Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tambah-kategori-act.php" method="post">
					<div class="control-group">
			          <label class="control-label">Kategori :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="kategori" placeholder="Kategori Baru" />
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Wisata :</label>
			          <div class="controls">
		                <label>
		                  <input type="radio" name="ket" value="Wisata Alam" />
		                  Wisata Alam</label>
		                <label>
		                  <input type="radio" name="ket" value="Wisata Edukasi" />
		                  Wisata Edukasi</label>
		              </div>
			        </div>
			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>