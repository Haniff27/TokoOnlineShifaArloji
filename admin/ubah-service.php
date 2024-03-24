<?php require "../koneksi.php" ?>
<!-- Lihat Data Produk -->
<?php 
$id = $_GET['id'];
$queryService = "SELECT * FROM tbl_service WHERE id_service='$id' ";
$resultService = mysqli_query($db, $queryService);
$service = mysqli_fetch_assoc($resultService);
?>
<?php
$id = $_GET['id'];
if (isset($_POST['ubah'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $Gambar = $_FILES['img']['name'];
	$lokasi = $_FILES['img']['tmp_name'];
	
	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "assets/images/foto_service/$Gambar");

		$queryEdit = "UPDATE tbl_service SET  nm_service='$nama',harga='$harga', stok='$stok', gambar='$Gambar', deskripsi='$deskripsi'
		WHERE id_service='$id'";
		$resultEdit = mysqli_query($db, $queryEdit);
	}
	else {
		$queryEdit = "UPDATE tbl_service SET id_kategori='$kategori', nm_service='$nama', harga='$harga', stok='$stok', gambar='$Gambar', deskripsi='$deskripsi'
		WHERE id_service='$id'";
		$resultEdit = mysqli_query($db, $queryEdit);
	}
	echo "<script>alert('Data produk sudah di ubah')</script>";
	echo "<script>location='index.php?pages=service';</script>";
}

?>
<div class="row">
	<div class="col-12">
		<div class="card m-b-20">
		<div class="card-header">
                <h5>EDIT SERVICE</h5>
            </div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nama Service</label>
								<input name="nama" type="text" class="form-control"
									value="<?php echo $service['nm_service']; ?>"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Stok Service</label>
								<input name="stok" type="text" class="form-control"
									value="<?php echo $service['stok']; ?>"></div>
							<div class="form-group">
								<label>Harga Produk</label>
								<input name="harga" type="text" class="form-control"
									value="<?php echo $service['harga']; ?>"></div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Gambar Sebelumnya</label><br>
								<?php if($service['gambar']!=null):?>
									<img src="assets/images/foto_service/<?php echo $service['gambar']; ?>" alt="product img" class="img-fluid"
									style="max-height: 125px;" />
								<?php endif;?>
								
							</div>
							<div class="form-group">
								<label>Ganti Gambar</label>
								<input type="file" class="filestyle" data-buttonname="btn-secondary" name="img"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Deskripsi Produk</label>
								<textarea id="elm1" name="deskripsi"><?php echo $service['deskripsi']; ?></textarea>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success waves-effect waves-light" name="ubah">Ubah</button>
					<button type="submit" class="btn btn-secondary waves-effect">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>