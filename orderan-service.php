<?php require "header.php";

if (!isset($_SESSION["pelanggan"])) {
    echo "<script>alert('Silahkan Login Dulu');</script>";
    echo "<script>location='login.php';</script>";
}
$id = $_SESSION['pelanggan']['id_pelanggan'];
$query2 = "SELECT * FROM tbl_order_service WHERE id_pelanggan='$id'";
$result2 = mysqli_query($db, $query2);
$dta = mysqli_fetch_assoc($result2);
if (!$dta) {
    echo "<script type='text/javascript'>
        swal({
            title: 'Orderan Kosong',
            text: 'Silahkan Melakukan Pembelian Dulu !',
            icon: 'warning',
            dangerMode: true,
        }).then(okay => {
            if (okay) {
            window.location.href ='service.php';
            };
        });
        </script>";
}
?>


<style>
    .banner .img {
        width: 100%;
        height: 250px;
        background-image: url('assets/img/bg1.jpeg');
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        height: 250px;
        background-color: rgb(41, 41, 41, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding-top: 70px;
    }

    .box a {
        color: #0066FF;
    }

    .box a:hover {
        text-decoration: none;
        color: rgb(6, 87, 209);
    }
</style>
<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>RIWAYAT SERVICE</h3>
            <p>Home ><a href="#"> Orderan Service</a></p>
        </div>
    </div>
</div>

<div class="container bg-white rounded pb-4 pt-4">
    <div class="row">
        <div class="col-md-12">
            <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Service</th>
                        <th class="text-center">Status</th>
                        <th>Total Harga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = "SELECT *, id_orderservice as id_orderservice2 FROM tbl_order_service WHERE id_pelanggan='$id'";
                    $result = mysqli_query($db, $query);
                    while ($data = mysqli_fetch_assoc($result)) {
                        $tgl = $data['tgl_order'];
                        $status = $data['status'];
                    ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo date("F d, Y", strtotime($tgl)); ?></td>
                            <td>
                                    <?php
                                    $id_order =  $data['id_orderservice2'];
                                    $query2 = "SELECT * FROM tbl_detail_service JOIN tbl_service on tbl_detail_service.id_service = tbl_service.id_service WHERE id_orderservice='$id_order'";
                                    $result2 = mysqli_query($db, $query2);

                                    while ($data2 = $result2->fetch_assoc()) {
                                    ?>
                                        <li><?php echo $data2['nm_service']; ?></li>
                                    <?php } ?>
                            </td>
                            <td class="text-center">
                            <?php
                                if ($status == 'Belum Dibayar') {
                                    echo "<span class='badge badge-warning'>" . $status . "</span>";
                                } elseif ($status == 'Sudah Dibayar') {
                                    echo "<span class='badge badge-secondary'>" . $status . "</span>";
                                } elseif ($status == 'Disetujui') {
                                    echo "<span class='badge badge-info'>" . $status . "</span> </br>";
                                    echo "<span style='font-size: small;'>Silahkan datang ke toko membawa unit jam <br> atau mengirimkannya lewat kurir ke Toko <br> Hubungi WA Toko </span>";
                                    echo "<a href='https://api.whatsapp.com/send?phone=+6281912271201&text=Hai, saya ingin mengantar jam saya melalui kurir.' target='_blank'>
                                            <img src='assets/img/wa.png' width='30px'></a>";
                                } elseif ($status == 'Sedang Dikerjakan') {
                                    echo "<span class='badge badge-warning'>" . $status . "</span> </br>";
                                    echo "<span style='font-size: small;'>Jam sedang proses service </span>";
                                } elseif ($status == 'Service Selesai') {
                                    echo "<span class='badge badge-primary'>" . $status . "</span> </br>";
                                    echo "<span style='font-size: small;'>Silahkan ambil unit jam ke toko, <br> atau silahkan hubungi WA toko <br> jika ingin melalui kurir </span>";
                                    echo "<a href='https://api.whatsapp.com/send?phone=+6281912271201&text=Hai, saya ingin mengambil jam saya melalui kurir.' target='_blank'>
                                            <img src='assets/img/wa.png' width='30px'></a>";
                                } elseif ($status == 'Selesai') {
                                    echo "<span class='badge badge-success'>" . $status . "</span>";
                                }
                                ?>

                            </td>

                            <td>Rp. <?php echo number_format($data['total_order']) ?></td>
                            <td class="text-left">
                                <?php if ($data['status'] == 'Belum Dibayar') { ?>
                                    <a href="konfirmasi-pembayaran-service.php?id=<?php echo $id_order; ?>" class="btn btn-warning btn-sm">Konfirmasi Pembayaran</a>
                                <?php } elseif ($data['status'] == 'Sudah Dibayar' || $data['status'] == 'Menyiapkan Barang') { ?>
                                    <a href="nota-service.php?id=<?php echo $id_order; ?>" class="btn btn-secondary btn-sm">Nota</a>
                                <?php } elseif ($data['status'] == 'Disetujui') { ?>
                                    <a href="nota-service.php?id=<?php echo $id_order; ?>" class="btn btn-secondary btn-sm">Nota</a>
                                <?php } elseif ($data['status'] == 'Sedang Diproses') { ?>
                                    <a href="nota-service.php?id=<?php echo $id_order; ?>" class="btn btn-secondary btn-sm">Nota</a>
                                <?php } elseif ($data['status'] == 'Service Selesai') { ?>
                                    <a href="nota-service.php?id=<?php echo $id_order; ?>" class="btn btn-secondary btn-sm">Nota</a>
                                    <button class="btn btn-danger btn-sm" onclick="validate();">Pesanan Diterima</button>
                                    <!-- <a href="konfirmasi-barang.php?id=<?php echo $id_order; ?>" class="btn btn-danger btn-sm konfirmasi">Konfirmas Barang Diterima</a> -->
                                    <script>
                                        function validate() {
                                            swal({
                                                title: "Konfirmasi!",
                                                text: "Apakah Anda Ingin Mengkonfirmasi Barang ?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            }).then((willDelete) => {
                                                if (willDelete) {
                                                    swal({
                                                        title: "Konfirmasi!",
                                                        text: "Terimakasih Sudah Melakukan Konfirmasi",
                                                        icon: "success",
                                                    }).then(okay => {
                                                        if (okay) {
                                                            window.location.href =
                                                                "konfirmasi-service.php?id=<?php echo $id_order; ?>";
                                                        };
                                                    });
                                                } else {
                                                    swal("Lakukan Konfirmasi Jika Barang Sudah Diterima");
                                                }
                                            });
                                        }
                                    </script>
                                <?php } elseif ($data['status'] == 'Selesai') { ?>
                                    <a href="nota-service.php?id=<?php echo $id_order; ?>" class="btn btn-secondary btn-sm">Nota</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>