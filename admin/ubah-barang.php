<?php require "../koneksi.php" ?>
<!-- Lihat Data barang -->
<?php 
$id = $_GET['id'];
$queryBarang = "SELECT * FROM tbl_barang WHERE id_barang='$id' ";
$resultBarang = mysqli_query($db, $queryBarang);
$barang = mysqli_fetch_assoc($resultBarang);
//query menampilkan list kategori
$queryKat = "SELECT * FROM tbl_kat_barang";
$resultKat = mysqli_query($db, $queryKat);
?>
<?php
$id = $_GET['id'];
if (isset($_POST['ubah'])) {
	$kategori = $_POST['id_kategori'];
    $nmBarang = $_POST['nama'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $nmGambar = $_FILES['img']['name'];
	$lokasi = $_FILES['img']['tmp_name'];
	
	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "assets/images/foto_barang/$nmGambar");

		$queryEdit = "UPDATE tbl_barang SET id_kategori='$kategori', nm_barang='$nmBarang', berat='$berat', harga='$harga', stok='$stok', gambar='$nmGambar', deskripsi='$deskripsi'
		WHERE id_barang='$id'";
		$resultEdit = mysqli_query($db, $queryEdit);
	}
	else {
		$queryEdit = "UPDATE tbl_barang SET id_kategori='$kategori', nm_barang='$nmBarang', berat='$berat', harga='$harga', stok='$stok', deskripsi='$deskripsi'
		WHERE id_barang='$id'";
		$resultEdit = mysqli_query($db, $queryEdit);
	}
	echo "<script>alert('Data barang sudah di ubah')</script>";
	echo "<script>location='index.php?pages=barang';</script>";
}

?>
<div class="row">
	<div class="col-12">
		<div class="card m-b-20">
		<div class="card-header">
                <h5>EDIT BARANG</h5>
            </div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nama Barang</label>
								<input name="nama" type="text" class="form-control"
									value="<?php echo $barang['nm_barang']; ?>"></div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">Kategori Barang</label>
								<select class="form-control select2" name="id_kategori">
									<option>-- Pilih Kategori --</option>
									<?php while($pilih = mysqli_fetch_array($resultKat)): ?>
									<?php $active = ($barang['id_kategori'] == $pilih['id_kategori'])?"selected":""?>
									<option value="<?php echo $pilih['id_kategori']?>" <?php echo $active?>>
										<?php echo $pilih['nm_kategori']?>
									</option>
									<?php endwhile;?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Berat Barang (Kg)</label>
								<input name="berat" type="text" class="form-control"
									value="<?php echo $barang['berat']; ?>"></div>
							<div class="form-group">
								<label>Stok Barang</label>
								<input name="stok" type="text" class="form-control"
									value="<?php echo $barang['stok']; ?>"></div>
							<div class="form-group">
								<label>Harga Barang</label>
								<input name="harga" type="text" class="form-control"
									value="<?php echo $barang['harga']; ?>"></div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Gambar Sebelumnya</label><br>
								<?php if($barang['gambar']!=null):?>
									<img src="assets/images/foto_barang/<?php echo $barang['gambar']; ?>" alt="product img" class="img-fluid"
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
								<label>Deskripsi Barang</label>
								<textarea id="elm1" name="deskripsi"><?php echo $barang['deskripsi']; ?></textarea>
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