<?php require "../koneksi.php" ?>
<!-- Lihat Data barang -->
<?php
	$query = "SELECT * FROM tbl_barang JOIN tbl_kat_barang ON tbl_barang.id_kategori=tbl_kat_barang.id_kategori";
    $result = mysqli_query($db, $query);
?>

<?php


$q5 = "SELECT SUM(stok) as jml FROM tbl_barang";
$res5 = mysqli_query($db, $q5);
$dta5 = mysqli_fetch_assoc($res5);

?>

<script type="text/javascript" src="assets/js/Chart.js"></script>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-xl-3">
			<div class="mini-stat clearfix bg-success">
				<span class="font-40 text-white mr-0 float-right"><i class="mdi mdi-gift"></i></span>
				<div class="mini-stat-info mt-3 float-left">
					<span style="font-size: small;" class="text-white">Total Stok Barang</span>
				</div>
				<div class="clearfix"></div>
				<p class=" mb-0 m-t-10 text-muted">
				<h4 class="counter font-light mt-0 text-white"><?php echo number_format($dta5['jml']); ?> Unit</h4>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Data Barang
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Image</th>
                            <th>Nama Barang</th>
							<th>Berat (Kg) </th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php $ambil = $db->query("SELECT * FROM tbl_barang"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
								<td class="product-list-img">
								<?php if($pecah['gambar']!=null):?>
								<img width="200" src="assets/images/foto_barang/<?php echo $pecah['gambar']?>" class="img-fluid" alt="tbl">
								<?php endif;?>
								</td>
                                <td><?php echo $pecah['nm_barang'] ?></td>
								<td><?php echo $pecah['berat'] ?>	Kg</td>
                                <td><?php echo $pecah['harga'] ?></td>
                                <td><?php echo number_format($pecah['stok']) ?></td>
                                <td>
                                    <a href="index.php?pages=ubah-barang&id=<?php echo $pecah['id_barang']; ?>" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                    <a href="index.php?pages=barang&id=<?php echo $pecah['id_barang']; ?>" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus service tersebut?')"><i class="mdi mdi-close font-18"></i></a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_GET['id'])) {
   
    $id = $_GET['id'];
    $queryHapus = "DELETE FROM tbl_barang WHERE id_barang='$id'";
    $execHapus = mysqli_query($db, $queryHapus);

    if ($execHapus) {
        //menampilkan pesan dan redirec ke halaman barang
        echo "<script>alert('Service sudah dihapus');</script>";
        echo "<script>location='index.php?pages=barang';</script>";
    }
}
?>