<?php require "../koneksi.php"; ?>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <?php
                $id_order = $_GET['id'];
                $query = "SELECT * FROM tbl_pembayaran_service JOIN tbl_order_service ON tbl_pembayaran_service.id_orderservice = tbl_order_service.id_orderservice WHERE tbl_pembayaran_service.id_orderservice='$id_order'";
                $result = mysqli_query($db, $query);
                $data = mysqli_fetch_assoc($result);
                $tgl = $data['tgl_bayar'];
                ?>
                <label for="productname">Bukti Transfer</label><br>
                <img src="../assets/img/bukti-transfer-service/<?php echo $data['bukti_transfer'] ?>" alt="product img" class="img-fluid" style="max-width: 200px;" /><br>
                <br>
                <table class="table">
                    <tr>
                        <th>Nama Pembayar</th>
                        <td><?php echo $data['nm_pembayar'] ?></td>
                    </tr>
                    <tr>
                        <th>Bank</th>
                        <td><?php echo $data['nm_bank'] ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><?php echo date("d/m/Y", strtotime($tgl)); ?></td>
                    </tr>
                    <tr>
                        <th>Sudah Dibayar</th>
                        <td><?php echo number_format($data['jml_pembayaran']); ?></td>
                    </tr>
                    <tr>
                        <th>Total yang harus dibayar</th>
                        <td><?php echo number_format($data['total_order']); ?></td>
                    </tr>
                    <tr>
                        <th>Catatan</th>
                        <td><?php echo $data['catatan'] ?></td>
                    </tr>
                    <tr>
                        <th>Deadline</th>
                        <td><?php echo $data['deadline'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="control-label">Ubah Status</label>
                        <select class="form-control select2" name="status">
                            <option>- pilih status -</option>
                            <option value="Disetujui">Disetujui</option>
                            <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                            <option value="Service Selesai">Service Selesai</option>
                            <option value="Selesai">Selesai</option>
                            <option value="Ditolak">Ditolak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deadline">Ubah Deadline</label>
                        <input id="deadline" name="deadline" type="datetime-local" value="<?= $data['deadline'] ?>" class="form-control">
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary waves-effect waves-light pl-5 pr-5 mt-3 pull-right">Edit</button>
                </form>
                <?php
                if (isset($_POST['edit'])) {
                    $status = $_POST['status'];
                    $getDeadline = $_POST['deadline'];
                    $deadline = date('Y-m-d H:i:s', strtotime($getDeadline));
                    $qedit = "UPDATE tbl_order_service SET status='$status', deadline='$deadline' WHERE id_orderservice='$id_order'";
                    $redit = mysqli_query($db, $qedit);

                    echo "<script>alert('Status Sudah diubah menjadi " . $status . "')</script>";
                    echo "<script>location='index.php?pages=order-service';</script>";
                }
                ?>
            </div>
        </div>
    </div>
</div>