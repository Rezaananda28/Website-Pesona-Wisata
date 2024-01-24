<?php $halaman = "wisata"; ?>
<?php include 'header.php'; ?>

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
<div id="content-header">
	<div id="breadcrumb">
		<a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a class="current"><i class="icon-shopping-cart"></i>Wisata</a> 
	</div> 
    <h1>Data Wisata di Sumut</h1>
    <a style="margin-left:25px" data-toggle="modal" data-target="#myModal" class="btn btn-info"><i class="icon-plus"></i>&nbsp Wisata Baru</a>

</div>

<div class="container-fluid">
<hr>
	<div class="widget-box">
		<div class="widget-content nopadding">
            <table class="table table-bordered data-table" width="100%">
              <thead>
                <tr>
                	<th width="5%">No.</th>
					<th width="20%">Wisata</th>
					<th width="10%">Kategori</th>
					<th width="40%">Lokasi</th>
					<th width="18%">Opsi</th>
                </tr>
              </thead>
              <tbody>
<?php
$sql = "SELECT * FROM tbwisata INNER JOIN tbkategori ON(tbwisata.kdkategori = tbkategori.kdkategori) ORDER BY kdwisata DESC";
$hsl = mysqli_query($con, $sql);
$nomor = 1;
while ($data=mysqli_fetch_array($hsl)) {
echo "<tr>";
echo "<td>$nomor</td>";
$id = $data["kdwisata"];
$wisata = $data["wisata"];
$kategori = $data["kategori"];
$lokasi = $data["lokasi"];
echo "<td>$wisata</td>";
echo "<td>$kategori</td>";
echo "<td>$lokasi</td>";
echo "<td><a class='btn btn-info' href='detail-wisata.php?id=$id'>Detail</a> "; 
echo "<a class='btn btn-success' href='edit-wisata.php?id=$id'>Edit</a> ";
echo "<a class='btn btn-danger' href='hapus-wisata.php?id=$id' onclick=\"return confirm('Yakin Mau Dihapus?');\">Hapus</a></td>";
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
				<h4 class="modal-title">Wisata Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tambah-wisata-act.php" method="post">
					<div class="control-group">
			          <label class="control-label">Nama Tempat Wisata :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="wisata" placeholder="Wisata Baru" />
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Wisata :</label>
			          <div class="controls">
		                <select id="kdkategori" name="kdkategori">
		                <option value="" selected disabled>Pilih Kategori</option>
		                  <?php
		                  $sql = "SELECT * FROM tbkategori ORDER BY kdkategori";
		                  $hsl = mysqli_query($con, $sql);
		                  while ($data=mysqli_fetch_array($hsl)) {
		                  ?>
		                <option value="<?php echo $data['kdkategori'] ?>"><?php echo $data['kategori'] ?></option>
		                  <?php
		                  }
		                  ?>
		              	</select>
		              </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Lokasi :</label>
			          <div class="controls">
			            <textarea class="span5" name="lokasi" placeholder="Lokasi Wisata" ></textarea>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Artikel Pembuka :</label>
			          <div class="controls">
			            <textarea class="span5" name="ket1" placeholder="Artikel Pembuka" ></textarea>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Artikel Penutup :</label>
			          <div class="controls">
			            <textarea class="span5" name="ket2" placeholder="Artikel Penutup" ></textarea>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Unggah Foto :</label>
			          <div class="controls">
			            <input type="file" class="span5" name="image" />
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Akses menuju wisata :</label>
			          <div class="controls">
			            <textarea class="span5" name="akses" placeholder="Lokasi Wisata" ></textarea>
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Jam Operasional :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="waktu" placeholder="Jam Buka dan Jam Tutup" />
			          </div>
			        </div>
			        <div class="control-group">
			          <label class="control-label">Harga Tiket :</label>
			          <div class="controls">
			            <input type="text" class="span5" name="tiket" placeholder="Harga Tiket" />
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