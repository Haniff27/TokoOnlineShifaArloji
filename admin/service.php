<?php require "../koneksi.php" ?>
<!-- Lihat Data barang -->
<?php
	$query = ("SELECT * FROM tbl_service");
    $result = mysqli_query($db, $query);
?>

<?php


$q5 = "SELECT SUM(stok) as jml FROM tbl_service";
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
					<span style="font-size: small;" class="text-white">Total Stok Service</span>
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
                Data Service
                <div class="card-tools">
                    <a type="button" class="btn btn-success btn-sm" href="index.php?pages=tambah-service">
                        <i class=" fa fa-plus"></i> Tambah Service
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Service</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php $ambil = $db->query("SELECT * FROM tbl_service"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $pecah['nm_service'] ?></td>
                                <td><?php echo $pecah['harga'] ?></td>
                                <td><?php echo number_format($pecah['stok']) ?></td>
                                <td><?php echo $pecah['deskripsi'] ?></td>
                                <td>
                                    <a href="index.php?pages=ubah-service&id=<?php echo $pecah['id_service']; ?>" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                    <a href="index.php?pages=service&id=<?php echo $pecah['id_service']; ?>" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus service tersebut?')"><i class="mdi mdi-close font-18"></i></a>
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
    $queryHapus = "DELETE FROM tbl_service WHERE id_service='$id'";
    $execHapus = mysqli_query($db, $queryHapus);

    if ($execHapus) {
        //menampilkan pesan dan redirec ke halaman barang
        echo "<script>alert('Service sudah dihapus');</script>";
        echo "<script>location='index.php?pages=service';</script>";
    }
}
?>