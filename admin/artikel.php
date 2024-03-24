<?php require "../koneksi.php" ?>

<!-- Lihat Data Produk -->
<?php
	$query = "SELECT * FROM tbl_artikel p JOIN tbl_kat_artikel k ON p.id_kategori=k.id_kategori";
    $result = mysqli_query($db, $query);
?>
<?php
if (isset($_GET['id']))
{
    //mengambil id artikel
    $id = $_GET['id'];
    //menghapus data
    $queryHapus = "DELETE FROM tbl_artikel WHERE id_artikel='$id'";
    $execHapus = mysqli_query($db, $queryHapus);

    if ($execHapus)
    {
        //menampilkan pesan dan redirec ke halaman produk
        echo "<script>alert('Artikel sudah dihapus');</script>";
        echo "<script>location='index.php?pages=artikel';</script>";
    }
}
?>

<div class="row">
	<div class="col-12">
		<div class="card">
		<div class="card-header">
                <h5>SEMUA ARTIKEL</h5>
            </div>
			<div class="card-body">
				<table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%"
					cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Kategori</th>
							<th>Tgl Terbit</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                        <?php $no = 1;?>
                        <?php while ($data = mysqli_fetch_array($result)) : ?>
                        <?php $tgl = $data['tgl']; ?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $data['judul'] ?></td>
							<td><?php echo $data['nm_kategori'] ?></td>
							<td><?php echo date("d/m/Y", strtotime($tgl)); ?></td>
							<td>
								<a href="index.php?pages=ubah-artikel&id=<?php echo $data['id_artikel']; ?>" class="m-r-15 text-muted" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Edit"><i
										class="mdi mdi-pencil font-18"></i></a>
								<a href="index.php?pages=artikel&id=<?php echo $data['id_artikel']; ?>" class="text-muted" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel tersebut?')"><i
										class="mdi mdi-close font-18"></i></a>
							</td>
                        </tr>
                        <?php $no++; ?>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>