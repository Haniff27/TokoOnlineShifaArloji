<?php include "../koneksi.php" ?>

<!-- Menambahkan Data  -->
<?php
if (isset($_POST['tambah']))
{
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $Gambar = $_FILES['img']['name'];
    $lokasi = $_FILES['img']['tmp_name'];

    if (!empty($lokasi)) //Jika temporari tidak kosong 
    { 
		//memindah file gambar dari file temporari ke folder assets/images/foto_Service/
		move_uploaded_file($lokasi, "assets/images/foto_service/" . $Gambar);
		//Memasukkan data ke tabel tbl_Service
        $query_add = "INSERT INTO tbl_service
                (nm_service,harga,stok,gambar,deskripsi)
				VALUE('$nama', '$harga', '$stok','$Gambar', '$deskripsi')";
		$exec_add = mysqli_query($db, $query_add);
		//Menampilkan pesan jika data berhasil di masukkan
        echo "<p class='alert alert-success' role='alert'>
                Berhasil Menambahkan Data Service.<br />
                <a href='index.php?pages=service'>Lihat Semua Service</a>
                </p>";
    }
    else //jika temporari kosong
    {
		//Menampilkan pesan jika gambar belum dimasukkan
        echo "<p class='alert alert-danger' role='alert'>
                [Error] Upload Gambar Gagal.<br />
                </p>";
    }
};
?>


<div class="row">
	<div class="col-12">
		<div class="card m-b-20">
			<div class="card-body">
				<form method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nama Service</label>
								<input name="nama" type="text" class="form-control" required></div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Stok Service</label>
								<input name="stok" type="number" class="form-control" required></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Harga Service</label>
								<input name="harga" type="number" class="form-control" required></div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Masukkan Gambar Service</label>
								<input type="file" class="filestyle" data-buttonname="btn-secondary" name="img" required></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Deskripsi Service</label>
								<textarea id="elm1" name="deskripsi"></textarea>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success waves-effect waves-light" name="tambah">Tambah Service</button>
				</form>
			</div>
		</div>
	</div>
</div>