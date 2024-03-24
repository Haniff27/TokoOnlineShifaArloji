<?php require "../koneksi.php" ?>
<?php require "query.php" ?>


<?php
$query = "SELECT COUNT(*) AS jml FROM tbl_order_service WHERE status='Belum Dibayar'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_array($result);
/* echo $data['jml']; */

?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Orderan Service</h5>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = "SELECT * FROM tbl_order_service";
                        $result = mysqli_query($db, $query);
                        while ($data = mysqli_fetch_assoc($result)) {
                            $tgl = $data['tgl_order'];
                            $status = $data['status'];
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
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
                                <td>
                                    <a href="index.php?pages=detail-order-service&id=<?php echo $data['id_orderservice']; ?>" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="mdi mdi-buffer font-18"></i></a>
                                    <?php if ($data['status'] == 'Sudah Dibayar') { ?>
                                        <a href="index.php?pages=pembayaran-service&id=<?php echo $data['id_orderservice']; ?>" class="btn btn-secondary btn-sm">Lihat Pembayaran</a>
                                    <?php } elseif ($data['status'] != 'Selesai' && $data['status'] != 'Belum Dibayar') { ?>
                                        <a href="index.php?pages=pembayaran-service&id=<?php echo $data['id_orderservice']; ?>" class="btn btn-info btn-sm">Edit Orderan</a>
                                    <?php } ?>
                                </td>
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