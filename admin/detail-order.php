<?php require "../koneksi.php" ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<?php
					$id_order = $_GET['id'];
					$query = "SELECT * FROM tbl_order o JOIN tbl_pelanggan p ON o.id_pelanggan=p.id_pelanggan WHERE id_order='$id_order'";
					$result = mysqli_query($db,$query);
					$data = mysqli_fetch_assoc($result);
					$tgl = $data['tgl_order'];
					$status = $data['status'];
				?>
				<div class="row">
					<div class="col-9">
						<address>
							<strong>Pelanggan:</strong><br>
							<?php echo $data['nm_pelanggan'] ?><br>
							<strong>Email:</strong><br>
							<?php echo $data['email'] ?><br>
						</address>
					</div>
					<div class="col-3 text-right">
						<address>
							<strong>Alamat Penerima:</strong><br>
							<?php echo $data['nm_penerima']; ?><br>
							<strong>Alamat Pengiriman:</strong><br>
							<?php echo $data['alamat_pengiriman'];?><br>
							<strong>Kode Pos:</strong><br>
							<?php echo $data['kode_pos'];?><br>
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
                                    echo "<span class='badge badge-warning'>".$status."</span>";
                                }
                                elseif ($status == 'Sudah Dibayar') {
                                    echo "<span class='badge badge-secondary'>".$status."</span>";
                                }
                                elseif ($status == 'Menyiapkan Barang') {
                                    echo "<span class='badge badge-info'>".$status."</span>";
								}
								elseif ($status == 'Barang Dikirim') {
									echo "<span class='badge badge-danger'>".$status."</span></br>";
									echo "<span style='font-size: small;'>Resi: ".$data['no_resi']."</span>";
								}
								elseif ($status == 'Barang Diterima') {
                                    echo "<span class='badge badge-success'>".$status."</span>";
                                }
                            ?>
							<br>
							<br></address>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Gambar</th>
							<th scope="col">Nama Barang</th>
							<th scope="col">Harga</th>
							<th scope="col" class="text-center">Jumlah</th>
							<th scope="col" class="text-right">Subharga</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$id_order=$_GET['id'];
							$order = "SELECT ongkir,total_order FROM tbl_order WHERE id_order='$id_order'";
                        	$res = mysqli_query($db,$order);
                            $dta = mysqli_fetch_assoc($res);

                            $subtotal = 0;
                            $qbarang="SELECT * FROM tbl_detail_order d JOIN tbl_barang p ON d.id_barang=p.id_barang WHERE id_order = '$id_order'";
                            $rbarang=mysqli_query($db,$qbarang);
                            while ($barang = mysqli_fetch_assoc($rbarang)) {
                        ?>
						<tr>
							<td class="product-list-img">
								<?php if($barang['gambar']!=null):?>
								<img width="40" src="assets/images/foto_barang/<?php echo $barang['gambar']?>"
									class="img-fluid" alt="tbl">
								<?php endif;?>
							</td>
							<td><?php echo $barang['nm_barang']; ?></td>
							<td>Rp. <?php echo number_format($barang['harga']);?></td>
							<td class="text-center"><?php echo $barang['jml_order'];?> </td>
							<td class="text-right">Rp.
								<?php echo number_format($barang['subharga']);?></td>
						</tr>
						<?php 
							$subtotal+=$barang['subharga'];
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
				<a href="index.php?pages=order" class="btn btn-secondary waves-effect">Kembali</a>
			</div>
			<div class="d-print-none">
            <div class="pull-right">
            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
            </div>
            </div>
		</div>
	</div>
</div>