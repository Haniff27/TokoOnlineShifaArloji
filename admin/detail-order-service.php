<?php require "../koneksi.php" ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_order_service o JOIN tbl_pelanggan p ON o.id_pelanggan=p.id_pelanggan WHERE id_orderservice='$id'";
                $result = mysqli_query($db, $query);
                $data = mysqli_fetch_assoc($result);
                $tgl = $data['tgl_order'];
                $alamat = $data['alamat'];
                $status = $data['status'];
                ?>
                <div class="row">
                    <div class="col-9">
                        <address>
                            <strong>Pelanggan:</strong><br>
                            <?php echo $data['nm_pelanggan']; ?> <br>
                            <?php echo $data['telp']; ?><br>
                            <?php echo $data['email']; ?>
                        </address>
                    </div>
                    <div class="col-3 text-right">
                        <address>
                            <strong>Alamat:</strong><br>
                            <?php echo $data['alamat']; ?>
                        </address> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 m-t-30">
                        <address>
                            <strong>Tanggal Order</strong><br>
                            <?php echo date("F d, Y", strtotime($tgl)); ?>
                        </address>
                    </div>
                    <div class="col-6 m-t-30 text-right">
                        <address>
                            <strong>Status</strong><br>
                            <?php
                            if ($status == 'Belum Dibayar') {
                                echo "<span class='badge badge-warning'>" . $status . "</span>";
                            } elseif ($status == 'Sudah Dibayar') {
                                echo "<span class='badge badge-secondary'>" . $status . "</span>";
                            } elseif ($status == 'Disetujui') {
                                echo "<span class='badge badge-info'>" . $status . "</span>";
                            } elseif ($status == 'Sedang Dikerjakan') {
                                echo "<span class='badge badge-warning'>" . $status . "</span></br>";
                            } elseif ($status == 'Service Selesai') {
                                echo "<span class='badge badge-primary'>" . $status . "</span>";
                            } elseif ($status == 'Selesai') {
                                echo "<span class='badge badge-success'>" . $status . "</span>";
                            } elseif ($status == 'Ditolak') {
                                echo "<span class='badge badge-danger'>" . $status . "</span>";
                            }
                            ?>
                            <br>
                            <br>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <address>
                            <strong>Catatan:</strong><br>
                            <?php echo $data['catatan']; ?> <br>
                        </address>
                    </div>
                    <div class="col-3 text-right">
                        <address>
                            <strong>Deadline:</strong><br>
                            <?php echo date("F d, Y H:i", strtotime($data['deadline'])); ?>

                        </address>
                    </div>
                </div>
                <table class="table">
					<thead>
						<tr>
							<th scope="col">Gambar</th>
							<th scope="col">Nama Service</th>
							<th scope="col">Harga</th>
							<th scope="col" class="text-center">Jumlah</th>
							<th scope="col" class="text-right">Subharga</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                        $id_order = $_GET['id'];
                        $order = "SELECT * FROM tbl_order_service WHERE id_orderservice='$id_order'";
                        $res = mysqli_query($db, $order);
                        $dta = mysqli_fetch_assoc($res);

                        $subtotal = 0;
                        $qservice = "SELECT * FROM tbl_detail_service d JOIN tbl_service p ON d.id_service=p.id_service WHERE id_orderservice = '$id_order'";
                        $rservice = mysqli_query($db, $qservice);
                        while ($service = mysqli_fetch_assoc($rservice)) {
                        ?>
						<tr>
							<td class="product-list-img">
								<?php if($service['gambar']!=null):?>
								<img width="40" src="assets/images/foto_service/<?php echo $service['gambar']?>"
									class="img-fluid" alt="tbl">
								<?php endif;?>
							</td>
							<td><?php echo $service['nm_service']; ?></td>
							<td>Rp. <?php echo number_format($service['harga']);?></td>
							<td class="text-center"><?php echo $service['jml_order'];?> </td>
							<td class="text-right">Rp.
								<?php echo number_format($service['subharga']);?></td>
						</tr>
						<?php 
							$subtotal+=$service['subharga'];
                            } 
                        ?>
						<tr>
							<td class="thick-line"></td>
							<td class="thick-line"></td>
							<td class="thick-line"></td>
							<td class="thick-line text-center">
								<strong>Subtotal</strong>
							</td>
							<td class="thick-line text-right">Rp.<?php echo number_format($subtotal);?></td>
						</tr>
						<tr>
							<td class="no-line"></td>
							<td class="no-line"></td>
							<td class="no-line"></td>
							<td class="no-line text-center">
								<strong>Shipping</strong>
							</td>
							<td class="no-line text-right">Rp. <?php echo number_format($dta['ongkir']);?></td>
						</tr>
						<tr>
							<td class="no-line"></td>
							<td class="no-line"></td>
							<td class="no-line"></td>
							<td class="no-line text-center">
								<strong>Total</strong>
							</td>
							<td class="no-line text-right">
								<h4 class="m-0">Rp. <?php echo number_format($dta['total_order']);?></h4>
							</td>
						</tr>
					</tbody>
				</table>
                <a href="index.php?pages=order-service" class="btn btn-secondary waves-effect">Kembali</a>
            </div>
            <div class="d-print-none">
            <div class="pull-right">
            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
            </div>
            </div>
        </div>
    </div>
</div>