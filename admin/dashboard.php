<?php require "../koneksi.php"; ?>

<?php
$q = "SELECT * FROM tbl_barang a JOIN tbl_kat_barang b ON a.id_kategori=b.id_kategori GROUP BY nm_kategori";
$res = mysqli_query($db, $q);

$q2 = "SELECT SUM(stok) as jml FROM tbl_barang p JOIN tbl_kat_barang t ON p.id_kategori = t.id_kategori GROUP BY nm_kategori";
$res2 = mysqli_query($db, $q2);

$q3 = "SELECT SUM(jml_pembayaran) as jml FROM tbl_pembayaran";
$res3 = mysqli_query($db, $q3);
$dta3 = mysqli_fetch_assoc($res3);

$q4 = "SELECT COUNT(id_pelanggan) as jml FROM tbl_pelanggan";
$res4 = mysqli_query($db, $q4);
$dta4 = mysqli_fetch_assoc($res4);

$q5 = "SELECT SUM(stok) as jml FROM tbl_barang";
$res5 = mysqli_query($db, $q5);
$dta5 = mysqli_fetch_assoc($res5);

$q6 = "SELECT COUNT(id_artikel) as jml FROM tbl_artikel";
$res6 = mysqli_query($db, $q6);
$dta6 = mysqli_fetch_assoc($res6);

$q7 = "SELECT SUM(jml_pembayaran) as jml FROM tbl_pembayaran_service";
$res7 = mysqli_query($db, $q7);
$dta7 = mysqli_fetch_assoc($res7);
?>

<script type="text/javascript" src="assets/js/Chart.js"></script>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-xl-3">
			<div class="mini-stat clearfix bg-orange">
				<span class="font-40 text-white mr-0 float-right"><i class="mdi mdi-cart-outline"></i></span>
				<div class="mini-stat-info mt-3 float-left">
					<span style="font-size: small;" class="text-white">Total Pendapatan</span>
				</div>
				<div class="clearfix"></div>
				<p class=" mb-0 m-t-10 text-muted">
				<h4 class="counter font-light mt-0 text-white">Rp. <?php echo number_format($dta3['jml']); ?></h4>
				</p>
			</div>
		</div>
		<div class="col-md-6 col-xl-3">
			<div class="mini-stat clearfix bg-orange">
				<span class="font-40 text-white mr-0 float-right"><i class="mdi mdi-cart-outline"></i></span>
				<div class="mini-stat-info mt-3 float-left">
					<span style="font-size: small;" class="text-white">Total Pendapatan Service</span>
				</div>
				<div class="clearfix"></div>
				<p class=" mb-0 m-t-10 text-muted">
				<h4 class="counter font-light mt-0 text-white">Rp. <?php echo number_format($dta7['jml']); ?></h4>
				</p>
			</div>
		</div>
		<div class="col-md-6 col-xl-3">
			<div class="mini-stat clearfix bg-primary">
				<span class="font-40 text-white mr-0 float-right"><i class="mdi mdi-account-multiple"></i></span>
				<div class="mini-stat-info mt-3 float-left">
					<span style="font-size: small;" class="text-white">Total Member</span>
				</div>
				<div class="clearfix"></div>
				<p class=" mb-0 m-t-10 text-muted">
				<h4 class="counter font-light mt-0 text-white"><?php echo number_format($dta4['jml']); ?> Orang</h4>
				</p>
			</div>
		</div>
		<div class="col-md-6 col-xl-3">
			<div class="mini-stat clearfix bg-success">
				<span class="font-40 text-white mr-0 float-right"><i class="mdi mdi-gift"></i></span>
				<div class="mini-stat-info mt-3 float-left">
					<span style="font-size: small;" class="text-white">Total barang</span>
				</div>
				<div class="clearfix"></div>
				<p class=" mb-0 m-t-10 text-muted">
				<h4 class="counter font-light mt-0 text-white"><?php echo number_format($dta5['jml']); ?> Unit</h4>
				</p>
			</div>
		</div>
		<div class="col-md-6 col-xl-3">
			<div class="mini-stat clearfix bg-purple">
				<span class="font-40 text-white mr-0 float-right"><i class="mdi mdi-lead-pencil"></i></span>
				<div class="mini-stat-info mt-3 float-left">
					<span style="font-size: small;" class="text-white">Total Artikel</span>
				</div>
				<div class="clearfix"></div>
				<p class=" mb-0 m-t-10 text-muted">
				<h4 class="counter font-light mt-0 text-white"><?php echo number_format($dta6['jml']); ?> Artikel</h4>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="stok">
	<div class="container">
		<div class="card pr-4">
			<div class="card-body">
				<canvas id="myChart"></canvas>
			</div>
		</div>
	</div>
</div>
<br>
<div class="stok">
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h5 style="color: red;">Orderan Service Mendekati Deadline</h5>
			</div>
			<div class="card-body">
				<table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>No Order</th>
							<th>Nama Pelanggan</th>
							<th>Tanggal Order</th>
							<th>Status</th>
							<th>Total</th>
							<th>Deadline</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$query = "SELECT * FROM tbl_order_service WHERE status='Sedang Dikerjakan' AND deadline <= DATE_ADD(CURDATE(), INTERVAL 1 WEEK)";
						$result = mysqli_query($db, $query);
						while ($data = mysqli_fetch_assoc($result)) {
							$tgl = $data['tgl_order'];
							$status = $data['status'];
						?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $data['id_orderservice'] ?></td>
								<td><?php echo $data['nm_pelanggan'] ?></td>
								<td><?php echo date("d/m/Y", strtotime($tgl)); ?></td>
								<td>
									<?php
									if ($status == 'Belum Dibayar') {
										echo "<span class='badge badge-danger'>" . $status . "</span>";
									} elseif ($status == 'Sudah Dibayar') {
										echo "<span class='badge badge-secondary'>" . $status . "</span>";
									} elseif ($status == 'Disetujui') {
										echo "<span class='badge badge-info'>" . $status . "</span>";
									} elseif ($status == 'Sedang Dikerjakan') {
										echo "<span class='badge badge-warning'>" . $status . "</span>";
									} elseif ($status == 'Service Selesai') {
										echo "<span class='badge badge-primary'>" . $status . "</span>";
									} elseif ($status == 'Selesai') {
										echo "<span class='badge badge-success'>" . $status . "</span>";
									} elseif ($status == 'Ditolak') {
										echo "<span class='badge badge-danger'>" . $status . "</span>";
									}
									?>
								</td>
								<td>Rp. <?php echo number_format($data['total_order']) ?></td>
								<td><?php echo date("d/m/Y", strtotime($data['deadline'])); ?></td>
							</tr>
						<?php
							$no++;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [<?Php while ($row = mysqli_fetch_array($res)) {
							echo '"' . $row['nm_kategori'] . '",';
						} ?>],
			datasets: [{
				label: 'Stok barang',
				data: [<?Php while ($row = mysqli_fetch_array($res2)) {
							echo '"' . $row['jml'] . '",';
						} ?>],
				backgroundColor: [
					'rgba(255, 99, 132, 0.8)',
					'rgba(54, 162, 235, 0.8)',
					'rgba(255, 206, 86, 0.8)',
					'rgba(75, 192, 192, 0.8)',
					'rgba(153, 102, 255, 0.8)',
					'rgba(255, 159, 64, 0.8)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 3
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>